<div class="my-des-card d-grid gap-1 p-1 bottom">
                <div class="my-des-card__header flex-wrapper flex-center gap-3">
                    <?php the_content() ?>
                </div>
                <div class="my-des-card__body flex-wrapper gap-1">
                    <div class="project-card-info__wrapper p-1 width-100" aria-label="project name">
                        <span class="project-card-info__label mb-05">project name</span>
                        <h3 class="work--subheading"><?php the_title() ?></h3>
                      </div>
                    <div class="project-card-info__wrapper p-1" aria-label="project type">
                    <span class="project-card-info__label mb-05">project type</span>
                            <p class="p-text"><?php the_field('project_type') ?></p>
                      </div>
                    <div class="project-card-info__wrapper p-1" aria-label="project description">
                    <span class="project-card-info__label mb-05">project description</span>
                            <p class="p-text"><?php the_field('project_description') ?></p>
                      </div>
                    <div class="project-card-info__wrapper p-1 d-grid gap-1" aria-label="used technologies">
                        <span class="project-card-info__label mb-05">used technologies</span>
                        <div class="project-card-info__tech-wrapper flex-wrapper gap-1">
                            <?php 
                            if(get_field('adobe_photoshop')){ ?>
    <span class="project-card-info__tech-pill flex-row-center gap-05"><?php the_field('adobe_photoshop') ?><img src="/wp-content/themes/boris-galac/assets/icons/adobe-photoshop.svg" aria-hidden="true"></span>
                            <?php } ?>
                            <?php 
                            if(get_field('adobe_illustrator')){ ?>
    <span class="project-card-info__tech-pill flex-row-center gap-05"><?php the_field('adobe_illustrator') ?><img src="/wp-content/themes/boris-galac/assets/icons/adobe-illustrator.svg" aria-hidden="true"></span>
                            <?php } ?>
                            <?php 
                            if(get_field('adobe_indesign')){ ?>
    <span class="project-card-info__tech-pill flex-row-center gap-05"><?php the_field('adobe_indesign') ?><img src="/wp-content/themes/boris-galac/assets/icons/adobe-indesign.svg" aria-hidden="true"></span>
                            <?php } ?>
                            <?php 
                            if(get_field('3d-blender')){ ?>
    <span class="project-card-info__tech-pill flex-row-center gap-05"><?php the_field('3d-blender') ?><img src="/wp-content/themes/boris-galac/assets/icons/3d-blender.svg" aria-hidden="true"></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
              </div>