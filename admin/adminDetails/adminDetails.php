<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include("../include_files/template.php") ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Admin Details</h1>
                <h1 class="page-subhead-line">All administrators details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Admin</h4>
                        <div style="margin-top: 20px;">


                            <!--add new Admin--------------------------------------------------------->
                            <div class="display">

                                <form action="insertAdmin.php" method="post" name="insertform">


                                    <div class="col-xs-12">
                                        <label for="name" id="preinput" class="col-xs-5"> USER NAME : </label>

                                        <input type="text" name="username" required placeholder="Enter admin name" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="email" id="preinput" class="col-xs-5"> EMAIL ID : </label>
                                        <input type="email" name="usermail" required placeholder="Enter Email" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="mobile" id="preinput" class="col-xs-5"> PHONE NUMBER : </label>
                                        <input type="text" name="usermobile" required placeholder="Enter mobile number" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="password" id="preinput" class="col-xs-5"> PASSWORD : </label>
                                        <input type="password" name="password" required placeholder="Enter password" id="inputid" class="col-xs-7"/>
                                    </div>



                                    <div class="col-xs-12">
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>

                            </div>


                            <!--close new admin------------------------------------------------------------------------------->




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


                        <!--start  viewAdmin---------------------------------------------------------------------->
                        <?php
                        include('../include_files/connect.php');
                        $select=mysqli_query($bd,"SELECT * FROM admin_details order by id desc");
                        $i=1;
                        while($userrow=mysqli_fetch_array($select))
                        {
                            $id=$userrow['id'];
                            $username=$userrow['username'];
                            $usermail=$userrow['emailid'];
                            $usermobile=$userrow['mobileno'];
                            $created=$userrow['created']
                            ?>

                            <div class="display">
                                <p> USER NAME : <span style="color: #125acd"><?php echo $username; ?></span>
                                    <a href="deleteAdmin.php?id=<?php echo $id; ?>"
                                       onclick="return confirm('Are you sure you wish to delete this Record?');">
                                        <span class="delete" title="Delete" style="color: #ff0084"> X </span></a>
                                </p>
                                <br />
                                <p> EMAIL ID : <span style="color: #125acd"><?php echo $usermail; ?></span>
                                    <a href="editAdmin.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> E </span></a>
                                </p>
                                <br />
                                <p> MOBILE NO : <span style="color: #125acd"><?php echo $usermobile; ?></span>
                                </p>
                                <br />
                                <p> CREATED ON : <span style="color: #125acd"><?php echo $created; ?></span>
                                </p>
                                <br />
                            </div>
                        <?php } ?>
                        <!--close viewAdmin---------------------------------------------------------------->


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
