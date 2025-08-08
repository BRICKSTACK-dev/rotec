<?php

if ( ! function_exists( 'rotec_setup' ) ) :
  function rotec_setup()
  {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );

  }
endif;
add_action( 'after_setup_theme', 'rotec_setup' );


/**
 * rewrite rule
 */
function custom_rewrite_basic()
{
  add_rewrite_rule('person/staff/?$', 'index.php?post_type=staff', 'top');
  add_rewrite_rule('person/staff/([^/]+)(?:/([0-9]+))?/?$', 'index.php?staff=$matches[1]&page=$matches[2]', 'top');
  add_rewrite_rule('information/carrer/?$', 'index.php?post_type=carrer', 'top');
	add_rewrite_rule('information/newgraduates/?$', 'index.php?post_type=newgraduates', 'top');
	add_rewrite_rule('information/faq/?$', 'index.php?post_type=faq', 'top');
  add_rewrite_rule('information/faq/([^/]+)(?:/([0-9]+))?/?$', 'index.php?faq=$matches[1]&page=$matches[2]', 'top');
}
add_action('init', 'custom_rewrite_basic');


/**
 * pre_get_pots
 */
function my_pre_get_posts($query)
{
  if ( !is_admin() && is_archive('staff') && $query->is_main_query() ){
    $query->set('posts_per_page', 8);
    $query->set('tax_query', array(
      array(
        'taxonomy' => 'staff_category',
        'field' => 'slug',
        'terms' => 'seko'
      ),
    ));
    return;
  }
}

add_action('pre_get_posts', 'my_pre_get_posts');


add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}