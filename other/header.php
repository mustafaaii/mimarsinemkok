<header class="main-header">
    <a href="index.php" class="header-logo ajax"><img src="assets/img/mimarsinemkok.svg" alt=""></a>
    <!-- sidebar-button -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap">
        <div class="nav-button">
            <span  class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- sidebar-button end-->
    <!--  navigation -->
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
    <div class="header-contacts">
        <ul>
            <li style="letter-spacing: 1px;text-transform: capitalize;font-size: 14px"><span> Telefon : </span> <a href="tel:<?php echo $datalist['company_phone'] ?>" style="text-transform: lowercase;letter-spacing: 1px"><?php echo $datalist['company_phone'] ?></a></li>
            <li style="letter-spacing: 1px;text-transform: capitalize;font-size: 14px"><span> Mail :</span> <a href="mailto:<?php echo $datalist['company_mail'] ?>" style="text-transform: lowercase;letter-spacing: 1px"><?php echo $datalist['company_mail'] ?></a></li>
        </ul>
    </div>
    <!-- navigation  end -->
</header>
