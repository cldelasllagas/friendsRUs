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
<style type="text/css"  media="screen">

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
					<table width="379" cellspacing="1" cellpadding="5" align="center">
                      <tr><td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td bgcolor="#00CCFF"colspan="2">CHANGE PASSWORD</td>
                      </tr><?
                      echo "<form id='form1' name='form1' method='post' action='procChangepwd.php'> <input type='hidden' name='darna' value='chngepwd'/>
					  
                      <tr>
                        <td bgcolor='#E7DADA'>New Password:</td>
                        <td bgcolor='#E7DADA'><input type='password' name='newpwd' class='input' /></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CCCCFF'>Re-enter New Password:</td>
                        <td bgcolor='#CCCCFF'><input type='password' name='newpwd2' class='input' /></td>
                      </tr>
                      <tr>
                        <td colspan='2' bgcolor='#00CCFF'><input type='submit' name='change' value='Change Password'/>&nbsp;
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

