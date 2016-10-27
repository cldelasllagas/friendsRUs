<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EXCHANGE RATE</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
    <script src="src/effects.js" type="text/javascript"></script>
    <script type="text/javascript">
	<!-- 
			function formValidation() {

		var cadphp = document.form1.cadphp.value;
		var usdphp = document.form1.usdphp.value;
		var cadusd = document.form1.cadusd.value;
		var usdusd = document.form1.usdusd.value;
		var cadhkd = document.form1.cadhkd.value;
		
		if (cadphp==null || cadphp=="" || usdphp==null || usdphp=="" || cadusd==null || cadusd=="" || usdusd==null || usdusd=="" || cadhkd==null || cadhkd==""){
			alert ("Fields must all be filled out.");
			return false;
		}-->
		</script>
<style type="text/css"  media="screen">
<!--
.style5 {color: #330033}
.style6 {font-size: 16px}
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
					<table width="240" cellspacing="1" cellpadding="5" align="center">
                      <tr><td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td bgcolor="#00CCFF"colspan="2"><span class="style6">EXCHANGE RATE</span></td>
                      </tr><?
                      echo "<form id='form1' name='form1' method='post' action='procRate.php' onsubmit='return formValidation()'> <input type='hidden' name='batman' value='robin'/>
					  
                      <tr>
                        <td bgcolor='#D9E4E8'>CAD - PHP</td>
                        <td bgcolor='#D9E4E8'><input type='text' name='cadphp' /></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CCCCFF'>USD - PHP</td>
                        <td bgcolor='#CCCCFF'><input type='text' name='usdphp'/></td>
                      </tr>
                      <tr>
                        <td bgcolor='#D9E4E8'>CAD - USD</td>
                        <td bgcolor='#D9E4E8'><input type='text' name='cadusd' /></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CCCCFF'>USD - USD</td>
                        <td bgcolor='#CCCCFF'><input type='text' name='usdusd' /></td>
                      </tr>
                      <tr>
                        <td bgcolor='#D9E4E8'>CAD - HKD</td>
                        <td bgcolor='#D9E4E8'><input type='text' name='cadhkd' /></td>
                      </tr>
                      <tr>
                        <td colspan='2' bgcolor='#00CCFF' align='center'><input type='submit' name='change' value='Save'/>&nbsp;
                        <input type=reset value=Reset></td>
                      </tr>
                      </form>";
                    ?>
                 </table>

            </div>
          </div>
     </div>		
</div>
</body>
</html>

