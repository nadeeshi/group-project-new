<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: none;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

    </style>

</head>



<body>
<?php include("../include_files/template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Research Details</h1>
                <h1 class="page-subhead-line">All research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4>view  Details of a Research</h4>
                        <div style="margin-top: 20px;">

                            <?php
                            include('../include_files/connect.php');
                            $select=mysqli_query($bd,"SELECT * FROM research_details order by id desc");
                            $i=1;
                            ?>

                            <div class="display">

                                <table>
                                    <tr>
                                        <th>RESEARCH  NAME : </th>
                                        <th>CREATED ON : : </th>
                                        <th>VIEW : </th>
                                        <th>Edit</th>
                                        <th>Delete</th>


                                    </tr>


                                    <?php
                            while($userrow=mysqli_fetch_array($select))
                            {
                                $id=$userrow['id'];
                                $researchName=$userrow['researchName'];
                                $kingdom=$userrow['kingdom'];
                                $phylum=$userrow['phylum'];
                                $created=$userrow['created']
                                ?>




                                <tr>
                                    <td><?php echo $researchName; ?></td>



                                    <td><?php echo $created; ?></td>


                                    <td> <a href="viewResearch.php?id=<?php echo $id; ?>">
                                            <span class="view" title="View"> View </span></a></td>





                                    <td> <a href="editResearch.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a></td>

                                    <td> <a href="deleteResearch.php?id=<?php echo $id; ?>"
                                            onclick="return confirm('Are you sure you wish to delete this Record?');">
                                            <span class="delete" title="Delete"> Delete </span></a></td>




                                </tr>




                            <?php } ?>

</table>

                        </div>
                    </div>

                </div>
            </div>




        </div>



    </div>
</div>





<div class="row">
<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</div>


</body>
</html>
