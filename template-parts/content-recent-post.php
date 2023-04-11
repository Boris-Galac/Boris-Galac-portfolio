<li class="sidebar__blog-card p-05">
                    <div class="sidebar__blog-img-wrapper">
                      <img
                        src="/wp-content/themes/boris-galac/assets/images/recent-blog__img.jpg"
                        alt="sidebar blog image"
                        class="sidebar__blog-img-wrapper"
                      />
                    </div>
                    <div class="sidebar__blog-body">
                      <div
                        class="sidebar__blog-meta-info flex-row-center mb-05"
                      >
                        <span class="sidebar__blog-meta-date"
                          >12. June 2023</span
                        >
                        <span class="sidebar__blog-meta-separator"></span>
                        <span class="sidebar__blog-meta-category"
                          >Category</span
                        >
                      </div>
                      <div class="sidebar__blog-text">
                        <h3 class="sidebar__blog-heading mb-05">
                          <?php the_title() ?>
                        </h3>
                        <p class="p-text sidebar__blog-paragraph excerpt--text">
                        <?php 
                    echo wp_trim_words(get_the_content(), 30); 
                  ?>
                        </p>
                      </div>
                      <a
                        href="#"
                        class="see-more-link"
                        aria-label="Link to web design section"
                        >Read more
                        <img
                          src="/wp-content/themes/boris-galac/assets/icons/see-more-arrow-icon.svg"
                          aria-hidden="true"
                        />
                      </a>
                    </div>
                  </li>