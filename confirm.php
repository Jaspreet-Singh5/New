<?php
	
	session_start();// Starting Session
	
	$error = ''; // Variable To Store Error Message

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
			
	// Selecting Database	
	$db = mysql_select_db("TeacDev", $connection);
			
	$email = $_SESSION['frg_password'];
				
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from UserInfo where Email = '$email'", $connection);
			
	$rows = mysql_num_rows($query);
				
	$row = mysql_fetch_assoc($query);
				
	$ques1 = $row["Question no.1"];
	$ques2 = $row["Question no.2"];
	$ques3 = $row["Question no.3"];
	$ans1chk = $row["Answer no.1"];
	$ans2chk = $row["Answer no.2"];
	$ans3chk = $row["Answer no.3"];
				
	if (isset($_POST['conpassword'])) 
	{
		if (empty($_POST['Ques1']) || empty($_POST['Ques2']) || empty($_POST['Ques3'])) 
		{
			$error = "All fields are mandatory";
		}

		else
		{
			$ans1 = $_POST["Ans1"];
			$ans2 = $_POST["Ans2"];
			$ans3 = $_POST["Ans3"];
				
			// To protect MySQL injection for Security purpose
			$ans1 = stripslashes($ans1);	
			$ans1 = mysql_real_escape_string($ans1);
			$ans2 = stripslashes($ans2);	
			$ans2 = mysql_real_escape_string($ans2);
			$ans3 = stripslashes($ans3);	
			$ans3 = mysql_real_escape_string($ans3);
			
				
			if ($rows == 1) 
			{
				if(($ans1chk == $ans1) && ($ans2chk == $ans2) && ($ans3chk == $ans3))
				{
					header("location: reset.php"); // Redirecting To Other Page
					die();
				}
					
				else
				{
					$error = "Sorry! your answers did not match";
				}
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
				height : 70%;
				margin-left : 35%;
				margin-top : 10%;">

		<form name = "confrm" 
			  id = "confrm" 
			  method = "post" 
			  class = "test"
			  action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<h1>Security Questions</h1>
	
			<div id="validation-message">
		
				<?php 
	
					if(!empty($error)) 
					{ 
						echo $error; 	
				
					} 
				?>
	
			</div>

			<p>
								
				<label for = "Ques1">Ques1</label>
				<input value = "<?php echo $ques1; ?>" 
					   name = "Ques1"
				       type ="text"
					   Readonly>
							
				<input placeholder = "Ans1" 
					   oninput = "this.className = ''" 
					   name = "Ans1"
				       type ="text">
			</p>
						    
			<p>
			
				<label for = "Ques2">Ques2</label>
				<input value = "<?php echo $ques2; ?>" 
					   name = "Ques2"
				       type ="text"
					   Readonly>
							
				<input placeholder = "Ans2" 
					   oninput = "this.className = ''" 
					   name = "Ans2"
					   type ="text">
			</p>
							
			<p>
								
				<label for = "Ques3"
					   style = "margin-top: 15px;">Ques3</label>
				<input value = "<?php echo $ques3; ?>"
					   name = "Ques3"
					   type ="text"
					   style = "margin-top: 15px;"
					   Readonly>
							
				<input placeholder = "Ans3" 
					   oninput = "this.className = ''" 
					   name = "Ans3"
					   type ="text">
			</p>
			
			<div class="field-group">
		
				<div>
			
					<center>
						<input type="submit" 
						       name="conpassword" 
							   id="conpassword" 
						       value="Submit" 
						       class="button">
					</center>
				</div>
			</div>
		</form>
	</div>
</body>
  </html>	