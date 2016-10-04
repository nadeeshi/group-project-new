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
                <h1 class="page-head-line" style="color: #500a6f">Research Details</h1>
                <h1 class="page-subhead-line">All research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4>view  Details of a Research</h4>
                        <div style="margin-top: 20px;">

                            <?php
                            include('connect.php');
                            $select=mysql_query("SELECT * FROM research_details order by id desc");
                            $i=1;
                            while($userrow=mysql_fetch_array($select))
                            {
                                $id=$userrow['id'];
                                $researchName=$userrow['researchName'];
                                $kingdom=$userrow['kingdom'];
                                $phylum=$userrow['phylum'];
                                $created=$userrow['created']
                                ?>

                                <div class="display">
                                    <p style="color: #cc006a"> Research NAME : <span style="color: #080808"><?php echo $researchName; ?></span>
                                        <a href="viewResearch.php?id=<?php echo $id; ?>">
                                            <span class="view" title="View"> View </span></a>

                                        <a href="editResearch.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a>

                                        <a href="deleteResearch.php?id=<?php echo $id; ?>"
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
