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
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder" data-pagetitle="Home Carousel">
                <!-- nav-holder-->
                <?php include 'other/menu.php'?>
                <?php include 'other/overlay.php'?>
                <!-- nav-holder end -->
                <!-- fw-carousel-wrap -->
                <div class="fw-carousel-wrap fsc-holder full-height dark-bg fl-wrap">
                    <!-- fw-carousel  -->
                    <div class="grid-carousel   fl-wrap full-height lightgallery">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <?php

                                $query = $db->query("SELECT * FROM slide_table", PDO::FETCH_ASSOC);
                                if ( $query->rowCount())
                                {
                                    foreach( $query as $row )
                                    {
                                        ?>
                                        <!-- swiper-slide-->

                                        <div class="swiper-slide hov_zoom">
                                            <div class="bg" data-bg="http://mimarsinemkok.com/panel/<?php echo $row['slide_image'];?>" ></div>
                                            <a href="http://mimarsinemkok.com/panel/<?php echo $row['slide_image'];?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                            <div class="carousel-title-wrap">
                                                <h2><a href="detail.php?slide_id=<?php echo $row['id'];?>" class="ajax btn btn-primary" style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 18px"><?php echo $row['slide_tittle'];?> <i class="fal fa-long-arrow-right "></i></a></h2>
                                                <p style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 16px"><?php echo $row['slide_bottom_tittle'];?></p>
                                            </div>
                                            <div class="pr-bg"></div>
                                        </div>

                                        <!-- swiper-slide end-->

                                    <?php } ?>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <!-- fw-carousel end -->
                    <div class="fw-carousel-control dark-bg fl-wrap fsc-control fsc-control_anim bot-element">
                        <div class="fw-carousel-control_container">
                            <div class="fw-carousel-counter"></div>
                            <div class="fw_cb fw-carousel-button-next"><i class="fal fa-long-arrow-right"></i></div>
                            <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                        </div>
                        <div class="half-scrollbar">
                            <div class="slide-progress-warp grid-carousel-progress">
                                <div class="slide-progress color-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fw-carousel-wrap end -->
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
    </body>
</html>
