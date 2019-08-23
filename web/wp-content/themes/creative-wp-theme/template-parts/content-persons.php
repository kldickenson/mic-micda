<?php
   // receiving the arguments from the query array in page-people
   $args = get_query_var('args');

   $loop = new WP_Query( $args );
   // var_dump ($loop);
   if( $loop->have_posts() ):
      while( $loop->have_posts() ): $loop->the_post(); global $post; ?>
         <li class="mb-16">
            <div class="person flex flex-wrap md:flex-wrap">

            <div class="person-photo w-full md:w-1/4 md:pr-8">
               <?php if( get_field('photo') ) { ?>
                  <img class="object-cover w-full" src="<?php the_field('photo'); ?>" alt="<?php the_title(); ?>" >
               <?php } else { ?>
                  <img class="person-photo" src="http://fpoimg.com/250x270?text=FPO—Image to come&bg_color=ec008c&text_color=ffffff" alt="" >
               <?php } ?>
               </div>
               <div class="person-text w-full md:w-3/4">

               <?php if( get_field('micda_title') ) { ?>
                  <h4 class="font-xl font-bold text-umblue"><?php the_title(); ?>, <?php the_field('micda_title'); ?></h4>
               <?php } else { ?>
                   <h4 class="font-xl font-bold text-umblue"><?php the_title(); ?></h4>
               <?php } ?>

                  <h5 class="font-normal"><?php the_field('positions'); ?></h5>
                  <p class="mt-0 font-light"><?php the_field('education'); ?></p>
                  <p class="mt-2"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                  <ul class="person-links mt-2">
                     <?php if( get_field( 'web_page') ) { ?>
                        <li><a href="<?php the_field('web_page'); ?>">Web Page</a></li>
                     <?php } ?>
                     <?php if( get_field( 'google_scholar' ) ) { ?>
                        <li><a href="<?php the_field( 'google_scholar' ); ?>">Google Scholar</a></li>
                     <?php } ?>
                     <?php if( get_field( 'pubmed' ) ) { ?>
                        <li><a href="<?php the_field( 'pubmed' ); ?>">Pubmed</a></li>
                     <?php } ?>
                  </ul>
                  <span class="hidden last-name"><?php the_field( 'last_name' ); ?></span>
                  <span class="hidden category"><?php
                     $all_terms = wp_get_post_terms($post->ID, 'category');
                     foreach ( $all_terms as $term ) {
                     echo $term->name;} ?></span>
                  <?php if( get_the_content() ) { ?>
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