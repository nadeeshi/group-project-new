<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include('../include_files/connect.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Live Demo of Google Maps Geocoding Example with PHP</title>

    <style>



        input[type=submit]{
            padding:0.4em;
        }

        #gmap_canvas{
            width:100%;
            height:30em;
            border-style: outset;
        }

    </style>


</head>
<body>

<?php
if($_POST){


    if(isset($_POST['address'])){
        $searchq = $_POST['address'];
        //echo $searchq;
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        if(!empty($searchq)){
            include('../include_files/connect.php');
            $query = mysqli_query($bd,"SELECT * FROM bats_details WHERE scientific_name = '$searchq';") or die("could not search");
            $count = mysqli_num_rows($query);
            $kk = array();
            if($count == 0){
                $output = 'there is no search results!!';
            }else{
                while($row = mysqli_fetch_array($query)){
                    $fname = $row['scientific_name'];
                    $lplace1 = $row['city'];
                    $id = $row['id'];
                    //$img = $row['location'];
                    //$des = $row['description'];


                    //echo '<p><img src="'.$row['location'].'"></p>';
                    //$output = '<div>'.$fname.' -> '.$lplace1.'</div>'.$des ;
                    //echo $output;
                    //echo '<p><img src="'.$row['description'].'"></p>';

                    $places_ar = explode(",",$lplace1);
                    $length = count($places_ar);
                }
                $ll = array();
                $ln = array();
                $fd = array();


                foreach($places_ar as $lplace){

                    $data_arr = geocode($lplace);

                    if($data_arr){

                        $latitude = $data_arr[0];
                        array_push($ll, $latitude);
                        $longitude = $data_arr[1];
                        array_push($ln, $longitude);
                        $formatted_address = $data_arr[2];
                        array_push($fd, $formatted_address);

                        $ljn = json_encode($ll);
                        $lgjn = json_encode($ln);
                        $fjn = json_encode($fd);

                    }else{
                        echo "No map found.";
                    }
                }

                if($length!=0){
                    ?>


                    <div id="gmap_canvas">Loading map...</div>


                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAnFdtTApWgyi6Rv96ouN1uCTmwctBOsic"></script>
                    <script type="text/javascript">

                        var php1 = <?php echo $ljn;?>;
                        var php2 = <?php echo $lgjn;?>;
                        var php3 = <?php echo $fjn;?>;
                        var cnt = <?php echo $length?>;

                        function init_map() {
                            var myOptions = {
                                zoom: 7,
                                center: new google.maps.LatLng(7.8731, 80.7718),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);


                            for(i = 0; i < cnt; i++){
                                var marker = new google.maps.Marker({
                                    map: map,
                                    animation: google.maps.Animation.BOUNCE,

                                    position: new google.maps.LatLng(php1[i],php2[i])

                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: php3[i]
                                });
                                infowindow.open(map, marker);

                            }

                        }

                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                <?php
                }
            }
        }else{
            echo 'nothing';
        }
    }else{echo 'nothing';}



}

function geocode($address){


    $address = urlencode($address);


    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";



    $resp_json = file_get_contents($url);


    $resp = json_decode($resp_json, true);


    if($resp['status']='OK'){


        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];


        if($lati && $longi && $formatted_address){


            $data_arr = array();

            array_push(
                $data_arr,
                $lati,
                $longi,
                $formatted_address
            );

            return $data_arr;

        }else{
            return false;
        }

    }else{
        return false;
    }
}


?>
<form action="" method="post">







<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include('../include_files/connect.php');




//$sql="SELECT name,id FROM student";

$sql="SELECT scientific_name,id FROM bats_details order by scientific_name";

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */
echo "<select name='bats_details' value=''>Bats Details</option>"; // list box select command


foreach ($bd->query($sql) as $row){//Array or records stored in $row

    echo "<option value=$row[id]>$row[scientific_name]</option>";

    /* Option values are added by looping through the array */

}

echo "</select>";// Closing of list box



?>





    <!--<input type='text' name='address' placeholder='Enter any address here' />-->


    <input type='submit' value='Geocode!' />

</form>


</body>
</html>