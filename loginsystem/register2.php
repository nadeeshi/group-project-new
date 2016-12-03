<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $q1 = mysqli_real_escape_string($con, $_POST['q1']);
    $q1u = mysqli_real_escape_string($con, $_POST['q1u']);
    $q1y = mysqli_real_escape_string($con, $_POST['q1y']);
    $q2 = mysqli_real_escape_string($con, $_POST['q2']);
    $q2u = mysqli_real_escape_string($con, $_POST['q2u']);
    $q2y = mysqli_real_escape_string($con, $_POST['q2y']);
    $other = mysqli_real_escape_string($con, $_POST['other']);
        
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO qualifications(q1,q1u,q1y,q2,q2u,q2y,other) VALUES('" . $q1 . "','" . $q1u . "','" . $q1y . "','" . $q2 . "','" . $q2u . "','" . $q2y . "','" . $other . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Script</title>
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
         
            <div class="container" style="padding-top:100px; padding-bottom:150px;">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 well">
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                            <fieldset>
                            <legend>Qualifications</legend>

                                <div class="form-group">
                                    <label for="name">Qualification 1</label>
                                    <input type="text" name="q1" placeholder="Qualification" required value="<?php if($error) echo $q1; ?>" class="form-control" />
                                    <input type="text" name="q1u" placeholder="Educational Institute" value="<?php if($error) echo $q1u; ?>" class="form-control" />
                                    <input type="text" name="q1y" placeholder="Year Obtained" required value="<?php if($error) echo $q1y; ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Qualification 2</label>
                                    <input type="text" name="q2" placeholder="Qualification" required value="<?php if($error) echo $q2; ?>" class="form-control" />
                                    <input type="text" name="q2u" placeholder="Educational Institute" value="<?php if($error) echo $q2u; ?>" class="form-control" />
                                    <input type="text" name="q2y" placeholder="Year Obtained" required value="<?php if($error) echo $q2y; ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Other</label>
                                    <input type="text" name="other" value="<?php if($error) echo $other; ?>" class="form-control" />
                                </div>
                                

                                <div class="form-group">
                                    <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                                </div>
                            </fieldset>
                        </form>
                        <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                        <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                    </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">    
                    Already Registered? <a href="login.php">Login Here</a>
                </div>
            </div>
    
             <div class="push"></div>
        </div>
        <!--get footer -->
        <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../mainhome/footer3.php")?> </a>
        </div>
    </div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>