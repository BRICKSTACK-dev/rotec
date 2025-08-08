<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'aa1222abp5_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'aa1222abp5');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'AhzgS5Et');

/** MySQL のホスト名 */
define('DB_HOST', '127.0.0.1');

/** データベースのテーブルを作成する際のデータベースの文字セット */
// define('DB_CHARSET', 'utf8mb4');
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', 'utf8_general_ci');


/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p=Xib.@vu5kA,sfAv;(M*aXG=M(;Scb>UGBbQy%{C r[esSn;Rb0?*PZh`(&m) Q');
define('SECURE_AUTH_KEY',  '9=FyC>T&&/YMB6joH}.CW5skG1=ooSNdB@7Z5i,l&-x;^#=PBRD/3Dhp|Z Bf%:5');
define('LOGGED_IN_KEY',    '+dfQvQlZ>,:(L2LbYJVI9HgmbeVO3LkK}PDblLu!z0s)4qF7|/v_uQ1z!L$mGZR}');
define('NONCE_KEY',        'T<UymC1* G#IXO%5 |;G$KG(&XU^9~dF4Sp1J,$If2E`:.NWCb`> ?7]]TJYpcg.');
define('AUTH_SALT',        '/3-Tke?[pAhw@?%B*pcAcviqahg@}}3/u]mi,OR]Uedwzp G.#NOdb?!eAXtOa.d');
define('SECURE_AUTH_SALT', '^ht;IW1k`Q5g!M5AG?9tPm;+R!&d_VpoE*[ YhavmZdw{~,}=O|Q|L4:Jeo,.vNB');
define('LOGGED_IN_SALT',   '/);@}L;.kxw6zVFLz8BO/;sNpFMFmV%2C3FUdT;g<$*N#hlB#?`P`!rNzI`G6ZIs');
define('NONCE_SALT',       '+XQY,_S|#q|:.-/zROdvMN[NLwsf5_sLSN!yA/g !_K=?6Smx59SKk>r;Qu=@rp]');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
define('WP_CACHE', true);
$table_prefix  = 'wp01_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.taiseirotec.co.jp');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
