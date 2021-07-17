<?php


if(isset($_GET['edit']))
{
    if(is_array($_FILES))
    {
        if(is_uploaded_file($_FILES['userImage']['tmp_name']))
        {
            $UniuqueID =  md5(uniqid());
            $sourcePath = $_FILES['userImage']['tmp_name'];
            $targetPath = "upload/".$UniuqueID.$_FILES['userImage']['name'];
            if(move_uploaded_file($sourcePath,$targetPath))
            {

               header('location:default.php?page=slide-duzenle&edit_id='.$_POST['edit_id'].'');
                ?>
                <?php
            }
        }
    }
}
else
{
    if(is_array($_FILES))
    {
        if(is_uploaded_file($_FILES['userImage']['tmp_name']))
        {
            $UniuqueID =  md5(uniqid());
            $sourcePath = $_FILES['userImage']['tmp_name'];
            $targetPath = "upload/".$UniuqueID.$_FILES['userImage']['name'];
            if(move_uploaded_file($sourcePath,$targetPath))
            {

                header('location:default.php?page=slide-ekle&resim='.$targetPath.'');

                ?>

                <?php
            }
        }
    }
}






?>