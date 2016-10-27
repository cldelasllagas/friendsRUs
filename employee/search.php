<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SEARCH REMITTER RECORD</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />

	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
	<script src="src/effects.js" type="text/javascript"></script> 
    
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
          		  <form id="form1" name="form1" method="post" action="">
                      <table width="656" cellpadding="1"cellspacing="1">
                          <tr>
                            <th width="128" height="35" colspan="2"><h3><U>REMITTER INFORMATION:</U></h3></th>
                          </tr>
                          <tr>
                            <td><label >First Name (& MI): </label><?php 
							$remName = stripslashes($_POST["rname"]);
							@mysql_select_db($database) or die( "Unable to select database");
							
                            $query="SELECT *
                                    FROM Remitter
                                    WHERE CONCAT(Remitter.lname,', ', Remitter.fname) LIKE '". $remName ."'";
                                    
                            $result=mysql_query($query) or die(mysql_error());
                            
                            $array1 = mysql_fetch_array($result);
							?>                            </td>
                            <td><input name="textbox1" type="text" class="input" id="textbox1" value="<?= $array1[2]; ?>" readonly="readonly"/></td>
                            <td colspan="2" align="right">Client #: <input name="textbox" type="text" readonly="readonly" width="100px" value="<?= $array1[0];?>" /></td>
                          </tr>
                          <tr>
                            <td><label>Last Name:</label></td>
                            <td><input name="textbox2" type="text" class="input" id="textbox2" value="<?= $array1[1]; ?>" readonly="readonly"/></td>
                          </tr>
                          <tr>
                            <td><label>Address: </label></td>
                            <td><input name="textbox3" type="text" class="input" id="textbox3" value="<?= $array1[3];?>" readonly="readonly"/></td>
                            <td><label>ID No.: </label></td>
                            <td><input name="textbox12" type="text" class="input" id="textbox12" value="<?= $array1[12];?>" readonly="readonly"/></td>
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
                            <td><input name="textbox6" type="text" class="input" id="textbox6" value="<?= $array1[6];?>" readonly="readonly"/></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><label>Home Phone: </label></td>
                            <td><input name="textbox7" type="text" class="input" id="textbox7" value="<?= $array1[7];?>" readonly="readonly"/></td>
                            <td><label>Occupation: </label></td>
                            <td><input name="textbox9" type="text" class="input" id="textbox9" value="<?= $array1[9];?>" readonly="readonly"/></td>
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
                            <td><input name="textbox15" type="text" class="input" id="textbox15" value="<?= $array1[15];?>" readonly="readonly"/></td>
                            <td><label>Annual Income: <br />
                              (e.g.: 20000)</label>                            </td>
                            <td><input name="textbox11" type="text" class="input" id="textbox11" value="<?= $array1[11];?>" readonly="readonly"/></td>
                          </tr><tr>
                          <td><label>Notes: </label></td>
                          <td colspan="3"><textarea name="text27" style="font-size:12px" cols="50" rows="3" readonly="readonly"><?= $array1[16];?></textarea></td>
                          
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
							 $num_rows = mysql_num_rows($result2);
							 ?>
                             <textarea name="bene" style="font-size:12px" readonly="readonly" cols="30" rows="25">
                             <?
                             while ($array = mysql_fetch_array($result2)) {
							   echo $array[1] . ", ";
							   echo $array[2] . "\n";                               
                              } ?>
                             </textarea>                           </td>
                             </tr>
                      </table>
                  </form>
       		   </div>
          </div>
     </div>		
</div>
</body>
</html>
