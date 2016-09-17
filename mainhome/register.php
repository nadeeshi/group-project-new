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
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $major = mysqli_real_escape_string($con, $_POST['major']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(strlen($nic) < 10) {
        $error = true;
        $nic_error = "NIC must be minimum of 10 characters";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(fname,lname,nic,age,gender,country,major,address,email,password) VALUES('" . $fname . "','" . $lname . "','" . $nic . "','" . $age . "','" . $gender . "','" . $country . "','" . $major . "','" . $address . "','" . $email . "', '" . md5($password) . "')"))
    
           {
            $successmsg = " <a href='register22.php'>Click here to Proceed</a>";
        }else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Researcher Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/footer3.css" type="text/css" />
</head>
<body>

<?php include ("mainnav.php") ?>


<div class="container" style="padding-top:120px; padding-bottom:120px;">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 well">
            <form role="form" action="" "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Sign Up</legend>

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required value="<?php if($error) echo $fname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required value="<?php if($error) echo $lname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="nic">NIC</label>
                        <input type="text" name="nic" placeholder="NIC" required value="<?php if($error) echo $nic; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($nic_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" placeholder="Age" required value="<?php if($error) echo $age; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" value="male">Male </input><br><br>
                        <input type="radio" name="gender" value="female">Female </input>
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" placeholder="Country" required value="<?php if($error) echo $country; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="major">Mojor in</label>
                        <input type="text" name="major" placeholder="Major in" required value="<?php if($error) echo $major; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Address" required value="<?php if($error) echo $address; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>


                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Register" class="btn btn-default" />
                    </div>

                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>

</div>
<div class=" row footer">
    <?php include ("footer3.php") ?>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>