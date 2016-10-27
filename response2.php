<?php
	require_once('db.php');
	include('classes/stem.php');
	include('classes/cleaner.php');
	
	if( !empty ( $_POST['search'] ) ):
	
		$string = $_POST['search'];
		//$main_url = 'http://www.roscripts.com/';
	
		$stemmer = new Stemmer;
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
		        
		        mysql_select_db($database); 
			$sql = "SELECT DISTINCT COUNT(*) as lname, fname FROM Remitter WHERE (";
		             
			while ( list ( $key,$val ) = each ( $split_stemmed ) )
			{
		              if( $val!='' && strlen ( $val ) > 0 )
		              {
		              	$sql .= "((lname LIKE '%".$val."%')) OR";
		              }
			}
			
			$sql=substr ( $sql,0, ( strLen ( $sql )-3 ) );//this will eat the last OR
			$sql .= ") GROUP BY lname ORDER BY fname DESC LIMIT 20";
		
			$query = mysql_query($sql) or die ( mysql_error () );
			$row_sql = mysql_fetch_assoc ( $query );
			$total = mysql_num_rows ( $query );
			 
			if($total>0):
	
			        /* echo '	<div class="entry">'."\n";
				echo '		<ul>'."\n"; */
					while ( $row = mysql_fetch_assoc ( $query ) ) 
					{				
						echo ' $row['lname'].','.$row['fname'];

					}
					
				
			endif;
		endif;
	endif;	
?>