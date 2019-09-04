<?php
$args = get_query_var( 'args' );

$loop = new WP_Query( $args );

if ( $loop->have_posts() ):
	while ( $loop->have_posts() ): $loop->the_post();
		global $post; ?>

        <?php
        $last_name = get_field('last_name');
        $first_letter = strtolower($last_name[0]);

        $letter_ranges = array(
            'A-E' => range('a', 'e'),
            'F-J' => range('f', 'j'),
            'K-O' => range('k', 'o'),
            'P-T' => range('p', 't'),
            'U-Z' => range('u', 'z'),
        );

        foreach ($letter_ranges as $key => $letter_range) {
            if (in_array($first_letter, $letter_range)) {
                $last_name_category = $key;
                break;
            }
        }
        ?>

        <li class="mb-16">
            <div class="person flex flex-wrap md:flex-wrap">

                <div class="person-photo w-full md:w-1/4 md:pr-8">
					<?php if ( get_field( 'photo' ) ) { ?>
                        <img class="object-cover w-full pb-4 md:pb-0" src="<?php the_field( 'photo' ); ?>"
                             alt="<?php the_title(); ?>">
					<?php } else { ?>
                        <img class="person-photo pb-4 md:pb-0"
                             src="http://fpoimg.com/250x270?text=FPO—Image to come&bg_color=ec008c&text_color=ffffff"
                             alt="">
					<?php } ?>
                </div>
                <div class="person-text w-full md:w-3/4">

					<?php if ( get_field( 'micda_title' ) ) { ?>
                        <h4 class="text-lg font-bold text-umblue"><?php the_title(); ?>
                            , <?php the_field( 'micda_title' ); ?></h4>
					<?php } else { ?>
                        <h4 class="text-lg font-bold text-umblue"><?php the_title(); ?></h4>
					<?php } ?>

                    <?php if ($args['category_name'] == 'trends' || $args['category_name'] == 'trends-affiliates') : ?>
                        <p class="mt-0 font-light"><?php the_field( 'university' ); ?></p>
                    <?php else: ?>
                        <h5 class="font-normal"><?php the_field( 'positions' ); ?></h5>
                    <?php endif; ?>

                    <p class="mt-0 font-light"><?php the_field( 'education' ); ?></p>

                    <p class="mt-2"><a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
                    </p>
                    <ul class="person-links mt-2">
						<?php if ( get_field( 'web_page' ) ) { ?>
                            <li><a href="<?php the_field( 'web_page' ); ?>">Web Page</a></li>
						<?php } ?>
						<?php if ( get_field( 'google_scholar' ) ) { ?>
                            <li><a href="<?php the_field( 'google_scholar' ); ?>">Google Scholar</a></li>
						<?php } ?>
						<?php if ( get_field( 'pubmed' ) ) { ?>
                            <li><a href="<?php the_field( 'pubmed' ); ?>">Pubmed</a></li>
						<?php } ?>
                    </ul>
                    <span class="hidden last-name"><?php the_field( 'last_name' ); ?></span>
                    <span class="hidden category"><?php echo $last_name_category ?></span>
					<?php if ( get_the_content() ) { ?>
                        <details class="mt-6">
                            <summary>
                                <span class="accordion-heading">Interests</span>
                                <span class="plus-wrapper">
                           <span class="plus"></span>
                        </span>
                            </summary>
                            <div class="accordion-content">
								<?php the_content(); ?>
                            </div>
                        </details>
					<?php } ?>
                </div>
            </div>
        </li>
	<?php endwhile;
endif;
?>