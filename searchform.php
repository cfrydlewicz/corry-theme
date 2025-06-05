<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" id="header-search-field"
      placeholder="Search"
      value="<?php echo get_search_query() ?>" name="s"
      aria-label="Search the site.">
  </label>
  <label>
    <button class="i_search"></button>
    <input type="submit" class="search-submit" id="header-search-button" value="Search" tabindex="-1">
  </label>
</form>
