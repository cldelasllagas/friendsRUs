<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDIT REMITTER / BENEFICIARY</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />

	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
	<script src="src/effects.js" type="text/javascript"></script>
    <script type="text/javascript">
	<!--
		function showBene(str)
		{
		if (str=="")
		  {
		  document.getElementById("txtHint").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","getbeneinfo.php?q="+str,true);
		xmlhttp.send();
		}

	function enableDisable() {
			//This will get the HTML content of the current page
			var form = document.form1;
		
			//The if condition checks for the value of the button.
			if(form.enableDisableButton.value=="Edit") {
		
				//If button value is ‘Edit’ then the textbox disables readOnly
				form.textbox1.readOnly = false;
				form.textbox2.readOnly = false;
				form.textbox3.readOnly = false;
				form.textbox4.readOnly = false;
				form.textbox5.readOnly = false;
				form.textbox6.readOnly = false;
				form.textbox7.readOnly = false;
				form.textbox8.readOnly = false;
				form.textbox9.readOnly = false;
				form.textbox10.readOnly = false;
				form.textbox11.readOnly = false;
				form.textbox12.readOnly = false;
				form.textbox13.readOnly = false;
				form.textbox14.readOnly = false;
				form.textbox15.readOnly = false;
				
				form.textbox16.readOnly = false;
				form.textbox17.readOnly = false;
				form.textbox18.readOnly = false;
				form.textbox19.readOnly = false;
				form.textbox20.readOnly = false;
				form.textbox21.readOnly = false;
				form.textbox22.readOnly = false;
				form.textbox23.readOnly = false;
				
				form.textbox24.readOnly = false;
				form.textbox25.readOnly = false;
				form.textbox26.readOnly = false;
				form.text27.readOnly = false;
		
				//The button value is changed to ‘Enable’
				form.enableDisableButton.value="Save"
		
			}
			else {
				form.textbox1.readOnly = true;
				form.textbox2.readOnly = true;
				form.textbox3.readOnly = true;
				form.textbox4.readOnly = true;
				form.textbox5.readOnly = true;
				form.textbox6.readOnly = true;
				form.textbox7.readOnly = true;
				form.textbox8.readOnly = true;
				form.textbox9.readOnly = true;
				form.textbox10.readOnly = true;
				form.textbox11.readOnly = true;
				form.textbox12.readOnly = true;
				form.textbox13.readOnly = true;
				form.textbox14.readOnly = true;
				form.textbox15.readOnly = true;
				
				form.textbox16.readOnly = true;
				form.textbox17.readOnly = true;
				form.textbox18.readOnly = true;
				form.textbox19.readOnly = true;
				form.textbox20.readOnly = true;
				form.textbox21.readOnly = true;
				form.textbox22.readOnly = true;
				form.textbox23.readOnly = true;
				
				form.textbox24.readOnly = true;
				form.textbox25.readOnly = true;
				form.textbox26.readOnly = true;
				form.text27.readOnly = true;
				
				form.enableDisableButton.value="Edit"
			}
		
		}
		
		function formValidation() {
		
		var rfn = document.form1.textbox1.value
		var rln = document.form1.textbox2.value
		var raddr = document.form1.textbox3.value
		var pstl = document.form1.textbox6.value
		var rphn = document.form1.textbox7.value
		var occu = document.form1.textbox9.value
		var idn = document.form1.textbox12.value
		var bdate = document.form1.textbox15.value
		var bfn = document.form1.textbox16.value
		var bln = document.form1.textbox17.value
		var relp = document.form1.textbox24.value
		var src = document.form1.textbox25.value
		var purp = document.form1.textbox26.value
		
		if (rfn==null || rfn=="" || rln==null || rln=="" || raddr==null || raddr=="" || pstl==null || pstl=="" || rphn==null || rphn=="" || occu==null || occu=="" || idn==null || idn=="" || bdate==null || bdate=="" || bfn==null || bfn=="" || bln==null || bln=="" || relp==null || relp=="" || src==null || src=="" || purp==null || purp==""){
			alert ("Fields with (*) must be filled out.");
			return false;
			}
		}
		
		function addBene() {
			document.form1.action="addBenepge2.php";
			}
		function updateInfo() {
			document.form1.action="update.php";
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
                      <table width="685" cellpadding="1"cellspacing="1">
                          <tr>
                            <td width="128" height="35" colspan="2"><h3><U>REMITTER INFORMATION:</U></h3></td>
                          </tr>
                          <tr>
                            <td><label >First Name (& MI): </label><?php 
                            $remName = $_POST["rname"];   
                            @mysql_select_db($database) or die( "Unable to select database");
    
                            $query="SELECT *
                                    FROM Remitter
                                    WHERE CONCAT(Remitter.lname,', ', Remitter.fname) LIKE '". $remName ."'";
                                    
                            $result=mysql_query($query) or die(mysql_error());
                            
                            $array1 = mysql_fetch_array($result);?></td>
                            <td><input name="textbox1" type="text" class="input" id="textbox1" value="<?= $array1[2]; ?>" readonly="readonly"/><span class="style3">*</span></td>
                            <td colspan="2" align="right">Client #: <input name="textbox" type="text" readonly="readonly" width="100px" value="<?= $array1[0];?>" /></td>
                          </tr>
                          <tr>
                            <td><label>Last Name:</label></td>
                            <td><input name="textbox2" type="text" class="input" id="textbox2" value="<?= $array1[1]; ?>" readonly="readonly"/><span class="style3">*</span></td>
                          </tr>
                          <tr>
                            <td><label>Address: </label></td>
                            <td><input name="textbox3" type="text" class="input" id="textbox3" value="<?= $array1[3];?>" readonly="readonly"/><span class="style3">*</span></td>
                            <td><label>ID No.: </label></td>
                            <td><input name="textbox12" type="text" class="input" id="textbox12" value="<?= $array1[12];?>" readonly="readonly"/><span class="style3">*</span></td>
                        </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input name="textbox4" type="text" class="input" id="textbox4" value="<?= $array1[4];?>" readonly="readonly"/></td>
                            <td><label>Issue Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox13" type="text" class="input" id="textbox13" value="<?= $array1[13];?>" readonly="readonly"/></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input name="textbox5" type="text" class="input" id="textbox5" value="<?= $array1[5];?>" readonly="readonly"/></td>
                            <td><label>Expiry Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox14" type="text" class="input" id="textbox14" value="<?= $array1[14];?>" readonly="readonly"/></td>
                          </tr>
                          <tr>
                            <td><label>Postal Code: </label></td>
                            <td><input name="textbox6" type="text" class="input" id="textbox6" value="<?= $array1[6];?>" readonly="readonly"/><span class="style3">*</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><label>Home Phone: </label></td>
                            <td><input name="textbox7" type="text" class="input" id="textbox7" value="<?= $array1[7];?>" readonly="readonly"/><span class="style3">*</span></td>
                            <td><label>Occupation: </label></td>
                            <td><input name="textbox9" type="text" class="input" id="textbox9" value="<?= $array1[9];?>" readonly="readonly"/><span class="style3">*</span></td>
                          </tr>
                          <tr>
                            <td><label>Cel./ Bus. Phone: </label></td>
                            <td><input name="textbox8" type="text" class="input" id="textbox8" value="<?= $array1[8];?>" readonly="readonly"/></td>
                            <td><label>Company: </label></td>
                            <td><input name="textbox10" type="text" class="input" id="textbox10" value="<?= $array1[10];?>" readonly="readonly"/></td>
                          </tr>
                          <tr>
                            <td height="44"><label>Birth Date: <br />
                              (yyyy-mm-dd)</label></td>
                            <td><input name="textbox15" type="text" class="input" id="textbox15" value="<?= $array1[15];?>" readonly="readonly"/><span class="style3">*</span></td>
                            <td><label>Annual Income: <br />
                              (e.g.: 20000)</label>                            </td>
                            <td><input name="textbox11" type="text" class="input" id="textbox11" value="<?= $array1[11];?>" readonly="readonly"/></td>
                          </tr><tr>
                          <td><label>Notes: </label></td>
                          <td colspan="3"><textarea name="text27" style="font-size:11px" cols="50" rows="3" readonly="readonly"><?= $array1[16];?></textarea></td>
                          
                          </tr><tr>
                          <td colspan="4" style="border-top-style:dashed" height="51"><h3><U>BENEFICIARY INFORMATION:</U></h3></td>
                          </tr><tr>
                            <td><label> Beneficiary list: </label></td>
                            <td>
							<? $query2 ="SELECT beneficiary.id, beneficiary.lname, beneficiary.fname
										FROM beneficiary
										WHERE beneficiary.remId = (
											SELECT Remitter.id
											FROM Remitter
											WHERE CONCAT(Remitter.lname,', ', Remitter.fname) LIKE '". $remName ."'
											)
										ORDER BY beneficiary.lname LIMIT 15";
                             $result2 = mysql_query($query2) or die(mysql_error()); 
							 ?>
                             <select name="item" class="input" onchange="showBene(this.value)">
                             <option value="select">Select beneficiary:</option>
                             <?
                             while ($array = mysql_fetch_array($result2)) {
                               $id = $array[0];
                               $lname = $array[1];
                               $fname = $array[2];?>
                               <option value="<?=$id?>"><?=$lname?>, <?=$fname?></option>
                             <? } ?>
                             </select>                             </td>
                             </tr>
                      </table>
                    <div id="txtHint"><b>Beneficiary info will be listed here.</b></div>
                      <table width="653">
<tr>
                        	<td colspan="4" align="right"><input name="addbene" id="addbene" type="submit" value="Add Beneficiary" onClick="addBene()"/></td>
                        </tr>
                      </table>
                </form>
       		   </div>
          </div>
     </div>		
</div>
</body>
</html>

