<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post(); ?>

  <main role="main" id="main">
    <?php get_sidebar(); ?>

    <article>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  </main>
<?php }
?>

<?php get_footer(); ?>