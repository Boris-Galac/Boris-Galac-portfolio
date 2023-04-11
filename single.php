<?php get_header() ?>

<main class="main pt-7 single-blog-main">
      <!-- BANNER SECTION -->
      <?php 
      pageBanner(array(
          'title'=> 'blog',
          'photo'=>'/wp-content/themes/boris-galac/assets/images/offer-img-5.jpg'
      )); 
      ?>
      <!------------------->

      <!-- BLOG SECTION -->
      <section class="blog">
        <div class="container">
          <div class="blog__body d-grid mb-3">
            <div class="single-blog__wrapper">
              <h2 class="h2--heading single-blog__heading">
                <?php the_title() ?>
              </h2>
              <p class="p-text">
               <?php the_content() ?>
              </p>
            </div>
            <!-- SIDEBAR  -->
            <?php get_sidebar() ?>
          </div>
        </div>
      </section>
      <!----------->
    </main>

<?php get_footer() ?>