
<?php

ob_start();
include("../connect.php");

if($_POST){


    if(isset($_POST['address'])){
        $searchq = $_POST['address'];
        $searchq = preg_replace("#[^a-z]#i","",$searchq);
        $count = 0;
        if(!empty($searchq)){

            ob_start();
            include("../connect.php");
            $query = mysqli_query($bd,"SELECT * FROM fulldemo WHERE name = '$searchq'") or die("could not search");
            while($row = mysqli_fetch_array($query)){
                $fname = $row['name'];
                $lplace1 = $row['city'];
                $id = $row['id'];
                $img = $row['location'];
                $des = $row['description'];
                $count = 1;

                //echo '<p><img src="'.$row['location'].'"></p>';
                $output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
                //echo $output;

                //echo '<p><img src="'.$row['description'].'"></p>';

            }}}}
?>