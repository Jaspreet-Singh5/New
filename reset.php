 <?php
	
	session_start();// Starting Session

	$error = ''; // Variable To Store Error Message

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
			
	// Selecting Database	
	$db = mysql_select_db("TeacDev", $connection);
			
	$email = $_SESSION['frg_password'];
				
	if (isset($_POST['reset-password'])) 
	{
		if (empty($_POST['resetpass']) || empty($_POST['conpass'])) 
		{
			$error = "New Password or Confirm Password is required";
		}

		else
		{
			$resetpass = $_POST["resetpass"];
			$conpass = $_POST["conpass"];
				
			// To protect MySQL injection for Security purpose
			$resetpass = stripslashes($resetpass);	
			$resetpass = mysql_real_escape_string($resetpass);
			$conpass = stripslashes($conpass);	
			$conpass = mysql_real_escape_string($conpass);
			
			
			if($resetpass == $conpass)
			{
				$query = mysql_query("UPDATE UserInfo SET Password = '$resetpass' 
									  where Email = '$email'", $connection);
				
				if($query == TRUE)
				{
					header("Location: successfulreset.php"); // Redirecting To Home Page
					die();
				}
			} 
			
			else
			{
				$error = "Sorry! Reset Password and Confirm Password did not match";
			}
			
			mysql_close($connection); // Closing Connection
		}
	}
	
?>

  <html>
<head>
	
	<link href="1.css" 
		  rel="stylesheet" 
		  type="text/css">
</head>

<body>

	<div style="border-radius : 5px;
	            background-color : #f2f2f2;
				padding : 40px;
				width : 30%;
				height : 40%;
				margin-left : 35%;
				margin-top : 10%;">

		<form name = "frmreset" 
			  id = "frmreset" 
			  method = "post" 
			  class = "test"
			  action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<h1>Reset Password?</h1>
	
			<div id="validation-message">
		
				<?php 
	
					if(!empty($error)) 
					{ 
						echo $error; 	
					} 
				?>
	
			</div>

			<div class="field-group">
			
				<div>
			
					<label for="resetpass">New Password</label>
				</div>
		
				<div>
			
					<input type="password" 
						   name="resetpass" 
					       id="resetpass">
				</div>
			</div>
			
			<div class="field-group">
			
				<div>
			
					<label for="conpass">Confirm Password</label>
				</div>
		
				<div>
			
					<input type="password" 
						   name="conpass" 
					       id="conpass">
				</div>
			</div>
	
			<div class="field-group">
		
				<div>
			
					<center>
						<input type="submit" 
						       name="reset-password" 
							   id="reset-password" 
						       value="Reset" 
						       class="button">
					</center>
				</div>
			</div>	
		</form>
	</div>
	
</body>
  </html>	