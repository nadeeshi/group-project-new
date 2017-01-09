<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");

	
$count = 0;
		//if($_GET['batid']>=0){

$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;") or die("could not search");
while($row = mysql_fetch_array($query)){
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
		
	}//}
?>