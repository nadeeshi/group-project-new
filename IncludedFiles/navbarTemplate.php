<?php
session_start();

include_once '../mainhome/dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>navTemplate</title> 
  <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/navbar1n2.css" rel="stylesheet">
  <link href="../assets/css/footer.css" rel="stylesheet">
  <script src="../assets/bootstrap/jquary.js"></script> 
  <script src="../assets/bootstrap/bootstrapjs.js"></script> 
</head>
<body>
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
      			<a class="navbar-brand" href="#"><span class="header1" >Bats</span><span class="header2">Info</span></a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
        
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      			<form class="navbar-form  navbar-right">
        			<div class="form-group">
          				<input type="text" class="form-control input-area" placeholder="Enter name here">
        			</div>
        			<button type="submit" class="btn btn-default">Search</button>
      			</form>
      			<ul class="nav navbar-nav  navbar-right navbar-li">
              <?php if (isset($_SESSION['usr_id'])) { ?>
                <li class="btn1" style="font-size: 15px !important; color:#ffffff; padding-top:17px;">Hi <?php echo $_SESSION['usr_name']; ?></li>
                <li class="btn1"><a href="../mainhome/logout.php" style="font-size:15px; padding-top:17px !important;">Log Out</a></li>

              <?php } ?>
              <li class="min-link"><a href="../phpPages/researcherHomePage.php">Home</a></li>
              <li class="min-link"><a href="../final_insert_update_del/insert.php">Add Information</a></li>
              <li class="min-link"><a href="../final_insert_update_del/update_bat.php">Update Information</a></li>
              <li class="min-link"><a href="../final_insert_update_del/delete_bat.php">Delete Information</a></li>
              <li class="min-link"><a href="../forum/forum.php">Forum</a></li>
<<<<<<< HEAD
              <li class="min-link"><a href="../batnews/news_main.php">News</a></li>
              <li class="min-link"><a href="../Help/index.php">Help</a></li>
=======
              <li class="min-link"><a href="../batnews/grid31.php">News</a></li>
              <li class="min-link"><a href="../help/index.php">Help</a></li>
>>>>>>> origin/master
              <li class="min-link"><a href="../phpPages/aboutUs.php">About Us</a></li>
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
				<li><a href="../final_insert_update_del/insert.php">Add Information</a></li>
        			<li><a href="../final_insert_update_del/update_bat.php">Update Information</a></li>
        			<li><a href="../final_insert_update_del/delete_bat.php">Delete Information</a></li>
				<li><a href="../forum/forum.php">Forum</a></li>
<<<<<<< HEAD
				<li><a href="../batnews/news_main.php">News</a></li>
        			<li><a href="../Help/index.php">Help</a></li>
=======
				<li><a href="../batnews/grid31.php">News</a></li>
        <li><a href="../help/index.php">Help</a></li>
>>>>>>> origin/master
				<li><a href="../phpPages/aboutUs.php">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
    



      <!-- me div eka danna dana hema ekakatama -->


		<!-- <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">	
		</div> -->


	</div>
</body>
</html>