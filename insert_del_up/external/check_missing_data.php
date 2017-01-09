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

                if (empty($_POST['species'])) {

                    $data_missing[] = 'species';
                } else {
                    $species = trim($_POST['species']);
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

                if (empty($_POST['roost'])) {

                    $data_missing[] = 'roost';
                } else {
                    $roost = trim($_POST['roost']);
                }

                if (empty($_POST['conservation_status'])) {

                    $data_missing[] = 'conservation_status';
                } else {
                    $conservation_status = trim($_POST['conservation_status']);
                }
                if (empty($_POST['country_occurence'])) {

                    $data_missing[] = 'country_occurence';
                } else {
                    $country_occurence = trim($_POST['country_occurence']);
                }

                if (empty($_POST['feeding'])) {

                    $data_missing[] = 'feeding';
                } else {
                    $feeding = trim($_POST['feeding']);
                }

                if (empty($_POST['breeding'])) {

                    $data_missing[] = 'breeding';
                } else {
                    $breeding = trim($_POST['breeding']);
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

                if (empty($_POST['other_details'])) {

                    $data_missing[] = 'other_details';
                } else {
                    $other_details = trim($_POST['other_details']);
                }
        }
?>