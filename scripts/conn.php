<?php
	$user = 'root';
	$paswd = '';
	$host = 'localhost';
	//$database = 'fipinternational-digital';
	$database = 'fip_digital_judging2018';
	
	$mysqldb = new mysqli("$host", "$user", "$paswd", "$database");
	if(!$mysqldb) die('Can not connect!');
	
	$header = '5th FIP Grand International Digital Circuit 2018';
	$footer = 'Developed by : M. B. Technosoft Consultants (P) Ltd.';
	$year = '2018';
?>