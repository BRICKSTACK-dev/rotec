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
  // add_rewrite_rule('information/newgraduates/?$', 'index.php?post_type=newgraduates', 'top');
  add_rewrite_rule('information/faq/?$', 'index.php?post_type=faq', 'top');
  add_rewrite_rule('information/faq/([^/]+)(?:/([0-9]+))?/?$', 'index.php?faq=$matches[1]&page=$matches[2]', 'top');
  add_rewrite_rule('recruit/new/?$', 'index.php?post_type=new', 'top');
  add_rewrite_rule('recruit/new/([^/]+)(?:/([0-9]+))?/?$', 'index.php?new=$matches[1]&page=$matches[2]', 'top');
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

// 日付表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );

// // プレビューのリンクの修正
// //一般職社員
// function replace_preview_link1 ( $url ) {
//   $replace_url1 = str_replace('/%e4%b8%80%e8%88%ac%e8%81%b7%e7%a4%be%e5%93%a1', '', $url);

//   return $replace_url1;
// }
// add_filter('preview_post_link', 'replace_preview_link1');

// //総合職エリア社員
// function replace_preview_link2 ( $url ) {
//   $replace_url2 = str_replace('/%e7%b7%8f%e5%90%88%e8%81%b7%e3%82%a8%e3%83%aa%e3%82%a2%e7%a4%be%e5%93%a1', '', $url);

//   return $replace_url2;
// }
// add_filter('preview_post_link', 'replace_preview_link2');

// //総合職社員
// function replace_preview_link3 ( $url ) {
//   $replace_url3 = str_replace('/%e7%b7%8f%e5%90%88%e8%81%b7%e7%a4%be%e5%93%a1', '', $url);

//   return $replace_url3;
// }
// add_filter('preview_post_link', 'replace_preview_link3');




/*-------------------------------------------*/
/* 　カスタムフィールドもプレビューできるようにする
/*-------------------------------------------*/
function my_custom_rv() {
  add_post_type_support( 'newgraduates', 'revisions' );
}
add_action('init', 'my_custom_rv');
