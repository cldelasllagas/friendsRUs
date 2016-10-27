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
-->

</style>
</head>
<body>
<div id="wrapper2">
	<div id="body2">

     
          <table align="center">
            <tr>
                <td width="663"><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1>
                  <h1><span class="style5">Welcome to FRU Remittance System <?php echo strtoupper($_SESSION['SESS_FIRST_NAME']) ;?>!</span></h1></td>
                <td colspan="2"><img src="images/FRUlogo2.jpg" width="300" height="100" /></td>
            </tr><tr>
                <td>&nbsp;</td><td width="277"><div align="right"><a href="logout.php">Logout</a></div></td>
                <td width="23">&nbsp;</td>
            </tr><tr>
          <td colspan="3">
                 
          <div id="content2" >
<? 
					 @mysql_select_db($database) or die( "Unable to select database");
					 
					 $qry = "SELECT * FROM transaction WHERE transDate = DATE(NOW())";
					 $result=mysql_query($qry) or die(mysql_error());
					 $num_rows = mysql_num_rows($result)?>
					 <table cellpadding='1' cellspacing='1' border='1' align="center">
                      <tr>
                      	<th>NO.</th>
                        <th>REFERENCE NO.</th>
                        <th>DATE</th>
                        <th>REMITTER NAME</th>
                        <th>BENEFICIARY NAME</th>
                        <th>ADDRESS</th>
                        <th>ADDRESS2</th>
                        <th>PHONE NO.</th>
                        <th>BANK</th>
                        <th>BRANCH</th>
                        <th>ACCOUNT NO.</th>
                        <th>SERVICE TYPE</th>
                        <th>CURRENCY</th>
                        <th>RATE</th>
                        <th>AMOUNT</th>
                        <th>CHARGE</th>
                        <th>TOTAL AMOUNT</th>
                        <th>TOTAL FX AMOUNT</th>
                        <th>TYPE OF PAYMENT</th></tr>
                      <?
					  for ($counter = 1; $counter <= $num_rows; $counter ++){ 
					 while($array1 = mysql_fetch_array($result)){
					   ?>
                      <tr>  
                      	<td><?=$counter;?></td>               
                        <td><?=$array1[0];?></td>
                        <td><?=$array1[19];?></td>
                        <td><?=$array1[3];?></td>
                        <td><?=$array1[4];?></td>
                        <td><?=$array1[5];?></td>
                        <td><?=$array1[6];?></td>
                        <td><?=$array1[7];?></td>
                        <td><?=$array1[8];?></td>
                        <td><?=$array1[9];?></td>
                     	<td><?=$array1[10];?></td>
                        <td><?=$array1[17];?></td>
                        <td><?=$array1[11];?></td>
                        <td><?=$array1[12];?></td>
                        <td><?=$array1[13];?></td>      
                        <td><?=$array1[14];?></td> 
                        <td><?=$array1[15];?></td> 
                     	<td><?=$array1[16];?></td>  
                        <td><?=$array1[18];?></td>
                      </tr>
                      <? }}?>
                  </table>
         </div>
         </td></tr>
         <tr><TD colspan="3"><h4 align="center" >Go back to <a href="member-index.php">main page</a></h4></TD></tr>
    </table>
	</div>
 </div>             
</body>
</html>
