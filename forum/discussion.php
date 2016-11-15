<?php 
require_once ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>discussion</title>
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
	<div class="row">
		<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
			<div class="row">
				<?php
					
					$sql="SELECT topic_id, topic_subject, topic_content,topic_date FROM topics 
					WHERE topics.topic_id = " . mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
					$result= mysqli_query($db, $sql);
					$row = mysqli_fetch_assoc($result);
					$id=mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
					echo($id);
				?>
				<div class="col-xs-12 thread-topic-content">
	                <p class="topic-subject"><?php echo $row['topic_subject']; ?></p>
	                <p class="topic-date"><?php echo $row['topic_date'] ?></p>
	                <div class="row">
	                	<div class="col-xs-push-1 col-xs-11">
	                		<p><?php echo $row['topic_content']; ?></p>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col-xs-push-11 col-xs-1">
	                		<a href="reply.php">Reply</a>
	                	</div>
	                </div>
	            </div>
			</div>

			<?php 

				$rply_sql ='SELECT post_id, post_content, post_date, post_topic FROM `post` 
				WHERE `post_topic`= 23';
				$reply_result= mysqli_query($db, $rply_sql);

				if (is_array($reply_result)) {
					foreach ($reply_result as $key) {
						
						echo "<div class='col-xs-12 thread-topic-content'>";
		                	echo "<p class='topic-date'>" .$key['post_date']. "</p>";
		                	echo "<div class='row'>";
		                		echo "<div class='col-xs-push-1 col-xs-11'>";
		                			echo "<p>" .$key['post_content']. "</p>";
		                		echo "</div>";
		                	echo "</div>";
		                	echo "<div class='row'>";
		                		echo "<div class='col-xs-push-11 col-xs-1'>";
		                			echo "<a href='reply.php'>Reply</a>";
		                		echo "</div>";
		                	echo "</div>";
		            	echo "</div>";
					}
				}
			?>
		</div>
	</div>

	<!-- start footer -->

	<div class="row">
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include "../IncludedFiles/footer.php" ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>





