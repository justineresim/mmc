<?php get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">
    	<div class="g-container">
			<!-- section -->
			<section>

				<!-- article -->
				<article id="post-404">

					<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
					<h2>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
					</h2>

				</article>
				<!-- /article -->

			</section>
			<!-- /section -->
		</div>
	</main>

<?php get_footer(); ?>
