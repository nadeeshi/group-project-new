<?php
ob_start();
include("connect.php");

if(isset($_POST['send'])!="")
{
    $username=mysqli_real_escape_string($bd, $_POST['username']);
    $usermail=mysqli_real_escape_string($bd, $_POST['usermail']);
    $usermobile=mysqli_real_escape_string($bd, $_POST['usermobile']);

    $update=mysqli_query($bd, "INSERT INTO researcher_details(username,emailid,mobileno,created)VALUES
                                      ('$username','$usermail','$usermobile',now())");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:researchersDetails.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
}
ob_end_flush();
?>