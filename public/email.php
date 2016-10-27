<?php 

$email_list = file("elist.txt");

$total_emails = count($email_list);

for ($counter=0; $counter<total_emails; $counter++) {
	$email_list[$counter] = trim($email_list[$counter]);
}

$to = implode(",",$email_list); 
$subject = $_REQUEST['subject']; 
$email = $_REQUEST['email'] ; 
$message = $_REQUEST['message'] ; 
$headers = "From: $email"; 
$hid= $_POST['lucky'];




?> 
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Friends R Us - Contact Us</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	
</head>

	<body>
  		<div id="wrapper">
   		 
    		
    		<div id="header">
            <img src="images/h-right.jpg" align="right"/>
            <img src="images/h-left.jpg" align="left"/></div>
    		 
			
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="" >
		<tr><td height="180">&nbsp;</td><tr>
			<tr><td>
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#7dc0ee">
				<tr>
					<td height="30" colspan="3" align="center"><strong>
                    <? 
					if ($hid == "charm"){
					$sent = mail($to, $subject, $message, $headers) ; 
						if ( $sent ) { ?>
						Thank You! Your e-mail has been sent successfully! <p> Go to <a href="index.html">Home Page</a>.</p><?
						} else {?>
						The email has failed! <?
						}
					}else{
					exit();
					}?>
                    </strong></td>
				</tr>
			</table></td></tr>
			</td>
			
		</tr>
	</table>
  </div>
</body>
</html>           
 
