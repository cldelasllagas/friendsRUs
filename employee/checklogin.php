<?php
	//Start session
	session_start();
	
	define('PROTECTED', true);
	//Include database connection details
	require_once('config.php');
		
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
		
		
	// Connect to server and select databse.
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	
	//Sanitize the POST values
	$username = mysql_real_escape_string($_POST['username']);
	$password = sha1('kampai'.$_POST['password']);
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: main_login.php");
		exit();
	}
	
	
	//Limit login attempts: Prevents bruteforce
	mysql_query("INSERT INTO attempts VALUES('$username')");
	
	$counter = mysql_result(
    	mysql_query(
        	"SELECT COUNT(*)
         	FROM attempts
         	WHERE username='$username'"
    	),0
	);
	
	if($counter>=10) {
	header ("Location: bruteforce.php");
    	//echo 'Bruteforce attempt detected or more than allowed logins per day exceeded!';
    	exit();
	}
	
	
	//Ban List: IP check
	$max_counter = mysql_result(
    	mysql_query(
        	"SELECT COUNT(*)
         	FROM attempts
         	WHERE username='$username'"
    	),0
	);
		
	if($max_counter>=9) {
    	mysql_query("INSERT INTO banlist VALUES('".$_SERVER['REMOTE_ADDR']."')");
	}

	if(1==mysql_num_rows(
    	mysql_query(
        	"SELECT 1
         	FROM banlist
        	WHERE ip='".$_SERVER['REMOTE_ADDR']."'"
    	))
	) {
	header("Location: bruteforce.php");
    //echo 'Your IP address is banned!';
    exit();
	}
		
		
	//Create query
	$result = mysql_query("SELECT * FROM employees WHERE username='$username' AND passwd='$password' ORDER BY emp_id");
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$emp = mysql_fetch_assoc($result);
			$_SESSION['SESS_EMP_ID'] = $emp['emp_id'];
			$_SESSION['SESS_FIRST_NAME'] = $emp['firstname'];
			$_SESSION['SESS_LAST_NAME'] = $emp['lastname'];
			session_write_close();
			header("location: member-index.php");
			exit();
		}else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed.");
	}
	
?>