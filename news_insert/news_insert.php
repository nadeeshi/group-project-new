
<?php include("news_db_insert.php");
//echo $fid;
?>

<!DOCTYPE html>
<html>
<head>
	<title>news insert</title>
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/navbar1n2.css" rel="stylesheet">
  
  <link href="../assets/css/footer.css" rel="stylesheet">
  <script src="../assets/bootstrap/jquary.js"></script> 
  <script src="../assets/bootstrap/bootstrapjs.js"></script> 
  <script src="../js/jssor.slider.mini.js"></script>
	
	
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	
	<!--<link rel="stylesheet" type="text/css" href="../css/editnewsmain.css">-->	
	
	<script src="../js/jquary.js"></script> 
  	
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
		include ("../IncludedFiles/navbarTemplate.php"); ?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
	
		<div class="s">
		
		<form  method="post" enctype="multipart/form-data" action=""> 
				 <div class="register-top-grid">
					
					
					
					<h3>INSERT NEWS</h3>
					<input type="hidden" name="new" value="1" />

					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Select Image<label>*</label></span>
						<input type="file" name="image" onchange="readURL(this);"><br />
						<img id="blah" src="#" alt=""/>
						
					</div>
					
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>News ID<label>*</label></span>
						<input type="text" name="news_id" required > 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Title<label>*</label></span>
						<input type="text" name="title" required> 
					 </div>
					 
					 
					 <textarea type="text" name="body"></textarea>
					 <p><?php //echo $status; ?></p>
					 <div class="clearfix"> </div>
					  <div class="register-but">
					  <input type="submit" name="submit" value="submit"></br>
				   
					   
					   <div class="clearfix"> </div>
				   
					</div>
					 
				</form>
				
				<!----><?php/*
				
echo $last_id;
				$result = mysql_query("SELECT * FROM news_insert ;");
				$row=mysql_fetch_array($result);
				
				//echo mysql_result($result, 1, 'title');
				
				echo $row['news_id'];
				echo "nphotos/" . $row['image'];
				echo $row['title'];
				echo $row['body'];*/
				?>
				<!---->
		</div>
	</div>
	</div>
	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include ("../IncludedFiles/footer.php"); ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>