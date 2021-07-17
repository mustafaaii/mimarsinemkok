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
    <?php /*include 'other/share.php'*/?>
    <!-- share-button end -->
    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder" data-pagetitle="Home Carousel">
            <!-- nav-holder-->
            <?php include 'other/menu.php'?>
            <?php include 'other/overlay.php'?>
            <!-- nav-holder end -->
            <!--Content -->
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
                        <div class="bg" data-bg="assets/images/bg/11.jpg"></div>
                        <div class="overlay"></div>
                        <div class="progress-bar-wrap bot-element">
                            <div class="progress-bar"></div>
                        </div>
                        <!--fixed-column-wrap_title-->
                        <div class="fixed-column-wrap_title first-tile_load">
                            <h2>BLOG</h2>
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
                        <?php
                        $query = $db->query("SELECT * FROM blog_table", PDO::FETCH_ASSOC);
                        if ( $query->rowCount())
                        {
                            foreach( $query as $row )
                            {
                                ?>


                                <section  class="small-padding article">
                                    <div class="container">

                                        <div class="card">
                                            <img src="http://mimarsinemkok.com/panel/<?php echo $row['blog_image'];?>" alt="" style="height: auto;width: 100%">
                                            <div style="height: 20px"></div>
                                            <a href="http://mimarsinemkok.com/panel/<?php echo $row['blog_image'];?>" ></a>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="post-opt fl-wrap">
                                                            <ul>
                                                                <li><a href="#"  style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 14px"><i class="fal fa-user"></i><?php echo $row['blog_authors'] ?></a></li>
                                                                <li><a href="#"  style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 14px"><i class="fal fa-comments-alt"></i> 12 yorum</a></li>
                                                                <li><span  style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 14px"><i class="fal fa-eye"></i> 123 izlenme</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-xs-12" style="padding-top: 20px">
                                                        <a href="detail.php?blog_id=<?php echo $row['id'] ?>" style="text-transform: uppercase;font-size: 26px;float: left;font-weight: 600"><?php echo $row['blog_tittle'] ?></a>
                                                    </div>

                                                    <div class="col-lg-12 col-xs-12" style="padding-top: 20px">
                                                        <div><?php echo $row['blog_text']; ?></div>
                                                    </div>

                                                    <div class="col-lg-12 col-xs-12" style="padding-top: 20px">
                                                        <a href="detail.php?blog_id=<?php echo $row['id'] ?>"  style="text-transform: capitalize;font-size: 18px;text-align: left;float: left">
                                                            <div class="btn btn-primary" style="background-color: #F9BF26;padding: 7px"> <div style="padding-right: 20px;float: left"> Devamını Oku</div><i class="fal fa-long-arrow-right"></i></div>
                                                        </a>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="pr-bg pr-bg-white"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="section-separator"></div>
                            <?php } ?>
                        <?php } ?>
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
</body>
</html>
