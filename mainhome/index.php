<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="C:\wamp\www\group-project-new/assets/css/navbar1n2.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #4c4743;">
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
            <a class="navbar-brand" href="#"><span style="font-family: 'Chewy', cursive; font-size: 50px;" >Bats</span><span style="font-family: 'Shadows Into Light', cursive; font-size: 50px;">Info</span></a>
        

        <!--iv class="collapse navbar-collapse" id="myNavbar">-->
            <ul class="nav navbar-nav" style="font-size: 18px; padding-top: 13px; padding-bottom: 13px;">
                    <li class="active"><a href="myhome.php">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="myhome.php#articles">Articles</a></li>
                    <li><a href="#">Threads</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
                <form class="navbar-form  navbar-right">
              <div class="form-group" style="padding-top:15px;">
                  <input type="text" class="form-control input-area" placeholder="Enter name here">
              <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text" style="font-size: 18px !important; padding-top:13px;">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php" style="font-size:18px; padding-top:18px !important;">Log Out</a></li>
                <?php } else { ?>
                     <ul class="nav navbar-nav navbar-right" style="padding-top:13px;">
                        <li><a href="register.php" id="myBtn" style="font-size: 18px; padding-top:13px;"><span class="glyphicon glyphicon-user">Register</span> </a></li> 
                        <li><a href="login.php" style="font-size: 18px;"><span class="glyphicon glyphicon-log-in">Login</span> </a></li>
                    </ul>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include ("footer3.php") ?>

</body>
</html>