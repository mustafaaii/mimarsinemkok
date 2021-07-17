<?php include 'other/page-header.php'; ?>



<div class="content">
    <?php
    if(isset($_GET['islem']))
    {
        echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Proje Ekleme Başarılı .Gerekli düzenlemeleri listeden yapabilirsiniz.
                </div>
                ";
    }
    ?>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kategori ID</th>
                                <th>Kategori Başlığı</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $query = $db->query("SELECT * FROM category_table", PDO::FETCH_ASSOC);
                            if ( $query->rowCount())
                            {
                                foreach( $query as $row )
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['category_name'];?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="edit.php?edit_id=<?php echo $row['id'];?>"   class="btn btn-primary btn-sm btn-block"> <i class="icon-pencil pr-1" style="font-size:12px"></i> Düzenle</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="delete.php?delete=category&delete_id=<?php echo $row['id'];?>"  class="btn btn-danger btn-sm btn-block" style="font-size:12px"><i class="icon-trash pr-1" ></i> Sil</a>
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
            </div>
        </div>
        <div class="col-4 sticky">
            <div class="card">
                <div class="card-body">
                    <form action="data/insert.php?insert=category" method="post">
                        <div class="row">
                            <div class="col-12">
                                <input name="category_name" id="category_name" class="form-control" placeholder="Kategori Adı">
                            </div>
                            <div class="col-12 pt-4">
                                <input name="category_key" id="category_key" class="form-control" placeholder="Kategor Anahtar Kelimeler">
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-primary" style="float: left"> Kategori Ekle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>




</div>
