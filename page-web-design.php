<?php get_header() ?>

<main class="main pt-7 web-des-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'video'=>'/wp-content/themes/boris-galac/assets/videos/web-design-video.mp4'
      )); ?>
      <!------------------->

      <!-- DESIGN PROCESS SECTION -->
      <section class="work mb-8">
        <div class="container">
          <h2 class="work--heading mb-4">How i make web design process</h2>
          <div class="work-wrapper d-grid">
            <article class="work__row d-grid p-1 left"  aria-label="this is article about user flow">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/design-img-1.png"
                  alt="user flow image"
                  class="work__row-col-image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">user flow</h3>
                <p class="p-text">
                  With UX method 'User flow' i'm mapping out the steps a user
                  takes to complete a task within a product.
                </p>
                <br />
                <p class="p-text">
                  By creating a clear user flow, designers can identify
                  potential pain points and areas of improvement within their
                  product.
                </p>
                <br />
                <p class="p-text">
                  A well-designed user flow can greatly enhance the overall user
                  experience and make the product more intuitive to use.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 right" aria-label="this is article about sketching">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/design-img-2.png"
                  alt="sketching image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">sketching</h3>
                <p class="p-text">
                  So, when I'm sketching, I'm basically quickly drawing rough
                  ideas for a design.
                </p>
                <br />
                <p class="p-text">
                  It's really helpful because it lets me explore different ideas
                  and layouts before I commit to a final design.
                </p>
                <br />
                <p class="p-text">
                  And by sketching out my ideas, I can communicate my vision
                  more effectively to stakeholders and get feedback early on in
                  the design process.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 left" aria-label="this is article about wireframing">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/design-img-3.png"
                  alt="wireframe image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">wireframe</h3>
                <p class="p-text">
                  Wireframing is when I create low-fidelity representations of a
                  design, usually using simple shapes and placeholders.
                </p>
                <br />
                <p class="p-text">
                  It's really helpful for me as a designer because it helps me
                  plan out the layout and functionality of a design before
                  adding visual details.
                </p>
                <br />
                <p class="p-text">
                  And if I create my wireframes well, they can help me identify
                  possible usability issues and make sure the final design meets
                  the needs of the user.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 right" aria-label="this is article about high fidelity in design">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/design-img-4.png"
                  alt="high fidelity image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">high fidelity</h3>
                <p class="p-text">
                  When I'm doing high-fidelity design, it means adding more
                  visual details and polishing the design.
                </p>
                <br />
                <p class="p-text">
                  It's really helpful because it helps stakeholders better
                  understand the look and feel of the final product.
                </p>
                <br />
                <p class="p-text">
                  By focusing on high-fidelity design, I can create more
                  realistic prototypes that accurately reflect the final
                  product.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!---------------------------->

      <!-- MY WORK SECTION -->
      <section class="my-work">
        <div class="container">
          <h2 class="work--heading mb-4">my web design projects</h2>
          <div class="my-work__wrapper d-grid gap-2">
              <!-- WEB DESIGN CARDS -->
            <?php
            $args = array(
                'post_type'=> 'web_design',
                'posts_per_page'=> -1,
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'web-des-project'); 
            }}

?>
            <!------------------->
          </div>
        </div>
      </section>
    </main>

<?php get_footer() ?>
