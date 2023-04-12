    <!-- FOOTER -->
    <button
      class="scroll-to-top-btn"
      aria-hidden="true"
      aria-label="back to top of the page"
      title="Back to top"
    >
      <img src="/wp-content/themes/boris-galac//assets/icons/arrow-up.svg" aria-hidden="true" />
    </button>
    <!-- OVERLAY -->
    <div class="overlay" id="overlay" aria-hidden="true"></div>
    <!-- SEARCH FORM -->
    <form
      action=""
      class="search__form d-flex"
      aria-hidden="true"
      id="search-bar"
    >
      <input
        type="search"
        class="search__input p-1"
        name="search"
        id="search"
        placeholder="Search for blogs..."
      />
      <button class="search__submit" type="submit">
        <img
          src="/wp-content/themes/boris-galac//assets/icons/header-icons/search-icon.svg"
          alt="search icon"
        />
      </button>
    </form>
    <!-- SKILLSET MODAL -->
    <div
      class="skillset-modal"
      aria-hidden="true"
      aria-label="Skillset description about certain technology"
    ></div>
    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <img
            src="/wp-content/themes/boris-galac//assets/icons/header-icons/galac-logo.svg"
            alt="footer logo"
            class="footer__logo mb-2"
          />
          <nav class="footer__nav">
            <ul class="footer__nav-list d-flex">
              <li class="footer__nav-item" title="Home">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/home-icon.svg"
                  alt="home icon"
                /><a href="#">Home</a>
              </li>
              <li class="footer__nav-item" title="Web Design">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/design-icon.svg"
                  alt="Web Design"
                /><a href="#">Web Design</a>
              </li>
              <li class="footer__nav-item" title="Web Development">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/dev-icon.svg"
                  alt="Web Development"
                /><a href="#">Web Development</a>
              </li>
              <li class="footer__nav-item" title="Graphic Design">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/graphic-design-icon.svg"
                  alt="Graphic Design"
                /><a href="#">Graphic Design</a>
              </li>
              <li class="footer__nav-item" title="Blog">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/blog-icon.svg"
                  alt="Blog"
                /><a href="#">Blog</a>
              </li>
              <li class="footer__nav-item" title="Bio">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/profile-icon.svg"
                  alt="Bio"
                /><a href="#">Bio</a>
              </li>
              <li class="footer__nav-item" title="Contact">
                <img
                  src="/wp-content/themes/boris-galac//assets/icons/header-icons/desktop/phone-icon.svg"
                  alt="Contact"
                /><a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="footer__line my-2" aria-hidden="true"></div>
          <p class="p-text text-center footer__copyright mb-4">
            Copyright &#169; 2023 - All Rights Reserved. Website kreirao i
            uredio; Boris Galac.
          </p>
        </div>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>