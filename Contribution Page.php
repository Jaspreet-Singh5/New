 <!DOCTYPE html>
  <html>
<head>
   
    <title>Welcome!</title>
   
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

</head>
	
<body>

	<!-- Navbar -->
		<div style="position:fixed;
				    top:0;
					width:100%;
					z-index:99;">
			<ul>
				
				<li><a href="teacher-homepage.php"">Home</a></li>
				
				<li><a href="#news"
				       class="active">Contribute</a></li>
				
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
		<section class="w3-container 
					    w3-center"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color:black;
						padding-top:7%;">
			<img src="file.png"
				 alt="Documents only"
				 align="center"
				 width="9%"
				 height="10%">
				 
			<div style="border-radius:5px;background-color:#f2f2f2;padding:40px;
						margin-top:5%;
						margin-bottom:5%;">
		
				<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
					   method="post" 
					   enctype="multipart/form-data"
					   name="frm"
					   class="test">
			
					<div class="file-upload"
						 style="font-family: 'helvetica neue', 'arial', sans-serif;
								font-size: 24px;
								font-weight: bold;
								-webkit-font-smoothing: antialiased;
								text-align: center;
								width:100%;
								z-index:1;">
    
						<label for="upload" 
							   class="file-upload__label">Choose your files</label>
    
						<input id="upload" 
							   class="file-upload__input" 
							   type="file" 
							   name="file-upload">
					</div>
				
				</form>
			</div>
			
			<div style="border-radius:5px;background-color:#f2f2f2;padding:40px;
						margin-top:5%;
						margin-bottom:5%;
						text-align:left;">
		
				<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
					   method="post" 
					   enctype="multipart/form-data"
					   name="frm"
					   class="test">
					
					<label for="title"
						   id="none"
						   style="font-family: 'helvetica neue', 'arial', sans-serif;">
						<b>Save Changes</b>
					</label>
					<br>
					
					<input type="text"
						   name="title"
						   placeholder="Add files via upload with a title">
					<br>
					
					<textarea style="height:150px;
									 width:100%;"
							  placeholder="Add an optional extended description for getting an egde..."></textarea>
					<br>
					
					<input type="submit"
						   name="submit"
						   value="Upload"
						   class="buttonspecial button1"
						   style="width:150px;
								  display:inline-block;">
						   
					<a href="teacher-homepage.php">
						<input type="button"
							   name="cancelupload"
							   value="Cancel"
						       class="buttonspecial button2 buttonred"
						       style="height:52px;
								      display:inline-block;">
					</a>
					
				</form>
			</div
			
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
	<footer class="w3-container 
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

			
