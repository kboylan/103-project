<?php
# Database Configuration
define( 'DB_NAME', 'wp_kboylan' );
define( 'DB_USER', 'kboylan' );
define( 'DB_PASSWORD', 'nt0iaqDiBdDD1fmzt5H6' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'KL|oCCKB@2i;&`~30<&ji$qKFImM-tQ-gvMU!&N8UsfvkLzmM#9>[1iY$B +6LQ6');
define('SECURE_AUTH_KEY',  '^.wfy]xEnN,?^`fiE$wG]P,OZovr9<R-||i!RV#MM~e}A*vivhhr6_,/>;vbv559');
define('LOGGED_IN_KEY',    'Y6vDbo^hy~O[Gy0EbQbF$.bl=(MVu]*GK/8fy(sf?l!KfH{?AU_]HGgcg$9MCS94');
define('NONCE_KEY',        '-X|`1,d[OF(|7tA%+[):,F?R.;z+nMY{q:5)Nh*p,hzZO1vdZow5u&6nn?;2dx}N');
define('AUTH_SALT',        'luAi]lKE*Ks0rSCZ|amFLfKHt>MGtc]b_em*[o/68Np4Ox9o^LvX:q|Zq=TQb-!|');
define('SECURE_AUTH_SALT', '<c+DS@F6*Snl]4:|&IqNIDEHhz$u]Z1R2%rbG<%!Dy#n+?wmB|jbOZ!XE}N~|To7');
define('LOGGED_IN_SALT',   '1Y.gFPY$Ot2j?#9P}..0$!s_316/_)zNso7HZO?FxH0RTUIvkA,Q)ntZ#Dvug^|?');
define('NONCE_SALT',       '%Zw.|g{J%4m-5N7+ay[: Y_ 9lW<oB~U]}P(gwvF]5uHgCdaGs|D-BGbD;B-Hsao');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'kboylan' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '31dda4e0e6524859d57b0923485a37ecbd8204ac' );

define( 'WPE_CLUSTER_ID', '101003' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'kboylan.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101003', );

$wpe_special_ips=array ( 0 => '104.198.13.159', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
