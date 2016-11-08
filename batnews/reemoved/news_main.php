<!DOCTYPE html>
<html>
<head>
  <title>batsinfo</title> 
  <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/newsmain.css" rel="stylesheet" type="text/css">	
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
		<div class="container">
	
	<?php 
					$mysql_hostname = "localhost";
					$mysql_user = "root";
					$mysql_password = "";
					$mysql_database = "test2";
					$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
					$qry = "SELECT * FROM photos ORDER BY id DESC;";
					$imgList =array(1,2,3,4);
					$desc = array(1,2,3,4);
					$caption =array(1,2,3,4);
					$id = array(1,2,3,4);
					$result = mysqli_query($con, $qry) or die();
					if (mysqli_num_rows($result) >= 4){
						for($i = 0 ; $i < 4;$i++){
							mysqli_data_seek($result,$i);
							$record = mysqli_fetch_assoc($result);
							$imgList[$i] ='photos/'.$record['location'];
							$desc[$i] = $record['desc'];
							$caption[$i] =$record['caption'];
							$id[$i] =$record['id'];
						}
					}
					
					
					?>
						
		

		<div class="s">
        <div class="row">
          <div class="col-md-6">

             <div id="news_hm">		
			 
			 <div class="moduletable">
					
					
					
					<div class="aidanews2" >
					<div class="aidanews2_art aidaord_1 aidaid_1006 aidacat_83  odd first" >
					<div class="aidanews2_positions">
					<div class="aidanews2_main" >
					<div class="aidanews2_mainL">
					<a class="aidanews2_img1" href=<?php echo "'inerpage/sin_new.php?photoid=".$id[0]."'"; ?>>
						<img src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 75%; height:auto;"/>
					</a>
					</div>
					<div class="aidanews2_mainC">
					<h1 class="aidanews2_title press-release">
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
					</h1>					
					<span class="aidanews2_text">
					<?php echo substr($desc[0],0,150)."..."; ?>
					</span>					
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[0]."'"; ?> class="readon">
					<span class="aidanews2_readmore">Read More</span>
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
		
		<div class="col-md-6">

             <div id="news_hm">		
			 
			 <div class="moduletable">
			 
					
					
					
					<div class="aidanews2" >
					<div class="aidanews2_art aidaord_2 aidaid_1003 aidacat_80  even" >
					<div class="aidanews2_positions">
					<div class="aidanews2_main" >
					<div class="aidanews2_mainL">
					<a class="aidanews2_img1" href=<?php echo "'inerpage/sin_new.php?photoid=".$id[1]."'"; ?> >
					<img src="<?php echo $imgList[1];?>" alt="locals-go-loco-for-bats" style = "display: block; max-height: 25em ; min-height:14em; width: 75%; height:auto;"/>
					</a>
					</div>
					<div class="aidanews2_mainC">
					<h1 class="aidanews2_title latest-news">
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[1]."'"; ?> ><?php echo $caption[1]; ?></a>
					</h1>
					<span class="aidanews2_text">
					<?php echo substr($desc[1],0,150)."..."; ?>
					</span>
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[1]."'"; ?> class="readon">
					<span class="aidanews2_readmore">Read More
					</span>
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
	
	
	<div class="s">
        <div class="row">
          <div class="col-md-6">

             <div id="news_hm">		
			 
			 <div class="moduletable">
			 
					
					
					
					<div class="aidanews2" >
					<div class="aidanews2_art aidaord_1 aidaid_1006 aidacat_83  odd first" >
					<div class="aidanews2_positions">
					<div class="aidanews2_main" >
					<div class="aidanews2_mainL">
					<a class="aidanews2_img1" href=<?php echo "'inerpage/sin_new.php?photoid=".$id[2]."'"; ?>>
						<img src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block;  max-height: 25em ; min-height:14em; width: 75%; height:auto;"/>
					</a>
					</div>
					<div class="aidanews2_mainC">
					<h1 class="aidanews2_title press-release">
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
					</h1>					
					<span class="aidanews2_text">
					<?php echo substr($desc[2],0,150)."..."; ?>
					</span>					
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[2]."'"; ?> class="readon">
					<span class="aidanews2_readmore">Read More</span>
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
		
		<div class="col-md-6">

             <div id="news_hm">		
			 
			 <div class="moduletable">
			 
					
					
					
					<div class="aidanews2" >
					<div class="aidanews2_art aidaord_2 aidaid_1003 aidacat_80  even" >
					<div class="aidanews2_positions">
					<div class="aidanews2_main" >
					<div class="aidanews2_mainL">
					<a class="aidanews2_img1" href=<?php echo "'inerpage/sin_new.php?photoid=".$id[3]."'"; ?>>
					<img src="<?php echo $imgList[3];?>" alt="locals-go-loco-for-bats" style = "display: block;    max-height: 25em ; min-height:14em; width: 75%; height:auto;"/>
					</a>
					</div>
					<div class="aidanews2_mainC">
					<h1 class="aidanews2_title latest-news">
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[3]."'"; ?>><?php echo $caption[3]; ?></a>
					</h1>
					<span class="aidanews2_text">
					<?php echo substr($desc[3],0,150)."..."; ?>
					</span>
					<a href=<?php echo "'inerpage/sin_new.php?photoid=".$id[3]."'"; ?> class="readon">
					<span class="aidanews2_readmore">Read More
					</span>
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
			</div>
		</div>
		
		
		
	</div>
	</div>
	
	</div>

	</div>
	
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