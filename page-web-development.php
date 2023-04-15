<?php get_header() ?>

<main class="main pt-7 web-dev-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'video'=>'/wp-content/themes/boris-galac/assets/videos/web-dev-video.mp4'
      )); ?>
      <!------------------->

      <!-- WEB DEV PROCESS SECTION -->
      <section class="work mb-8">
        <div class="container">
          <h2 class="work--heading mb-4">How i make web development process</h2>
          <div class="work-wrapper d-grid">
            <article class="work__row d-grid p-1 left" aria-label="this is article about mobile first approach">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/web-dev-img-1.png"
                  alt="user flow image"
                  class="work__row-col-image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">mobile first</h3>
                <p class="p-text">
                The first step in web development is designing the website to be responsive across various devices.
                That approach is called MOBILE FIRST.
                </p>
                <br />
                <p class="p-text">
                My development process should focus on creating a user-friendly interface that adapts seamlessly to different screen sizes and resolutions.
                </p>
                <br />
                <p class="p-text">
                Devs should also consider the website's speed and ensure that it loads quickly, especially on mobile devices.
                Testing the website on different devices and browsers is crucial to ensure that it meets the required standards of responsiveness.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 right" aria-label="this is article about responsiveness in development">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/web-dev-img-2.png"
                  alt="sketching image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">responsivenes for all devices</h3>
                <p class="p-text">
                Once the mobile design is complete, the next step is to create designs for larger devices such as tablets and desktops.
                </p>
                <br />
                <p class="p-text">
                Designers should consider the layout and typography to ensure that the website is easily readable on larger screens.
                </p>
                <br />
                <p class="p-text">
                The design should be consistent with the mobile version, and features such as menus and buttons should be appropriately sized for tablet and desktop users.
                Testing the website on different screen sizes and resolutions is crucial to ensure that it meets the required standards of design
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 left" aria-label="this is article about high performance">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/web-dev-work-bg.jpg"
                  alt="wireframe image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">performance</h3>
                <p class="p-text">
                With the design complete, the next step is to build and produce the website using various programming languages and tools.

                </p>
                <br />
                <p class="p-text">
                Developers should focus on creating clean, readable, and maintainable code that adheres to industry standards.

                </p>
                <br />
                <p class="p-text">
                The code should be optimized for performance, security, and scalability, and developers should also consider implementing best practices such as version control and automated testing.
                The website should be thoroughly tested.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!---------------------------->
      <!-- MY PROJECTS SECTION -->
      <section class="my-work">
        <div class="container">
          <h2 class="work--heading mb-4">my web development projects</h2>
          <div class="my-work__wrapper">
            <!-- WEB DEV CARDS -->
            <?php
            $args = array(
                'post_type'=> 'web_development',
                'posts_per_page'=> -1,
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'web-dev-project'); 
            }}
?>
            <!------------------->
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
