<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>



</head>



<body>
<div id="wrapper">

    <!--Nav Top -->
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Admin Panel</a>
        </div>


        <div class="header-right">

            <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <!-- <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->
            <a href="../index.php" class="logout">logout</a></p>

        </div>
    </nav>
    <!-- /. NAV TOP  -->





    <!--Nav Side Bar -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="../img/2.jpg" class="img-thumbnail" />

                        <div class="inner-text">
                            Nadee Sansari
                            <br />
                            <small>online</small>
                        </div>
                    </div>

                </li>



                <li>
                    <a class="active-menu" href="../include_files/home.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>




                <li>
                    <a href="#"><i class="fa fa-desktop "></i>User Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../adminDetails/adminDetailsValidate.php">Admin Details</a>
                        </li>
                        <li>
                            <a href="../researcherDetails/researcherDetailsValidate.php">Researchers Details</a>
                        </li>



                    </ul>
                </li>





                <li>
                    <a href="#"><i class="fa fa-yelp "></i>Reaserch Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../researchDetails/listOfResearch.php">list of Research</a>
                        </li>

                        <li>
                            <a href="../researchDetails/researchDetails.php">Add New Research Details</a>
                        </li>

                    </ul>
                </li>




                <li>
                    <a href="../graph/graph.php"><i class="fa fa-yelp "></i>Graph Details </a>

                </li>




                <li>
                    <a href="#"><i class="fa fa-yelp "></i>Bats Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="../batsDetails/listOfBats.php">List of Bats</a>
                        </li>
                        <li>
                            <a href="../batsDetails/newBat.php">Add New Bats</a>
                        </li>


                    </ul>
                </li>








                <li>
                    <a href="../mapDetails/map_and_det.php"><i class="fa fa-yelp "></i>Map Details</a>
                </li>


            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->






