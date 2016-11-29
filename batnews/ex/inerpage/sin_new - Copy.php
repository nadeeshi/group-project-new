<!DOCTYPE html>
<html>
<head>
  <title>batsinfo</title> 
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="../css/navnew.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  
 <link rel="stylesheet" type="text/css" href="css/newschild.css">
  
  
  <script src="js/jquary.js"></script> 
  <script src="js/bootstrapjs.js"></script>

<style>
	
.footer-container {
	z-index:0.9;
	position: absolute;
    color: #ffffff;
    background-color: #4c4743;
    margin-bottom: 0px;
    margin-left: 15px;
	margin-right: 0;
    font-family: 'Varela Round', sans-serif;
    margin-top: 900px  !important;
    padding-bottom: 39px;
	width:100%;	
		}
	.footcon-col-1 {
    margin-top: 10px;
    margin-left: 10px;
}
</style>
  
</head>
<body>

<?php 
					$mysql_hostname = "localhost";
					$mysql_user = "root";
					$mysql_password = "";
					$mysql_database = "project";
					$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
					$qry = "SELECT * FROM photos WHERE id = '".$_GET['photoid']."' ;";
					$result = mysqli_query($con, $qry);
					$record = mysqli_fetch_assoc($result);
					
					?>


	<!-- start of the heading naavigation bar -->
  <!-- <div class="nav-header"> -->
  	<nav class="navbar navbar-default navbar1 navbar-li">
  		<div class="container-fluid"> 
    	<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="#" style="font-family:'Chewy', cursive  !important;
  font-size: 50px;"><span class="header1" >Bats</span><span class="header2">Info</span></a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
        
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      			<form class="navbar-form  navbar-right" action="../../batmap/map_and_det.php" method="post">
        			<div class="form-group">
          				<input type="text" class="form-control input-area" name='address' required placeholder="Enter name here">
        			</div>
        			<button type="submit" class="btn btn-default">Search</button>
      			</form>
      			<ul class="nav navbar-nav  navbar-right navbar-li">
        			<li class="btn1"><a href="#">Hi Name</a></li> 
              
              <li class="min-link"><a href="../Help/index.php">Help</a></li>
              
     			</ul> 
    		</div> <!-- /.navbar-collapse -->
      </div>
   	<!-- /.container-fluid -->
 	  </nav>
	<!-- End of the heading navigation bar -->
 
  <div class="row"> 
    <!-- start of the side navigation bar -->
 		<div class="col-xs-2 list-container mini-bar">
 			<div class="profile-picture">
 				<!-- <img src="../img/proPic.png"> -->
 			</div>
			<ul class="nav nav-pills nav-stacked list-of-content">
				<li><a href="../phpPages/researcherHomePage.php">Home</a></li>
				<li><a href="#">Add Information</a></li>
				<li><a href="#">Update Information</a></li>
				<li><a href="#">Delete Information</a></li>
				<li><a href="../forum/forum.php">Forum</a></li>
				<li><a href="../news_main.php">News</a></li>
        <li><a href="../Help/index.php">Help</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
    



      <!-- me div eka danna dana hema ekakatama -->


		<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
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
										<img src="<?php echo "../photos/".$record['location']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "margin:auto; display: block; max-height: 32em ; min-height:14em; width: 45%; height:auto;"/>
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
	</div>
<div class="row">
		<div class="col-xs-12 footer-container">
			<div class="row">
				<div class="col-xs-push-2 col-xs-4 footcon-col-1">
					<p>Mail Us:</p>
					<p>Faculty of Science<br>University of Colombo<br>Colombo 07<br>Sri Lanka</p>
				</div>
				<div class="col-xs-push-2 col-xs-4 footcon-col-1">
					<p>Call Us:</p>
					<p>+94116250036</p>
				</div>
				<div class="col-xs-push-1 col-xs-2 footcon-col-1">
					<p>Mail Us:</p>
					<p>zoologydept@fos.cmb.ac.lk</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-push-10 col-xs-2">
					<p>All Rights Reserved</p>
				</div>
			</div>
		</div>
</div>		
</body>
</html>