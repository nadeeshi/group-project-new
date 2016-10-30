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
        <div class="col-xs-12">

            <h1>List Of Bats Info</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 list-content">

            <?php
            if(isset($_GET['id']))
            {
                include('connect.php');
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


<!-- start footer -->

<div class="row">
    <div class="col-xs-10 col-xs-push-2">
        <?php include "../IncludedFiles/footer.php" ?>
    </div>
</div>


</body>
</html>
