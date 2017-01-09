<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>insert a new bat</title>
        <link rel="stylesheet" href="../assets/css/in_up_del_css/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form_css.css">
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form.css">
        <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/footer.css" rel="stylesheet">
        <script src="../assets/bootstrap/jquary.js"></script>
        <script src="../assets/bootstrap/bootstrapjs.js"></script>
        <script src="../assets/js/in_up_del_js/jquary.js"></script>

        <style> </style>
    </head>
    <body>

        <div>
            <?php include '../IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
            <div class="height_default">


                <?php ?>

                <?php
                // include php check for missing data file
                include 'external/check_missing_data.php';

                // insert form data in to the bat_info table pass by insert.php form
                if (empty($data_missing)) {



                    require_once('mysqli_connect.php');

                    $query = "INSERT INTO bat_info(scientific_name, bat_order, kingdom, genus, phylum, family, sub_family, bat_class,species,common_names,synonyms,roost,conservation_status,country_occurence,feeding,breeding,threats,conservation_action,measurements,other_details)
                
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                    $stmt = mysqli_prepare($dbc, $query);



                    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $scientific_name, $bat_order, $kingdom, $genus, $phylum, $family, $sub_family, $bat_class, $species, $common_names, $synonyms, $roost, $conservation_status, $country_occurence, $feeding, $breeding, $threats, $conservation_action, $measurements, $other_details);

                    mysqli_stmt_execute($stmt);

                    $affected_rows = mysqli_stmt_affected_rows($stmt);




                    if ($affected_rows == 1) {

                        mysqli_stmt_close($stmt);

                        mysqli_close($dbc);
                        //procceed if successful
                        echo "<p class='msg'>Bat Successfully Added</p>";

                        echo '<br><br><a href="insert_form.php"><button class="my-button">Back</button></a>';
                    } else {
                        //try again if unsuccessful
                        echo "<p class='msg'>Error Occur! <p>";

                        echo '<br><br><a href="insert_form.php"><button class="my-button">Try Again</button></a>';
                    }
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