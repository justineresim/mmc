<?php /* Template Name: Login */ get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">

        <div class="g-container-sm">

			<h1><?php the_title(); ?></h1>

			<?php if( isset( $_REQUEST['password'] ) && ($_REQUEST['password'] == 'changed') ){
				echo '<p><strong>Your password has been changed. You can sign in now.</strong><p>';
			}?>

			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>


		</div>

	</main>

<?php get_footer(); ?>
