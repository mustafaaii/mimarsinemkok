

<?php
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$UrlTrim = substr($url, 23, 50);

if($UrlTrim=="index.php")
{
    include "home.php";
}


if($UrlTrim=="")
{
    include "home.php";
}

if(htmlspecialchars($_GET["id"])!=null)
{
    include "detail.php";
}





?>