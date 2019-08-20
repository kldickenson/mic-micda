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
            <section class="leadership">
                <h3>Leadership</h3>
                <ul>
                    <?php
                        $leadership = array(
                        'post_type' => 'person', // enter custom post type
                        'category' => 'leadership',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        );

                        $loop = new WP_Query( $leadership );
                        if( $loop->have_posts() ):
                            while( $loop->have_posts() ): $loop->the_post(); global $post;
                                echo '<li>';
                                echo '<div class="person">';
                                echo '<img class="person-photo" src="'. get_post_meta($post->ID, 'photo._src.medium', true) . '" alt="' . get_the_title(). ', ' . get_post_meta($post->ID, 'micda_title', true) . '>';
                                echo '<div class="text">';
                                echo '<div class="person-text">';
                                echo '<h4>' .  get_the_title() . ', ' . get_post_meta($post->ID, 'micda_title', true) . '</h4>';
                                echo '<h5>' . get_post_meta($post->ID, 'positions', true) . '</h5>';
                                echo '<p>' . get_post_meta($post->ID, 'education', true) . '</p>';
                                echo '<p><a href="mailto:' . get_post_meta($post->ID, 'email', true) . '">' . get_post_meta($post->ID, 'email', true) . '</a></p>';
                                echo '<ul class="person-links">';
                                echo '<li><a href="' . get_post_meta($post->ID, 'web_page', true) . '">Web Page</a></li>';
                                echo '<li><a href="' . get_post_meta($post->ID, 'google_scholar', true) . '">Google Scholar</a></li>';
                                echo '<li><a href="' . get_post_meta($post->ID, 'pubmed', true) . '">Pubmed</a></li>';
                                echo '</ul>';
                                echo '<span class="hidden">' . get_post_meta($post->ID, 'last_name', true) . '</span>';
                                echo '</div>';
                                echo '<detail class="person-interests">';
                                echo '<summary>Interests</summary>';
                                echo get_post_meta($post->ID, 'interests', true);
                                echo '</detail>';
                                echo '</div>';
                                echo '</div>';
                                echo '</li>';
                            endwhile;
                        endif;?>
                </ul>
            </section>
            <section class="affiliates">
                <h3>Affiliates</h3>
                <div class="sorting">Browse:
                    <ul>
                        <li><a href="">A-E</a></li>
                        <li><a href="">F-J</a></li>
                        <li><a href="">K-O</a></li>
                        <li><a href="">P-T</a></li>
                        <li><a href="">U-Z</a></li>
                    </ul>
                </div>
                <ul>
                <?php if ( is_category('affiliates/' . "a-e") ) { ?>
                    <!--
                        For each Person in specific affiliates category (default A-E), sorted by last-name order, output
                        <div class="person">
                            <img
                                class="person-photo"
                                src="<?php person_photo._img(); ?>"
                                alt="<?php the_title(); ?>, <?php person_micda_title(); ?>"
                            />
                            <div class="text">
                                <div class="person-text">
                                    <h4><?php the_title(); ?>, <?php person_micda_title(); ?></h4>
                                    <h5><?php person_positions(); ?></h5>
                                    <p><?php person_education(); ?></p>
                                    <p>
                                        <a href="mailto:<?php person_email(); ?>"><?php person_email(); ?></a>
                                    </p>
                                    <ul class="person-links">
                                        <li><a href="<?php person_web_page(); ?>">Web Page</a></li>
                                        <li><a href="<?php person_google_scholar(); ?>">Google Scholar</a></li>
                                        <li><a href="<?php person_pubmed() ?>">Pubmed</a></li>
                                    </ul>
                                    <span class="hidden"><?php person_last_name(); ?></span>
                                </div>
                                <detail class="person-interests">
                                    <summary>Interests</summary>
                                    <p><?php the_content(); ?></p>
                                </detail>
                            </div>
                        </div>
                    -->
                <?php } ?>
                </ul>
            </section>
        </article>
    </main>
<?php }
?>

<?php get_footer(); ?>