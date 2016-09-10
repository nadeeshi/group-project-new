<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $usernameErr = $passwordErr = $genderErr = $courseErr = "";
$firstname = $lastname = $username = $password = $gender = $comments = "";
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
    $var['firstname'] = clean($_POST['firstname']);
    $var['lastname'] = clean($_POST['lastname']);
    $var['username'] = clean($_POST['username']);
    $var['password'] = clean($_POST['password']);
    if(!empty($_POST['gender'])) {                //if-else condition is used because here we don't type in any data,but just select data
        $var['gender'] = $_POST['gender'];
    }  else {
        $var['gender'] = '';
    }
    //var_dump($_POST[gender]);
    if(!empty($_POST['course'])) {               //if-else condition is used because here we don't type in any data,but just select data
        $var['course'] = $_POST['course'];
    } else {
        $var['course'] = '';
    }
    $var['comments'] = clean($_POST['comments']);
    return $var;
}

function validate_errors($var) {    //is an array being passed into this function??have a look at arg of validateFirstName.
    $errors = array();

    $errors['firstname'] = validateFirstName($var['firstname']);//should return error string or ''
    $errors['lastname'] = validateLastname($var['lastname']);
    $errors['username'] = validateUserName($var['username']);
    $errors['password'] = validatePassword($var['password']);
    $errors['gender'] = validateGender($var['gender']);
    $errors['course'] = validateCourse($var['course']);
    $errors['comments'] = validateComments($var['comments']);
    return $errors;
}

function validateFirstName($fname){

    if(empty($fname)){
        global $firstnameErr;
        $firstnameErr = "First name is required";
        return $firstnameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $fname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $firstnameErr;
        $firstnameErr = "Only letters are allowed";
        return $firstnameErr;
    } else {
        global $firstname;
        $firstname = $fname;
        return '';
    }
}

function validateLastName($lname){

    if(empty($lname)){
        return '';
    } else if (!preg_match("/^[a-zA-Z ]*$/", $lname)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $lastnameErr;
        $lastnameErr = "Only letters are allowed";
        return $lastnameErr;
    } else {
        global $lastname;
        $lastname = $lname;
        return '';
    }
}

function validateUserName($uname) {

    if(empty($uname)) {
        global $usernameErr;
        $usernameErr = "Username is required";
        return $usernameErr;
    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $uname)){ // checks if username contains only letters and digits
        global $usernameErr;
        $usernameErr = "Only letters and digits are allowed";
        return $usernameErr;
    } else {
        global $username;
        $username = $uname;
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

function validateGender($gen){

    if(empty($gen)) {
        global $genderErr;
        $genderErr = "Gender is required";
        return $genderErr;
    } else {
        global $gender;
        $gender = $gen;
        return '';
    }
}

function validateCourse($cour){

    if(empty($cour)) {
        global $courseErr;
        $courseErr = "Select atleast one";
        return $courseErr;
    } else {
        global $course;
        $course = $cour;
        return '';
    }
}

function validateComments($comm){

    if(empty($comm)) {
        return '';
    } else {
        global $comments;
        $comments = $comm;
        return '';
    }
}


//renderform();



?>


<html>
<head>
    <title>Sample Form</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="firstname">Firstname:</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" /><span class="error">* <?php echo $firstnameErr; ?></span><br/><br/>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" /><span class="error"> <?php echo $lastnameErr; ?></span><br/><br/>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo $username; ?>" /><span class="error">* <?php echo $usernameErr; ?></span><br/><br/>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" /><span class="error">* <?php echo $passwordErr; ?></span><br/><br/>
    Gender:
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male" />
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female" /><span class="error">* <?php echo $genderErr; ?></span><br/><br/>
    <label for="course">Course:</label>
    PHP<input type="checkbox" name="course[]" id="course" <?php if((!empty($_POST["course"])&& in_array("PHP",$_POST["course"]))){echo "checked";}?> value="PHP" />
    HTML<input type="checkbox" name="course[]" id="course" <?php if((!empty($_POST["course"])&& in_array("HTML",$_POST["course"]))){echo "checked";}?> value="HTML" />
    CSS<input type="checkbox" name="course[]" id="course" <?php if((!empty($_POST["course"])&& in_array("CSS",$_POST["course"]))){echo "checked";}?> value="CSS" />
    Javascript<input type="checkbox" name="course[]" id="course" <?php if((!empty($_POST["course"])&& in_array("Javascript",$_POST["course"]))){echo "checked";}?> value="Javascript" /><span class="error">* <?php echo $courseErr; ?></span><br/><br/>
    <label for="comments">Comments:</label><br/>
    <textarea name="comments" rows="4" cols="20" id="comments"/><?php echo $comments; ?></textarea><br/><br/>
    <input type = "submit" value="Submit" name="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo "Firstname:" . $firstname;
echo "<br>";
echo "Lastname:" . $lastname;
echo '<br>';
echo "Username:" . $username;
echo '<br>';
echo "Password:" . $password;
echo '<br>';
echo "Gender:" . $gender;
echo '<br>';
global $string;
$string = implode(",",$course);
echo "Course(/s):" . $string;
echo '<br>';
echo "Comments:" . $comments;
echo '<br>';
?>
</body>
</html>