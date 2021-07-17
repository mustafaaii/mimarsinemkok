
<?php include 'other/page-header.php'; ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<div class="content">
    <?php
    if(isset($_GET['islem']))
    {
        if($_GET['islem']=="basarili")
        {
            echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Slide Ekleme Başarılı .Gerekli düzenlemeleri listeden yapabilirsiniz.
                </div>
                ";
        }
        else
        {
            echo "<script> $('#alert_success').hide(); </script>";
        }
    }
    ?>
    <?php

    $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $EditUrlTrim = substr($url, 65, 30);

    ?>

    <div class="card">
        <div class="card-body">
            <form action="data/insert.php?insert=slide" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <input  type="file" class="dropify-slide" id="slide_image"  name="slide_image" />
                    </div>
                    <div class="row">
                        <div class="col-12 pt-2 text-muted">
                            <span class="iconify" data-icon="bi:info-circle-fill" data-inline="false" style="float: left;"></span>
                            <div  style="float: left;padding-left: 5px;font-size: 15px;margin-top: -3px;word-spacing: 0.01px"> Resim maksimum <b>5 MB</b> boyutunda olmalıdır. </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8 pt-4">
                                <input name="slide_tittle" id="slide_tittle" class="form-control" placeholder="Slide Başlığı">
                            </div>
                            <div class="col-8 pt-4">
                                <input name="slide_alt_tittle" id="slide_alt_tittle" class="form-control" placeholder="Slide Alt Başlığı">
                            </div>
                            <div class="col-12 pt-4">
                                <textarea class="ckeditor"  name="slide_text" rows="14" cols="14"></textarea>
                            </div>
                            <div class="col-12 pt-4">
                                <input name="slide_key" id="slide_key" class="form-control" placeholder="Anahtar Kelimeler">
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-primary" style="float: left"> Slide Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>



</div>
