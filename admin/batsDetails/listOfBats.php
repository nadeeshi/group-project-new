<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include "../include_files/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4>view  Details of Bats</h4>
                        <div style="margin-top: 20px;">

                            <?php
                            include('../include_files/connect.php');
                            $select=mysqli_query($bd,"SELECT * FROM bats_details order by id desc");
                            $i=1;
                            while($userrow=mysqli_fetch_array($select))
                            {
                                $id=$userrow['id'];
                                $scientificName=$userrow['scientific_name'];
                                $kingdom=$userrow['kingdom'];
                                $phylum=$userrow['phylum'];
                                $created=$userrow['created']
                                ?>

                                <div class="display">
                                    <p style="color: #cc006a"> SCIENTIFIC NAME : <span style="color: #080808"><?php echo $scientificName; ?></span>
                                        <a href="viewBats.php?id=<?php echo $id; ?>">
                                            <span class="view" title="View"> View </span></a>

                                        <a href="editBats.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a>

                                        <a href="deleteBats.php?id=<?php echo $id; ?>"
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




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>



</body>
</html>
