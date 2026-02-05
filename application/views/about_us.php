<!-- CONTENT START -->
<div class="page-content">

	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper"
		style="background-image:url(<?= base_url(); ?>userpanel/assets/images/banner/about-banner.jpg);">
		<div class="overlay-main bg-black opacity-07"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">About Creative Photo Book</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB  ROW END -->

	<!-- ABOUT COMPANY SECTION START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-8 m-b30">
					<div class="about-com-pic">
						<img src="<?= base_url(); ?>uploads/cms/<?= $cms7[0]->image1; ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-lg-7 col-md-12 m-b30">
					<div class="section-head text-left">
						<h3 class="text-uppercase"><?= $cms7[0]->title; ?> </h3>
						<div class="wt-separator-outer">
							<div class="wt-separator style-icon">
								<i class="fa fa-leaf text-black"></i>
								<span class="separator-left site-bg-primary"></span>
								<span class="separator-right site-bg-primary"></span>
							</div>
						</div>
						<?= $cms7[0]->details; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ABOUT COMPANY SECTION END -->

	<!--COUNTER SECTION START -->
	<div class="section-full p-t30 site-bg-primary">

		<div class="container">
			<!-- COUNTER BLOCKS START -->
			<div class="section-content">
				<div class="row">

					<div class="col-md-3 col-sm-6">
						<div class="wt-icon-box-wraper right p-a10 text-white m-b30">
							<span class="icon-md p-t10">
								<i class="fa fa-building"></i>
							</span>
							<div class="icon-content">
								<div class="font-26 font-weight-800  m-b5"><span class="counter">1000</span><b>+</b>
								</div>
								<span class="text-uppercase">Happy Clients</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="wt-icon-box-wraper right p-a10 text-white m-b30">
							<span class="icon-md p-t10">
								<i class="fa fa-users"></i>
							</span>
							<div class="icon-content">
								<div class="font-26 font-weight-800  m-b5"><span class="counter">1500</span><b>+</b>
								</div>
								<span>HAPPY CLIENTS</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="wt-icon-box-wraper right p-a10 text-white m-b30">
							<span class="icon-md p-t10">
								<i class="fa fa-user-plus"></i>
							</span>
							<div class="icon-content">
								<div class="counter font-26 font-weight-800 m-b5">4500</div>
								<span>WORKERS EMPLOYED</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="wt-icon-box-wraper right p-a10 text-white m-b30">
							<span class="icon-md p-t10">
								<i class="fa fa-trophy"></i>
							</span>
							<div class="icon-content">
								<div class="counter font-26 font-weight-800 m-b5">260</div>
								<span>AWARDS WON</span>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- COUNTER BLOCKS START -->
		</div>
	</div>
	<!-- COUNTER SECTION END -->

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
									<a href="<?= base_url('product-details/' . $p->product_slug) ?>"
										title="<?= $p->title ?>">
										<img src="<?= base_url(); ?>uploads/product/<?= $p->image_1; ?>"
											alt="<?= $p->title ?>">
									</a>
								</div>
								<div class="wt-info p-a30 bg-gray">
									<h4 class="wt-title m-t0">
										<a href="<?= base_url('product-details/' . $p->product_slug) ?>"
											title="<?= $p->title ?>">
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
										<img src="<?= base_url(); ?>uploads/our_team/<?= $team->member_image; ?>"
											alt="<?= $team->name; ?>">
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

</div>
<!-- CONTENT END -->