<!-- Start Breadcarumb area  -->
<div class="breadcrumb-area breadcarumb-style-1 ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title theme-gradient h2">Blog Grid Style.</h1>
                    <ul class="page-list">
                        <li class="rainbow-breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
                        <li class="rainbow-breadcrumb-item active">Blog Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcarumb area  -->
<!-- Start Theme Style  -->
<div>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->



<!-- Start Rn Blog Area  -->
<div class="main-content">
    <div class="rainbow-blog-area rainbow-section-gap">
        <div class="container">
            <div class="row mt_dec--30">
                <div class="col-lg-12">

                    <div class="row row--15">

                        <?php
                        $c = 0;
                        foreach ($blog as $bkey) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up"
                                data-sal-duration="700" data-sal-delay="<?= $c; ?>00">

                                <div class="rainbow-card box-card-style-default">
                                    <div class="inner">

                                        <div class="thumbnail">
                                            <a class="image" href="<?= base_url();?>blog-details/<?= $bkey->blog_slug; ?>/">
                                                <img src="<?= base_url(); ?>uploads/blog/<?= $bkey->blog_image; ?>"
                                                    alt="<?= $bkey->blog_title; ?> Image">
                                            </a>
                                        </div>

                                        <div class="content">
                                            <ul class="rainbow-meta-list">
                                                <li><a href="#"><?= $bkey->author; ?></a></li>
                                                <li class="separator">/</li>
                                                <li><?= date("d M Y", strtotime($bkey->date)); ?></li>
                                            </ul>

                                            <h4 class="title">
                                                <a href="<?= base_url();?>blog-details/<?= $bkey->blog_slug; ?>/">
                                                    <?= $bkey->blog_title; ?>
                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $c++;   // FIXED
                        }
                        ?>


                    </div>

                </div>
                <div class="col-lg-12 text-center">
                    <div class="rainbow-load-more text-center mt--60">
                        <a class="btn-default" href="blog-grid.html">View More Post
                            <i class="feather-loader"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Rn Blog Area  -->