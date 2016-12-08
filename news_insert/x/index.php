<?php

---------------------------------------------------------------------------------------------*/
include('connection.php'); //include of db config file

extract($_POST); 
if($save)
{
//check user already exists or not
$q=mysql_query("select email from users where email='$e'");
$r=mysql_num_rows($q);
if($r)
{
echo "<font color='red'>$e already exists</font>";
}
else
{

//for image
$img=$_FILES['img']['name'];

$hobbies=implode(",",$hobb);

$dob=$yy."-".$mm."-".$dd;


$query="insert into news_insert values('','$n','$e','$p','$add','$mob','$gen','$img','$hobbies','$c','$dob',now())";
mysql_query($query);


mkdir("image/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"image/$e/".$_FILES['img']['name']);

echo "<font color='blue'>Congrates !</font>";
}
}
?>

<link rel="stylesheet" href="style.css"/>
	<body>
		<form method="post" enctype="multipart/form-data">
			<table border="1">
			<tr>
				<Td>id</td>
				<td><input type="text" name="n" required/></td>
			</tr>
			<tr>
				<Td>title</td>
				<td><input type="email" name="e" required/></td>
			</tr>
			<tr>
				<Td>description</td>
				<td><input type="password" name="p" required/></td>
			</tr>
			
			<tr>
				<Td>Image</td>
				<td><input type="file" name="img" required></td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" name="save" value="Insert Data"/>
				</td>
			</tr>
			</table>
		</form>
	</body>

<!-- display data starts -->
<table border="1">
<tr style="background:#CCCCCC" height="30px"><th>id</th><th>image</th><th>title</th><th>desc</th>
<th>Image</th>
<th>&nbsp;</th><th>&nbsp;</th>
</tr>


<?php
$per_page = 5;  // number of results to show per page
$result = mysql_query("SELECT * FROM news_insert");//
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have



	for ($i = $start; $i < $end; $i++)  
	{
		if ($i == $total_results)
		 {
		 break;
		 }
	?>
	<tr>
		<td><?php echo mysql_result($result, $i, 'name');?></td>
		<td><?php echo mysql_result($result, $i, 'email');?></td>
		<td><?php echo mysql_result($result, $i, 'address');?></td>
		<td><?php echo mysql_result($result, $i, 'mobile');?></td>
		<td><img src="image/<?php echo mysql_result($result, $i, 'email')."/".mysql_result($result, $i, 'image');?>" width="40px" /></td>
		<td><a href="edit.php?email=<?php echo mysql_result($result, $i, 'email');?>">Edit</a></td>
		<td><a href="delete.php?email=<?php echo mysql_result($result, $i, 'email');?>&image=<?php echo mysql_result($result, $i, 'image');?>">Delete</a></td>
	</tr>  
	
	<?php }  ?>

</table>
<!-- display data end -->