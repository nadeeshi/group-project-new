<!DOCTYPE html>
<html>
<head>
	<title>details</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/css/mapstyleCopy.css" >	
	<link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/footer.css" rel="stylesheet">
	<script src="../assets/bootstrap/jquary.js"></script> 
  	<script src="../assets/bootstrap/bootstrapjs.js"></script>
		
	
</head>
<body>
	<div>
		<?php include ("../IncludedFiles/navbarTemplate.php"); ?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
		<?php
			
			include ('from_search_image.php');	
		if($count ==1){
		//echo $id;
	?>
		<div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="com">
						<div class="row">
						<div class="col-md-12">
						
						
						
						<p style="text-align:right">create a pdf<br>of this infomation<br>
						
						<a href=<?php echo "'../gen_pdf/gen_pdf.php?id=".$id."'"; ?>>
						<img src="pdf.png" alt="pdf" />
						
						</a>
						</p>
						</div>
						<div class="col-xs-2">				
						</div>
						</div>
						
							<div class="row"><div class="col-xs-12"><h3 style="text-align:center">Bat Profile</h3></div></div>
                            <div class="row">
							<div class="col-xs-12">
                                <div class="inblock">
									<!--
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><h1 class="ax"><?php //echo $record['caption']; ?></h1></br></p>
                                        </div></div>-->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>                            
                                                <a class="aidanews2_img1" href="">
                                                    <img src="<?php echo $img;?>" alt="Img" style = "float: left ;margin: 0px 15px 15px 20px; max-height: 20em ; min-height:14em; width: 20%; height:auto;"/>
                                                </a>
                                            <div class="des" style="color: #2D343E; font: bold 15px/30px 'Alike Angular', serif; !important;">
                                                <?php echo $output;?> </br>
												<?php $des;?></br>
                                            </div>
                                            </p>
                                        </div></div>
                                    <!--
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="news.php" class="readon">
                                                back to news
                                            </a>
                                        </div>
									</div>-->

                                </div>
								<div class="row"><div class="col-sm-12">
									<?php include ('from_search_map.php');?>
								</div></div>

                            </div>
                            
                        </div>
                    </div>
</div>
                </div>
            </div>
        </div>
	
	
	
<?php 
	}
	else{
?>
	
	
	
	<div id="page">
		<div id="header">
			
		</div>
		
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
		<div id="footer">
		</div>	
		</div>
		
	


</div>
	
	<?php }?>
	
	</div>


	<!-- start footer -->

	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include ("../IncludedFiles/footer.php"); ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>