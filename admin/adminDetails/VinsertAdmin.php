<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

    <script>
        /*function validateForm(){
         var username = document.forms["insertform"]["usernameV"].value;
         var usermail = document.forms["insertform"]["usermailV"].value;
         //var umobile = document.forms["myForm"]["usermobile"].value;
         //var upassword = document.forms["myForm"]["password"].value;




         if(allLetter(username)){
         if(validateEmail(usermail)){
         /*if(validateMobile(umobile)){
         if(validatePassword(upassword)){

         }

         }

         }

         }


         return false;

         }

         function allLetter(username) {

         var letters = /^[A-Za-z]+$/;
         if(username.match(letters)){


         }else{
         alert("Fullname must have alphabet characters only");
         return false;

         }
         }

         function validateEmail(usermail) {


         var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
         if(usermail.match(letters)){


         }else{
         alert("You have entered an invalid email address!");
         return false;

         }
         }*/

         /*function  validateMobile(umobile){


         var letters = /^[0-9]+$/;
         if(umobile.match(letters)){


         }else{
         alert("You have entered an invalid phone numbers!");
         return false;

         }
         }

         function  validatePassword(upassword){


         var letters = /^[0-9a-zA-Z]+$/;
         if(upassword.match(letters)){


         }else{
         alert("You have entered an invalid password !");
         return false;

         }
         }*/







    </script>



</head>



<body>
<?php include("template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Admin Details</h1>
                <h1 class="page-subhead-line">All administrators details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Admin</h4>
                        <div style="margin-top: 20px;">


                            <!--add new Admin--------------------------------------------------------->
                            <div class="display">
                                <?php
                                $error = FALSE;
                                if(count($_POST)>0){
                                    $error_check = TRUE;
                                }
                                else{
                                    $error_check = FALSE;
                                }
                                ?>
                                <form action="" method="POST">
                                    <input maxlength='3' name='ssn1' size='3' value=''>)-<input maxlength='2' name='ssn2' size='2' value=''>-<input maxlength='4' name='ssn3' size='3' value=''>
                                    <?php
                                    if($error_check && (!is_numeric($_POST['ssn1']) || !is_numeric($_POST['ssn2']) || !is_numeric($_POST['ssn3']))){
                                        echo "<br />Error - invalid SSN<br />";
                                        $error = TRUE;
                                    }


                                    ?>
                                    <input name='email' size='30' maxlength='80' value=''>
                                    <?php
                                    if($error_check && strpos($_POST['email'], '@')===FALSE){
                                        echo "<br />Error - invalid email<br />";
                                        $error = TRUE;
                                    }
                                    ?>
                                    <input type="submit" name="Submit">
                                </form>
                                <?php
                                if($error_check && !$error){
                                    echo "Redirecting...";
                                    //redirect somehow?
                                }
                                ?>

                                <!--form action="validate.php" method="post" name="insertform" onsubmit="return validateForm()">


                                    <div class="col-xs-12">
                                        <label for="name" id="preinput" class="col-xs-5"> USER NAME : </label>

                                        <input type="text" name="usernameV" required placeholder="Enter admin name" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="email" id="preinput" class="col-xs-5"> EMAIL ID : </label>
                                        <input type="email" name="usermailV" required placeholder="Enter Email" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="mobile" id="preinput" class="col-xs-5"> PHONE NUMBER : </label>
                                        <input type="text" name="usermobileV" required placeholder="Enter mobile number" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="password" id="preinput" class="col-xs-5"> PASSWORD : </label>
                                        <input type="password" name="passwordV" required placeholder="Enter password" id="inputid" class="col-xs-7"/>
                                    </div>



                                    <div class="col-xs-12">
                                        <input type="submit" name="submit" value="Submit" id="inputid1"  />
                                    </div>
                                </form>-->

                            </div>


                            <!--close new admin------------------------------------------------------------------------------->




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
