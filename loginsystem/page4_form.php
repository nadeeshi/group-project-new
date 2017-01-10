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
 <div class="main">
 <h2>PHP Multi Page Form</h2>
 <?php
 session_start();
 if (isset($_POST['other'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['q1name'])
 || empty($_POST['q1ins'])
 || empty($_POST['q1year'])){ 
 // Setting error for page 3.
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page2_form.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection,"project" ); // Storing values in database.
 $query = mysqli_query($connection,"insert into researchers (title,fname,mname,lname,gender,nic,add1,add2,city,country,major,email,q1name,q1ins,q1year,q2name,q2ins,q2year,other) values('$title','$fname','$mname','$lname','$gender','$nic','$add1','$add2','$city','$country','$major','$email','$q1name','$q1ins','$q1year','$q2name','$q2ins','$q2year','$other')");
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 echo("Error description: " . mysqli_error($connection));
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 ?>
 </div>
 </div>
  <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../mainhome/footer3.php") ?> </a>
</div>
 </body>
</html>
