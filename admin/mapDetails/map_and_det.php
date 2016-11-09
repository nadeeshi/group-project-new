

<!DOCTYPE html>
<html>
<head>
    <title>batsinfo</title>
    <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet">

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/mapstyle.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrapjs.js"></script>



</head>
<body>
<div>
    <?//php include ("../IncludedFiles/navbarTemplate.php"); ?>
</div>
<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
    <?php
    ob_start();
    include("../connect.php");

    //include ('image.php');

    if($_POST){


        if(isset($_POST['address'])){
            $searchq = $_POST['address'];
            $searchq = preg_replace("#[^a-z]#i","",$searchq);
            $count = 0;
            if(!empty($searchq)){

                ob_start();
                include("../connect.php");
                $query = mysqli_query($bd,"SELECT * FROM fulldemo WHERE name = '$searchq'") or die("could not search");
                while($row = mysqli_fetch_array($query)){
                    $fname = $row['name'];
                    $lplace1 = $row['city'];
                    $id = $row['id'];
                    $img = $row['location'];
                    $des = $row['description'];
                    $count = 1;

                    //echo '<p><img src="'.$row['location'].'"></p>';
                    $output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
                    //echo $output;

                    //echo '<p><img src="'.$row['description'].'"></p>';

                }}}





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
                                <?php include ('googleMap.php')?>
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

    <?php }}?>

</div>


<!-- start footer -->

<div class="row">
    <div class="col-xs-10 col-xs-push-2">
        <?//php include ("../IncludedFiles/footer.php"); ?>
    </div>
</div>


<!-- end of footer -->
</body>
</html>