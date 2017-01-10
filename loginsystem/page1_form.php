<?php
session_start(); // Session starts here.
?>
<!DOCTYPE HTML>
<html>
 <head>
    <title></title>
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
 

 </head>
 <body>
 <div class="container-fluid" >
 <?php include ("../mainhome/mainnav.php") ?> 
 <div class="container" style="padding-top:100px; padding-bottom:150px;">
 <div class="row">
 <div class="col-md-4 col-md-offset-4 well">
        
 <div class="main">

 <span id="error">
 <!---- Initializing Session for errors ---->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 /*if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
     if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(strlen($nic) != 10) {
        $error = true;
        $nic_error = "NIC must be 10 characters";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }*/
 ?>

 </span>

 <form action="page2_form.php" method="post">
 <fieldset>
 <legend>Sign Up</legend>
 <div class="form-group">
 <label>Title </label>
 <input name="title" type="text"  required required>

 </div>
 <div class="form-group">
 <label>First Name </label>
 <input name="fname" type="text"  required required class="form-control" />
 <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
 </div>
<div class="form-group">
 <label>Middle Name </label>
 <input name="mname" type="text" required required class="form-control" />
 <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
 </div>
 <div class="form-group">
 <label>Last Name </label>
 <input name="lname" type="text" required required class="form-control" / >
 <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
 </div>
 <div class="form-group">
 <label for="name">Gender</label><br>
 <input type="radio" name="gender" value="m" required   >Male </input><br>
 <input type="radio" name="gender" value="f" required  >Female </input>
 </div>
 <div class="form-group">
 <label>NIC </label>
 <input name="nic" type="text" required required class="form-control" / >
 <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
 </div>
 <div class="form-group">
 <label>Address </label>
 <input name="add1" type="text"  required class="form-control" />
 <input name="add2" type="text" class="form-control" / >
 <input name="city" type="text"  required class="form-control" />
 </div>
 <div class="form-group">
 <label>Country</label>
 <input name="country" type="text" required class="form-control" />
 </div>
 <div class="form-group">
 <label>Major In </label>
 <input name="major" type="text"  required class="form-control" />
 </div>
 <div class="form-group">
 <label>Email </label>
 <input name="email" type="email"  required required class="form-control" />
 <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
 </div>

 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 
 </div>
 </fieldset>
 </form>
 </div>
 </div>
 <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../mainhome/footer3.php") ?> </a>
</div>
 </body>
</html>