<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","user","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");



if($_POST){

	
		if(isset($_POST['address'])){
		$searchq = $_POST['address'];
		$searchq = preg_replace("#[^a-z]#i","",$searchq);
		if(!empty($searchq)){

		$query = mysql_query("SELECT * FROM fulldemo WHERE name = '$searchq'") or die("could not search");
			while($row = mysql_fetch_array($query)){
					$fname = $row['name'];
					$lplace1 = $row['city'];
					$id = $row['id'];
					$img = $row['location'];
					$des = $row['description'];
		
		
		//echo '<p><img src="'.$row['location'].'"></p>';
		$output = '<div>'.$fname.' -> '.$lplace1.'</div></br>'.$des;
		//echo $output;
		
		//echo '<p><img src="'.$row['description'].'"></p>';
		
	}}}}
?>