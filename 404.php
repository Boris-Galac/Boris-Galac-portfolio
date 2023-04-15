<?php get_header() ?>

<main class="main pt-7 search-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'title'=>'Page not found',
        'photo'=>'/wp-content/themes/boris-galac/assets/images/error-img.jpg'
      )); ?>
      <!------------------->
      <!-- BLOG SECTION -->
      <section class="blog mt-6">
        <div class="container">
          <div class="blog__body d-grid" style="gap: 10rem;">
            <div class="blog__wrapper d-grid">
            <h2 class="search--heading">No results found</h2>
            </div>
            <!-- SIDEBAR  -->
            <?php get_sidebar() ?>
      <!----------->
    </main>

<?php get_footer() ?>