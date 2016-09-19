<!DOCTYPE html>
<html>
<head>
  <title>Delete a bat</title> 
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/navnew.css" rel="stylesheet">
 
  <script src="js/jquary.js"></script>
	<link rel="stylesheet" href="css/style.css"/>
  <script src="js/bootstrapjs.js"></script>
	<link rel="stylesheet" href="css/insert_css.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/jquary.js"></script>
    <script src="bootstrapjs.js"></script>
<style>
	
.footer-container {
	position: relative;
    color: #ffffff;
    background-color: #4c4743;
    margin-bottom: 0px;
    margin-left: 15px;
    font-family: 'Varela Round', sans-serif;
    margin-top: -7px  !important;
    padding-bottom: 39px;
		
		}
	.footcon-col-1 {
    margin-top: 10px;
    margin-left: 10px;
}
</style>
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
      			<a class="navbar-brand" href="#" style="font-family:'Chewy', cursive  !important;
						font-size: 50px;"><span class="header1" >Bats</span><span class="header2">Info</span></a>
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
				<li><a href="insert.php">Add Information</a></li>
				<li><a href="update_bat.php">Update Information</a></li>
				<li><a href="delete_bat.php">Delete Information</a></li>
				<li><a href="../forum/forum.php">Forum</a></li>
				<li><a href="#">News</a></li>
        <li><a href="../Help/index.php">Help</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
    



      <!-- me div eka danna dana hema ekakatama -->


	 <div class="col-xs-8 col-xs-push-2  insert-form my-n-container">	
		
	 
	    <form  id="form" action="php/deleteQuery.php" method ="post"   >

                <div class="container-form">
                    <div class="head-form">
                        <h2>Delete this bat</h2><br>
                    </div>


                    <div class="form-group ">
                        <label class= "lbl" >Enter the Scientific Name</label>
                        <input type="text" name ="search" class="form-control my-text" id="scientific_name" aria-describedby="sname" required>

                    </div>
                  
                    <div class=" col-xs-8">
										<button id="del_btn" class="del_btn my-button" type= "submit"  name="delete" onClick="return confirm('Are you sure you wish to delete this bat?');" />Delete </button><br><br>
                      
               
                    </div>
               </form>
	 
	 
	 </div> 


	</div>
	
	<div class="row">
		<div class="col-xs-12 footer-container">
			<div class="row">
				<div class="col-xs-4 footcon-col-1">
					<b>Mail Us:</b><br>
					<p>Faculty of Science<br>University of Colombo<br>Colombo 07<br>Sri Lanka</p>
				</div>
				<div class="col-xs-4 footcon-col-1">
					<b>Call Us:</b><br>
					<p>+94116250036</p>
				</div>
				<div class="col-xs-3 footcon-col-1">
					<b>Mail Us:</b>
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
<script>

	
	
 $(function() {
		
 	 $("#scientific_name").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#scientific_name").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be English letters');
	  
     
        }
    });
		});
		</script>
</html>