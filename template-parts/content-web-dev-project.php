<div class="web-dev-card p-1 mb-2">
              <div class="web-dev-card__col">
                <div class="web-dev-card__img-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card__img" alt="modra nit image website" />
                    <a href="<?php the_field('url_website'); ?>" class="click-on-website">View Website <img src="/wp-content/themes/boris-galac/assets/icons/view-icon.svg" alt="view website"></a>
                  </div>
                </div>
                <div class="web-dev-card__info d-grid">
                  <div class="web-dev-card__info-row p-1" aria-label="project name">
                    <span class="web-dev-card__info-label mb-05">project name</span>
                    <h3 class="work--subheading"><?php the_title() ?></h3>
                  </div>
                  <div class="web-dev-card__info-row p-1" aria-label="used technologies">
                    <span class="web-dev-card__info-label mb-05">used technologies</span>
                    <ul class="web-dev-card__info-tech-tags-wrapper d-flex gap-1">
                      <?php
                            $tags = get_the_tags();
                            if ( $tags ) {
                                echo '<ul class="web-dev-card__info-tech-tags-wrapper d-flex gap-1">';
                                foreach ( $tags as $tag ) {
                                    echo '<li class="web-dev-card__info-tech-tag p-text">' . $tag->name . '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                    </ul>
                  </div>
                  <div class="web-dev-card__info-row p-1" aria-label="website type">
                    <span class="web-dev-card__info-label mb-05">project type</span>
                    <h4 class="my-work-card--heading "><?php the_field('project_type'); ?></h4>
                  </div>
                  <div class="web-dev-card__info-row p-1" aria-label="project description">
                    <span class="web-dev-card__info-label mb-05">project description</span>
                    <p class="p-text"><?php the_field('project_description') ?></p>
                  </div>
                </div>
              </div>
            </div>