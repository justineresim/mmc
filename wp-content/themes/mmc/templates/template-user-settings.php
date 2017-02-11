<?php 

// only let subscribers and administrator see these pages
$current_user = wp_get_current_user(); 
$user_role = $current_user->roles[0];
if($user_role !== 'subscriber' && $user_role !== 'administrator'){
	wp_redirect( home_url() );
	die();
} 

?>

<?php /* Template Name: Subscriber Settings */ get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">

        <div class="g-container">
        
			<!-- section -->
			<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>

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

	</main>


<?php get_footer(); ?>
