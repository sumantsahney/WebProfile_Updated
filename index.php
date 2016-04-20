<?php	

		if (isset($_COOKIE["user"])) {
		$message =$_COOKIE["user"];
		echo "<script type='text/javascript'>alert('Welcome $message');</script>";
		}
		else{
			$cookie_name = "user";
			$cookie_value = $_POST["name"];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			$conn=mysqli_connect("localhost","sumant");
			if (!$conn) {
 			   	die("Connection failed: " . mysqli_connect_error());
			}

			mysqli_select_db($conn,"mydb");
			$name=$_POST["name"];
			$email=$_POST["email"];
			$sql="INSERT INTO details Values('".$name."','".$email."')";
			if (mysqli_query($conn, $sql)) {
   			} 
   			else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			header("Location: fill.php");
			die();
		
		}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>Sumant Sahney Web Profile</title>

</head>

<body style="background-color:#efefef">
<div style="background-color:#282828;" class="jumbotron">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1 col-lg-12 col-sm-12 col-xs-0"></div>
				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
					<div class="photo type3">
								</div>
							</div>
					<div class="col-md-4">
						<div class="txt">
							<h1 style="color: #b6b4b5;font-size: 35px; font-family: "Avant Garde",Avantgarde,"Century Gothic",CenturyGothic,AppleGothic,sans-serif;">Sumant Sahney</h1>
							<p>Student | Programming </p>
								</div>
					</div>
				<div class="col-md-3">
				<p style="margin-bottom:0px">+91-9953448445</p>
				<p style="margin-bottom:10px">sumantsahney@gmail.com</p>
				<p><a href="https://in.linkedin.com/in/sumantsahney"><img src="images/linkedln.png" style="height:30px; width:30px"></a> <a href="https://github.com/sumantsahney"><img src="images/git.png" style="height:30px; width:60px"></a><a href="data/sumant.pdf"> <img src="images/pdf.png" style="height:30px; width:30px"></a></p>

				</div>
				<div class="col-md-1"></div>
		</div>
	</div>
</div>
	
	<div class="main">
		
		<div class="menu">

			<ul class="nav nav-tabs">
 				<li class="active"><a href="#aboutme">About Me</a></li>
  				<li><a href="#projects">Projects</a></li>
 	 			<li><a href="#education">Education</a></li>
  				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
		

		<div class="container-fluid">
			
			<div class="row">
			<div class="col-md-1 col-lg-1 col-sm-1 hidden-xs"></div>

			<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
				
			<div class="container-fluid">
				
				<div class="row">
					<div id="aboutme">
						<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
							<div id="exclamation"> <img src="images/exclamation31.png " alt="exclamation" style="height:91px;width:91px"><p class="head1">About Me</p></div>
							<div class="clearfix visible-xs" style="height:10%"></div>

						</div>
						<div class="col-md-10 col-lg-10 col-sm-8 col-xs-12">
						<p style="margin-top:50px"><b>Career Objective :</b></p>
<p>
To build on my application concepts by working on organization level projects, thereby contributing to the organisation as well as my long term career growth.
</p>
<p><b>Personal Skills</b></p>
<p>1. I am a quick learner amply demonstrated in my recent project at NTPC.</p>
<p>2. Believe myself to be trustworthy, very punctual, self-disciplined and confident.</p>
<p>3. Ability to take lead in crisis situation.</p>
<p>4. Flexible and adaptable to any kind of situation.</p>
<p>5. Have shown commitment and purpose in execution of projects at the industry and college level.</p>

<p><b>Achievements </b></p>
<p>1.	Organized Workshop on “Game Designing And 3-D Modeling Using Python”.</p>
<p>2.	Graphic Designer at Webarch(University Technical Club)</p>
<p>3.	Technical Committee Head of IT Association(IT Department Association)</p>
<p>4.	Member of Technical Team for Aaruush(National Level Techno-Management Fest)</p>
<p>5.   Committee Member at Game Development Workshop.</p>
<p>6.	Committee Member at Reality into Circuit Workshop.</p>
<p>7.	Volunteer of CSI(Corporate Strategy and Implementation) in Aaruush’13</p>
<p>8.	Volunteer at various events conducted during Aaruush’13(National Level Techno-Management Fest)</p>
<p>9.	Member in organizing Furor 2.0(IT Department Fest)</p>
<p>10.	Awarded for the best project in TECHKNOW-2013</p>


						</div>
					</div>
				</div>

				<div class="row">
					<div id="projects">
					<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
						<div id="proj"> <img src="images/project.png " alt="project" style="height:91px;width:91px"><p class="head1">&nbsp;Projects</p></div>
						<div class="clearfix visible-xs" style="height:10%"></div>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-8 col-xs-12">
					
					<p style="margin-top:45px"><b>	Industrial Projects</b></p>
<p><b>Web Application Project(BAL BHAVAN)  -NTPC</b></p>
<p><i>5/2014 - 6/2014</i></p>
<p>This project was to develop a Web Application for NTPC Noida Bal Bhavan Project. This application was 
developed using Visual Basic And .Net. It provides an Online Web Graphical User Interface for uploading 
files, images, videos, displaying news and other updates. </p>

<p><b>Sales Marketing And Organization  -STMicroelectronics</b></p>
<p><i>5/2015 - 6/2015</i></p>
<p>During this project I worked under the ICT department, where I was in Maintenance and had did RCA i.e. Root Cause
Analysis of the Sales Organization Software which was the portal in which all the orders from all Around the worlds 
were placed and all the transactions and scheduling of the orders occurred.</p>



					</div>
				</div>
				</div>

				<div class="row">
					<div id="education">
					<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
						<div id="edu"> <img src="images/edu.png " alt="education" style="height:91px;width:91px"><p class="head1">&nbsp;Education</p></div>
						<div class="clearfix visible-xs" style="height:10%"></div>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-8 col-xs-12">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p><b>SRM University ,Chennai</p>
						<p>Bachelors in Technology (Information Technology), Degree Expected - 2017</b></p>
						<p>Cumulative GPA: <i>9.29(Till 4th Semester)</i></p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p><b>Ryan International School , Vasant Kunj, New Delhi</p>
						<p>AISSCE, 2013-Central Board of Secondary Education, India</b></p>
						<p><i>82.4%</i></p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p><b>Ryan International School , Vasant Kunj, New Delhi</p>
						<p>AISSE, 2011-Central Board of Secondary Education, India</b></p>
						<p>Cumulative GPA: <i>9.0</i> </p>
					
					</div>
				</div>
				</div>

				<div class="row">
					<div id="contact">
					<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
						<div id="phne"> <img src="images/phne.png " alt="education" style="height:91px;width:91px"><p class="head1">&nbsp;Contact</p></div>
						<div class="clearfix visible-xs" style="height:10%"></div>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-8 col-xs-12">
					<div id="details">	
				<p style="margin-top:100px">sumantsahney@gmail.com</p>
				<p>+91-9953448445</p>

				<p><a href="https://in.linkedin.com/in/sumantsahney"><img src="images/linkedln.png" style="height:60px; width:60px"></a> <a href="https://github.com/sumantsahney"><img src="images/git.png" style="height:60px; width:120px"></a><a href="data/sumant.pdf"> <img src="images/pdf.png" style="height:60px; width:60px"></a></p>
					</div>
				</div>
				</div>
				</div>

			</div>

			
		</div>
		<div class="col-md-1 col-lg-1 col-sm-1 hidden-xs"></div>
	</div>
	</div>
</div>
</body>
</html>