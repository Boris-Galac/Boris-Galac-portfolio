              <div class="my-des-card d-grid gap-1 p-1 bottom">
                <div class="my-des-card__header flex-wrapper flex-center gap-3">
                    <?php the_content() ?>
                </div>
                <div class="my-des-card__body flex-wrapper gap-1">
                    <div class="project-card-info__wrapper p-1 width-100" aria-label="project name">
                        <span class="project-card-info__label mb-05">project name</span>
                        <h3 class="work--subheading"><?php the_title() ?></h3>
                      </div>
                    <div class="project-card-info__wrapper p-1" aria-label="project description">
                    <span class="project-card-info__label mb-05">project description</span>
                            <p class="p-text"><?php the_field('project_description') ?></p>
                      </div>
                    <div class="project-card-info__wrapper p-1" aria-label="Used Technologies">
                        <span class="project-card-info__label mb-05">used technologies</span>
                        <h3 class="my-des-card__figma-tech">Figma</h3>
                    </div>
                    <div class="project-card-info__wrapper p-1 grid-center" aria-label="view on figma">
                        <a href="<?php the_field('link_to_figma') ?>" class="secondary-btn d-flex gap-05" target="_blank">View on Figma <img src="/wp-content/themes/boris-galac/assets/icons/logos-figma.svg" aria-hidden="true"></a>
                    </div>
                </div>
              </div>