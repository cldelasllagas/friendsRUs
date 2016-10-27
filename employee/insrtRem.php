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
$notes = $_POST['text27'];

	//Select database
	$db = mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
		
	//Create INSERT query
	$qry = "INSERT INTO Remitter (lName, fName, address, address2, address3, postal, hPhone, cPhone, occupation, company, annualIncome, idNum, issueD, expD, birthDate, notes) VALUES ('$rLname', '$rFname', '$rAddr1', '$rAddr2', '$rAddr3', '$rPostal', '$rHPhone', '$rCPhone', '$rOccupation', '$rCompany', '$rIncome', '$rId', '$rIssue', '$rExpiry', '$rBdate', '$notes')";
	
	if ($rLname == "" || $rLname == null){
		header("Location: addRem.php");
		exit();
		}
	else {
	$result = @mysql_query($qry) or die(mysql_error());	
			

		//Check whether the query was successful or not
	if($result) {
		header("Location: addRem-succ.php");
		exit();
	}else {
		header("Location: addRem-failed.php");
		exit();
	}
	}
?>