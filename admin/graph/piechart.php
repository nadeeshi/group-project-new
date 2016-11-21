<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login</title>



    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <link href="graph.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>

</head>


<body>
<div>
    <?php include "template.php" ?>
</div>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f"><b>System Details(Using Graph )</b></h1>

            </div>
        </div>


        <!--add new Admin--------------------------------------------------------->
        <div class="display">
            <?php
            include("../connect.php");
            //require_once('database.php');
            $result = mysqli_query($bd, "SELECT population  FROM `bats_details` WHERE `scientific_name` = 'test1'");
            $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $no_of_accountant = $result[0] ["population"];

            $result = mysqli_query($bd, "SELECT COUNT(`id`) FROM `bats_details` WHERE `scientific_name` = 'test2'");
            $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $no_of_manager = $result[0] ["COUNT(`id`)"];


            ?>




            <script src="../js/jquery-1.10.2.js"></script>
            <script src="../js/bootstrapjs.js"></script>
            <script src="highcharts.js" ></script>






            <div class="row">
                <div id="mychart1"></div>
            </div>








            <script type="text/javascript">

                function createGraph(no_of_manager,no_of_accountant){
                    $('#mychart1').highcharts({
                        chart: {
                            type: 'pie'
                        },
                        title: {
                            text: 'Bats Population'
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: 'Population'
                            }

                        },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },

                        tooltip: {
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> <br/>'
                        },

                        series: [{
                            colorByPoint: true,
                            data: [{
                                name: 'Marketing Manager',
                                y: no_of_manager,
                            }, {
                                name: 'Accountant',
                                y: no_of_accountant,
                            }, ]
                        }]
                    });

                }

                var no_of_manager = parseInt('<?php echo $no_of_manager; ?>');
                var no_of_accountant = parseInt('<?php echo $no_of_accountant; ?>');


                createGraph(no_of_manager,no_of_accountant);

            </script>



        </div>
    </div>









</div>
</div>




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</body>
</html>


































