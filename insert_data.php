<html>
    <head>
        <title>Add a Bat</title>
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {

            $data_missing = array();


            if (empty($_POST['scientific_name'])) {

                $data_missing[] = 'scientific_name';
            } else {
                $scientific_name = trim($_POST['scientific_name']);
            }



            if (empty($_POST['bat_order'])) {

                $data_missing[] = 'bat_order';
            } else {
                $bat_order = trim($_POST['bat_order']);
            }


            if (empty($_POST['kingdom'])) {

                $data_missing[] = 'kingdom';
            } else {
                $kingdom = trim($_POST['kingdom']);
            }

            if (empty($_POST['genus'])) {

                $data_missing[] = 'genus';
            } else {
                $genus = trim($_POST['genus']);
            }
            if (empty($_POST['phylum'])) {

                $data_missing[] = 'phylum';
            } else {
                $phylum = trim($_POST['phylum']);
            }
            if (empty($_POST['family'])) {

                $data_missing[] = 'family';
            } else {
                $family = trim($_POST['family']);
            }

            if (empty($_POST['sub_family'])) {

                $data_missing[] = 'sub_family';
            } else {
                $sub_family = trim($_POST['sub_family']);
            }
            if (empty($_POST['bat_class'])) {

                $data_missing[] = 'bat_class';
            } else {
                $bat_class = trim($_POST['bat_class']);
            }
            if (empty($_POST['common_names'])) {

                $data_missing[] = 'common_names';
            } else {
                $common_names = trim($_POST['common_names']);
            }
            if (empty($_POST['synonyms'])) {

                $data_missing[] = 'synonyms';
            } else {
                $synonyms = trim($_POST['synonyms']);
            }
            if (empty($_POST['roots'])) {

                $data_missing[] = 'roots';
            } else {
                $roots = trim($_POST['roots']);
            }

            if (empty($_POST['red_list_cat'])) {

                $data_missing[] = 'red_list_cat';
            } else {
                $red_list_cat = trim($_POST['red_list_cat']);
            }

            if (empty($_POST['country_occurence'])) {

                $data_missing[] = 'country_occurence';
            } else {
                $country_occurence = trim($_POST['country_occurence']);
            }


            if (empty($_POST['population'])) {

                $data_missing[] = 'population';
            } else {
                $population = trim($_POST['population']);
            }



            if (empty($_POST['feeding'])) {

                $data_missing[] = 'feeding';
            } else {
                $feeding = trim($_POST['feeding']);
            }

            if (empty($_POST['reprodution'])) {

                $data_missing[] = 'reprodution';
            } else {
                $reprodution = trim($_POST['reprodution']);
            }

            if (empty($_POST['threats'])) {

                $data_missing[] = 'threats';
            } else {
                $threats = trim($_POST['threats']);
            }

            if (empty($_POST['conservation_action'])) {

                $data_missing[] = 'conservation_action';
            } else {
                $conservation_action = trim($_POST['conservation_action']);
            }



            if (empty($_POST['measurements'])) {

                $data_missing[] = 'measurements';
            } else {
                $measurements = trim($_POST['measurements']);
            }


            if (empty($_POST['authority'])) {

                $data_missing[] = 'authority';
            } else {
                $authority = trim($_POST['authority']);
            }


            if (empty($_POST['bibiliogrphy'])) {

                $data_missing[] = 'bibiliogrphy';
            } else {
                $bibiliogrphy = trim($_POST['bibiliogrphy']);
            }


            if (empty($_POST['reference'])) {

                $data_missing[] = 'reference';
            } else {
                $reference = trim($_POST['reference']);
            }


            if (empty($_POST['other_details'])) {

                $data_missing[] = 'other_details';
            } else {
                $other_details = trim($_POST['other_details']);
            }






            if (empty($data_missing)) {

                require_once('mysqli_connect.php');

                $query = "INSERT INTO new_bats(scientific_name,bat_order,kingdom,genus,phylum,family,sub_family,bat_class,
                common_names,synonyms,roots,red_list_cat,country_occurence,population,feeding,reprodution,threats,conservation_action,
                measurements,authority,bibiliogrphy,reference,other_details
                )
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                $stmt = mysqli_prepare($dbc, $query);



                mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssss", $scientific_name, $bat_order, $kingdom, $genus, $phylum, $family, $sub_family, $bat_class, $common_names, $synonyms, $roots, $red_list_cat, $country_occurence, $population, $feeding, $reprodution, $threats, $conservation_action, $measurements, $authority, $bibiliogrphy, $reference, $other_details
                );

                mysqli_stmt_execute($stmt);

                $affected_rows = mysqli_stmt_affected_rows($stmt);
                if ($affected_rows == 1) {
                    // echo 'Studend Inserted';
                    mysqli_stmt_close($stmt);
                    mysqli_close($dbc);
                } else {
                    echo 'Error Occured </br>';
                    echo mysqli_error();
                }
            } else {
                echo'You need to enter followng data</br>';
                foreach ($data_missing as $missing) {
                    echo "$missing </br>";
                }
            }
        }require_once('form.php');
        ?>





    </body>
</html>
