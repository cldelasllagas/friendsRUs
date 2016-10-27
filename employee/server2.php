<?php
	require_once('auth.php');
	define('PROTECTED', true);
	require_once('db.php');

	mysql_select_db($database);

	$sql = "SELECT remId, CONCAT(lname,', ', fname) AS name FROM beneficiary WHERE CONCAT(lname,', ', fname) LIKE '%" . $_POST['bname'] . "%'
			ORDER BY remId LIMIT 15";
	$rs = mysql_query($sql);
	
?>

<ul>

<? while($data = mysql_fetch_assoc($rs)) { ?>
  <li><? echo stripslashes($data['name']);?></li>
<? } ?>
</ul>
