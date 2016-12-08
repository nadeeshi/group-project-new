
<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect("localhost","root","","test2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_REQUEST['ed_id'];
//echo $id;
/*'".$id."'
$qry = "SELECT * FROM news_insert WHERE news_id = '" . $_GET['id'] . "' ;";
*/
$query = "SELECT * from news_insert where nid = '".$_REQUEST['ed_id']."'";
 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>news edit</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/navbar1n2.css" rel="stylesheet">
  <link href="../assets/css/editnewschild.css" rel="stylesheet">
  
  <link href="../assets/css/footer.css" rel="stylesheet">
  <script src="../assets/bootstrap/jquary.js"></script> 
  <script src="../assets/bootstrap/bootstrapjs.js"></script> 
  <script src="../js/jssor.slider.mini.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	
	<script type="text/javascript">

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah')
						.attr('src', e.target.result)
						.width(150)
						.height(200);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}
			
	</script>		
	
<style>

</style>	
	
	
	
</head>
<body>
	<div>
		<?php 
		include ("../IncludedFiles/navbarTemplate.php"); 
		?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
	
		<div class="s">
		
		<form  method="post" enctype="multipart/form-data" action=""> 
				 <div class="register-top-grid">
				 <?php/*
				 //include ("edit_db.php");
		//if(){}
		//$id=$_REQUEST['id'];
		//select from database


//ob_start();

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
//include("edit_db.php");
header('Location:news_before.php?id='.$ns_id);
//ob_end_flush();
}else {*/?>

		
					
					<h3>INSERT NEWS</h3>
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['nid'];?>" />
					
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Select Image<label>*</label></span>
						<input type="file" name="image" onchange="readURL(this);"><br />
						<img id="blah" src="#" alt=""/>
						
					</div>
					
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>News ID<label>*</label></span>
						<input type="text" name="news_id" required value="<?php echo $row['news_id'];?>"> 
					</div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Title<label>*</label></span>
						<input type="text" name="title" required value="<?php echo $row['title'];?>"> 
					 </div>
					 
					 
					 <textarea type="text" name="body" required value=""><?php echo $row['body'];?></textarea>
					 <p><?php //echo $status; ?></p>
					 <div class="clearfix"> </div>
					  <div class="register-but">
					  
				   
					  <input type="submit" name="submit" value="view"></br> 
					   <div class="clearfix"> </div>
				   
					</div>
					 
				</form>
				
				<!----><?php 
				
				error_reporting(0);
				$con = mysqli_connect("localhost","root","","test2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['submit'])) {
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../batnews/photos/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];

$id=$_REQUEST['ed_id'];
//$im=$_REQUEST['image'];
$ns_id =$_REQUEST['news_id'];
//echo $ns_id;
$tt =$_REQUEST['title'];
$des = $_REQUEST['body'];
$update="update news_insert set news_id='".$ns_id."',title='".$tt."',image='".$location."', body='".$des."' where nid='".$id."'";

$r=mysqli_query($con, $update) or die(mysqli_error());
	if (mysqli_query($con, $update)) {
				//echo $ns_id;
	header('Location:news_before.php?id='.$ns_id);
	exit();

    
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($con);
}

mysqli_close($con);
				/*}
				
echo $last_id;
				$result = mysql_query("SELECT * FROM news_insert ;");
				$row=mysql_fetch_array($result);
				
				//echo mysql_result($result, 1, 'title');
				
				echo $row['news_id'];
				echo "nphotos/" . $row['image'];
				echo $row['title'];
				echo $row['body'];*/
				}?>
				<!---->
		</div>
	</div>
	</div>
	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include ("../IncludedFiles/footer.php"); 
		  ?>
	    </div>  
  	</div>

	
	<?php/* 
				
				error_reporting(0);
				$con = mysqli_connect("localhost","root","","test2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['submit'])) {
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../batnews/photos/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];

$id=$_REQUEST['ed_id'];
//$im=$_REQUEST['image'];
$ns_id =$_REQUEST['news_id'];
//echo $ns_id;
$tt =$_REQUEST['title'];
$des = $_REQUEST['body'];
//echo $des;
$update="update news_insert set news_id='".$ns_id."',title='".$tt."',image='".$location."', body='".$des."' where nid='".$id."'";

$r=mysqli_query($con, $update) or die(mysqli_error());
	if (mysqli_query($con, $update)) {
				echo $ns_id;
	header('Location:news_before.php?id='.$ns_id);
	exit();

    
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($con);
}

mysqli_close($con);
				
				}*/
				
				ob_end_flush();?>

	<!-- end of footer -->
</body>
</html>