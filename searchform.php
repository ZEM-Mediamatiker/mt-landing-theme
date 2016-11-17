<form class="form-horizontal form-search pull-right" role="search" method="get" action="<?php echo home_url( '/' ) ?>">
    
    <label for="search-field" class="sr-only">
        Search:
    </label>
    <input id="search-field" class="form-control search-field" type="search" name="s" placeholder="<?php $options = get_option('mt_theme_options'); echo $options['head_search_placeholder'];?>" value="<?php echo get_search_query(); ?>" title="search">
    
</form>

