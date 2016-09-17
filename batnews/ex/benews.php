


<!DOCTYPE html>
<html>

<head>
<title>batinfo
</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/theme.css">
<link rel="stylesheet" type="text/css" href="css/CS3.css">
<link rel="stylesheet" type="text/css" href="css/style(2).css">
<script src="js//jquary.js"></script>
<script src="js//bootstrapjs.js"></script>


</head>
<body>
<?php 
					$mysql_hostname = "localhost";
					$mysql_user = "user";
					$mysql_password = "";
					$mysql_database = "test2";
					$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
					$qry = "SELECT * FROM photos WHERE id = '".$_GET['photoid']."' ;";
					$result = mysqli_query($con, $qry);
					$record = mysqli_fetch_assoc($result);
					echo mysqli_num_rows($result);
					?>

<div class="row">
	<div class="col-md-12">   
    <?php include ("navbar1.php")?>	
</div></div>

<div class="row">
	<div class="col-md-12">    
    <?php include ("navbar2.php")?>	
</div></div>



<div class="container">
	
	<div class="s">
        <div class="row">
          <div class="col-md-12">

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
										<img src="<?php echo "../photos/".$record['location']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "margin:auto; display: block; max-height: 24em ; min-height:14em; width: 55%; height:auto;"/>
									</a>
									</div>
								<div class="aidanews2_mainC">
														
									<span class="aidanews2_text">
									<?php echo $record['desc']; ?>
									</span>					
									<a href="/resources/media-education/news-room/press-releases/1006-100-000-awarded-in-grants-to-battle-wns" class="readon">
									<span class="aidanews2_readmore">back to news</span>
									</a>
								</div>
							</div>

							
							<div class="aidanews2_line" style="clear: both; padding: 0;">
							</div>
						</div>
					</div>										
				</div>
					
					
				<div ></div>		
				
				</div>
			</div><!--end news_hm-->
			</div>
				
		</div>
	</div>
		
</div>

    
<div><?php include ("footer.php")?>	</div>	 
</body>
</html>