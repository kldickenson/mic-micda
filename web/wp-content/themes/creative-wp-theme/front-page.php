<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

	<img class="w-full max-h-30 object-cover" src="<?php echo get_theme_mod('creative_hero_image'); ?>" alt="">

	<main role="main" id="main" class="contained">
		<?php get_sidebar(); ?>

		<article>
			<h1 class="mb-12"><?php the_field( 'heading' ); ?></h1>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</article>
	</main>
<?php }
?>

<?php get_footer(); ?>