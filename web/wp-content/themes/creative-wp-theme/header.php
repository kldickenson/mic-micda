<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
  <?php wp_head(); ?>
</head>

<body>

  <a href="#main" tabindex="0">
    Skip to main content
  </a>

  <header>
    <?php if (has_custom_logo()) : ?>
      <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
    <nav>
      <?php wp_nav_menu('header_nav_menu'); ?>
    </nav>
  </header>