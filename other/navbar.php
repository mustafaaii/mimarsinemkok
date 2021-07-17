<div class="left-panel">
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
    <div class="left-panel_social">
        <ul >
            <li><a href="<?php echo $datalist['company_facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo $datalist['company_instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo $datalist['company_twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</div>