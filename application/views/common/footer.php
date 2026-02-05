<!-- FOOTER START -->
<footer class="site-footer footer-light">
    <!-- COLL-TO ACTION START -->
    <div class="section-full overlay-wraper site-bg-primary"
        style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/bg-7.png);">

        <div class="section-content ">
            <!-- COLL-TO ACTION START -->
            <div class="wt-subscribe-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left p-tb20 p-r50">
                                <h4 class="text-uppercase m-b10">TURN YOUR MEMORIES INTO TIMELESS MASTERPIECES</h4>
                                <p>From weddings to life’s special moments, we design and print premium photo books that
                                    preserve your memories forever. Let’s start your journey today.</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="call-to-action-right p-tb30">
                                <a href="<?= base_url(); ?>contact-us"
                                    class="site-button-secondry text-uppercase radius-sm font-weight-600">
                                    Get in Touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">About Company</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="<?= base_url(); ?>">
                                <?php
                                $logo = '';

                                if (!empty($settings)) {
                                    // object হলে
                                    if (isset($settings[0]->logo)) {
                                        $logo = $settings[0]->logo;
                                    }
                                    // array হলে
                                    elseif (isset($settings['logo'])) {
                                        $logo = $settings['logo'];
                                    }
                                }
                                ?>

                                <img src="<?= base_url('uploads/settings/' . ($logo ?: 'default-logo.png')); ?>"
                                    width="230" height="67" alt="Company Logo">
                                <!-- <img src="<?= base_url('uploads/settings/' . $settings['logo']); ?>" width="230" height="67" alt="<?= $settings['company_name']; ?> Logo"> -->
                            </a>
                        </div>
                        <p>Creative Photo Book is a trusted photo book and album maker in Kolkata, offering premium
                            printing, vibrant colors, and durable finishing. We turn your memories into beautifully
                            crafted albums that last a lifetime.</p>
                    </div>
                </div>
                <!-- RESENT POST -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">Resent Post</h4>
                        <div class="widget-post-bx">
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div class="wt-post-date text-center text-uppercase text-white">
                                    <strong>20</strong>
                                    <span>Mar</span>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-header">
                                        <h6 class="post-title"><a href="<?= base_url(); ?>">Blog
                                                title first
                                            </a></h6>
                                    </div>
                                    <div class="wt-post-meta">
                                        <ul>
                                            <li class="post-author"><i class="fa fa-user"></i>By
                                                Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i>
                                                28</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div class="wt-post-date text-center text-uppercase text-white">
                                    <strong>30</strong>
                                    <span>Mar</span>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-header">
                                        <h6 class="post-title"><a href="<?= base_url(); ?>">Blog
                                                title first
                                            </a></h6>
                                    </div>
                                    <div class="wt-post-meta">
                                        <ul>
                                            <li class="post-author"><i class="fa fa-user"></i>By
                                                Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i>
                                                29</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div class="wt-post-date text-center text-uppercase text-white">
                                    <strong>31</strong>
                                    <span>Mar</span>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-header">
                                        <h6 class="post-title"><a href="<?= base_url(); ?>">Blog
                                                title first
                                            </a></h6>
                                    </div>
                                    <div class="wt-post-meta">
                                        <ul>
                                            <li class="post-author"><i class="fa fa-user"></i>By
                                                Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i>
                                                30</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- USEFUL LINKS -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="<?= base_url(); ?>about-us">About</a></li>
                            <li><a href="<?= base_url(); ?>our-blog">Blog</a></li>
                            <li><a href="<?= base_url(); ?>product">Album Cover</a></li>
                            <li><a href="<?= base_url(); ?>">Project</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL"
                                        type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="site-button">
                                            <i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row ftr-btm">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">
                        © 2023 Your
                        Company. All Rights Reserved. Designed By
                        Thewebmax.
                    </span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="javascript:void(0);">Terms & Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="contact-1.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->
<!-- STYLE SWITCHER  ======= -->

<!-- STYLE SWITCHER END ==== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="<?= base_url(); ?>userpanel/assets/js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script src="<?= base_url(); ?>userpanel/assets/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script src="<?= base_url(); ?>userpanel/assets/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script src="<?= base_url(); ?>userpanel/assets/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="<?= base_url(); ?>userpanel/assets/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
<script src="<?= base_url(); ?>userpanel/assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?= base_url(); ?>userpanel/assets/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script src="<?= base_url(); ?>userpanel/assets/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->

<!-- REVOLUTION JS FILES -->
<script
    src="<?= base_url(); ?>userpanel/assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script
    src="<?= base_url(); ?>userpanel/assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script
    src="<?= base_url(); ?>userpanel/assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<!-- REVOLUTION SLIDER SCRIPT -->

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script src="<?= base_url(); ?>userpanel/assets/js/rev-script-1.js"></script>

</body>

</html>