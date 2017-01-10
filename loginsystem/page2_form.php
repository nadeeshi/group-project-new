<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['fname'])){
 if (empty($_POST['fname'])
 ||	empty($_POST['lname'])
 ||	empty($_POST['nic'])
 ||	empty($_POST['country'])
 || empty($_POST['email'])){
 $_SESSION['error_page1'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page1_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: page1_form.php");// Redirecting to first page.
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
          <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="js/bootstrap.min.js" rel="stylesheet" media="screen">
          <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/footer3.css">
        <script src="js//jquary.js"></script>
        <script src="js//bootstrapjs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 </head>
 <body>
 <div class="container-fluid" >
 <?php include ("../mainhome/mainnav.php") ?> 
 <div class="container" style="padding-top:100px; padding-bottom:150px;">
<div class="row">
 <div class="col-md-4 col-md-offset-4 well">
 <div class="main">
 <h2>PHP Multi Page Form</h2><hr/>
 <span id="error">
 <?php
 if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
 }
 ?>
 </span>
 <form action="page4_form.php" method="post">
 <div class="form-group">
 <b>Qualification 1 :</b><br>
 <label>Qualification Name :</label>
 <input name="q1name" id="q1name" type="text" size="30" required class="form-control" />
 <label>Institution :</label>
 <input name="q1ins" id="q1ins" type="text" size="50" required class="form-control" />
 <label>Year Obtained :</label>
 <input name="q1year" id="q1year" type="text" size="25" required class="form-control" />
 </div>
 <div class="form-group">
  <b>Qualification 2 :</b><br>
 <label>Qualification Name :</label>
 <input name="q2name" id="q2name" type="text" size="30"  class="form-control" />
 <label>Institution :</label>
 <input name="q2ins" id="q2ins" type="text" size="50" class="form-control" />
 <label>Year Obtained :</label>
 <input name="q2year" id="q2year" type="text" size="25" class="form-control" />
 </div>
 <div class="form-group">
 <label>Other :</label>
 <input name="other" id="other" type="text" size="30" required class="form-control" />
 </div>
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 
 </div>
 </div>
 <div id="footer" class="container=fluid">
        <a name="contact"> <?php include("../mainhome/footer3.php") ?> </a>
 </div>
 </div>
 </body>
</html>