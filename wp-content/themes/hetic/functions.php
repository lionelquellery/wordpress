<?php 

register_nav_menus();

add_theme_support( 'post-thumbnails' );
add_image_size('film_liste', 270, 220, array('center','top'));
add_image_size('home', 370, 220, true);

add_action('init', 'create_post_type');
function create_post_type() {
    register_post_type('projet',
        array(
            'labels' => array(
                'name' => __('Projets'),
                'singular_name' => __('Projet')
            ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true
        )
    );

    /* Type projet */
    register_taxonomy(
        'type',
        'projet',
        array(
            'label' => __('Type'),
            'hierarchical'=> true,
        )
    );

    /* Films */
    register_post_type('film',
        array(
            'labels' => array(
                'name' => __('Films'),
                'singular_name' => __('Film')
            ),
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'has_archive' => true
        )
    );

    /* Acteurs */
    register_post_type('acteur',
        array(
            'labels' => array(
                'name' => __('Acteurs'),
                'singular_name' => __('Acteur')
            ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true
        )
    );

    /* Sujets */
    register_taxonomy(
        'sujet',
        'film',
        array(
            'label' => __('Genre'),
            'hierarchical'=> true,
        )
    );
}


?>
