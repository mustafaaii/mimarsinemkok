<!DOCTYPE HTML>

<html lang="en">
<head>
    <?php include 'header.php' ?>
    <?php

    try
    {

        $dsn = 'mysql:host=94.73.147.156;dbname=u0198406_db947;charset=utf8';
        $user = 'u0198406_web';
        $password = 'IPwl59G3CUou33L';

        try
        {
            $db = new PDO($dsn, $user, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    catch (PDOException $e)
    {
        echo "Connection failed : ". $e->getMessage();
    }

    ?>
</head>
<body>
<!--Loader -->
<?php include 'other/loader.php'?>
<!-- loader end  -->
<!-- main start  -->
<div id="main">
    <!-- header start  -->
    <?php include 'other/header.php'?>
    <!-- header end -->
    <!-- left-panel -->
    <?php include 'other/navbar.php'?>
    <!-- left-panel end -->
    <!-- share-button -->
    <!-- share-button end -->
    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder" data-pagetitle="Home Carousel">
            <!-- nav-holder-->
            <?php include 'other/menu.php'?>
            <?php include 'other/overlay.php'?>
            <?php

            $cek = $db->query("select * from iletisim_table where id ='1'",PDO::FETCH_ASSOC);
            $cek->execute();
            $data = $cek->fetch();

            ?>
            <!-- nav-holder end -->
            <!--content-->
            <div class="content">
                <!--fixed-column-wrap-->
                <div class="fixed-column-wrap">
                    <div class="pr-bg"></div>
                    <div class="fixed-column-wrap-content map-mobile">
                        <div class="scroll-nav-wrap color-bg">
                            <div class="carnival">AŞAĞI KAYDIR</div>
                            <div class="snw-dec">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar-wrap bot-element">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="map-container mc_big">

                                <iframe src="<?php echo $data['company_maps']?>"  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                        </div>
                    </div>
                    <!--fixed-column-wrap-content end-->
                </div>
                <!--fixed-column-wrap end-->
                <!--column-wrap-->
                <div class="column-wrap">
                    <!--column-wrap-container -->
                    <div class="column-wrap-container fl-wrap">

                        <div class="col-wc_dec col-wc_dec2">
                            <div class="pr-bg pr-bg-white"></div>
                        </div>
                        <!--section-->
                        <section id="sec1" class="small-padding">
                            <div class="container">
                                <div class="column-wrap-content fl-wrap">
                                    <div class="column-wrap-media fl-wrap">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <img src="assets/images/all/7.jpg"  class="respimg" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="sec2" class="small-padding">



                            <div class="container">



                                <div class="split-sceen-content_title fl-wrap">

                                    <div class="row">
                                        <div class="col-lg-1">
                                            <span style="letter-spacing: 1px;text-transform: capitalize;font-size: 16px;float: left;"><b><span class="iconify" data-icon="entypo:mail" data-inline="false"></span></b> </span>
                                        </div>
                                        <div class="col-lg-9">
                                            <a href="mailto:info@mimarsinemkok.com"  style="letter-spacing: 1px;text-transform: lowercase;font-size: 16px;float: left"><?php echo $data['company_mail']?></a>
                                        </div>
                                    </div>
                                    <div style="height: 10px"></div>
                                    <div class="row pt-4">
                                        <div class="col-lg-1">
                                            <span style="letter-spacing: 1px;text-transform: capitalize;font-size: 16px;float: left"><b><span class="iconify" data-icon="bx:bxs-phone-call" data-inline="false"></span></b></span>
                                        </div>
                                        <div class="col-lg-9">
                                            <a href="tel:+4(897)56412322"  style="letter-spacing: 1px;text-transform: lowercase;font-size: 16px;float: left"><?php echo $data['company_phone']?></a>
                                        </div>
                                    </div>
                                    <div style="height: 10px"></div>
                                    <div class="row pt-4">
                                        <div class="col-lg-1">
                                            <span style="letter-spacing: 1px;text-transform: capitalize;font-size: 16px;float: left"><b><span class="iconify" data-icon="entypo:address" data-inline="false"></span></b></span>
                                        </div>
                                        <div class="col-lg-9">
                                            <a href="#"  style="letter-spacing: 1px;text-transform: lowercase;font-size: 16px;float: left;text-align: left;text-transform: capitalize"><?php  $datareplace =  $data['company_address'];  $datareplace_1 = str_replace("<p>","",$datareplace);  echo str_replace("</p>","",$datareplace_1);?></a>
                                        </div>
                                    </div>
                                    <div style="height: 10px"></div>
                                    <div class="row pt-4">
                                        <div class="col-lg-1">
                                            <span style="letter-spacing: 1px;text-transform: capitalize;font-size: 16px;float: left;"><b><span class="iconify" data-icon="dashicons:whatsapp" data-inline="false"></span></b></span>
                                        </div>
                                        <div class="col-lg-9">
                                            <a href="https://wa.me/<?php echo str_replace(" ","",$data['company_whatsapp']); ?>?text=Merhaba Bilgi Almak İstiyorum"  style="letter-spacing: 1px;text-transform: lowercase;font-size: 16px;float: left;text-transform: capitalize">Whatsapp Görüşmesi</a>
                                        </div>
                                    </div>

                                    <div style="height: 50px"></div>

                                    <div class="pr-bg pr-bg-white"></div>
                                    <h3 style="text-transform: capitalize;letter-spacing: 0.1px">Bizimle İletişime geçebilirsiniz</h3>
                                    <p>Bize mail gönderin. En kısa sürede maillerinize cevap vereceğiz. </p>
                                </div>

                                <div id="contact-form">
                                    <form  class="custom-form" method="post" action="contact.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="man_name" id="man_name" placeholder="Adınız *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="surname" id="surname" placeholder="Soyadınız *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text"  name="mail" id="mail" placeholder="Mail Adresiniz *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text"  name="phone" id="phone" placeholder="Telefon Numaranız *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="subject" id="subject" data-placeholder="Subject" class="chosen-select sel-dec">
                                                        <option value="0">Konu</option>
                                                        <option value="Çizim">Çizim</option>
                                                        <option value="Destek">Destek</option>
                                                        <option value="Proje">Proje</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Mesajınız:"></textarea>
                                            <div class="clearfix"></div>
                                            <button type="submit" class="btn float-btn flat-btn color-bg" name="submit" onclick="kontrol();" id="submit">Mesajı Gönder <i class="fal fa-long-arrow-right"></i></button>
                                        </fieldset>
                                    </form>

                                    <?php

                                        error_reporting(0);
                                        $name = trim(strip_tags($_POST['man_name']));
                                        $surname = trim(strip_tags($_POST['surname']));
                                        $mail = trim(strip_tags($_POST['mail']));
                                        $phone = trim(strip_tags($_POST['phone']));
                                        $subject = trim(strip_tags($_POST['subject']));
                                        $comments = trim(strip_tags($_POST['comments']));
                                        $verisor = $db->prepare("INSERT INTO mail_table set firstname=?,  surname=?, mail=?, phone=?, subject=? , comments=?");
                                        $kaydet=$verisor->execute(array($name, $surname, $mail, $phone, $subject, $comments));
                                    ?>


                                </div>
                                <!-- contact form  end-->

                            </div>
                        </section>
                        <!--section end-->
                    </div>
                    <!--column-wrap-container end-->
                </div>
                <!--column-wrap end-->
                <div class="limit-box fl-wrap"></div>
            </div>
            <!--content end -->
            <!-- share-wrapper-->
            <?php include 'other/close.php'?>
            <!-- share-wrapper  end -->
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<?php include 'footer.php' ?>
<style>
    .iconify { width: 24px; height: 24px; }
</style>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>
