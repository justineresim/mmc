<?php get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">
	    <div class="g-container">
			<!-- section -->
			<section>

				<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
