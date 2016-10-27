<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');

$q=$_GET["q"]; 
@mysql_select_db($database) or die( "Unable to select database");
						  
$sql="SELECT $q FROM rate WHERE transDate = DATE(NOW())";
$result3 = mysql_query($sql) or die(mysql_error()); 
$array1 = mysql_fetch_array($result3);


?>
  <table align="right">
  <tr>
  <td colspan="2">&nbsp;</td>
  <th><label>Rate: </label></th>
  <td><input name='rate' type='text' id='rate' maxlength='6' size='5' value="<?=$array1[0]?>" onkeyup="return autocalc2(this,amt)" /></td>
  </tr><tr>
  
  <td colspan="2">&nbsp;</td>
  <th><label>Amount: </label></th>
  <td><input name='amt' type='text' id='amt' maxlength='12' size='10' onkeyup="return autocalc(this,charge)" onblur="return autocalc2(this,rate)"/></td>
  </tr><tr>
  
  <td colspan="2">&nbsp;</td>
  <th><label>Charge: </label></th>
  <td><input name='charge' type='text' id='charge' maxlength='5' size='5' onkeyup="return autocalc(this,amt)"  /></td> 
  </tr><tr>
      
  <td colspan="2">&nbsp;</td>                    
  <th><label>Total Amount: </label></th>
  <td><input name='tamt' type='text' id='tamt' maxlength='12' size='10' readonly="readonly"/></td> 
  </tr><tr>
  
  <td colspan="2">&nbsp;</td>                         
  <th><label>Total FX Amount: </label></th>
  <td><input name='fxamt' type='text' id='fxamt' maxlength='12' size='10' readonly="readonly" /></td> 
  </tr><tr>
  
  <td colspan="2">&nbsp;</td>
  <th><label>Type of Payment: </label></th>
  <td>
        <select name='payment' class='input' >
            <option>Cash</option>
            <option>Debit</option>
            <option>Cheque</option>
            <option>IEMT</option>
            <option>Deposit</option>
        </select>  </td>
  </tr><tr>
  
  <td colspan="2">&nbsp;</td>
  <td height="50" colspan="2" align="center"><input type="button" name="print" value="PRINT" onclick="window.print()"/>&nbsp;
  <input type="submit" name="process" value="PROCESS" />
  </td>
  </tr>
  </table>
  

  <?

  mysql_close($anunturi);
  ?>

