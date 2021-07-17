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
            <!--content-->
            <div class="content">
                <!--fixed-column-wrap-->
                <div class="fixed-column-wrap">
                    <div class="pr-bg"></div>
                    <!--fixed-column-wrap-content-->
                    <div class="fixed-column-wrap-content">
                        <div class="scroll-nav-wrap color-bg">
                            <div class="carnival">Scroll down</div>
                            <div class="snw-dec">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg" data-bg="assets/images/bg/8.jpg"></div>
                        <div class="overlay"></div>
                        <div class="progress-bar-wrap bot-element">
                            <div class="progress-bar"></div>
                        </div>
                        <!--fixed-column-wrap_title-->
                        <div class="fixed-column-wrap_title first-tile_load">
                            <h2 >PROJELERİMİZ</h2>
                        </div>
                        <!--fixed-column-wrap_title end-->
                        <div class="fixed-column-dec"></div>
                    </div>
                    <!--fixed-column-wrap-content end-->
                </div>
                <!--fixed-column-wrap end-->
                <!--column-wrap-->


                <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

                <div class="column-wrap dark-bg">

                    <!-- portfolio start -->
                    <div class="gallery-items min-pad   two-column fl-wrap">
                       <?php
                        $query = $db->query("SELECT * FROM category_table", PDO::FETCH_ASSOC);
                        if ( $query->rowCount())
                        {
                            foreach( $query as $row )
                            {
                                ?>
                                <a href="#" class="gallery-filter"  data-filter=".<?php
                                $id = $row['kategori_id'];
                                $cat = $db->query("select * from category_table where id = '$id' ",PDO::FETCH_ASSOC);
                                $cat->execute();
                                $datalist = $cat->fetch();

                                if(empty($datalist))
                                {
                                    echo " Kategori Yok. Lütfen Bu Proje için Kategori Ekleyin";
                                }
                                else
                                {
                                    echo $datalist['category_name'];
                                }

                                ?>"><?php echo $row['category_name'] ?></a>
                            <?php } ?>
                        <?php } ?>

                        <?php
                        $query = $db->query("SELECT * FROM proje_table", PDO::FETCH_ASSOC);
                        if ( $query->rowCount())
                        {
                            foreach( $query as $row )
                            {
                                ?>
                                <style>
                                    .iconify
                                    {
                                        width: 12px; height: 12px;
                                    }
                                </style>
                                <div class="gallery-item <?php
                                $id = $row['kategori_id'];
                                $cat = $db->query("select * from category_table where id = '$id' ",PDO::FETCH_ASSOC);
                                $cat->execute();
                                $datalist = $cat->fetch();

                                if(empty($datalist))
                                {
                                    echo " Kategori Yok. Lütfen Bu Proje için Kategori Ekleyin";
                                }
                                else
                                {
                                    echo $datalist['category_name'];
                                }

                                ?>">
                                    <div class="grid-item-holder" style="height: 300px;">
                                        <img  src="http://mimarsinemkok.com/panel/<?php echo $row['proje_image'];?>"    alt="" style="background-size: cover;background-position: center center">
                                        <div class="grid-det">
                                            <div class="grid-det_category"><a href="#"  style="font-size: 18px;letter-spacing:0.01px;text-transform: capitalize;font-weight: 600"><?php
                                                    $id = $row['kategori_id'];
                                                    $cat = $db->query("select * from category_table where id = '$id' ",PDO::FETCH_ASSOC);
                                                    $cat->execute();
                                                    $datalist = $cat->fetch();

                                                    if(empty($datalist))
                                                    {
                                                        echo " Kategori Yok. Lütfen Bu Proje için Kategori Ekleyin";
                                                    }
                                                    else
                                                    {
                                                        echo $datalist['category_name'];
                                                    }

                                                    ?></a></div>
                                            <div class="grid-det-item">
                                                <a href="detail.php?project_id=<?php echo $row['id'];?>" class="ajax grid-det_link" style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 18px;font-weight: 600"><?php echo $row['proje_name'] ?>
                                                    <span class="iconify" data-icon="bx:bxs-right-arrow" data-inline="false"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pr-bg"></div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- portfolio end -->
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