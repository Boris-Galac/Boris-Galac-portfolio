<?php get_header() ?>

<main class="main pt-7 single-blog-main">
      <!-- BANNER SECTION -->
      <section class="banner mb-4">
        <figure class="banner-wrapper blog-banner--clr">
          <img
            src="<?php the_post_thumbnail_url('pageBanner') ?>"
            alt="single blog generic image"
          />
          <h1 class="banner__heading" data-subheading="<?php the_field('banner_title') ?>"><?php the_field('banner_title') ?></h1>
        </figure>
      </section>
      <!------------------->

      <!-- BLOG SECTION -->
      <section class="blog">
        <div class="container">
          <div class="blog__body d-grid mb-3">
            <div class="single-blog__wrapper">
              <h2 class="h2--heading single-blog__heading mb-2">
                <?php the_title() ?>
              </h2>
               <?php the_content() ?>
            </div>
            <!-- SIDEBAR  -->
            <?php get_sidebar() ?>
          </div>
        </div>
      </section>
      <!----------->
    </main>

<?php get_footer() ?>