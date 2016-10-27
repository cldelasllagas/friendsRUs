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

$bId = clean($_POST['textbox28']);
$bFname = clean($_POST['textbox16']);
$bLname = clean($_POST['textbox17']);
$bAddr1 = clean($_POST['textbox18']);
$bAddr2 = clean($_POST['textbox19']);
$bPhone = clean($_POST['textbox20']);
$bBank = clean($_POST['textbox21']);
$bBranch = clean($_POST['textbox22']);
$bAcct = clean($_POST['textbox23']);

$relp = clean($_POST['textbox24']);
$source = clean($_POST['textbox25']);
$purpose = clean($_POST['textbox26']);
$remID = $_POST['remID'];

$service = $_POST['service'];

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
	
	if ($bLname == "" || $bLname == null){
		header("Location: addRem.php");
		exit();
		}
	else	{
	$qry2 = "INSERT INTO beneficiary (remId, lName, fName, address, address2, phone, bank, branch, acctNo, service) VALUES ('$remID', '$bLname', '$bFname', '$bAddr1', '$bAddr2', '$bPhone', '$bBank', '$bBranch', '$bAcct', '$service')";
	$result2 = @mysql_query($qry2) or die(mysql_error());
	$beneID = mysql_insert_id();
	
	$qry3 = "INSERT INTO fintrac (bene_id, relationship, source, purpose) VALUES ('$beneID', '$relp', '$source', '$purpose')";
	$result3 = @mysql_query($qry3) or die(mysql_error());		

		//Check whether the query was successful or not
	if($result2) {
		header("Location: addRemBene-succ.php");
		exit();
	}else {
		header("Location: addRemBene-failed.php");
		exit();
	}
	}
?>
