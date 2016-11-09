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
    <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
    	<div class="content col-xs-12">
        <h4 class="header-content">Your Reply</h4>
          <form class="form-horizontal form-group-custom" method="post" action="addThread.php">
            <div class="form-group">
              <label class="control-label col-xs-2" for="pwd">Massage:</label>
              <div class="col-xs-8">
                <textarea class="massage form-row form-control" rows="6" cols="8" name="massage">Enter Massage Here</textarea>
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