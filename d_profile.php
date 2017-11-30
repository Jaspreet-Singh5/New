<?php
	
	include 'session.php';
	
	$msg = "";
	
	if(isset($_POST["psubmit"]))
	{
		if((is_uploaded_file($_FILES["pupload"]['tmp_name']))
			&& ($_FILES["pupload"]['error']==0))
		{
			move_uploaded_file($_FILES['pupload']['tmp_name'],"uploads/".$_FILES['pupload']['name']);
		}
		
		$filepath = "uploads/".$_FILES['pupload']['name'];
	
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");
	
		// Selecting Database
		$db = mysql_select_db("TeacDev", $connection);
	
		$skill1 = $_POST["Skill_1"];
		$skill2 = $_POST["Skill_2"];
		$skill3  = $_POST["Skill_3"];
		$skill4 = $_POST["Skill_4"];
		$skill5 = $_POST["Skill_5"];
		$dob = $_POST["date1"];
		$gender = $_POST["gender"];
		$phone = $_POST["phone"];
		
		$sql = mysql_query("update `UserInfo` set `Skill_1` = 'HTML :' + '$skill1',
												  `Skill_2` = 'CSS :' + '$skill2',
												  `Skill_3` = 'JavaScript :' + '$skill3',
												  `Skill_4` = 'PHP :' + '$skill4',
												  `Skill_5` = 'JQuery :' + '$skill5',
												  `D.O.B.` = '$dob',
												  `Gender` = '$gender',
												  `Phone` = '$phone',
												  `Profile Pic` = '$filepath'
											   where `Username` = '$login_session'",$connection);
			
		if($sql === TRUE)
		{
				$msg = "Profile updated successfully";
		}
			
		else
		{
			echo mysql_error($connection);
			$msg = "Something went wrong";
		}
		
		mysql_close($connection);
	}
	
	else
	{
		$msg = "All the fields are required";
	}
?>

  <!DOCTYPE html>
  <html>
<head>
	
	<link rel="stylesheet" 
		  href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link href = 'https://fonts.googleapis.com/css?family=Audiowide' 
		  rel = 'stylesheet'>
		  
	<link href = "1.css"
          rel = "stylesheet"
          type = "text/css">
	
	<link rel = "stylesheet" 
	      href = "https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
	
	<link rel = "stylesheet" 
		  href = "https://fonts.googleapis.com/css?family=Lato">
	
	<link href = "https://fonts.googleapis.com/css?family=Raleway" 
	      rel = "stylesheet">
	
	<meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href="w3.css">
   
</head>
<body>

	<div style = "margin-top : 51px;">
		
		<div class="w3-container 
				    w3-green">
			
			<h3>Welcome!</h3>
			
			<p>
				<i><?php echo "<b><u>".$login_session."</u></b>"; ?></i>
				
				<b id="logout"><a href="logout.php">Log Out</a></b>
			</p>
		</div>
	</div>
	
  <!DOCTYPE html>
  <html>
<head>
   
    <title>Profile</title>
   
    <meta charset="UTF-8">
    
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href="w3.css">
   
    <link rel="stylesheet" 
		  href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link href = 'https://fonts.googleapis.com/css?family=Audiowide' 
		  rel = 'stylesheet'>
		  
	<link href = "1.css"
          rel = "stylesheet"
          type = "text/css">
	
	<link rel = "stylesheet" 
	      href = "https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
	
	<link rel = "stylesheet" 
		  href = "https://fonts.googleapis.com/css?family=Lato">
	
	<link href = "https://fonts.googleapis.com/css?family=Raleway" 
	      rel = "stylesheet">

</head>
	
<body>

	<!-- Navbar -->
		<div style="position:fixed;
				    top:0;
					width:100%;
					z-index:99;">
			
			<ul>
				
			<li><a href="d_homepage.php">Home</a></li>
				
			<li><a href="d_contributionpage.php">Contribute</a></li>
			
			<li><a href="d_download.php">Download</a></li>
			
			<li><a href="d_suggestion.php">Suggestion</a></li>
				
			<li class="dropdown"><a href="javascript:void(0)" 
								    class="dropbtn">More</a>
				
				<div class="dropdown-content">
					
					<a href="complaints.php">Complaints</a>
					<a href="d_profile.php"
					   class = "dactive">Profile</a>
				</div>
			</li>				
		</ul>
	</div>	
		
	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;
				margin-top:0">
		
		
		<section class="w3-container"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						padding-top:4%;">
			
			<div class="w3-container 
			            w3-center 
						w3-allerta">
			
				<p class="w3-xxxlarge">Complete Your Profile!</p>
			</div>	
			
			<form name = "frmProfile" 
				  id = "frmProfile" 
				  method = "post" 
				  class = "frmProfile"
				  style="margin-top : 1%;
						 width : 100%;
						 float : right;
						 height : auto;"
				  enctype = "multipart/form-data"
				  action="<?php echo $_SERVER['PHP_SELF']; ?>">

				<div class="container"
					 style = "padding-top : 4%;">
					
					<div style = "float : left;">
						
						<?php 
							
							if($msg == "All the fileds are required")
							{
								echo "<div class = 'profileinfo'>
											
											<p>
												<strong>Info!</strong> 
												$msg
											</p>
									  </div>";
							}
							
							else if($msg == "Profile updated successfully")
							{
								echo "<div class = 'profilesuccess'>
											
											<p>
												<strong>Success!</strong> 
												$msg
											</p>
									  </div>";
							}
							
							else if($msg == "Something went wrong")
							{
								echo "<div class = 'profilefailure'>
											
											<p>
												<strong>Failure!</strong> 
												$msg
											</p>
									  </div>";
							}
						?>
					</div>
					
					<center>
							
						<div class = "profile-pic" 
							 style = "background-image: url('img_avatar2.png')" >

							<input id = "pupload" 
								   class = "file-upload__input" 
								   type = "file" 
								   name = "pupload">
										
							<i style = "font-size : 14px" 
							   class = "fa">&#xf030;</i>
      
							<label for = "pupload">
							
								<span style = "cursor : pointer;">Upload Image</span>
							</label>
									
						</div>
					</center>
					
					<div  style = "padding-top : 4%;">
					<label><b>Skill info(in percentage only):</b></label></div>
						
					<input type = "number" 
						   placeholder = "HTML" 
						   name = "Skill_1"
						   max = "100"
						   min = "0">
					
					<input type = "number" 
						   placeholder = "CSS" 
						   name = "Skill_2"
						   max = "100"
						   min = "0">
					
					<input type = "number" 
						   placeholder = "JavaScript" 
						   name = "Skill_3"
						   max = "100"
						   min = "0">
					
					<input type = "number" 
						   placeholder = "PHP" 
						   name = "Skill_4"
						   max = "100"
						   min = "0">
						   
					<input type = "number" 
						   placeholder = "JQuery" 
						   name = "Skill_5"
						   max = "100"
						   min = "0">
					
					<label><b>D.O.B.</b></label>
					<input type = "date" 
						   placeholder = "DD/MM/YYYY" 
						   name = "date1">

					<label><b>Gender</b></label>
						
					<div id = "holder">
	
						<div class = "button-holder"
							 style = "padding-top : 5px;">
									
							<input type = "radio" 
								   id = "gender-1" 
								   name = "gender" 
								   class = "regular-radio" 
								   value = "Male"
								   checked />
										
							<label for = "gender-1"
								   style = "float : left;"></label>
										
							<span style = "float : left;">Male &nbsp; &nbsp;</span>
							
							<input type = "radio" 
								   id = "gender-2" 
								   name = "gender" 
								   class = "regular-radio" 
								   value = "Female"
								   checked />
							
							<label for = "gender-2"
								   style = "float : left;"></label>
										
							<span style = "float : left;">Female &nbsp; &nbsp;</span>
							
							<input type = "radio" 
								   id = "gender-3" 
								   name = "gender" 
								   class = "regular-radio" 
								   value = "Other"
								   checked />
							
							<label for = "gender-3"
								   style = "float : left;"></label>
										
						    <span style = "float : left;">Other</span>
						</div>
					</div>
					
					<br>
					<br>
					<label><b>Phone no.</b></label>
					<input type = "text" 
						   placeholder = "9876543210" 
						   name = "phone"
						   class = "testtext"
						   maxlength = "15">
						
					<div class="clearfix">
						
						<button type = "submit"
							    name = "psubmit">Submit</button>
					</div>
				</div>
			</form>
		</section>
	
	<!-- End Page Content -->
	</div>

	<button onclick="topFunction()" 
			id="myBtn" 
			title="Go to top"><span>&and;</span></button>
	
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() 
		{
			scrollFunction()
		};

		function scrollFunction() 
		{
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
			{
				document.getElementById("myBtn").style.display = "block";
			}
	
			else 
			{
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() 
		{
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;	
		}
	</script>

	<!-- Footer -->
	<footer class="w3-container 
				   w3-padding-64 
				   w3-center 
				   w3-opacity 
				   w3-light-grey 
				   w3-xlarge">
		
	  <img src = "logo22.png"
	   width = "200px"
	   height = "100px"
	   hspace = "20px"
	   vspace = "20px">
					
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" 
									 target="_blank">w3c</a></p>
</footer>
</body>
  </html>
