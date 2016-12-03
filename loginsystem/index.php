<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | BatsInfo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link href="../assets/css/navbar1n2.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #4c4743;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
                
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
        <a class="navbar-brand" href="#"><span style="font-family: 'Chewy', cursive;
              font-size: 50px; color:#ffffff;" >Bats</span><span style="font-family: 'Shadows Into Light', cursive;
              font-size: 50px; color:#ffffff;">Info</span></a>
                <ul class="nav navbar-nav" style="font-size: 18px; padding-top: 1px; padding-bottom: 8px;">

                    <li><a href="../mainhome/myhome.php">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="myhome.php#articles">Articles</a></li>
                    <!-- <li><a href="#">Gallery</a></li> -->
                    <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                </ul>
            <form class="navbar-form  navbar-right">
              <div class="form-group" style="padding-top:1px;">
                  <input type="text" class="form-control input-area" placeholder="Enter name here">
              <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
            <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right" style="font-size: 18px; padding-top: 1px; padding-bottom: 8px;">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
            </div>
        
    </nav>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Koding Made Simple</a>
        </div>
        
    </div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>