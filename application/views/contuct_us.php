<!-- CONTENT START -->
<div class="page-content">

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact 3</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENTG START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <div class="section-content m-b50">
                <div class="row">

                    <!-- LOCATION BLOCK-->
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Location</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <div class="gmap-outline m-b30">
                            <div id="gmap_canvas" class="google-map">
                                <?= $settings[0]->map;?>
                            </div>
                        </div>
                    </div>

                    <!-- CONTACT FORM-->
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Form </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <form class="cons-contact-form p-a30 bg-gray" method="post">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="username" type="text" required class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="text" class="form-control" required
                                                placeholder="Email">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-m"><i
                                                    class="fa fa-pencil"></i></span>
                                            <textarea name="message" rows="4" class="form-control " required
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit
                                        <i class="fa fa-angle-double-right"></i></button>
                                    <button name="Resat" type="reset" value="Reset" class="site-button ">Reset <i
                                            class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>

            <!-- CONTACT DETAIL BLOCK -->
            <div class="section-content ">
                <div class="row">
                    <div class="wt-box col-md-12">
                        <h4 class="text-uppercase">Contact Detail </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20"><span
                                            class="icon-cell text-white"><i class="fa fa-phone"></i></span></div>
                                    <div class="icon-content">
                                        <h5>Phone</h5>
                                        <p><?= $settings[0]->phone;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20"><span
                                            class="icon-cell text-white"><i class="fa fa-envelope"></i></span></div>
                                    <div class="icon-content">
                                        <h6>Email</h6>
                                        <p><?= $settings[0]->email;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20"><span
                                            class="icon-cell text-white"><i class="fa fa-map-marker"></i></span></div>
                                    <div class="icon-content">
                                        <h5>Address</h5>
                                        <p><?= strip_tags($settings[0]->address);?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->