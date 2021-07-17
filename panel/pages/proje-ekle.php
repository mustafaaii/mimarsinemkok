
<?php include 'other/page-header.php'; ?>

<div class="content">


    <?php
    if(isset($_GET['islem']))
    {
        echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Proje Ekleme Başarılı .Gerekli düzenlemeleri listeden yapabilirsiniz.
                </div>
                ";
    }
    ?>

    <div class="card">
        <div class="card-body">
            <form action="data/insert.php?insert=project" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <input  type="file" class="dropify-slide" id="proje_resmi"  name="proje_resmi" />
                    </div>
                    <div class="row">
                        <div class="col-12 pt-2 text-muted">
                            <span class="iconify" data-icon="bi:info-circle-fill" data-inline="false" style="float: left;"></span>
                            <div  style="float: left;padding-left: 5px;font-size: 15px;margin-top: -3px;word-spacing: 0.01px"> Slide resmi maksimum <b>5 MB</b> boyutunda olmalıdır. </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8 pt-4">
                                <input name="proje_basligi" id="proje_basligi" class="form-control" placeholder="Proje Başlığı">
                            </div>
                            <div class="col-4 pt-4">
                                <select name="proje_kategorisi" id="proje_kategorisi" class="form-control">
                                    <option  value="0" >Proje Kategorisi Seçiniz</option>
                                    <?php
                                    $query = $db->query("SELECT * FROM category_table", PDO::FETCH_ASSOC);
                                    if ( $query->rowCount())
                                    {
                                        foreach( $query as $row )
                                        {
                                            ?>
                                            <option  value="<?php echo $row['id'] ?>" ><?php echo $row['category_name'] ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 pt-4">
                                <textarea class="ckeditor"  name="proje_aciklama" rows="14" cols="14"></textarea>
                            </div>
                            <div class="col-12 pt-4">
                                <input name="proje_key" id="proje_key" class="form-control" placeholder="Anahtar Kelimeler">
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-primary" style="float: left"> Proje Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>