<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");
?>

<!DOCTYPE html>
<html>
<head>
	<title>profiles</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	
	<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet"><link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/css/profile.css">		
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
					$qry = "SELECT * FROM fulldemo ;";
					$imgList =array(1,2,3,4);
					$desc = array(1,2,3,4);
					$caption =array(1,2,3,4);
					$id = array(1,2,3,4);
					$result = mysqli_query($con, $qry) or die();
					if (mysqli_num_rows($result) >= 3){
						for($i = 0 ; $i < 3;$i++){
							mysqli_data_seek($result,$i);
							$record = mysqli_fetch_assoc($result);
							$imgList[$i] ='../batmap/'.$record['location'];
							//$desc[$i] = $record['desc'];
							$caption[$i] =$record['name'];
							$id[$i] =$record['id'];
						}
					}
					
					
					?>
						
			
			<div class="s">
			
				<div class="row">
					<div class="col-md-12"><h3>bat profiles</h3></div>
				</div>
		
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
					<div class="row">
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
				</div>	
				</div>
				</div>
				</div>
					<!--<div class="col-md-6">
					</div>-->
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
				</div>
				</div>
				</div>	
				</div>
				
				<!---->
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
				</div>
				</div>	
				</div>	
				</div>
				
				<!---->
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
					
				</div>
				</div>	
				</div>	
				</div>
				
				<!---->
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
				</div>	
				</div>	
				</div>	
				</div>
				
				<!---->
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					
				</div>	
				</div>	
				</div>	
				</div>
				
				
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				<div class="row">
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
							<img class="x" src="<?php echo $imgList[1];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
									
					
					
				</div>	
				</div>	
				</div>	
				</div>
				
				
				
				<div class="row">
				<div class="col-md-12">
				<div class="ad">
				<div class="row">
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
							<img class="x" src="<?php echo $imgList[2];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
						</p>

					</div>
					</div>
					
					<div class="col-md-3">
					<div class="x">
						<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
							<img class="x" src="<?php echo $imgList[0];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
						</a>
						
						<p class="aidanews2_title">
							<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
						</p>

					</div>
					</div>
				
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