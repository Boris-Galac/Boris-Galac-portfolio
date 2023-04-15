<?php get_header() ?>

<main class="main pt-7 bio-main">
      <!-- BANNER SECTION -->
      <?php  pageBanner(array(
        'title'=>'about me',
        'photo'=>'/wp-content/themes/boris-galac/assets/images/contact-banner 1.jpg'
      )); ?>
      <!------------------->
      <div class="container">
        <!-- BIO SECTION -->
        <section class="bio d-grid gap-3">
          <h2 class="h2--heading mb-4">little more about me...</h2>
          <h3 class="work--heading mb-2">boris galac</h3>
          <article class="bio-row bio-row-1 d-grid mb-3 gap-2 p-1">
            <div class="bio__img-wrapper">
              <img src="/wp-content/themes/boris-galac/assets/images/bio__profile-img.png" alt="profile image" class="left">
            </div>
            <div class="bio__text-wrapper right">
              <p class="p-text">As you could see through the website, my name is Boris Galac, born in '88. I come from the field of humanities, specifically theology, but I can say that i have always been interested in technology and graphics, ever since I was a kid. Since I have a certain drawing skill, I tried to connect functionality and the visual aspect through technology. 
                </p>
                <br>
                <p class="p-text">
                  In short, this is a brief story of how I got into web design, specifically front-end development. I've been doing it for a couple of years now. I can say that I am mostly a self-taught web designer, but I also completed a certified web academy in 2019. in Osijek.
                </p>
            </div>
          </article>
          <h3 class="work--heading mb-2">hobbies and personal</h3>
          <article class="bio-row bio-row-2 mb-3 d-grid p-1">
            <div class="bio__img-wrapper bio-row-2__img-wrapper order-2">
              <img src="/wp-content/themes/boris-galac/assets/images/jogging.jpg" alt="jogging image" class="left">
              <img src="/wp-content/themes/boris-galac/assets/images/drumming.jpg" alt="drumming image" class="right">
              <img src="/wp-content/themes/boris-galac/assets/images/christianity.jpg" alt="christianity image" class="left">
              <img src="/wp-content/themes/boris-galac/assets/images/shapes.png" alt="shapes image">
            </div>
            <div class="bio__text-wrapper left">
              <p class="p-text">Apart from being deeply involved in web design and development, which can be exhausting at times like any other job, I love to spend my free time doing interesting and useful things. My first love is playing the drums. I've been playing drums since I was a child, and music, in general, is an integral part of my life. I relax, exercise, work, everything with music. I've been in multiple bands, and I can say that that period was unforgettable.
                </p>
                <br>
                <p class="p-text">    
Another hobby that I like to mention is running. Running has also become a part of me since my adolescent days. It serves as a release valve, or a refreshment after a workday and sitting in front of a computer.
                </p>
                <br>
                <p class="p-text">    
                  What is essential in my life is that I am a Christian, and Christ comes first in my life. I cannot imagine not being a believer.
                </p>
            </div>
          </article>
          <h3 class="work--heading mb-1">my passion about code & design</h3>
          <article class="bio-row bio-row-3 mb-3 d-grid p-1 gap-2">
            <div class="bio__img-wrapper bio-row-3__img-wrapper">
              <img src="/wp-content/themes/boris-galac/assets/images/design-and-code.png" alt="design and code image" class="right">
            </div>
            <div class="bio__text-wrapper left">
              <p class="p-text">
                When I started my career in web development, I began with frontend - html/css/js, but after some time, having already created several websites, I found it interesting to work on website designs because designing through code can be challenging. That's when I discovered Adobe tools, specifically Adobe Xd for web design, and started using it. After some time, Figma was exactly what I was looking for. That's when I understood the box-model, flexbox, and the general concept of layout.
                </p>
                <br>
                <p class="p-text">
                  Through the learned fundamentals of good UI/UX design and by exploring the relationship between human psychology and interface, I dared to fully commit to web design.
                </p>
                <br>
                <p class="p-text">
                  Usually, when I design something, I also code it. I have developed the entire process from sketching the website, low fidelity, design, prototyping to the complete code of the design and deployment on web hosting. I draw my inspiration from websites such as UX planet, Dribbble, Behance, and Awwwards.
                </p>
                <br>
                <p class="p-text">
                  In any case, the key and goal of the whole process is to make the web product as easy and accessible to the user and their needs. A satisfied user is the goal of every designer or developer.
                </p>
                <br>
                <p class="p-text">
                  Thank you for reading!
                </p>
            </div>
          </article>
          <div class="bio__contact-me d-flex gap-1 flex-row-center p-2 mb-4 left">
            <p class="p-text">If you liked my profile, you can contact me</p><button class="secondary-btn">
              <a href="<?php echo site_url('contact') ?>">Contact me</a></button>
          </div>
        </section>
        <!------------------->

        </div>
      </section>

    </main>

<?php get_footer() ?>