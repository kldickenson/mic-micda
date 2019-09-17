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

        <article class="my-20">
            <div class="md:flex">
				<?php $leads = get_field( 'lead' ); ?>
				<?php $lead_id = $leads[0]->ID; ?>

                <img class="w-216 h-270 object-cover mr-8 mb-8" src="<?php the_field( 'photo', $lead_id ); ?>"
                     alt="<?php $leads[0]->post_title; ?>"/>

                <div>
                    <h1 class="leading-tight font-medium tracking-tight max-w-2xl">
						<?php the_title(); ?><?php echo get_field( 'micda_title' ) ? ', ' . get_field( 'micda_title' ) : '' ?>
                    </h1>

                    <div class="mb-8">
                        <div><?php echo get_the_title( $lead_id ); ?></div>
                        <div><?php the_field( 'positions', $lead_id ); ?></div>
                    </div>

                    <div class="content">
						<?php if ( have_rows( 'investigators' ) ): ?>
                            <div class="co-investigators mt-8">
                                <h4 class="font-semibold"><?php echo __( 'Co-Investigators', 'creative-wp-theme' ); ?></h4>
                                <ul>
									<?php while ( have_rows( 'investigators' ) ): the_row(); ?>
                                        <li class=""><?php the_sub_field( 'full_name' ) ?></li>
									<?php endwhile; ?>
                                </ul>
                            </div>
						<?php endif; ?>

                        <div>
                            <h2>Abstract</h2>
							<?php the_content(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
                        </div>

	                    <?php if ( have_rows( 'outcomes' ) ): ?>
		                    <div class="outcomes mt-8 clearfix">
			                    <h2>Outcomes</h2>
			                    <ul class="accordion-content">
				                    <?php while ( have_rows( 'outcomes' ) ): the_row(); ?>
					                    <li class="mb-4"><?php the_sub_field( 'bibliography' ); ?></li>
				                    <?php endwhile; ?>
			                    </ul>
		                    </div>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>

    </main>
<?php }
?>

<?php get_footer(); ?>