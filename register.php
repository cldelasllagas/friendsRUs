<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Employee Registration</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	
</head>
<body>
  <div id="wrapper">
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="" >
    <tr>
    	<td height="75">&nbsp;</td>
    	<tr>
	    <form id="loginForm" form name="loginForm" method="post" action="checkreg.php">
            	<td><img src="images/logo.jpg" alt="" /></td>
            	<tr>
                    <td>&nbsp;
			    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#7dc0ee">
				<tr>
      				    <th>First Name </th>
      				    <td><input name="fname" type="text" class="textfield" id="fname" /></td>
                                </tr><tr>
                                    <th>Last Name </th>
                                    <td><input name="lname" type="text" class="textfield" id="lname" /></td>
                                </tr><tr>
                                    <th width="124">Username</th>
                                    <td width="168"><input name="username" type="text" class="textfield" id="username" /></td>
                                </tr><tr>
                                    <th>Password</th>
                                    <td><input name="password" type="password" class="textfield" id="password" /></td>
                                </tr><tr>
                                    <th>Confirm Password </th>
                                    <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
                                </tr><tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="Submit" value="Register" /></td>
                                </tr>
                            </table>
                    </td>
		</tr>
            	<tr>
                    <td colspan="3"><img src="images/login-bot.jpg" alt="" width=100% height="13" /></td>
                </tr>
	    </form>
	</tr>
    </tr>
</table>

</body>
</html>
