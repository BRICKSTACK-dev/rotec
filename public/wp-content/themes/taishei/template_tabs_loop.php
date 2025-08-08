<?php
    //目次（行）
    $indexes_parents = array(
        "あ行" => "[ア-オ]",
        "か行" => "[カ-コ]",
        "さ行" => "[サ-ソ]",
        "た行" => "[タ-ト]",
        "な行" => "[ナ-ノ]",
        "は行" => "[ハ-ホ]",
        "ま行" => "[マ-モ]",
        "や行" => "[ヤ-ヨ]",
        "ら行" => "[ラ-ロ]",
        "わ行" => "[ワ-ン]",
        "その他" => ".*"
    );
    // 目次（五十音順）
    $indexes = array(
        "ア" => "[ア]", "イ" => "[イ]", "ウ" => "[ウ]", "エ" => "[エ]", "オ" => "[オ]",
        "カ" => "[カ]", "キ" => "[キ]", "ク" => "[ク]", "ケ" => "[ケ]", "コ" => "[コ]",
        "サ" => "[サ]", "シ" => "[シ]", "ス" => "[ス]", "セ" => "[セ]", "ソ" => "[ソ]",
        "タ" => "[タ]", "チ" => "[チ]", "ツ" => "[ツ]", "テ" => "[テ]", "ト" => "[ト]",
        "ナ" => "[ナ]", "ニ" => "[ニ]", "ヌ" => "[ヌ]", "ネ" => "[ネ]", "ノ" => "[ノ]",
        "ハ" => "[ハ]", "ヒ" => "[ヒ]", "フ" => "[フ]", "ヘ" => "[ヘ]", "ホ" => "[ホ]",
        "マ" => "[マ]", "ミ" => "[ミ]", "ム" => "[ム]", "メ" => "[メ]", "モ" => "[モ]",
        "ヤ" => "[ヤ]", "ユ" => "[ユ]", "ヨ" => "[ヨ]",
        "ラ" => "[ラ]", "リ" => "[リ]", "ル" => "[ル]", "レ" => "[レ]", "ロ" => "[ロ]",
        "ワ" => "[ワ]", "ン" => "[ン]",
        "その他" => ".*"
    );
    global $post;
    // 投稿のデータを条件を指定して取得
    $args = array(
        'post_type' => 'カスタム投稿タイプ名',
        'posts_per_page' => '-1',
        'post_status' => 'publish',
        'tax_query' => array(array(
        'taxonomy' => 'タクソノミー名',
        'field' => 'slug',
        'terms' => '親カテゴリ',//指定があれば記載
        )),
        'meta_key' => 'yomi', // meta_keyにyomiを持っている記事を指定
        'meta_value' => '', // yomiの値は特に指定しないという指示
        'orderby' => meta_value, // yomiの値を基準に並び替えを行う
        'order' => asc // 昇順
    );
    $my_posts = get_posts($args);
    $post_data_set = array();

    // 上記の条件の投稿がある場合は下記を指定
    if ($my_posts) {
        foreach ($my_posts as $post) :
            setup_postdata($post);
            //読み仮名の1文字目を取得※この際濁点、半濁点は分離
            $yomi = get_post_meta($post->ID, 'yomi', true);
            $yomi_conv = mb_convert_kana($yomi, 'k', 'UTF-8'); //全角カタカナを半角カタカナに変換　※ここで濁点、半濁点を分離する
            $yomi_conv = mb_convert_kana($yomi_conv, 'K', 'UTF-8');//半角カタカナを全角カタカナに変換
            $yomi_first = mb_substr($yomi_conv, 0, 1); // タイトルの1文字を取得

            $posts['title'] = get_the_title(); //タイトル
            $posts['permalink'] = get_permalink(); //URL
            $posts['yomi'] = $yomi; //読み仮名
            $posts['yomi_first'] = $yomi_first; //読み仮名1文字目
            $post_data_set[] = $posts;
        endforeach;
    }

    // 目次（五十音順）ごとに投稿のデータを格納する
    $post_data_set_index = array();
    foreach ( $post_data_set as $key => $val) {
        $char = mb_substr( $val['yomi_first'], 0, 1);
        foreach ( $indexes as $index => $pattern ) {
            if (preg_match("/^" . $pattern . "/u", $char)) {
                $post_data_set_index[$index][] = $post_data_set[$key];
                break;
            }
        }
    }
    //目次（行）ごとに投稿のデータを格納する
    $post_data_set_index_parent = array();
    foreach ( $post_data_set_index as $key => $val) {
        foreach ( $indexes_parents as $indexes_parent => $patterns ) {
            if (preg_match("/^" . $patterns . "/u", $key)) {
                $post_data_set_index_parent[$indexes_parent][$key] = $post_data_set_index[$key];
                break;
            }
        }
    }; ?>



    <!--ここから出力するよ！-->
    <div class="js-tab">
    <?php if ($post_data_set_index_parent):?>
    <ul class="js-tab-title">
        <?php
            foreach ($post_data_set_index_parent as $indexes_parent => $posts): $x++; $x = sprintf("%02d",$x); ?>
        <li><a href="#anc-tab<?php echo $x; ?>"><h2><?php echo $indexes_parent; ?></h2></a></li>
        <?php endforeach; ?>
        </ul>

        <div class="js-tab-content">
        <?php
            foreach ($post_data_set_index_parent as $indexes_parent => $posts): $i++; $i = sprintf("%02d",$i); ?>
            <div class="az_list" id="anc-tab<?php echo $i; ?>">
            <?php
            foreach ($posts as $index => $post):　 ?>


            <h3><?php echo $index; ?></h3>
            <ul>
            <?php foreach ($post as $key => $val) { ?>
            <li><a href="<?php echo $val['permalink']; ?>"><?php echo $val['title']; ?></a></li>
            <?php } ?>
            </ul>
            <?php endforeach; ?>
            </div><!-- .az_list -->
            <?php endforeach; ?>
            </div><!-- .js-tab-content -->
            <?php endif;wp_reset_postdata(); ?>
            </div><!-- .js-tab -->
    <!--ここまで出力するよ！-->