
<?php

/**
 * change this to false to disable restful api
 */
$apiEnable = true;

$requireHost = strtolower($_SERVER['HTTP_HOST']);

/**
 * 换成你的域名判断
 */
$isRequiringApi = $apiEnable & (!strcmp($requireHost, "api.dxjia.cn") || !strcmp($requireHost, "www.api.dxjia.cn"));

if ($isRequiringApi) {
	require ("api/api.php");
} else {
// 原博客逻辑
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
}
