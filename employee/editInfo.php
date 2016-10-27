<?php
require_once('auth.php');
define('PROTECTED', true);
require_once('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDIT REMITTER / BENEFICIARY</title>
<link rel="stylesheet" href="style2.css" type="text/css" charset="utf-8" />
	<script src="lib/prototype.js" type="text/javascript"></script>
    <script src="src/scriptaculous.js" type="text/javascript"></script>
    <script src="src/unittest.js" type="text/javascript"></script>
    <script src="src/controls.js" type="text/javascript"></script>
    <script src="src/effects.js" type="text/javascript"></script>
    <script language="JavaScript1.2" type="text/javascript" src="images/remitterbtn/mm_css_menu.js"></script>
    <script language="JavaScript1.2" type="text/javascript" src="images/benebtn/mm_css_menu.js"></script>
<style type="text/css"  media="screen">
<!--
@import url("images/remitterbtn/remitter.css");
@import url("images/benebtn/beneficiary.css");


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
        <td width="663"><h1>&nbsp;</h1>
          <h1>&nbsp;</h1>
          <h1>&nbsp;</h1>
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
                <table width="614" cellpadding="1"cellspacing="1">
                  <tr><td>&nbsp;</td>
                    <td align="right"><div id="FWTableContainer654994659">
                      <table border="0" cellpadding="0" cellspacing="0" width="120">
                        <!-- fwtable fwsrc="remitter.png" fwpage="Page 1" fwbase="remitter.gif" fwstyle="Dreamweaver" fwdocid = "654994659" fwnested="0" -->
                        <tr>
                          <td><img src="images/remitterbtn/spacer.gif" width="25" height="1" border="0" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="70" height="1" border="0" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="25" height="1" border="0" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="1" height="1" border="0" alt="" /></td>
                        </tr>
                        <tr>
                          <td colspan="3"><img name="remitter_r1_c1" src="images/remitterbtn/remitter_r1_c1.gif" width="120" height="10" border="0" id="remitter_r1_c1" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="1" height="10" border="0" alt="" /></td>
                        </tr>
                        <tr>
                          <td rowspan="2"><img name="remitter_r2_c1" src="images/remitterbtn/remitter_r2_c1.gif" width="25" height="20" border="0" id="remitter_r2_c1" alt="" /></td>
                          <td><a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer0601224505_0', 'MMMenu0601224505_0',15,13,'remitter_r2_c2');"><img name="remitter_r2_c2" src="images/remitterbtn/remitter_r2_c2.gif" width="70" height="9" border="0" id="remitter_r2_c2" alt="" /></a></td>
                          <td rowspan="2"><img name="remitter_r2_c3" src="images/remitterbtn/remitter_r2_c3.gif" width="25" height="20" border="0" id="remitter_r2_c3" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="1" height="9" border="0" alt="" /></td>
                        </tr>
                        <tr>
                          <td><img name="remitter_r3_c2" src="images/remitterbtn/remitter_r3_c2.gif" width="70" height="11" border="0" id="remitter_r3_c2" alt="" /></td>
                          <td><img src="images/remitterbtn/spacer.gif" width="1" height="11" border="0" alt="" /></td>
                        </tr>
                      </table>
                      <div id="MMMenuContainer0601224505_0">
                        <div id="MMMenu0601224505_0" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();"><a href="remitter.php" target="_self" id="MMMenu0601224505_0_Item_0" class="MMMIFVStyleMMMenu0601224505_0" onmouseover="MM_menuOverMenuItem('MMMenu0601224505_0');">Search</a><a href="editInfo.php" target="_self" id="MMMenu0601224505_0_Item_1" class="MMMIVStyleMMMenu0601224505_0" onmouseover="MM_menuOverMenuItem('MMMenu0601224505_0');">Edit</a><a href="addRem.php" target="_self" id="MMMenu0601224505_0_Item_2" class="MMMIVStyleMMMenu0601224505_0" onmouseover="MM_menuOverMenuItem('MMMenu0601224505_0');">Add</a></div>
                      </div>
                    </div></td>
                    <td><div id="FWTableContainer261203506">
                      <table border="0" cellpadding="0" cellspacing="0" width="120">
                        <!-- fwtable fwsrc="beneficiary.png" fwpage="Page 1" fwbase="beneficiary.gif" fwstyle="Dreamweaver" fwdocid = "261203506" fwnested="0" -->
                        <tr>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="15" height="1" border="0" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="92" height="1" border="0" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="13" height="1" border="0" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0" /></td>
                        </tr>
                        <tr>
                          <td colspan="3"><img name="beneficiary_r1_c1" src="images/benebtn/beneficiary_r1_c1.gif" width="120" height="10" border="0" id="beneficiary_r1_c1" alt="" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="1" height="10" border="0" /></td>
                        </tr>
                        <tr>
                          <td rowspan="2"><img name="beneficiary_r2_c1" src="images/benebtn/beneficiary_r2_c1.gif" width="15" height="20" border="0" id="beneficiary_r2_c1" alt="" /></td>
                          <td><a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer0601233627_0', 'MMMenu0601233627_0',25,13,'beneficiary_r2_c2');"><img name="beneficiary_r2_c2" src="images/benebtn/beneficiary_r2_c2.gif" width="92" height="10" border="0" id="beneficiary_r2_c2" alt="" /></a></td>
                          <td rowspan="2"><img name="beneficiary_r2_c3" src="images/benebtn/beneficiary_r2_c3.gif" width="13" height="20" border="0" id="beneficiary_r2_c3" alt="" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="1" height="10" border="0" /></td>
                        </tr>
                        <tr>
                          <td><img name="beneficiary_r3_c2" src="images/benebtn/beneficiary_r3_c2.gif" width="92" height="10" border="0" id="beneficiary_r3_c2" alt="" /></td>
                          <td><img src="images/benebtn/spacer.gif" alt="" name="undefined_2" width="1" height="10" border="0" /></td>
                        </tr>
                      </table>
                      <div id="MMMenuContainer0601233627_0">
                        <div id="MMMenu0601233627_0" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();"><a href="searchBene.php" target="_self" id="MMMenu0601233627_0_Item_0" class="MMMIFVStyleMMMenu0601233627_0" onmouseover="MM_menuOverMenuItem('MMMenu0601233627_0');">Search</a><a href="editInfo.php" target="_self" id="MMMenu0601233627_0_Item_1" class="MMMIVStyleMMMenu0601233627_0" onmouseover="MM_menuOverMenuItem('MMMenu0601233627_0');">Edit</a><a href="addBene.php" target="_self" id="MMMenu0601233627_0_Item_2" class="MMMIVStyleMMMenu0601233627_0" onmouseover="MM_menuOverMenuItem('MMMenu0601233627_0');">Add</a></div>
                      </div>
                    </div></td>
                  </tr><tr>
                  	<td height="50">&nbsp;</td>
                  </tr><tr>
                    <th colspan="2" align="left">EDIT REMITTER AND/OR BENEFICIARY</th>
                  </tr>
                  <form id="form1" name="form1" method="post" action="editInfopge.php">
                  <tr>
                    <td width="132"><label>Remitter Name: </label></td>
                    <td width="195"><input type="text" id="rname" name="rname" class="input"/></td>
                    <td width="275"><input type="submit" name="Submit" value="Search"></td>
                  </tr>
                  </form>
                      <div id="hint"> </div>
					  <script type="text/javascript" language="javascript" charset="utf-8">
                          new Ajax.Autocompleter('rname','hint','server.php' );
                      </script>  
                  
                    

              	      
                  </table>
                  <p>&nbsp;</p>
            </div>
          </div>
     </div>		
</div>
</body>
</html>

