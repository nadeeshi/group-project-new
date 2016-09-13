<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bat Info</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/navbar1n2.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/insert_css.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <script type ="text/javascript" src="js/multi_step_form.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="js/jquary.js"></script>
        <script src="bootstrapjs.js"></script>



    </head>
    <body>
        <nav class="navbar navbar-default  navbar1 navbar-li">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Join With Us</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form  navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter name here">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <ul class="nav navbar-nav  navbar-right navbar-li">
                        <li class="btn1"><a href="#">Hi Name</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container ">

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    ---left content goes here :-P ---
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 my-n-container">

                    <form  id="form" action="insert_data.php" method ="post">
                        <fieldset id="first" class="my-fieldset">
                            <div class="container-form">
                                <div class="head-form">
                                    <h2>INSERT A NEW BAT</h2>
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
                                </div

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
                                <label class= "lbl">Roots</label>
                                <input type="text" class="form-control my-text" name="roots" id="roots" aria-describedby="roots" >

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Red List Category</label>
                                <input type="text" class="form-control my-text" name="red_list_cat" id="redlistc" aria-describedby="redlist">
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Countries Occurrence</label>
                                <textarea class="form-control my-text" name="country_occurence" id="occurence" rows="4" cols="20" > </textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Population</label>
                                <textarea class="form-control my-text" name="population" id="population" rows="4" cols="20" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Diet and Feeding </label>
                                <textarea class="form-control my-text" name="feeding" id="food" rows="4" cols="50"></textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Reproduction</label>
                                <textarea class="form-control my-text" name="reprodution" id="reproduction" rows="4" cols="20" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class= "lbl">Major Threats</label>
                                <textarea class="form-control my-text" name= "threats" id="threats" rows="4" cols="20"></textarea>

                            </div>
                            <div class="form-group">
                                <input type="button" id="pre_btn1"  class="my-button  prev-btn-2 " value="< Previous" onclick="prev_step1()"/>
                                <input type="button" name="next" class="my-button next-btn-2" id="next_btn2" value="Next >" onclick="next_step2()" />
                            </div>


                        </fieldset>

                        <fieldset id="third" class="my-fieldset">
                            <p class="subtitle">[ 3/3 ]</p>
                            <div class="form-group">
                                <label class= "lbl">Conservation Actions </label>
                                <textarea class="form-control my-text" name="conservation_action" id="conseravtion" rows="4" cols="20"></textarea>
                            </div>


                            <div class="form-group">
                                <label class= "lbl">Measurements</label>
                                <textarea class="form-control my-text" name="measurements" id="measurements" rows="4" cols="20" ></textarea>


                            </div>
                            <div class="form-group">
                                <label class= "lbl">Species Authority</label>
                                <textarea class="form-control my-text" name="authority" id="authority" rows="4" cols="20"></textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Bibliography</label>
                                <textarea class="form-control my-text" name="bibiliogrphy" id="bibliography" rows="4" cols="20" > </textarea>
                            </div>
                            <div class="form-group">
                                <label class= "lbl">References</label>
                                <textarea class="form-control my-text" name="reference" id="references" rows="4" cols="20"></textarea>

                            </div>

                            <div class="form-group">
                                <label class= "lbl">Other Details</label>
                                <textarea class="form-control my-text" name="other_details" id="otherDetails" rows="4" cols="20" ></textarea>
                            </div>

                            <div class=" col-xs-8">
                                <input type="button" id="pre_btn2" class="prev-btn-3 my-button" value="< Previous" onclick="prev_step2()"/>
                                <input type="submit" id="sub_btn" class="submit_btn my-button" name="submit" value="submit" onclick="validation(event)"/>

                            </div>

                        </fieldset>




                    </form>
                </div>
            </div>
        </div>

    </div>




</body>
</html>