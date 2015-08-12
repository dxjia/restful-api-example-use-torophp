<?php

require("debug.php");

$request_method = strtolower($_SERVER['REQUEST_METHOD']);
$path_info = '/';

if (! empty($_SERVER['PATH_INFO'])) {
    $path_info = $_SERVER['PATH_INFO'];
} elseif (! empty($_SERVER['ORIG_PATH_INFO']) && $_SERVER['ORIG_PATH_INFO'] !== '/api.php') {
    $path_info = $_SERVER['ORIG_PATH_INFO'];
} else {
	if (! empty($_SERVER['REQUEST_URI'])) {
		$path_info = (strpos($_SERVER['REQUEST_URI'], '?') > 0) ? strstr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'];
	}
}

if(strstr($path_info,"/v1")) {
	require("v1/index.php");
} elseif(strstr($path_info,"/v2")) {
	require("v2/index.php");
} elseif(strstr($path_info,"/v0")) {
	require("v0/index.php");
}
?>