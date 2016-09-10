<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/insert_bats.css" rel="stylesheet">
<!--         <link href="assets/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="assets/css/navbar1n2.css" rel="stylesheet">

        <link href="assets/css/footer.css" rel="stylesheet">
        <script src="assets/bootstrap/jquary.js"></script> 
        <script src="assets/bootstrap/bootstrapjs.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/insert_bats.css">


    </head>


    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <ul class="nav navbar-nav">

                    <li class="pad"><a href="#">Home</a></li>
                    <li class="pad"><a href="#">News</a></li>
                    <li class="dropdown pad"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bats<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Bats List</a></li>
                            <li><a href="#">Photo Gallery</a></li>
                            <li><a href="#">Bats Voice Gallery</a></li>
                            <li><a href="#">Videos</a></li>

                        </ul>
                    </li>
                    <li class="pad"><a href="#">Chat</a></li>
                    <li class="pad"><a href="#">Contact Us</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search Here</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
      




        <div  id="sectn col-xs-10">
            <div class="container ">


                <h2 id="title"><font  face=Arimo>INSERT A NEW BAT</font></h2>

                <form id="form" method ="post">

                    <div class="form-group col-xs-8">
                        <label class= "lbl" >Scientific Name</label>
                        <input type="text" name ="scientific_name" class="form-control" aria-describedby="sname" >

                    </div>


                    <div class="form-group col-xs-8">
                        <label class= "lbl">Order</label>
                        <input type="text" class="form-control" name="bat_order" id="order" aria-describedby="order">
                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Kingdom</label>
                        <input type="text" class="form-control" name="kingdom" id="kingdom" aria-describedby="kingdom">

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Genus</label>
                        <input type="text" class="form-control" name= "genus" id="genus" aria-describedby="genus" >
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Phylum</label>
                        <input type="text" class="form-control" name="phylum" id="phylum" aria-describedby="phylum" >

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Family</label>
                        <input type="text" class="form-control" name="family" id="family" aria-describedby="family" >
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Sub Family</label>
                        <input type="text" class="form-control" name= "sub_family" id="sbfamily" aria-describedby="sbfamily">

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Class</label>
                        <input type="text" class="form-control" name="bat_class"  id="class" aria-describedby="class" >
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Common Name(s)</label>
                        <textarea class="form-control" name="common_names" id="cnames" rows="4" cols="50" > </textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Synonyms</label>
                        <textarea class="form-control" name="synonyms" id="synonyms" rows="4" cols="50" > </textarea>
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Roots</label>
                        <input type="text" class="form-control" name="roots" id="roots" aria-describedby="roots" >

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Red List Category</label>
                        <input type="text" class="form-control" name="red_list_cat" id="redlistc" aria-describedby="redlist">
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Countries Occurrence</label>
                        <textarea class="form-control" name="country_occurence" id="occurence" rows="4" cols="20" > </textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Population</label>
                        <textarea class="form-control" name="population" id="population" rows="4" cols="20" ></textarea>
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Diet and Feeding </label>
                        <textarea class="form-control" name="feeding" id="food" rows="4" cols="50"></textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Reproduction</label>
                        <textarea class="form-control" name="reprodution" id="reproduction" rows="4" cols="20" ></textarea>
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Major Threats</label>
                        <textarea class="form-control" name= "threats" id="threats" rows="4" cols="20"></textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Conservation Actions </label>
                        <textarea class="form-control" name="conservation_action" id="conseravtion" rows="4" cols="20"></textarea>
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Anatomy</label>
                        <textarea class="form-control" name="anatomy" id="anatomy" rows="4"  cols="20"></textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Measurements</label>
                        <textarea class="form-control" name="measurements" id="measurements" rows="4" cols="20" ></textarea>

                        <input type="file" id="msmnt" name="measurement_file" class= "browse" name="pic" accept="image/*">
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">Species Authority</label>
                        <textarea class="form-control" name="authority" id="authority" rows="4" cols="20"></textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Bibliography</label>
                        <textarea class="form-control" name="bibiliogrphy" id="bibliography" rows="4" cols="20" > </textarea>
                    </div>
                    <div class="form-group col-xs-8">
                        <label class= "lbl">References</label>
                        <textarea class="form-control" name="reference" id="references" rows="4" cols="20"></textarea>

                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl">Other Details</label>
                        <textarea class="form-control" name="other_details" id="otherDetails" rows="4" cols="20" ></textarea>
                    </div>





                    <div class="form-group col-xs-8">
                        <label class= "lbl"><font color= white face=Arimo>Photos</font></label>
                        <input type="file" name="photos" id="pic"class= "browse"  accept="image/*">
                    </div>

                    <div class="form-group col-xs-8">
                        <label class= "lbl"><font color= white face=Arimo>Voices</font></label>
                        <input type="file" name="voice" id="voice" class= "browse"  accept="audio/*">
                    </div>
                    <div class="btn-group col-xs-8">



                        <button type ="submit" class="button button1" >Submit</button>

                        <button type="reset" class="button button2 ">Reset</button>



                    </div>
                </form>
            </div>


        </div>


        <?php

        $scientific_name = $_POST['scientific_name'];
        $bat_order = $_POST['bat_order'];
        $kingdom = $_POST['kingdom'];
        $genus = $_POST['genus'];
        $phylum = $_POST['phylum'];
        $family  = $_POST['family'];
        $bat_class  = $_POST['bat_class'];
        $sub_family  = $_POST['sub_family'];
        $common_names = $_POST['common_names'];
        $synonyms = $_POST['synonyms'];
        $roots = $_POST['roots'];
        $red_list_cat = $_POST['red_list_cat'];
        $country_occurence = $_POST['country_occurence'];
        $population = $_POST['population'];
        $feeding = $_POST['feeding'];
        $reprodution = $_POST['reprodution'];
        $threats = $_POST['threats'];
        $conservation_action = $_POST['conservation_action'];
        $anatomy = $_POST['anatomy'];
        $measurements = $_POST['measurements'];
        $authority = $_POST['authority'];
        $bibiliogrphy = $_POST['bibiliogrphy'];
        $reference = $_POST['reference'];
        $other_details = $_POST['other_details'];
        $measurement_file = $_POST['measurement_file'];
        $photos  = $_POST['photos'];
        $voice = $_POST['voice'];



        $linkz = mysqli_connect("ap-cdbr-azure-east-c.cloudapp.net","b15599922d522d","d81a41d6","bat_info") or die ("Could not connected to database");
        mysqli_select_db($linkz,"bat_info") or die ("Database error");

        mysqli_query($linkz,"INSERT INTO new_bats(scientific_name,bat_order,kingdom,genus,phylum,family,bat_class,sub_family,common_names,synonyms,roots,red_list_cat,country_occurence,population,feeding,reprodution,threats,conservation_action,anatomy,measurements,authority,bibiliogrphy,reference,other_details,measurement_file,photos,voice)
        VALUES('$scientific_name','$bat_order','$kingdom','$genus','$phylum','$family','$bat_class','$sub_family','$common_names','$synonyms','$roots','$red_list_cat','$country_occurence','$population','$feeding','$reprodution','$threats','$conservation_action','$anatomy','$measurements','$authority','$bibiliogrphy','$reference','$other_details','$measurement_file','$photos','$voice')");

        echo "";

        $con = mysqli_connect('ap-cdbr-azure-east-c.cloudapp.net','b15599922d522d','d81a41d6');
        ?>



    </body>

</html>

