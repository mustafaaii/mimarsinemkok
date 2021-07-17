

<?php include 'other/page-header.php'; ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<div class="card">


    <div class="card-header">
    </div>
    <div class="card-body">
        <?php
        if(isset($_GET['islem']))
        {
            if($_GET['islem']=="basarili")
            {
                echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Slide Düzenleme Başarılı .Gerekli düzenlemeleri listeden yapabilirsiniz.
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
        if(isset($_GET['slide_id']))
        {
            $slideid= $_GET['slide_id'];
            $cek = $db->query("select * from slide_table where id = '$slideid' ",PDO::FETCH_ASSOC);
            $cek->execute();
            $data = $cek->fetch();
        }
        ?>

        <style>
            .iconify { width: 18px; height: 18px; }
        </style>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <?php
                if(isset($_GET['project_id']))
                {
                    $project_id= $_GET['project_id'];
                    $cek = $db->query("select * from proje_table where id = '$project_id' ",PDO::FETCH_ASSOC);
                    $cek->execute();
                    $data = $cek->fetch();
                }
                ?>
                <form method="POST" action="data/insert.php?edit=slide_image&slide_id=<?php echo $_GET['slide_id'] ?>" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12" >
                                <div  style="background-image: url(http://mimarsinemkok.com/panel/<?php echo $data['slide_image'];?>);background-size: cover;background-position: center center">
                                    <input  type="file" class="dropify-slide" id="slide_image"  name="slide_image"   />
                                </div>
                                <div class="row">
                                    <div class="col-12 pt-2 text-muted">
                                        <span class="iconify" data-icon="bi:info-circle-fill" data-inline="false" style="float: left;"></span>
                                        <div  style="float: left;padding-left: 5px;font-size: 15px;margin-top: -3px;word-spacing: 0.01px">Resim maksimum <b>5 MB</b> boyutunda olmalıdır. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-4">
                            <button type="submit" name="upload"  class="btn btn-primary" style="float: left;border-radius: 0px">
                                Resmi Değiştir
                            </button>
                        </div>
                    </div>
                </form>


                <form action="data/insert.php?edit=slide&slide_id=<?php echo $_GET['slide_id'] ?>" method="post"  enctype="multipart/form-data">
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 pt-4">
                                    <div class="input-group">
                                        <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-pencil"></i></span></span>
                                        <input type="text" class="form-control" name="slide_tittle" placeholder="Slider Başlığı Giriniz" value="<?php echo $data['slide_tittle']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 pt-4">
                                    <div class="input-group">
                                        <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-pencil"></i></span></span>
                                        <input type="text" class="form-control" name="slide_alt_tittle" placeholder="Slider Alt Başlığı Giriniz" value="<?php echo $data['slide_tittle']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 pt-4">
                                    <label class="text-muted"><i class="icon-file-text"></i> <b>Slide Açıklaması Giriniz.</b></label>
                                    <textarea id="slide_text" name="slide_text"  rows="14" cols="14" class="ckeditor" runat="server"><?php echo $data['slide_text']; ?></textarea>
                                </div>
                                <div class="col-12 pt-5">
                                    <div class="input-group">
                                        <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-key"></i></span></span>
                                        <input type="text" class="form-control"name="slide_key" placeholder="Proje Anahtar Kelimelerini Giriniz" value="<?php echo $data['slide_key']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-5">
                            <button type="submit" class="btn btn-primary" style="float: left"> Proje Güncelle</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>
</div>