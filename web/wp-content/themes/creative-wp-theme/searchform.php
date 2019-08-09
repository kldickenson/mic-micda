<form role="search" method="get" class="search-form relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="clip"><?php echo _x( 'Search for:', 'label' ); ?></span>

        <input type="search" class="search-field text-sm text-white bg-transparent border border-white-25 py-1 px-2"
               value="<?php echo get_search_query(); ?>" name="s" required="true" />
    </label>

    <input type="submit" class="search-submit absolute w-4 top-2 right-2"
           style="background: url(<?php echo get_stylesheet_directory_uri() . '/img/search.svg'; ?>) no-repeat"
           value=""
           aria-label="search submit button"/>
</form>
