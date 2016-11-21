
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "project";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd ,$mysql_database) or die("Could not select database");





		$count = 0;
		//if($_GET['batid']>=0){

		$query = mysqli_query($bd,"SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;") or die("could not search");
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
		
	}//}
?>