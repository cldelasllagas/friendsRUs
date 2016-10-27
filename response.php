<?php
	require_once('db.php');
	//include('classes/stem.php');
	//include('classes/cleaner.php');
	
	if( !empty ( $_POST['search'] ) ):
	
		$string = $_POST['search'];
		//$main_url = 'http://www.roscripts.com/';
	
		/* $stemmer = new Stemmer;
		$stemmed_string = $stemmer->stem ( $string );
	
		$clean_string = new jSearchString();
		$stemmed_string = $clean_string->parseString ( $stemmed_string );		
		
		$new_string = '';
		foreach ( array_unique ( split ( " ",$stemmed_string ) ) as $array => $value )
		{
			if(strlen($value) >= 3)
			{
				$new_string .= ''.$value.' ';
			}
		}

		$new_string = substr ( $new_string,0, ( strLen ( $new_string ) -1 ) );
		
		if ( strlen ( $new_string ) > 3 ):
		
			$split_stemmed = split ( " ",$new_string );
		         */
		        mysql_select_db($database); 
			//$sql = "SELECT DISTINCT COUNT(*) as lname, fname FROM Remitter WHERE (";
		     $sql = "SELECT lname FROM Remitter WHERE lname LIKE '%" . $_POST['search'] . "%'";
	$rs = mysql_query($sql);
	
?>

<ul>

<? while($data = mysql_fetch_assoc($rs)) { ?>
  <li><? echo stripslashes($data['lname']);?></li>
<? } ?>

</ul>        
			

?>