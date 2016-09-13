<?php
include('config2.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$name=$_POST['name'];
			$city=$_POST['city'];
			$description=$_POST['description'];
			
			$save=mysql_query("INSERT INTO fulldemo (name, city, location, description) VALUES ('$name', '$city','$location','$description')");
			//header("location: index.php");
			exit();					
	}
?>
