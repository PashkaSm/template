<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wpa_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php /* favicon */ ?>
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo theme(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php echo theme(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo theme(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo theme(); ?>/img/favicon/manifest.json">
        <link rel="mask-icon" href="<?php echo theme(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#181818">
	<?php /* end favicon */ ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="wrap">
    <header class="header">
        <div class="wrap flex v-center">
            <a href="<?php echo site_url(); ?>/" id="logo">
                <img src="<?php echo theme(); ?>/img/logo.svg" alt="logo">
            </a>
            <nav class="main_nav  mobile_hide">
				<?php
				$main_nav = array(
					'theme_location' => 'main_menu',
					'menu'           => '',
					'container'      => false,
					'menu_class'     => 'level_a'
				);
				wp_nav_menu( $main_nav );
				?>
            </nav>
        </div>
    </header>
