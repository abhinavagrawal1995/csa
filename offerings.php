<!DOCTYPE HTML>
<!--
	CSA Consultants pvt. ltd.
	abhinavagrawal.in | Abhinav Agrawal
-->
<html>
	<head>
		<title>Offerings | CSAconsultants Pvt. Ltd.</title>
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
					<div class="box">
						<?php 
							switch ($_GET['content']) {
								case '':
									include "offerings/main.php";
									break;
								case 'oba':
									include "offerings/oba.php";
									break;
								case 'sap':
									include "offerings/sap.php";
									break;
								case 'sapbo':
									include "offerings/sapbo.php";
									break;
								case 'cloud':
									include "offerings/cloud.php";
									break;
								case 'op':
									include "offerings/op.php";
									break;
								case 'udyog':
									include "offerings/udyog.php";
									break;
								default:
									include "offerings/main.php";
									break;
							}	 
						?>
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