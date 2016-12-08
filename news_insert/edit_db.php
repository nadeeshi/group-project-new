
<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect("localhost","user","","test2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  header('Location:news_before.php?id='.$ns_id);
  
/*
if(isset($_POST['new']) && $_POST['new']==1)
{
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../batnews/photos/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];

$id=$_REQUEST['ed_id'];
//$im=$_REQUEST['image'];
$ns_id =$_REQUEST['news_id'];
//echo $sid;
$tt =$_REQUEST['title'];
$des = $_REQUEST['body'];
$update="update news_insert set news_id='".$ns_id."',title='".$tt."',image='".$location."', body='".$des."' where nid='".$id."'"; 
mysqli_query($con, $update) or die(mysqli_error());
header('Location:news_before.php?id='.$ns_id);
}else {*/

ob_end_flush();?>

