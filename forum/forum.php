<!DOCTYPE html>
<html>
<head>
	<title>thread</title>
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/forum.css" rel="stylesheet" type="text/css">	
	<link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/footer.css" rel="stylesheet">
	<script src="../assets/bootstrap/jquary.js"></script> 
  	<script src="../assets/bootstrap/bootstrapjs.js"></script>
</head>
<body>
	<div>
		<?php include '../IncludedFiles/navbarTemplate.php' ?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
		<div class="row">
			<div class="col-xs-12">
				<a href="addThread.php">
					<button class="button">Add a new discussion topic</button>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 list-content">
				<div class="row">
					<div class=" thread-content">
						<a href="#"> Are bats related to birds?</a>
					</div>
				</div>
				<div class="row">
					<div class="thread-content">
						<a href="#">How do flying bats maneuver in the dark?</a>
					</div>
				</div>
				<div class="row">
					<div class=" thread-content">
						<a href="#">Why do bats hang upside down?</a>
					</div>
				</div>
				<div class="row">
					<div class=" thread-content">
						<a href="#">How do vampire bats suck blood?</a>
					</div>
				</div>
				<div class="row">
					<div class=" thread-content">
						<a href="#">What do bats eat?</a>
					</div>
				</div>
				<div class="row">
					<div class=" thread-content">
						<a href="#">How long do bats live?</a>
					</div>
				</div>
				<div class="row">
					<div class=" thread-content">
						<a href="#">Where do bats live?</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- start footer -->

	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include "../IncludedFiles/footer.php" ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>