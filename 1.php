<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","user","") or die("could not connect");
//mysqli_connect('localhost', 'root', '', 'test2')or die("could not connect");
@mysql_select_db("test2") or die("could not find");

// Old
//mysql_query('CREATE TEMPORARY TABLE `table`', $link);
// New
//mysqli_query($link, 'CREATE TEMPORARY TABLE `table`');
?>
<!DOCTYPE html>
<html>
<head>
<?php
if(isset($_GET['search'])){
	$searchq = $_GET['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

$query = mysql_query("SELECT * FROM aa WHERE name LIKE '%$searchq%'") or die("could not search");
$count = mysql_num_rows($query);
if($count == 0){
	$output = 'there is no search results!!';
}else{
	while($row = mysql_fetch_array($query)){
		$fname = $row['name'];
		$lplace = $row['city'];
		$id = $row['id'];
		
		$output = '<div>'.$fname.' '.$lplace.'</div>';
	}
}
}

?>
</head>
<body>
<form action = "1.php" method = "GET">
	<input type = "text" name="search" placeholder="search for places"/>
	<input type = "submit" value=">>"/>
</form>
<?php echo $output;?>


</body>
</html>