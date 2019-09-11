<?php
/* Template Name: People Page
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
            <div class="leadership pb-4">
                <section id="leadership" class="mx-auto pt-16 max-w-5xl px-4">
                    <h3 class="text-xl font-bold mb-8"><?php echo __('Leadership', 'creative-wp-theme'); ?></h3>
                    <ul>
						<?php
						$leadership = array(
							'post_type'      => 'people',
							'category_name'  => 'leadership',
							'orderby'        => 'menu_order',
							'order'          => 'ASC',
							'posts_per_page' => - 1,
						);
						?>
						<?php
						set_query_var( 'args', $leadership );
						get_template_part( 'template-parts/content', 'persons' );
						?>

                    </ul>
                </section>
            </div>
            <div class="w-screen affiliates pb-4">
                <section id="affiliates" class="container mx-auto pt-16 pb-0 max-w-5xl px-4">
                    <h3 class="text-xl font-bold mb-4 md:mb-12 inline-block w-1/4"><?php echo __( 'Affiliates', 'creative-wp-theme' ); ?></h3>
                    <div class="sorting pt-2 md:inline-block md:relative top-1-5 mb-8 md:mb-0">
                        <p class=""><?php echo __( 'Browse', 'creative-wp-theme' ); ?>:</p>
                        <ul>
                            <li><a class="text-lg" href="#a-_e" onClick="personFilter('A-E')">A-E</a></li>
                            <li><a class="text-lg" href="#f_j" onClick="personFilter('F-J')">F-J</a></li>
                            <li><a class="text-lg" href="#k_o" onClick="personFilter('K-O')">K-O</a></li>
                            <li><a class="text-lg" href="#p_t" onClick="personFilter('P-T')">P-T</a></li>
                            <li><a href="#u_z" onClick="personFilter('U-Z')">U-Z</a></li>
                        </ul>
                    </div>
                    <ul>
						<?php
						$affiliates = array(
							'post_type'      => 'people',
							'category_name'  => 'affiliates',
							'orderby'        => 'meta_value',
							'meta_key'       => 'last_name',
							'order'          => 'ASC',
							'posts_per_page' => - 1,
						);
						?>
						<?php
						set_query_var( 'args', $affiliates );
						get_template_part( 'template-parts/content', 'persons' );
						?>
                    </ul>
                </section>
            </div>
        </article>
    </main>
<?php } ?>
<?php get_footer(); ?>

