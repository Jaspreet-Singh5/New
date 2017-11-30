<?php
	
	include 'session.php';
	
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
			
	// Selecting Database	
	$db = mysql_select_db("TeacDev", $connection);
			
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from UserInfo where Username = '$login_session'", $connection);
			
	$rows = mysql_num_rows($query);
				
	$row = mysql_fetch_assoc($query);
				
	$html = $row["Skill_1"];
	$css = $row["Skill_2"];
	$javascript = $row["Skill_3"];
	$php = $row["Skill_4"];
	$jquery = $row["Skill_5"];
	
	mysql_close($connection); // Closing Connection
?>
  
  <!DOCTYPE html>
  <html>
<head>
   
    <title>Welcome!</title>
   
    <meta charset = "UTF-8">
    
    <meta name = "viewport" 
          content = "width=device-width, initial-scale=1">
   
    <link rel = "stylesheet" 
          href = "w3.css">

    <link rel = "stylesheet" 
		  href = "font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link href = "1.css"
          rel = "stylesheet"
          type = "text/css">
	
	<link rel = "stylesheet" 
		  href = "https://fonts.googleapis.com/css?family=Lato.css">

</head>
	
<body>

	<!-- Navbar -->
	<div style="position:fixed;
			    top:0;
				width:100%;
				z-index:99;">
		
		<ul>
				
			<li><a href="d_homepage.php"
				   class = "active">Home</a></li>
				
			<li><a href="d_contributionpage.php">Contribute</a></li>
			
			<li><a href="d_download.php">Download</a></li>
			
			<li><a href="d_suggestion.php">Suggestion</a></li>
				
			<li class="dropdown"><a href="javascript:void(0)" 
								    class="dropbtn">More</a>
				
				<div class="dropdown-content">
					
					<a href="d_complaint.php">Complaints</a>
					<a href="d_profile.php">Profile</a>
				</div>
			</li>				
		</ul>
	</div>	
		
	<!-- Profile Nav-->
	<div class="sidenav"
		 style = "margin-top : 3.2%;">
			
		<!-- Profile -->
		<div class="w3-container"
			 style="max-width:auto;
					background:none; 
					padding-top : 4px;">
			
			<h2 style = "text-align : center;
						 font-family: 'Lato', sans-serif;
						 color: #818181;
						 text-decoration : underline;
						 text-decoration-style : double;">My Profile</h2>
			
			<div class = "card">
			
				<?php
					
					// Establishing Connection with Server by passing server_name, user_id and password as a parameter
					$connection = mysql_connect("localhost", "root", "");
			
					// Selecting Database	
					$db = mysql_select_db("TeacDev", $connection);
			
					// SQL query to fetch information of registerd users and finds user match.
					$query = mysql_query("select * from UserInfo where Username = '$login_session'", $connection);
			
					$row = mysql_fetch_assoc($query);
					
					echo "<img src = '". $row["Profile Pic"].  
						    "' alt = 'Avatar' 
					           style = 'width : 105px;
									    height : 100px;
									    margin-left : -27px;'>";
				?>
			
				<div class="containerprofile"
					 style = "font-size : 12px;
							  width : 105px;
							  margin-left : -27px;">
						
					<p style = "margin-left : -27px;">
						<b><?php 
								echo $login_session;
						   ?></b> 
					</p>
				</div>
			</div>
			
			<div class = "stats"
				 style = "font-family: 'Lato', sans-serif;
						  color: #818181;
						  margin-top : 15px;">
				
				<p style="padding-top:3%;"><b>HTML</b></p>
					
				<div class="containerprofile1">
						
					<div class = "skills science"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $html."%";
							?>
						</b></div>
				</div>

				<p style="padding-top:3%;"><b>PHP</b></p>
					
				<div class="containerprofile1">
						
					<div class = "skills sst"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $php."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>JavaScript</b></p>
				
				<div class="containerprofile1">
				
					<div class="skills english"
					     style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $javascript."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>JQuery</b></p>
					
				<div class="containerprofile1">
						
					<div class="skills generalknowledge"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $jquery."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>CSS</b></p>
			
				<div class="containerprofile1">
				
					<div class="skills maths"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $css."%";
							?>
						</b></div>
				</div>
			</div>
			
			<style>
				
				.science
				{
					width: <?php
								
								echo $html."%";
							?>; 
					background-color: #4CAF50;
				}
				
				.sst 
				{
					width: <?php
								
								echo $php."%";
							?>; 
					background-color: #ffaa80;
				}

				.maths
				{
					width: <?php
								
								echo $css."%";
							?>; 
					background-color: #2196F3;
				}

				.english
				{
					width: <?php
								
								echo $javascript."%";
							?>; 
					background-color: #f44336;
				}

				.generalknowledge 
				{
					width: <?php
								
								echo $jquery."%";
							?>; 
					background-color: #808080;
				}
			</style>
		</div>
	</div>

	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;
				margin-left : 200px;">
		
		<!-- Intro -->
		<section class="w3-container 
					    w3-center"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color:black;
						padding-top:7%;
						margin-top:3.2%;
						margin-bottom:5%;">
    
			<h2 class="w3-wide">Learn TeacDev without any code!</h2>
   
			<p class="w3-opacity"><i>Using the Helping Hand guide, you’ll create a repository
									 and write comments</i></p>
  
			<a href = "d_guide.php">
				<button class="buttonspecial button1">
					Read the guide
				</button>
			</a>
			
			<br>
			<br>
			<br>
			
			<center>
			
				<object>
				
					<param name="movie" 
						   value="slider.swf">
   
					<embed src="slider.swf"
						   width = "624"
						   height = "344">
					</embed>
				</object>
			</center>
		</section>
		
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
			   w3-xlarge"
		style = "margin-top : -71px;
				 padding-left : 250px;">
		
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