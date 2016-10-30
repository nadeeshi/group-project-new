<!DOCTYPE html>
<html>
<head>
    <title>thread</title>
    <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../assets/bootstrap/jquary.js"></script>
    <script src="../assets/bootstrap/bootstrapjs.js"></script>
</head>
<body>
<div>
    <?php include '../IncludedFiles/navbarTemplate.php' ?>
</div>
<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
    <div class="row">
                <div class="col-xs-3">
                    <a href="../final_insert_update_del/view_bat.php">
                        <button>View A Bat Info</button>
                    </a>
                </div>

                <div class="col-xs-3">
                    <a href="../final_insert_update_del/insert.php">
                        <button>Insert New Bat Info</button>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="../final_insert_update_del/update_bat.php">
                        <button>Update A Bat Info</button>
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="../final_insert_update_del/delete_bat.php">
                        <button>Delete A Bat Info</button>
                    </a>
                </div>



        </div>
    <br><br><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 list-content">
            <?php
            include('connect.php');
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


<!-- start footer -->

<div class="row">
    <div class="col-xs-10 col-xs-push-2">
        <?php include "../IncludedFiles/footer.php" ?>
    </div>
</div>


</body>
</html>
