<?php
	session_start(); // Starting Session
	 
	if (isset($_POST['login'])) 
	{
		// Define $username, $profession and $password
		$username = $_POST['username'];
		$password = $_POST['password'];
		$professn = $_POST['profession'];
			
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");
			
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);	
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$professn = stripslashes($professn);
		$professn = mysql_real_escape_string($professn);
			
		// Selecting Database	
		$db = mysql_select_db("TeacDev", $connection);
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from UserInfo where Username = '$username'", $connection);
			
		$rows = mysql_num_rows($query);
			
		if ($rows == 1) 
		{
			$_SESSION['login_user'] = $username;
				
			if($professn == "Teacher")
			{
				header("location: t_profile.php");// Redirecting To Other Page
			}
				
			else
			{
				header("location: d_profile.php");// Redirecting To Other Page
			}
		} 
			
		else 
		{
			echo "Username,Password or Profession is invalid";
		}

		mysql_close($connection); // Closing Connection
	}
?>