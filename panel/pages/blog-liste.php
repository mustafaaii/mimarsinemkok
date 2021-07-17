
<?php include 'other/page-header.php'; ?>



<!-- Content area -->
<div class="content">
    <?php
    if(isset($_GET['delete']))
    {
        echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Yazı Silme Başarılı.
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
                                <a href="default.php?page=blog-ekle"  class="btn btn-success" style="border-radius:0px"><i class="icon-add pr-1"></i> Yeni Yazı</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Yazı ID</th>
                            <th>Yazı Resmi</th>
                            <th>Yazı Başlığı</th>
                            <th>Yazı Tarihi/Saat</th>
                            <th>Yazı Ekleyen</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = $db->query("SELECT * FROM blog_table", PDO::FETCH_ASSOC);
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
                                            <img src="http://localhost:8080/mimar/panel/<?php echo $row['blog_image'];?>" width="270px" height="140px"/>
                                        </div>
                                    </td>
                                    <td><?php echo $row['blog_tittle'];?></td>
                                    <td><?php echo $row['blog_date'];?></td>
                                    <td><?php echo $row['blog_authors'];?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="default.php?page=blog_edit&blog_id=<?php echo $row['id'];?>"   class="btn btn-primary btn-sm btn-block"> <i class="icon-pencil pr-1" style="font-size:12px"></i> Düzenle</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="delete.php?delete=blog_text&delete_id=<?php echo $row['id'];?>"  class="btn btn-danger btn-sm btn-block" style="font-size:12px"><i class="icon-trash pr-1" ></i> Sil</a>
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

