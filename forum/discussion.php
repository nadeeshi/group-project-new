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
    <!-- text editor -->
    <!-- <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->

	<!--moment.js-->
	<script src="../assets/js/moment.js"></script>

</head>
<body>
	<div>
		<?php include '../IncludedFiles/navbarTemplate.php' ?>
	</div>
	<div>
		<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form" style="padding: 2%;">
			<div class="row">
				<?php
					$sql="SELECT topic_id, topic_subject, topic_content,topic_date FROM topics
					WHERE topics.topic_id = " . mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
					$result= mysqli_query($db, $sql);
					$row = mysqli_fetch_assoc($result);
					$id=mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
					// echo($id);
				?>
				<div  id = "topicId" style="display:none"> <?php echo $id; ?> </div>

    			<div class="col-xs-12 thread-topic-content" id = "-1">
                    <p class="topic-subject"><?php echo $row['topic_subject']; ?></p>
                    <p class="topic-date"><?php echo $row['topic_date'] ?></p>
                    <div class="row">
                    	<div class="col-xs-push-1 col-xs-11">
                    		<p><?php echo $row['topic_content']; ?></p>
                    	</div>
                    </div>
                    <div>
                    	<div class="col-xs-push-11 col-xs-1">
        					<a class="btn btn-default btn-xs" onclick = "ajaxReply(-1)"> Reply </a>
                    	</div>
            		</div>
        		</div>
			</div>
			<div style="margin-left:15px;" id = "replytopLevel"> </div>
		</div>
	</div>

<!-- New Replay Model -->
	<div class="modal fade"  id = "replyModel" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Your Reply</h4>
				</div>
				<div class="modal-body">
					<form id = "replayform">
						<div class="form-group">
							<label class="control-label" for="message">Massage:</label>
							<div>
								<textarea class="massage form-row form-control" rows="6" cols="8" name="message" id = "message"></textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-default submitModel btn-custom">Post to forum</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- start footer -->

	<div class=".container-fluid">
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include "../IncludedFiles/footer.php" ?>
	    </div>
  	</div>
	<!-- end of footer -->
</body>
</html>


<script src="../assets/js/forum.discussion.js"></script>
