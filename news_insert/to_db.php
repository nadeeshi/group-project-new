<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);

$status = "";

 $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "test2";
        $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
        if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		//echo $_GET['to_id'];
		$ins_query="INSERT INTO photos (`location`, `caption`, `desc`)
		SELECT image, title, body FROM news_insert
		WHERE news_id = '" . $_GET['to_id'] . "';";
		$r1=mysqli_query($con,$ins_query) or die(mysql_error());
		
		if ($r1) {
				//echo $ns_id;
	header('Location:news_insert.php');
	exit();

    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}
		
/*		$qry = "SELECT * FROM news_insert WHERE news_id = '" . $_GET['batid1'] . "' ;";
        $result = mysqli_query($con, $qry);
        $record = mysqli_fetch_assoc($result);
		
		$n_id = $record['news_id'];
		$ttl = $record['title'];
		$imge = $record['image'];
		$bd = $record['body'];


if(isset($_POST['new']) && $_POST['new']==1)
{

$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"nphotos/" . $_FILES["image"]["name"]);
			
			$flocation="nphotos/" . $_FILES["image"]["name"];


$fid =$_REQUEST['news_id'];

$fdname =$_REQUEST['title'];

$descp = $_REQUEST['body'];




$ins_query="insert into news_insert (`news_id`,`title`,`image`,`body`) values ('$fid','$fdname','$flocation','$descp');";

mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
header('Location:news_before.php?id='.$fid);
}

INSERT INTO photos (id, name, date, msg, image)
SELECT '', name, date, msg, image FROM news_insert
WHERE source.id = $id
	
*/	
ob_end_flush();?>
