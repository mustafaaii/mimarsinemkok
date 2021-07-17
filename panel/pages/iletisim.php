<?php include 'other/page-header.php'; ?>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<div class="content">


    <?php

    if(isset($_GET['islem'])) {
        if ($_GET['islem'] == "basarili") {
            echo "
                <div class=\"alert alert-success alert-styled-left alert-arrow-left alert-dismissible\">
                    <span class=\"font-weight-semibold\">Tebrikler!</span> İletişim Bilgileri Güncellendi.
                </div>
                ";
        }
    }


    ?>
    <?php

    $cek = $db->query("select * from iletisim_table where id ='1'",PDO::FETCH_ASSOC);
    $cek->execute();
    $data = $cek->fetch();

    ?>

    <div class="card">
        <div class="card-body">
            <form action="data/insert.php?insert=contact" method="post">

                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="icon-phone"></i></span></span>
                                        <input class="form-control" name="company_phone" id="company_phone" placeholder="Telefon Numaranız" value="<?php echo $data['company_phone'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="icon-envelop"></i></span></span>
                                        <input class="form-control" name="company_mail" id="company_mail" placeholder="Mail Adresiniz" value="<?php echo $data['company_mail'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><span class="iconify" data-icon="simple-icons:whatsapp" data-inline="false"></span></span></span>
                                        <input class="form-control" name="company_whatsapp" id="company_whatsapp" placeholder="Whatsapp Adresiniz" value="<?php echo $data['company_whatsapp'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="icon-facebook"></i></span></span>
                                        <input class="form-control" name="company_facebook" id="company_facebook" placeholder="Facebook Adresiniz" value="<?php echo $data['company_facebook'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="icon-instagram"></i></span></span>
                                        <input class="form-control" name="company_instagram" id="company_instagram" placeholder="Instagram Adresiniz" value="<?php echo $data['company_instagram'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="icon-twitter"></i></span></span>
                                        <input class="form-control" name="company_twitter" id="company_twitter" placeholder="Twitter Adresiniz" value="<?php echo $data['company_twitter'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 pt-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend"><span class="input-group-text"><i class="iconify" data-icon="simple-icons:googlemaps" data-inline="false"></i></span></span>
                                        <input class="form-control" name="company_maps" id="company_maps" placeholder="Google Haritalar Url'eniz" value="<?php echo $data['company_maps'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <textarea  id="editor-readonly" name="company_address" rows="14" cols="14"><?php echo $data['company_address'] ?></textarea>
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-primary" style="float: left">Bilgileri Güncelle</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
