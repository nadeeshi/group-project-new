<!DOCTYPE html>
<html>
  <head>
  	<title>addThread</title>
  	<link href="bootstrap.css" rel="stylesheet" type="text/css">
  	<link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../assets/bootstrap/jquary.js"></script> 
    <script src="../assets/bootstrap/bootstrapjs.js"></script>
  </head>
  <body>
    <div>
      <?php include "../IncludedFiles/navbarTemplate.php" ?> 
    </div>
    <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
    	<div class="content col-xs-12">
        <h4 class="header-content">Your New Discussion Topic</h4>
          <form class="form-horizontal form-group-custom">
            <div class="form-group">
              <label class="control-label col-xs-2" for="email">Subject:</label>
              <div class="col-xs-8">
                <input type="email" class="form-control form-row" id="email" placeholder="Enter Subject">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-2" for="pwd">Massage:</label>
              <div class="col-xs-8">
                <textarea class="massage form-row form-control" rows="6" cols="8">Enter Massage Here</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-2" for="pwd">Attachment:</label>
              <div class="col-xs-8">
                <input type="file" >
              </div>
            </div>
            <div class="form-group form-group-custom">
              <div class="col-xs-offset-2 col-xs-8 btn-class">
                <button type="submit" class="btn btn-default button-custom">Post to forum</button>
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