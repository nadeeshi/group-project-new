<?php
session_start();
include_once '../loginsystem/dbconnect.php';
?>
<!-- start of the heading naavigation bar -->
<!-- <div class="nav-header"> -->
<div>
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
    
    			<form class="navbar-form  navbar-right" action="../search/testing.php" method="post">
      			<div class="form-group">
        				<input type="text" class="form-control input-area" name='address' placeholder="Enter name here">
      			</div>
      			<button type="submit" class="btn btn-default">Search</button>
    			</form>
    			<div class="collapse navbar-collapse" id="navbar1">
            	<ul class="nav navbar-nav navbar-right" style="font-size: 18px; padding-top: 1px; padding-bottom: 8px;">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="../loginsystem/logout.php">Log Out</a></li>
                <?php } else { ?>
                  <li><a href="../loginsystem/login.php">Login</a></li>
                  <li><a href="../loginsystem/register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
            <li class="min-link"><a href="../phpPages/researcherHomePage.php">Home</a></li>
            <li class="min-link"><a href="../nadee/listOfBats.php">Bats Info</a></li>
            <li class="min-link"><a href="../nadee/listOfResearch.php">Research Info</a></li>
            <li class="min-link"><a href="../forum/forumTopics.php">Forum</a></li>
            <li class="min-link"><a href="../batnews/newst.php">News</a></li>
            <li class="min-link"><a href="../help/index.php">Help</a></li>
            <li class="min-link"><a href="../phpPages/aboutUs.php">About Us</a></li>
   			</ul> 
  		</div> <!-- /.navbar-collapse -->
    </div>
 	<!-- /.container-fluid -->
	  </nav>
<!-- End of the heading navigation bar -->

  <div> 
    <!-- start of the side navigation bar -->
 		<div class="col-xs-2 list-container mini-bar">
 			<div class="profile-picture">
 				<!-- <img src="../img/proPic.png"> -->
 			</div>
			<ul class="nav nav-pills nav-stacked list-of-content">
				<li><a href="../phpPages/researcherHomePage.php">Home</a></li>
        <li><a href="../nadee/listOfBats.php">Bats Info</a></li>
        <li><a href="../nadee/listOfResearch.php">Research Info</a></li>
				<li><a href="../forum/forumTopics.php">Forum</a></li>
				<li><a href="../batnews/newst.php">News</a></li>
				
				<li><a href="../news_insert/news_insert.php">News insert</a></li>
				<li><a href="../profiles/profiles.php">profile</a></li>
		<li><a href="../help/index.php">Help</a></li>
				<li><a href="../phpPages/aboutUs.php">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
	</div>
</div>
