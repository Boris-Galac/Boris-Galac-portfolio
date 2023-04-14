<div class="web-dev-card p-1 mb-2 bottom">
              <div class="web-dev-card__col">
                <div class="web-dev-card__img-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card__img" alt="modra nit image website" />
                    <a href="<?php the_field('url_website'); ?>" class="click-on-website">View Website <img src="/wp-content/themes/boris-galac/assets/icons/view-icon.svg" alt="view website"></a>
                  </div>
                </div>
                <div class="web-dev-card__info d-grid">
                  <div class="project-card-info__wrapper p-1" aria-label="project name">
                    <span class="project-card-info__label mb-05">project name</span>
                    <h3 class="work--subheading"><?php the_title() ?></h3>
                  </div>
                  <div class="project-card-info__wrapper p-1" aria-label="used technologies">
                    <span class="project-card-info__label mb-05">used technologies</span>
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
                  <div class="project-card-info__wrapper p-1" aria-label="website type">
                    <span class="project-card-info__label mb-05">project type</span>
                    <h4 class="my-work-card--heading "><?php the_field('project_type'); ?></h4>
                  </div>
                  <div class="project-card-info__wrapper p-1" aria-label="project description">
                    <span class="project-card-info__label mb-05">project description</span>
                    <p class="p-text"><?php the_field('project_description') ?></p>
                  </div>
                  <?php if(get_field('github_code')){ ?>                   
                    <div class="project-card-info__wrapper p-1" aria-label="Github source code">
                      <span class="project-card-info__label mb-1">Github source code</span>
                      <a href="#" class="figma-btn secondary-btn flex-row-center gap-05">View code for website<img src="/wp-content/themes/boris-galac/assets/icons/github-icon.svg" aria-hidden="true"></a>
                    </div>
                  <?php }
                  if(get_field('figma_design')){ ?>
                  <div class="project-card-info__wrapper p-1" aria-label="figma design">
                    <span class="project-card-info__label mb-1">Figma design</span>
                    <a href="#" class="figma-btn secondary-btn flex-row-center gap-05">View design for website<img src="/wp-content/themes/boris-galac/assets/icons/logos-figma.svg" aria-hidden="true"></a>
                  </div>  
                  <?php } ?>
                </div>
              </div>
            </div>