<?php get_header() ?>

<main class="main pt-7 bio-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'title'=>'contact me',
        'photo'=>'/wp-content/themes/boris-galac/assets/images/contact-banner 1.jpg'
      )); ?>
      <!------------------->
      <div class="container">
        <!-- CONTACT SECTION -->
        <div class="contact-main__inner-wrapper d-grid gap-4">
          <section class="contact">
            <h2 class="work--subheading mb-4">Send me a message</h2>
            <div class="contact__wrapper d-flex gap-2">
              <div class="contact__row left">
                <p class="p-text">
                  If you need services such as web design, web development, or
                  graphic design, or if you see me as a potential employee for
                  your company, or maybe you want to collaborate on your
                  project, feel free to contact me.
                </p>
              </div>
              <div class="contact__row">
                <!-- CONTACT FORM -->
                <?php get_template_part('template-parts/content', 'contact-form') ?>
                <!------------------>
               <?php ?>
              </div>
            </div>
          </section>
          <!-------------------------->
          <section class="contact-socials mb-8">
            <h2 class="work--subheading mb-4">Also you can contact by:</h2>
            <div class="contact-socials__wrapper flex-center gap-4">
              <div
                class="contact-socials__card contact-socials__card-1 right"
                aria-label="contact card for facebook"
              >
                <div class="contact-socials__card-inner-wrapper">
                  <div class="contact-socials__card-front">
                    <img
                      src="/wp-content/themes/boris-galac/assets/images/linkedin-front-side.png"
                      alt="linkedin illustration image"
                    />
                  </div>
                  <div class="contact-socials__card-back">
                    <h3 class="contact-socials__card-heading">Linkedin</h3>
                    <a href="https://www.linkedin.com/in/boris-galac-30a926167/"target="_blank"
                      ><p class="p-text">www.linkedin.com/boris-galac</p></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="contact-socials__card contact-socials__card-2 left"
                aria-label="contact card for phone"
              >
                <div class="contact-socials__card-inner-wrapper">
                  <div class="contact-socials__card-front">
                    <img
                      src="/wp-content/themes/boris-galac/assets/images/phone-front-side.png"
                      alt="phone illustration image"
                    />
                  </div>
                  <div class="contact-socials__card-back">
                    <h3 class="contact-socials__card-heading">call me</h3>
                    <a href="tel:+385996682736"
                      ><p class="p-text">099/668-2736</p></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="contact-socials__card contact-socials__card-3 right"
                aria-label="contact card for gmail"
              >
                <div class="contact-socials__card-inner-wrapper">
                  <div class="contact-socials__card-front">
                    <img
                      src="/wp-content/themes/boris-galac/assets/images/gmail-front-side.png"
                      alt="gmail illustration image"
                    />
                  </div>
                  <div class="contact-socials__card-back">
                    <h3 class="contact-socials__card-heading">send me mail</h3>
                    <a href="mailto:boris.galac@gmail.com"
                      ><p class="p-text">boris.galac@gmail.com</p></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

    </main>

<?php get_footer() ?>