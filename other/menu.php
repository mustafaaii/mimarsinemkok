<div class="nav-holder but-hol">
    <div class="nav-scroll-bar-wrap fl-wrap">
        <!-- nav -->

        <?php
         $url = $_SERVER['REQUEST_URI'];

        ?>

        <nav class="nav-inner" id="menu">
            <ul>
                <li><a href="index.php" class="<?php if($url=="default.php"){echo "act-link";}else{echo "ajax";} ?>" style="font-size: 14px;letter-spacing:0.01px;text-transform: capitalize">Anasayfa</a></li>
                <li><a href="about-us.php" class="<?php if($url=="about-us.php"){echo "act-link";}else{echo "ajax";} ?>" style="font-size: 14px;letter-spacing:0.01px;text-transform: capitalize">Hakkımızda</a></li>
                <li><a href="project.php" class="<?php if($url=="project.php"){echo "act-link";}else{echo "ajax";} ?>" style="font-size: 14px;letter-spacing:0.01px;text-transform: capitalize">Projelerimiz</a></li>
                <li><a href="contact.php" class="<?php if($url=="contact.php"){echo "act-link";}else{echo "ajax";} ?>" style="font-size: 14px;letter-spacing:0.01px;text-transform: capitalize">İletişim</a></li>
                <li><a href="blog.php" class="<?php if($url=="blog.php"){echo "act-link";}else{echo "ajax";} ?>" style="font-size: 14px;letter-spacing:0.01px;text-transform: capitalize">Blog</a></li>
            </ul>
        </nav>
        <!-- nav end-->
    </div>
    <!--nav-social-->

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

    <?php
    $cat = $db->query("select * from iletisim_table where id = '1' ",PDO::FETCH_ASSOC);
    $cat->execute();
    $datalist = $cat->fetch();
    ?>

    <div class="nav-social">
        <span class="nav-social_title"  style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 14px">Takip Et : </span>
        <ul >
            <li><a href="<?php echo $datalist['company_facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo $datalist['company_instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo $datalist['company_twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
    <!--nav-social end -->
</div>