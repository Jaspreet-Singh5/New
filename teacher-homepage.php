  <!DOCTYPE html>
  <html>
<head>
   
    <title>Welcome!</title>
   
    <meta charset="UTF-8">
    
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href = "w3.css">

    <link rel="stylesheet" 
		  href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link href="1.css"
          rel="stylesheet"
          type="text/css">
	
	<link rel="stylesheet" 
		  href="https://fonts.googleapis.com/css?family=Lato.css">

</head>
	
<body>

	<!-- Navbar -->
		<div style="position:fixed;
				    top:0;
					width:100%;
					z-index:99;">
			<ul>
				
				<li><a href="#home"
					   class="active">Home</a></li>
				
				<li><a href="#news">News</a></li>
				
				<li class="dropdown"><a href="javascript:void(0)" 
									    class="dropbtn">Dropdown</a>
				
					<div class="dropdown-content">
					
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</li>
				
				<input type="search" 
					   name="search"
					   id="search"
					   placeholder="Search..">
		   </ul>
		</div>		
				
	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;">
		
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
  
			<button class="buttonspecial button1">Read the guide</button>
			<button class="buttonspecial button2">Start a project</button>
		
			<div class="slideshow-container"
				 style="z:index:1;">

				<div class="mySlides fade">
	
					<div class="numbertext">1 / 3</div>
						
						<img src="img_nature_wide.jpg" 
						     style="width:100%">
							
							<div class="text">Caption Text</div>
				</div>

				<div class="mySlides fade">
					
					<div class="numbertext">2 / 3</div>
	
						<img src="img_fjords_wide.jpg" 
							 style="width:100%">
							
							<div class="text">Caption Two</div>
				</div>

				<div class="mySlides fade">
	
					<div class="numbertext">3 / 3</div>
 
						<img src="img_mountains_wide.jpg" 
							 style="width:100%">
  
						<div class="text">Caption Three</div>
				</div>

			</div>

			<br>

			<div style="text-align:center">
  
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>

			<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() 
				{
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					
					for (i = 0; i < slides.length; i++) 
					{
						slides[i].style.display = "none";  
					}
				
					slideIndex++;
  
					if (slideIndex > slides.length) 
					{
						slideIndex = 1
					}    
    
					for (i = 0; i < dots.length; i++) 
					{
						dots[i].className = dots[i].className.replace(" active1", "");
					}
    
					slides[slideIndex-1].style.display = "block";  
    
					dots[slideIndex-1].className += " active1";
    
					setTimeout(showSlides, 2000); // Change image every 2 seconds
				}
			</script>
		</section>
		
		<!-- Profile -->
		<section class="w3-container 
					    w3-center"
				 style="max-width:auto;
						background:none; 
						color:black;
						padding-top:4%;">
			
			<div class="card">
			
				<img src="img_avatar2.png" alt="Avatar" style="width:100%">
				
					<div class="container">
						
						<h4><b>Jane Doe</b></h4> 
		
						<p>B.A.</p> 
					</div>
			</div>
			
			<div class="stats">
				
				<p style="padding-top:3%;">SCIENCE</p>
					<div class="container1">
						<div class="skills science">90%</div>
					</div>

				<p>ENGLISH</p>
					<div class="container1">
						<div class="skills english">80%</div>
					</div>

				<p>GENERAL KNOWLEDGE</p>
					<div class="container1">
						<div class="skills generalknowledge">65%</div>
					</div>

				<p>MATHS</p>
					<div class="container1">
						<div class="skills maths">60%</div>
					</div>
			</div>	
			
			<iframe src="to-do.php"
					style="margin-top:5%;
						   width:100%;
						   height:417px;
						   border:none;
						   overflow:hidden;
						   border-radius:5px 5px;">
				<p>Your browser does not support iframes.</p>
			</iframe>
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


</body>
</html>