<!-- CONTENT START -->
<div class="page-content  bg-white">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
        style="background-image:url(<?= base_url(); ?>uploads/breadcome/<?= $breadcome2[0]->image; ?>);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Our Products</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                <li>Our Products</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50  ">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <h3 class="text-uppercase"><?= $cms2[0]->title; ?></h3>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <?= $cms2[0]->details; ?>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="row">

                    <?php foreach ($product as $p) { ?>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="<?= base_url('product-details/' . $p->product_slug) ?>"
                                        title="<?= $p->title ?>">
                                        <img src="<?= base_url(); ?>uploads/product/<?= $p->image_1; ?>"
                                            alt="<?= $p->title ?>">
                                    </a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0">
                                        <a href="<?= base_url('product-details/' . $p->product_slug) ?>"
                                            title="<?= $p->title ?>">
                                            <?= $p->title ?>
                                        </a>
                                    </h4>
                                    <a href="<?= base_url('product-details/' . $p->product_slug) ?>" class="site-button"
                                        title="<?= $p->title ?>">More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->