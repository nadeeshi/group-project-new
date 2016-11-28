<?php
ob_start();
include("../include_files/connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM researcher_details WHERE id='$delete'");
    if($delete)
    {
        header("Location:researcherDetailsValidate.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>