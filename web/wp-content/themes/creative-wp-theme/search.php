<?php get_header(); ?>
    <main id="main" role="main" class="contained my-20">

		<?php if ( have_posts() ) : ?>

            <div class="mb-8">
                <h1>
					<?php _e( 'Search results for:' ); ?>
                </h1>
                <div><?php echo get_search_query(); ?></div>
            </div>

			<?php
			while ( have_posts() ) :
				the_post(); ?>

                <div class="mb-4 pb-4 border-b">
                <a href="<?php echo get_permalink(); ?>">
                    <h2><?php echo get_the_title(); ?></h2>
                </a>

                <p><?php echo get_the_excerpt(); ?></p>
                </div>

			<?php endwhile; ?>

			<?php the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'obp' ),
				'next_text' => __( 'Next', 'obp' ),
			) ); ?>

		<?php else: ?>

            <h1>No results found.</h1>
            <p>Please modify your search and try again.</p>

		<?php endif; ?>

    </main>
<?php
get_footer();
