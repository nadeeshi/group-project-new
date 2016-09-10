
<!DOCTYPE html>

<html>

    <head>
        <title>Delete Bats</title>
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
                        <h2><font color= white face=Arimo>REMOVE A BAT</font</h2>
                    </div>
                </div>


                <div class="form-group my-form-group">

                    <label class="control-label col-sm-2 my-label" >Scientific Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control my-text-field" name ="scientific_name">
                    </div>
                </div>







                <div class="form-group">
                    <div class="col-sm-offset-2 col-xs-12 but-position btn-group">
                        <button type="submit" class="btn btn-default button-my button">Delete</button>

                    </div>
                </div>



            </form>
        </div>




    </body>