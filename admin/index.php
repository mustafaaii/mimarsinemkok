
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../panel/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="../panel/assets/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link href="../panel/global_assets/dropify/css/dropify.min.css" rel="stylesheet" />
    <!-- Core JS files -->
    <script src="../panel/global_assets/js/main/jquery.min.js"></script>
    <script src="../panel/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../panel/global_assets/dropify/jquery.min.js"></script>
    <script src="../panel/global_assets/dropify/drophy.js"></script>
    <script src="../panel/global_assets/dropify/js/dropify.min.js"></script>
    <script src="../panel/global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="../panel/global_assets/js/plugins/uploaders/dropzone.min.js"></script>
    <script src="../panel/assets/js/app.js"></script>
    <script src="../panel/global_assets/js/demo_pages/editor_ckeditor_default.js"></script>
    <script src="../panel/global_assets/js/plugins/uploaders/dropzone.min.js"></script>
    <script src="../panel/global_assets/js/demo_pages/uploader_dropzone.js"></script>
    <script src="../panel/global_assets/js/plugins/ui/prism.min.js"></script>
    <script src="../panel/global_assets/js/demo_pages/uploader_dropzone.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <?php include '../connect/database.php'; ?>
    <style>
        .iconify { width: 20px; height: 20px; }
    </style>
</head>
<body>


<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static px-0">
    <div class="container px-2 px-lg-3">
        <div class="d-flex flex-1 d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-paragraph-justify3"></i>
                <span class="badge badge-mark border-warning m-1"></span>
            </button>
        </div>

        <div class="navbar-brand wmin-0 mr-lg-5">
            <a href="index.html" class="d-inline-block">
                <img src="../panel/global_assets/images/logo_light.png" class="d-none d-sm-block" alt="">
                <img src="../panel/global_assets/images/logo_icon_light.png" class="d-sm-none" alt="">
            </a>
        </div>

        <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
            <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
                <a href="#" class="navbar-nav-link navbar-nav-link-toggler d-inline-flex align-items-center h-100 dropdown-toggle" data-toggle="dropdown">
                    <img src=".../panel/global_assets/images/placeholders/placeholder.jpg" class="rounded-pill" height="34" alt="">
                    <span class="d-none d-lg-inline-block ml-2">Mustafa Işık</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-primary badge-pill ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<!-- Secondary navbar -->
<div class="navbar navbar-expand navbar-light px-0">
    <div class="container px-0 px-sm-3">
        <div class="overflow-auto overflow-lg-visible scrollbar-hidden flex-1">
            <ul class="navbar-nav flex-row text-nowrap">
                <li class="nav-item"><a href="" class="navbar-nav-link"> <i class="icon-home4 mr-2"></i> Anasayfa </a></li>
                <li class="nav-item"><a href="" class="navbar-nav-link"> <i class="icon-compass4 mr-2"></i> Firmalar </a></li>
                <li class="nav-item"><a href="" class="navbar-nav-link"> <i class="icon-reload-alt mr-2"></i> Güncelleme Ekle </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /secondary navbar -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-12 pt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <select class="form-control">
                                    <option value="0">Firma Seçiniz</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <input name="" id="" placeholder="Güncelleme Başlığı" class="form-control">
                            </div>
                            <div class="col-12 pt-4">
                                <textarea  id="editor-readonly" name="blog_text" rows="14" cols="14"></textarea>
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="btn btn-primary" style="float: left"> Güncelleme Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>


