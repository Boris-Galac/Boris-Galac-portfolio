<?php get_header() ?>

<main class="main pt-7 graph-des-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'video'=>'/wp-content/themes/boris-galac/assets/videos/graphic-design-video.mp4'
      )); ?>
      <!------------------->

      <!-- DESIGN PROCESS SECTION -->
      <section class="work mb-8">
        <div class="container">
          <h2 class="work--heading mb-4">How i make graphic design process</h2>
          <div class="work-wrapper d-grid">
            <article class="work__row d-grid p-1 right" aria-label="this is article about research">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/research.png"
                  alt="user flow image"
                  class="work__row-col-image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-2">research</h3>
                <p class="p-text">
                  Research In the research phase, i gather information on the
                  client's needs, target audience, and competition.
                </p>
                <br />
                <p class="p-text">
                  Trying to analyze this information to create a design brief
                  that outlines the project goals and requirements.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 left" aria-label="this is article about concept development">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/sketch.png"
                  alt="sketching image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-2">concept development</h3>
                <p class="p-text">
                  During the concept development phase, designers brainstorm
                  ideas and create sketches to explore different design
                  directions.
                </p>
                <br />
                <p class="p-text">
                  They refine these ideas until they have a few strong concepts
                  to present to the client.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 right"  aria-label="this is article about design execution">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/design-execution.png"
                  alt="wireframe image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-2">design execution</h3>
                <p class="p-text">
                  In the design execution phase, designers create detailed
                  design mockups based on the chosen concept.
                </p>
                <br />
                <p class="p-text">
                  They carefully choose colors, typography, imagery, and other
                  design elements to create a cohesive visual identity.
                </p>
              </div>
            </article>
            <article class="work__row d-grid p-1 left"  aria-label="this is article about finalization">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/mockup.png"
                  alt="high fidelity image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-2">finalization</h3>
                <p class="p-text">
                  In the finalization phase, i'm make any necessary
                  revisions and prepare the final design files for delivery including mockuping.
                </p>
                <br />
                <p class="p-text">
                  It ensure that the design meets all technical specifications
                  and is ready for printing or digital use.
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
          <h2 class="work--heading mb-4">my graphic design projects</h2>
          <div class="my-work__wrapper d-grid gap-2">
                <!-- GRAPHIC DESIGN CARDS -->
            <?php
            $args = array(
                'post_type'=> 'graphic_design',
                'posts_per_page'=> -1,
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'graph-des-project'); 
            }}

?>
            <!------------------->
          </div>
        </div>
      </section>
    </main>


<?php get_footer() ?>
