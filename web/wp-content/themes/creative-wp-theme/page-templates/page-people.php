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

    <main role="main" id="main" class="contained">
		<?php get_sidebar(); ?>
        <article>
            <section id="leadership">
                <h3>Leadership</h3>
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
            <section id="affiliates">
                <h3>Affiliates</h3>
                <div class="sorting mb-4 w-3/4 inline-block">Browse:
                    <ul>
                        <li><a href="#a-_e" onClick="personFilter()">A-E</a></li>
                        <li><a href="#f_j">F-J</a></li>
                        <li><a href="#k_o">K-O</a></li>
                        <li><a href="#p_t">P-T</a></li>
                        <li><a href="#u_z">U-Z</a></li>
                    </ul>

                    <!-- <form action="">
                        <input type="button" onClick=(person_filter) value="A-E" />
                        <input type="button" value="F-J" />
                        <input type="button" value="K-O" />
                        <input type="button" value="P-T" />
                        <input type="button" value="U-Z" />
                    </form> -->
                </div>
                <ul>
                    <!--
                        For each Person in specific affiliates category (default A-E), sorted by last-name order, output
                  -->
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
        </article>
    </main>
<?php }
?>
<?php get_footer(); ?>

