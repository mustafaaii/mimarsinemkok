<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>panel</a>
                <span class="breadcrumb-item active">
                    <?php

                    echo ucwords(str_replace("-"," ",htmlspecialchars($_GET["page"]))) ;
                    ?>
                </span>
            </div>
            <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>