<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');

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
	$remID = mysql_insert_id();
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
	<script type="text/javascript">
		function formValidation() {
		
		var bfn = document.form1.textbox16.value
		var bln = document.form1.textbox17.value
		var relp = document.form1.textbox24.value
		var src = document.form1.textbox25.value
		var purp = document.form1.textbox26.value
		
		if (bfn==null || bfn=="" || bln==null || bln=="" || relp==null || relp=="" || src==null || src=="" || purp==null || purp==""){
			alert ("Fields with (*) must be filled out.");
			return false;
			}
		}
	</script>
    <style type="text/css">
		<!--
.style4 {font-size: 16px; align:"left";}
.style5 {color: #330033}
.style3 {color: #FF0000}
		-->
    </style>
</head>
<body>
<div id="wrapper">
     <div id="body">
          <table width="1001">
            <tr>
                <td width="663"><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1>
                  <h1><span class="style5">Welcome to FRU Remittance System <?php echo strtoupper($_SESSION['SESS_FIRST_NAME']) ;?>!</span></h1></td>
                <td colspan="2"><img src="images/FRUlogo2.jpg" width="300" height="100" /></td>
            </tr><tr>
                <td>&nbsp;</td><td width="277"><div align="right"><a href="logout.php">Logout</a></div></td>
                <td width="23">&nbsp;</td>
            </tr>
          </table>
                 
          <div id="content">
               <div class="main">
                    <blockquote>
                        <p style="border-bottom: 1px solid #333333;"><a href="remitter.php">MASTER FILES</a></p>
                        <p style="border-bottom: 1px solid #333333;"><a href="member-index.php">TRANSACTION</a></p></p><p>&nbsp;</p>
                        <p style="border-bottom: 1px solid #333333;"><a href="rate.php">Rate</a></p>
                        <p style="border-bottom: 1px solid #333333;"><a href="changePwd.php">Change Password</a></p>
                    </blockquote> 
               </div>
          
               <div class="main2">
<form id="form1" name="form1" method="post" action="insrtRemBene.php" onsubmit="return formValidation()">
          		    <table width="656" cellpadding="1"cellspacing="1">
                      <tr>
                        <td height="35" colspan="2"><u><span class="style4">BENEFICIARY INFORMATION: </span></u></td>
                      </tr>
                      <tr>
                        <td height="35">Remitter Name:</td>
                        <td width="431"><? 
							$rfname = stripslashes($_POST["textbox1"]);
							$rlname = stripslashes($_POST["textbox2"]);
							echo $rlname. ", ". $rfname; ?></td>
                        <td> <? if($result) {
							echo "Remitter Added!";
							}else {
							echo "ADD REMITTER FAILED!";
							} }?></td>
                         <td>Client#: <input type="text" name="remID" value="<?= $remID; ?>" readonly="readonly" width="20" /></td>
                      </tr>
                      <tr>
                      	<td colspan="4">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><label>First Name (& MI): </label></td>
                        <td><input name='textbox16' type='text' class='input' id='textbox16'/><span class='style3'>*</span></td>
                        <th align='center' colspan='2'><span class='style2'>FINTRAC REQUIREMENTS:</span></th>
                      </tr><tr>
                        <td><label>Last Name: </label></td>
                        <td><input name='textbox17' type='text' class='input' id='textbox17'/><span class='style3'>*</span></td>
                        <td><label>Relationship:</label></td>
                        <td><input name='textbox24' type='text' class='input' id='textbox24'/><span class='style3'>*</span></td>
                      </tr><tr> 
                        <td><label>Address:</label></td>
                        <td><input name='textbox18' type='text' class='input' id='textbox18'/></td>
                        <td><label>Source of Payment:</label></td>
                        <td><input name='textbox25' type='text' class='input' id='textbox25'/><span class='style3'>*</span></td>
                      </tr><tr>  
                        <th>&nbsp;</th>
                        <td><input name='textbox19' type='text' class='input' id='textbox19'/></td>
                        <td><label>Purpose of Remittance:</label></td>
                        <td><input name='textbox26' type='text' class='input' id='textbox26'/><span class='style3'>*</span></td>
                      </tr><tr>
                        <td><label>Phone No.:</label></td>
                        <td><input name='textbox20' type='text' class='input' id='textbox20'/></td>
                        <th align='center' colspan='2'></th>
                      </tr><tr>
                        <td><label>Bank</label></td>
                        <td><input name='textbox21' type='text' class='input' id='textbox21'/></td>
                        <td><label>Service Type: </label></td>
                        <td>
                        <select name='service'>
                            <option>Credit to Bank Account</option>
                            <option>Door to Door</option>
                            <option>Pick-up at MetroBank</option>
                            <option>Pick-up at M.Lhuillier</option>
                            <option>Pick-up at PNB</option>
                            <option>Pick-up at BDO</option>
                            <option>Pick-up at HongKong</option>
                            <option>Utility Payment</option>
                        </select>
                        </td>
                      </tr><tr>
                        <td><label>Branch</label></td>
                        <td><input name='textbox22' type='text' class='input' id='textbox22'/></td>
                      </tr><tr>
                        <td><label>Account No:</label></td>
                        <td><input name='textbox23' type='text' class='input' id='textbox23'/></td>
                        <td colspan="2" align="right"><input name="add" id="add" type="submit" value="Submit"/>
                        </td>
                      </tr> 
                   </table>
               </form>
            </div>
          </div>
       </div>
     </div>
   </body>
</html>

	