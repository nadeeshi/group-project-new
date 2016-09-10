<!DOCTYPE html>
<html>
  <head>
  	<title>addThread</title>
  	<link href="bootstrap.css" rel="stylesheet" type="text/css">
  	<link href="thread.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <!-- <?php include "../IncludedFiles/navbar1.php" ?> -->
  	<div class="content col-xs-7">
      <h4 class="header-content">Your New Discussion Topic</h4>
        <form class="form-horizontal">
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
            <div class="col-xs-offset-2 col-xs-8">
              <button type="submit" class="btn btn-default button-custom">Post to forum</button>
            </div>
          </div>
        </form>
    </div>
  
  </body>
</html>