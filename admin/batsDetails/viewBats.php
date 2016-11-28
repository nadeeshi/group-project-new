<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include "../include_files/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #00CA79">View  Details of Bats</h4>
                        <div style="margin-top: 20px;">


                            <?php
                            if(isset($_GET['id']))
                            {
                            include('../include_files/connect.php');
                            $id=$_GET['id'];
                            $getselect=mysqli_query($bd,"SELECT * FROM bats_details WHERE id='$id'");
                            while($profile=mysqli_fetch_array($getselect))

                            {
                                $id=$profile['id'];
                                $scientificName=$profile['scientific_name'];
                                $kingdom=$profile['kingdom'];
                                $phylum=$profile['phylum'];
                                $class=$profile['bat_class'];
                                $orderr=$profile['bat_order'];
                                $genus=$profile['genus'];
                                $family=$profile['family'];
                                $subFamily=$profile['sub_family'];
                                $speciesAuthority=$profile['species'];
                                $commonNames=$profile['common_names'];
                                $synonyms=$profile['synonyms'];
                                $redListCategory=$profile['redListCategory'];
                                $distribution=$profile['distribution'];
                                $oioCountries=$profile['oioCountries'];
                                $population=$profile['population'];
                                $roosts=$profile['roosts'];
                                $commonFood=$profile['commonFood'];
                                $bibliography=$profile['bibliography'];
                                $conservation=$profile['conservation_status'];

                                $created=$profile['created'];

                                ?>

                                <div class="display">
                                    <p> SCIENTIFIC NAME : <span style="color: #cc006a"><?php echo  $scientificName; ?></span>

                                    </p>
                                    <br />
                                    <p> KINGDOM : <span style="color: #cc006a"><?php echo  $kingdom; ?></span>

                                    </p>
                                    <br />
                                    <p> PHYLUM : <span style="color: #cc006a"><?php echo  $phylum; ?></span>
                                    </p>
                                    <br />
                                    <p> CLASS : <span style="color: #cc006a"><?php echo   $class; ?></span>
                                    </p>
                                    <br />
                                    <p> ORDER : <span style="color: #cc006a"><?php echo  $orderr; ?></span>
                                    </p>
                                    <br />
                                    <p> GENUS : <span style="color: #cc006a"><?php echo  $genus; ?></span>
                                    </p>
                                    <br />
                                    <p> FAMILY : <span style="color: #cc006a"><?php echo  $family; ?></span>
                                    </p>
                                    <br />
                                    <p> SUB FAMILY : <span style="color: #cc006a"><?php echo  $subFamily; ?></span>
                                    </p>
                                    <br />
                                    <p> SPECIES AUTHORITY : <span style="color: #cc006a"><?php echo  $speciesAuthority; ?></span>
                                    </p>
                                    <br />
                                    <p> COMMON NAMES : <span style="color: #cc006a"><?php echo  $commonNames; ?></span>
                                    </p>
                                    <br />
                                    <p> SYNONYMS : <span style="color: #cc006a"><?php echo  $synonyms; ?></span>
                                    </p>
                                    <br />
                                    <p> RED LIST CATEGORY : <span style="color: #cc006a"><?php echo  $redListCategory; ?></span>
                                    </p>
                                    <br />
                                    <p> DISTRIBUTION : <span style="color: #cc006a"><?php echo  $distribution; ?></span>
                                    </p>
                                    <br />
                                    <p> OTHER IN O COUNTRIES : <span style="color: #cc006a"><?php echo  $oioCountries; ?></span>
                                    </p>
                                    <br />
                                    <p> POPULATION : <span style="color: #cc006a"><?php echo  $population; ?></span>
                                    </p>
                                    <br />
                                    <p> ROOTS : <span style="color: #cc006a"><?php echo  $roosts; ?></span>
                                    </p>
                                    <br />
                                    <p> COMMON FOOD : <span style="color: #cc006a"><?php echo  $commonFood; ?></span>
                                    </p>
                                    <br />
                                    <p> BIBLIOGRAPHY : <span style="color: #cc006a"><?php echo  $bibliography; ?></span>
                                    </p>
                                    <br />
                                    <p> CONSERVATION : <span style="color: #cc006a"><?php echo  $conservation; ?></span>
                                    </p>
                                    <br />



                                    <p> CREATED ON : <span><?php echo $created; ?></span>
                                    </p>
                                    <br />
                                </div>
                            <?php } }?>



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
