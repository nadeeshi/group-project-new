<?php 
require_once ("connection.php");
?>

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
			<?php
				/*$sql= "SELECT topic_content FROM topics WHERE topic_content=" . mysqli_real_escape_string ($db,isset($_GET['topic_id']) ? $_GET['topic_id'] : null);*/

				$sql="SELECT topic_id, topic_content FROM topics 
				WHERE topics.topic_id = " . mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
				$result= mysqli_query($db, $sql);
				$row = mysqli_fetch_assoc($result);
				echo $row['topic_content'];
			?>
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





