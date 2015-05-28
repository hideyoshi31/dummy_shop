<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress-db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'hideyoshi31');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'toshiya5955');

/** MySQL のホスト名 */
define('DB_HOST', 'dummy_shop.localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z0_bd~_Rv7-MO=4/<Vi7/8U@DWKybf+5a0d u7|Z2~z0A(Y7OW!g&}xsudZ|V?C.');
define('SECURE_AUTH_KEY',  '(s|=FO/w.|Nd%x6[+G(:*l~$4.4lyG[$r>]c=K q<Z 9GBxQW{I?=Tf`jZ~&{gE;');
define('LOGGED_IN_KEY',    '`Av;-v]^uCumx.;utL;Yh_|DCmflMhD;@Vzd@S+Pp(QQfANrR}GY*bXc9Tq%E`vV');
define('NONCE_KEY',        '>yj./XY%|CJ+qnJoz^-D-/uCu[O7 42hfEz&,!dAvU{6%lhj>?{-wy&ccw;h!-mr');
define('AUTH_SALT',        '[F-gS{g2XrY)aBBg ZhNZlc;u6,?Mh}l,rD*6LE,Ss/a:SXe{YbMCW{+|.=o6-9G');
define('SECURE_AUTH_SALT', 'p[GuHl9/:(Y4b{CRMzy8izX1[e-p30w29v_iryf(93iwh-wZ.|0.NdzN(-BjKH1p');
define('LOGGED_IN_SALT',   '+Cim7813 !QI@9S$ltuqA&VEhhS(qeD4,whbp%]?kZ4lk%UNhg+4+7BnF4wX-UIG');
define('NONCE_SALT',       'euaM_z|GO+6<Ja)a&G@DxY@H3^67+UtR h[FZ<_U|ejt+*9d|K$!-L$O91e8al<+');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
