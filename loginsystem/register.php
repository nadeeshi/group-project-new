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
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $st1 = mysqli_real_escape_string($con, $_POST['st1']);
    $st2 = mysqli_real_escape_string($con, $_POST['st2']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $major = mysqli_real_escape_string($con, $_POST['major']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
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
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(fname,lname,gender,nic,st1,st2,city,country,major,email) VALUES('" . $fname . "','" . $lname . "','" . $gender . "','" . $nic . "','" . $st1 . "','" . $st2 . "','" . $city . "','" . $country . "','" . $major . "', '" . $email . "')")) {
            $successmsg = "Successfully Registered! <a href='register2.php'>Click here to Proceed</a>";
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
        <?php include ("../mainhome/mainnav.php") ?> 
            <div class="container" style="padding-top:100px; padding-bottom:150px;">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 well">
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                            <fieldset>
                            <legend>Sign Up</legend>

                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" placeholder="Enter First Name" required value="<?php if($error) echo $fname; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" placeholder="Enter Last Name" required value="<?php if($error) echo $lname; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Gender</label><br>
                                    <input type="radio" name="gender" value="m" required value="<?php if($error) echo $gender; ?>"  >Male </input><br>
                                    <input type="radio" name="gender" value="f" required value="<?php if($error) echo $gender; ?>"  >Female </input>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="name">NIC</label>
                                    <input type="text" name="nic" placeholder="Enter NIC" required value="<?php if($error) echo $nic; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($nic_error)) echo $nic_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <input type="text" name="st1" placeholder="Street 1" required value="<?php if($error) echo $st1; ?>" class="form-control" />
                                    <input type="text" name="st2" placeholder="Street 2" value="<?php if($error) echo $st2; ?>" class="form-control" />
                                    <input type="text" name="city" placeholder="City" required value="<?php if($error) echo $city; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Country</label>
                                    <input type="text" name="country" placeholder="Country" required value="<?php if($error) echo $country; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Major In</label>
                                    <input type="text" name="major" placeholder="Major" required value="<?php if($error) echo $major; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                </div>
                    
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                                    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
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
        </div>
        
        <div id="footer" >
        <a name="contact"> <?php include ("../mainhome/footer3.php")?> </a>
        </div>
    

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>