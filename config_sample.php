<?php

// DONT FORGET TO EDIT JS CONFIG VARIABLES

$site['name'] = '';

$http = 'http';
if(isset($_SERVER['HTTPS']) == 'on') $http .= 's';
$pageUrl = $http . '://' . $_SERVER['SERVER_NAME'] . '/';

define('BASE_URL', $pageUrl . 'ottawa/www/');
define('BASE_PATH', '');
define('CLASS_PATH', BASE_PATH . 'classes/');
define('SITE_PATH', BASE_PATH . '/www/');
define('UPLOAD_PATH', SITE_PATH . 'uploads/');

define('DB_NAME', '');
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');

define('APP_ID', '');
define('APP_SECRET', '');

define('PAGE_TAB', '');

require_once(BASE_PATH . 'common.php');

?>
