<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Password</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
</head>

<?

$darna=$_POST['darna'];
$password= sha1('kampai'.$_POST['newpwd']);
$password2=$_POST['newpwd2'];

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}

if(isset($darna) and $darna=="chngepwd"){

	//Setting flags for checking
	$status = "OK";
	$msg="";

	if ( strlen($password) < 5 or strlen($password) > 10 ){
	$msg=$msg."Password must be more than 5 character length and maximum 10 character length.<BR>";
	$status= "NOTOK";}					

	if ( $password <> $password2 ){
		$msg=$msg."Both passwords are not matching.<BR>";
		$status= "NOTOK";}					
	
	if($status<>"OK"){ 
		echo "<font face='Verdana' size='3' style='font-weight:bold'><p><p align='center'>$msg<br><input type='button' value='Retry' onClick='history.go(-1)'></p><p></font>";
	}
	else{ // if all validations are passed.
		if(mysql_query("UPDATE employees SET passwd='$password' where emp_id='$_SESSION[SESS_EMP_ID]'")){
			echo "<font face='Verdana' size='3' style='font-weight:bold'><center>Thanks! <br> Your password changed successfully. Please keep changing your password for better security.</font></center>";
		}else{
			echo "<font face='Verdana' size='3' style='font-weight:bold'><center>Sorry! <br> Failed to change password. Contact Site Admin.</center></font>";
		}
	}
}



?>