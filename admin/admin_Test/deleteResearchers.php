<?php
ob_start();
include("connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysql_query("DELETE FROM researcher_details WHERE id='$delete'");
    if($delete)
    {
        header("Location:researchersDetails.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>