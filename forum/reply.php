<?php 
$msg ='';
require_once ('connection.php');
if (!empty($_POST)) {
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $date= date('Y-m-d');
  /*$id=mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);*/

  $query= "INSERT INTO post (post_content, post_date, post_topic) VALUES ('$message', '$date', '$id' )";
  $result= mysqli_query($db, $query);

  if ($result){
    $msg ='<a href=discussion.php>View your topics</a>';
  }
  else{
    $msg= "Error" .'<br>'. mysqli_error($db);
    
  }

}
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>reply</title>
  	<link href="bootstrap.css" rel="stylesheet" type="text/css">
  	<link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../assets/bootstrap/jquary.js"></script> 
    <script src="../assets/bootstrap/bootstrapjs.js"></script>
    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
  </head>
  <body>
    <div>
      <?php include "../IncludedFiles/navbarTemplate.php" ?> 
    </div>
    <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
      <div class="row">
        <?php
          
          $sql="SELECT topic_id, topic_subject, topic_content,topic_date FROM topics 
          WHERE topics.topic_id = " . mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);
          $result= mysqli_query($db, $sql);
          $row= mysqli_fetch_assoc($result)!=NULL;
          $id=mysqli_real_escape_string($db, isset($_GET['id']) ? $_GET['id'] : null);

          
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
    	<div class="content col-xs-12">
        <h4 class="header-content">Your Reply</h4>
          <form class="form-horizontal form-group-custom" method="post" action="reply.php">
            <div class="form-group">
              <label class="control-label col-xs-2" for="pwd">Massage:</label>
              <div class="col-xs-8">
                <textarea class="massage form-row form-control" rows="6" cols="8" name="message"></textarea>
              </div>
            </div>
            <div class="form-group form-group-custom">
              <div class="col-xs-offset-2 col-xs-8 btn-class">
                <button type="submit" class="btn btn-default button-custom">Post to forum</button>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-2" for="pwd"></label>
              <div class="col-xs-8">                
              </div>
            </div>
          </form>
          <?php 
          echo $msg;
           ?>
      </div>
    </div>


<!-- strat footer -->
  
  <div class="row">
    <div class="col-xs-10 col-xs-push-2">
      <?php include "../IncludedFiles/footer.php" ?>
    </div>  
  </div>

<!-- end of footer -->


  </body>
</html>