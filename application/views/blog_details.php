 <!-- Start Advance Pricing Area  -->
        <div class="rainbow-blog-details-area">
            <div class="post-page-banner rainbow-section-gapTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content text-center">
                                <div class="page-title">
                                    <h1 class="theme-gradient"><?= $blog_details[0]->blog_title; ?></h1>
                                </div>
                                <ul class="rainbow-meta-list">
                                    <li>
                                        <i class="feather-user"></i>
                                        <a href="#"><?= $blog_details[0]->author; ?></a>
                                    </li>
                                    <li>
                                        <i class="feather-calendar"></i>
                                        <?= date("d M Y", strtotime($blog_details[0]->date)); ?>
                                    </li>
                                </ul>
                                <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="<?= base_url();?>uploads/blog/<?= $blog_details[0]->blog_image; ?>" alt="<?= $blog_details[0]->blog_title; ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content pt--60 rainbow-section-gapBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content">

                                <?= $blog_details[0]->blog_details; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Advance Pricing Area  -->