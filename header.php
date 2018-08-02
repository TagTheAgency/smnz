<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
		<link href="https://use.typekit.net/heh7zye.css" rel="stylesheet" >
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- Popups + Overlay -->
		<div class="fixed search-overlay container-fluid white vw-100 vh-100 popup" data-popup="search-overlay">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right pt-5">
						<i id="search-overlay-close" class="material-icons trigger popup-close" data-popup-close="search-overlay">close</i>
					</div>
				</div>
				<div class="row vh-75 align-items-center justify-content-center">
					<div class="col-10">
						<form action="" class="search-form mb-4 input-minimal">
							<input id="search-form-input" class="w-100 b-none bb-2 pl-1" type="text" name="search" placeholder="search...">
						</form>
						<div class="d-flex align-items-center justify-content-between flex-wrap">
							<div class="btn btn-black-filled m-0 btn-sm w-100 w-md-auto">SEARCH</div>
							<p class="d-none d-md-block">Press 'Enter' to search or 'Esc' to close.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navigation -->
		<nav class="fixed">
			<div class="container">
				<div id="navbar" class="row justify-content-between align-items-center">
					<div class="col-auto">
						<i class="material-icons trigger" data-popup-open="search-overlay">search</i>
					</div>
					<div class="col-auto">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) { ?>
							<div class="logo-wrapper">
								<a href="<?= home_url();?>"><img src="<?= esc_url( $logo[0] ) ?>"></a>
							</div>
						<?php } else { ?>
							<h3><?= get_bloginfo( 'name' ) ?></h3>
						<?php } ?>
					</div>
					<div class="col-auto">
						<i class="material-icons">menu</i>
					</div>
				</div>
			</div>
		</nav>
