<?php
require_once('auth.php');
?>



<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login</title>



    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>

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
        <a class="navbar-brand" href="home.php" >Admin Panel</a>
    </div>


    <div class="header-right">

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        <!-- <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->
        <a href="index.php" class="logout">logout</a></p>

    </div>
</nav>
<!-- /. NAV TOP  -->





<!--Nav Side Bar -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="img/2.jpg" class="img-thumbnail" />

                    <div class="inner-text">
                        Nadee Sansari
                        <br />
                        <small>online</small>
                    </div>
                </div>

            </li>



            <li>
                <a class="active-menu" href="home.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>




            <li>
                <a href="#"><i class="fa fa-desktop "></i>User Details <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="adminDetails/adminDetailsValidate.php"></i>Admin Details</a>
                    </li>
                    <li>
                        <a href="researcherDetails/researcherDetailsValidate.php">Researchers Details</a>
                    </li>


                </ul>
            </li>





            <li>
                <a href="#"><i class="fa fa-yelp "></i>Reaserch Details <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="researchDetails/listOfResearch.php"></i>list of Research</a>
                    </li>

                    <li>
                        <a href="researchDetails/researchDetails.php">Add New Research Details</a>
                    </li>




                </ul>
            </li>




            <li>
                <a href="table.html"><i class="fa fa-yelp "></i>Thread Details </a>

            </li>




            <li>
                <a href="#"><i class="fa fa-yelp "></i>Bats Details <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="batsDetails/listOfBats.php"></i>List of Bats</a>
                            </li>
                            <li>
                        <a href="batsDetails/newBat.php"></i>Add New Bats</a>
                    </li>


                </ul>
            </li>





            <li>
                <a href="gallery.html"><i class="fa fa-yelp "></i>Insert Info Forms</a>
            </li>


            <li>
                <a href="error.html"><i class="fa fa-yelp "></i>Map Details</a>
            </li>


            <li>
                <a href="login.html"><i class="fa fa-yelp "></i>Test 1</a>
            </li>




            <li>
                <a href="blank.html"><i class="fa fa-yelp "></i>Test 2</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->






<div id="page-wrapper">
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" style="color: #500a6f">DASHBOARD</h1>
        <h1 class="page-subhead-line">This site is use only Administer of web site,otherwise ..........</h1>

    </div>
</div>
<!-- /. ROW  -->




<div class="row" >
    <div class="col-md-10">
    <div class="col-xs-4">
        <div class="main-box mb-red" style="width: 200px;">
            <a href="#">

                <h3> 30  bats</h3>
            </a>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="main-box mb-dull" style="width: 200px;">
            <a href="#">

                <h3>3 Admin</h3>
            </a>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="main-box mb-pink" style="width: 230px; height: 100px;">
            <a href="#">

                <h3>20 Researchers</h3>
            </a>
        </div>
    </div>
        </div>

</div>
<!-- /. ROW  -->






<div class="row">
    <div class="col-md-12">



                    <div class="col-md-12">
                        <h1 style="color: #500a6f ;font-size: 20px"><b>List Of Research Details</b></h1>

                    </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View data from the database
                            </div>

                            <div class="panel-body">
                                <h4>view  Details of Research</h4>
                                <div style="margin-top: 20px;">
                                    <?php
                                    include('connect.php');
                                    $select=mysql_query( "SELECT * FROM research_details order by id desc");
                                    $i=1;
                                    while($userrow=mysqli_fetch_array($select))
                                    {
                                        $id=$userrow['id'];
                                        $researchName=$userrow['researchName'];
                                        $kingdom=$userrow['kingdom'];
                                        $phylum=$userrow['phylum'];
                                        $created=$userrow['created']
                                        ?>

                                        <div class="display">
                                            <p style="color: #cc006a"> RESEARCH NAME : <span style="color: #080808"><?php echo $researchName; ?></span>
                                                <a href="researchDetails/viewResearch.php?id=<?php echo $id; ?>">
                                                    <span class="view" title="View"> View </span></a>

                                                <a href="researchDetails/editResearch.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a>

                                                <a href="researchDetails/deleteResearch.php?id=<?php echo $id; ?>"
                                                   onclick="return confirm('Are you sure you wish to delete this Record?');">
                                                    <span class="delete" title="Delete"> Delete </span></a>

                                            </p>

                                            <br />
                                            <p> Created On : <span><?php echo $created; ?></span>
                                            </p>
                                            <br />
                                        </div>
                                    <?php } ?>



                                </div>
                            </div>

                        </div>
                    </div>





        </div>
        </div>
    </div>
    </div>
    </div>
</div>

<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</body>
</html>





