<?php
/**
 * Custom functions add by theme creator.
 *
 *
 * @package SJI-full
 */

/**
 * Enqueue scripts and styles.
 */
function sji_custom_scripts() {
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.1.min.js', array(), '2.2.1', true);
  wp_enqueue_script( 'sji-slideout-js', 'https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js', array(), '20160315', true );
  wp_enqueue_script( 'sji-full-slideout-nav', get_template_directory_uri() . '/js/sji-slideout.js', array(), '20151215', true );
  wp_enqueue_style( 'sji_full-fonts', sji_full_fonts_url(), array(), null );
  wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), null);
  wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/vendor/css/animate.css', array(), null);
  wp_enqueue_script( 'lettering-js', get_template_directory_uri() . '/assets/vendor/js/Lettering-js-master/jquery.lettering.js', array(), '20151215', true );
  wp_enqueue_script( 'textillate-js', get_template_directory_uri() . '/assets/vendor/js/textillate-master/jquery.textillate.js', array(), '20151215', true );
  wp_enqueue_script( 'sji-text-animation', get_template_directory_uri() . '/js/text-animation.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'sji_custom_scripts' );

if ( ! function_exists( 'sji_underscore_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function sji_full_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	/* translators: If there are characters in your language that are not supported by Gentium Book Basic, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Gentium Bok Basic font: on or off', 'sji_full' ) ) {
		$fonts[] = 'Gentium Book Basic:400,700,400italic,700italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'sji_full' ) ) {
		$fonts[] = 'Raleway:400,700,800';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'sji_full' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

add_filter('get_the_archive_title', 'remove_category_tag_from_title');
function remove_category_tag_from_title($title) {
  if( is_category() ) {
    $title = single_cat_title('', false);
  } elseif ( is_tag() ) {
    $title = single_tag_title('', false);
  } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  }
  return $title;
}

add_theme_support( 'post-thumbnails' );
add_image_size( 'feature-panel-thumb', 381, 254, true );