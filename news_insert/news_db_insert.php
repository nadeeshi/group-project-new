<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect("localhost","user","","test2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../batnews/photos/" . $_FILES["image"]["name"]);
			
			//$flocation="nphotos/" . $_FILES["image"]["name"];
			$flocation=$_FILES["image"]["name"];

$fid =$_REQUEST['news_id'];

$fdname =$_REQUEST['title'];

$descp = $_REQUEST['body'];


$ins_query="insert into news_insert (`news_id`,`title`,`image`,`body`) values ('$fid','$fdname','$flocation','$descp');";

mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
header('Location:news_before.php?id='.$fid);
}
	
	
?>
