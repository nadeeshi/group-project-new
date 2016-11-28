<?php
ob_start();
include("../include_files/connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>thread</title>


    <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet">

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="mapstyle.css" rel="stylesheet" type="text/css">

    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrapjs.js"></script>



</head>
<body>

<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
    <?php

    include ('from_search_image.php');
    if($count ==1){
        ?>
        <div id="page">
            <div id="header">

            </div>

            <div id="contents">


                <div class="background">

                    <div id="news">

                        <h4>BAT Profile </h4>
                        <ul>
                            <li>
                                <img src="<?php echo $img;?>" alt="Img" style = "display: block;  height: 80% ; width: 35%; height:auto;"/>
                                <p>
                                    <em style="color: #2D343E; font: bold 15px/30px 'Alike Angular', serif; !important;">   <?php echo $output;?> </br>
                                        <?php $des;?></br>
                                    </em>

                                </p>
                            </li>
                            <li>
                                <?php include ('from_search_map.php');?>
                            </li>
                        </ul>

                    </div>

                    <div id="footer">
                    </div>
                </div>
            </div>
        </div>



    <?php
    }
    else{
        ?>



        <div id="page">
            <div id="header">

            </div>

            <div id="contents">


                <div class="background">

                    <div id="news">


                        <h4>OOPS!!! NO MATCH FOUND</h4>
                        <ul>
                            <li>
                                <img src="images/404.jpg" alt="404" style = "display: block; margin:auto !important;  height: 80% ; width: 100%; height:auto;"/>
                            </li>
                        </ul>

                    </div>
                </div>
                <div id="footer">
                </div>
            </div>




        </div>

    <?php }?>

</div>


<!-- start footer -->




<!-- end of footer -->
</body>
</html>