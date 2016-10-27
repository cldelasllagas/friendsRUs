<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CREATE TRANSACTION</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />

	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
	<script src="src/effects.js" type="text/javascript"></script>
    <script type="text/javascript">
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
		xmlhttp.open("GET","getbene.php?q="+str,true);
		xmlhttp.send();
		}
		
		function showRate(str)
		{
		if (str=="")
		  {
		  document.getElementById("txtHint2").innerHTML="";
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
			document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","getrate.php?q="+str,true);
		xmlhttp.send();
		}
		
		function formValidation() {

		var refNo = document.form2.refNo.value
		var relp = document.form2.textbox24.value
		var src = document.form2.textbox25.value
		var purp = document.form2.textbox26.value
		var amount = document.form2.amt.value;
		var rate = document.form2.rate.value;
		var totalFX = document.form2.fxamt.value;
		var charge = document.form2.charge.value;
		
		if (isNaN(charge) || charge==null || charge==""){ //filter input
			alert('Numbers only on Charge field!');
			amount = 0;
			return false;
		}else			
		if (isNaN(amount) || amount==null || amount==""){ //filter input
			alert('Numbers only on Amount field!');
			amount = 0;
			return false;
		}else
		if (isNaN(rate) || rate==null || rate==""){ //filter input
			alert('Numbers only on Rate field!');
			rate = 0;
			return false;
		}else
		if (isNaN(totalFX) || totalFX==null || totalFX==""){ //filter input
			alert('Numbers only on Rate field!');
			rate = 0;
			return false;
		}else
		if (refNo==null || refNo=="" || bfn==null || bfn=="" || bln==null || bln=="" || relp==null || relp=="" || src==null || src=="" || purp==null || purp==""){
			alert ("Fields with (*) must be filled out.");
			return false;
		}

			
		}
				
		function autocalc(oText){
		
			if (isNaN(oText.value)){ //filter input
				alert('Numbers only!');
				oText.value = '';
			}
			var field, val, form2 = oText.form, total = a = 0;
			for (a; a < arguments.length; ++a) //loop through text elements
			{
				field = arguments[a];
				val = parseFloat(field.value); //get value
				if (!isNaN(val)) //number?
				{
					total +=val; //accumulate
				}
			}
			form2.tamt.value = Math.round(total*100)/100; //out
		}
		
		function autocalc2(oText){
		
			if (isNaN(oText.value)){ //filter input
				alert('Numbers only!');
				oText.value = '';
			}
			var field, val, form2 = oText.form, total = a = 0, total=1;
			for (a; a < arguments.length; ++a) //loop through text elements
			{
				field = arguments[a];
				val = parseFloat(field.value); //get value
				if (!isNaN(val)) //number?
				{
					total *=val; //accumulate
				}
			}
			form2.fxamt.value = Math.round(total*100)/100; //out
		}


	</script>
<style type="text/css"  media="screen">

<!--
.style5 {color: #330033}
.style7 {color: #AED9F4}
.style11 {
	color: #FF0000;
	font-size: 18px;
}
.style12 {color: #FF0000}
-->

</style>

</head>
<body onload="document.forms[0].reset()">
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
                <form id="form2" name="form2" method="post" action="processTrans.php" onsubmit="return formValidation()"> 
                <table width="676" cellpadding="1"cellspacing="1">
                  <tr>
                  	<td><a href="searchTrans.php" class="style7"><img src="images/search.jpg" /></a></td>
                    <td align="right" colspan="3"><a href="member-index.php" class="style7"><img src="images/addTrans.jpg" /></a>
                    <a href="editTrans.php" class="style7"><img src="images/editTrans.jpg" /></a>
                    <a href="deleteTrans.php" class="style7"><img src="images/deleteTrans.jpg" /></a>
                    <a href="transHistory.php" class="style7"><img src="images/transHistory.jpg" /></a></td>
                  </tr><tr>
                  	<td height="50">&nbsp;</td>
                  </tr><tr>
                    <th height="26" align="left">ADD TRANSACTION</th>
					<td colspan="2" align="center"><?php
						$remName = stripslashes($_POST["rname"]);
						
						@mysql_select_db($database) or die( "Unable to select database");
    
						$query="SELECT id, lname, fname, expD, idNum
								FROM Remitter
								WHERE CONCAT(lname,', ', fname) LIKE '". $remName ."'";
						
						$result=mysql_query($query) or die(mysql_error());
						$array = mysql_fetch_array($result);
						if ($array[4] == NULL || $array[4] == " "){?>
                        	<span class="style11">CLIENT HAS NO VALID ID!!!</span><?
							}
						if ($array[3] < date('Y-m-d') && $array[3] <> 0000-00-00){?>
								<span class="style11">CLIENT ID EXPIRED!!!</span><?
							}else {
								echo ' ';}
								?>							</td>
                  </tr>
                  
                  <tr>
                    <td width="128" height="27"><label >Remitter Name: </label></td>
                    <td width="182">
                    <input name="remName" type="text" class="input" id="remName" value="<?= $remName; ?>" readonly="readonly"/> </td>
                    <td>&nbsp;</td>
                    <td>Client#: <input type="text" name="remID" value="<?= $array[0]; ?>" readonly="readonly" width="25" /></td>  
                  </tr><tr>
                        <td>&nbsp;</td>
                  </tr><tr>
                        <td><label>Beneficiary Name: </label></td>
                        <td>
                      <?
                  	  	$query2="SELECT beneficiary.id, beneficiary.lname, beneficiary.fname
								FROM beneficiary
								WHERE beneficiary.remId = (
									SELECT Remitter.id
									FROM Remitter
									WHERE CONCAT(Remitter.lname,', ', Remitter.fname) LIKE '". $remName ."'
									)
								ORDER BY beneficiary.lname LIMIT 15";
								
						$result2=mysql_query($query2) or die(mysql_error());						
						
						?><select name="item" class="input" onchange="showBene(this.value)">
						  <OPTION VALUE="select">Select beneficiary:</option> <?
						    while ($array1 = mysql_fetch_array($result2)) {
							$id = $array1[0];
							$lname = $array1[1];
							$fname = $array1[2];?>
					      <OPTION VALUE="<?=$id?>"><?=$lname?>, <?=$fname?></option>
						<? } ?>
						 </SELECT>

                         </td>
                         <td><label>Reference No.:</label></td>
                         <td><input type="text" id="refNo" name="refNo" class="input" />
                         <span class="style12">*</span></td>
                        
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
