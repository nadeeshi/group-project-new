
<!DOCTYPE html>

<html>

    <head>
        <title>Update Bats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="navbar1n2.css">
        <link rel="stylesheet" href="body_form.css">
        <link rel="stylesheet" href="stylesheet1.css">
        <link rel="stylesheet" href="manage_button.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    </head>
    <body>
        <div class="col-xs-12">
            <?php include"navbar1.html"?>
        </div>





        <div class="n-container container">

            <div class="n-dropdown">
                <button class="n-dropbtn">MANAGE BATS</button>
                <div class="n-dropdown-content">
                    <a class ="n-a" href="#">UPDATE A BAT</a>
                    <a class ="n-a" href="#">REMOVE A BAT</a>

                </div>
            </div>


            <form class="form-horizontal n-form"  method ="post" >
                <div class="form-group my-form-group">

                    <div class= "title-div-class">
                        <h2><font color= white face=Arimo>UPDATE THIS BAT</font</h2>
                    </div>
                </div>


                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label" >Scientific Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field" name ="scientific_name">
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Order</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field " name="bat_order"      >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">kingdom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field " name="kingdom"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Genus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field "  name= "genus"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Phylum</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field " name="phylum"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Family</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field "  name="family"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Sub Family</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field "name= "sub_family"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Class</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field "name="bat_class"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Common Name(s)</label>
                    <div class="col-sm-10">

                        <textarea class="form-control my-text-field " name="common_names" id="cnames" rows="5" cols="20" > </textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Roots</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field " name="roots"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Red List Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field "  name="red_list_cat"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Country Occurence</label>
                    <div class="col-sm-10">

                        <textarea class="form-control my-text-field" name="country_occurence" rows="4" cols="20" > </textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Population</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="population" rows="4" cols="20" ></textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Diet and Feeding</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="feeding" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Reproduction</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="reprodution"rows="4" cols="20" ></textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Major Threats</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name= "threats" rows="4" cols="20"></textarea>
                    </div>
                </div>


                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Conservation Actions</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="conservation_action"  rows="4" cols="20"></textarea>
                    </div>
                </div>


                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Measurements</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="measurements"  rows="4" cols="20" ></textarea>

                        <input type="file" id="msmnt" name="measurement_file" class= "browse" name="pic" accept="image/*">
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Species Authority</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field " name="authority"       >
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Bibliography</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="bibiliogrphy" rows="6" cols="20" > </textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">References</label>

                    <div class="col-sm-10">

                        <textarea class="form-control my-text-field" name="reference"  rows="5" cols="20"></textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label">Other Details</label>
                    <div class="col-sm-10">
                        <textarea class="form-control my-text-field" name="other_details"  rows="5" cols="20" ></textarea>
                    </div>
                </div>

                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label"><font color= white face=Arimo>Photos</font>         </label>
                    <div class="col-sm-10">
                        <input type="file" name="photos" id="pic "class= "browse "  accept="image/*">
                    </div>
                </div>
                <div class="form-group my-form-group">
                    <label class="control-label col-sm-2 my-label"><font color= white face=Arimo>Voice </font> </label>
                    <div class="col-sm-10">
                        <input type="file"  name="voice" class= "browse  "  accept="audio/*">
                    </div>
                </div>







                <div class="form-group">
                    <div class="col-sm-offset-2 col-xs-12 but-position btn-group">
                        <button type="submit" class="btn btn-default button-my button">Edit</button>
                        <button type="reset" class="btn btn-default button-my button">Submit</button>
                    </div>
                </div>



            </form>
        </div>



    </body>
</html>