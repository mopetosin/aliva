
<?php include 'head.php';?>



	

<body class="bglight loadmap">

<!-- start preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- end preloader -->

<!-- THEMES PREVIEW -->
<?php include 'tmprev.php';?>

<!-- Navigation -->
<div ID="navoffset" class="secpage shadow-off bgwhite">
	
	<div class="h100">
	<div class="top-fold h100">
		<div class="relative h100">
			<div class="logo-fold valign2 mt15"><a href="index.php"><img src="images/spacer.png" class="dark" alt=""/></a></div>
		</div>
	</div>
</div>

	<!-- SEARCH -->	
	<div class="fwsearch">
		<div class="size30"><span class="escape">Press [ esc ] or close</span><a href="#" class="closesearch">+</a></div>
		
		<div class="csearch container">
			<input type="email" class="form-control fwsearchFfield" placeholder="Search keyword">
			<button type="submit" class="btn fwsearchfieldbtn"><i class="ti-search"></i></button>
		</div>
		
	</div>
</div>
<!-- End of Navigation -->		

<div class="bgwhite space20 relative z20"></div>

<div class="bgdarkgrey bordertopbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Student Registration</h3>
		<div class="pt10 breadcrumbs">
			<a href="#"><span class="ti-home"></span></a> <i>/</i>
			<a href="index.php">Course Registration</a>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>




<!-- SECTION CONTACT -->
<div class="bgwhite">
	<div class="container sspacing-title-button">
		<div class="col-md-4">
			<div class="space30"></div>
			<span class="fontproximabold cdark caps"> Company Details</span>
			<div class="divider mtb20"></div>
			
			<strong class="fontproximabold cdark size18">Acada Technologies</strong>
			<p class="cdark">
				32, Shitta Bay Street<br/>
				Ipaja, Lagos<br/>
			</p>
			<div class="divider mtb20"></div>
			<strong class="fontproximabold cdark">Email</strong>
			<p>
				<span class="ti-email mr10"></span>  
				<a href="mailto:hello@avision.com">contact@acada.com</a>
			</p>
			<div class="divider mtb20"></div>
			<strong class="fontproximabold cdark">Customer Support</strong>
			<p>
				<span class="ti-mobile mr10"></span>
				<span class="cdark">(234) 8060311836</span>
			</p>


		</div>
		<form method = "post" action = "<?php $_PHP_SELF ?>" onsubmit = "return(validate());">
		<div class="col-md-8">
				<?php
				if(isset($_POST['save'])) {
					$servername = "localhost";
					$database = "id14362101_lms";
					$username = "id14362101_mopetosin";
					$password = "TEmitope11..";
					//$database = "lms";
					//$username = "root";
					//$password = "";
					$matric_no = addslashes ($_POST['matric_no']);
					$student_name = addslashes ($_POST['student_name']);
					$faculty = addslashes ($_POST['faculty']);
					$department = addslashes ($_POST['department']);
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					//echo "Connected successfully ";
					 ?>
				<?php
					$sql = "INSERT INTO student (matric_no, student_name, faculty, department) VALUES ('$matric_no', '$student_name', '$faculty','$department')";
					if (mysqli_query($conn, $sql)) {

							echo'<div class="col-md-12">';
								echo'<h4 class="h2col">New Student added successfully!</h4>';
							echo'</div>';

					     // echo "New record created successfully";
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				?>
				<p class="size30 ml10 mb10 cdark pb20">Register a Student</p>
				
				<div class="col-md-12">
					<input type="text" class="form-control formlarge" placeholder="Name" name ="student_name" required = "required">
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control formlarge mt17" placeholder="Matric Number" name ="matric_no" required = "required">
				</div>
				
				<div class="col-md-6">
					<select id = "myList" name = "faculty" class="form-control formlarge mt17" required = "required">
		               <option value = "">Select your Faculty</option>
		               <option value = "Science">Science</option>
		               <option value = "Social Science">Social Science</option>
		               <option value = "Education">Education</option>
		             </select>
				</div>
				
				<div class="col-md-6">
					<select id = "myList2" name = "department" class="form-control formlarge mt17" required = "required">
		               <option value = "">Select your Department</option>
		               <option value = "Computer Science">Computer Science</option>
		               <option value = "Geology">Geology</option>
		               <option value = "Geography">Geography</option>
		               <option value = "Computer Education">Computer Education</option>
		               <option value = "Guidance and councelling">Guidance and councelling</option>
		               <option value = "Physics Education">Physics Education</option>
		               <option value = "Physics">Physics</option>
		               <option value = "Chemisrty">Chemisrty</option>
		               <option value = "Biology">Biology</option>
		               <option value = "Political Science">Political Science</option>
		               <option value = "Sociolgy">Sociolgy</option>
		               <option value = "Economics">Economics</option>
		             </select>
				</div>
				<div class="col-md-6">

				</div>

				
				<div class="clearfix"></div>
				<button type="submit" class="btn btnwhitebig btn-default caps ml10 mt30" name ="save"><i class="icon-mail"></i> Save</button>
				<button type="submit" class="btn btnwhitebig btn-default caps ml10 mt30"><a href="index.php" class="hrefcol"> Course Registration</button>
				
				
				<div class="clearfix"></div>
				
		</div>
	</form>
	</div>
</div>
<!-- END OF Course registration -->

<!-- FOOTER -->
<div class="footer">
	
	
	<div class="clearfix"></div>
	<div class="separator100dark"></div>
	
	<div class="container ptb30 cwhite">
		<a href="#"><img src="images/avision4.png" class="w90" alt="avision logo" /></a>
		<div class="socialicons right">
			<ul>
				<li class="blue dgrey"><a href="#"><i class="icon-facebook"></i></a></li>
				<li class="lblue lgrey"><a href="#"><i class="icon-twitter-bird"></i></a></li>
				<li class="orange dgrey"><a href="#"><i class="icon-gplus"></i></a></li>
				<li class="pink lgrey"><a href="#"><i class="icon-dribbble"></i></a></li>
				<li class="red dgrey"><a href="#"><i class="icon-youtube"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- End of Footer -->


<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>

<!-- Include Footer -->
<?php include 'footer.php';?>

<!-- GOOGLE MAPS -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/googlemaps.js"></script>

</body>
</html>