<?php

// Custom Post Types
function create_posttype() {
 
    register_post_type( 'casestudies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'taxonomies'  => array( 'category' ),
        )
    );

    register_post_type( 'careers',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Careers' ),
                'singular_name' => __( 'Career' )
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-groups',
        )
    );
}

// Footer Widgets

function footer_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Column Widget Area', 'tutsplus' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'First footer widget area', 'tutsplus' ),
        'before_widget' => '<div class="col-7 col-md-3">',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Column Widget Area', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'Second footer widget area', 'tutsplus' ),
        'before_widget' => '<div class="col-5 col-md-3 offset-md-6 text-right footer-info">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}

// Register Footer Widgest
add_action( 'widgets_init', 'footer_widgets_init' );

// Enable PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// Register Footer Widgest
add_action( 'widgets_init', 'footer_widgets_init' );

// Add theme support for thumbnails

add_theme_support( 'post-thumbnails' ); 

// ACF Options page

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

// SVG Support

function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
    function wpb_adding_scripts() {
        wp_enqueue_style('bootstrap-style', "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" );
        wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
        wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Poppins:300,500,700&display=swap");
        wp_enqueue_style('typekit', "https://use.typekit.net/kwf3giw.css");
        wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/build.css');

        wp_enqueue_script( 'tween-max', get_template_directory_uri() . '/assets/js/tweenmax.min.js', array( 'jquery' ),true );
        wp_enqueue_script( 'timeline-max', get_template_directory_uri() . '/assets/js/timelinemax.min.js', array( 'tween-max' ),true );
        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ),true );
        wp_enqueue_script( 'vivus', get_template_directory_uri(). '/assets/js/vivus.js',array(),true);
        wp_enqueue_script( 'nicescroll', "https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js",true);
        wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.7/lottie.min.js', array('jquery'),true);
        wp_enqueue_script( 'skrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js',array(),true);
        wp_enqueue_script( 'skrollmagic-anim', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js',array('skrollmagic'),true);
        // wp_enqueue_script('gsap',"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js", array('jquery'), true);
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery','tween-max' ),true );
        wp_enqueue_script( 'gmaps', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCbrgi5_m-sPhyt-2-P7rLKorqv14_RmWk", array(),true);

    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
?>