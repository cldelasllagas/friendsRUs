<?php
	require_once('auth.php');

	$hostname = "friendsrusca.ipowermysql.com";
	$database = "frudb";
	$username = "jane";
	$password = "venu5";

	mysql_connect($hostname,$username,$password);
	mysql_select_db($database);

	$sql = "SELECT beneficiary.lname, beneficiary.fname
			FROM beneficiary
			WHERE beneficiary.remId = (
				SELECT Remitter.id
				FROM Remitter
				WHERE CONCAT( Remitter.lname, ', ', Remitter.fname ) LIKE '%" . $_POST['rname'] . "%'
				)
			ORDER BY beneficiary.lname LIMIT 15";
	$rs = mysql_query($sql);
	
?>

<ul>

<? while($data = mysql_fetch_assoc($rs)) { ?>
  <li><? echo stripslashes($data['beneficiary.lname']);?>, <? echo stripslashes($data['beneficiary.fname']);?> </li>
<? } ?>
</ul>
