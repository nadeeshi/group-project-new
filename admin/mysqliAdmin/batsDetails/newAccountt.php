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

                <h1>Registration Form</h1>
                <p>Use tab keys to move from one input field to the next.</p>


                <form name='registration' onSubmit="return formValidation();">
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
                        <li><input type="radio" name="sex" value="Male" /><span>Male</span></li>
                        <li><input type="radio" name="sex" value="Female" /><span>Female</span></li>

                        <li><label> * Language:</label></li>
                        <li><input type="checkbox"  name="en" value="en" checked /><span>English</span></li>
                        <li><input type="checkbox"  name="nonen" value="noen" /><span>Non English</span></li>

                        <li><label for="desc">About:</label></li>
                        <li><textarea name="desc" id="desc"></textarea></li>


                        <li><input type="submit"  name="submit" value="Submit" /></li>
                    </ul>



                </form>



            </div>

        </div>
        <!-- /. ROW  -->





<!-- /. PAGE INNER  -->
    </div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>



</body>
</html>
