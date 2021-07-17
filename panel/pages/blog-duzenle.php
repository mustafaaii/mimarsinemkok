<?php include 'other/page-header.php'; ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<div class="card">

    <div class="card-header">
    </div>
    <div class="card-body">
        <?php
        if(isset($_GET['blog_id']))
        {
            $blog_id= $_GET['blog_id'];
            $cek = $db->query("select * from blog_table where id = '$blog_id' ",PDO::FETCH_ASSOC);
            $cek->execute();
            $data = $cek->fetch();
        }
        ?>

        <?php
        if(isset($_GET['islem']))
        {
            echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> Yazı Düzenleme Başarılı .Gerekli düzenlemeleri listeden yapabilirsiniz.
                </div>
                ";
        }
        ?>
        <form method="POST" action="data/insert.php?edit=blog_images&blog_id=<?php echo $_GET['blog_id'] ?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12">
                    <div class="col-12" >
                        <div  style="background-image: url(http://mimarsinemkok.com/mimar/panel/<?php echo $data['blog_image'];?>);background-size: cover;background-position: center center">
                            <input  type="file" class="dropify-slide" id="blog_image"  name="blog_image"   />
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


        <form action="data/insert.php?edit=blog&blog_id=<?php echo $_GET['blog_id'] ?>" method="post"  enctype="multipart/form-data">
            <div class="row pt-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 pt-4">
                            <div class="input-group">
                                <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-pencil"></i></span></span>
                                <input type="text" class="form-control" name="blog_tittle" placeholder="Slider Başlığı Giriniz" value="<?php echo $data['blog_tittle']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-4">
                    <label class="text-muted"><i class="icon-file-text"></i> <b>Slide Açıklaması Giriniz.</b></label>
                    <textarea id="slide_text" name="blog_text"  rows="14" cols="14" class="ckeditor" runat="server"><?php echo $data['blog_text']; ?></textarea>
                </div>
                <div class="col-12 pt-5">
                    <div class="input-group">
                        <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-key"></i></span></span>
                        <input type="text" class="form-control"name="blog_key" placeholder="Slider Anahtar Kelimelerini Giriniz" value="<?php echo $data['blog_key']; ?>">
                    </div>
                </div>
                <div class="col-12 pt-5">
                    <button type="submit" class="btn btn-primary" style="float: left"> Slide Güncelle</button>
                </div>
            </div>



        </form>
    </div>
</div>