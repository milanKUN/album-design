<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
        style="background-image:url(<?= base_url(); ?>userpanel/assets/images/banner/product-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white"><?= $product_details[0]->title ?></h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?= $product_details[0]->title ?></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">

        <!-- PRODUCT DETAILS -->
        <div class="container woo-entry">

            <div class="row m-b30">

                <div class="col-lg-4 col-md-8 m-b30">
                    <div class="wt-media wt-team-full-media m-b30">
                        <img src="<?= base_url(); ?>uploads/product/<?= $product_details[0]->image_1 ?>" alt="team">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);"><?= $product_details[0]->title ?></a></h3>
                    </div>
                    <div class="wt-post-text">
                        <?= $product_details[0]->details; ?>
                    </div>
                </div>

            </div>

            <!-- TITLE START -->
            <div class="p-b10">
                <h3 class="text-uppercase">Top Selling products</h3>
                <div class="wt-separator-outer  m-b30">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row">

                    <?php
                    $c = 0;
                    foreach ($product as $p) {
                        $c++;
                        if ($c > 3) {
                            break;
                        }
                        ?>
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

            <!-- TABS CONTENT START -->
            <div class="row">
                <div class="col-md-12 p-b30">
                    <div class="wt-tabs border border-top bg-tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#web-design-19">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#developement-19">Order Now</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="web-design-19" class="tab-pane active">
                                <div class=" p-a10">
                                    <?= $product_details[0]->more_details;?>
                                </div>
                            </div>
                            <div id="developement-19" class="tab-pane">
                                <div class=" p-a10">
                                    
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                <form class="comment-form" method="post">
                                                    <div class="comment-form-author">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value=""  name="author" id="author">
                                                    </div>
                                                    <div class="comment-form-email">
                                                        <label>Phone <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="Phone" id="Phone">
                                                    </div>
                                                    <div class="comment-form-email">
                                                        <label>Address <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="Address" id="Address">
                                                    </div>
                                                     <div class="comment-form-email">
                                                        <label>Email</label>
                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                    </div>
                                                    <div class="comment-form-comment">
                                                        <label>Your Review</label>
                                                        <textarea aria-required="true" rows="8" cols="45" name="comment"
                                                            id="comment"></textarea>
                                                    </div>
                                                    <div class="form-submit">
                                                        <button class="site-button  m-r15" type="submit">Submit <i
                                                                class="fa fa-angle-double-right"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TABS CONTENT START -->



        </div>
        <!-- PRODUCT DETAILS -->

    </div>
    <!-- CONTENT CONTENT END -->


</div>
<!-- CONTENT END -->