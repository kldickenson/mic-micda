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

    <main role="main" id="main" class="contained">
		<?php get_sidebar(); ?>

        <article class="mt-20">
            <div class="flex">
                <img class="w-216 h-270 object-cover mr-8" src="<?php the_field( 'photo' ); ?>"
                     alt="<?php the_title(); ?>"/>

                <div>
                    <h1 class="leading-tight font-medium tracking-tight">
						<?php the_title(); ?><?php echo get_field( 'micda_title' ) ? ', ' . get_field( 'micda_title' ) : '' ?>
                    </h1>

                    <div class="mb-4">
                        <div><?php the_field( 'positions' ); ?></div>
                        <div><?php the_field( 'education' ); ?></div>
                    </div>

                    <p><a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></p>

                    <ul class="person-links mt-2 list-none mb-8">
						<?php if ( get_field( 'web_page' ) ) { ?>
                            <li><a target="_blank" href="<?php the_field( 'web_page' ); ?>">Web Page</a></li>
						<?php } ?>
						<?php if ( get_field( 'google_scholar' ) ) { ?>
                            <li><a target="_blank" href="<?php the_field( 'google_scholar' ); ?>">Google Scholar</a>
                            </li>
						<?php } ?>
						<?php if ( get_field( 'pubmed' ) ) { ?>
                            <li><a target="_blank" href="<?php the_field( 'pubmed' ); ?>">Pubmed</a></li>
						<?php } ?>
                    </ul>
                    <div class="content">
						<?php the_content(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
                    </div>
                </div>
            </div>
        </article>

    </main>
<?php }
?>

<?php get_footer(); ?>