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
                <h1 class="page-subhead-line">All Bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Bats details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Bat details-->
                            <div class="display">

                                <form action="insertBat.php" method="post" name="insertform">

                                    <div class="col-xs-12">
                                        <label for="scientificName" id="preinput" class="col-xs-5"> * SCIENTIFIC NAME : </label>
                                        <input type="text"   name="scientificName" required placeholder="Enter bat  name" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="kingdom" id="preinput" class="col-xs-5"> * KINGDOM : </label>
                                        <input type="text"   name="kingdom"  required placeholder="Enter kingdom name" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="phylum" id="preinput" class="col-xs-5"> PHYLUM : </label>
                                        <input type="text"   name="phylum"  placeholder="Enter phylum" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="class" id="preinput" class="col-xs-5"> CLASS : </label>
                                        <input type="text"   name="class"  placeholder="Enter class" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="orderr" id="preinput" class="col-xs-5"> ORDER : </label>
                                        <input type="text"   name="orderr"  placeholder="Enter order" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="genus" id="preinput" class="col-xs-5"> GENUS : </label>
                                        <input type="text"   name="genus" placeholder="Enter genus" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="family" id="preinput" class="col-xs-5"> * FAMILY : </label>
                                        <input type="text"   name="family" required placeholder="Enter family" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="subFamily" id="preinput" class="col-xs-5"> SUB FAMILY : </label>
                                        <input type="text"   name="subFamily"  placeholder="Enter subfamily" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label  for="speciesAuthority" id="preinput" class="col-xs-5"> SPECIES AUTHORITY : </label>
                                        <input type="text"  name="speciesAuthority"  placeholder="Enter species authority" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="commonNames" id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                        <textarea style="height: 200px" name="commonNames"  placeholder="Enter common names" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="synonyms" id="preinput" class="col-xs-5"> SYNONYMS : </label>
                                        <textarea type="text" style="height: 200px" name="synonyms"  placeholder="Enter synonyms" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="redListCategory" id="preinput" class="col-xs-5"> RED LIST CATEGORY : </label>
                                        <input type="text"   name="redListCategory"  placeholder="Enter red list category" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="distribution" id="preinput" class="col-xs-5"> DISTRIBUTION : </label>
                                        <textarea type="text"  style="height: 200px" name="distribution"  placeholder="Enter distribution" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="oioCountries" id="preinput" class="col-xs-5"> OCCURRENCES IN OTHER COUNTRIES  : </label>
                                        <textarea type="text"  style="height: 200px" name="oioCountries"  placeholder="Enter Occurrences in other countries" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="population" id="preinput" class="col-xs-5"> POPULATION(L) : </label>
                                        <textarea type="text"  style="height: 200px" name="population"  placeholder="Enter population" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="roosts" id="preinput" class="col-xs-5"> ROOSTS : </label>
                                        <input type="text"   name="roosts"  placeholder="Enter roosts" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="commonFood" id="preinput" class="col-xs-5"> COMMON FOOD : </label>
                                        <textarea type="text"  style="height: 200px" name="commonFood"  placeholder="Enter common food" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="bibliography" id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                        <textarea type="text"  style="height: 300px" name="bibliography"  placeholder="Enter bibliography" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="conservation" id="preinput" class="col-xs-5"> * CONSERVATION ACTION : </label>
                                        <textarea type="text"  style="height: 250px" name="conservation" required placeholder="Enter conservation action" id="inputid" class="col-xs-7"></textarea>
                                    </div>






                                    <div class="col-xs-12">
                                        <br>
                                        <input type="submit" style="width: 200px" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>

                            </div>
                            <!--close details------------------------------------------>





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
