<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#00274c"/>

    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="#main" tabindex="0" class="bg-michigan-maize text-michigan-blue block text-center p-4 clip focusable">
    Skip to main content
</a>

<header>
    <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="site logo">
    </a>

    <nav>
		<?php wp_nav_menu( array(
			'theme_location' => 'header_menu',
		) ); ?>
    </nav>

	<?php get_search_form(); ?>
</header>