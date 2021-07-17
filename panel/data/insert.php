<?php
include '../connect/database.php';



if(isset($_GET['kurumsal']))
{
    if($_GET['kurumsal']=="guncelle")
    {
        $baslik = trim(strip_tags($_POST['baslik']));
        $text =$_POST['text'];
        $key = trim(strip_tags($_POST['key']));


        $verisor = $db->prepare("UPDATE kurumsal SET kurumsal_baslik=?, kurumsal_text=?, kurumsal_key=? WHERE kurumsal_id=1");
        $kaydet=$verisor->execute(array($baslik, $text, $key));

        if($kaydet)
        {
            header('location:../default.php?page=kurumsal&islem=basarili');
        }
    }
}

/*INSERT*/
if(isset($_GET['insert']))
{
    if($_GET['insert']=="slide")
    {
        if(is_array($_FILES))
        {
            if(is_uploaded_file($_FILES['slide_image']['tmp_name']))
            {
                $UniuqueID =  md5(uniqid());
                $sourcePath = $_FILES['slide_image']['tmp_name'];
                $targetPath = "../upload/".$UniuqueID.$_FILES['slide_image']['name'];
                if(move_uploaded_file($sourcePath,$targetPath))
                {

                    header('location:../default.php?page=slide-ekle&islem=basarili');
                    ?>
                    <?php
                }
            }
        }

        $insert="ok";
        $slide_tittle = trim(strip_tags($_POST['slide_tittle']));
        $slide_alt_tittle = trim(strip_tags($_POST['slide_alt_tittle']));
        $slide_text = trim(strip_tags($_POST['slide_text']));
        $slide_key = trim(strip_tags($_POST['slide_key']));
        $slide_images = substr($targetPath, 3, 300);


        $verisor = $db->prepare("INSERT INTO slide_table set slide_tittle=?, slide_bottom_tittle=?, slide_text=?, slide_key=?, slide_image=? ");
        $kaydet=$verisor->execute(array($slide_tittle, $slide_alt_tittle, $slide_text,  $slide_key, $slide_images ));

        if($kaydet)
        {
            header('location:../default.php?page=slide-ekle&islem=basarili');
        }
    }

    if($_GET['insert']=="project")
    {
        if(is_array($_FILES))
        {
            if(is_uploaded_file($_FILES['proje_resmi']['tmp_name']))
            {
                $UniuqueID =  md5(uniqid());
                $sourcePath = $_FILES['proje_resmi']['tmp_name'];
                $targetPath = "../upload/".$UniuqueID.$_FILES['proje_resmi']['name'];
                if(move_uploaded_file($sourcePath,$targetPath))
                {

                    /*header('location:default.php?page=slide-duzenle&edit_id='.$_POST['edit_id'].'');*/
                    ?>
                    <?php
                }
            }
        }

         $proje_resmi = substr($targetPath, 3, 300);
         $proje_basligi = trim(strip_tags($_POST['proje_basligi']));
         $proje_kategorisi = $_POST['proje_kategorisi'];
         $proje_aciklama =$_POST['proje_aciklama'];
         $proje_key = trim(strip_tags($_POST['proje_key']));


       $verisor = $db->prepare("INSERT INTO proje_table set proje_name=?,  kategori_id=?, proje_text=?, proje_image=?, proje_key=? ");
       $kaydet=$verisor->execute(array($proje_basligi, $proje_kategorisi, $proje_aciklama, $proje_resmi, $proje_key));

       if($kaydet)
        {
            header('location:../default.php?page=proje-ekle&islem=basarili');
        }
    }

    if($_GET['insert']=="category")
    {
        $category_name = trim(strip_tags($_POST['category_name']));
        $category_key = trim(strip_tags($_POST['category_key']));


        $verisor = $db->prepare("INSERT INTO category_table set category_name=?,  category_key=? ");
        $kaydet=$verisor->execute(array($category_name, $category_key));

        if($kaydet)
        {
            header('location:../default.php?page=proje-kategori&islem=basarili');
        }
    }

    if($_GET['insert']=="blog")
    {
        if(is_array($_FILES))
        {
            if(is_uploaded_file($_FILES['blog_image']['tmp_name']))
            {
                $UniuqueID =  md5(uniqid());
                  $sourcePath = $_FILES['blog_image']['tmp_name'];
                 $targetPath = "../upload/".$UniuqueID.$_FILES['blog_image']['name'];
                if(move_uploaded_file($sourcePath,$targetPath))
                {
                    ?>
                    <?php
                }
            }
        }


        $blog_tittle = $_POST['blog_tittle'];
        $blog_text =$_POST['blog_text'];
        $blog_image = substr($targetPath, 3, 300);
        $blog_key = trim(strip_tags($_POST['blog_key']));
        session_start();
        $username= $_SESSION['name'];
        $usersurname= $_SESSION['surname'];
        $verisor = $db->prepare("INSERT INTO blog_table set blog_tittle=?,  blog_text=?,  blog_image=? ,  blog_key=?, blog_date=?, blog_authors=? ");
        $kaydet=$verisor->execute(array($blog_tittle, $blog_text, $blog_image, $blog_key,date("Y/m/d") ."  ".date("h:i:sa") , $username." ".$usersurname));

        if($kaydet)
        {
            header('location:../default.php?page=blog-ekle&islem=basarili');
        }
    }

    if($_GET['insert']=="contact")
    {
        $company_phone = trim(strip_tags($_POST['company_phone']));
        $company_mail = trim(strip_tags($_POST['company_mail']));
        $company_whatsapp = trim(strip_tags($_POST['company_whatsapp']));
        $company_facebook = trim(strip_tags($_POST['company_facebook']));
        $company_instagram = trim(strip_tags($_POST['company_instagram']));
        $company_twitter = trim(strip_tags($_POST['company_twitter']));
        $company_address = trim(strip_tags($_POST['company_address']));
        $company_maps = $_POST['company_maps'];


        $verisor = $db->prepare("UPDATE iletisim_table SET company_phone=?, company_mail=?, company_whatsapp=?, company_facebook=?, company_instagram=?, company_twitter=?, company_address=?, company_maps=? WHERE id=1");
        $kaydet=$verisor->execute(array($company_phone, $company_mail, $company_whatsapp, $company_facebook, $company_instagram, $company_twitter, $company_address,$company_maps ));

        if($kaydet)
        {
            header('location:../default.php?page=iletisim-bilgleri&islem=basarili');
        }
    }
}



/*UPLOAD*/
if(isset($_GET['edit']))
{

    /*SLIDE*/
    if($_GET['edit']=="slide_image")
    {
        $id= $_GET['slide_id'];

        if(ISSET($_POST['upload']))
        {
            $UniuqueID =  md5(uniqid());
            $file_name = $_FILES['slide_image']['name'];
            $file_temp = $_FILES['slide_image']['tmp_name'];
            $file_size = $_FILES['slide_image']['size'];
            $file_type = $_FILES['slide_image']['type'];

            $date_uploaded=date("Y-m-d");
            $location="../upload/".$UniuqueID."-".$file_name;
            $slide_image = substr($location, 3, 300);


            if($file_size < 15242880)
            {
                if(move_uploaded_file($file_temp, $location))
                {

                    $Image_Change = $db->prepare("UPDATE slide_table SET  slide_image=? WHERE id=?");
                    $Image_Change->bindParam(1, $slide_image, PDO::PARAM_STR);
                    $Image_Change->bindParam(2, $id, PDO::PARAM_INT);
                    $Image_Change->execute();
                    $db = null;
                    header('location:../default.php?page=slide_edit&slide_id='.$_GET['slide_id'].'&islem=basarili');
                }
            }

        }
    }
    if($_GET['edit']=="slide")
    {

        $id= $_GET['slide_id'];
        $slide_tittle = trim(strip_tags($_POST['slide_tittle']));
        $slide_alt_tittle = trim(strip_tags($_POST['slide_alt_tittle']));
        $slide_text = trim(strip_tags($_POST['slide_text']));
        $slide_key = trim(strip_tags($_POST['slide_key']));

        $Project_Update = $db->prepare("UPDATE slide_table SET slide_tittle=?, slide_bottom_tittle=?, slide_text=?,  slide_key=? WHERE id=?");
        $Project_Update->bindParam(1, $slide_tittle, PDO::PARAM_STR);
        $Project_Update->bindParam(2, $slide_alt_tittle, PDO::PARAM_INT);
        $Project_Update->bindParam(3, $slide_text, PDO::PARAM_STR);
        $Project_Update->bindParam(4, $slide_key, PDO::PARAM_STR);
        $Project_Update->bindParam(5, $id, PDO::PARAM_INT);
        $Project_Update->execute();
        header('location:../default.php?page=slide_edit&slide_id='.$_GET['slide_id'].'&islem=basarili');
        $db = null;
    }

    /*PROJE*/
    if($_GET['edit']=="project_image")
    {
        $id= $_GET['project_id'];

        if(ISSET($_POST['upload']))
        {
            $UniuqueID =  md5(uniqid());
            $file_name = $_FILES['project_image']['name'];
            $file_temp = $_FILES['project_image']['tmp_name'];
            $file_size = $_FILES['project_image']['size'];
            $file_type = $_FILES['project_image']['type'];

            $date_uploaded=date("Y-m-d");
            $location="../upload/".$UniuqueID."-".$file_name;
            $project_image = substr($location, 3, 300);


            if($file_size < 15242880)
            {
                if(move_uploaded_file($file_temp, $location))
                {

                    $Image_Change = $db->prepare("UPDATE proje_table SET  proje_image=? WHERE id=?");
                    $Image_Change->bindParam(1, $project_image, PDO::PARAM_STR);
                    $Image_Change->bindParam(2, $id, PDO::PARAM_INT);
                    $Image_Change->execute();
                    $db = null;
                    header('location:../default.php?page=project_edit&project_id='.$_GET['project_id'].'&islem=basarili');
                }
            }

        }
    }
    if($_GET['edit']=="project")
    {

        $id= $_GET['project_id'];
        $Project_Tittle = trim(strip_tags($_POST['project_tittle']));
        $Project_Category = trim(strip_tags($_POST['project_category']));
        $Project_Text = $_POST['project_text'];
        $Project_Key = trim(strip_tags($_POST['project_key']));

        $Project_Update = $db->prepare("UPDATE proje_table SET proje_name=?, kategori_id=?, proje_text=?,  proje_key=? WHERE id=?");
        $Project_Update->bindParam(1, $Project_Tittle, PDO::PARAM_STR);
        $Project_Update->bindParam(2, $Project_Category, PDO::PARAM_INT);
        $Project_Update->bindParam(3, $Project_Text, PDO::PARAM_STR);
        $Project_Update->bindParam(4, $Project_Key, PDO::PARAM_STR);
        $Project_Update->bindParam(5, $id, PDO::PARAM_INT);
        $Project_Update->execute();
        header('location:../default.php?page=project_edit&project_id='.$_GET['project_id'].'&islem=basarili');
        $db = null;
    }


    /*SLIDE*/
    if($_GET['edit']=="slide_image")
    {
        $id= $_GET['slide_id'];

        if(ISSET($_POST['upload']))
        {
            $UniuqueID =  md5(uniqid());
            $file_name = $_FILES['slide_image']['name'];
            $file_temp = $_FILES['slide_image']['tmp_name'];
            $file_size = $_FILES['slide_image']['size'];
            $file_type = $_FILES['slide_image']['type'];
            $date_uploaded=date("Y-m-d");
            $location="../upload/".$UniuqueID."-".$file_name;
            $slide_image = substr($location, 3, 300);
            if($file_size < 15242880)
            {
                if(move_uploaded_file($file_temp, $location))
                {
                    $Image_Change = $db->prepare("UPDATE slide_table SET  slide_image=? WHERE id=?");
                    $Image_Change->bindParam(1, $slide_image, PDO::PARAM_STR);
                    $Image_Change->bindParam(2, $id, PDO::PARAM_INT);
                    $Image_Change->execute();
                    $db = null;
                    header('location:../default.php?page=slide-duzenle&slide_id='.$_GET['slide_id'].'&islem=basarili');
                }
            }

        }
    }
    if($_GET['edit']=="slide")
    {
        $id= $_GET['slide_id'];
        $slide_baslik = trim(strip_tags($_POST['slide_baslik']));
        $slide_alt_baslik = trim(strip_tags($_POST['slide_alt_baslik']));
        $slide_key = trim(strip_tags($_POST['slide_key']));
        $slide_text = $_POST['slide_text'];

        $sorgu = $db->prepare("UPDATE slide_table SET slide_tittle=?, slide_bottom_tittle=?,  slide_text=?, slide_key=? WHERE id=?");
        $sorgu->bindParam(1, $slide_baslik, PDO::PARAM_STR);
        $sorgu->bindParam(2, $slide_alt_baslik, PDO::PARAM_STR);
        $sorgu->bindParam(3, $slide_text, PDO::PARAM_STR);
        $sorgu->bindParam(4, $slide_key, PDO::PARAM_STR);
        $sorgu->bindParam(5, $id, PDO::PARAM_INT);
        $sorgu->execute();
        header('location:../default.php?page=slide-duzenle&slide_id='.$_GET['slide_id'].'&islem=basarili');
        $db = null;
    }


    /*BLOG*/
    if($_GET['edit']=="blog_images")
    {
        $id= $_GET['blog_id'];
        if(ISSET($_POST['upload']))
        {
            $UniuqueID =  md5(uniqid());
            $file_name = $_FILES['blog_image']['name'];
            $file_temp = $_FILES['blog_image']['tmp_name'];
            $file_size = $_FILES['blog_image']['size'];
            $file_type = $_FILES['blog_image']['type'];
            $date_uploaded=date("Y-m-d");
            $location="../upload/".$UniuqueID."-".$file_name;
            $blog_image = substr($location, 3, 300);
            if($file_size < 15242880)
            {
                if(move_uploaded_file($file_temp, $location))
                {
                    $Image_Change = $db->prepare("UPDATE blog_table SET  blog_image=? WHERE id=?");
                    $Image_Change->bindParam(1, $blog_image, PDO::PARAM_STR);
                    $Image_Change->bindParam(2, $id, PDO::PARAM_INT);
                    $Image_Change->execute();
                    $db = null;
                    header('location:../default.php?page=blog_edit&blog_id='.$_GET['blog_id'].'&islem=basarili');
                }
            }

        }
    }
    if($_GET['edit']=="blog")
    {
        session_start();
        $username= $_SESSION['name'];
        $usersurname= $_SESSION['surname'];

        $id= $_GET['blog_id'];

        $blog_tittle = trim(strip_tags($_POST['blog_tittle']));
        $blog_text = $_POST['blog_text'];
        $blog_key = trim(strip_tags($_POST['blog_key']));
        $Date = date("Y/m/d") ."  ".date("h:i:sa");
        $UserInfo = $username." ".$usersurname;

        $Blog_Update = $db->prepare("UPDATE blog_table SET blog_tittle=?, blog_text=?,  blog_key=?, blog_date=?, blog_authors=? WHERE id=?");
        $Blog_Update->bindParam(1, $blog_tittle, PDO::PARAM_STR);
        $Blog_Update->bindParam(2, $blog_text, PDO::PARAM_STR);
        $Blog_Update->bindParam(3, $blog_key, PDO::PARAM_STR);
        $Blog_Update->bindParam(4, $Date, PDO::PARAM_STR);
        $Blog_Update->bindParam(5, $UserInfo, PDO::PARAM_STR);
        $Blog_Update->bindParam(6, $id, PDO::PARAM_INT);
        $Blog_Update->execute();
        header('location:../default.php?page=blog_edit&blog_id='.$_GET['blog_id'].'&islem=basarili');
        $db = null;
    }


}


?>