<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mimar Sinem Kök - Web Site Yönetim Paneli</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->


<link href="global_assets/dropify/css/dropify.min.css" rel="stylesheet" />

<!-- Core JS files -->
<script src="global_assets/js/main/jquery.min.js"></script>
<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>

<!-- /core JS files -->

<!-- Theme JS files -->

<script src="global_assets/dropify/jquery.min.js"></script>
<script src="global_assets/dropify/drophy.js"></script>
<script src="global_assets/dropify/js/dropify.min.js"></script>
<script src="global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>

<script src="global_assets/js/plugins/uploaders/dropzone.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="global_assets/js/demo_pages/editor_ckeditor_default.js"></script>
<script src="global_assets/js/plugins/uploaders/dropzone.min.js"></script>
<script src="global_assets/js/demo_pages/uploader_dropzone.js"></script>
<script src="global_assets/js/plugins/ui/prism.min.js"></script>




<script src="global_assets/js/demo_pages/uploader_dropzone.js"></script>


<?php include "connect/database.php" ?>



<?php

if(!isset($_SESSION))
{
    session_start();
}

if($_SESSION['login'] != 1)
{
    header("Location: page-login/login.php");
}

?>

