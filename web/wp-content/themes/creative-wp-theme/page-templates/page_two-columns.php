<?php /* Template Name: Two Column */ ?>

<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

    <main role="main" id="main" class="lg:flex">
        <div class="lg:w-7/12">
			<?php if ( has_post_thumbnail() ): ?>
                <div class="relative">
					<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full max-h-20 object-cover object-top' ) ); ?>
                    <div class="absolute w-full bottom-2">
                        <div class="ml-4 lg:ml-12">
                            <div class="bg-michigan-maize md:text-2xl xl:text-3xl font-bold inline py-2 px-4 leading-none uppercase"><?php the_title(); ?></div>
                        </div>
                    </div>
                </div>
			<?php endif; ?>

			<?php if ( function_exists( 'yoast_breadcrumb' ) ): ?>
                <div class="breadcrumbs mt-2 mb-8 ml-4 lg:ml-12">
					<?php yoast_breadcrumb( '<p class="text-md font-medium breadcrumbs" id="breadcrumbs">', '</p>' ); ?>
                </div>
			<?php endif; ?>

            <article class="mx-4 lg:mx-12 mb-20">
                <h1 class="mb-12"><?php the_field( 'heading' ); ?></h1>
                <div class="content">
					<?php the_content(); ?>
                </div>
            </article>
        </div>

        <div class="lg:w-5/12 flex flex-col">
            <div class="trends-annual bg-pale-grey flex-grow px-4 lg:px-16 py-20">
                <h2 class="text-michigan-blue"><?php the_field('right_top_area_heading'); ?></h2>
				<?php the_field( 'right_top_area' ); ?>
            </div>

            <div class="trends-contact bg-denim text-white mt-auto px-4 lg:px-16 py-12">
                <h2 class="text-michigan-maize"><?php the_field('right_bottom_area_heading'); ?></h2>
				<?php the_field( 'right_bottom_area' ); ?>
            </div>
        </div>
    </main>
<?php }
?>

<?php get_footer(); ?>
