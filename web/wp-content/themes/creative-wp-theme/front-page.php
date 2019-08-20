<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

    <img class="w-full max-h-30 object-cover" src="<?php echo get_theme_mod( 'creative_hero_image' ); ?>" alt="">

    <main role="main" id="main" class="contained">
	    <section class="mb-16 mt-10 text-center">
		    <h1 class="text-5xl uppercase leading-none text-michigan-blue mb-12">
			    <span class="block"><?php echo get_theme_mod('creative_heading_1'); ?></span>
			    <span class="block font-bold"><?php echo get_theme_mod('creative_heading_2'); ?></span>
		    </h1>

		    <a class="button" href="<?php echo get_theme_mod('creative_button_url'); ?>">
			    <?php echo get_theme_mod('creative_button_text'); ?>
		    </a>
	    </section>

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