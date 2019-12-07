<?php

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Sobre a peça' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Avaliações' );				// Rename the reviews tab
  unset( $tabs['additional_information'] );  	// Remove the additional information tab

	return $tabs;
}


add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
return array(
'width' => 200,
'height' => 200,
'crop' => 0,
);
} );

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }  
    return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

add_action( 'widgets_init', 'register_new_sidebars' );

function register_new_sidebars() {
  register_sidebar(array(
    'id' => 'top_filter',
    'name' => __( 'Top Filter', 'storefront' ),
    'description' => __( 'Top Filter', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
}


?>
