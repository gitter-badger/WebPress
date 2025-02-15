<?php
# check valid PHP library
if(!extension_loaded('json')){
	echo 'You must have "json" enabled';
	return false;
}
if(!extension_loaded('mbstring')){
	echo 'You must have "mbstring" enabled';
	return false;
}
if(!extension_loaded('openssl')){
	echo 'You must have "openssl" enabled';
	return false;
}
if(!extension_loaded('zip')){
	echo 'You must have "zip" enabled';
	return false;
}
if(!extension_loaded('curl')){
	echo 'You must have "curl" enabled';
	return false;
}
if(!extension_loaded('ftp')){
	echo 'You must have "ftp" enabled';
	return false;
}
if(!extension_loaded('fileinfo')){
	echo 'You must have "fileinfo" enabled';
	return false;
}

date_default_timezone_set("America/New_York");
# defination
$removeSERVER = str_replace('/','\\',$_SERVER['DOCUMENT_ROOT']);
$root = str_replace('\\','/',str_replace($removeSERVER,'',__DIR__));



# installations
if(!is_dir('data')||!file_exists('data/')){
	mkdir('data/');
}
if(!is_dir('data/users')||!file_exists('data/users/')){
 mkdir('data/users');
}
if(!is_dir('data/plugins')||!file_exists('data/plugins/')){
	 mkdir('data/plugins');
}
if(!is_dir('data/themes')||!file_exists('data/themes/')){
	 mkdir('data/themes');
}
if(!is_dir('data/mail')||!file_exists('data/mail')){
	 mkdir('data/mail');
}
if(!is_dir('api')||!file_exists('api/')){
	 mkdir('api/');
}
if(!is_dir('data/replys')||!file_exists('data/replys')){
	 mkdir('data/replys');
}
if(!is_dir('data/topics')||!file_exists('data/topics')){
	 mkdir('data/topics');
}
if(!is_dir('data/forums')||!file_exists('data/forums')){
	 mkdir('data/forums');
}
if(!is_dir('events')||!file_exists('events')){
	 mkdir('events');
}

#defined
!defined('DS') ? define('DS', '/') : '';
!defined('ROOT') ? define('ROOT', __DIR__.DS) : '';
!defined('MAINDIR') ? define('MAINDIR', basename(__DIR__)) : '';
!defined('CONFIG_SAVE') ? define('CONFIG_SAVE','../save/') : '';
!defined('CONFIG_LOAD') ? define('CONFIG_LOAD','../plugin/') : '';
$BASEPATH = '.';

!defined('DATA_USERS') ? define('DATA_USERS', ROOT.'data'.DS.'users'.DS) : '';
!defined('DATA_PLUGINS') ? define('DATA_PLUGINS', ROOT.'data'.DS.'plugins'.DS) : '';
!defined('DATA_THEMES') ? define('DATA_THEMES', ROOT.'data'.DS.'themes'.DS) : '';
!defined('DATA_MAIL') ? define('DATA_MAIL', ROOT.'data'.DS.'mail'.DS) : '';
!defined('DATA_UPLOADS') ? define('DATA_UPLOADS', ROOT.'uploads'.DS) : '';
!defined('DATA_TOPICS') ? define('DATA_TOPICS', ROOT.'data'.DS.'topics'.DS) : '';
!defined('DATA_FORUMS') ? define('DATA_FORUMS', ROOT.'data'.DS.'forums'.DS) : '';
!defined('DATA_REPLYS') ? define('DATA_REPLYS', ROOT.'data'.DS.'replys'.DS) : '';
!defined('DATA_AVATARS') ? define('DATA_AVATARS', '/uploads'.DS.'avatars'.DS) : '';
!defined('DATA_CONFIG') ? define('DATA_CONFIG', $BASEPATH.'/conf'.DS) : '';
!defined('DATA') ? define('DATA', ROOT.'data'.DS) : '';
!defined('DB_EXTENSIONS') ? define('DB_EXTENSIONS', '.dat.json') : '';
#Project Info
!defined('PROJECT_NAME') ? define('PROJECT_NAME', 'WebPress') : '';
!defined('PROJECT_BUILD') ? define('PROJECT_BUILD', '230210 <span class="text-secondary" style="font-size:12px;">'.date('d (F) Y', strtotime('23-02-10')).'</span>') : '';
!defined('PROJECT_VERSION') ? define('PROJECT_VERSION', file_get_contents(ROOT.'VERSION')) : '';
!defined('WEBPRESS') ? define('WEBPRESS', true) : ''; # Use for plugins
require_once('init.php');

	 
#config(run JSON)
$conf = json_decode(file_get_contents('conf/config.dat.json'), true);
!defined('CHARSET') ? define('CHARSET', $conf['page']['charset']) : '';
$defaultIcon = $conf['page']['page-icon']['16'];
$appleIcon = $conf['page']['page-icon']['64'];
$pageTitle = $conf['page']['page-title'];
$pageError = $conf['page']['errors'];
$pageTheme = $conf['page']['themes'];
$captchaSettings = $conf['page']['captcha']['settings'];
/*language*/
$selLang = $conf['lang'];
$topicsArr = array('pinned'=>array(), 'topics'=>array());
$replaysArr = array('replys'=>array());

function errormsg($errno, $errstr, $errfile, $errline, $errcontext){
	echo '<div class="alert alert-danger"><i class="fas fa-times-circle"></i> '.$errstr.'</div>';
}
function noticemsg($errno, $errstr, $errfile, $errline, $errcontext){
	echo '<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i> '.$errstr.'</div>';
}
//set error handler
if (isset($conf['debug'])) {
    ini_set('error_log', ROOT . 'debug.log');
    if ($conf['debug'] === true) {
        error_reporting(E_ALL | E_STRICT | E_NOTICE);
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
        ini_set("track_errors", 1);
        ini_set('html_errors', 1);
    } elseif ($conf['debug'] === false) {
        error_reporting(0);
        ini_set('display_errors', false);
        ini_set('display_startup_errors', false);
    }
}
#global variable
$plugins = array_diff(scandir(ROOT.'plugins'.DS), ['.','..']);
$themes = array_diff(scandir(ROOT.'themes'.DS), ['.','..']);
$session = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$token = str_replace('=','',base64_encode(md5($session)));


function langpack(){
	global $lang;
	return array('en-US'=>$lang['lang']['en-US'], 'de-DE'=>$lang['lang']['de-DE'], 'it-IT'=>$lang['lang']['it-IT'], 'fr-FR'=>$lang['lang']['fr-FR'], 'zh-CN'=>$lang['lang']['zh-CN']);
}

function install(){
	global $BASEPATH, $plugins, $conf;
	foreach($plugins as $plugin){
	@mkdir(DATA_PLUGINS.$plugin);
	if(!file_exists(ROOT.'plugins'.DS.$plugin.DS.'lang'.DS.$conf['lang'].'.php')){
		 echo 'You are required to have '.$conf['lang'].'.php for "'.$plugin.'"';
	}else{
		include_once(ROOT.'plugins'.DS.$plugin.DS.'lang'.DS.$conf['lang'].'.php');
		include_once(ROOT.'plugins'.DS.$plugin.DS.$plugin.'.plg.php');
			
			}	
			
}
require_once('libs/users.lib.php');
require_once('libs/plugin.lib.php');
require_once('libs/files.lib.php');
require_once('libs/webdb.lib.php');
if(!file_exists(ROOT.'INSTALL')){
	Plugin::hook('install');
	foreach(Files::Scan(ROOT.'themes') as $themes){
	if(!file_exists(DATA_THEMES.$themes.DS.'theme.conf.json')){
		@mkdir(DATA_THEMES.$themes);
		Files::copyFile(ROOT.'themes'.DS.$themes.DS.'theme.conf.json',DATA_THEMES.$themes.DS.'theme.conf.json');
		}
	}
	$make = fopen(ROOT.'INSTALL', 'w+');
	fwrite($make, date('Y-m-d h:i:sa'));
	fclose($make);
	echo '<script>
	window.open("'.$BASEPATH.'/auth.php/register", "_self");
	</script>';
	}	
}
!file_exists(ROOT.'INSTALL') ? install() : '';
if(!file_exists(ROOT.'events'.DS.'listener.event')){
	$q = fopen(ROOT.'events'.DS.'listener.event', 'w+');
	fwrite($q,'');
	fclose($q);
}
preg_match('/[\w\d]+$/', $_SERVER['REQUEST_URI'], $c);
$cur = isset($c[0]) ? $c[0] : '';
?>