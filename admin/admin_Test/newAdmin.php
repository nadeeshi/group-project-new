<!DOCTYPE>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Insert form</title>


</head>

<body>

<div class="display">

    <form action="insertAdmin.php" method="post" name="insertform">
        <div class="col-xs-12">
            <label for="name" id="preinput" class="col-xs-5"> USER NAME : </label>
            <input type="text" name="username" required placeholder="Enter your name" id="inputid" class="col-xs-6"/>
        </div>
        <div class="col-xs-12">
            <label  for="email" id="preinput" class="col-xs-5"> EMAIL ID : </label>
            <input type="email" name="usermail" required placeholder="Enter your Email" id="inputid" class="col-xs-6" />
        </div>
        <div class="col-xs-12">
            <label for="mobile" id="preinput" class="col-xs-5"> MOBILE NUMBER : </label>
            <input type="text" name="usermobile" required placeholder="Enter your mobile number" id="inputid" class="col-xs-6" />
        </div>
        <div class="col-xs-12">
            <input type="submit" name="send" value="Submit" id="inputid1"  />
        </div>
    </form>

</div>



</body>
</html>