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


