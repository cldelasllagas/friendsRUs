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

<style type="text/css">
	<!--
	.style3 {color: #FF0000}
	-->
</style>

    </head>
    <?
$q=$_GET["q"];

mysql_select_db($database);

$sql="SELECT * FROM beneficiary, fintrac, Remitter WHERE beneficiary.remID = Remitter.ID AND beneficiary.id = '".$q."' AND bene_id = '".$q."'";

$result = mysql_query($sql);
echo "<table width='656' cellpadding='1' cellspacing='1'>";

$service[0]="Credit to Bank Account";
$service[1]="Door to Door";
$service[2]="Pick-up at MetroBank";
$service[3]="Pick-up at M.Lhuillier";
$service[4]="Pick-up at PNB";
$service[5]="Pick-up at BDO";
$service[6]="Pick-up at HongKong";
$Service[7]="Utility Payment";

while($row = mysql_fetch_array($result))
  {
  echo "<tr><td colspan='4' align='right'>Bnf #: <input name='textbox28' type='text' readonly='readonly' id='textbox28' value='" . stripslashes($row[0]) . "'/></td>";
  
  echo "</tr><tr>";
  echo "<th align='right'><label>First Name (& MI): </label></th>";
  echo "<td><input name='textbox16' type='text' class='input' id='textbox16' readonly='readonly' value='" . stripslashes($row[3]) . "'/><span class='style3'>*</span></td>";
  echo "<th align='center' colspan='2'><span class='style2'>FINTRAC REQUIREMENTS:</span></th>";
  echo "</tr><tr>"; 
  
  echo "<th align='right'><label>Last Name: </label></th>";
  echo "<td><input name='textbox17' type='text' class='input' id='textbox17' readonly='readonly' value='" . stripslashes($row[2]) . "'/><span class='style3'>*</span></td>";
  echo "<th align='right'><label>Relationship:</label></th>";
  echo "<td ><input name='textbox24' type='text' class='input' id='textbox24' readonly='readonly' value='" . stripslashes($row[12]) . "'/><span class='style3'>*</span></td>";
  echo "</tr><tr>"; 
  
  echo "<th align='right'><label>Address:</label></th>";
  echo "<td><input name='textbox18' type='text' class='input' id='textbox18' readonly='readonly' value='" . stripslashes($row[4]) . "'/></td>";
  echo "<th align='right'><label>Source of Payment:</label></th>";
  echo "<td ><input name='textbox25' type='text' class='input' id='textbox25' readonly='readonly' value='" . stripslashes($row[13]) . "'/><span class='style3'>*</span></td>";
  echo "</tr><tr>";  
  
  echo "<th>&nbsp;</th>";
  echo "<td><input name='textbox19' type='text' class='input' id='textbox19' readonly='readonly' value='" . stripslashes($row[5]) . "'/></td>";
  echo "<th align='right'><label>Purpose of Remittance:</label></th>";
  echo "<td><input name='textbox26' type='text' class='input' id='textbox26' readonly='readonly' value='" . stripslashes($row[14]) . "'/><span class='style3'>*</span></td>";
  echo "</tr><tr>";
  
  echo "<th align='right'><label>Phone No.:</label></th>";
  echo "<td><input name='textbox20' type='text' class='input' id='textbox20' readonly='readonly' value='" . stripslashes($row[6]) . "'/></td>";
  echo "<th align='center' colspan='2'></th>";
  echo "</tr><tr>";
  
  echo "<th align='right'><label>Bank</label></th>";
  echo "<td><input name='textbox21' type='text' class='input' id='textbox21' readonly='readonly' value='" . stripslashes($row[7]) . "'/></td>";
  echo "<th align='right'><label>Service Type: </label></th>";
  echo "<select name='service'>";

     for ($i=0; $i<=7; $i++)
     {
        if($row[10] == $service[$i]){
          echo "<option selected value='$service[$i]'>$service[$i]</option>";
        }else {
          echo "<option value='$service[$i]'>$service[$i]</option>";
        }
     }

  echo" </select>";
  echo "</tr><tr>";
  
  echo "<th align='right'><label>Branch</label></th>";
  echo "<td><input name='textbox22' type='text' class='input' id='textbox22' readonly='readonly' value='" . stripslashes($row[8]) . "'/></td>";

  echo "</tr><tr>";
  echo "<th align='right'><label>Account No:</label></th>";
  echo "<td><input name='textbox23' type='text' class='input' id='textbox23' readonly='readonly' value='" . stripslashes($row[9]) . "'/></td>";
  echo '<td colspan="2" align="right"><input name="edit" id="enableDisableButton" type="button" value="Edit" onClick="enableDisable()"/>&nbsp;&nbsp;<input name="update" id="update" type="submit" value="Update Record" onclick="updateInfo()"/></td>';

  echo "</tr>";
  }
echo "</table>";

mysql_close($anunturi);
?> 
</html>
