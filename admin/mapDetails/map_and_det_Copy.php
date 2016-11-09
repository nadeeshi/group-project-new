

<!DOCTYPE html>
<html>
<head>
    <title>batsinfo</title>
    <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/navnew.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/v/mapstyle.css" >
    <script src="js/jquary.js"></script>
    <script src="js/bootstrapjs.js"></script>

    <style>

        .footer-container {
            z-index:0.9;
            position: absolute;
            color: #ffffff;
            background-color: #4c4743;
            margin-bottom: 0px;
            margin-left: 20px;
            margin-right: 0;
            font-family: 'Varela Round', sans-serif;
            margin-top: -7px  !important;
            padding-bottom: 39px;
            width:100%;
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

            <form class="navbar-form  navbar-right" action="map_and_det.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control input-area" name='address' required placeholder="Enter name here">
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
            <li><a href="#">Add Information</a></li>
            <li><a href="#">Update Information</a></li>
            <li><a href="#">Delete Information</a></li>
            <li><a href="../forum/forum.php">Forum</a></li>
            <li><a href="../batnews/news_main.php">News</a></li>
            <li><a href="../Help/index.php">Help</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </div>
    <!-- end of the side navigation bar -->




    <!-- me div eka danna dana hema ekakatama -->


    <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
        <?php
        include ('image.php');
        if($count ==1){
            ?>
            <div id="page">
                <div id="header">

                </div>

                <div id="contents">


                    <div class="background">

                        <div id="news">

                            <h4>BAT Profile </h4>
                            <ul>
                                <li>
                                    <img src="<?php echo $img;?>" alt="Img" style = "display: block;  height: 80% ; width: 35%; height:auto;"/>
                                    <p>
                                        <em style="color: #2D343E; font: bold 15px/30px 'Alike Angular', serif; !important;">   <?php echo $output;?> </br>
                                            <?php $des;?></br>
                                        </em>

                                    </p>
                                </li>
                                <li>
                                    <?php include ('googlemap.php')?>
                                </li>
                            </ul>

                        </div>

                        <div id="footer">
                        </div>
                    </div>
                </div>
            </div>



        <?php
        }
        else{
            ?>



            <div id="page">
                <div id="header">

                </div>

                <div id="contents">


                    <div class="background">

                        <div id="news">


                            <h4>OOPS!!! NO MATCH FOUND</h4>
                            <ul>
                                <li>
                                    <img src="images/404.jpg" alt="404" style = "display: block; margin:auto !important;  height: 80% ; width: 100%; height:auto;"/>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div id="footer">
                    </div>
                </div>




            </div>

        <?php }?>
    </div></div>

<div class="row">
    <div class="col-xs-12 footer-container">
        <div class="row">
            <div class="col-xs-push-2 col-xs-4 footcon-col-1">
                <p>Mail Us:</p>
                <p>Faculty of Science<br>University of Colombo<br>Colombo 07<br>Sri Lanka</p>
            </div>
            <div class="col-xs-push-2 col-xs-4 footcon-col-1">
                <p>Call Us:</p>
                <p>+94116250036</p>
            </div>
            <div class="col-xs-push-1 col-xs-2 footcon-col-1">
                <p>Mail Us:</p>
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