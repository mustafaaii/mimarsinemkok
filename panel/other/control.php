

<?php
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$UrlTrim = substr($url, 43, 50);

/*HOME*/
if(htmlspecialchars($_GET["page"])=="panel")
{
    include "pages/home.php";
}



/*SLIDE*/
if(htmlspecialchars($_GET["page"])=="slide-liste")
{
    include "pages/slide-liste.php";
}

if(htmlspecialchars($_GET["page"])=="slide-ekle")
{
    include "pages/slide-ekle.php";
}


/*SLIDE EDIT*/



if(isset($_GET['slide_id']))
{
    include "pages/slide-duzenle.php";
}



/*PROJE*/
if(htmlspecialchars($_GET["page"]) =="proje-liste")
{
    include "pages/proje-liste.php";

}

if(htmlspecialchars($_GET["page"]) =="proje-ekle")
{
    include "pages/proje-ekle.php";

}

if(htmlspecialchars($_GET["page"]) =="proje-kategori")
{
    include "pages/proje-kategori.php";

}

if(htmlspecialchars($_GET["page"]) =="project_edit")
{
    include "pages/proje-duzenle.php";

}


/*SAYFALAR*/

if(htmlspecialchars($_GET["page"]) =="kurumsal")
{
    include "pages/hakkimizda.php";
}

/*BLOG*/

if(htmlspecialchars($_GET["page"]) =="blog-liste")
{
    include "pages/blog-liste.php";
}

if(htmlspecialchars($_GET["page"]) =="blog-ekle")
{
    include "pages/blog-ekle.php";
}


/*İLETİŞİM*/

if(htmlspecialchars($_GET["page"]) =="iletisim-bilgleri")
{
    include "pages/iletisim.php";
}


/*BLOG*/
if(htmlspecialchars($_GET["page"]) =="blog_edit")
{
    include "pages/blog-duzenle.php";
}
?>