<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <link href="assets/css/navbar1n2.css" rel="stylesheet">

    <style>


li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>
<?php include "../mainhome/mainnav.php" ;
//include "../mainhome/footer3.php" ;
?>




<div class="container" style="padding-top:120px; padding-bottom:120px;">
  

<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT title,content,link FROM articles ORDER BY pubdate";
$result = $con->query($sql);
echo '<div class="row">';
echo '<div class="col-md-3">';
echo '<ul style="list-style-type: none; margin: 0; padding: 0; width: 200px; background-color: #f1f1f1;">';
echo '<li><label style="font-size: 17px ;">Recent Articles</label></li>';

while($row = $result->fetch_assoc()) {
    	$title=$row['title'];
    	$content=$row['content'];
    	$link=$row['link'];
    	echo '<li>'.'<a href='.$link.'>'. $title.'</a>'.'</li>';
    }
    ?>
</ul>
 

	</div>
  <div id="rest" class="col-md-9">
  </div>
</div>
  <div class="row">
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
  </div>
</div>

</body>
</html>