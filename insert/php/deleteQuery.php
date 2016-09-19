<?php

require_once('../mysqli_connect.php');
  

if(isset($_POST['search'])!="") {
        $delete=$_POST['search'];
        $sql = "DELETE FROM batinsert WHERE scientific_name='$delete'";
        
        if ($dbc->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error deleting record: " . $dbc->error;
        }
}
$dbc->close();

header("Location:../delete_bat.php");
?>