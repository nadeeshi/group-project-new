<!DOCTYPE html>
<html>
<head>
	<title>thread</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/newschild.css">	
	<link href="../css/navbar1n2.css" rel="stylesheet" type="text/css">
	<link href="../css/footer.css" rel="stylesheet">
	<script src="../js/jquary.js"></script> 
  	<script src="../js/bootstrapjs.js"></script>
	
	
	
	
	
</head>
<body>
	<?php 
					$mysql_hostname = "localhost";
					$mysql_user = "root";
					$mysql_password = "";
					$mysql_database = "test2";
					$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
					$qry = "SELECT * FROM photos WHERE id = '".$_GET['batid1']."' ;";
					$result = mysqli_query($con, $qry);
					$record = mysqli_fetch_assoc($result);
					
					?>
	
	<div>
		<?php include ("../template/navbarTemplate.php"); ?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
	
	
		<div class="container">
	
	<div class="s">


            <div id="news_hm">		
			 
				<div class="moduletable">
			 					
					<div class="aidanews2" >
						<div class="aidanews2_art aidaord_1 aidaid_1006 aidacat_83  odd first" >
							<div class="aidanews2_positions">
								<div class="aidanews2_main" >
									<h1 class="ax press-release">
									<?php echo $record['caption']; ?>
									</h1>
									<div class="aidanews2_mainL">
									<a class="aidanews2_img1" href="">
										<img src="<?php echo "photos/".$record['location']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "margin:auto; display: block; max-height: 32em ; min-height:14em; width: 45%; height:auto;"/>
									</a>
									</div>
								<div class="aidanews2_mainC">
														
									<span class="aidanews2_text" style="font-size: 1.3em !important; text-align:justify !important;">
									<?php echo $record['desc']; ?>
									</span>					
									<a href="../news_main.php" class="readon">
									<span class="aidanews2_readmore">back to news</span>
									</a>
								</div>
							</div>

							
							<div class="aidanews2_line" style="clear: both; padding: 0;">
							</div>
						</div>
					</div>										
				</div>
					
					
				</div ></div>		
				
				</div>
			
				
		</div>
	
	</div>


	<!-- start footer -->

	<div class="row">
	    <div class="col-xs-10 col-xs-push-2">
	      <?php include ("../template/footer.php"); ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>