<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-7437009-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-7437009-4');
    </script>

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

<div id="fade" class="hidden fixed top-0 bottom-0 left-0 right-0 bg-faded z-10 bg-black-50"></div>

<header class="bg-michigan-blue py-8 relative">
    <div class="contained flex items-center justify-between">
        <a class="mr-8" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="site logo">
        </a>

        <div id="header-nav"
             class="lg:overflow-y-visible overflow-y-scroll translate-x--16 transition lg:flex w-64 bg-michigan-blue p-4 lg:p-0 lg:w-auto fixed h-full top-0 left-0 z-20 lg:static ml-auto flex-col items-end">
            <a id="mobile-logo" class="lg:hidden mr-8" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="site logo">
            </a>

            <div class="mb-4">
				<?php get_search_form(); ?>
            </div>

            <nav class="header-menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'header_menu',
					'menu_class'     => 'menu lg:flex text-white font-bold',
					'depth'          => 1,
				) ); ?>
            </nav>
        </div>

        <div class="lg:hidden">
            <button id="menu-toggle" class="hamburger hamburger--collapse" type="button" aria-label="Menu"
                    aria-controls="navigation" aria-expanded="false">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</header>