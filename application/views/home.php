<!-- CONTENT START -->
<div class="page-content">

  <!-- SLIDER START -->
  <!-- SLIDER START -->
  <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light"
    data-source="gallery" style="background-color:transparent;padding:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
    <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" style="display:none;"
      data-version="5.4.1">
      <ul>
        <?php if (!empty($banner)): ?>
          <?php $slide_number = 2938; ?>
          <?php foreach ($banner as $key => $slide): ?>
            <!-- SLIDE  -->
            <li data-index="rs-<?= $slide_number; ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default"
              data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
              data-masterspeed="default" data-thumb="<?= base_url('uploads/banner/' . $slide->image); ?>" data-rotate="0"
              data-fsslotamount="7" data-saveperformance="off" data-title data-param1="Additional Text" data-param2
              data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10
              data-description>
              <!-- MAIN IMAGE -->
              <img src="<?= base_url('uploads/banner/' . $slide->image); ?>" alt data-bgposition="center center"
                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-<?= $slide_number; ?>-layer-01"
                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                <div class="text-secondry"><?= $slide->heading; ?></div>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-<?= $slide_number; ?>-layer-02"
                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                data-fontsize="['55','55','55','30']" data-lineheight="['75','75','75','75']"
                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;
                                ">
                <div class="text-secondry"><?= $slide->sub_title; ?></div>
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-<?= $slide_number; ?>-layer-03"
                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                data-fontsize="['21','21','24','18']" data-lineheight="['28','28','32','26']"
                data-width="['700','700','700','300']" data-height="['none','none','76','68']" data-whitespace="normal"
                data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;">
                <div class="text-secondry"> Welcome to
                  beauty lab, where you can relax and
                  enjoy life. A little peace in a crazy
                  world goes a long way.</div>
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" id="slide-<?= $slide_number; ?>-layer-04"
                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="button"
                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<?= $slide_number; ?>","delay":""}]'
                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index:13; text-transform:uppercase; font-weight:700;">
                <a href="services-detail.html" class="site-button radius-sm button-lg">See
                  all Services</a>
              </div>
              <!-- LAYER NR. 5 -->

              <div class="tp-caption tp-resizeme" id="slide-<?= $slide_number; ?>-layer-05"
                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="button"
                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<?= $slide_number; ?>","delay":""}]'
                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]"
                style="z-index:13; text-transform:uppercase; font-weight:700;">
                <a href="about-1.html" class="site-button-secondry radius-sm button-lg">More
                  detail</a>
              </div>

            </li>
            <?php $slide_number++; ?>
          <?php endforeach; ?>
        <?php else: ?>
          <!-- Default slides if no banner data -->
          <!-- SLIDE  -->
          <li data-index="rs-2938" data-transition="slidingoverlayhorizontal" data-slotamount="default"
            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
            data-masterspeed="default"
            data-thumb="<?= base_url(); ?>userpanel/assets/images/main-slider/slider2/slide1.jpg" data-rotate="0"
            data-fsslotamount="7" data-saveperformance="off" data-title data-param1="Additional Text" data-param2
            data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10
            data-description>
            <!-- MAIN IMAGE -->
            <img src="<?= base_url(); ?>userpanel/assets/images/main-slider/slider2/slide1.jpg" alt
              data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
              data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
              data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
              data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
              data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
              data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on"
              data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
              <div class="text-secondry"> Best Place <span class="site-text-primary"> For
                  you</span></div>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
              data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
              data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
              data-fontsize="['55','55','55','30']" data-lineheight="['75','75','75','75']"
              data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on"
              data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;
                                ">
              <div class="text-secondry">
                <span class="site-text-primary">Harbal</span>
                Treatment
              </div>
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
              data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
              data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
              data-fontsize="['21','21','24','18']" data-lineheight="['28','28','32','26']"
              data-width="['700','700','700','300']" data-height="['none','none','76','68']" data-whitespace="normal"
              data-type="text" data-responsive_offset="on"
              data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;">
              <div class="text-secondry"> Welcome to
                beauty lab, where you can relax and
                enjoy life. A little peace in a crazy
                world goes a long way.</div>
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04" data-x="['left','left','left','left']"
              data-hoffset="['30','30','20','20']" data-y="['middle','middle','top','top']"
              data-voffset="['180','180','480','400']" data-width="none" data-height="none" data-whitespace="nowrap"
              data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
              data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index:13; text-transform:uppercase; font-weight:700;">
              <a href="services-detail.html" class="site-button radius-sm button-lg">See
                all Services</a>
            </div>
            <!-- LAYER NR. 5 -->

            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05" data-x="['left','left','left','left']"
              data-hoffset="['240','240','200','200']" data-y="['middle','middle','top','top']"
              data-voffset="['180','180','480','400']" data-width="none" data-height="none" data-whitespace="nowrap"
              data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
              data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]"
              style="z-index:13; text-transform:uppercase; font-weight:700;">
              <a href="about-1.html" class="site-button-secondry radius-sm button-lg">More
                detail</a>
            </div>

          </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
  <!-- SLIDER END -->
  <!-- SLIDER END -->

  <!-- WELCOME SECTION START -->
  <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-no-repeat"
    style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/bg-1.png);">
    <div class="container ">
      <div class="section-head text-center">
        <h1><?= $cms1[0]->title ?></h1>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>

        <p class="font-16">
          <strong>
            <?= $cms1[0]->sub_title ?>
          </strong>
        </p>

      </div>
      <div class="section-content text-center about-spa m-b30">
        <?= $cms1[0]->details ?>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-3 col-md-4 m-b30">
            <div class="wt-icon-box-wraper p-a30 center">
              <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                <span class="icon-cell text-white">
                  <i class="fa fa-folder-open" aria-hidden="true"></i>
                </span>
              </div>
              <div class="icon-content">
                <h4 class="wt-tilte font-weight-500">
                  High Quality Paper
                </h4>
                <p class="text-secondry">
                  We use premium-grade photo paper
                  that enhances color accuracy,
                  sharpness, and durability,
                  ensuring your memories remain
                  vibrant for years.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 m-b30">
            <div class="wt-icon-box-wraper p-a30 center">
              <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                <span class="icon-cell text-white">
                  <i class="fa fa-print" aria-hidden="true"></i>
                </span>
              </div>
              <div class="icon-content">
                <h4 class="wt-tilte font-weight-500">
                  HP Indigo Printer
                </h4>
                <p class="text-secondry">
                  Printed using industry-leading
                  HP Indigo digital printers,
                  delivering true-to-life colors,
                  smooth gradients, and
                  professional print precision.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 m-b30">
            <div class="wt-icon-box-wraper p-a30 center">
              <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                <span class="icon-cell text-white">
                  <i class="fa fa-tint" aria-hidden="true"></i>
                </span>
              </div>
              <div class="icon-content">
                <h4 class="wt-tilte font-weight-500">
                  Industry Standard Ink</h4>
                <p class="text-secondry">
                  Our fade-resistant, eco-friendly
                  inks provide rich tones and
                  long-lasting print quality
                  without compromising image
                  clarity.

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 m-b30">
            <div class="wt-icon-box-wraper p-a30 center">
              <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                <span class="icon-cell text-white">
                  <i class="fa fa-book"></i>
                </span>
              </div>
              <div class="icon-content">
                <h4 class="wt-tilte font-weight-500">Industry
                  Level Binding</h4>
                <p class="text-secondry">Strong,
                  precise binding ensures
                  durability and a premium feel,
                  giving your photo books a
                  flawless finish that lasts a
                  lifetime.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- WELCOME COMPANY SECTION END -->

  <!-- OUR PRODUCT SECTION START  -->
  <div class="section-full bg-white p-t100 p-b70 bg-bottom-right bg-no-repeat"
    style="background-image:url(<?= base_url(); ?>userpanel/assets/images/stone-spa.png)">
    <div class="container">
      <!-- TITLE START-->
      <div class="section-head text-center">
        <h2><?= $cms2[0]->title; ?></h2>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>
        <?= $cms2[0]->details; ?>
      </div>
      <!-- TITLE END-->
      <div class="section-content">
        <div class="row">

          <?php foreach ($product as $p) { ?>
            <div class="col-lg-4 col-md-6 m-b30">
              <div class="wt-box bg-white">
                <div class="wt-media">
                  <a href="<?= base_url('product-details/' . $p->product_slug) ?>" title="<?= $p->title ?>">
                    <img src="<?= base_url(); ?>uploads/product/<?= $p->image_1; ?>" alt="<?= $p->title ?>">
                  </a>
                </div>
                <div class="wt-info p-a30 bg-gray">
                  <h4 class="wt-title m-t0">
                    <a href="<?= base_url('product-details/' . $p->product_slug) ?>" title="<?= $p->title ?>">
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
  <!-- OUR PRODUCT SECTION END  -->

  <!-- OUR SPECIAL OFFER SECTION start  -->
  <div class="section-full  special-offer-block2 overlay-wraper bg-repeat p-t100 p-b70"
    style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/bg-6.jpg);">
    <div class="overlay-main bg-white opacity-01"></div>
    <div class="left-larg-pic">
      <div class="wt-media">
        <img src="<?= base_url(); ?>uploads/cms/<?= $cms3[0]->image1; ?>" alt="<?= $cms3[0]->title; ?>">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">

        </div>
        <div class="col-md-9 col-sm-9 m-b30">
          <div class="awesome-counter text-right">
            <h3 class="font-24 text-secondry"><?= $cms3[0]->title; ?></h3>
            <h2 class="font-60 font-weight-600"><span class="site-text-primary"><?= $cms3[0]->sub_title; ?></span></h2>
            <?= $cms3[0]->details; ?>
          </div>

          <div class="pull-right counter-small-1">
            <ul class="list-inline">
              <li>
                <div class="wt-icon-box-wraper left p-a10 text-secondry">
                  <span class="icon-sm">
                    <span class="flaticon-happy"></span>
                  </span>
                  <div class="icon-content">
                    <div class="font-20 font-weight-600"><span class="counter">458</span><b>+</b></div>
                    <span class="text-uppercase">Happy
                      Clients</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="wt-icon-box-wraper left p-a10 text-secondry">
                  <span class="icon-sm">
                    <span class="flaticon-trophy"></span>
                  </span>
                  <div class="icon-content">
                    <div class="font-20 font-weight-600"><span class="counter">698</span><b>+</b></div>
                    <span class="text-uppercase">Win
                      Awards</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="wt-icon-box-wraper left p-a10 text-secondry">
                  <span class="icon-sm">
                    <span class="flaticon-female-hairs"></span>
                  </span>
                  <div class="icon-content">
                    <div class="font-20 font-weight-600"><span class="counter">894</span><b>+</b></div>
                    <span class="text-uppercase">Our
                      Trainer</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR SPECIAL OFFER SECTION END  -->

  <!-- TEAM STYLE FOUR START -->
  <div class="section-full p-t80 p-b50">
    <div class="container">

      <div class=" m-b70">
        <!-- TITLE START -->
        <div class="section-head text-center">
          <h3 class="text-uppercase"><?= $cms4[0]->title; ?></h3>
          <div class="wt-separator-outer ">
            <div class="wt-separator-outer">
              <div class="wt-separator style-icon">
                <i class="fa fa-leaf text-black"></i>
                <span class="separator-left site-bg-primary"></span>
                <span class="separator-right site-bg-primary"></span>
              </div>
            </div>
          </div>
          <?= $cms4[0]->details; ?>
        </div>
        <!-- TITLE END -->
      </div>
      <div class="section-content">
        <div class="row">

          <!-- COLUMNS 1 -->
          <?php if (!empty($our_team)) { ?>
            <?php foreach ($our_team as $team) { ?>
              <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="wt-team-four">
                  <div class="wt-team-media">
                    <img src="<?= base_url(); ?>uploads/our_team/<?= $team->member_image; ?>" alt="<?= $team->name; ?>">
                  </div>
                  <div class="wt-team-info">
                    <div class="p-a20">
                      <h4 class="wt-team-title text-uppercase"><?= $team->name; ?></h4>
                      <p style="color: #D6110B;"><?= $team->position; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php } ?>


        </div>


      </div>

    </div>
  </div>
  <!-- TEAM STYLE FOUR END -->

  <!-- OUR GALLERY SECTION END  -->
  <div class="section-full p-t100">
    <div class="container">

      <!-- TITLE START-->
      <div class="section-head text-center">
        <h1><?= $cms5[0]->title; ?></h1>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>
        <p><?= $cms5[0]->details; ?></p>
      </div>
      <!-- TITLE END-->

    </div>
    <!-- GALLERY CONTENT START -->
    <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
      <div class="container-fluid">
        <div class="row">
          <!-- COLUMNS 1 -->
          <?php foreach ($gallery as $g) { ?>
            <div class="masonry-item cat-filter-1 col-xl-3 col-lg-6 col-md-6">
              <div class="flip-container">
                <div class="wt-box">
                  <div class="wt-thum-bx">
                    <img src="<?= base_url(); ?>uploads/gallery/<?= $g->image; ?>" alt="<?= $g->image_title; ?>">
                  </div>
                  <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                    <div class="wt-info-media-zoom">
                      <a href="<?= base_url(); ?>uploads/gallery/<?= $g->image; ?>" class="mfp-link">
                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                      </a>
                    </div>
                    <div class="wt-info-text p-a30">
                      <h3><?= $g->image_title; ?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <!-- GALLERY CONTENT END -->

  </div>
  <!-- OUR GALLERY CONTENT END  -->


  <!-- OUR TESTIMONIAL SECTION START  -->
  <div class="section-full bg-gray bg-repeat p-t100 p-b70"
    style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/bg-6.jpg);">
    <div class="container">
      <!-- TITLE START-->
      <div class="section-head text-center">
        <h1><?= $cms6[0]->title; ?></h1>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>
        <?= $cms6[0]->details; ?>
      </div>
      <!-- TITLE END-->
      <div class="section-content">
        <div class="owl-carousel home-carousel-1 m-b30">

          <?php foreach ($client_review as $testi): ?>
            <div class="item">
              <div class="testimonial-5 bg-white radius-sm">
                <div class="testimonial-pic-block radius-bx">
                  <div class="testimonial-pic radius">
                    <img src="<?= base_url(); ?>uploads/client_review/<?= $testi->client_image; ?>" width="132"
                      height="132" alt="<?= $testi->client_name; ?>">
                  </div>
                </div>
                <div class="testimonial-text clearfix">
                  <div class="testimonial-paragraph">
                    <span class="fa fa-quote-left site-text-primary"></span>
                    <?= $testi->client_comment; ?>
                  </div>
                  <div class="testimonial-detail clearfix">
                    <strong class="testimonial-name"><?= $testi->client_name; ?></strong>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR TESTIMONIAL SECTION END  -->

  <!-- CONTACT US SECTION END  -->
  <div class="section-full p-t100 p-b70">
    <div class="container equal-wraper no-col-gap m-b30">

      <!-- TITLE START -->
      <div class="section-head text-center">
        <h1><span class="site-text-primary"> Contact</span>
          Us</h1>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing
          and typesetting industry. Lorem Ipsum has been
          the industry's standard dummy text ever since
          the 1500s.</p>
      </div>
      <!-- TITLE END -->

      <div class="row conntact-home bg-gray m-b30">
        <div class="col-lg-4 col-md-6 contact-home-left bg-no-repeat site-bg-primary bg-left-center"
          style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/contact-map.png);">
          <div class="section-content">
            <div class="p-a50">

              <div class="wt-icon-box-wraper left p-b20 text-white">
                <span class="icon-lg">
                  <span class="flaticon-placeholder"></span>
                </span>
                <div class="icon-content">
                  <h4 class="m-b5">Address</h4>
                  <span class="font-12">295
                    Madison Ave, 12th Floor New
                    York, NY 10017</span>
                </div>
              </div>

              <div class="wt-icon-box-wraper left p-b20 text-white">
                <span class="icon-lg">
                  <span class="flaticon-envelope"></span>
                </span>
                <div class="icon-content">
                  <h4 class="m-b5">Email</h4>
                  <span class="font-12">info
                    @example.com </span><br>
                  <span class="font-12">info2
                    @example.com </span>
                </div>
              </div>

              <div class="wt-icon-box-wraper left p-b20 text-white">
                <span class="icon-lg">
                  <span class="flaticon-smartphone"></span>
                </span>
                <div class="icon-content">
                  <h4 class="m-b5">Phone</h4>
                  <span class="font-12">+77 634
                    545 144 </span><br>
                  <span class="font-12">+77 634
                    255 147 </span>
                </div>
              </div>

              <div class="Opening-hours text-white">
                <h3 class="wt-title text-uppercase m-t0">Opening
                  Hours</h3>
                <ul class="list-unstyled">
                  <li>Monday - Friday <span class="pull-right">9.00
                      - 5.00 Pm</span></li>
                  <li>Saturday <span class="pull-right">9.00
                      - 2.00 Pm</span></li>
                  <li>Sunday <span class="pull-right">Closed</span></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="section-content bg-gray">
            <div class="contact-home-right p-a30">
              <h5 class="text-uppercase font-26 p-b20 font-weight-400">GET
                IN TOUCH</h5>
              <form class="cons-contact-form2" method="post" action="https://thewebmax.org/spa/form-handler2.php">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="username" type="text" required class="form-control" placeholder="Neme">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="email" type="text" class="form-control" required placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                </div>
                <button type="submit" class="site-button skew-icon-btn radius-sm">
                  <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- CONTACT US OFFER SECTION END  -->

  <!-- OUR CLIENT SLIDER START -->
  <div class="section-full p-t100 p-b70 bg-repeat"
    style="background-image:url(<?= base_url(); ?>userpanel/assets/images/background/bg-6.jpg);">
    <div class="container">

      <div class="section-head text-center">
        <h1><span class="site-text-primary"> Our</span>
          Client</h1>
        <div class="wt-separator-outer ">
          <div class="wt-separator style-icon">
            <i class="fa fa-leaf text-black"></i>
            <span class="separator-left site-bg-primary"></span>
            <span class="separator-right site-bg-primary"></span>
          </div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing
          and typesetting industry. Lorem Ipsum has been
          the industry's standard dummy text ever since
          the 1500s.</p>
      </div>

      <div class="section-content">
        <div class="owl-carousel client-logo-carousel m-b30">

          <!-- COLUMNS 1 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo1.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 2 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo2.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 3 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo3.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 4 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo4.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 5 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo5.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 6 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo6.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 7 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo7.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 8 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo8.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 9 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo9.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 10 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo10.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 11 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo11.png"
                    alt></a>
              </div>
            </div>
          </div>
          <!-- COLUMNS 12 -->
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo wt-img-effect on-color">
                <a href="<?= base_url();?>"><img src="<?= base_url(); ?>userpanel/assets/images/client-logo/logo12.png"
                    alt></a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- IMAGE CAROUSEL START -->
    </div>
  </div>
  <!-- OUR CLIENT SLIDER END -->

</div>
<!-- CONTENT END -->