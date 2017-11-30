  <?php
	
	session_start(); // Starting Session
	$error = ''; // Variable To Store Error Message

		if (isset($_POST['forgot-password'])) 
		{
			if (empty($_POST['frgemail'])) 
			{
				$error = "Email is required";
			}
			
			else
			{
				// Define $email
				$email = $_POST['frgemail'];
				
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysql_connect("localhost", "root", "");
			
				// To protect MySQL injection for Security purpose
				$email = stripslashes($email);	
				$email = mysql_real_escape_string($email);
			
				// Selecting Database	
				$db = mysql_select_db("TeacDev", $connection);
			
				// SQL query to fetch information of registerd users and finds user match.
				$query = mysql_query("select * from UserInfo where Email = '$email'", $connection);
			
				$rows = mysql_num_rows($query);
			
				if($rows == 1) 
				{
					$_SESSION['frg_password'] = $email; // Initializing Session
					
					header("location: confirm.php"); // Redirecting To Other Page
					die();
				} 
				
				else
				{
					$error = "You are not registerd";
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
				height : auto;
				margin-left : 35%;
				margin-top : 10%;">

		<form name = "frmForgot" 
			  id = "frmForgot" 
			  method = "post" 
			  class = "test"
			  action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<h1>Forgot Password?</h1>
	
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
			
					<label for="frgemail">Email</label>
				</div>
		
				<div>
			
					<input type="text" 
						   name="frgemail" 
					       id="frgemail">
				</div>
			</div>
	
			<div class="field-group">
		
				<div>
			
					<center>
						<input type="submit" 
						       name="forgot-password" 
							   id="forgot-password" 
						       value="Submit" 
						       class="button">
					</center>
				</div>
			</div>	
		</form>
	</div>
	
</body>
  </html>	