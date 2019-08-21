<?php
   // receiving the arguments from the query array in page-people
   $args = get_query_var('args');

   $loop = new WP_Query( $args );
   if( $loop->have_posts() ):
      while( $loop->have_posts() ): $loop->the_post(); global $post; ?>
         <li class="mb-16">
            <div class="person flex flex-wrap md:flex-wrap">
               <div class="person-photo w-full md:w-1/4 md:pr-8">
               <?php if( get_post_meta($post->ID, 'photo._src.medium', true) ) { ?>
                  <img class="object-cover w-full" src="<?php echo get_post_meta($post->ID, 'photo._src.medium', true); ?>" alt="<?php echo get_the_title(); ?>" >
               <?php } else { ?>
                  <img class="person-photo" src="http://fpoimg.com/250x270?text=FPO—Image to come&bg_color=ec008c&text_color=ffffff" alt="" >
               <?php } ?>
               </div>
               <div class="person-text w-full md:w-3/4">
               <?php if( get_post_meta($post->ID, 'micda_title', true) ) { ?>
                  <h4><?php echo get_the_title(); ?>, <?php echo get_post_meta($post->ID, 'micda_title', true); ?></h4>
               <?php } else { ?>
                  <h4><?php echo get_the_title(); ?></h4>
               <?php } ?>
                  <h5><?php echo get_post_meta($post->ID, 'positions', true); ?></h5>
                  <p class="mt-2"><?php echo get_post_meta($post->ID, 'education', true); ?></p>
                  <p class="mt-2"><a href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>"><?php echo get_post_meta($post->ID, 'email', true); ?></a></p>
                  <ul class="person-links mt-2">
                  <?php if( get_post_meta($post->ID, 'web_page', true) ) { ?>
                     <li><a href="<?php echo get_post_meta($post->ID, 'web_page', true); ?>">Web Page</a></li>
                  <?php } ?>
                  <?php if( get_post_meta($post->ID, 'google_scholar', true) ) { ?>
                     <li><a href="<?php echo get_post_meta($post->ID, 'google_scholar', true); ?>">Google Scholar</a></li>
                  <?php } ?>
                  <?php if( get_post_meta($post->ID, 'pubmed', true) ) { ?>
                     <li><a href="<?php echo get_post_meta($post->ID, 'pubmed', true); ?>">Pubmed</a></li>
                  <?php } ?>
                  </ul>
                  <span class="hidden last-name"><?php echo get_post_meta($post->ID, 'last_name', true); ?></span>
                  <span class="hidden category"><?php
                     $all_terms = wp_get_post_terms($post->ID, 'category');
                     foreach ( $all_terms as $term ) {
                        echo $term->name;} ?></span>
                  <?php if( get_post_meta($post->ID, 'interests', true) ) { ?>
                  <details class="mt-8" open>
                     <summary>
                        <span className="accordion-heading">Interests</span>
                        <span className="plus-wrapper">
                           <span className="plus"></span>
                        </span>
                     </summary>
                     <div className="accordion-content">
                        <?php echo get_post_meta($post->ID, 'interests', true); ?>
                     </div>
                  </details>
                  <?php } ?>
               </div>
            </div>
         </li>
      <?php endwhile;
   endif;
   ?>