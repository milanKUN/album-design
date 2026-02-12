<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
        style="background-image:url(<?= base_url(); ?>uploads/breadcome/<?= $breadcome4[0]->image; ?>);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Our Blog</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- COLUMNS 4 -->
            <?php
            if (!empty($blog)) {
                foreach ($blog as $Bkey) {
                    ?>
                    <div class="blog-post blog-md date-style-1 clearfix">
                        <div class="wt-post-media wt-img-effect zoom-slow">
                            <a href="<?= base_url(); ?>blog-details/<?= $Bkey->blog_slug; ?>">
                                <img src="<?= base_url(); ?>uploads/blog/<?= $Bkey->blog_image; ?>"
                                    alt="<?= $Bkey->blog_title; ?>">
                            </a>
                        </div>
                        <div class="wt-post-info">

                            <div class="wt-post-title ">
                                <h3 class="post-title">
                                    <a href="<?= base_url(); ?>blog-details/<?= $Bkey->blog_slug; ?>">
                                        <?= $Bkey->blog_title; ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="wt-post-meta ">
                                <ul>
                                    <li class="post-date">
                                        <i class="fa fa-calendar"></i><?= date('d M y', strtotime($Bkey->date)); ?></span>
                                    </li>
                                    <li class="post-author">
                                        <i class="fa fa-user"></i><a href="#">By <span><?= $Bkey->author; ?></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wt-post-text">
                                <p>
                                    <?php
                                    $text = strip_tags($Bkey->blog_details);
                                    $words = explode(' ', $text);
                                    echo implode(' ', array_slice($words, 0, 50));

                                    if (count($words) > 50) {
                                        echo '...';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                    <a href="<?= base_url(); ?>blog-details/<?= $Bkey->blog_slug; ?>" title="READ MORE"
                                        rel="bookmark" class="site-button-link">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
            <!-- BLOG POST END -->

        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->