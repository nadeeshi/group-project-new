<?php

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['reg'])) {
    $d1 = mysqli_real_escape_string($con,$_POST['d1']);
    $d1u =mysqli_real_escape_string($con, $_POST['d1u']);
    $d1y= mysqli_real_escape_string($con,$_POST['d1y']);
    $d2 = mysqli_real_escape_string($con,$_POST['d2']);
    $d2u =mysqli_real_escape_string($con,$_POST['d2u']);
    $d2y = mysqli_real_escape_string($con,$_POST['d2y']);
    $d3 =mysqli_real_escape_string($con, $_POST['d3']);
    $d3u =mysqli_real_escape_string($con, $_POST['d3u']);
    $d3y = mysqli_real_escape_string($con,$_POST['d3y']);
    $other =mysqli_real_escape_string($con, $_POST['other']);

  
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(d1,d1u,d1y,d2,d2u,d2y,d3,d3u,d3y,other) VALUES('" . $d1 . "','" . $d1u . "','" . $d1y . "','" . $d2 . "','" . $d2u . "','" . $d2y . "','" . $d3 . "','" . $d3u . "','" . $d3y . "','".$other."')"))
    
           {
            $successmsg = "You have successfully registered to the system. You will receive an email containing your password. Thank you ! ";
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
</head>
<body>

<?php include ("mainnav.php") ?>


<div class="container" style="padding-top:120px;">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 well">
            <form role="form" action="" "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Qualifications</legend>

                    <div class="form-group">
                        <label for="fname">Qualifications 1</label>
                        <input type="text" name="d1" placeholder="Title" required value="<?php if($error) echo $d1; ?>" class="form-control" /><br>
                        <input type="text" name="d1u" placeholder="University" required value="<?php if($error) echo $fd1u; ?>" class="form-control" /><br>
                        <input type="text" name="d1y" placeholder="Year" required value="<?php if($error) echo $d1y; ?>" class="form-control" /><br>
                    </div>

                    <div class="form-group">
                        <label for="fname">Qualifications 2</label>
                        <input type="text" name="d2" placeholder="Title" required value="<?php if($error) echo $d1; ?>" class="form-control" /><br>
                        <input type="text" name="d2u" placeholder="University" required value="<?php if($error) echo $fd1u; ?>" class="form-control" /><br>
                        <input type="text" name="d2y" placeholder="Year" required value="<?php if($error) echo $d1y; ?>" class="form-control" /><br>
                    </div>

                    <div class="form-group">
                        <label for="fname">Qualifications 3</label>
                        <input type="text" name="d3" placeholder="Title" required value="<?php if($error) echo $d1; ?>" class="form-control" /><br>
                        <input type="text" name="d3u" placeholder="University" required value="<?php if($error) echo $fd1u; ?>" class="form-control" /><br>
                        <input type="text" name="d3y" placeholder="Year" required value="<?php if($error) echo $d1y; ?>" class="form-control" /><br>
                    </div>

                    <div class="form-group">
                        <label for="fname">Other</label>
                        <textarea name="other"  required value="<?php if($error) echo $age; ?>" class="form-control" /></textarea>
                    </div>

                     

                    
                    <div class="form-group">
                        <input type="submit" name="reg" value="Register" class="btn btn-default" />
                    </div>

                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>

</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include ("footer3.php") ?>
</body>
</html>