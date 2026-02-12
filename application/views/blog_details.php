<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
        style="background-image:url(<?= base_url(); ?>uploads/breadcome/<?= $breadcome6[0]->image; ?>);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white"><?= $blog_details[0]->blog_title; ?></h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="wt-mid-page">

                <!-- BLOG START -->
                <div class="blog-post date-style-1 blog-post-single">
                    <div class="wt-post-media wt-img-effect">
                        <img src="<?= base_url(); ?>uploads/blog/<?= $blog_details[0]->blog_image; ?>"
                            alt="<?= $blog_details[0]->blog_title; ?>">
                    </div>
                    <div class="post-description-area p-t30">
                        <div class="wt-post-title ">
                            <h3 class="post-title"><?= $blog_details[0]->blog_title; ?></h3>
                        </div>
                        <div class="wt-post-meta ">
                            <ul>
                                <li class="post-date">
                                    <i class="fa fa-calendar"></i><?= date('d M y', strtotime($blog_details[0]->date)); ?>
                                </li>
                                <li class="post-author"><i class="fa fa-user"></i>By
                                    <span><?= $blog_details[0]->author; ?></span></li>
                            </ul>
                        </div>
                        <div class="wt-post-text">
                            <?= $blog_details[0]->blog_details; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
<!-- CONTENT END -->