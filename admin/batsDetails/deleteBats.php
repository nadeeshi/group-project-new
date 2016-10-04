<?php
ob_start();
include("connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM bats_details WHERE id='$delete'");
    if($delete)
    {
        header("Location:listOfBats.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>