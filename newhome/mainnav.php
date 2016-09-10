<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand"  style="font-size:20px;">BatFacts.com</a>
    		</div>

    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav" style="font-size: 18px; padding-top: 15px; padding-bottom: 15px;">
       				<li class="active"><a href="myhome.php">Home</a></li>
        			<li><a href="#">News</a></li>
        			<li><a href="myhome.php#articles">Articles</a></li>
        			<li><a href="#">Threads</a></li>
        			<li><a href="#">Gallery</a></li>
        			<li><a href="aboutus.php">About Us</a></li>
					<li><a href="#contact">Contact Us</a></li>
      			</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> Members</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
  <?php include ("newmodal.php")?>

</body>
</html>
	