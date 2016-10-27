<?php
	if(!defined('PROTECTED')) {exit;}
	$hostname = "cldelasllagas.ipowermysql.com";
	$database = "frudb";
	$username = "chloe";
	$password = "5dneirf";
	
	$anunturi = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
?>