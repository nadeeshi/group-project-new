<?php
ob_start();
include("connect.php");

    $username=mysql_real_escape_string($_POST['username']);
    $usermail=mysql_real_escape_string($_POST['usermail']);
    $usermobile=mysql_real_escape_string($_POST['usermobile']);
    $password=mysql_real_escape_string($_POST['password']);


    $update=mysql_query("INSERT INTO admin_details(username,emailid,mobileno,created,password)VALUES
                                      ('$username','$usermail','$usermobile',now(),'$password')");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:adminDetails.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }

ob_end_flush();
?>