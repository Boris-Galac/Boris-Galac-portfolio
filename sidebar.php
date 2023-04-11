<aside class="sidebar p-1">
              <div class="sidebar__search d-grid">
                <form class="sidebar__search-form d-flex mb-1">
                  <input
                    type="search"
                    class="sidebar__input"
                    placeholder="Search for blogs..."
                  />
                  <buttton class="sidebar__search-submit flex-center p-05">
                    <img
                      src="/wp-content/themes/boris-galac/assets/icons/header-icons/search-icon.svg"
                      alt="search icon"
                    />
                  </buttton>
                </form>
              </div>
              <div class="sidebar__recent-posts">
                <h2 class="sidebar__recent-posts-heading mb-1">recent post</h2>
                <ul class="sidebar__recent-posts-list d-grid gap-1">
                <?php
                
             $args = array(
                'post_type'=> 'post',
                'posts_per_page'=> 3,
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'recent-post');
            }

        }
                ?>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </section>