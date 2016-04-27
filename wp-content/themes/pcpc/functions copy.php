<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'main',  get_stylesheet_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_theme_support( 'title-tag' );

function my_custom_post_leadership() {
    $labels = array(
        'name'               => _x( 'Leadership', 'post type general name' ),
        'singular_name'      => _x( 'Leadership', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Leadership' ),
        'add_new_item'       => __( 'Add New Leadership' ),
        'edit_item'          => __( 'Edit Leadership' ),
        'new_item'           => __( 'New Leadership' ),
        'all_items'          => __( 'All Leadership' ),
        'view_item'          => __( 'View Leadership' ),
        'search_items'       => __( 'Search Leadership' ),
        'not_found'          => __( 'No Leadership found' ),
        'not_found_in_trash' => __( 'No Leadership found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Leadership'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Leadership and its specific data',
        'public'        => true,
        'menu_position' => 21,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'leadership', $args );
}

add_action( 'init', 'my_custom_post_leadership' );

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' ...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// Customized image sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'background-img', 1250 ); //sets the banner size
}