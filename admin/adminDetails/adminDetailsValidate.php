<?php
// define variables and set to empty values
$usernameErr = $emailidErr = $mobilenoErr = $passwordErr  = "";
$username = $emailid = $mobileno = $password =  "";
$course = array();
//var_dump($_POST['gender']);
//exit;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $variables = array();
    $variables = initialize();
    $errors = array();
    $errors = validate_errors($variables);

    if (count($errors) == 0) {
        //database operation
        //exit;
    }
}
function clean($data) {
    $data = strip_tags(htmlspecialchars(stripslashes(trim($data))));
    //trim :- Strip whitespace (or other characters) from the beginning and end of a string
    //The stripslashes() function removes backslashes.Prevents XSS
    //htmlspecialchars :- Converts the predefined characters "<" (less than) and ">" (greater than) to HTML entities:< (less than) becomes &lt; and > (greater than) becomes &gt;Helps in preventing XSS
    //The strip_tags() function strips a string from HTML, XML, and PHP tags.
    return $data;
}

function initialize(){
    $var = array();
    $var['username'] = clean($_POST['username']);
    $var['emailid'] = clean($_POST['emailid']);
    $var['mobileno'] = clean($_POST['mobileno']);
    $var['password'] = clean($_POST['password']);


    return $var;
}

function validate_errors($var) {    //is an array being passed into this function??have a look at arg of validateFirstName.
    $errors = array();

    $errors['username'] = validateUserName($var['username']);//should return error string or ''
    $errors['emailid'] = validateEmailId($var['emailid']);
    $errors['mobileno'] = validateMobileNo($var['mobileno']);
    $errors['password'] = validatePassword($var['password']);

    return $errors;
}

function validateUserName($uname){

    if(empty($uname)){
        global $usernameErr;
        $usernameErr = "First name is required";
        return $usernameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $uname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $usernameErr;
        $usernameErr = "Only letters are allowed";
        return $usernameErr;
    } else {
        global $username;
        $username = $uname;
        return '';
    }
}

function validateEmailId($umail){

    if(empty($umail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $umail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $emailidErr;
        $emailidErr = "you have entered Invalid Email";
        return $emailidErr;
    } else {
        global $emailid;
        $emailid = $umail;
        return '';
    }
}

function validateMobileNo($umobile) {

    if(empty($umobile)) {
        global $mobilenoErr;
        $mobilenoErr = "Username is required";
        return $mobilenoErr;
    } else if (!preg_match("/^\d{10}$/", $umobile)){ // checks if username contains only letters and digits
        global $mobilenoErr;
        $mobilenoErr = "you have entered Invalid Mobile Number";
        return $mobilenoErr;
    } else {
        global $mobileno;
        $mobileno = $umobile;
        return '';
    }
}

function validatePassword($pword){

    if(empty($pword)) {
        global $passwordErr;
        $passwordErr = "Password is required";
        return $passwordErr;
    } else if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pword) === 0) {
        global $passwordErr;
        $passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        return $passwordErr;
    } else {
        global $password;
        $password = $pword;
        return '';
    }
}







//renderform();



?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>
    <style>
        .error {color: #FF0000;}
    </style>


</head>



<body>
<?php include("template.php")?>



<div id="page-wrapper">
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line" style="color: #500a6f"><b>Admin Details</b></h1>
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

                            <!-- <form action="insertAdmin.php" method="post" name="insertform">


                                 <div class="col-xs-12">
                                     <label for="name" id="preinput" class="col-xs-5"> USER NAME : </label>

                                     <input type="text" name="username" required placeholder="Enter admin name" id="inputid" class="col-xs-7"/>
                                 </div>
                                 <div class="col-xs-12">
                                     <label  for="email" id="preinput" class="col-xs-5"> EMAIL ID : </label>
                                     <input type="email" name="usermail" required placeholder="Enter Email" id="inputid" class="col-xs-7"/>
                                 </div>
                                 <div class="col-xs-12">
                                     <label for="mobile" id="preinput" class="col-xs-5"> PHONE NUMBER : </label>
                                     <input type="text" name="usermobile" required placeholder="Enter mobile number" id="inputid" class="col-xs-7"/>
                                 </div>
                                 <div class="col-xs-12">
                                     <label  for="password" id="preinput" class="col-xs-5"> PASSWORD : </label>
                                     <input type="password" name="password" required placeholder="Enter password" id="inputid" class="col-xs-7"/>
                                 </div>



                                 <div class="col-xs-12">
                                     <input type="submit" name="send" value="Submit" id="inputid1"  />
                                 </div>
                             </form>-->




                            <!--close new admin------------------------------------------------------------------------------->
                            <p><span class="error">* required field.</span></p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="col-xs-12">
                                    <label for="firstname" class="col-xs-5">User Name:</label>
                                    <input type="text" name="username"  required id="inputid" class="col-xs-6" value="<?php echo $username; ?>" /><span class="error">* <?php echo $usernameErr; ?></span><br/><br/></div>
                                <div class="col-xs-12">
                                    <label for="lastname" class="col-xs-5">Email:</label>
                                    <input type="text" name="emailid" id="inputid" required class="col-xs-6"  value="<?php echo $emailid; ?>" /><span class="error"> <?php echo $emailidErr; ?></span><br/><br/></div>
                                <div class="col-xs-12">
                                    <label for="username" class="col-xs-5">Mobile No:</label>
                                    <input type="text" name="mobileno" id="inputid" required  class="col-xs-6" value="<?php echo $mobileno; ?>" /><span class="error">* <?php echo $mobilenoErr; ?></span><br/><br/></div>
                                <div class="col-xs-12">
                                    <label for="password" class="col-xs-5">Password:</label>
                                    <input type="password" name="password" class="col-xs-6" required id="inputid" /><span class="error">* <?php echo $passwordErr; ?></span><br/><br/></div>
                                <br/>
                                <input type = "submit" value="Submit" name="submit">
                            </form>

                            <?php
                            echo "<h2>New Input:</h2>";
                            echo "username:" . $username;
                            echo "<br>";
                            echo "emailid:" . $emailid;
                            echo '<br>';
                            echo "mobilno:" . $mobileno;
                            echo '<br>';
                            echo "Password:" . $password;
                            echo '<br>';

                            ?>




                            <?php
                            ob_start();
                            include("connect.php");

                            /*$username=($_POST['username']);
                            $usermail=($_POST['emailid']);
                            $usermobile=($_POST['mobileno']);
                            $password=($_POST['password']);*/


                            if(($username != '' )&& ($password != '') && ($emailid != '') && ($mobileno != '')){
                                $update=mysqli_query($bd,"INSERT INTO admin_details(username,emailid,mobileno,created,password)VALUES
                                      ('$username','$emailid','$mobileno',now(),'$password')");

                                if($update)
                                {
                                    //$msg="Successfully Updated!!";
                                    //echo "<script type='text/javascript'>alert('$msg');</script>";
                                    // header('Location:adminDetails.php');
                                }
                                else
                                {
                                    $errormsg="Something went wrong, Try again";
                                    echo "<script type='text/javascript'>alert('$errormsg');</script>";
                                }
                            }

                            ob_end_flush();
                            ?>




                        </div>
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


                    <!--start  viewAdmin---------------------------------------------------------------------->
                    <?php
                    include('connect.php');
                    $select=mysqli_query($bd,"SELECT * FROM admin_details order by id desc");
                    $i=1;
                    while($userrow=mysqli_fetch_array($select))
                    {
                        $id=$userrow['id'];
                        $username=$userrow['username'];
                        $usermail=$userrow['emailid'];
                        $usermobile=$userrow['mobileno'];
                        $created=$userrow['created']
                        ?>

                        <div class="display">
                            <p> USER NAME : <span style="color: #125acd"><?php echo $username; ?></span>

                                <a href="editAdmin.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> Edit </span></a>
                                <a href="deleteAdmin.php?id=<?php echo $id; ?>"
                                   onclick="return confirm('Are you sure you wish to delete this Record?');">
                                    <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a>
                            </p>
                            <br />
                            <p> EMAIL ID : <span style="color: #125acd"><?php echo $usermail; ?></span>

                            </p>
                            <br />
                            <p> MOBILE NO : <span style="color: #125acd"><?php echo $usermobile; ?></span>
                            </p>
                            <br />
                            <p> CREATED ON : <span style="color: #125acd"><?php echo $created; ?></span>
                            </p>
                            <br />
                        </div>
                    <?php } ?>
                    <!--close viewAdmin---------------------------------------------------------------->


                </div>
            </div>
        </div>



    </div>
</div>




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>



</body>
</html>
