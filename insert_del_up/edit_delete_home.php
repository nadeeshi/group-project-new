<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit & delete bats</title>
      
        <link rel="stylesheet" href="../assets/css/in_up_del_css/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form_css.css">
        <link rel="stylesheet" href="../assets/css/in_up_del_css/edit_del_page.css">
        <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/footer.css" rel="stylesheet">
        <script src="../assets/bootstrap/jquary.js"></script>
        <script src="../assets/bootstrap/bootstrapjs.js"></script>
        
        <script src="../assets/js/in_up_del_js/jquary.js"></script>
        <script src="../assets/js/in_up_del_js/validate_text_fields.js"></script>
        <script src="../assets/js/in_up_del_js/edit_del_confimtions.js"></script>
        


        <style> </style>



    </head>
    <body>

        <div>
            <?php include '../IncludedFiles/navbarTemplate.php' ?>
        </div>
       
            <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">


                <div class="table" >


                    <?php
                    require_once('mysqli_connect.php');
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($dbc, "SELECT scientific_name FROM bat_info");



                    mysqli_close($dbc);
                    ?>
                    <table >
                        <thead>
                            <tr>
                                <td class='td th_option lbl head'></td>
                                <td class='td th_sname lbl head'>Scientific Name</td>

                                <td class='td th_option lbl head'>Edit</td>
                                <td class='td th_option lbl head'>Remove</td>

                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr id="tr_data">';
                                echo '<td class="td_data num lbl">' . $i . '</td>';
                                echo '<td class="td_data lbl">' . $row['scientific_name'] . '</td>';
                                $i = $i + 1;

                                echo '<td class="td_data td_data_op lbl"><a class="link" href="edit_form.php?id=' . $row['scientific_name'] . '" onclick="return myFunction_edit();"><span class="glyphicon_my glyphicon glyphicon-pencil"></span></a></td>';

                                echo '<td class="td_data td_data_op lbl"><a class="link" href="delete_bat.php?scientific_name=' . $row['scientific_name'] . '"onclick="return myFunction_del();"><span class="glyphicon_my glyphicon glyphicon-remove" ></span></a></td>';

                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
     
        
        <div class="col-xs-10 col-xs-push-2">
            <?php include "../IncludedFiles/footer.php" ?>
        </div>


    </body>
</html>