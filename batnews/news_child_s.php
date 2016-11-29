<!DOCTYPE html>
<html>
    <head>
        <title>thread</title>
        <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/editnewschild.css">	
        <link href="../css/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../css/footer.css" rel="stylesheet">
        <script src="../js/jquary.js"></script> 
        <script src="../js/bootstrapjs.js"></script>

    </head>
    <body>
        <?php
        $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "test2";
        $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
        $qry = "SELECT * FROM photos WHERE id = '" . $_GET['batid1'] . "' ;";
        $result = mysqli_query($con, $qry);
        $record = mysqli_fetch_assoc($result);
        ?>

        <div>
            <?php include ("../template/navbarTemplate.php"); ?>
        </div>
        <div class="col-sm-8 col-sm-push-2 col-xs-10 insert-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="inblock">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><h1 class="ax"><?php echo $record['caption']; ?></h1></br></p>
                                        </div></div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>                            
                                                <a class="aidanews2_img1" href="">
                                                    <img src="<?php echo "photos/" . $record['location']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "float: right ;margin: 0px 0px 15px 20px; max-height: 20em ; min-height:14em; width: 30%; height:auto;"/>
                                                </a>
                                            <div class="des">
                                                <?php echo $record['desc']; ?>
                                            </div>
                                            </p>
                                        </div></div>
                                    <!--
        <a class="aidanews2_img1" href="">
            <img src="<?php //echo "photos/" . $record['location'];  ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "margin:auto; max-height: 32em ; min-height:14em; width: 45%; height:auto;"/>
        </a>
        <div class="des">
            <h1 class="ax">
                                    <?php //echo $record['caption']; ?></br>

            </h1>
                                            <p><?php //echo $record['desc']; ?></p>

        </div>-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="news.php" class="readon">
                                                back to news
                                            </a>
                                        </div>
									</div>

                                </div>

                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start footer -->

        <div class="row">
            <div class="col-xs-10 col-xs-push-2">
                <?php include ("../template/footer.php"); ?>
            </div>  
        </div>


        <!-- end of footer -->
    </body>
</html>