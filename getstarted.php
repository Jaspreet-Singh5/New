<?php
	include 'loginscript.php';
?>

<?php
	
	$msg = "";
	
	if(isset($_POST["Send"]))
	{
		$name = $_POST["Name"];
		$message = $_POST["Message"];
		$email  = $_POST["Email"];
	
		$servername = "localhost";
		$user = "root";
		$password = "";
		$dbname = "TeacDev";
	
		$conn = new mysqli($servername,$user,$password,$dbname);
	
		if($conn->connect_error)
			die("Server Not Found " . $conn->connect_error);
		
		$sql = ("INSERT INTO `TeacDev`.`Contact us` (`Name` , `Message` , `Email`)
							   
				VALUES ('$name' , '$message' , '$email')");
			
		if($conn->query($sql) === TRUE)
		{
			$msg = "Note submitted successfully";
		}
			
		else
		{
			$msg = "Something went wrong";
		}
	
		$conn->close();
	}
?>


  <!DOCTYPE html>
  <html>
<head>
   
    <title>Get started</title>
   
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
				
				<li><a href="getstarted.php"
				       class="active">Get Started</a></li>
				
				<li class="dropdown"><a href="javascript:void(0)" 
									    class="dropbtn">More</a>
				
					<div class="dropdown-content">
					
						<a href="#contact">Contact us</a>
						<a href="aboutus.php">About us</a>
					</div>
				</li>
			</ul>
		</div>	

	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;
				margin-top : 27px">
		
		<!-- teacher's community -->
		<section class="w3-container 
					    w3-center"
				 style="max-width: auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color: black;
						padding-bottom: 40px;
						padding-top : 20px;">
    
			<h2 class="w3-wide">Teacher's Community</h2>
   
			<p class="w3-opacity"><i>For Those Who Shape Us</i></p>
  
			<p class="w3-justify">
				We have created a fully free to join community particularly for teachers in order to 
                allow the exchange of ideas, suggestions, eduction-based material
                and improvement & devlopement of education system along with 
                the developement of teachers indvidually. 
                 
			    <br/>We will be always ready to help you and hope 
                     that you will find it useful.
			</p>		 
				
				<br>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Material security</p>
						</div>
						
						<br>
							<p class="mrgnless">
								Prevent problems before they happen. Required status checks protect your 
					        	work and help you maintain a high standard for your work.
							</p>
					</div>
				
				<br>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Suggest the changes that you want</p>
						</div>
						
						<br>
							<p class="mrgnless">
								Now, give your suggestions openly whether they are regarding the way of 
								teaching or to improve the ancient education system. 
							</p>
					</div>
				
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Hosted where you need it</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Securely and reliably host your work on TeacDev.com on any platform.
							</p>
					</div>
					
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Downloaded where you need it</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Securely and reliably download your work on TeacDev.com on any platform.
							</p>
					</div>
					
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Complaint regarding any serious issue</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Never hesitate to complaint about any issue as it may help us to improve
							    your user experience or to serve you better.
							</p>
					</div>
				
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">User friendly</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Very easy to use and also provides a high standard interface.
							</p>
					</div>
		</section>
    
		<section class="start">
      
		<div style = "margin-top : 150px;">
           
		    <form action = "register.php"
                  method = "post"
				  id = "regform"
                  name = "frm1"
				  style = "border : 7px solid #f1f1f1;
						   width : 80%;
						   margin-left : 10%;"
				  enctype = "multipart/form-data">
                    
                <div class = "container"
					 style = "margin-top : -35px;">
                        
                    <h1>Register:</h1>
							
					<!-- One "tab" for each step in the form: -->
					<div class="tab">Name:
    
						<p>
							<input placeholder = "First name..."
								   type = "text"
								   oninput = "this.className = ''" 
								   name = "fname">
						</p>
							
						<p>
							<input placeholder = "Last name..." 
								   oninput = "this.className = ''" 
								   name = "lname"
								   type ="text"
								   style = "margin-top: 15px;">
						</p>
					</div>
  
					<div class="tab">Contact Info:
						
						<p>
							<input placeholder = "E-mail..."
							       type = "text"
								   id = "email"
							       oninput = "this.className = ''" 
								   name = "email">
						</p>
				
					</div>
						
					<div class="tab">Security Questions:
    
						<p>
								
							<label for = "Ques1">Ques1</label>
						
							<select id = "secques"
									name="Ques1">
									
								<option>Your first car
								<option>Your first pet
								<option>Your first friend
								<option>Your first trip
								<option>Your first movie
							</select>
							
							<input placeholder = "Ans1" 
								   oninput = "this.className = ''" 
								   name = "Ans1"
								   type ="text">
						</p>
						    
						<p>
								
							<label for = "Ques2"
								   style = "margin-top: 15px;">Ques2</label>
							
							<select id = "secques"
								    name="Ques2">
									
								<option>Where do you born?
								<option>Where do you work?
								<option>Where do you live?
								<option>Where do you study?
								<option>Where do you go at vacations?
							</select>
							
							<input placeholder = "Ans2" 
								   oninput = "this.className = ''" 
								   name = "Ans2"
								   type ="text">
						</p>
							
						<p>
								
							<label for = "Ques3"
								   style = "margin-top: 15px;">Ques3</label>
							
							<input placeholder = "Ques3" 
								   oninput = "this.className = ''" 
								   type ="text"
								   style = "margin-top: 15px;"
								   name="Ques3">
							
							<input placeholder = "Ans3" 
								   oninput = "this.className = ''" 
								   name = "Ans3"
								   type ="text">
						</p>
					</div>
  
					<div class="tab">Login Info:
						
						<p>
							<input placeholder = "Username..." 
								   oninput = "this.className = ''" 
								   name = "uname"
								   type = "text">
						</p>
		
						<p><input placeholder = "Password..." 
						          oninput = "this.className = ''" 
								  name = "pword"
								  id = "pword"
								  type = "password"
								  style = "margin-top: 15px;">
								
							<div style = "float : right;">
								
								<i class = "fa fa-eye"
								   id = "seye1" 
								   style = "font-size : 24px;"
								   onclick = "show1()"></i>
							</div>
								
							<br>
							<br>
								
						</p>
							
						<script>
								
							function show1() 
							{
								var x = document.getElementById("pword");
								
								if (x.type === "password") 
								{
									x.type = "text";
								} 	
									
								else 
								{
									x.type = "password";
								}
							}
						</script>
							
						<p>
		
							<div id = "holder">
	
								<div class = "button-holder"
									 style = "padding-top : 5px;">
									
									<input type = "radio" 
								    	   id = "professn-1" 
										   name = "professn" 
										   class = "regular-radio" 
										   value = "Teacher"
										   checked />
										
									<label for = "professn-1"
										   style = "float : left;"></label>
										
									<span style = "float : left;">Teacher &nbsp; &nbsp;</span>
									
									<input type = "radio" 
										   id = "professn-2" 
										   name = "professn"
										   value = "Developer"
										   class = "regular-radio"/>
										
									<label for = "professn-2"
										   style = "float : left;"></label>
									
									<span style = "float : left;">Developer</span><br />
								</div>
							</div>
						</p>
					</div>
						
					<div style="overflow:auto;">
							
						<div style="float: right;" 
							 class="regbtn">
								
							<button type="button" 
							        id="prevBtn"
									onclick="nextPrev(-1)">Previous
							</button>
								
							<button type="button" 
							        id="nextBtn" 
									name="nextBtn"
									onclick="nextPrev(1)">Next
							</button>
						</div>
					</div>
 
					<!-- Circles which indicates the steps of the form: -->
					<div style="text-align:center;
							    margin-top:40px;">
							
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
					</div>
				</div>
			</form>
		</div>
			
		<script>	
		
			var currentTab = 0; 
					
			// Current tab is set to be the first tab (0)
			showTab(currentTab); 
					
			// Display the crurrent tab
			function showTab(n) 
			{
				// This function will display the specified tab of the form...
				var x = document.getElementsByClassName("tab");
  
				x[n].style.display = "block";
						
				//... and fix the Previous/Next buttons:
				if (n == 0) 
				{
					document.getElementById("prevBtn").style.display = "none";
				} 
						
				else
				{
					document.getElementById("prevBtn").style.display = "inline";
				}
 
				if (n == (x.length - 1)) 
				{
					document.getElementById("nextBtn").innerHTML = "Submit";
				}
					
				else 
				{
					document.getElementById("nextBtn").innerHTML = "Next";
				}
			
				//... and run a function that will display the correct step indicator:
				fixStepIndicator(n)
			}

			function nextPrev(n) 
			{
				// This function will figure out which tab to display
				var x = document.getElementsByClassName("tab");
  
				// Exit the function if any field in the current tab is invalid:
				if (n == 1 && !validateForm()) 
					return false;
						
				// Hide the current tab:
				x[currentTab].style.display = "none";
 	
				// Increase or decrease the current tab by 1:
				currentTab = currentTab + n;
	
				// if you have reached the end of the form...
				if (currentTab >= x.length) 
				{
					// ... the form gets submitted:
					document.getElementById("regform").submit();
					return false;
				}
					
				// Otherwise, display the correct tab:
				showTab(currentTab);
			}

			function validateForm() 
			{
				// This function deals with validation of the form fields
				var x, y, i, valid = true;
					
				x = document.getElementsByClassName("tab");
						
				y = x[currentTab].getElementsByTagName("input");
							
				// A loop that checks every input field in the current tab:
				for (i = 0; i < y.length; i++)
				{
					// If a field is empty...
					if (y[i].value == "") 
					{
						// add an "invalid" class to the field:
						y[i].className += " invalid";
								
						// and set the current valid status to false
						valid = false;
					}
						
					if(currentTab == 1)
					{
						var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
						
						if(document.frm1.email.value.match(mailformat))  
						{  
							valid = true;  
						}  
						
						else  
						{  
							// add an "invalid" class to the field:
							y[i].className += " invalid";
							
							// and set the current valid status to false
							valid = false;
						} 
					}
						
					if(currentTab == 3)
					{
						var passw=  /^[A-Za-z]\w{7,14}$/;  
						
						if(document.frm1.pword.value.match(passw))  
						{  
							valid = true;  
						}  
						
						else  
						{  
							alert("Your password should contain 7 to 16 characters which should include only characters, numeric digits, underscore and first character must be a letter");
								
							// add an "invalid" class to the field:
							y[1].className += " invalid";
								
							// and set the current valid status to false
							valid = false;
						} 
					}
				}
					
				// If the valid status is true, mark the step as finished and valid:
				if (valid) 
				{
					document.getElementsByClassName("step")[currentTab].className += " finish";
				}
						
				return valid; // return the valid status
			}
					
					
			function fixStepIndicator(n) 
			{
				// This function removes the "active" class of all steps...
				var i, x = document.getElementsByClassName("step");
 
				for (i = 0; i < x.length; i++) 
				{
					x[i].className = x[i].className.replace(" active", "");
				}
 
				//... and adds the "active" class on the current step:
				x[n].className += " active";
			}
		</script>
				
		<center>
			<div style = "font-family: 'Audiowide';
						  font-size: 50px;
						  margin-top : 30px;">OR
			</div>
		</center>
            
           
        <div style = "margin-top : 20px;">
  
            <form  action = "loginscript.php"
                   method = "post"
                   name = "frm2"
				   style = "border : 7px solid #f1f1f1;
						    width : 80%;
							height : 450px;
							margin-left : 10%;">
                        
            	<div class = "container">
                            
                    <h1>Login:</h1>
							
					<label><b>Username</b></label>
                     
					<input type = "text" 
						   placeholder = "Enter Username" 
						   name = "username"
						   id = "name"
                           required>

                    <label><b>Password</b></label>
                      
					<input type = "password" 
                           placeholder = "Enter Password" 
                           name = "password"
						   id = "password"
                           required>
							
					<div style = "float : right;">
								
						<i class = "fa fa-eye"
						   style = "font-size : 24px;"
					       id = "seye2" 
						   onclick = "show2()"></i>
					</div>
								
					<br>
					<br>
								
					<script>
								
						function show2() 
						{
							var x = document.getElementById("password");
								
							if (x.type === "password") 
							{
								x.type = "text";
							} 	
									
							else 
							{
								x.type = "password";
							}
						}
					</script>
							
					<button type = "submit"
					        name = "login"
						    id = "login">Login
                    </button>
						
					<div id = "holder"
					     style = "padding-top : 10px;">
	
						<div class = "button-holder">
									
							<input type = "radio" 
								   id = "radio-1-1" 
								   name = "profession" 
								   class = "regular-radio" 
							       value = "Teacher"
							       checked />
										
							<label for = "radio-1-1"
								   style = "float : left;"></label>
										
							<span style = "float : left;">Teacher &nbsp; &nbsp;</span>
									
							<input type = "radio" 
								   id = "radio-1-2" 
							       name = "profession"
								   value = "Devloper"
							       class = "regular-radio"/>
										
							<label for = "radio-1-2"
							       style = "float : left;"></label>
									
							<span style = "float : left;">Developer</span><br />
						</div>
					</div>
					
					<span class="psw"><a href="forgot.php">Forgot password?</a>
					</span>
				</div>	
			</form>
        </div>
    </section>
    
    <!-- developer's community -->
    <section class="w3-container w3-center"
             style="max-width:auto;
                    background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
					color: black;
					padding-bottom: 3%;
					margin-top : 4%; ">
    
        <h2 class="w3-wide">Developer's Community</h2>
   
        <p class="w3-opacity"><i>For Those Who Make Imagination-Reality</i></p>
  
        <p class="w3-justify">We have created a fully free to join community particularly for developers in order to 
                          allow the exchange of files, projects, codes
                          and allowance for team-work along with 
                          the lifetime & unlimited storage of files. 
                          
						  <br/>We will be always ready to help you and hope 
                          that you will find it useful.</p>
						  
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
										    font-effect-brick-sign">
							
									<p class="w3-xlarge">Code security</p>
								</div>
									
								<BR>
									<p class="mrgnless">Prevent problems before they happen. Required status checks protect 
														your work and help you maintain a high standard for your code.
									</p>
							</div>		
									
						<br>
						
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Suggest the changes that you want</p>
								</div>
						
								<br>
									
									<p class="mrgnless">
										Now, give your suggestions openly whether they are regarding the way of 
										teaching or to improve the ancient education system. 
									</p>
							</div>	
						
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Hosted where you need it</p>
								</div>
								
								<BR>
									<p class="mrgnless">Securely and reliably host your work on TeacDev.com on any platform.
									</p>
							</div>
							
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Downloaded where you need it</p>
								</div>	
								
								<BR>
									<p class="mrgnless">Securely and reliably download your work on TeacDev.com on any platform.
									</p>
							</div>
						
						<BR>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Complaint regarding any serious issue</p>
								</div>
						
								<BR>
								
									<p class="mrgnless">
										Never hesitate to complaint about any issue as it may help us to improve
										your user experience or to serve you better.
									</p>
							</div>
				
						<BR>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">User friendly</p>
								</div>
						
								<BR>
									
									<p class="mrgnless">
										Very easy to use and also provides a high standard interface.
									</p>
							</div>
					
	</section>
	
	<div style = "float : left;">
						
				<?php 
							
					if($msg == "Something went wrong")
						{
						echo "<div class = 'profilefailure'>
								
								<p>
										<strong>Info!</strong> 
												$msg
											</p>
									  </div>";
							}
							
							else if($msg == "Note submitted successfully")
							{
								echo "<div class = 'profilesuccess'>
											
											<p>
												<strong>Success!</strong> 
												$msg
											</p>
									  </div>";
							}
							
						?>
					</div>
					
	<!-- The Contact Section -->
	<div class="w3-container 
		        w3-content 
				w3-padding-64" 
		 style="max-width:800px" 
		 id="contact">
		
		<h2 class="w3-wide 
				   w3-center">CONTACT</h2>
 
		<p class="w3-opacity 
				  w3-center">
			<i>User! Drop a note</i>
		</p>
		
		<div class="w3-row 
				    w3-padding-32">
			
			<div class="w3-col m6 
						w3-large 
						w3-margin-bottom">
				
				<i class="fa fa-map-marker" 
				   style="width:30px"></i> Punjab, IND
				   
				<br>
				
				<i class="fa fa-phone"
				   style="width:30px"></i> Phone: +91 9646507986
				
				<br>
				
				<i class="fa fa-envelope" 
				   style="width:30px"> </i> Email: j.jaspreetmahu@gmail.com
				  
				<br>
			</div>
		
			<div class="w3-col m6">
			
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
					  enctype = "multipart/form-data"
					  method = "post">
				
					<div class="w3-row-padding" 
						 style="margin:0 -16px 8px -16px">
				
						<div class="w3-half">
					
							<input class="w3-input 
							    		  w3-border" 
								   type="text" 
								   placeholder="Name" 
								   required 
								   name = "Name">
						</div>
				
						<div class="w3-half">
					
							<input class="w3-input 
										  w3-border" 
								   type="email" 
								   placeholder="Email" 
								   required 
								   name="Email">
						</div>
					</div>
				
					<input class="w3-input 
								  w3-border" 
						   type="text" 
						   placeholder="Message" 
						   required 
						   name="Message">
				
					<button class="w3-button 
							       w3-black 
							       w3-section 
							       w3-right" 
							type="submit"
							name = "Send">SEND</button>
				</form>
			</div>
		</div>
  </div>
  
 
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