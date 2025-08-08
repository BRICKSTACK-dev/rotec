<?php
//開始

register_sidebar(array('id' => 'sidebar-1','before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>', ));
remove_action('wp_head', 'wp_generator');

remove_action('wp_head', 'wp_generator');


/**
 * WordPressによる記事内容の自動置換を無効にする
 * 必要に応じて、条件分岐と無効にする処理を追加する
 */
function disable_wordpress_replacers() {

    // 固定ページの場合
    if( is_page() ) {
        remove_filter( 'the_content', 'wpautop' ); // <p>要素挿入
        remove_filter( 'the_content', 'wptexturize' ); // 各種記号の自動置換
    }
}
add_action( 'wp', 'disable_wordpress_replacers' );


//固定ページ,mw-wp-formではビジュアルエディタを利用できないようにする
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' or $typenow == 'mw-wp-form'){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


// excerptのカスタマイズ
// ----------------------------------------------------------------------
//excerptの表示文字数変更
function new_excerpt_mblength($length) {
	return 100;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');


//excerptの最後を「続きを読む」に変更
function new_excerpt_more($post) {
	return ' ... <a class="more" href="'. get_permalink() .'">続きを読む</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// サムネイル画像のサイズ追加
// ----------------------------------------------------------------------
add_image_size( 'size26x26', 26, 26 ,true );
add_image_size( 'size42x29', 42, 29 ,false );



// その他の処理
// ----------------------------------------------------------------------
//奇数番目と偶数番目で別々のclassを指定
//最初の投稿
function isFirst() {
	global $wp_query;
	return ((($wp_query -> current_post)) === 0);
}

//奇数
function isOdd() {
	global $wp_query;
	return ((($wp_query -> current_post + 1) % 2) === 1);
}

//偶数
function isEvery() {
	global $wp_query;
	return ((($wp_query -> current_post + 1) % 2) === 0);
}



// 投稿ループに連番を振る
// ----------------------------------------------------------------------
function getLoopIndex(){
    global $wp_query;
    return $wp_query->current_post;
}
function getLoopCount(){
    global $wp_query;
    return $wp_query->current_post+1;
}



//wp_list_categoriesのtitle属性を削除
// ----------------------------------------------------------------------
function delete_list_categories_title_attribute($output) {
	$output = preg_replace('/ title="[^"]*"/', '', $output);
	return $output;
}
add_filter('wp_list_categories', 'delete_list_categories_title_attribute');


//現在のterm(category)情報を取得
// ----------------------------------------------------------------------
function get_current_term(){
    $id;
    $tax_slug;
    if(is_category()){
        $tax_slug = "category";
        $id = get_query_var('cat');
    }else if(is_tag()){
        $tax_slug = "post_tag";
        $id = get_query_var('tag_id');
    }else if(is_tax()){
        $tax_slug = get_query_var('taxonomy');
        $term_slug = get_query_var('term');
        $term = get_term_by("slug",$term_slug,$tax_slug);
        $id = $term->term_id;
    }
    return get_term($id,$tax_slug);
}

// wp_get_archivesの年表記を置き換える
// ----------------------------------------------------------------------

function my_archives_link($html){
    $html = str_replace('年','-',$html);
    $html = str_replace('月','',$html);
    return $html;
}
add_filter('get_archives_link', 'my_archives_link');


//投稿の最初の画像を一覧でサムネイル表示
// ----------------------------------------------------------------------
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
		$first_img = '/img/common/img_dummy.png';
	}
	return $first_img;
}



//画像URLから画像idを取得
// ----------------------------------------------------------------------
function get_attachment_id($url) {
	global $wpdb;
	$sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
	preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
	$post_name = $matches[1];
	return (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
}


//年度別
// ----------------------------------------------------------------------
function get_archives_by_fiscal_year( $args = '' ) {
    global $wpdb, $wp_locale;
    $defaults = array (
        'post_type' => 'post',
        'limit' => '',
        'format' => 'html',
        'before' => '',
        'after' => '',
        'show_post_count' => false,
        'echo' => 1
    );
    $r = wp_parse_args( $args, $defaults );
    extract ( $r, EXTR_SKIP );
    if ( '' != $limit ) {
        $limit = absint( $limit );
        $limit = ' LIMIT ' . $limit;
    }
    $arcresults = (array) $wpdb->get_results(
        "SELECT YEAR(ADDDATE(post_date, INTERVAL -3 MONTH)) AS `year`, COUNT(ID) AS `posts`
        FROM $wpdb->posts
        WHERE post_type = '$post_type' AND post_status = 'publish'
        GROUP BY YEAR(ADDDATE(post_date, INTERVAL -3 MONTH))
        ORDER BY post_date DESC
        $limit"
    );
    return $arcresults;
}

//投稿アーカイブページの編集
// ----------------------------------------------------------------------
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        global $wp_rewrite;
        $archive_slug = 'info';
        $args['rewrite'] = true;
        $args['label'] = 'INFOMATION';
        $args['has_archive'] = 'info'; //任意のスラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//アイキャッチ
// ----------------------------------------------------------------------
add_theme_support('post-thumbnails');


//pdfファイル
// ----------------------------------------------------------------------
if ( ! function_exists( 'get_filesize' ) ) {
  function get_filesize( $file_path ) {
    $file_fullpath = str_replace( site_url(), ABSPATH, $file_path );
    if ( is_file( $file_fullpath ) ) {
      $file_size = size_format( filesize( $file_fullpath ) );
      return $file_size;
    }
  }
}


//MW WP Form
// ----------------------------------------------------------------------
function my_mail( $Mail_raw, $values, $Data ) {

    if ($Data->get( 'category' ) == '営業・技術情報'){
        $Mail_raw->to = 'eigyokikaku@taiseirotec.co.jp';
        $Mail_raw->cc = 'webmaster@taiseirotec.co.jp';
        $Mail_raw->subject = '【大成ロテック】営業・技術情報に関するお問い合わせ';

    } else if ($Data->get( 'category' ) == '決算情報'){
        $Mail_raw->to = 'kouhou@taiseirotec.co.jp';
        $Mail_raw->cc = 'webmaster@taiseirotec.co.jp';
        $Mail_raw->subject = '【大成ロテック】決算情報に関するお問い合わせ';

    } else if ($Data->get( 'category' ) == 'その他'){
        $Mail_raw->to = 'kouhou@taiseirotec.co.jp';
        $Mail_raw->c = 'webmaster@taiseirotec.co.jp';
        $Mail_raw->subject = '【大成ロテック】その他に関するお問い合わせ';

    }

    return $Mail_raw;
}

add_filter( 'mwform_admin_mail_mw-wp-form-1464', 'my_mail', 10, 3 );


//pagenavi
// ----------------------------------------------------------------------
// previouspostslink → prev

add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );
function custom_wp_pagenavi($html) {
  $out = '';
  $out = str_replace("<div", "", $html);
  $out = str_replace("class='wp-pagenavi'>", "", $out);
  $out = str_replace("<a", "<li class='article-pager__list-item'><a class='article-pager__list-item-number'", $out);
  $out = str_replace("</a>", "</a></li>", $out);
  $out = str_replace("<span", "<li class='article-pager__list-item article-pager__list-item--current'><span class='article-pager__list-item-number'", $out);
  $out = str_replace("</span>", "</span></li>", $out);
  $out = str_replace("</div>", "", $out);

  return '<nav class="pagination"><ul class="article-pager__list">'.$out.'</ul></nav>';
}

/*-------------------------------------------*/
/* 　カスタムフィールドもプレビューできるようにする
/*-------------------------------------------*/
function get_preview_id($postId) {
    global $post;
    $previewId = 0;
    if ( isset($_GET['preview'])
            && ($post->ID == $postId)
                && $_GET['preview'] == true
                    &&  ($postId == url_to_postid($_SERVER['REQUEST_URI']))
        ) {
        $preview = wp_get_post_autosave($postId);
        if ($preview != false) { $previewId = $preview->ID; }
    }
    return $previewId;
}

add_filter('get_post_metadata', function($meta_value, $post_id, $meta_key, $single) {
    if ($preview_id = get_preview_id($post_id)) {
        if ($post_id != $preview_id) {
            $meta_value = get_post_meta($preview_id, $meta_key, $single);
        }
    }
    return $meta_value;
}, 10, 4);

add_action('wp_insert_post', function ($postId) {
    global $wpdb;
    if (wp_is_post_revision($postId)) {
        if (count($_POST['fields']) != 0) {
            foreach ($_POST['fields'] as $key => $value) {
                $field = get_field($key);
                if ( !isset($field['name']) || !isset($field['key']) ) continue;
                if (count(get_metadata('post', $postId, $field['name'], $value)) != 0) {
                    update_metadata('post', $postId, $field['name'], $value);
                    update_metadata('post', $postId, "_" . $field['name'], $field['key']);
                } else {
                    add_metadata('post', $postId, $field['name'], $value);
                    add_metadata('post', $postId, "_" . $field['name'], $field['key']);
                }
            }
        }
        do_action('save_preview_postmeta', $postId);
    }
});

/**
 * 記事一覧ページについて、1ページあたりの取得記事数を制御する
 *
 * @param  [object] $query クエリ変数
 */
function custom_archive_pre_get_posts( $query ) {
    // 管理画面である場合、または、メインクエリでない(サブクエリである)場合、何もしない
    if ( is_admin() || ! $query->is_main_query() ){
        return;
    }

    // カテゴリー記事一覧ページである場合の1ページあたりの取得記事数
    // 特定のカテゴリの場合、is_category( $category )の形式を使用する
    if ( $query->is_category() ) {
        $query->set('posts_per_page', -1 );
    }

    if ( !$query->is_category() && $query->is_archive() ) {
        $query->set('posts_per_page', -1 );
    }

    // // タグ記事一覧ページである場合の1ページあたりの取得記事数
    // // 特定のカテゴリの場合、is_tag( $slug )の形式を使用する
    // if ( $query->is_tag() ) {
    //     $query->set('posts_per_page', 10 );
    // }

    // カスタムタクソノミー記事一覧ページである場合の1ページあたりの取得記事数
    // 特定のタクソノミーおよびタームの場合、is_tax( $taxonomy, $term )の形式を使用する
    if ( $query->is_tax() ) {
        $query->set('posts_per_page', -1 );
    }

    // カスタム投稿タイプの記事一覧ページである場合の1ページあたりの取得記事数
    // is_post_type_archive( $post_types )の形式を使用する
    if ( is_post_type_archive() ) {
        $query->set( 'posts_per_page', -1 );
        return;
    }

    // 検索結果ページである場合の1ページあたりの取得記事数
    // if ( $query->is_search() ) {
    //     $query->set('posts_per_page', 10 );
    // }
}
add_filter('pre_get_posts', 'custom_archive_pre_get_posts');


/*-------------------------------------------*/
/* 　カスタムフィールドもプレビューできるようにする（acf バグ対処）
/*-------------------------------------------*/
function fix_post_id_on_preview($null, $post_id) {
    if (is_preview()) {
        return get_the_ID();
    }
    else {
        $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;

        if (!empty($acf_post_id)) {
            return $acf_post_id;
        }
        else {
            return $null;
        }
    }
}
add_filter( 'acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2 );


/*-------------------------------------------*/
/* REST APIを無効化
/*-------------------------------------------*/

function disable_rest_api() {
  return new WP_Error( 'disabled', array( 'status' => rest_authorization_required_code() ) );
}
add_filter( 'rest_authentication_errors', 'disable_rest_api' );

