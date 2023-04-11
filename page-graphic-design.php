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
            <article class="work__row d-grid p-1">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/graphic-des-img-1.png"
                  alt="user flow image"
                  class="work__row-col-image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">research</h3>
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
            <article class="work__row d-grid p-1">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/graphic-des-img-2.png"
                  alt="sketching image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">concept development</h3>
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
            <article class="work__row d-grid p-1">
              <div class="work__row-col">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/graphic-des-img-3.png"
                  alt="wireframe image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">design execution</h3>
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
            <article class="work__row d-grid p-1">
              <div class="work__row-col order-2">
                <img
                  src="/wp-content/themes/boris-galac/assets/images/graphic-des-img-4.png"
                  alt="high fidelity image"
                />
              </div>
              <div class="work__row-col">
                <h3 class="work--subheading mb-1">finalization</h3>
                <p class="p-text">
                  In the finalization phase, designers make any necessary
                  revisions and prepare the final design files for delivery.
                </p>
                <br />
                <p class="p-text">
                  They ensure that the design meets all technical specifications
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
          <h2 class="work--heading mb-4">my web design work</h2>
          <div class="my-work__wrapper">
            <div class="my-work__inner-wrapper d-grid">
              <div class="my-work-card">
                <div class="my-work-card__img-wrapper p-2">
                  <img
                    src="/wp-content/themes/boris-galac/assets/images/graphic-work.png"
                    alt="my work image"
                  />
                </div>
                <h3 class="h3--heading my-work-card--heading">
                  My Design work
                </h3>
              </div>
              <div class="my-work-card">
                <div class="my-work-card__img-wrapper p-2">
                  <img
                    src="/wp-content/themes/boris-galac/assets/images/graphic-work.png"
                    alt="my work image"
                  />
                </div>
                <h3 class="h3--heading my-work-card--heading">
                  My Design work
                </h3>
              </div>
              <div class="my-work-card">
                <div class="my-work-card__img-wrapper p-2">
                  <img
                    src="/wp-content/themes/boris-galac/assets/images/graphic-work.png"
                    alt="my work image"
                  />
                </div>
                <h3 class="h3--heading my-work-card--heading">
                  My Design work
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


<?php get_footer() ?>
