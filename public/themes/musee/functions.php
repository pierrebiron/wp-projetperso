<?php 

#Liste des styles à charger dans le header.php
function insert_css_in_head() {
    //Chargement fontAwesome
    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' );
    wp_enqueue_style('Font_Awesome');
    #Chargement style perso
    wp_register_style('style', get_stylesheet_directory_uri().'/assets/styles/app.css','',false,'screen');
    wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'insert_css_in_head');

#Liste des scripts à charger dans le footer.php
function insert_js_in_footer() {
    wp_enqueue_script('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js','',false, false);
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js','',false, false);
}
add_action('wp_footer', 'insert_js_in_footer',10);

//Déclaration menu
add_action('after_setup_theme', function () {
    register_nav_menus([
        'navigation' => __('Navigation'),
    ]);
});

//ajout image mise en avant 
add_theme_support( 'post-thumbnails' );
add_theme_support('widgets');

//Ajout taille d'image
add_image_size( 'imgCard', 261, 0, TRUE );
