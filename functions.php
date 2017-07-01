<?php

function site_url() {
	$localhost = 'dev/starter-php';
	echo 'http://' . $_SERVER['HTTP_HOST'] . '/' . $localhost;
}

function page_url() {
	$page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	echo $page_url;
}

$headers_static = array(
	'favicon'		=> 'img/favicon.png',
	'appicon'		=> 'img/favicon.png'
);
