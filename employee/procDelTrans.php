<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');


	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

$refNum = clean($_POST['refNum']);
$hid= $_POST['darna'];


	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
		
	//Create INSERT query
	$qry = "DELETE FROM transaction WHERE refNo='$refNum' AND transDate=DATE(NOW())";
	
	if ($hid == "bato"){
	$result = @mysql_query($qry) or die(mysql_error());	

			//Check whether the query was successful or not
		if($result) {
			header("Location: deltrans-succ.php");
			exit();
		}else {
			header("Location: deltrans-failed.php");
			exit();
		}
	}		
	else {
	header("Location: deleteTrans.php");
		exit();
		}
?>
