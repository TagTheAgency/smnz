<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="light-grey pt-5">
		<div class="container d-flex justify-content-center mt-5">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="col-12 col-md-9">
				<!-- article -->
				<article id="post-<?php the_ID(); ?>">

					<!-- post header info -->
					<div class="col-12 row">
						<h1 class="single-post-title mb-3">
							<?= the_title(); ?>
						</h1>
					</div>
					<div class="col-12 single-post-details row">
						<div>
							By <strong><a href=""><?= get_the_author(); ?></a></strong> on <?= get_the_date(); ?>
						</div>
						<span class="mx-2 mx-md-3 detail-divider">/</span>
						<div>
							<strong><a href=""><?= get_the_category( $post->ID )[0]->name; ?></a></strong>
						</div>
						<span class="mx-2 mx-md-3 detail-divider">/</span>
						<div>
							<span class="mr-2 mr-md-3">
								<i class="fas fa-comment"></i> <?= get_comments_number($post->ID); ?>
							</span>
							<span class="div">
								<?= get_favorites_button(); ?> <?= get_favorites_count(); ?>
							</span>
						</div>
						<span class="mx-2 mx-md-3 detail-divider">/</span>
						<div>
							<span class="mr-2 mr-md-2">
								Share:
							</span>
							<span class="mr-2 mr-md-3">
								<i class="fab fa-facebook-f"></i>
							</span>
							<span class="mr-2 mr-md-3">
								<i class="fab fa-instagram"></i>
							</span>
							<span class="">
								<i class="fab fa-twitter"></i>
							</span>
						</div>
					</div>
					<!-- /post header info -->

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) :?>
						<div class="img-container">
							<?php the_post_thumbnail();?>
						</div>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<?php the_content();?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

					<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php comments_template(); ?>

				</article>
				<!-- /article -->
			</div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>
		</div>
	</section>
	<!-- /section -->
	</main>
<?php get_footer(); ?>
