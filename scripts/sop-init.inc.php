<?php
session_start();
ob_start ();
	if(!isset($_SESSION['token']))
	{
		$_SESSION['token'] = sha1(uniqid(mt_rand(),TRUE));
	}
	//include_once "db-cred.inc.php";
	include_once "conn.php";

	/*foreach ($bb as $k=>$v)
	{
		define($k,$v);
	}*/

	//$dbo = new mysqli($bb['db_host'],$bb['db_user'],$bb['db_pass'],$bb['db_name']);
	$dbo = new mysqli ("$host", "$user", "$paswd", "$database");

	function __autoload($class)
	{
		$filename = "class.".strtolower ( $class ).".php";
		if(file_exists($filename))
		{
			include_once $filename;
		}
	}
	
	$page_title = "5th FIP Grand International Digital Circuit";
	
	/*
	
	$page_title = "2nd FIP National Digital Circuit 2018";
	$cc = 'FIP2018';
	$dashboard_heading = '2nd FIP National Digital Circuit 2018';
	$title = $dashboard_heading;
	$salon_name = " FIP National Digital Circuit " ;
	$fiplogotext = '2018/FIP/22-23-24/2018';
	$mailpath = 'http://www.fip.org.in/fipnational/public/assets/files/';
	*/
	
	
	/*
	$title_length = 35;
	$file_name_length = 36;
	$file_size = 4194304; // 1024*1024*4
	$file_size_exp = (int) $file_size/(1024*1024);
	*/
	
	
	define ( 'MAX_IMAGE_WIDTH', 1024 );
	define ( 'MAX_IMAGE_HEIGHT', 768 );