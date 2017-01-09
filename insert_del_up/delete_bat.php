<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>delete bats</title>

        <link rel="stylesheet" href="../assets/css/in_up_del_css/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form_css.css">
       

        <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/footer.css" rel="stylesheet">

        <script src="../assets/bootstrap/jquary.js"></script>
        <script src="../assets/bootstrap/bootstrapjs.js"></script>

        <script src="../assets/js/in_up_del_js/jquary.js"></script>


        <style> 

        </style>

    </head>
    <body>
        <!-- include header file-->
        <div>
            <?php include '../IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
            <div class="height_default_del">
                <?php
                require_once('mysqli_connect.php');
                //insert deleting bat in to another table deleted_bat_details.sql


                $delete = $_GET['scientific_name'];


                $query = "INSERT INTO deleted_bat_details  SELECT * FROM bat_info WHERE scientific_name='$delete'";

                if ($dbc->query($query) === TRUE) {

                    require_once('mysqli_connect.php');

                    //delete the bat from main table bat_info.sql

                    $sql = "DELETE FROM bat_info WHERE scientific_name='$delete'";

                    if (mysqli_query($dbc, $sql)) {
                        echo "<p class='msg'>Bat Successfully Removed</p>";

                        echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Back</button></a>';
                    } else {
                        echo "<p class='msg'>Something Went Wrong!!!</p>";

                        echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
                        //unles get an error check this error         echo "Error deleting record: " . $dbc->error;
                    }
                    $dbc->close();
                } else {
                    echo "<p class='msg'>Something Went Wrong!!!</p>";

                    echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
                    //unles get an error check this error         echo "Error deleting record: " . $dbc->error;
                }
                ?>


            </div>
        </div>

        <!-- start footer -->

        <div class="col-xs-10 col-xs-push-2">
            <?php include "../IncludedFiles/footer.php" ?>
        </div>

    </body>



</html>