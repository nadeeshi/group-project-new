<?php
ob_start();
include("../include_files/connect.php");

if(isset($_POST['send'])!="")
{
    $username=mysql_real_escape_string($_POST['username']);
    $usermail=mysql_real_escape_string($_POST['usermail']);
    $usermobile=mysql_real_escape_string($_POST['usermobile']);

    $update=mysql_query("INSERT INTO researcher_details(username,emailid,mobileno,created)VALUES
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