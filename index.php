<?php get_header() ?>

<main class="main pt-7 blog-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'title'=>'blog',
        'video'=>'/wp-content/themes/boris-galac/assets/videos/blog-video.mp4'
      )); ?>
      <!------------------->

      <!-- BLOG SECTION -->
      <section class="blog mt-6">
        <div class="container">
          <div class="blog__body d-grid mb-3">
            <div class="blog__wrapper d-grid">
                <?php
                
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
             $args = array(
                'post_type'=> 'post',
                'posts_per_page'=> 4,
                'paged'=> $paged
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'blog-card');
            }

        }
                ?>
            </div>
            <!-- SIDEBAR  -->
            <?php get_sidebar() ?>
      <!----------->
    </main>

<?php get_footer() ?>