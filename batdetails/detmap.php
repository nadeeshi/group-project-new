


<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>News</title>
	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css" >


<script src="js//jquary.js"></script>
<script src="js//bootstrapjs.js"></script>
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	
	
	
	
	

	<?php include ('input.php');
			include ('image.php');	
		if($count ==1){
	?>
	<div id="page">
		<div id="header">
			
		</div>
		<div class="row">
          <div class="col-md-12">
		<div id="contents">
		
		 
			<div class="background">
		
				<div id="news">
				
					<h4>BAT Profile </h4>
					<ul>
						<li>
							<img src="<?php echo $img;?>" alt="Img" style = "display: block;  height: 80% ; width: 35%; height:auto;"/>
							<p>
								<em style="color: #2D343E;">   <?php echo $output;?> </br>
								<?php $des;?></br>
								</em>
								
							</p>
						</li>
						<li>
							<?php include ('googlemap.php');?>
						</li>
					</ul>
				</div>
			</div>
			</div>
		
		<div id="footer">
		</div>	
		</div>
		</div>
	</div>
	<?php }
		else{
	?>
	<div id="page">
		<div id="header">
			
		</div>
		<div class="row">
          <div class="col-md-12">
		<div id="contents">
		
		 
			<div class="background">
		
				<div id="news">
				
					<h4>OOPS!!! NO MATCH FOUND</h4>
					<ul>
						<li>
							<img src="images/404.jpg" alt="404" style = "display: block; margin:auto !important;  height: 80% ; width: 100%; height:auto;"/>
						</li>
					</ul>
				</div>
			</div>
			</div>
		
		<div id="footer">
		</div>	
		</div>
		</div>
	</div>
	
	<?php }?>
	
	
</body>
</html>