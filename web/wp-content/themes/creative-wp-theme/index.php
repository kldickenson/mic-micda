<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

	<?php if ( has_post_thumbnail() ): ?>
        <div class="relative">
			<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full max-h-20 object-cover object-top' ) ); ?>
            <div class="absolute w-full bottom-2">
                <div class="contained">
                    <div class="bg-michigan-maize text-3xl font-bold inline py-2 px-4 leading-none uppercase"><?php the_title(); ?></div>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <?php if ( function_exists( 'yoast_breadcrumb' ) ): ?>
        <div class="breadcrumbs contained mt-2 mb-8">
            <?php yoast_breadcrumb( '<p class="text-md font-medium" id="breadcrumbs">', '</p>' ); ?>
        </div>
    <?php endif; ?>

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