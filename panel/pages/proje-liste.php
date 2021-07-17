
<?php include 'other/page-header.php'; ?>



<!-- Content area -->
<div class="content">

    <?php
    if(isset($_GET['delete']))
    {
        echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Proje Silme Başarılı.
                </div>
                ";
    }
    ?>

    <div class="row">
        <div class="col-12">
            <!-- Basic table -->
            <div class="card">
                <div class="card-header" style="float: right">
                    <div class="row">
                        <div class="col-10">
                        </div>
                        <div class="col-2">
                            <h5 class="card-title"  style="float: right">
                                <a href="default.php?page=proje-ekle"  class="btn btn-success" style="border-radius:0px"><i class="icon-add pr-1"></i> Yeni Proje</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Proje ID</th>
                            <th>Proje Resmi</th>
                            <th>Proje Başlığı</th>
                            <th>Proje Kategori</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = $db->query("SELECT * FROM proje_table", PDO::FETCH_ASSOC);
                        if ( $query->rowCount())
                        {
                            foreach( $query as $row )
                            {
                                ?>
                                <tr>
                                    <td >
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <div style="width: 280px;height:140px">
                                            <img src="http://mimarsinemkok.com/panel/<?php echo $row['proje_image'];?>" width="270px" height="140px"/>
                                        </div>
                                    </td>
                                    <td><?php echo $row['proje_name'];?></td>
                                    <td><?php
                                         $id = $row['kategori_id'];
                                        $cat = $db->query("select * from category_table where id = '$id' ",PDO::FETCH_ASSOC);
                                        $cat->execute();
                                        $datalist = $cat->fetch();

                                        if(empty($datalist))
                                        {
                                            echo " Kategori Yok. Lütfen Bu Proje için Kategori Ekleyin";
                                        }
                                        else
                                        {
                                            echo $datalist['category_name'];
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="default.php?page=project_edit&project_id=<?php echo $row['id'];?>"   class="btn btn-primary btn-sm btn-block"> <i class="icon-pencil pr-1" style="font-size:12px"></i> Düzenle</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="delete.php?delete=project&delete_id=<?php echo $row['id'];?>"  class="btn btn-danger btn-sm btn-block" style="font-size:12px"><i class="icon-trash pr-1" ></i> Sil</a>
                                                <input value="" name="$delete_slide_id" type="text" hidden>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /basic table -->
        </div>
    </div>
</div>
<!-- /content area -->