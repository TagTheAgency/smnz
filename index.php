<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid hero-container">
			<div class="row hero-banner hero-banner-full vh-50 text-center align-items-center justify-content-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/');">
				<div class="col-12 col-md-10 row justify-content-center align-items-center">
					<div class="col-10 col-sm-9 col-md-6 text-black order-2 order-md-1">
						<h2 class="hero-header ls-15 ml-3 text-black font-2 font-md-3"><strong>HEADER</strong></h2>
						<p class="hero-sub-header font-1 font-md-2 ls-2 ls-md-6">THIS IS A TAG LINE</p>
						<div class="btn btn-primary m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></div>
					</div>
					<div class="col-10 mb-3 mb-md-0 col-sm-9 col-md-6 order-1 order-md-2">
						<div class="img-container">
							<img src="<?php echo get_template_directory_uri(); ?>/img/uni.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-white">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
