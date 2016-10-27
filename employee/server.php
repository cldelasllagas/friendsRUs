<?php
	require_once('auth.php');
	define('PROTECTED', true);
	require_once('db.php');
	
	mysql_select_db($database);

	$sql = "SELECT CONCAT(lname,', ', fname) AS name FROM Remitter WHERE CONCAT(lname,', ', fname) LIKE '%" . $_POST['rname'] . "%'
			ORDER BY lname LIMIT 15";
	$rs = mysql_query($sql);
	
?>

<ul>

<? while($data = mysql_fetch_assoc($rs)) { ?>
  <li><? echo stripslashes($data['name']);?></li>
<? } ?>
</ul>
