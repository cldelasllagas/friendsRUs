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

$rname = clean($_POST['remName']);
$refNo = clean($_POST['refNo']);
$rId = $_POST['remID'];
$bname = $_POST['textbox16'];
$bId = $_POST['textbox28'];
$bAddr1 = $_POST['textbox18'];
$bAddr2 = $_POST['textbox19'];
$bPhone = $_POST['textbox20'];
$bBank = $_POST['textbox21'];
$bBranch = $_POST['textbox22'];
$bAcct = $_POST['textbox23'];
$service = $_POST['service'];
$ccy = $_POST['ccy'];
$rate = $_POST['rate'];
$amt = $_POST['amt'];
$charge = $_POST['charge'];
$tamt = $_POST['tamt'];
$tfx = $_POST['fxamt'];
$payment = $_POST['payment'];
$transdate = date("Y-m-d");

$relp = $_POST['textbox24'];
$source = clean($_POST['textbox25']);
$purpose = clean($_POST['textbox26']);

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
	
	if ($bId == "" || $bId == null){
		header("Location: member-index.php");
		exit();
		}
	
	else	{
	$qry = "INSERT INTO transaction (refNo, remID, beneID, remName, bnfName, address, address2, phone, bank, branch, acctNo, currency, rate, netVal, charge, grossVal, FXtotal, service, paymentType, transDate) VALUES ('$refNo','$rId','$bId','$rname','$bname','$bAddr1','$bAddr2','$bPhone','$bBank','$bBranch','$bAcct','$ccy','$rate','$amt','$charge','$tamt','$tfx','$service','$payment','$transdate')";
	$result = @mysql_query($qry);

	$qry2 = "UPDATE fintrac SET relationship = '$relp', source = '$source', purpose = '$purpose' WHERE bene_id = '$bID'";
	$result2 = @mysql_query($qry2);
	
	
	IF ($result) {
	    header("Location: trans-succ.php"); 
   		exit();
	} ELSE {
	   header("Location: trans-failed.php");
	   exit();
	}
		}



