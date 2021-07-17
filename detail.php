
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
    <?php include 'other/share.php'?>
    <!-- share-button end -->
    <!-- wrapper  -->

    <?php
    if(isset($_GET['project_id']))
    {
        ?>
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder" data-pagetitle="Home Carousel">
                <!-- nav-holder-->
                <?php include 'other/menu.php'?>
                <?php include 'other/overlay.php'?>
                <!-- nav-holder end -->
                <!-- fw-carousel-wrap -->
                <?php

                $id = $_GET['project_id'];
                $cat = $db->query("select * from proje_table where id = '$id' ",PDO::FETCH_ASSOC);
                $cat->execute();
                $datalist = $cat->fetch();

                ?>
                <div class="content">
                    <!--fixed-column-wrap-->
                    <div class="fixed-column-wrap">
                        <div class="pr-bg"></div>
                        <!--fixed-column-wrap-content-->
                        <div class="fixed-column-wrap-content">
                            <div class="scroll-nav-wrap color-bg">
                                <div class="carnival">AŞAĞI KAYDIR</div>
                                <div class="snw-dec">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg" data-bg="assets/images/bg/14.jpg"></div>
                            <div class="overlay"></div>
                            <div class="progress-bar-wrap bot-element">
                                <div class="progress-bar"></div>
                            </div>
                            <!--fixed-column-wrap_title-->
                            <div class="fixed-column-wrap_title first-tile_load">
                                <h2 style="text-transform: capitalize;letter-spacing: 0.3px;font-size: 22px"><?php echo $datalist['proje_name'] ?></h2>
                            </div>
                            <!--fixed-column-wrap_title end-->
                            <div class="fixed-column-dec"></div>
                        </div>
                        <!--fixed-column-wrap-content end-->
                    </div>
                    <!--fixed-column-wrap end-->
                    <!--column-wrap-->
                    <div class="column-wrap">
                        <!--column-wrap-container -->
                        <div class="column-wrap-container fl-wrap">
                            <!--section-->
                            <section   class="small-padding">
                                <div class="container">

                                    <div class="column-wrap-content fl-wrap">
                                        <div class="column-wrap-media fl-wrap">
                                            <img src="http://mimarsinemkok.com/panel/<?php echo $datalist['proje_image']; ?>"  class="respimg" alt="">
                                        </div>
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3 style="text-transform: capitalize;capitalize;letter-spacing: 0.1px;"><?php echo $datalist['proje_name'] ?></h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="font-size: 16px;text-align: left"><?php $Replace_Text= $datalist['proje_text'];  $Replace_Text_2 =  str_replace("<p>"," ",$Replace_Text);  echo str_replace("</p>"," ",$Replace_Text_2);   ?></div>
                                                <div style="padding-top: 16px;text-align: left"><?php echo $datalist['proje_key'] ?></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- fw-carousel-wrap end -->
                <!-- share-wrapper-->
                <?php include 'other/close.php'?>
                <!-- share-wrapper  end -->
            </div>
            <!-- content-holder end -->
        </div>
    <?php
    }
    else if(isset($_GET['slide_id']))
    {
    ?>
        <div id="wrapper">
            <div class="content-holder" data-pagetitle="Home Carousel">
                <?php include 'other/menu.php'?>
                <?php include 'other/overlay.php'?>
                <?php

                $id = $_GET['slide_id'];
                $cat = $db->query("select * from slide_table where id = '$id' ",PDO::FETCH_ASSOC);
                $cat->execute();
                $datalist = $cat->fetch();

                ?>
                <div class="content">
                    <!--fixed-column-wrap-->
                    <div class="fixed-column-wrap">
                        <div class="pr-bg"></div>
                        <!--fixed-column-wrap-content-->
                        <div class="fixed-column-wrap-content">
                            <div class="scroll-nav-wrap color-bg">
                                <div class="carnival">AŞAĞI KAYDIR</div>
                                <div class="snw-dec">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg" data-bg="assets/images/bg/14.jpg"></div>
                            <div class="overlay"></div>
                            <div class="progress-bar-wrap bot-element">
                                <div class="progress-bar"></div>
                            </div>
                            <div class="fixed-column-wrap_title first-tile_load">
                                <h2 style="text-transform: capitalize;letter-spacing: 0.1px;"><?php echo $datalist['slide_tittle'] ?></h2>
                            </div>
                            <div class="fixed-column-dec"></div>
                        </div>
                    </div>
                    <div class="column-wrap">
                        <div class="column-wrap-container fl-wrap">
                            <section   class="small-padding">
                                <div class="container">
                                    <div class="column-wrap-content fl-wrap">
                                        <div class="column-wrap-media fl-wrap">
                                            <img src="http://mimarsinemkok.com/panel/<?php echo $datalist['slide_image'];?>"  class="respimg" alt="">
                                        </div>
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3 style="text-transform: capitalize;capitalize;letter-spacing: 0.1px;"><?php echo $datalist['slide_tittle'] ?></h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="font-size: 14px;text-align: left"><?php $Replace_Text= $datalist['slide_text'];  $Replace_Text_2 =  str_replace("<p>"," ",$Replace_Text);  echo str_replace("</p>"," ",$Replace_Text_2);   ?></div>
                                                <div style="padding-top: 16px;text-align: left"><?php echo $datalist['slide_key'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- fw-carousel-wrap end -->
                <!-- share-wrapper-->
                <?php include 'other/close.php'?>
                <!-- share-wrapper  end -->
            </div>
            <!-- content-holder end -->
        </div>
    <?php
    }
    else if(isset($_GET['blog_id']))
    {
    ?>
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder" data-pagetitle="Our Last News">
                <!-- nav-holder-->
                <?php include 'other/menu.php'?>
                <?php include 'other/overlay.php'?>
                <!-- nav-holder end -->
                <!-- fw-carousel-wrap -->
                <?php

                $id = $_GET['blog_id'];
                $cat = $db->query("select * from blog_table where id = '$id' ",PDO::FETCH_ASSOC);
                $cat->execute();
                $datalist = $cat->fetch();

                ?>
                <div class="content">
                    <!--fixed-column-wrap-->
                    <div class="fixed-column-wrap">
                        <!--fixed-column-wrap-content-->
                        <div class="pr-bg"></div>
                        <div class="fixed-column-wrap-content">
                            <div class="scroll-nav-wrap color-bg">
                                <div class="carnival">AŞAĞI KAYDIR</div>
                                <div class="snw-dec">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg" data-bg="assets/images/bg/18.jpg"></div>
                            <div class="overlay"></div>
                            <div class="progress-bar-wrap bot-element">
                                <div class="progress-bar"></div>
                            </div>
                            <!--fixed-column-wrap_title-->
                            <div class="fixed-column-wrap_title first-tile_load">
                                <h2><?php echo $datalist['blog_tittle']?></h2>
                            </div>
                            <!--fixed-column-wrap_title end-->
                            <div class="fixed-column-dec"></div>
                        </div>
                        <!--fixed-column-wrap-content end-->
                    </div>
                    <!--fixed-column-wrap end-->
                    <!--column-wrap-->
                    <div class="column-wrap">
                        <!--column-wrap-container -->
                        <div class="column-wrap-container fl-wrap">
                            <section  class="small-padding article">
                                <div class="container">
                                    <div class="split-sceen-content_title fl-wrap">
                                        <div class="pr-bg pr-bg-white"></div>

                                    </div>
                                    <div class="column-wrap-content fl-wrap">
                                        <div class="column-wrap-media fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="single-slider-wrap">
                                                <div class="single-slider fl-wrap">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper lightgallery">
                                                            <div class="swiper-slide hov_zoom"><img src="http://mimarsinemkok.com/panel/<?php echo $datalist['blog_image'];?>" alt=""><a href="http://mimarsinemkok.com/panel/<?php echo $datalist['blog_image'];?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="column-wrap-text">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="post-opt fl-wrap">
                                                        <div class="pr-bg pr-bg-white"></div>
                                                        <ul>
                                                            <li style="text-transform: capitalize;letter-spacing: 0.01px;font-size:14px"><i class="fal fa-user"></i><?php echo $datalist['blog_authors']?></li>
                                                            <li style="text-transform: capitalize;letter-spacing: 0.01px;font-size:14px"><i class="fal fa-comments-alt"></i><?php $date=$datalist['blog_date'];  $replacedate = str_replace("/",".",$date); echo substr($replacedate, 0, 10);?></li>
                                                            <li style="text-transform: capitalize;letter-spacing: 0.01px;font-size:14px"><i class="fal fa-eye"></i> <?php $clock=$datalist['blog_date'];  $replaceclock = str_replace("/",".",$clock); echo substr($replaceclock, 10, 10);?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pr-bg pr-bg-white"></div>
                                                    <h3 style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 24px;text-align: left;font-weight: 600"> <?php echo $datalist['blog_tittle']?></h3>
                                                    <div style="font-size: 14px;text-align: left"><?php $Replace_Text= $datalist['blog_text'];  $Replace_Text_2 =  str_replace("<p>"," ",$Replace_Text);  echo str_replace("</p>"," ",$Replace_Text_2);   ?></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!--section end-->
                        </div>
                        <!--column-wrap-container end-->
                    </div>
                    <!--column-wrap end-->
                    <div class="limit-box fl-wrap"></div>
                </div>

            </div>
            <!-- content-holder end -->
        </div>
        <!-- wrapper end -->

    <?php } ?>
    <!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<?php include 'footer.php' ?>
</body>
</html>
