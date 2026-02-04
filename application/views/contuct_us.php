<div class="main-content">

    <div class="rainbow-contact-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Contact Form</span></h4>
                        <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <div class="col-lg-12">
                    <div class="rainbow-contact-address mt_dec--30">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-headphones"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Contact Phone Number</h4>
                                        <p><a href="#">+<?= $settings[0]->phone; ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-mail"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Email Address</h4>
                                        <p><a href="mailto:<?= $settings[0]->email; ?>"><?= $settings[0]->email; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-map-pin"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Location</h4>
                                        <p><?= $settings[0]->address; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--40 row--15">
                <div class="col-lg-7">
                    
                    <form class="contact-form-1 rainbow-dynamic-form" id="contact-form">
                        <div class="form-group">
                            <input type="text" name="contact_name" id="contact-name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_phone" id="contact-phone" placeholder="Phone Number"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="contact_email" id="contact-email" placeholder="Your Email"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" id="subject" placeholder="Your Subject" required>
                        </div>

                        <div class="form-group">
                            <textarea name="contact_message" id="contact-message" placeholder="Your Message"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                <span>Submit Now</span>
                            </button>
                        </div>
                    </form>




                </div>
                <div class="col-lg-5 mt_md--30 mt_sm--30">
                    <div class="google-map-style-1">
                        <?= $settings[0]->map; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>