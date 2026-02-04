<!DOCTYPE html>

<html lang="en">

<head>

  <!-- META -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content>
  <meta name="author" content>
  <meta name="robots" content>
  <meta name="description" content>

  <!-- FAVICONS ICON -->
  <link rel="icon" href="<?= base_url();?>uploads/settings/<?= $settings[0]->favicon;?>" type="image/x-icon">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>userpanel/assets/images/favicon.png">

  <!-- PAGE TITLE HERE -->
  <title>Creative Photo Book</title>

  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/fontawesome/css/font-awesome.min.css">
  <!-- FONTAWESOME STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/flaticon.min.css"><!-- FLATICON STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/animate.min.css"><!-- ANIMATE STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/bootstrap-select.min.css"><!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/loader.min.css"><!-- LOADER STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/style.css"><!-- MAIN STYLE SHEET -->
  <link rel="stylesheet" type="text/css" class="skin" href="<?= base_url();?>userpanel/assets/css/skin/skin-5.css"><!-- THEME COLOR CHANGE STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/css/switcher.css"><!-- SIDE SWITCHER STYLE SHEET -->

  <!-- GOOGLE FONTS -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/<?= base_url();?>userpanel/assets/css/all.min.css"> -->

  <!-- REVOLUTION SLIDER CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/plugins/revolution/revolution/css/settings.css">
  <!-- REVOLUTION NAVIGATION STYLE -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>userpanel/assets/plugins/revolution/revolution/css/navigation.css">

</head>

<body id="bg">

  <div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-6 mobile-sider-drawer-menu">

      <!-- Search Form -->
      <div class="main-bar header-middle bg-white">
        <div class="container">
          <div class="logo-header">
            <a href="<?= base_url();?>">  
              <img src="<?= base_url('uploads/settings/' . $settings[0]->logo); ?>" alt="Logo" width="216" height="37" alt="<?= $settings[0]->company_name;?> Logo">
            </a>
          </div>
          <div class="header-info">
            <ul>
              <li>
                <div>
                  <div class="icon-sm">
                    <span class="icon-cell  site-text-primary"><i class="flaticon-placeholder"></i></span>
                  </div>
                  <div class="icon-content">
                    <strong>Our Location </strong>
                    <span><?= strip_tags($settings[0]->address);?></span>
                  </div>
                </div>
              </li>
              <li>
                <div>
                  <div class="icon-sm">
                    <span class="icon-cell  site-text-primary">
                      <i class="flaticon-smartphone"></i></span>
                  </div>
                  <div class="icon-content">
                    <strong>Phone Number</strong>
                    <span><?= $settings[0]->phone;?></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Search Form -->
      <div class="sticky-header main-bar-wraper">
        <div class="main-bar header-botton nav-bg-secondry">
          <div class="container">
            <!-- MAIN Nav -->
            <div class="header-nav navbar-collapse collapse ">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="<?= base_url();?>"> Home </a>
                </li>
                <li class>
                  <a href="<?= base_url();?>about-us"> About </a>
                </li>
                <li class>
                  <a href="<?= base_url();?>product"> Album Cover
                  </a>
                </li>
                <li class>
                  <a href="<?= base_url();?>contact"> Contact Us </a>
                </li>
              </ul>
            </div>

            <!-- NAV Toggle Button -->
            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
              class="navbar-toggler collapsed">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar icon-bar-first"></span>
              <span class="icon-bar icon-bar-two"></span>
              <span class="icon-bar icon-bar-three"></span>
            </button>
            <!-- ETRA Nav -->
            <div class="extra-nav">
              <div class="extra-cell">
                <a class="site-button text-uppercase radius-sm font-weight-700">Login/Signup</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </header>
    <!-- HEADER END -->