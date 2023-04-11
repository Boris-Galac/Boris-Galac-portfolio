<html <?php language_attributes();  ?>>
  <head>
  <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <meta
      name="title"
      content="Boris Galac - This is a portfolio site about web design, web development and graphic design."
    />
    <meta
      name="description"
      content="Boris Galac - This is a portfolio site about web design, web development and graphic design."
    />
    <meta
      name="keywords"
      content="boris galac, web design, web development, graphic design, portfolio, collaboration, job"
    />
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon" />
    <?php wp_head(); ?>
  </head>

  <body  <?php body_class(); ?>>
    <header class="header">
      <nav class="nav p-05 px-1">
        <ul class="nav__list flex-row-center">
          <li class="nav__item" data-title="Web Design">
            <a
              href="<?php echo site_url('web-design') ?>"
              class="nav__link grid-center"
              aria-label="web design"
            >
              <img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/design-icon.svg"
                aria-hidden="true"
                alt="web design link"
              />
              <span class="nav__item-heading">design</span>
            </a>
          </li>
          <li class="nav__item" data-title="Web Development">
            <a
              href="<?php echo site_url('web-development') ?>"
              class="nav__link grid-center"
              aria-label="web development"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/dev-icon.svg"
                aria-hidden="true"
                alt="web development link"
              />
              <span class="nav__item-heading">dev</span>
            </a>
          </li>
          <li class="nav__item" data-title="Graphic Design">
            <a
              href="<?php echo site_url('graphic-design') ?>"
              class="nav__link grid-center"
              aria-label="graphic design"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/graphic-design-icon.svg"
                aria-hidden="true"
                alt="graphic design link"
              />
              <span class="nav__item-heading">graphic</span>
            </a>
          </li>
          <li class="nav__item" data-title="Home">
            <a href="<?php echo site_url() ?>" class="nav__link grid-center" aria-label="home"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/home-icon.svg"
                aria-hidden="true"
                alt="home link"
            /></a>
          </li>
          <li class="nav__item" data-title="Blog">
            <a href="<?php echo site_url('blog') ?>" class="nav__link grid-center" aria-label="blog"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/blog-icon.svg"
                aria-hidden="true"
                alt="blog link"
              />
              <span class="nav__item-heading">blog</span>
            </a>
          </li>
          <li class="nav__item" data-title="Bio">
            <a href="<?php echo site_url('bio') ?>" class="nav__link grid-center" aria-label="Bio"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/profile-icon.svg"
                aria-hidden="true"
                alt="profile link"
              />
              <span class="nav__item-heading">bio</span>
            </a>
          </li>
          <li class="nav__item" data-title="Contact">
            <a href="<?php echo site_url('contact') ?>" class="nav__link grid-center" aria-label="Contact"
              ><img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/mobile/phone-icon.svg"
                aria-hidden="true"
                alt="phone link"
              />
              <span class="nav__item-heading">contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="top-bar flex-row-center p-1">
        <a href="<?php echo site_url('') ?>">
            <figure class="top-bar__logo">
              <img
                src="/wp-content/themes/boris-galac/assets/icons/header-icons/galac-logo.svg"
                alt="galac portfolio logo"
              />
              <caption>
                <div class="screen-reader-text sr-only">Galac Design Logo</div>
              </caption>
            </figure>
        </a>
        <div class="top-bar__right-col flex-row-center">
          <buttton class="top-bar__search" aria-controls="overlay search-bar">
            <img
              src="/wp-content/themes/boris-galac/assets/icons/header-icons/search-icon.svg"
              alt="search icon"
            />
          </buttton>
          <label class="switch" role="switch" aria-checked="false" tabindex="0">
            <input type="checkbox" />
            <span class="slider"></span>
          </label>
        </div>
      </div>
    </header>