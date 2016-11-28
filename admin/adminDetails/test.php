<?php
require_once('../include_files/auth.php');
?>


<?php
// define variables and set to empty values
$usernameErr = $emailidErr = $mobilenoErr = $passwordErr  = "";
$username = $emailid = $mobileno = $password =  "";
$course = array();


//exit;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $variables = array();
    $variables = initialize();
    $errors = array();
    $errors = validate_errors($variables);

    if (count($errors) == 0) {

    }
}
function clean($data) {
    $data = strip_tags(htmlspecialchars(stripslashes(trim($data))));
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


?>


<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login</title>



    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>


    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: none;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

    </style>



</head>


<body>
<div>
    <?php include "../include_files/template.php" ?>
</div>

<div id="page-wrapper" >
    <div id="page-inner" >
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f"><b>Admin Details</b></h1>
                <h1 class="page-subhead-line">All administrators details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Admin</h4>
                        <div style="margin-top: 20px;"></div>


                        <!--add new Admin--------------------------------------------------------->
                        <div class="display">

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
                            include("../include_files/connect.php");
                            if(($username != '' )&& ($password != '') && ($emailid != '') && ($mobileno != '')){
                                $update=mysqli_query($bd,"INSERT INTO admin_details(username,emailid,mobileno,created,password)VALUES
                                      ('$username','$emailid','$mobileno',now(),'$password')");

                                if($update)
                                {

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



        <br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details of Admin
                </div>

                <div class="panel-body">


                    <!--start  viewAdmin---------------------------------------------------------------------->
                    <?php
                    include('../include_files/connect.php');
                    $select=mysqli_query($bd,"SELECT * FROM admin_details order by id desc");
                    $i=1;?>

                    <div class="display">

                        <table>
                            <tr>
                                <th>USER NAME : </th>
                                <th>EMAIL ID : </th>
                                <th> MOBILE NO : </th>
                                <th>CREATED ON : </th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr>

                            <?php
                            while($userrow=mysqli_fetch_array($select))
                            {
                                $id=$userrow['id'];
                                $username=$userrow['username'];
                                $usermail=$userrow['emailid'];
                                $usermobile=$userrow['mobileno'];
                                $created=$userrow['created']
                                ?>




                                <tr>
                                    <td><?php echo $username; ?></td>



                                    <td><?php echo $usermail; ?></td>


                                    <td><?php echo $usermobile; ?></td>



                                    <td><?php echo $created; ?></td>

                                    <td><a href="editAdmin.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> Edit </span></a></td>

                                    <td><a href="deleteAdmin.php?id=<?php echo $id; ?>"
                                           onclick="return confirm('Are you sure you wish to delete this Record?');">
                                            <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a></td>




                                </tr>





                            <?php } ?>
                            <!--close viewAdmin---------------------------------------------------------------->
                        </table>

                    </div></div>
            </div>
        </div>

    </div>
</div>
</div>









<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>

</body>
</html>































