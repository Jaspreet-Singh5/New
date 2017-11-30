 <!DOCTYPE html>
  <html>
<head>
   
    <title>Discussions</title>
   
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
	
	<link rel="stylesheet" 
		  href="https://fonts.googleapis.com/css?family=Lato">

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
				
				<li><a href="teacher-homepage.php">Home</a></li>
				
				<li><a href="#news">Contribute</a></li>
				
				<li><a href="#discussion"
				       class="active">Discussion</a></li>
				
				<li class="dropdown"><a href="javascript:void(0)" 
									    class="dropbtn">Dropdown</a>
				
					<div class="dropdown-content">
					
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</li>
				
				<li style="float:right;"><input type="search" 
										        name="search"
											    id="search"
												placeholder="Search.."></li>
		   </ul>
		</div>		
				
	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;">
		
		<!-- Intro -->
		<section class="w3-container"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color:black;
						padding-top:4%;">
			
			<div class="w3-container 
			            w3-center 
						w3-allerta">
			
				<p class="w3-xxxlarge">Join Discussions now!</p>
			</div>	
				
			<div class="containerchat">
					
				<img src="bandmember.jpg" 
				     alt="Avatar" 
					 style="width:100%;">
	
				<p>I think english should be excluded from the education system.</p>
					
				<span class="time-right">11:00</span>
			</div>

			<div class="containerchat darker">
					
				<img src="avatar_g2.jpg" 
					 alt="Avatar" 
					 class="right" 
					 style="width:100%;">

				<p>No, It shouldn't be.</p>
	
				<span class="time-left">11:01</span>
			</div>

			<div class="containerchat">
					
				<img src="bandmember.jpg" 
					 alt="Avatar" 
					 style="width:100%;">
  
				<p>But why?</p>
				
				<span class="time-right">11:02</span>
			</div>

			<div class="containerchat darker">
					
				<img src="avatar_g2.jpg" 
				     alt="Avatar"
					 class="right"
					 style="width:100%;">
					
				<p>Because it's an international language.</p>
				
				<span class="time-left">11:05</span>
			</div>
		</section>
	</div>
	
	
	<button onclick="topFunction()" 
			id="myBtn" 
			title="Go to top"><span>&#187;</span></button>
	
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
				   w3-xlarge">
  
		<i class="fa fa-facebook-official w3-hover-opacity"></i>
		<i class="fa fa-instagram w3-hover-opacity"></i>
		<i class="fa fa-snapchat w3-hover-opacity"></i>
		<i class="fa fa-pinterest-p w3-hover-opacity"></i>
		<i class="fa fa-twitter w3-hover-opacity"></i>
		<i class="fa fa-linkedin w3-hover-opacity"></i>
		
		<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SDMS</a></p>
	</footer>
	
</body>
  </html>

			
