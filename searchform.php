<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="screen-reader-text">Search for:</span>
    <input type="search" class="search-field"
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
  </label>
  <label>
    <button class="i_search"><span class="u_visually-hidden">Search</span></button>
    <input type="submit" class="search-submit u_visually-hidden" value="Search">
  </label>
</form>
