<?php
/* Template Name: Pilot Projects Page
*/
?>
<?php get_header(); ?>

<?php
while ( have_posts() ) {
	the_post(); ?>

	<?php if ( has_post_thumbnail() ): ?>
        <div class="relative">
			<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full h-64 md:h-72 object-cover object-top' ) ); ?>
            <div class="absolute w-full bottom-2">
                <div class="contained">
                    <div class="bg-michigan-maize text-2xl md:text-3xl font-bold inline py-2 px-4 leading-none uppercase"><?php the_title(); ?></div>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <div class="contained mt-2 mb-8">
		<?php if ( function_exists( 'yoast_breadcrumb' ) ): ?>
			<?php yoast_breadcrumb( '<p class="text-md font-medium breadcrumbs" id="breadcrumbs">', '</p>' ); ?>
		<?php endif; ?>
    </div>

    <main role="main" id="main" class="">

        <article>
            <h1 class="container lg:mx-auto px-4 mb-12 font-medium tracking-tight"><?php the_field( 'heading' ); ?></h1>
            <div class="container lg:mx-auto px-4">
				<?php the_content(); ?>
            </div>


            <div class="projects bg-pale-grey pt-12">
				<?php

				$post_type = 'projects';
				$tax       = 'years';
				$tax_terms = get_terms( $tax, 'orderby=date&order=DESC' );
				if ( $tax_terms ) {
					foreach ( $tax_terms as $tax_term ) {
						$args = array(
							'post_type'      => $post_type,
							"$tax"           => $tax_term->slug,
							'post_status'    => 'publish',
							'posts_per_page' => - 1
						); ?>
                        <section class="projects pt-4 px-4">
                            <div class="max-w-5xl mx-auto">
                                <h3 class="category text-2xl font-bold mb-8"><?php echo $tax_term->slug; ?></h3>
                                <ul>
									<?php
									set_query_var( 'args', $args );
									get_template_part( 'template-parts/content', 'projects' );
									?>
                                </ul>
                            </div>
                        </section>
					<?php }
				}
				wp_reset_query();
				?>
                <!-- End of year loop -->
            </div>

        </article>
    </main>
<?php } ?>
<?php get_footer(); ?>

