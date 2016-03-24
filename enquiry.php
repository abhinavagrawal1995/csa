<!DOCTYPE HTML>
<!--
	CSA Consultants pvt. ltd.
	abhinavagrawal.in | Abhinav Agrawal
-->
<html>
	<head>
		<title>CSAconsultants Pvt. Ltd.</title>
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
				<section id="main" class="container	">
					<?php include "imghead.php" ?>
					<div class="row">
						<div class="12u" style="margin-bottom: 30px;">
							<?php 
									session_start();
									if(isset($_SESSION['msg']))
										echo "<center><code>".$_SESSION['msg']."</code></center>";
									session_destroy();
							?>
						</div>						
					</div>
					<div class="box">
						<form method="post" action="enquire.php">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="name" id="name" value="" placeholder="Name" required />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" value="" placeholder="Email" required />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" required />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Send Message" name="submit"/></li>
									</ul>
								</div>
							</div>
						</form>
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