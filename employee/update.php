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

$id = clean($_POST['textbox']);
$rFname = clean($_POST['textbox1']);
$rLname = clean($_POST['textbox2']);
$rAddr1 = clean($_POST['textbox3']);
$rAddr2 = clean($_POST['textbox4']);
$rAddr3 = clean($_POST['textbox5']);
$rPostal = clean($_POST['textbox6']);
$rHPhone = clean($_POST['textbox7']);
$rCPhone = clean($_POST['textbox8']);
$rOccupation = clean($_POST['textbox9']);
$rCompany = clean($_POST['textbox10']);
$rIncome = clean($_POST['textbox11']);
$rId = clean($_POST['textbox12']);
$rIssue = clean($_POST['textbox13']);
$rExpiry = clean($_POST['textbox14']);
$rBdate = clean($_POST['textbox15']);

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
$notes = $_POST['text27'];

$service = $_POST['service'];

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Create INSERT query
	$qry = "UPDATE Remitter SET lName = '$rLname', fName = '$rFname', address = '$rAddr1', address2 = '$rAddr2', address3 = '$rAddr3', postal = '$rPostal', hPhone = '$rHPhone', cPhone = '$rCPhone', occupation = '$rOccupation', company = '$rCompany', annualIncome = '$rIncome', idNum = '$rId', issueD = '$rIssue', expD = '$rExpiry', birthDate = '$rBdate', notes = '$notes' WHERE id = '$id'";
	$result = @mysql_query($qry);
	
	$qry2 = "UPDATE beneficiary SET lName = '$bLname', fName = '$bFname', address = '$bAddr1', address2 = '$bAddr2', phone = '$bPhone', bank = '$bBank', branch = '$bBranch', acctNo = '$bAcct', service = '$service' WHERE id = '$bId' AND remId = '$id'";
	$result2 = @mysql_query($qry2);
	
	$qry3 = "UPDATE fintrac SET relationship = '$relp', source = '$source', purpose = '$purpose' WHERE bene_id = '$bID'";
	$result3 = @mysql_query($qry3);
	
	//Check whether the query was successful or not
	if($result) {
		header("Location: update-succ.php");
		//header('Location:' . $_SERVER['HTTP_REFERER']);  
		exit();
	}else {
		header("Location: update-failed.php");
		//header('Location:' . $_SERVER['HTTP_REFERER']);  
		exit();
	}


?>