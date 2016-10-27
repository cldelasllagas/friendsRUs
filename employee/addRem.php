<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADD REMITTER</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
    <script type="text/javascript">
	<!--
		function formValidation() {
		
		var rfn = document.form1.textbox1.value
		var rln = document.form1.textbox2.value
		var raddr = document.form1.textbox3.value
		var pstl = document.form1.textbox6.value
		var rphn = document.form1.textbox7.value
		var occu = document.form1.textbox9.value
		var idn = document.form1.textbox12.value
		var bdate = document.form1.textbox15.value
		
		if (rfn==null || rfn=="" || rln==null || rln=="" || raddr==null || raddr=="" || pstl==null || pstl=="" || rphn==null || rphn=="" || occu==null || occu=="" || idn==null || idn=="" || bdate==null || bdate==""){
			alert ("Fields with (*) must be filled out.");
			return false;
			}
		}
		
		function addBene() {
			document.form1.action="addBenepge.php";
			}
		function insertRem() {
			document.form1.action="insrtRem.php";
			}
			//-->      
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
               <form id="form1" name="form1" method="post" action="" onsubmit="return formValidation()">
                      <table width="676" cellpadding="1"cellspacing="1">
                          <tr>
                            <th width="128" height="35" colspan="2"><h3><U>REMITTER INFORMATION:</U></h3></th>
                           </tr>
                          <tr>
                            <td><label >First Name (& MI): </label></td>
                            <td><input name="textbox1" type="text" class="input" id="textbox1"/><span class="style3">*</span></td>
                          
                          </tr>
                          <tr>
                            <td><label>Last Name:</label></td>
                            <td><input name="textbox2" type="text" class="input" id="textbox2"/><span class="style3">*</span></td>
                          </tr>
                          <tr>
                            <td><label>Address: </label></td>
                            <td><input name="textbox3" type="text" class="input" id="textbox3"/><span class="style3">*</span></td>
                            <td><label>ID No.: </label></td>
                            <td><input name="textbox12" type="text" class="input" id="textbox12"/><span class="style3">*</span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input name="textbox4" type="text" class="input" id="textbox4"/></td>
                            <td><label>Issue Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox13" type="text" class="input" id="textbox13"/></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input name="textbox5" type="text" class="input" id="textbox5"/></td>
                            <td><label>Expiry Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox14" type="text" class="input" id="textbox14"/></td>
                          </tr>
                          <tr>
                            <td><label>Postal Code: </label></td>
                            <td><input name="textbox6" type="text" class="input" id="textbox6"/><span class="style3">*</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><label>Home Phone: </label></td>
                            <td><input name="textbox7" type="text" class="input" id="textbox7"/><span class="style3">*</span></td>
                            <td><label>Occupation: </label></td>
                            <td><input name="textbox9" type="text" class="input" id="textbox9"/><span class="style3">*</span></td>
                          </tr>
                          <tr>
                            <td><label>Cel./ Bus. Phone: </label></td>
                            <td><input name="textbox8" type="text" class="input" id="textbox8"/></td>
                            <td><label>Company: </label></td>
                            <td><input name="textbox10" type="text" class="input" id="textbox10"/></td>
                          </tr>
                          <tr>
                            <td height="44"><label>Birth Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox15" type="text" class="input" id="textbox15"/><span class="style3">*</span></td>
                            <td><label>Annual Income: <br />
                              (e.g.: 20000)</label>                            </td>
                            <td><input name="textbox11" type="text" class="input" id="textbox11"/></td>
                          </tr><tr>
                          	<td><label>Notes: </label></td>
                          <td colspan="3"><textarea name="text27" style="font-size:12px" cols="50" rows="3"></textarea></td>
                          </tr><tr>
                          	<td colspan="4" align="right"><input name="addbene" id="addbene" type="submit" value="Add Beneficiary" onclick="addBene()"/>&nbsp;&nbsp;
                            <input name="add" id="add" type="submit" value="Submit" onclick="insertRem()"/>
                            </td></td>
                          </tr>
                     </table>
               </form>
               </div>
      	  </div>
     </div>		
</div>
</body>
</html>
