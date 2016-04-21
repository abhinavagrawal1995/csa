<!DOCTYPE HTML>
<!--
	CSA Consultants pvt. ltd.
	abhinavagrawal.in | Abhinav Agrawal
-->
<html>
	<head>
		<title>Careers | CSAconsultants Pvt. Ltd.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<?php require_once('header.php'); ?>

			<!-- Main -->
				<section id="main" class="container">
					<?php include "imghead.php" ?>
					<div class="row">
						<div class="12u" style="margin-bottom: 30px;">
							<?php session_start(); echo $_SESSION['msg']; session_destroy();?>
						</div>						
					</div>
					<div class="box">
						<h3>Career</h3>
						<p>
						We look for people with energy, talent, and creative drive, balanced with a commitment to precision and quality. CSA Consultants offers nationally-competitive salaries, benefits, and a working atmosphere that empowers our people to reach their greatest potential. </p><p>

						We recruit our employees carefully so as to ensure that the employee’s knowledge, skills and personal prerequisites and qualities match the demands of the specific position. </p><p>

						Our priority is to make sure that all of our employees enjoy good work conditions and a friendly working collective. We support our employees in their professional growth and in the development of their expertise. We reward the quality work of each employee and we provide a whole range of social benefits.
						</p>
						<div class="row">
							<div class="12u">
								<h4>A Career at CSA Consultants will offer you a chance to :</h4>
								<ul>
									<li>Experience a variety of different environment thru projects.</li>
									<li>Work on some of the most Advanced technology and project both at support and client site.</li>
									<li>Opportunities To Enjoy a Unique work Culture Click here for the latest requirements.</li>
								</ul>
								 
								In case of any queries, <a href="contactus.php">Contact Us</a><br>
								<br>
								<form method="post" action="upload.php" enctype="multipart/form-data">
									<div class="row uniform 50%">
									<div class="4u 12u(mobilep)">To apply, submit your resume here :</div>
										<div class="4u 6u(mobilep)">
											<input type="file" name="fileToUpload" id="fileToUpload" />
										</div>
										<div class="4u 6u(mobilep)">
											<ul class="actions">
												<li><input type="submit" value="Send" name="submit" /></li>
											</ul>
										</div>
									</div>
								</form>
								
							</div>
							
						</div>
					</div>
				</section>

			<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

