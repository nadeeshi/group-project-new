
            <?php
            include("connect.php");
            //require_once('database.php');
            $result = mysqli_query($bd, "SELECT population  FROM `bats_details` WHERE `scientific_name` = 'test1'");
            $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $no_of_accountant = $result[0] ["population"];

            $result = mysqli_query($bd, "SELECT  population FROM `bats_details` WHERE `scientific_name` = 'test2'");
            $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $no_of_manager = $result[0] ["population"];


            ?>




            <script src="../js/jquery-1.10.2.js"></script>
            <script src="js/bootstrapjs.js"></script>
            <script src="graph/highcharts.js" ></script>






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
                                name: 'test1',
                                y: no_of_manager,
                            }, {
                                name: 'test2A',
                                y: no_of_accountant,
                            }, ]
                        }]
                    });

                }

                var no_of_manager = parseInt('<?php echo $no_of_manager; ?>');
                var no_of_accountant = parseInt('<?php echo $no_of_accountant; ?>');


                createGraph(no_of_manager,no_of_accountant);

            </script>








































