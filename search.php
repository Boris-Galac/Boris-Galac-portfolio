<?php get_header() ?>

<main class="main pt-7 search-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'title'=>'search',
        'photo'=>'/wp-content/themes/boris-galac/assets/images/search-banner-img.jpg'
      )); ?>
      <!------------------->
      <!-- BLOG SECTION -->
      <section class="blog mt-6">
        <div class="container">
          <div class="blog__body d-grid mb-3">
            <div class="blog__wrapper d-grid">
                <?php
            if(have_posts()){
            while( have_posts()){
                the_post();
            get_template_part('template-parts/content', 'blog-card');
            }
        }else{ ?>
            <h2 class="search--heading">No results found</h2>
       <?php }
    ?>
            </div>
            <!-- SIDEBAR  -->
            <?php get_sidebar() ?>
      <!----------->
    </main>

<?php get_footer() ?>