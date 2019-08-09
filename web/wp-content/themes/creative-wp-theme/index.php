<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

	<?php if ( has_post_thumbnail() ): ?>
        <div class="relative">
			<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full' ) ); ?>
            <div class="absolute w-full bottom-2">
                <div class="contained">
                    <h1 class="bg-michigan-maize text-3xl font-bold inline py-2 px-4 leading-none"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <main role="main" id="main" class="contained">
		<?php get_sidebar(); ?>

        <article>
			<?php the_content(); ?>
        </article>
    </main>
<?php }
?>

<?php get_footer(); ?>