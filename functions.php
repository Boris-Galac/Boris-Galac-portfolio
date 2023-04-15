<?php

//// loading sources files
function theme_source_files(){
    wp_enqueue_style('main-css', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js', array(), '3.11.4', true );
    wp_enqueue_script( 'typed-js', 'https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js', array(), '2.0.14', true );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true );
    wp_enqueue_script('jquery-lightbox', get_theme_file_uri('assets/js/simple-lightbox.jquery.min.js'), array(), false, true);
    wp_enqueue_script('main-js', get_theme_file_uri('assets/js/script.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'theme_source_files');

add_action( 'after_setup_theme', 'wpdocs_setup' );
function wpdocs_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'menus' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );
    add_theme_support( 'wp-pagenavi' ); // Add this line to enable wp-pagenavi plugin.
    add_image_size('pageBanner', 1400, 360, true);
    add_image_size('web-design', 500, 860, true);
}


///// custom functions

/// if there is page output title of the page, if there is a category archive page, output the category title

function output_title(){
    if (is_page()) {
        echo get_the_title();
    } elseif (is_category()) {
        echo single_cat_title();
    }else{
        the_title();
    }
}

////// check is blog page

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

/////// CUSTOM WIDGETS

///// custom widget initialization

function widget_areas_function(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'search widget',
            'id'=> 'sidebar-search-bar',
            'description'=> 'Sidebar Search Bar'
        )
    );
}

add_action('widgets_init', 'widget_areas_function');

//////// BANNER BLOCK

function pageBanner($args = NULL) {

    if (!isset($args['title'])) {
        $args['title'] = get_the_title();
    }

    if (isset($args['video'])) {
        ?>
        <section class="banner mb-4">
            <figure class="banner-wrapper">
                <video
                    src="<?php echo $args['video']; ?>"
                    class="banner__content banner__video"
                    autoplay
                    loop
                ></video>
                <h1 class="banner__heading" data-subheading="<?php echo $args['title'] ?>">
                    <?php echo $args['title'] ?>
                </h1>
            </figure>
        </section>
        <?php
    } else {
        if (isset($args['photo'])) {
            ?>
            <section class="banner mb-4">
                <figure class="banner-wrapper">
                    <img src="<?php echo $args['photo']; ?>" alt="image" class="banner__content width-100">
                    <h1 class="banner__heading" data-subheading="<?php echo $args['title'] ?>">
                        <?php echo $args['title'] ?>
                    </h1>
                </figure>
            </section>
            <?php
        } else {
            ?>
            <section class="banner mb-4">
                <figure class="banner-wrapper">
                    <img src="/wp-content/themes/boris-galac/assets/images/offer-img-4.jpg" alt="image" class="banner__content">
                    <h1 class="banner__heading" data-subheading="<?php echo $args['title'] ?>">
                        <?php echo $args['title'] ?>
                    </h1>
                </figure>
            </section>
            <?php
        }
    }
}

//////// REMOVE P TAG AROUND THE_CONTENT 


