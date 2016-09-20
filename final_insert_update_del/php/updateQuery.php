<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>update a bat</title>
        
        
       <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
         <link href="../css/navnew_n.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../../css/insert_css.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <script type ="text/javascript" src="../js/multi_step_form.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="../js/jquary.js"></script>
        <script src="../bootstrapjs.js"></script>
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

.list-container {
        margin-top: 53px !important;
height: 2515px !important;
}
.red-star{
				color: red;
				margin-left: 8px;
				font-size: 12px;
				font-weight: bold;
			}

.profile-picture{
background-image: url('../propic.png');

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

     


        <?php
        require_once('../mysqli_connect.php');



        $output = '';
        if (isset($_POST["search"])) {
            $search = $_POST['search'];


            $sql = "SELECT scientific_name,bat_order,kingdom, genus, phylum, family, sub_family, bat_class,species,common_names,synonyms,roost,conservation_status,country_occurence,feeding,breeding,threats,conservation_action,measurements,other_details FROM batinsert WHERE scientific_name = '$search'";
            $result = mysqli_query($dbc, $sql);
            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_array($result)) {
                    $output .= '
                  
                   


    <div class="row">
         <div class="col-xs-2 list-container mini-bar">
 			<div class="profile-picture">
 				<!-- <img src="../img/proPic.png"> -->
 			</div>
			<ul class="nav nav-pills nav-stacked list-of-content">
				<li><a href="../phpPages/researcherHomePage.php">Home</a></li>
				<li><a href="../insert.php">Add Information</a></li>
				<li><a href="../update_bat.php">Update Information</a></li>
				<li><a href="../delete_bat.php">Delete Information</a></li>
				<li><a href="../forum/forum.php">Forum</a></li>
				 <li><a href="../../batnews/news_main.php">News</a></li>
        <li><a href="../Help/index.php">Help</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
        
        
        
        <div class="col-xs-8 col-xs-push-2  insert-form my-n-container">
        <div class="head-form">
            <h2 class="head-update">Update this bat</h2>
        </div>
                       
        <div >
    
            <button id="edit_btn" class="edit_btn my-button" name="edit" onclick="myFunction()"/>Edit </button><br>
			<span class="red-star" >(* required )</span><br>
    
         </div>
         
         
            <form  id="form"  action="updateQuery.php" method ="post"  onSubmit="return formValidation();">  

                    <div class="container-form">
                        
              
                        <div class="form-group ">
                        
                            <label class= "lbl" >Scientific Name<span class="red-star" >*</span></label>
                            <input type="text" name ="scientific_name" class="form-control my-text" id="scientific_name" aria-describedby="sname" value=' . $row["scientific_name"] . ' disabled/ required>

                        </div>
                        


                        <div class="form-group ">
                            <label class= "lbl">Order<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text ord" name="bat_order" id="order" aria-describedby="order" value=' . $row["bat_order"] . ' disabled/ required>
                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Kingdom<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="kingdom" id="kingdom" aria-describedby="kingdom" value=' . $row["kingdom"] . ' disabled/ required>

                        </div>
                         <div class="form-group ">
                            <label class= "lbl">Genus<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name= "genus" id="genus" aria-describedby="genus" value=' . $row["genus"] . ' disabled/ required>
                        </div>
                        <div class="form-group ">
                            <label class= "lbl">Phylum<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="phylum" id="phylum" aria-describedby="phylum" value=' . $row["phylum"] . ' disabled/ required >

                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Family<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="family" id="family" aria-describedby="family" value=' . $row["family"] . ' disabled/  required>
                        </div>
                        <div class="form-group ">
                            <label class= "lbl">Sub Family<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name= "sub_family" id="sbfamily" aria-describedby="sbfamily" value=' . $row["sub_family"] . ' disabled required>

                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Class<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="bat_class"  id="class" aria-describedby="class" value=' . $row["bat_class"] . ' disabled/ required>
                        </div>
                        <div class="form-group">
                            <label class= "lbl">Species<span class="red-star" >*</span></label>

                            <input type="text" class="form-control my-text" name= "species" id="species" aria-describedby="species" value=' . $row["species"] . ' disabled/ required>
                        </div>




                    <div class="form-group ">
                        <label class= "lbl">Common Name(s)<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="common_names" id="cnames" rows="4" cols="50"  disabled/ required>' . $row["common_names"] . ' </textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Synonyms</label>
                        <textarea class="form-control my-text" name="synonyms" id="synonyms" rows="4" cols="50"  disabled/ >' . $row["synonyms"] . ' </textarea>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Roost Types<span class="red-star" >*</span></label>

                        <textarea class="form-control my-text" name="roost" id="roost" rows="4" cols="20"  disabled/ required> ' . $row["roost"] . '</textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Conservation Status<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text" name="conservation_status" id="conservation_status" aria-describedby="redlist" value=' . $row["conservation_status"] . ' disabled/ required>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Countries Occurrence<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="country_occurence" id="occurence" rows="4" cols="20" disabled/ required>' . $row["country_occurence"] . ' </textarea>

                    </div>




                    <div class="form-group">
                        <label class= "lbl">Diet & Feeding<span class="red-star" >*</span> </label>
                        <textarea class="form-control my-text" name="feeding" id="food" rows="4" cols="50"  disabled/ required> ' . $row["feeding"] . '</textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Breeding & Habbits<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="breeding" id="breeding" rows="4" cols="20"  disabled/ required>' . $row["breeding"] . '</textarea>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Major Threats<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name= "threats" id="threats" rows="4" cols="20" disabled/ required>' . $row["threats"] . '</textarea>

                    </div>


                    <div class="form-group">
                        <label class= "lbl">Conservation Actions </label>
                        <textarea class="form-control my-text" name="conservation_action" id="conseravtion" rows="4" cols="20" disabled/ > ' . $row["conservation_action"] . '</textarea>
                    </div>


                    <div class="form-group">
                        <label class= "lbl">Measurements<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="measurements" id="measurements" rows="4" cols="20"  disabled/ required>' . $row["measurements"] . '</textarea>


                    </div>


                    <div class="form-group">
                        <label class= "lbl">Other Details</label>
                        <textarea class="form-control my-text" name="other_details" id="otherDetails" rows="4" cols="20" disabled/ >' . $row["other_details"] . '</textarea>
                    </div>

                    <div class=" col-xs-8">

                        <input type="submit" id="sub_btn" class="submit_btn my-button" name="submit" value="Submit"  /></br></br></br>

                    </div>
          </form>
        </div>-
    </div>
</div>



      ';
      
                }
                echo $output;
            } else {
                echo 'Data not found!';
            }
            
        }
        if(isset($_POST['submit'])){
           
            $sc_name=$_POST['scientific_name'];
                        
            
            $bat_ordr=$_POST['bat_order'];
            $kingd=$_POST['kingdom'];
            $gen=$_POST['genus'];
            $phy=$_POST['phylum'];
            $fam=$_POST['family'];
            $sfam=$_POST['sub_family'];
            $cls=$_POST['bat_class'];
            $spc=$_POST['species'];
            $cmn_names=$_POST['common_names'];
            
            $syno=$_POST['synonyms'];
            $rts=$_POST['roost'];
            $const=$_POST['conservation_status'];
            $conocc=$_POST['country_occurence'];
            
            $feed=$_POST['feeding'];
            $breed=$_POST['breeding'];
            
            $thrt=$_POST['threats'];
            $conac=$_POST['conservation_action'];
            $measur=$_POST['measurements'];
          
            $otherd=$_POST['other_details'];
           
           
            $updatequery="UPDATE batinsert SET   bat_order = '$bat_ordr',kingdom='$kingd', genus='$gen',phylum='$phy', family='$fam', sub_family ='$sfam',
            bat_class='$cls', species='$spc' , common_names='$cmn_names', synonyms ='$syno', roost='$rts', conservation_status='$const', country_occurence ='$conocc',
            feeding ='$feed',breeding='$breed', threats='$thrt' , conservation_action ='$conac', measurements ='$measur' , other_details ='$otherd'   
            
            
            where scientific_name='$sc_name' ";
            mysqli_query($dbc,$updatequery) or die("Die");
        }
   header("Location:../update_bat.php");
        mysqli_close($dbc);
	 
	
        ?>
        



        <script>
        function myFunction() {
        alert("Are you sure you wish to update this bat"); 
		 
		 
        document.getElementById("scientific_name").disabled = false;
        document.getElementById("order").disabled = false;
        document.getElementById("kingdom").disabled = false;
        document.getElementById("genus").disabled = false;
        document.getElementById("phylum").disabled = false;
        document.getElementById("family").disabled = false;
        document.getElementById("sbfamily").disabled = false;
        document.getElementById("class").disabled = false;
        document.getElementById("species").disabled = false;
        document.getElementById("cnames").disabled = false;
        document.getElementById("synonyms").disabled = false;
        document.getElementById("roost").disabled = false;
        document.getElementById("conservation_status").disabled = false;
        document.getElementById("occurence").disabled = false;
        document.getElementById("food").disabled = false;
        document.getElementById("breeding").disabled = false;
        document.getElementById("threats").disabled = false;
        document.getElementById("conseravtion").disabled = false;
        document.getElementById("measurements").disabled = false;
        document.getElementById("otherDetails").disabled = false;
        
        }
		
        </script>
		
		
  <script>
    $(function() {
		
 	 $("#scientific_name").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#scientific_name").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	
	 $("#order").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#order").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 
	 $("#order").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#order").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 
	 $("#kingdom").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#kingdom").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	
	 $("#genus").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#genus").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 
	 $("#phylum").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#phylum").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 $("#family").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#family").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	
	 $("#sbfamily").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#sbfamily").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 
	 $("#class").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#class").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	 	
 	 $("#species").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test($("#species").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or must be filled with English letters');
	  
     
        }
    });
	
	 $("#cnames").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,]+$/;
        if (regex.test($("#cnames").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 $("#synonyms").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#synonyms").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 $("#roost").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#roost").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	
	 $("#conservation_status").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#conservation_status").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 $("#occurence").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#occurence").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 $("#food").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#food").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	
	 $("#breeding").bind("keyup", function(event) {
        var regex = /^[a-zA-Z\s]\\.\\,\\(\\)+$/;
        if (regex.test($("#breeding").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 $("#threats").bind("keyup", function(event) {
        var regex = /^[a-zA-Z0-9\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#threats").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 	 $("#conseravtion").bind("keyup", function(event) {
        var regex = /^[a-zA-Z0-9\s\\.\\,\\(\\)]+$/;
        if (regex.test($("#conseravtion").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	 
	 $("#measurements").bind("keyup", function(event) {
        var regex = /^[a-zA-Z0-9\s\\.\\,\\(\\)\\:\\{\\}\\+\\-\\*\\/]+$/;
        if (regex.test($("#measurements").val())) {
            $('.validation').html('');
        } else {
       return confirm('This field can not be empty or please check your syntax!');
	  
     
        }
    });
	

	
	
	
	
 });

			
			
			</script>

			
			
			</script>
		
    </body>
  
</html>


                        
                        
                        
                        
                        
                        
                        
                        
      
