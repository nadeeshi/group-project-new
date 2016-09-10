
<!DOCTYPE html>
<html>
<head>


    <link href="css//login.css" rel="stylesheet">
    <link href="css//navbar1n2.css" rel="stylesheet">

    <script src="login.js"></script>

</head>


<body>
<nav class="navbar navbar-default navbar1 navbar-li">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>BatFacts.Com</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form  navbar-right "action= '' method = "post">
                <div class="form-group">
                    <input type="text"  name = "address" style="height: 40px;" class="form-control" placeholder="Enter name here">
                </div>
                <button type="submit" style="width: 80px; height: 40px;" class="btn btn-default">Search</button>

            </form>

            <ul class="nav navbar-nav  navbar-right navbar-li">
                <li><button onclick="document.getElementById('id01').style.display='block'" style="width: 110px;height: 48px;">Sign In</button></li>
                </ul>
            </div>








        <!-- The Modal -->
        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>



            <!-- Modal Content -->
            <form class="modal-content animate" action="action_page.php">


                <div class="imgcontainer">
                    <img src="img/003.jpg" style="width:120px; height:78px;" alt="Avatar" class="avatar">
                    <!--<button   onclick="myFunction()" style="width:150px; height:58px;"  >Create New Account</button>-->

                    <button onclick="window.location.href='newAccount.php'" style="width:150px; height:58px;">Create New Account</button>




                </div>




                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" style="width: 100%">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>









    </div><!-- /.container-fluid -->
</nav>
</body>





</html>