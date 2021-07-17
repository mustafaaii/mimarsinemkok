<?php
include 'connect/database.php';


if (isset($_GET["delete"]))
{
    if($_GET['delete']=='project')
    {
        $delete="ok";
        $delete_id= $_GET["delete_id"];
        $sorgu = $db->prepare("DELETE FROM  proje_table  WHERE id = ?");
        $sorgu->bindParam(1, $delete_id, PDO::PARAM_STR);
        $sorgu->execute();

        if($sorgu)
        {
            header('location:default.php?page=proje-liste&delete=ok');

        }
    }

    if($_GET['delete']=='category')
    {
        $delete="ok";
        $delete_id= $_GET["delete_id"];
        $sorgu = $db->prepare("DELETE FROM  category_table  WHERE id = ?");
        $sorgu->bindParam(1, $delete_id, PDO::PARAM_STR);
        $sorgu->execute();

        if($sorgu)
        {
            header('location:default.php?page=proje-kategori&delete=ok');

        }
    }

    if($_GET['delete']=='blog_text')
    {
        $delete="ok";
        $delete_id= $_GET["delete_id"];
        $sorgu = $db->prepare("DELETE FROM  blog_table  WHERE id = ?");
        $sorgu->bindParam(1, $delete_id, PDO::PARAM_STR);
        $sorgu->execute();

        if($sorgu)
        {
            header('location:default.php?page=blog-liste&delete=ok');

        }
    }

    if($_GET['delete']=='slide')
    {
        $delete="ok";
        $delete_slide_id = $_GET["delete_id"];
        $sorgu = $db->prepare("DELETE FROM  slide_table  WHERE id = ?");
        $sorgu->bindParam(1, $delete_slide_id, PDO::PARAM_STR);
        $sorgu->execute();

        if($sorgu)
        {
            header('location:default.php?page=slide-liste');

        }
    }
}



?>