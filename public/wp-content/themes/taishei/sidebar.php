<?php
/**
 * サイドバーテンプレート
 *
 * サイドバーを表示する場合に使用するテンプレート
 * 使用しない場合、削除すること
 *
 * サイドバーのコンテンツ自体は template-parts/sidebar/common.php に記述すること
 * ページによってサイドバーの内容が異なる場合は template-parts/sidebar/common.php を複製し、{name}.php({name}は任意)の名前で、
 * template-parts/sidebar/common.php と同一階層に保存し、下記コメントを参考に、条件分岐を記述すること
 * このファイルには、ファイルの管理の便宜上、サイドバーのコンテンツを直接記述しないこと
 *
 * 必要箇所でサイドバーを読み込む場合、get_sidebar()関数を用いること
 * 複数のサイドバーが存在する場合、get_sidebar('name')の形式は使用せず、このファイルで、下記の記述を用いて分岐する
 *
 * if ( is_page( 'slug' ) ) {
 *     get_template_part('template-parts/sidebar', 'name');
 * } elseif ( is_page( 'another-slug' ) ) {
 *     get_template_part('template-parts/sidebar', 'another-name');
 * } else {
 *     get_template_part('template-parts/sidebar', 'common');
 * }
 *
 * 「##」で囲んだ使用方法を示したコメントは必ず削除すること
 */
get_template_part( 'template-parts/sidebar', 'common' );
// 最後のPHPタグの後に何もなければ、終了タグは記述しない
