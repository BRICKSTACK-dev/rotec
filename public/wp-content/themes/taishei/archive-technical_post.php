<?php get_header(); ?>

<div class="contents contents--technical">

    <div class="main">

        <div class="main-keyvisual main-keyvisual--technical">
            <div class="main-keyvisual__inner">
                <h2 class="main-keyvisual__title">
                    <span class="main-keyvisual__title-jp">技術情報</span>
                    <span class="main-keyvisual__title-en">Technical information</span>
                </h2>
            </div>
        </div>
        <!-- [/main-keyvisual] -->


        <div class="breadcrumb breadcrumb--border">
            <div class="container">
                <ul class="breadcrumb__list">
<?php if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
                </ul>
            </div>
        </div>
        <!-- [/breadcrumb] -->

        <div class="search-area js-fadein mgt-sp--20 mgb-pc--40 mgb-sp--40">
            <h4 class="search-area__title mgb-pc--20 mgb-sp--20">
                <span class="search-area__title-en">SEARCH</span>
                <span class="search-area__title-jp">技術情報検索</span>
            </h4>
            <div class="search-area__target mgb-pc--10 mgb-sp--10">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-area__target-form">
                    <input type="search" name="s" value="" class="search-area__target-form-text">
                    <button type="submit" value="検索" class="search-area__target-form-button" title="検索"></button>
                </form>
            </div>
            <p class="search-area__text">施工場所や効果・機能、使用材料、舗装損傷、工法名などで<br class="pc-hide">技術情報を検索できます。</p>
        </div>
        <!-- [/search-area] -->

        <div class="container-narrow mgb-pc--80 mgb-sp--80">

            <div class="harf-contens harf-contens--technicalinfo">
                <ul class="harf-contens__list">
                    <li class="harf-contens__list-item js-fadein">

                        <div class="lineup-icon">

                            <div class="lineup-icon__image">
                                <img src="/img/technicalinfo/img_technicalinfo01.jpg" alt="">
                                <p class="lineup-icon__image-caption sp-hide">施工場所別 検索</p>
                            </div>

                            <div class="lineup-icon__contents">
                                <p class="lineup-icon__image-caption pc-hide">施工場所別 検索</p>
                                <ul class="lineup-icon__list">
                                    <li class="lineup-icon__list-item lineup-icon__list-item--highway">
                                        <a href="/technicalinfo/cat/highway" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">高速道路・一般道路</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--road1">
                                        <a href="/technicalinfo/cat/road1" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">生活道路・構内道路</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--vincent-thomas-bridge">
                                        <a href="/technicalinfo/cat/vincent-thomas-bridge" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">橋面・橋梁</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--tunnel">
                                        <a href="/technicalinfo/cat/tunnel" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">トンネル</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--airplane">
                                        <a href="/technicalinfo/cat/airplane" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">空港・港湾</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--car">
                                        <a href="/technicalinfo/cat/car" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">歩道・広場・駐車場</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--drop">
                                        <a href="/technicalinfo/cat/drop" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">水利施設・処分場</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--sports">
                                        <a href="/technicalinfo/cat/sports" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">スポーツ・レジャー施設</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--road2">
                                        <a href="/technicalinfo/cat/road2" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">路盤・路床</p>
                                        </a>
                                    </li>
                                    <!-- <li class="lineup-icon__list-item lineup-icon__list-item--sprout">
                                        <a href="/technicalinfo/cat/sprout" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">土壌・水質</p>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>

                        </div>
                        <!-- [/lineup-icon] -->

                    </li>

                    <li class="harf-contens__list-item js-fadein">

                        <div class="lineup-icon">

                            <div class="lineup-icon__image">
                                <img src="/img/technicalinfo/img_technicalinfo02.jpg" alt="">
                                <p class="lineup-icon__image-caption sp-hide">機能・効果別　検索</p>
                            </div>

                            <div class="lineup-icon__contents">
                                <p class="lineup-icon__image-caption pc-hide">機能・効果別　検索</p>
                                <ul class="lineup-icon__list">
                                    <li class="lineup-icon__list-item lineup-icon__list-item--wave">
                                        <a href="/technicalinfo/cat/wave" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">耐流動</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--friction">
                                        <a href="/technicalinfo/cat/friction" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">耐摩耗</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--drop">
                                        <a href="/technicalinfo/cat/drop-2" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">排水・透水・低騒音</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--safety">
                                        <a href="/technicalinfo/cat/safety" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">安全性</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--tree">
                                        <a href="/technicalinfo/cat/tree" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">景観性</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--timer">
                                        <a href="/technicalinfo/cat/timer" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">期間短縮</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--labor">
                                        <a href="/technicalinfo/cat/labor" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">省力化</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--environment">
                                        <a href="/technicalinfo/cat/environment" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">環境</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--ict">
                                        <a href="/technicalinfo/cat/ict" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">ICT</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- [/lineup-icon] -->

                    </li>

                    <li class="harf-contens__list-item js-fadein">

                        <div class="lineup-icon">

                            <div class="lineup-icon__image">
                                <img src="/img/technicalinfo/img_technicalinfo03.jpg" alt="">
                                <p class="lineup-icon__image-caption sp-hide">使用材料別 検索</p>
                            </div>

                            <div class="lineup-icon__contents">
                                <p class="lineup-icon__image-caption pc-hide">使用材料別 検索</p>
                                <ul class="lineup-icon__list">
                                    <li class="lineup-icon__list-item lineup-icon__list-item--asphalt">
                                        <a href="/technicalinfo/cat/asphalt" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">アスファルト系</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--cement">
                                        <a href="/technicalinfo/cat/cement" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">セメント系</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--resin">
                                        <a href="/technicalinfo/cat/resin" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">樹脂系</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--organic">
                                        <a href="/technicalinfo/cat/organic" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">土系・木系</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--recycling">
                                        <a href="/technicalinfo/cat/recycling" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">リサイクル性</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--others">
                                        <a href="/technicalinfo/cat/others" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">その他</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- [/lineup-icon] -->

                    </li>

                    <li class="harf-contens__list-item js-fadein">

                        <div class="lineup-icon">

                            <div class="lineup-icon__image">
                                <img src="/img/technicalinfo/img_technicalinfo04.jpg" alt="">
                                <p class="lineup-icon__image-caption sp-hide">舗装損傷別 検索</p>
                            </div>

                            <div class="lineup-icon__contents">
                                <p class="lineup-icon__image-caption pc-hide">舗装損傷別 検索</p>
                                <ul class="lineup-icon__list">
                                    <li class="lineup-icon__list-item lineup-icon__list-item--pothole">
                                        <a href="/technicalinfo/cat/pothole" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">ポットホール</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--crack">
                                        <a href="/technicalinfo/cat/crack" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">ひび割れ</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--rutting">
                                        <a href="/technicalinfo/cat/rutting" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">わだち掘れ</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--interface ">
                                        <a href="/technicalinfo/cat/interface" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">平坦性の低下</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--sliding">
                                        <a href="/technicalinfo/cat/sliding" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">すべり抵抗の低下</p>
                                        </a>
                                    </li>
                                    <li class="lineup-icon__list-item lineup-icon__list-item--step">
                                        <a href="/technicalinfo/cat/step" class="lineup-icon__list-item-target">
                                            <p class="lineup-icon__list-item-target-text">段差・空洞</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- [/lineup-icon] -->

                    </li>

                </ul>
            </div>
            <!-- [/harf-contens] -->

        </div>
        <!-- [/container-narrow] -->
<?php
//目次（行）
$indexes_parents = array(
    "ア" => "[ア-オ]",
    "カ" => "[カ-コ]",
    "サ" => "[サ-ソ]",
    "タ" => "[タ-ト]",
    "ナ" => "[ナ-ノ]",
    "ハ" => "[ハ-ホ]",
    "マ" => "[マ-モ]",
    "ヤ" => "[ヤ-ヨ]",
    "ラ" => "[ラ-ロ]",
    "ワ" => "[ワ-ン]",
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
?>

<div class="container mgb-pc--100 mgb-sp--100">

<!--ここから一般名-->
    <section id="general" class="section mgb-pc--80 mgb-sp--80">
<?php
// 投稿のデータを条件を指定して取得
$args = array(
    'post_type' => 'technical_post',
    'posts_per_page' => '-1',
    'post_status' => 'publish',
    'meta_key' => 'technical_post_product_kana', // meta_keyにyomiを持っている記事を指定
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
        $product = get_post_meta($post->ID, 'technical_post_product', true);
        $method = get_post_meta($post->ID, 'technical_post_method', true);
        $tag = get_post_meta($post->ID, 'technical_post_tag', true);
        $yomi = get_post_meta($post->ID, 'technical_post_product_kana', true);
        $yomi_conv = mb_convert_kana($yomi, 'k', 'UTF-8'); //全角カタカナを半角カタカナに変換　※ここで濁点、半濁点を分離する
        $yomi_conv = mb_convert_kana($yomi_conv, 'K', 'UTF-8');//半角カタカナを全角カタカナに変換
        $yomi_first = mb_substr($yomi_conv, 0, 1); // タイトルの1文字を取得

        $posts['title'] = get_the_title(); //タイトル
        $posts['product'] = $product;
        $posts['method'] = $method;
        $posts['tag'] = $tag;
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
        <h3 class="section-border-title section-border-title--narrow mgb-pc--30 js-fadein">工法別検索（一般名から探す）</h3>

        <div class="technical-tab js-fadein">
<?php if ($post_data_set_index_parent):?>
            <ul class="selector">
                <li class="selector__list">
                    <button class="selector__trigger current" data-id="select-def-all">すべて<br>表示</button>
                </li>
                <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $x++; $x = sprintf("%02d",$x); ?>
                <li class="selector__list">
                    <button class="selector__trigger" data-id="select-def-<?php echo $x; ?>"><?php echo $indexes_parent; ?></button>
                </li>
                <?php endforeach; ?>
            </ul>

            <div class="block-wrapper">
                <div id="select-def-all" class="block current">
                    <table class="tab-table">
                        <thead>
                            <tr>
                                <th colspan="2" style="width: 75%;">工法名の分類</th>
                                <th colspan="8" style="width: 25%;">特徴別分類</th>
                            </tr>
                            <tr>
                                <th>一般名工法名称</th>
                                <th>当社工法名称</th>
                                <td>高<br>評<br>価</th>
                                <td>維<br>持<br>補<br>修</th>
                                <td>安<br>全<br>性</th>
                                <td>快<br>適<br>性</th>
                                <td>経<br>済<br>性</th>
                                <td>地<br>球<br>環<br>境</th>
                                <td>供<br>用<br>性</th>
                                <td>施<br>工<br>性</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $v++; $v = sprintf("%02d",$v); ?>
                        <?php foreach ($posts as $index => $post): ?>
                            <?php foreach ($post as $key => $val): ?>
                            <tr>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['method']; ?></a>
                                </th>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['product']; ?></a>
                                </th>
<?php
$highValue = ( in_array("highValue", $val['tag']) ) ? '◯' : '&nbsp;';
$maintenance = ( in_array("maintenance", $val['tag']) ) ? '◯' : '&nbsp;';
$safety = ( in_array("safety", $val['tag']) ) ? '◯' : '&nbsp;';
$comfotable = ( in_array("comfotable", $val['tag']) ) ? '◯' : '&nbsp;';
$economy = ( in_array("economy", $val['tag']) ) ? '◯' : '&nbsp;';
$environment = ( in_array("environment", $val['tag']) ) ? '◯' : '&nbsp;';
$share = ( in_array("share", $val['tag']) ) ? '◯' : '&nbsp;';
$build = ( in_array("build", $val['tag']) ) ? '◯' : '&nbsp;';
?>
                                <td><?php echo $highValue;?></td>
                                <td><?php echo $maintenance;?></td>
                                <td><?php echo $safety;?></td>
                                <td><?php echo $comfotable;?></td>
                                <td><?php echo $economy;?></td>
                                <td><?php echo $environment;?></td>
                                <td><?php echo $share;?></td>
                                <td><?php echo $build;?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- [/tab-table] -->
                </div>
            <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $i++; $i = sprintf("%02d",$i); ?>
                <div id="select-def-<?php echo $i; ?>" class="block">
                    <table class="tab-table">
                        <thead>
                            <tr>
                                <th colspan="2" style="width: 75%;">工法名の分類</th>
                                <th colspan="8" style="width: 25%;">特徴別分類</th>
                            </tr>
                            <tr>
                                <th>一般名工法名称</th>
                                <th>当社工法名称</th>
                                <td>高<br>評<br>価</th>
                                <td>維<br>持<br>補<br>修</th>
                                <td>安<br>全<br>性</th>
                                <td>快<br>適<br>性</th>
                                <td>経<br>済<br>性</th>
                                <td>地<br>球<br>環<br>境</th>
                                <td>供<br>用<br>性</th>
                                <td>施<br>工<br>性</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $index => $post): ?>
                            <?php foreach ($post as $key => $val): ?>
                            <tr>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['product']; ?></a>
                                </th>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['method']; ?></a>
                                </th>
<?php
$highValue = ( in_array("highValue", $val['tag']) ) ? '◯' : '&nbsp;';
$maintenance = ( in_array("maintenance", $val['tag']) ) ? '◯' : '&nbsp;';
$safety = ( in_array("safety", $val['tag']) ) ? '◯' : '&nbsp;';
$comfotable = ( in_array("comfotable", $val['tag']) ) ? '◯' : '&nbsp;';
$economy = ( in_array("economy", $val['tag']) ) ? '◯' : '&nbsp;';
$environment = ( in_array("environment", $val['tag']) ) ? '◯' : '&nbsp;';
$share = ( in_array("share", $val['tag']) ) ? '◯' : '&nbsp;';
$build = ( in_array("build", $val['tag']) ) ? '◯' : '&nbsp;';
?>
                                <td><?php echo $highValue;?></td>
                                <td><?php echo $maintenance;?></td>
                                <td><?php echo $safety;?></td>
                                <td><?php echo $comfotable;?></td>
                                <td><?php echo $economy;?></td>
                                <td><?php echo $environment;?></td>
                                <td><?php echo $share;?></td>
                                <td><?php echo $build;?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- [/tab-table] -->
                </div>
            <?php endforeach; ?>
            </div>
            <!-- [/block-wrapper] -->
<?php endif;wp_reset_postdata(); ?>
        </div>
        <!-- [/technical-tab] -->
    </section>
    <!-- [/section] -->
<!--ここまで一般名-->

<!--ここから商品名-->
    <section id="product" class="section">
<?php
// 投稿のデータを条件を指定して取得
$args = array(
    'post_type' => 'technical_post',
    'posts_per_page' => '-1',
    'post_status' => 'publish',
    'meta_key' => 'technical_post_method_kana', // meta_keyにyomiを持っている記事を指定
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
        $product = get_post_meta($post->ID, 'technical_post_product', true);
        $method = get_post_meta($post->ID, 'technical_post_method', true);
        $tag = get_post_meta($post->ID, 'technical_post_tag', true);
        $yomi = get_post_meta($post->ID, 'technical_post_method_kana', true);
        $yomi_conv = mb_convert_kana($yomi, 'k', 'UTF-8'); //全角カタカナを半角カタカナに変換　※ここで濁点、半濁点を分離する
        $yomi_conv = mb_convert_kana($yomi_conv, 'K', 'UTF-8');//半角カタカナを全角カタカナに変換
        $yomi_first = mb_substr($yomi_conv, 0, 1); // タイトルの1文字を取得

        $posts['title'] = get_the_title(); //タイトル
        $posts['product'] = $product;
        $posts['method'] = $method;
        $posts['tag'] = $tag;
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
        <h3 class="section-border-title section-border-title--narrow mgb-pc--30 js-fadein">工法別検索（商品名から探す）</h3>

        <div class="technical-tab js-fadein">
<?php if ($post_data_set_index_parent):?>
            <ul class="selector">
                <li class="selector__list">
                    <button class="selector__trigger current" data-id="select-method-all">すべて<br>表示</button>
                </li>
                <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $x++; $x = sprintf("%02d",$x); ?>
                <li class="selector__list">
                    <button class="selector__trigger" data-id="select-method-<?php echo $x; ?>"><?php echo $indexes_parent; ?></button>
                </li>
                <?php endforeach; ?>
            </ul>

            <div class="block-wrapper">
                <div id="select-method-all" class="block current">
                    <table class="tab-table">
                        <thead>
                            <tr>
                                <th colspan="2" style="width: 75%;">工法名の分類</th>
                                <th colspan="8" style="width: 25%;">特徴別分類</th>
                            </tr>
                            <tr>
                                <th>当社工法名称</th>
                                <th>一般名工法名称</th>
                                <td>高<br>評<br>価</th>
                                <td>維<br>持<br>補<br>修</th>
                                <td>安<br>全<br>性</th>
                                <td>快<br>適<br>性</th>
                                <td>経<br>済<br>性</th>
                                <td>地<br>球<br>環<br>境</th>
                                <td>供<br>用<br>性</th>
                                <td>施<br>工<br>性</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $v++; $v = sprintf("%02d",$v); ?>
                        <?php foreach ($posts as $index => $post): ?>
                            <?php foreach ($post as $key => $val): ?>
                            <tr>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['product']; ?></a>
                                </th>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['method']; ?></a>
                                </th>
<?php
$highValue = ( in_array("highValue", $val['tag']) ) ? '◯' : '&nbsp;';
$maintenance = ( in_array("maintenance", $val['tag']) ) ? '◯' : '&nbsp;';
$safety = ( in_array("safety", $val['tag']) ) ? '◯' : '&nbsp;';
$comfotable = ( in_array("comfotable", $val['tag']) ) ? '◯' : '&nbsp;';
$economy = ( in_array("economy", $val['tag']) ) ? '◯' : '&nbsp;';
$environment = ( in_array("environment", $val['tag']) ) ? '◯' : '&nbsp;';
$share = ( in_array("share", $val['tag']) ) ? '◯' : '&nbsp;';
$build = ( in_array("build", $val['tag']) ) ? '◯' : '&nbsp;';
?>
                                <td><?php echo $highValue;?></td>
                                <td><?php echo $maintenance;?></td>
                                <td><?php echo $safety;?></td>
                                <td><?php echo $comfotable;?></td>
                                <td><?php echo $economy;?></td>
                                <td><?php echo $environment;?></td>
                                <td><?php echo $share;?></td>
                                <td><?php echo $build;?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- [/tab-table] -->
                </div>
            <?php foreach ($post_data_set_index_parent as $indexes_parent => $posts): $i++; $i = sprintf("%02d",$i); ?>
                <div id="select-method-<?php echo $i; ?>" class="block">
                    <table class="tab-table">
                        <thead>
                            <tr>
                                <th colspan="2" style="width: 75%;">工法名の分類</th>
                                <th colspan="8" style="width: 25%;">特徴別分類</th>
                            </tr>
                            <tr>
                                <th>当社工法名称</th>
                                <th>一般名工法名称</th>
                                <td>高<br>評<br>価</th>
                                <td>維<br>持<br>補<br>修</th>
                                <td>安<br>全<br>性</th>
                                <td>快<br>適<br>性</th>
                                <td>経<br>済<br>性</th>
                                <td>地<br>球<br>環<br>境</th>
                                <td>供<br>用<br>性</th>
                                <td>施<br>工<br>性</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $index => $post): ?>
                            <?php foreach ($post as $key => $val): ?>
                            <tr>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['method']; ?></a>
                                </th>
                                <th>
                                    <a href="<?php echo $val['permalink']; ?>"><?php echo $val['product']; ?></a>
                                </th>
<?php
$highValue = ( in_array("highValue", $val['tag']) ) ? '◯' : '&nbsp;';
$maintenance = ( in_array("maintenance", $val['tag']) ) ? '◯' : '&nbsp;';
$safety = ( in_array("safety", $val['tag']) ) ? '◯' : '&nbsp;';
$comfotable = ( in_array("comfotable", $val['tag']) ) ? '◯' : '&nbsp;';
$economy = ( in_array("economy", $val['tag']) ) ? '◯' : '&nbsp;';
$environment = ( in_array("environment", $val['tag']) ) ? '◯' : '&nbsp;';
$share = ( in_array("share", $val['tag']) ) ? '◯' : '&nbsp;';
$build = ( in_array("build", $val['tag']) ) ? '◯' : '&nbsp;';
?>
                                <td><?php echo $highValue;?></td>
                                <td><?php echo $maintenance;?></td>
                                <td><?php echo $safety;?></td>
                                <td><?php echo $comfotable;?></td>
                                <td><?php echo $economy;?></td>
                                <td><?php echo $environment;?></td>
                                <td><?php echo $share;?></td>
                                <td><?php echo $build;?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- [/tab-table] -->
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif;wp_reset_postdata(); ?>
        </div>
        <!-- [/technical-tab] -->
    </section>
    <!-- [/section] -->
<!--ここまで一般名-->

    </div>
    <!-- [/main] -->

</div>
<!-- [/contents] -->

<?php get_footer(); ?>