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
				
	$science = $row["Skill_3"];
	$maths = $row["Skill_1"];
	$english = $row["Skill_2"];
	$sst = $row["Skill_4"];
	$gk = $row["Skill_5"];

	mysql_close($connection); // Closing Connection
?>

<?php 
	
		$msg = "";
		
		if(isset($_POST["submit"]))
		{
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
	
			// Selecting Database
			$db = mysql_select_db("TeacDev", $connection);
	
			$comment = $_POST["comment"];
			
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from UserInfo where Username = '$login_session'", $connection);
			
			$row = mysql_fetch_assoc($query);
	
			for($i = 1; $i<=25; $i++)
			{
				if(empty($row["Comment$i"]) == TRUE)
				{
					$sql = mysql_query("update `UserInfo` set `Comment$i` = '$comment'
														  where `Username` = '$login_session'",$connection);
			
					if($sql === TRUE)
					{
						$msg = "Comment posted successfully";
						
						break;
					}
				}	
			}
		
			mysql_close($connection);
		}
	
		else
		{
			$msg = "Something went wrong"."</b>";
		}
?>
	
  <!DOCTYPE html>
  <html>
<head>
   
    <title>Suggestions</title>
   
    <meta charset="UTF-8">
    
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href="w3.css">
   
    <link rel="stylesheet" 
		  href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link href="1.css"
          rel="stylesheet"
          type="text/css">
	
	<link rel = "stylesheet" 
		  href = "https://fonts.googleapis.com/css?family=Lato.css">
	
	<link rel="stylesheet" 
		  href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

</head>
	
<body>

	<!-- Navbar -->
	<div style="position:fixed;
			    top:0;
				width:100%;
				z-index:99;">
		
		<ul>
				
			<li><a href="t_homepage.php">Home</a></li>
				
			<li><a href="t_contributionpage.php">Contribute</a></li>
			
			<li><a href="t_download.php">Download</a></li>
			
			<li><a href="t_suggestion.php"
				   class = "active">Suggestion</a></li>
				
			<li class="dropdown"><a href="javascript:void(0)" 
								    class="dropbtn">More</a>
				
				<div class="dropdown-content">
					
					<a href="t_complaint.php">Complaints</a>
					<a href="t_profile.php">Profile</a>
				</div>
			</li>				
		</ul>
	</div>	
		
	<!-- Profile Nav-->
	<div class="sidenav"
		 style = "margin-top : 3.2%;">
			
		<!-- Profile -->
		<div class="w3-container"
			 style="max-width : auto;
					background : none; 
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
				
				<p style="padding-top:3%;"><b>SCIENCE</b></p>
					
				<div class="containerprofile1">
						
					<div class = "skills science"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $science."%";
							?>
						</b></div>
				</div>

				<p style="padding-top:3%;"><b>S.St.</b></p>
					
				<div class="containerprofile1">
						
					<div class = "skills sst"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $sst."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>ENGLISH</b></p>
				
				<div class="containerprofile1">
				
					<div class="skills english"
					     style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $english."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>GEN. KNOWLEDGE</b></p>
					
				<div class="containerprofile1">
						
					<div class="skills generalknowledge"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $gk."%";
							?>
						</b></div>
				</div>

				<p style = "margin-top : 14px;"><b>MATHS</b></p>
			
				<div class="containerprofile1">
				
					<div class="skills maths"
						 style = "font-size : 10px;
								  padding : 2px;">
						
						<b><?php
								
								echo $maths."%";
							?>
						</b></div>
				</div>
			</div>
			
			<style>
				
				.science 
				{
					width: <?php
								
								echo $science."%";
							?>; 
					background-color: #4CAF50;
				}
				
				.sst 
				{
					width: <?php
								
								echo $sst."%";
							?>; 
					background-color: #ffaa80;
				}

				.maths
				{
					width: <?php
								
								echo $maths."%";
							?>; 
					background-color: #2196F3;
				}

				.english
				{
					width: <?php
								
								echo $english."%";
							?>; 
					background-color: #f44336;
				}

				.generalknowledge 
				{
					width: <?php
								
								echo $gk."%";
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
		<section class="w3-container"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color:black;
						padding-top : 70px;">
			
			<div class="w3-container 
			            w3-center 
						w3-allerta">
			
				<p class="w3-xxxlarge">Give Your Suggestion!</p>
			</div>
			
			<div style = "float : left;">
						
				<?php 
					
					if($msg == "Comment posted successfully")
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
			
			<br>
			<br>
			
			<?php
						
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysql_connect("localhost", "root", "");
	
				// Selecting Database
				$db = mysql_select_db("TeacDev", $connection);
	
				// SQL query to fetch information of registerd users and finds user match.
				$query = mysql_query("select * from UserInfo where Profession = 'Teacher'", $connection);
			
				while($row = mysql_fetch_assoc($query)) 
				{
					for($i = 1; $i<=25; $i++)
					{
						if(!empty($row["Comment$i"]) == TRUE)
						{
							echo "<div class = 'containerchat'>
									<img src ='" . $row['Profile Pic'] .  
									  "' alt = 'Avatar' 
										 style = 'width:100%;
										 float : right;'>" .
									"<p>" . $row["Comment$i"] . "</p>
								  </div>";
						}	
					}
				}
				
				mysql_close($connection);
			?>
					
			<div style="border-radius:5px;background-color:#f2f2f2;padding:40px;
						margin-top:5%;
						margin-bottom:5%;">
		
				<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
					   method="post" 
					   enctype="multipart/form-data"
					   name="frm"
					   class="test">
			
					<label for="comment"
						   id="none"
						   style="font-family: 'helvetica neue', 'arial', sans-serif;">
							
						<b>Comment</b>
					</label>
				
					<br>
					
					<textarea style = "height:150px;
								       width:100%;"
							  name = "comment"
							  placeholder = "Write something solid....."></textarea>
						
					<br>
					
					<input type="submit"
					       name="submit"
						   value="Submit"
				           class="buttonspecial buttonwhite"
				           style="width:150px;
			    				  height : 52px;
								  display:inline-block;">
						   
					<input type="reset"
				     	   name="cancelupload"
						   value="Cancel"
					       class="buttonspecial button2 buttonred"
					       style="height:52px;
							      display:inlin	e-block;">
				</form>
			</div>
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
	<footer class="w3-containerchat 
				   w3-padding-64 
				   w3-center 
				   w3-opacity 
				   w3-light-grey 
				   w3-xlarge"		
			style = "padding-left : 250px;">
	
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

			
