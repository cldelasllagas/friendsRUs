<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EXCHANGE RATE</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
</head>

<?

	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
$batman=$_POST['batman'];
$cadphp= floatval(clean($_POST['cadphp']));
$usdphp= floatval(clean($_POST['usdphp']));
$cadusd= floatval(clean($_POST['cadusd']));
$usdusd= floatval(clean($_POST['usdusd']));
$cadhkd= floatval(clean($_POST['cadhkd']));

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}

if(isset($batman) and $batman=="robin"){

	
		if(mysql_query("INSERT INTO rate (transDate, CADPHP, USDPHP, CADUSD, USDUSD, CADHKD) VALUES (DATE(NOW()), '$cadphp', '$usdphp', '$cadusd', '$usdusd', '$cadhkd')")){
			echo "<center><p>&nbsp;</p><p><font face='Verdana' size='2' style='font-weight:bold'>Thanks! <br> Exchange rates saved. <p> Go back to <a href='member-index.php'>main page</a></font></p></center>";
			
		}else{
			echo "<center><font face='Verdana' size='3' style='font-weight:bold'>Sorry! <br> Failed to save exchange rates. Contact Site Admin.</center></font>";
			echo "<font face='Verdana' size='3' style='font-weight:bold'><p><p align='center'><input type='button' value='Retry' onClick='history.go(-1)'></p><p></font>";
		}
	
}



?>
