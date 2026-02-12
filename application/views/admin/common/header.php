<?php
if (!$this->session->userdata('user_email')) {
	redirect('admin/login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Responsive Admin Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<?php if (!empty($css_files) && is_array($css_files)): ?>
		<?php foreach ($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?= $file; ?>" />
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (!empty($js_files) && is_array($js_files)): ?>
		<?php foreach ($js_files as $file): ?>
			<script src="<?= $file; ?>"></script>
		<?php endforeach; ?>
	<?php endif; ?>

	<link rel="stylesheet" href="<?= base_url('admin_assets/style.css'); ?>">
	<style>
		a {
			text-decoration: none !important;
			color: inherit !important;
		}
	</style>
	<?php
	$lasturl = $this->uri->segment(2);
	?>
</head>

<body>

	<div class="milan_dashboard">
		<div class="sidebar-overlay" id="sidebarOverlay"></div>

		<aside class="milan_sidebar">
			<div class="sidebar-header">
				<div class="milan_logo">
					<h2>Admin<span>Kit</span></h2>
				</div>
				<button class="close-sidebar" id="closeSidebar">
					<i class="fas fa-times"></i>
				</button>
			</div>

			<ul class="milan_menu">
				<li class="<?php if ($lasturl == "dashboard") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/dashboard'); ?>">
					<div class="menu-item">
						<i class="fas fa-chart-line"></i>
						<span class="menu-text">Dashboard</span>
					</div>
					</a>
				</li>
				<li class="<?php if ($lasturl == "Cms") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Cms'); ?>">
						<div class="menu-item">
							<i class="fa-brands fa-apple"></i>
							<span class="menu-text">Cms</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Service") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Service'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Service</span>
						</div>
					</a>
				</li>
				
				
				<!-- <li class="has-submenu <?php if ($lasturl == "Portfolio") {
								echo "active";
							} ?>">
					<div class="menu-item">
						<div style="display: flex; align-items: center; gap: 10px;">
							<i class="fa-solid fa-gear"></i>
							<span class="menu-text">Portfolio</span>
						</div>
						<i class="fas fa-chevron-right toggle-arrow"></i>
					</div>
					<ul class="milan_submenu <?php if ($lasturl == "Portfolio") {
								echo "open";
							} ?>">
						<a href="<?= site_url('admin/Portfolio'); ?>"><li>Portfolio</li></a>
						<a href="<?= site_url('admin/Portfolio/category');?>"><li>Category</li></a>
					</ul>
				</li> -->


				<li class="<?php if ($lasturl == "Banner") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Banner'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Banner</span>
						</div>
					</a>
				</li>
				<li class="<?php if ($lasturl == "Breadcome") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Breadcome'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Breadcome</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Team") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Team'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-image"></i>
							<span class="menu-text">Team</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Blog") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Blog'); ?>">
						<div class="menu-item">
							<i class="fa-regular fa-file"></i>
							<span class="menu-text">Blog</span>
						</div>
					</a>
				</li>


				<li class="<?php if ($lasturl == "Client_review") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Client_review'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Review</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Products") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Products'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Products</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Gallery") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Gallery'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Our Gallery</span>
						</div>
					</a>
				</li>

				<li class="<?php if ($lasturl == "Youtube") {
								echo "active";
							} ?>">
					<a href="<?= site_url('admin/Youtube'); ?>">
						<div class="menu-item">
							<i class="fa-solid fa-arrows-to-circle"></i>
							<span class="menu-text">Youtube Video</span>
						</div>
					</a>
				</li>
				

				

				<li class="has-submenu <?php if ($lasturl == "Settings") {
								echo "active";
							} ?>">
					<div class="menu-item">
						<div style="display: flex; align-items: center; gap: 10px;">
							<i class="fa-solid fa-gear"></i>
							<span class="menu-text">Acount Settings</span>
						</div>
						<i class="fas fa-chevron-right toggle-arrow"></i>
					</div>
					<ul class="milan_submenu <?php if ($lasturl == "Settings") {
								echo "open";
							} ?>">
						<a href="<?= site_url('admin/Settings'); ?>"><li>Settings</li></a>
						<a href="<?= site_url('admin/Login/logout');?>"><li>Logout</li></a>
						<a href="<?= site_url('');?>"><li>Go to Website</li></a>
					</ul>
				</li>

				

			</ul>
		</aside>

		<main class="milan_main">
			<header class="milan_header">
				<button class="milan_toggle" id="menuToggle">
					<i class="fas fa-bars"></i> Menu
				</button>

				<!-- <div class="header-actions">
					<button class="theme-toggle" id="themeToggle">
						<i class="fas fa-moon"></i> Theme
					</button>
				</div> -->
			</header>
