<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

		<div class="spacer-50"></div>
		<div class="container-fluid mt-5 page-content">
			<div class="container">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-12">
						<strong><h1 class="text-black"><?php the_title(); ?></h1></strong>
					</div>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="col-10">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
					<?php else: ?>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</div>
			</div>
		</div>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
