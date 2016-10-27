<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
<!-- 

        -->
		</script>

    </head>
    <?
$q=$_GET["q"];

mysql_select_db($database);

$sql="SELECT * FROM beneficiary, fintrac, Remitter WHERE beneficiary.remID = Remitter.id AND beneficiary.id = '".$q."' AND bene_id = '".$q."'";

$result = mysql_query($sql);?>
<table width='656' cellpadding='1' cellspacing='1'>
<?
$service[0]="Credit to Bank Account";
$service[1]="Door to Door";
$service[2]="Pick-up at MetroBank";
$service[3]="Pick-up at M.Lhuillier";
$service[4]="Pick-up at PNB";
$service[5]="Pick-up at BDO";
$service[6]="Pick-up at HongKong";
$Service[7]="Utility Payment";

while($row = mysql_fetch_array($result))
  { ?>
  <tr><td colspan='4' align='right'>Bnf #: <input name='textbox28' type='text' readonly='readonly' id='textbox28' value="<?=stripslashes($row[0])?>"/></td>
  </tr><tr>
  <th><label>Beneficiary Name: </label></th>
  <td><input name='textbox16' type='text' class='input' id='textbox16' readonly='readonly' value="<?= stripslashes($row[2])?>, <?=stripslashes($row[3])?>"/></td>
  <th align='center' colspan='2'>FINTRAC REQUIREMENTS:</th>
  </tr><tr>
  
       
  <th><label>Address:</label></th>
  <td><input name='textbox18' type='text' class='input' id='textbox18' readonly='readonly' value="<?= stripslashes($row[4])?>"/></td>
  <th><label>Relationship:</label></th>
  <td><input name='textbox24' type='text' class='input' id='textbox24' value="<?=stripslashes($row[12])?>" readonly="readonly"/></td>
  </tr><tr>
  
  <th>&nbsp;</th>
  <td><input name='textbox19' type='text' class='input' id='textbox19' readonly='readonly' value="<?=stripslashes($row[5])?>"/></td>
  <th><label>Source of Payment:</label></th>
  <td><input name='textbox25' type='text' class='input' id='textbox25' value="<?=stripslashes($row[13])?>"/><span class="style12">*</span></td>
  </tr><tr>
  
  <th><label>Phone No.:</label></th>
  <td><input name='textbox20' type='text' class='input' id='textbox20' readonly='readonly' value="<?=stripslashes($row[6])?>"/></td>
  <th><label>Purpose of Remittance:</label></th>
  <td><input name='textbox26' type='text' class='input' id='textbox26' value="<?=stripslashes($row[14])?>"/><span class="style12">*</span></td>
  </tr><tr>
  
  <th><label>Bank: </label></th>
  <td><input name='textbox21' type='text' class='input' id='textbox21' readonly='readonly' value="<?=stripslashes($row[7])?>"/></td>
  <th align='center' colspan='2'>&nbsp;</th>
  </tr><tr>
  
  <th><label>Branch: </label></th>
  <td><input name='textbox22' type='text' class='input' id='textbox22' readonly='readonly' value="<?=stripslashes($row[8])?>"/></td>
  <th><label>Service Type: </label></th>
  <td><select name='service'>
    <?

     for ($i=0; $i<=7; $i++)
     {
        if($row[10] == $service[$i]){
          echo "<option selected value='$service[$i]'>$service[$i]</option>";
        }else {
          echo "<option value='$service[$i]'>$service[$i]</option>";
        }
     }?>
  </select>  </td>
  </tr><tr>
  
  <th><label>Account No.:</label></th>
  <td><input name='textbox23' type="text" class="input" id="textbox23" readonly="readonly" value="<?=stripslashes($row[9])?>"/></td>
  </tr>
  
                        <tr>
                        	<td colspan="2">&nbsp;</td>
                          <th align='center' colspan='2'><label style='font-size:16px'>PAYMENT:</label></th>
                        </tr><tr>
                          
                          <td colspan="2">&nbsp;</td>
                          <th><label>Currency: </label></th>
                          <td>
                                <select name='ccy' class='input' onchange="showRate(this.value)">
                             		<OPTION VALUE="select">Select Currency:</option> 
						    		<OPTION VALUE="CADPHP">CAD-PHP</option>
                                    <OPTION VALUE="USDPHP">USD-PHP</option>
                                    <OPTION VALUE="CADUSD">CAD-USD</option>
                                    <OPTION VALUE="USDUSD">USD-USD</option>
                                    <OPTION VALUE="CADHKD">CAD-HKD</option>
                                </select></td>
                        </tr>  </table>                        
                          <div id="txtHint2"></div>
                          
                       
  
  <? }?>
</table>
<?
mysql_close($anunturi);
?> 
</html>
