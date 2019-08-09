<form role="search" method="get" class="search-form relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text clip"><?php echo _x( 'Search for:', 'label' ); ?></span>

        <input type="search" class="search-field"
               placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ); ?>"
               value="<?php echo get_search_query(); ?>" name="s"/>
    </label>

    <input type="submit" class="search-submit"
           style="background: url(<?php echo get_stylesheet_directory_uri() . '/img/search.svg'; ?>) no-repeat"
           value=""
           aria-label="search submit button"/>
</form>
