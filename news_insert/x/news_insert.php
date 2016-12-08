
<?php include("news_db_insert.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>thread</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<!--<link rel="stylesheet" type="text/css" href="../css/editnewsmain.css">-->	
	<link href="../css/navbar1n2.css" rel="stylesheet" type="text/css">
	
	<link href="../css/footer.css" rel="stylesheet">
	<script src="../js/jquary.js"></script> 
  	<script src="../js/bootstrapjs.js"></script>
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
		include ("../template/navbarTemplate.php"); ?>
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
				   <input type="submit" name="view" value="view submitted record">
					   
					   <div class="clearfix"> </div>
				   
					</div>
					 
				</form>


		
		</div>
	</div>
	</div>
	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include ("../template/footer.php"); ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>