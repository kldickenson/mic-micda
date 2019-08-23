<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

    <main role="main" id="main" class="flex">
        <div class="w-7/12">
			<?php if ( has_post_thumbnail() ): ?>
                <div class="relative">
					<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full max-h-20 object-cover object-top' ) ); ?>
                    <div class="absolute w-full bottom-2">
                        <div class="ml-12">
                            <div class="bg-michigan-maize text-3xl font-bold inline py-2 px-4 leading-none uppercase"><?php the_title(); ?></div>
                        </div>
                    </div>
                </div>
			<?php endif; ?>

			<?php if ( function_exists( 'yoast_breadcrumb' ) ): ?>
                <div class="breadcrumbs mt-2 mb-8 ml-12">
					<?php yoast_breadcrumb( '<p class="text-md font-medium" id="breadcrumbs">', '</p>' ); ?>
                </div>
			<?php endif; ?>

            <article class="mx-12 mb-20">
                <h1 class="mb-12"><?php the_field( 'heading' ); ?></h1>
                <div class="content">
					<?php the_content(); ?>
                </div>
            </article>
        </div>

        <div class="w-5/12 flex flex-col">
            <div class="trends-annual bg-pale-grey flex-grow px-16 py-20">
                <h2 class="text-michigan-blue"><?php echo __( 'Annual Trends Workshop', 'creative-wp-theme' ); ?></h2>
				<?php the_field( 'annual_trends_workshops' ); ?>
            </div>

            <div class="trends-contact bg-denim text-white mt-auto px-16 py-12">
                <h2 class="text-michigan-maize"><?php echo __( 'Contact', 'creative-wp-theme' ); ?></h2>
				<?php the_field( 'contact' ); ?>
            </div>
        </div>
    </main>
<?php }
?>

<?php get_footer(); ?>