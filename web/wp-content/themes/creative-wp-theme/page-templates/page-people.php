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
			<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'w-full max-h-20 object-cover object-top' ) ); ?>
            <div class="absolute w-full bottom-2">
                <div class="contained">
                    <div class="bg-michigan-maize text-3xl font-bold inline py-2 px-4 leading-none uppercase"><?php the_title(); ?></div>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <div class="contained mt-2 mb-8">
		<?php if ( function_exists( 'yoast_breadcrumb' ) ): ?>
			<?php yoast_breadcrumb( '<p class="text-md font-medium" id="breadcrumbs">', '</p>' ); ?>
		<?php endif; ?>
    </div>

    <main role="main" id="main" class="">

        <article>
            <h1 class="container mx-auto mb-12"><?php the_field( 'heading' ); ?></h1>
            <div class="container mx-auto">
                <?php the_content(); ?>
            </div>
           <div class="leadership w-screen pb-4">
                <section id="leadership" class="container mx-auto pt-16 px-32">
                    <h3 class="text-xl font-bold mb-8">Leadership</h3>
                    <ul>
                        <?php
                            $leadership = array(
                            'post_type' => 'person', // enter custom post type
                            'category_name' => 'leadership',
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            );
                        ?>
                        <?php
                            // passing the query array to template_part
                            set_query_var('args', $leadership);
                            get_template_part( 'template-parts/content', 'persons' );
                        ?>

                    </ul>
                </section>
            </div>
            <div class="w-screen affiliates pb-4">
                <section id="affiliates"  class="container mx-auto pt-16 pb-0 px-32">
                    <h3 class="text-xl font-bold mb-12 inline-block w-1/4">Affiliates</h3>
                    <div class="sorting pt-2 inline-block">
                        <p class="">Browse:</p>
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
                            'post_type' => 'person', // enter custom post type
                            'category_name' => 'affiliates', // all affiliates, sorting handled by app.js
                            'orderby' => 'last_name',
                            'order' => 'ASC',
                            );
                        ?>
                        <?php
                            // passing the query array to template_part
                            set_query_var('args', $affiliates);
                            get_template_part( 'template-parts/content', 'persons' );
                        ?>
                    </ul>
                </section>
            </div>
        </article>
    </main>
<?php } ?>
<?php get_footer(); ?>

