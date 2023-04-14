<article class="blog__card p-1 d-grid">
                <div class="blog__card-header-wrapper">
                  <a href="<?php the_permalink() ?>">
                    <img
                      src="<?php the_post_thumbnail_url('pageBanner') ?>"
                      alt="blog card image"
                    />
                  </a>
                  <div class="blog__card-meta-info flex-row-center">
                    <span class="blog__card-date"><?php the_time('F j, Y') ?></span
                    ><span class="separator-line"></span
                    ><span class="blog__card-category"><?php echo get_the_category_list(', '); ?></span>
                  </div>
                </div>
                <div class="blog__card-body">
                  <div class="blog__card-heading"><?php the_title() ?></div>
                  <p class="blog__card-text excerpt--text">
                  <?php 
                    echo wp_trim_words(get_the_content(), 30); 
                  ?>
                  </p>
                  <a
                    href="<?php the_permalink() ?>"
                    class="see-more-link"
                    aria-label="Link to web design section"
                    >Read more
                    <img
                      src="/wp-content/themes/boris-galac/assets/icons/see-more-arow-icon.svg"
                      aria-hidden="true"
                    />
                  </a>
                </div>
              </article>