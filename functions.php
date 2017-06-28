<?php

function site_url() {
	//$site_url = "http://$_SERVER[HTTP_HOST]";
	//echo $actual_link . '<br>';
	//echo $site_url . '<br>';
	if(isset($localhost))
	return;
	$localhost = 'dev/starter-php';
	echo 'http://' . $_SERVER['HTTP_HOST'] . '/' . $localhost;
	//echo basename(__FILE__) . '<br>';
}

function page_url() {
	$page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	echo $page_url;
}


$headers = array(
	'html_class' 	=> '',
	'body_class' 	=> '',
	'title'			=> '',
	'description'	=> '',
	'author'		=> '',
	'itemprop_name' => '',
	'itemprop_desc' => '',
	'itemprop_image'=> '',
	'creation_date' => '',
	'revised_date'	=> '',
	'favicon'		=> '',
	'appicon'		=> ''
);
