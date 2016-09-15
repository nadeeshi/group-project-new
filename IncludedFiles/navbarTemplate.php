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
      			<a class="navbar-brand" href="#"><span class="header1">Bats</span><span class="header2">Info</span></a>
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
        			<li class="btn1"><a href="#">Hi Name</a></li> 
              <li class="min-link"><a href="#">Home</a></li>
              <li class="min-link"><a href="#">Add Information</a></li>
              <li class="min-link"><a href="#">Update Information</a></li>
              <li class="min-link"><a href="#">Delete Information</a></li>
              <li class="min-link"><a href="#">Forum</a></li>
              <li class="min-link"><a href="#">News</a></li>
              <li class="min-link"><a href="#">About Us</a></li>
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
				<li><a href="#">Home</a></li>
				<li><a href="#">Add Information</a></li>
				<li><a href="#">Update Information</a></li>
				<li><a href="#">Delete Information</a></li>
				<li><a href="#">Forum</a></li>
				<li><a href="#">News</a></li>
        <li><a href="Help/index.php">Help</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
    
		<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">

			<div>
                <div class="head-love">
                    <h2>INSERT A NEW BAT</h2>
                </div>

                <form  id="form" method ="post">

                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Scientific Name" name ="scientific_name"  aria-describedby="sname" >

                    </div>


                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Bat Order"name="bat_order" id="order" aria-describedby="order">
                    </div>

                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Kingdom" name="kingdom" id="kingdom" aria-describedby="kingdom">

                    </div>

                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Genus" name= "genus" id="genus" aria-describedby="genus" >
                    </div>
                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Phylum" name="phylum" id="phylum" aria-describedby="phylum" >

                    </div>

                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Family" name="family" id="family" aria-describedby="family" >
                    </div>
                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Sub Family" name= "sub_family" id="sbfamily" aria-describedby="sbfamily">

                    </div>

                    <div class="form-group ">

                        <input type="text" class="form-control" placeholder="Class" name="bat_class"  id="class" aria-describedby="class" >
                    </div>
                    <div class="form-group ">

                        <textarea class="form-control" placeholder="Common Name" name="common_names" id="cnames" rows="4" cols="50" ></textarea>

                    </div>
                </form>
                <div>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                  <p>hfkjsdgfkwgfkhwgfhwgvhjwvwejvewvwjcw</p>
                </div>
			</div>
		</div>
	</div>
</body>
</html>