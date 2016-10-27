<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SEARCH BENEFICIARY RECORD</title>
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

		-->
</script>

    <style type="text/css">
		<!--
.style4 {font-size: 16px; align:"left";}
.style5 {color: #330033}
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
<form id="form1" name="form1" method="post" action="update.php" onsubmit="return formValidation()">
          		    <table width="656" cellpadding="1"cellspacing="1">
                      <tr>
                        <td height="35" colspan="2"><u><span class="style4">BENEFICIARY INFORMATION: </span></u></td>
                      </tr>
                      <tr>
                        <td height="35" colspan="2">The Beneficiary's Remitters List:</td>
                        <td width="431"><?php 
                            $beneName = stripslashes($_POST["bname"]);   
                            @mysql_select_db($database) or die( "Unable to select database");
							
                            $query="SELECT Remitter.id, Remitter.lname, Remitter.fname, beneficiary.id
									FROM Remitter, beneficiary
									WHERE Remitter.id = beneficiary.remId AND CONCAT(beneficiary.lname,', ', beneficiary.fname) LIKE '". $beneName ."'
									ORDER BY Remitter.lname LIMIT 15";
                                    
                            $result=mysql_query($query) or die(mysql_error());
							
                            ?>
                            <select name="item" class="input" onchange="showBene(this.value)">
                              <option value="select">Select Remitter:</option>
                              <?
                             while ($array = mysql_fetch_array($result)) {
                               $id = $array[3];
                               $lname = $array[1];
                               $fname = $array[2];?>
                              <option value="<?=$id?>">
                                <?=$lname?>
                                ,
                                <?=$fname?>
                              </option>
                              <? } ?>
                            </select>
                        </td>
                      </tr>
                    </table>
          		    <p><div id="txtHint"><b>Beneficiary info will be listed here.</b></div></p>
                 </form>
	    </div>
       </div>
     </div>		
</div>
</body>
</html>
