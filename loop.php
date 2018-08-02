<?php $args = array('post_type' => 'post'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>
	<div class="post col-12 col-md-6 p-2">
		<a href="<?= get_permalink($post->ID); ?>">
			<div class="w-100 h-100 hp-post-container" style="background-image: url(<?= get_the_post_thumbnail_url();?>)">
				<div class="col-12 white hp-post-info py-4 px-2 d-flex align-items-center">
					<div class="col-9">
						<h2><?= the_title(); ?></h2>
						<p>By <strong><a href=""><?= get_the_author(); ?></a></strong> on <?= get_the_date(); ?> <span class="mx-2">/</span> <?= get_the_category( $post->ID )[0]->name; ?></p>
					</div>
					<div class="row col-3 d-none d-lg-flex text-right align-items-center h-100 hp-post-details">
						<div class="col-12">
							<?= get_favorites_button();  ?> <?= get_favorites_count(); ?>
						</div>
						<div class="col-12">
							<i class="fas fa-comment mr-1"></i> <?= get_comments_number($post->ID); ?>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 class="black"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
