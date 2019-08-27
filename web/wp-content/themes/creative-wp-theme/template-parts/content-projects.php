<?php
$args = get_query_var( 'args' );

$loop = new WP_Query( $args );

if ( $loop->have_posts() ):
	while ( $loop->have_posts() ): $loop->the_post();
		global $post; ?>

        <?php $leads = get_field('lead'); ?>

        <li class="mb-16">
            <div class="project">
                <div class="person-photo w-full md:w-1/4 float-left mr-4">
                <!-- Relationship - Leader for photo -->
                <?php if($leads): ?>
                    <?php foreach( $leads as $p): // variable must NOT be called $post (IMPORTANT) ?>
                        <?php if ( get_field( 'photo', $p->ID ) ) { ?>
                            <img class="object-cover w-full pb-4 md:pb-0" src="<?php the_field( 'photo', $p->ID ); ?>"
                                alt="<?php  echo get_the_title($p->ID); ?>">
                        <?php } else { ?>
                            <img class="person-photo pb-2 md:pb-0"
                                src="http://fpoimg.com/250x270?text=FPO—Image to come&bg_color=ec008c&text_color=ffffff"
                                alt="">
                        <?php } ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
                <h3 class="text-lg font-bold"><?php the_title(); ?></h3>
                <div class="lead">
                    <!-- Relationship - Leader for name & position -->
                    <?php if($leads): ?>
                        <?php foreach( $leads as $p): // variable must NOT be called $post (IMPORTANT) ?>
                                <p class="lead"><?php echo get_the_title($p->ID); ?></p>
                                <p><?php the_field('positions', $p->ID); ?></p>
                                <!--
                                <p>Lead's Position Title</p>
                                <p>Lead's Position Unit, Lead's Position School</p>
                                -->
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Co-Investigators repeat field-->
               <?php if( have_rows('investigators') ): ?>
                    <div class="co-investigators mt-8">
                    <h4 class="font-semibold"><?php echo __('Co-Investigators', 'creative-wp-theme'); ?></h4>
                        <ul>
                        <?php while( have_rows('investigators') ): the_row(); ?>
                            <li class=""><?php the_sub_field('full_name') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="abstract mt-8">
                    <h4 class="font-semibold"><?php echo __('Abstract', 'creative-wp-theme'); ?></h4>
                    <?php echo get_the_content($post->ID); ?>
                </div>
                <!-- Outcomes repeat field-->
                <div class="outcomes mt-8 clearfix">
                    <?php if( have_rows('outcomes') ): ?>
                        <h4 class="font-semibold"><?php echo __('Outcomes', 'creative-wp-theme'); ?></h4>
                        <ul>
                            <?php while( have_rows('outcomes') ): the_row(); ?>
                                <li class="mb-4"><?php the_sub_field( 'bibliography' ); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </li>

	<?php endwhile;
endif;
?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

