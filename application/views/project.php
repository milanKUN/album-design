<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?= base_url(); ?>uploads/breadcome/<?= $breadcome3[0]->image; ?>);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Our Projects</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?= base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li>Our Projects</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <div class="portfolio-wrap mfp-gallery row">

            <?php if (!empty($gallery)) { 
                foreach ($gallery as $Gkey) { ?>
                <!-- COLUMNS 1 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <img src="<?= base_url();?>uploads/gallery/<?= $Gkey->image;?>" alt="">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="<?= base_url();?>uploads/gallery/<?= $Gkey->image;?>" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } } ?>

            </div>

        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->