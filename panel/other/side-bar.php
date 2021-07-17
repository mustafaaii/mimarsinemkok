<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                    </a>
                    <div class="media-body">
                        <div class="font-weight-semibold"><?php  echo $_SESSION['name']." ".$_SESSION['surname']; ?></div>
                        <div class="font-size-sm line-height-sm opacity-50">
                            <?php  echo $_SESSION['role']; ?>
                        </div>
                    </div>
                    <div class="ml-3 align-self-center">
                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->
        <!-- Main navigation -->
        <div class="sidebar-section">
            <?php
            if(isset($_GET['click']))
            {
                if($_GET['click'])
                {
                    doSomething();
                }
            }
            ?>


            <form method="post">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">PANEL</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="default.php?page=panel" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="panel") { echo "active";  }  ?>">
                        <i class="icon-home4"></i>
                        <span>Panel Yönetimi</span>
                    </a>
                </li>
                <li class="nav-item"><a href="default.php?page=slide-ekle" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="slide-ekle") { echo "active";  }  ?>"><i class="icon-add"></i> <span>Slide Ekle</span></a></li>
                <li class="nav-item"><a href="default.php?page=slide-liste" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="slide-liste") { echo "active";  }  ?>"><i class="icon-add"></i> <span>Slide Listesi</span></a></li>


                <li class="nav-item nav-item-submenu

                <?php

                if(htmlspecialchars($_GET["page"]) =="proje-ekle")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="proje-liste")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="proje-kategori")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="project_edit")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                ?>
">
                    <a href="#" class="nav-link"><i class="icon-file-plus"></i> <span>Proje</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="default.php?page=proje-ekle" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="proje-ekle") { echo "active";  }  ?>"> <span>Proje Ekle</span></a></li>
                        <li class="nav-item"><a href="default.php?page=proje-liste" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="proje-liste") { echo "active";  }  ?>"> <span>Proje Listesi</span></a></li>
                        <li class="nav-item"><a href="default.php?page=proje-kategori" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="proje-kategori") { echo "active";  }  ?>"> <span>Proje Kategori</span></a></li>
                    </ul>
                </li>


                <li class="nav-item nav-item-submenu
                <?php

                if(htmlspecialchars($_GET["page"]) =="kurumsal")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="blog-liste")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="blog-ekle")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                if(htmlspecialchars($_GET["page"]) =="blog_edit")
                {
                    echo "nav-item-expanded nav-item-open";
                }

                ?>
                ">
                    <a href="#" class="nav-link"><i class="icon-file-plus"></i> <span>Sayfalar</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="default.php?page=kurumsal" class="nav-link <?php if(htmlspecialchars($_GET["page"]) =="kurumsal"){ echo "active"; } ?>">Kurumsal</a></li>
                        <li class="nav-item"><a href="default.php?page=blog-liste" class="nav-link <?php if(htmlspecialchars($_GET["page"]) =="blog-liste") { echo "active"; } ?>">Blog</a></li>
                    </ul>
                </li>
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Ayarlar</div> <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-envelope"></i> <span  class="text-muted">Mail Ayarları</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
                <li class="nav-item"><a href="default.php?page=iletisim-bilgleri" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="iletisim-bilgleri") { echo "active";  }  ?>"><i class="icon-phone"></i> <span>İletişim Bilgileri</span></a></li>
                <li class="nav-item"><a href="default.php?page=google-maps" class="nav-link "><i class="icon-map"></i> <span class="text-muted">Google Maps</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link <?php  if(htmlspecialchars($_GET["page"]) =="seo") { echo "active";  }  ?>"><i class="icon-sphere"></i> <span class="text-muted">Seo</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>



                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extralar</div> <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-cube"></i> <span class="text-muted">3D-Tasarım</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-design"></i> <span class="text-muted">Çizimler & Tasarımlar</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-direction"></i> <span class="text-muted">Navigatör</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-box"></i> <span class="text-muted">3D Mekan</span><span class="badge badge-success align-self-center ml-auto">Premium</span></a></li>
            </ul>
            </form>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>