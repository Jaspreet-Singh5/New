<?php
	
	include 'session.php';
?>

  <!DOCTYPE html>
  <html>
<head>
   
    <title>Read the guide</title>
   
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
				
			<li><a href="t_homepage.php"
				   class = "active">Home</a></li>
				
			<li><a href="t_contributionpage.php">Contribute</a></li>
			
			<li><a href="t_download.php">Download</a></li>
			
			<li><a href="t_suggestion.php">Suggestion</a></li>
				
			<li class="dropdown"><a href="javascript:void(0)" 
								    class="dropbtn">More</a>
				
				<div class="dropdown-content">
					
					<a href="t_complaint.php">Complaints</a>
					<a href="t_profile.php">Profile</a>
				</div>
			</li>				
		</ul>
	</div>	
	
	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;
				margin-top : 27px;
				margin-left : 0px;">
		
		<!-- teacher's community -->
		<section class="w3-container 
					    w3-center"
				 style="max-width: auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color: black;
						padding-bottom: 40px;
						padding-top : 20px;">
    
			<div class="w3-container 
			            w3-center 
						w3-allerta">
			
				<p class="w3-xxxlarge">Read The Guide</p>
			</div>
   
			
				<br>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">My Profie</p>
						</div>
						
						<br>
							<p class="mrgnless">
								It provides the other users an idea about your skills
								in different subjects.
							</p>
					</div>
				
				<br>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Contribute</p>
						</div>
						
						<br>
							<p class="mrgnless">
								It allows you to upload your files for future use.   
							</p>
					</div>
				
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Download</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								It is a place where you can download your files from
								any platform.
							</p>
					</div>
					
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Sugggestion</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Here you cangive your warmly welcomed suggestoins for 
								sharing them with other teachers. 
							</p>
					</div>
					
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Profile</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								It allows you to keep your profile up-to-date and to
								<b>Log out</b> your account. 
							</p>
					</div>
				
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Cpmplaints</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								It allows you to complaint regarding all the issues 
								that you have and to solve which we are here 24*7.
							</p>
					</div>
		</section>
    
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
		
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