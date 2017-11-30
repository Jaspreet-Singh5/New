<html>
<head>
	
	<meta http-equiv="Refresh" 
	      content="10; url = t_profile.php">
		  
	<link rel="stylesheet" 
		  href="font-awesome-4.7.0/css/font-awesome.min.css">

	<style>
		.buttonload 
		{
			background-color: white;
			border: none; /* Remove borders */
			color: black; /* White text */
			font-size: 160px; /* Set a font-size */
		}
	
	</style>
</head>

<body>
	
	<p>You will be redirected to the Profile page in ten seconds.</p>
	
	<p>If you see this message for more than 10 seconds, please 
	   click on this link: <a href="t_profile.php">Profile</a>!</p>

	<center>
		<button class="buttonload">
			<i class="fa fa-spinner fa-spin"></i>
		</button>
	</center>
</body>
  </html>

<?php
	
	include 'session.php';
	
	if((is_uploaded_file($_FILES["pupload"]['tmp_name']))
			&& ($_FILES["pupload"]['error']==0))
	{
		move_uploaded_file($_FILES['pupload']['tmp_name'],"uploads/".$_FILES['pupload']['name']);
	}
		
	$filepath = "uploads/".$_FILES['pupload']['name'];
	
	if(isset($_POST["psubmit"]))
	{
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");
	
		// Selecting Database
		$db = mysql_select_db("TeacDev", $connection);
	
		$skill1 = $_POST["Maths"];
		$skill2 = $_POST["English"];
		$skill3  = $_POST["Science"];
		$skill4 = $_POST["SSt"];
		$skill5 = $_POST["GK"];
		$dob = $_POST["date1"];
		$gender = $_POST["gender"];
		$phone = $_POST["phone"];
		
		$sql = mysql_query("update `UserInfo` set `Maths` = '$skill1',
												  `English` = '$skill2',
												  `Science` = '$skill3',
												  `S.St.` = '$skill4',
												  `G.K.` = '$skill5',
												  `D.O.B.` = '$dob',
												  `Gender` = '$gender',
												  `Phone` = '$phone',
												  `Profile Pic` = '$filepath'
											   where `Username` = '$login_session'",$connection);
			
		if($sql === TRUE)
		{
				echo "<b>"."Profile updated successfully"."</b>";
		}
			
		else
		{
			echo mysql_error($connection);
			
			echo "<b>"."Something went wrong"."</b>";
		}
		
		mysql_close($connection);
	}
	
	else
	{
		echo "<b>"."All the fields are required"."</b>";
	}
?>
