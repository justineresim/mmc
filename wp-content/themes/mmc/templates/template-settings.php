<?php 

// only let authors and administrator see these pages
$current_user = wp_get_current_user(); 
$user_role = $current_user->roles[0];
if($user_role !== 'administrator' && $user_role !== 'author'){
	wp_redirect( home_url() );
	die();
} 

?>

<?php /* Template Name: Partner Settings */ get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">

        <div class="g-container-lg g-clearfix">

			<div class="g-container-sidebar g-left">

				<h1><?php _e( 'Settings', 'html5blank' ); ?></h1>

				<nav class="g-side-nav" role="navigation">
					<?php sidebar_nav(); ?>
				</nav>

			</div>


	        <div class="g-container-main g-right">

				<!-- section -->
				<section>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->

			</div>
		</div>

	</main>


<?php get_footer(); ?>
