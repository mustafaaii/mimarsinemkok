<div class="fw-carousel-wrap fsc-holder full-height dark-bg fl-wrap">
    <!-- fw-carousel  -->
    <div class="grid-carousel   fl-wrap full-height lightgallery">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php

                $query = $db->query("SELECT * FROM slide_table", PDO::FETCH_ASSOC);
                if ( $query->rowCount())
                {
                    foreach( $query as $row )
                    {
                        ?>
                        <!-- swiper-slide-->

                        <div class="swiper-slide hov_zoom">
                            <div class="bg" data-bg="http://mimarsinemkok.com/mimar/panel/<?php echo $row['slide_image'];?>" ></div>
                            <a href="http://mimarsinemkok.com/mimar/panel/<?php echo $row['slide_image'];?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <div class="carousel-title-wrap">
                                <h2><a href="detail.php?slide_id=<?php echo $row['id'];?>" class="ajax btn btn-primary" style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 18px"><?php echo $row['slide_tittle'];?> <i class="fal fa-long-arrow-right "></i></a></h2>
                                <p style="text-transform: capitalize;letter-spacing: 0.1px;font-size: 16px"><?php echo $row['slide_bottom_tittle'];?></p>
                            </div>
                            <div class="carousle-item-number"><span>01.</span></div>
                            <div class="pr-bg"></div>
                        </div>

                        <!-- swiper-slide end-->

                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- fw-carousel end -->
    <div class="fw-carousel-control dark-bg fl-wrap fsc-control fsc-control_anim bot-element">
        <div class="fw-carousel-control_container">
            <div class="fw-carousel-counter"></div>
            <div class="fw_cb fw-carousel-button-next"><i class="fal fa-long-arrow-right"></i></div>
            <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-long-arrow-left"></i></div>
        </div>
        <div class="half-scrollbar">
            <div class="slide-progress-warp grid-carousel-progress">
                <div class="slide-progress color-bg"></div>
            </div>
        </div>
    </div>
</div>