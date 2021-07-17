<?php include 'other/page-header.php'; ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>



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
        <form method="POST" action="data/insert.php?edit=project_image&project_id=<?php echo $_GET['project_id'] ?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-12">
                    <div class="col-12" >
                        <div  style="background-image: url(http://mimarsinemkok.com/panel/<?php echo $data['proje_image'];?>);background-size: cover;background-position: center center">
                            <input  type="file" class="dropify-slide" id="project_image"  name="project_image"   />
                        </div>
                        <div class="row">
                            <div class="col-12 pt-2 text-muted">
                                <span class="iconify" data-icon="bi:info-circle-fill" data-inline="false" style="float: left;"></span>
                                <div  style="float: left;padding-left: 5px;font-size: 15px;margin-top: -3px;word-spacing: 0.01px"> Proje resmi maksimum <b>5 MB</b> boyutunda olmalıdır. </div>
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


        <form action="data/insert.php?edit=project&project_id=<?php echo $_GET['project_id'] ?>" method="post"  enctype="multipart/form-data">
            <div class="row pt-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8 pt-4">
                            <div class="input-group">
                                <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-pencil"></i></span></span>
                                <input type="text" class="form-control" name="project_tittle" placeholder="Slider Başlığı Giriniz" value="<?php echo $data['proje_name']; ?>">
                            </div>
                        </div>
                        <div class="col-4 pt-4">
                            <select name="project_category" id="project_category" class="form-control">
                                <option  value="0" >Proje Kategorisi Seçiniz</option>
                                <?php
                                $query = $db->query("SELECT * FROM category_table", PDO::FETCH_ASSOC);
                                if ( $query->rowCount())
                                {
                                    foreach( $query as $row )
                                    {
                                        ?>
                                        <option  value="<?php echo $row['id'] ?>" <?php if($data['kategori_id']==$row['id']){ echo "selected";} ?>><?php echo $row['category_name'] ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 pt-4">
                            <label class="text-muted"><i class="icon-file-text"></i> <b>Slide Açıklaması Giriniz.</b></label>
                            <textarea id="project_text" name="project_text"  rows="14" cols="14" class="ckeditor" runat="server"><?php echo $data['proje_text']; ?></textarea>
                        </div>
                        <div class="col-12 pt-5">
                            <div class="input-group">
                                <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-key"></i></span></span>
                                <input type="text" class="form-control"name="project_key" placeholder="Proje Anahtar Kelimelerini Giriniz" value="<?php echo $data['proje_key']; ?>">
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