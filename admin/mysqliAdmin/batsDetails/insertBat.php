<?php
ob_start();
include("connect.php");

if(isset($_POST['send'])!="")
{
    $scientificName=mysql_real_escape_string($_POST['scientificName']);
    $kingdom=mysql_real_escape_string($_POST['kingdom']);
    $phylum=mysql_real_escape_string($_POST['phylum']);
    $class=mysql_real_escape_string($_POST['class']);
    $orderr=mysql_real_escape_string($_POST['orderr']);
    $genus=mysql_real_escape_string($_POST['genus']);
    $family=mysql_real_escape_string($_POST['family']);
    $subFamily=mysql_real_escape_string($_POST['subFamily']);
    $speciesAuthority=mysql_real_escape_string($_POST['speciesAuthority']);
    $commonNames=mysql_real_escape_string($_POST['commonNames']);
    $synonyms=mysql_real_escape_string($_POST['synonyms']);
    $redListCategory=mysql_real_escape_string($_POST['redListCategory']);
    $distribution=mysql_real_escape_string($_POST['distribution']);
    $oioCountries=mysql_real_escape_string($_POST['oioCountries']);
    $population=mysql_real_escape_string($_POST['population']);
    $roosts=mysql_real_escape_string($_POST['roosts']);
    $commonFood=mysql_real_escape_string($_POST['commonFood']);
    $bibliography=mysql_real_escape_string($_POST['bibliography']);
    $conservation=mysql_real_escape_string($_POST['conservation']);



    $update=mysql_query("INSERT INTO bats_details(scientificName,kingdom,phylum,class,orderr,genus,family,subFamily,
speciesAuthority,commonNames,synonyms,redListCategory,distribution,oioCountries,population,roosts,commonFood,bibliography,conservation,created)VALUES
                                      ('$scientificName','$kingdom','$phylum','$class','$orderr','$genus','$family','$subFamily','$speciesAuthority','$commonNames','$synonyms','$redListCategory','$distribution','$oioCountries',
                                      '$population','$roosts','$commonFood','$bibliography','$conservation',now())");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:newBat.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
}
ob_end_flush();
?>