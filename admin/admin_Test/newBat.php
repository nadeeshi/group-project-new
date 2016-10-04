<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include("template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Bats Details</h1>
                <h1 class="page-subhead-line">All Bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Bats details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Bat details-->
                            <div class="display">

                                <form action="insertAdmin.php" method="post" name="insertform">

                                    <p>
                                        <label for="scientificName" id="preinput"> SCIENTIFIC NAME : </label>
                                        <input type="text" name="scientificName" required placeholder="Enter bat  name" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="kingdom" id="preinput"> KINGDOM : </label>
                                        <input type="text" name="kingdom" required placeholder="Enter kingdom name" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="phylum" id="preinput"> PHYLUM : </label>
                                        <input type="text" name="phylum" required placeholder="Enter phylum" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="class" id="preinput"> CLASS : </label>
                                        <input type="text" name="class" required placeholder="Enter class" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="order" id="preinput"> ORDER : </label>
                                        <input type="text" name="order" required placeholder="Enter order" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="genus" id="preinput"> GENUS : </label>
                                        <input type="text" name="genus" required placeholder="Enter genus" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="family" id="preinput"> Family : </label>
                                        <input type="text" name="family" required placeholder="Enter family" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="subfamily" id="preinput"> SUB FAMILY : </label>
                                        <input type="text" name="subfamily" required placeholder="Enter subfamily" id="inputid"/>
                                    </p>

                                    <p>
                                        <label  for="speciesAuthority" id="preinput"> SPECIES AUTHORITY : </label>
                                        <input type="email" name="speciesAuthority" required placeholder="Enter species authority" id="inputid" />
                                    </p>

                                    <p>
                                        <label for="commonNames" id="preinput"> COMMON NAMES : </label>
                                        <input type="text" name="commonNames" required placeholder="Enter common names" id="inputid" />
                                    </p>

                                    <p>
                                        <label for="synonyms" id="preinput"> SYNONYMS : </label>
                                        <input type="text" name="synonyms" required placeholder="Enter synonyms" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="redListCategory" id="preinput"> RED LIST CATEGORY : </label>
                                        <input type="text" name="redListCategory" required placeholder="Enter red list category" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="distribution" id="preinput"> Distribution : </label>
                                        <input type="text" name="distribution" required placeholder="Enter distribution" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="oioCountries" id="preinput"> OCCURRENCES IN OTHER COUNTRIES  : </label>
                                        <input type="text" name="oioCountries" required placeholder="Enter Occurrences in other countries" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="population" id="preinput"> POPULATION(L) : </label>
                                        <input type="text" name="population" required placeholder="Enter population" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="roosts" id="preinput"> ROOSTS : </label>
                                        <input type="text" name="roosts" required placeholder="Enter roosts" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="commonFood" id="preinput"> COMMON FOOD : </label>
                                        <input type="text" name="commonFood" required placeholder="Enter common food" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="bibliography" id="preinput"> BIBLIOGRAPHY : </label>
                                        <input type="text" name="bibliography" required placeholder="Enter bibliography" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="conservation" id="preinput"> CONSERVATION ACTION : </label>
                                        <input type="text" name="conservation" required placeholder="Enter conservation action" id="inputid"/>
                                    </p>






                                    <p>
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </p>
                                </form>

                            </div>
                            <!--close details-->





                        </div>
                    </div>









                </div>
            </div>


            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of Admin
                    </div>

                    <div class="panel-body">
                        <?php include('viewAdmin.php'); ?>

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
