<?php get_header(); ?>

	<main role="main">
		<div class="grey container-fluid text-white py-5">
			<div class="container mt-5">
				<div class="row">
					<?php get_template_part('loop'); ?>
				</div>
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
