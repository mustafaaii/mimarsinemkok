<?php
    try
    {
        $servername = "94.73.147.156";
        $username = "u0198406_web";
        $password = "IPwl59G3CUou33L";
        $db = new PDO("Server=localhost;Database=u0198406_db947;Uid=u0198406_web;Pwd=IPwl59G3CUou33L;");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    }
    catch (PDOException $e)
    {
        echo "Connection failed : ". $e->getMessage();
    }
?>




