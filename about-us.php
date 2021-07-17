<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php include 'header.php' ?>

</head>
<body>
<?php include 'other/loader.php'?>
<div id="main">
    <?php include 'other/header.php'?>
    <?php include 'other/navbar.php'?>
    <div id="wrapper">
        <div class="content-holder" data-pagetitle="Home Carousel">
            <?php include 'other/menu.php'?>
            <?php include 'other/overlay.php'?>
            <div class="content">
                <!--fixed-column-wrap-->
                <div class="fixed-column-wrap">
                    <div class="pr-bg"></div>
                    <div class="fixed-column-wrap-content">
                        <div class="scroll-nav-wrap color-bg">
                            <div class="carnival">Aşağı Kaydır</div>
                            <div class="snw-dec">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg" data-bg="assets/images/bg/12.jpg"></div>
                        <div class="overlay" ></div>
                        <div class="progress-bar-wrap bot-element">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="fixed-column-wrap_title first-tile_load">
                            <h2>Hakkımızda</h2>
                        </div>
                        <div class="fixed-column-dec"></div>
                    </div>
                </div>
                <div class="column-wrap">
                    <div class="column-wrap-container fl-wrap">
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
                               /* echo 'Connection failed: ' . $e->getMessage();*/
                            }
                        }
                        catch (PDOException $e)
                        {
                            /*echo "Connection failed : ". $e->getMessage();*/
                        }

                        ?>
                        <?php
                        $cek = $db->query("select * from kurumsal where kurumsal_id= '1' ",PDO::FETCH_ASSOC);
                        $cek->execute();
                        $data = $cek->fetch();

                        ?>

                        <section id="sec1" class="small-padding">
                            <div class="container">
                                <div class="split-sceen-content_title fl-wrap">
                                    <div class="pr-bg pr-bg-white"></div>
                                </div>
                                <div class="column-wrap-content fl-wrap">
                                    <div class="column-wrap-media fl-wrap">
                                        <div class="pr-bg pr-bg-white"></div>
                                        <img src="assets/images/all/8.jpg"  class="respimg" alt="">
                                    </div>
                                    <div class="column-wrap-text">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="pr-subtitle">
                                                    <?php echo $data['kurumsal_baslik'] ?>
                                                    <div class="pr-bg pr-bg-white"></div>
                                                </h3>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <div style="font-size: 14px;text-align: left"><?php $Replace_Text= $data['kurumsal_text'];  $Replace_Text_2 =  str_replace("<p>"," ",$Replace_Text);  echo str_replace("</p>"," ",$Replace_Text_2);   ?></div>
                                                <div style="padding-top: 16px;text-align: left"><?php echo $data['kurumsal_key'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
                <div class="limit-box fl-wrap"></div>
            </div>
            <?php include 'other/close.php'?>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>