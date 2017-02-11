<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#ff0000">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicon/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<!-- Icon Font -->
		<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO6dc3iHK08maUy_IkOV1avgD1gb9wQZI&libraries=places"></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="g-header">
				<div class="g-container-lg">

					<!-- logo -->
					<div class="logo">
						<a title="<?php _e( 'Mindfully Made Canada', 'html5blank' ); ?>" href="<?php echo home_url(); ?>">

						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="g-nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<div class="g-menu">
						<a class="g-search ion-search" title="search"></a>

					<?php
					if ( is_user_logged_in() ) {
						$user = wp_get_current_user();
						$user_id = $user->ID;
						$user_role = $user->roles[0];
						$display_name = $user->display_name;
						$key = 'company-name';
						$redirect = get_permalink();
						$companyname = get_user_meta( $user_id, $key, true); ?>
						<div class="g-menu-dropdown">
							<div class="g-menu-heading">
								<a><?php echo $display_name; ?>&nbsp;<span class="ion-android-arrow-dropdown"></span></a>
							</div>
							<?php if($user_role === 'subscriber'){ ?>

								<div class="g-menu-list">
									<a href="#"><?php _e( 'Collections', 'html5blank' ); ?></a>
									<a href="#"><?php _e( 'Likes', 'html5blank' ); ?></a>
									<a href="/settings/"><?php _e( 'Settings', 'html5blank' ); ?></a>
									<a class="g-signout" href="<?php echo wp_logout_url( $redirect ); ?>"><?php _e( 'Sign out', 'html5blank' ); ?></a>
								</div>

							<?php }else { ?>

								<div class="g-menu-list">
									<a href="#"><?php _e( 'Profile', 'html5blank' ); ?></a>
									<a href="#"><?php _e( 'Collections', 'html5blank' ); ?></a>
									<a href="#"><?php _e( 'Likes', 'html5blank' ); ?></a>
									<a href="/account-password/"><?php _e( 'Settings', 'html5blank' ); ?></a>
									<a class="g-signout" href="<?php echo wp_logout_url( $redirect ); ?>"><?php _e( 'Sign out', 'html5blank' ); ?></a>
								</div>

							<?php } ?>
						</div>

						<?php if($user_role === 'author'){ ?>

							<a class="g-new"><span class="ion-plus g-icon-left"></span>New project</a>

						<?php } ?>
					    	
					<?php } else { ?>
					    <a class="g-loggedout-link" href="/create-an-account/?lang=<?php echo $currentLang; ?>"><?php _e( 'Create Account', 'html5blank' ); ?></a>
						<a class="g-loggedout-link g-signin" href="/login/?lang=<?php echo $currentLang; ?>"><?php _e( 'Sign In', 'html5blank' ); ?></a>

					<?php } ?>

					</div>

				</div>
			</header>
			<!-- /header -->
