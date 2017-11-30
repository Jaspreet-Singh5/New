<html>
<head>
	
	<meta http-equiv="Refresh" 
	      content="10; url = t_contributionpage.php">
		  
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
	
	<p>You will be redirected to the Contribute page in ten seconds.</p>
	
	<p>If you see this message for more than 10 seconds, please 
	   click on this link: <a href="t_contributionpage.php">Contribute</a>!</p>

	<center>
		<button class="buttonload">
			<i class="fa fa-spinner fa-spin"></i>
		</button>
	</center>
</body>
  </html>

  <?php 
	
	include 'session.php';
	
	if(isset($_POST["submit"]))
	{
		if((is_uploaded_file($_FILES["upload"]['tmp_name']))
			&& ($_FILES["upload"]['error']==0))
		{
			move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/".$_FILES['upload']['name']);
		}
		
		$filepath = "uploads/".$_FILES['upload']['name'];
		$title = $_POST["title"];
		$description = $_POST["description"];
	
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");
	
		// Selecting Database
		$db = mysql_select_db("TeacDev", $connection);
	
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from UserInfo where Username = '$login_session'", $connection);
			
		$row = mysql_fetch_assoc($query);
	
		for($i = 1; $i<=25; $i++)
		{
			if(empty($row["Upload$i"]) == TRUE)
			{
				$sql = mysql_query("update `UserInfo` set `Upload$i` = '$filepath',
														  `Title$i` = '$title',
														  `Description$i` = '$description'
													  where `Username` = '$login_session'",$connection);
			
				if($sql === TRUE)
				{
					echo "<b>"."File uploaded successfully"."</b>";
					exit();
				}
			}	
		}
		
		mysql_close($connection);
	}
	
	else
	{
		echo "<b>"."All the fields are required"."</b>";
	}
?>
