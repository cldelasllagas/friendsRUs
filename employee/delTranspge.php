<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DELETE TRANSACTION</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />

	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
	<script src="src/effects.js" type="text/javascript"></script> 
    <script type="text/javascript">
function show_confirm()
{
var r=confirm("Are you sure you want to delete this transaction?");
if (r==true)
  {
  return true;
  }
else
  {
  alert("You pressed Cancel!")
  return false;
  }
}
</script>
    <style type="text/css">
		<!--
.style4 {font-size: 16px; align:"left";}
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
                 <? echo "<form id='form2' name='form2' method='post' action='procDelTrans.php' onsubmit='return show_confirm()' > <input type='hidden' name='darna' value='bato'/>" ?>
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
                  	<td width="133" height="50">&nbsp;</td>
                  </tr><tr>
                    <th height="26" align="left" colspan="2"><span class="style4">TRANSACTION DETAILS</span></th>
                  </tr><tr>
                    <td><?php 
                    $refNo = stripslashes($_POST["refnum"]);
                    @mysql_select_db($database) or die( "Unable to select database");
                    
                    $query="SELECT *
                            FROM transaction, fintrac
                            WHERE transaction.refNo LIKE '". $refNo ."' AND transaction.beneID = fintrac.bene_id AND transDate=DATE(NOW())";
                            
                    $result=mysql_query($query) or die(mysql_error());
                    
                    $array1 = mysql_fetch_array($result);
                    ?>                            
                    <label>Reference No.:</label></td>
                    <td><input type="text" id="refnum" name="refnum" class="input" value="<?=$refNo;?>" readonly="readonly"/></td>
                    <td><label>Date:.</label></td>
                    <td><input type="text" id="transdte" name="transdte" value="<?=$array1[19];?>" readonly="readonly"/> </td>
                  </tr><tr>
                  
                    <td><label>Remitter Name:</label></td>
					<td><input name="remName" type="text" class="input" id="remName" value="<?= $array1[3]; ?>" readonly="readonly"/> </td>
                    <td><label>Client #:</label> </td>
                    <td><input type="text" name="remID" value="<?= $array1[1]; ?>" readonly="readonly" /></td>  
                  </tr><tr>
                  
                    <td><label>Beneficiary Name: </label></td>
                    <td><input type="text" id="bname" name="bname" class="input" value="<?=$array1[4];?>" readonly="readonly"/></td>
                    <td><label>Bnf #:</label></td>
                    <td><input name="bID" type="text" value="<?=$array1[2];?>" readonly="readonly"/></td>
                  </tr><tr>
                  
                  	<th><label>Address:</label></th>
                    <td><input type='text' id="addr1" name='addr1' class='input' value="<?= $array1[5];?>"readonly='readonly' /></td>
                    <th align='center' colspan='2'>FINTRAC REQUIREMENTS:</th>
                  </tr><tr>
                  
                  	<th>&nbsp;</th>
                    <td><input name='addr2' type='text' class='input' id='addr2' value="<?=$array1[6];?>"readonly='readonly' /></td>
                    <th><label>Relationship:</label></th>
                    <td colspan='2'><input name='relp' type='text' class='input' id='relp' value="<?=$array1[21];?>" readonly="readonly"/></td>
                  </tr><tr>
                  
                  	<th><label>Phone No.:</label></th>
                    <td><input name='phne' type='text' class='input' id='phne' value="<?=$array1[7];?>" readonly='readonly' /></td>
                    <th><label>Source of Payment:</label></th>
                    <td colspan='2'><input name='src' type='text' class='input' id='src' value="<?=$array1[22];?>" readonly='readonly' /></td>
                  </tr><tr>
                  
                  	<th><label>Bank: </label></th>
                    <td><input name='bank' type='text' class='input' id='bank' value="<?=$array1[8];?>" readonly='readonly'/></td>
                    <th><label>Purpose of Remittance:</label></th>
                    <td colspan='2'><input name='purp' type='text' class='input' id='purp' value="<?=$array1[23];?>" readonly="readonly"/></td>
                  </tr><tr>
                  
                  	<th><label>Branch: </label></th>
                    <td><input name='branch' type='text' class='input' id='branch' value="<?=$array1[9];?>" readonly='readonly' /></td>
                    <th align='center' colspan='2'>&nbsp;</th>
                  </tr><tr>
                  
                  	<th><label>Account No.:</label></th>
                    <td><input name='acct' type="text" class="input" id="acct" value="<?=$array1[10];?>" readonly="readonly" /></td>
                    <th><label>Service Type: </label></th>
                    <td><input name='service' type="text" class="input" id="service" value="<?=$array1[17];?>" readonly="readonly" /></td>
                  </tr><tr>
                  
                  	<td>&nbsp;</td>
                    <td colspan="2">&nbsp;&nbsp;_____________________________________________</td>
                  </tr><tr>
                  
                  	<th align='center' colspan='4'><span class="style4">PAYMENT:</span></th>
                  </tr><tr>
                          
                    <th colspan="2" align="right">Currency: &nbsp;</th>
                    <td><input name="ccy" id="ccy" type="text" value="<?=$array1[11];?>" readonly="readonly" /></td>
                  </tr><tr>
                  
                    <th colspan="2" align="right">Rate: &nbsp;</th>
                    <td colspan="2"><input name='rate' type='text' id='rate' maxlength='6' size='5' value="<?=$array1[12];?>" readonly="readonly" /></td>
                  </tr><tr>
  
                    <th colspan="2" align="right">Amount: </th>
                    <td colspan='2'><input name='amt' type='text' id='amt' maxlength='12' size='10' value="<?=$array1[13];?>" readonly="readonly"/></td>
                  </tr><tr>
  
                    <th colspan="2" align="right">Charge: </th>
                    <td colspan='2'><input name='charge' type='text' id='charge' maxlength='5' size='5' value="<?=$array1[14];?>" readonly="readonly"/></td> 
                  </tr><tr>
                          
                    <th colspan="2" align="right">Total Amount: </th>
                    <td colspan='2'><input name='tamt' type='text' id='tamt' maxlength='12' size='10' value="<?=$array1[15];?>" readonly="readonly"/></td> 
                  </tr><tr>
                            
                    <th colspan="2" align="right">Total FX Amount:</th>
                    <td><input name='fxamt' type='text' id='fxamt' maxlength='12' size='10' value="<?=$array1[16];?> "readonly="readonly" /></td> 
                  
                  </tr><tr>
  
                    <th colspan="2" align="right">Type of Payment: </th>
                    <td><input name='payment' type='text' id='payment' value="<?=$array1[18];?> "readonly="readonly" /></td>
                  </tr><tr>
  
                    <td height="50" colspan="4" align="center"><input type="submit" name="delete" value="DELETE" /> </td>
                  </tr>
                </table>
                </form>
              
              </div>
          </div>
  </div>		
</div>
</body>
</html>
