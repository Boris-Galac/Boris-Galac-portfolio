<form
      method="get"
      action="<?php echo home_url() ?>"
      class="search__form d-flex"
      role="search"
      aria-hidden="true"
      id="search-bar"
      title="Search for blogs..."
    >
      <input
        type="search"
        class="search__input p-1"
        name="s"
        value="<?php echo get_search_query(); ?>"
        id="search"
        aria-label="Search for blogs"
        placeholder="Search for blogs..."
        required
      />
      <button class="search__submit" type="submit">
        <img
          src="/wp-content/themes/boris-galac//assets/icons/header-icons/search-icon.svg"
          alt="search icon"
        />
      </button>
    </form>