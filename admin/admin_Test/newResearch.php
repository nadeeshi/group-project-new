<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include("template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Research Details</h1>
                <h1 class="page-subhead-line">All Research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Research details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Research details-->
                            <div class="display">

                                <form action="insertAdmin.php" method="post" name="insertform">
                                    <div class="col-xs-12">
                                        <label for="name" id="preinput" class="col-xs-5"> Research Name : </label>
                                        <input type="text" name="username" required placeholder="Enter research Name" id="inputid" class="col-xs-6" />
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="email" id="preinput" class="col-xs-5"> Main Researcher : </label>
                                        <input type="email" name="usermail" required placeholder="Enter main researcher" id="inputid" class="col-xs-6"  />
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="mobile" id="preinput" class="col-xs-5"> Contributers : </label>
                                        <input type="text" name="usermobile" required placeholder="Enter contributers" id="inputid" class="col-xs-6"  />
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>

                            </div>
                          <!--close details-->





                        </div>
                    </div>









                </div>
            </div>


            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of Admin
                    </div>

                    <div class="panel-body">
                        <?php include('viewAdmin.php'); ?>

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
