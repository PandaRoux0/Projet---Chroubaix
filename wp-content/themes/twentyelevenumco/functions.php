<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


add_action('widgets_init', 'twentyelevenumco_widgets_init');
function twentyelevenumco_widgets_init(){

    register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
		'name' => __( 'Zone de widget', 'twentyeleven' ),
		'id' => 'zone-article',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

function my_custom_styles( $init_array ) {  
 
    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'Conteneur "article"',  
            'block' => 'div',  
            'classes' => 'container-article',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Conteneur "article" inversé',  
            'block' => 'div',  
            'classes' => 'container-article-inverse',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Conteneur "présentation"',  
            'block' => 'div',  
            'classes' => 'container',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Conteneur "équipe"',  
            'block' => 'div',  
            'classes' => 'container-equipe',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Conteneur "type-opération"',  
            'block' => 'div',  
            'classes' => 'container-type-operation',
            'wrapper' => true,
        ),
        
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

//suppression des balise <p> automatique

function filter_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images');
add_filter('the_content', 'filter_ptags_on_images');


//Ajout d'une nouvelle taille personnalisé pour les images lors de l'insertion dans un page wordpress
function wpm_new_image(){
    add_theme_support( 'post-thumbnails' );
    add_image_size('taille-icon', 130, 130);
}
add_action( 'after_setup_theme', 'wpm_new_image');
?>
=======
>>>>>>> parent of 911bad0... Wordpress v2.0
=======
>>>>>>> parent of 911bad0... Wordpress v2.0
=======
>>>>>>> parent of 911bad0... Wordpress v2.0
