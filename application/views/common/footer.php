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
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="<?= base_url(); ?>about-us">About</a></li>
                            <li><a href="<?= base_url(); ?>our-blog">Blog</a></li>
                            <li><a href="<?= base_url(); ?>product">Album Cover</a></li>
                            <li><a href="<?= base_url(); ?>project">Project</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-lg-4 col-md-6">
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
                            <li><a href="<?= $settings['facebook'] ?? '#' ?>" class="fa fa-facebook"></a></li>
                            <li><a href="<?= $settings['youtube_link'] ?? '#' ?>" class="fa fa-youtube"></a></li>
                            <li><a href="<?= $settings['instagram'] ?? '#' ?>" class="fa fa-instagram"></a></li>
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
                        © 2025 Star Album. All Rights Reserved. Designed By Milan kundu.
                    </span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="<?= base_url(); ?>contact-us">Contact Us</a></li>
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

<script>
    (function () {
        const track = document.getElementById("youtube_design_milan_track");
        const btnLeft = document.querySelector(".youtube_design_milan_arrow_left");
        const btnRight = document.querySelector(".youtube_design_milan_arrow_right");

        const modal = document.getElementById("youtube_design_milan_modal");
        const iframe = document.getElementById("youtube_design_milan_iframe");
        const modalTitle = document.getElementById("youtube_design_milan_modal_title");
        const closeBtn = document.getElementById("youtube_design_milan_close");
        const copyBtn = document.getElementById("youtube_design_milan_copy");

        let currentVideoId = null;

        function youtube_design_milan_getId(urlOrId) {
            if (!urlOrId) return null;

            // already an id
            if (/^[a-zA-Z0-9_-]{11}$/.test(urlOrId)) return urlOrId;

            const m1 = urlOrId.match(/[?&]v=([a-zA-Z0-9_-]{11})/);
            if (m1) return m1[1];

            const m2 = urlOrId.match(/youtu\.be\/([a-zA-Z0-9_-]{11})/);
            if (m2) return m2[1];

            const m3 = urlOrId.match(/youtube\.com\/shorts\/([a-zA-Z0-9_-]{11})/);
            if (m3) return m3[1];

            const m4 = urlOrId.match(/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/);
            if (m4) return m4[1];

            return null;
        }

        function scrollByCards(direction) {
            const card = track.querySelector(".youtube_design_milan_card");
            const gap = 22;
            const amount = (card?.offsetWidth || 340) + gap;
            track.scrollBy({ left: direction * amount, behavior: "smooth" });
        }

        btnLeft.addEventListener("click", () => scrollByCards(-1));
        btnRight.addEventListener("click", () => scrollByCards(1));

        function openModal(youtubeId, titleText) {
            currentVideoId = youtubeId;

            const safeTitle = titleText || "VIDEO";
            modalTitle.innerHTML =
                '<span class="youtube_design_milan_modal_logo" aria-hidden="true">◆</span>' +
                "<span>" + safeTitle + "</span>";

            const src =
                "https://www.youtube.com/embed/" +
                youtubeId +
                "?autoplay=1&rel=0&modestbranding=1&playsinline=1";

            iframe.src = src;

            modal.classList.add("youtube_design_milan_open");
            modal.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
        }

        function closeModal() {
            modal.classList.remove("youtube_design_milan_open");
            modal.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
            iframe.src = ""; // stop video
            currentVideoId = null;
        }

        // ✅ Open modal on thumb click (supports url OR id)
        track.addEventListener("click", (e) => {
            const thumb = e.target.closest(".youtube_design_milan_thumb");
            if (!thumb) return;

            const raw =
                thumb.getAttribute("data-youtube-id") ||
                thumb.getAttribute("data-youtube-url");

            const id = youtube_design_milan_getId(raw);
            const title = thumb.getAttribute("data-title");

            if (!id) return;

            openModal(id, title);
        });

        closeBtn.addEventListener("click", closeModal);

        modal.addEventListener("click", (e) => {
            if (e.target === modal) closeModal();
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && modal.classList.contains("youtube_design_milan_open")) {
                closeModal();
            }
        });

        copyBtn.addEventListener("click", async () => {
            if (!currentVideoId) return;
            const url = "https://www.youtube.com/watch?v=" + currentVideoId;

            try {
                await navigator.clipboard.writeText(url);
                copyBtn.textContent = "Copied!";
                setTimeout(() => (copyBtn.innerHTML = `
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M9 9h10v10H9V9z" stroke="currentColor" stroke-width="2"/>
                <path d="M5 15H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1" stroke="currentColor" stroke-width="2"/>
              </svg>
              Copy link
            `), 900);
            } catch {
                alert("Copy failed. Link: " + url);
            }
        });
    })();
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {

        $('.cons-contact-form').on('submit', function (e) {
            e.preventDefault();

            var form = $(this);
            var submitBtn = form.find('button[type="submit"]');

            // Disable button + show loading text
            submitBtn.prop("disabled", true);
            submitBtn.html('Sending... <i class="fa fa-spinner fa-spin"></i>');

            $.ajax({
                url: "<?= base_url('contact-submit'); ?>",
                type: "POST",
                data: form.serialize(),
                dataType: "json",
                success: function (response) {

                    if (response.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your message has been sent successfully.',
                        });

                        form[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong!'
                        });
                    }

                    // Enable button again
                    submitBtn.prop("disabled", false);
                    submitBtn.html('Submit <i class="fa fa-angle-double-right"></i>');
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Server Error!',
                        text: 'Please try again.'
                    });

                    submitBtn.prop("disabled", false);
                    submitBtn.html('Submit <i class="fa fa-angle-double-right"></i>');
                }
            });

        });

    });
</script>

<script>
    $(document).ready(function () {

        $('.comment-form').on('submit', function (e) {
            e.preventDefault();

            var form = $(this);
            var btn = form.find('button[type="submit"]');

            btn.prop("disabled", true);
            btn.html('Sending... <i class="fa fa-spinner fa-spin"></i>');

            $.ajax({
                url: "<?= base_url('save-enquiry'); ?>",
                type: "POST",
                data: form.serialize(),
                dataType: "json",
                success: function (response) {

                    if (response.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your enquiry has been sent successfully.'
                        });

                        form[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong!'
                        });
                    }

                    btn.prop("disabled", false);
                    btn.html('Submit <i class="fa fa-angle-double-right"></i>');
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Server Error!',
                        text: 'Please try again.'
                    });

                    btn.prop("disabled", false);
                    btn.html('Submit <i class="fa fa-angle-double-right"></i>');
                }
            });

        });

    });
</script>



</body>

</html>