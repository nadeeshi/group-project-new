<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Facts about Bats-BatFacts.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Bootstrap -->
          <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="js/bootstrap.min.js" rel="stylesheet" media="screen">
          <!--Google Fonts-->
          <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="modal.css">
            
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <p>Use tab keys to move from one input field to the next.</p>


    <form name='registration' onSubmit="return formValidation();" action="">
        <ul>

            <li><label for="fullName">* Full Name:</label></li>
            <li><input type="text" name="fullName" size="80" /></li>


            <li><label for="username">* User Name:</label></li>
            <li><input type="text" name="username" size="80" /></li>

            <li><label for="address">Address:</label></li>
            <li><input type="text" name="address" size="50" /></li>

            <li><label for="country">* Country:</label></li>
            <li><select name="country">
                <option selected="" value="Default">(Please select a country)</option>
                <option value="AF">Sri Lanka</option>
                <option value="AL">Canada</option>
                <option value="DZ">India</option>
                <option value="AS">Russia</option>
                <option value="AD">USA</option>
            </select>
            </li>



            <li><label for="email">* Email:</label></li>
            <li><input type="text" name="email" size="50" /></li>

            <li><label id="gender">* Sex:</label></li>
            <li><input type="radio" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="sex" value="Male" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Male</span></li>
            <li><input type="radio" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="sex" value="Female" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Female</span></li>

            <li><label> * Language:</label></li>
            <li><input type="checkbox" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="en" value="en" checked /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">English</span></li>
            <li><input type="checkbox" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="nonen" value="noen" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Non English</span></li>

            <li><label for="desc">About:</label></li>
            <li><textarea name="desc" id="desc"></textarea></li>


            <li><input type="submit" style=" float: left;width: 150px;height:35px; clear: left; margin: 20px 0 20px 230px;" name="submit" value="Submit" /></li>
        </ul>



    </form>
</body>
</html>
