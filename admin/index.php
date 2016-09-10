<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>


    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>


<body style="background-color: #E2E2E2;" >
<div class="container">
    <!--for get small image-->
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="img/003.jpg" />
        </div>
    </div>


    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">

                <hr />
                <h5><b>Enter Details to Login</b></h5>
                <br />

                <form name="loginform" action="login_exec.php" method="post">
                    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
                        <tr>
                             <td colspan="2">
                                <!--the code bellow is used to display the message of the input validation-->
                                    <?php
                                        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                            echo '<ul class="err">';
                                            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                                echo '<li>',$msg,'</li>';
                                             }
                                            echo '</ul>';
                                            unset($_SESSION['ERRMSG_ARR']);
                                         }
                                     ?>
                             </td>
                         </tr>


                        <tr>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span><!--for get small icon-->
                            <input type="text" name="username" class="form-control" placeholder="Your Username " required/><!--for get input field-->
                        </div>

                         </tr>

                         <tr>
                         <div class="form-group input-group">
                             <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                             <input type="password" name="password" class="form-control"  placeholder="Your Password" required/>
                         </div>
                         </tr>


                         <tr>
                        <!--for checkme & forgot password?-->
                        <div class="form-group">
                             <label class="checkbox-inline">
                             <input type="checkbox" /> Remember me
                            </label>
                                            <span class="pull-right">
                                                   <a href="index.php" >Forget password ? </a>
                                            </span>
                        </div>
                             <!--close checkme-->
                         </tr>


                        <tr>
                         <div align="center">
                            <input name="" type="submit" class="btn btn-primary" value="login" />
                         </div>
                         </tr>
                    </table>
                </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
