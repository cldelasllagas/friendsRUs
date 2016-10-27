<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADD BENEFICIARY</title>
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
                        <td width="128" height="35" colspan="2"><u><span class="style4">BENEFICIARY INFORMATION: </span></u></td>
                      </tr>
                      <tr>
                        <td height="35">Remitter Name:</td>
                        <td ><?php 
                            $remName = $_POST["rname"];
							$rID = $_POST["textbox"]; 
                            							
							$rfname = stripslashes($_POST["textbox1"]);
							$rlname = stripslashes($_POST["textbox2"]);
							
							@mysql_select_db($database) or die( "Unable to select database");
    
                            $query="SELECT id, lname, fname
                                    FROM Remitter
                                    WHERE CONCAT(lname,', ', fname) LIKE '". $remName ."'";
							
							$result=mysql_query($query) or die(mysql_error());
                            $array1 = mysql_fetch_array($result);
							echo $remName." ". $rlname. ", ". $rfname; ?> </td>
                        <td>&nbsp;</td>
                         <td>Client#: <input type="text" name="remID" value="<?= $array1[0] . "". $rID; ?>" readonly="readonly" width="25" /></td>
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

	
