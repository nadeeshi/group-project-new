<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>insert a new bat</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
         <!-- <link href="css/navnew.css" rel="stylesheet"> -->

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/insert_css.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="../assets/css/navbar1n2.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <script type ="text/javascript" src="js/multi_step_form.js"></script>
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
.list-container {
height: 962px !important;
    
    
    
}
</style>


    </head>
    <body>
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

     
            <div class="row">
                
                
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
				<li><a href="../batnews/grid31.php">News</a></li>
                <li><a href="../Help/index.php">Help</a></li>
				<li><a href="../phpPages/aboutUs.php">About Us</a></li>
			</ul>
		</div>
                <div class="col-xs-8 col-xs-push-2  insert-form my-n-container">

                    <form  id="form" action="php/bat_insert.php" method ="post" >
                        <fieldset id="first" class="my-fieldset">
                            <div class="container-form">
                                <div class="head-form">
                                    <h2>Insert a new bat</h2>
                                </div>

                                <p class="subtitle">[ 1/3 ]</p>
                                <div class="form-group ">
                                    <label class= "lbl" >Scientific Name</label>
                                    <input type="text" name ="scientific_name" class="form-control my-text" aria-describedby="sname" >

                                </div>


                                <div class="form-group ">
                                    <label class= "lbl">Order</label>
                                    <input type="text" class="form-control my-text" name="bat_order" id="order" aria-describedby="order">
                                </div>

                                <div class="form-group ">
                                    <label class= "lbl">Kingdom</label>
                                    <input type="text" class="form-control my-text" name="kingdom" id="kingdom" aria-describedby="kingdom">

                                </div>

                                <div class="form-group ">
                                    <label class= "lbl">Genus</label>
                                    <input type="text" class="form-control my-text" name= "genus" id="genus" aria-describedby="genus" >
                                </div>
                                <div class="form-group ">
                                    <label class= "lbl">Phylum</label>
                                    <input type="text" class="form-control my-text" name="phylum" id="phylum" aria-describedby="phylum" >

                                </div>

                                <div class="form-group ">
                                    <label class= "lbl">Family</label>
                                    <input type="text" class="form-control my-text" name="family" id="family" aria-describedby="family" >
                                </div>
                                <div class="form-group ">
                                    <label class= "lbl">Sub Family</label>
                                    <input type="text" class="form-control my-text" name= "sub_family" id="sbfamily" aria-describedby="sbfamily">

                                </div>

                                <div class="form-group ">
                                    <label class= "lbl">Class</label>
                                    <input type="text" class="form-control my-text" name="bat_class"  id="class" aria-describedby="class" >
                                </div>
                                <div class="form-group">
                                    <label class= "lbl">Species</label>

                                    <input type="text" class="form-control my-text" name= "species" id="species" aria-describedby="species">
                                </div>

                                <div class="form-group ">
                                    <input type="button" id="next_btn1"  class="my-button next-btn-1 " value="Next >" onclick="next_step1()" /></br>
                                </div>





                        </fieldset>

                        <fieldset id="second" class="my-fieldset">
                            <p class="subtitle">[ 2/3 ]</p>
                            <div class="form-group ">
                                <label class= "lbl">Common Name(s)</label>
                                <textarea class="form-control my-text" name="common_names" id="cnames" rows="4" cols="50" > </textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Synonyms</label>
                                <textarea class="form-control my-text" name="synonyms" id="synonyms" rows="4" cols="50" > </textarea>
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Roosts Types</label>

                                <textarea class="form-control my-text" name="roost" id="roost" rows="4" cols="20" > </textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Conservation Status</label>
                                <input type="text" class="form-control my-text" name="conservation_status" id="conservation_status" aria-describedby="redlist">
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Countries Occurrence</label>
                                <textarea class="form-control my-text" name="country_occurence" id="occurence" rows="4" cols="20" > </textarea>

                            </div>


                            <div class="form-group">
                                <input type="button" id="pre_btn1"  class="my-button  prev-btn-2 " value="< Previous" onclick="prev_step1()"/>
                                <input type="button" name="next" class="my-button next-btn-2" id="next_btn2" value="Next >" onclick="next_step2()" />
                            </div>


                        </fieldset>

                        <fieldset id="third" class="my-fieldset">
                            <p class="subtitle">[ 3/3 ]</p>
                            <div class="form-group">
                                <label class= "lbl">Diet & Feeding </label>
                                <textarea class="form-control my-text" name="feeding" id="food" rows="4" cols="50"></textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Breeding & Habbits</label>
                                <textarea class="form-control my-text" name="breeding" id="breeding" rows="4" cols="20" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Major Threats</label>
                                <textarea class="form-control my-text" name= "threats" id="threats" rows="4" cols="20"></textarea>

                            </div>


                            <div class="form-group">
                                <label class= "lbl">Conservation Actions </label>
                                <textarea class="form-control my-text" name="conservation_action" id="conseravtion" rows="4" cols="20"></textarea>
                            </div>


                            <div class="form-group">
                                <label class= "lbl">Measurements</label>
                                <textarea class="form-control my-text" name="measurements" id="measurements" rows="4" cols="20" ></textarea>


                            </div>


                            <div class="form-group">
                                <label class= "lbl">Other Details</label>
                                <textarea class="form-control my-text" name="other_details" id="otherDetails" rows="4" cols="20" ></textarea>
                            </div>

                            <div class=" col-xs-8">
                                <input type="button" id="pre_btn2" class="prev-btn-3 my-button" value="< Previous" onclick="prev_step2()"/>
                                <input type="submit" id="sub_btn" class="submit_btn_insert my-button" name="submit" value="Submit" onclick="validation(event)"/>

                            </div>

                        </fieldset>




                    </form>
                </div>
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
</html>