<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SEARCH TRANSACTION</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
<style type="text/css">

<!--
.style5 {color: #330033}
.style7 {color: #AED9F4}
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
                <table width="680" cellpadding="1"cellspacing="1">
                  <tr>
                  	<td width="133"><a href="searchTrans.php" class="style7"><img src="images/search.jpg" /></a></td>
                    <td align="right" colspan="3"><a href="member-index.php" class="style7"><img src="images/addTrans.jpg" /></a>
                    <a href="editTrans.php" class="style7"><img src="images/editTrans.jpg" /></a>
                    <a href="deleteTrans.php" class="style7"><img src="images/deleteTrans.jpg" /></a>
                    <a href="transHistory.php" class="style7"><img src="images/transHistory.jpg" /></a></td>
                  </tr>
                  </table>
                  <table cellpadding="1"cellspacing="1">
                  <tr>
                  	<td height="50">&nbsp;</td>
                  </tr><tr>
                    <th height="26" colspan="2" align="left">SEARCH TRANSACTION</th>
                  </tr>
                  <form id="form1" name="form1" method="post" action="procSearchTrans.php">
                  <tr>
                     <td width="132" height="34"><label>Reference No.: </label></td>
                    <td width="195"><input type="text" id="refnum" name="refnum" class="input"/></td>
                     <td width="275">&nbsp;&nbsp;<input type="submit" name="Submit" value="Search"></td>
                  </tr><tr>
                  	<td>&nbsp;</td>
                  </tr><tr>
                  	 <td colspan="2" align="right"><a href="transList.php">SEE TRANSACTIONS LIST FOR THE DAY</a></td>
                  </tr>
                  
                  </form>
                </table>
        				
                
                <p>&nbsp;</p>
                 
                </div>
          </div>
     </div>		
</div>
</body>
</html>