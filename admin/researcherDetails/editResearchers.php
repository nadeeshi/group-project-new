<?php
ob_start();
include('connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {
        $eusername=$_POST['eusername'];
        $eusermail=$_POST['eusermail'];
        $emobile=$_POST['eusermobile'];
        $updated=mysql_query("UPDATE researcher_details SET
        username='$eusername', emailid='$eusermail', mobileno='$emobile' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:researchersDetails.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
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
                <h1 class="page-head-line">Researcher Details</h1>
                <h1 class="page-subhead-line">All memeber Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Researcher</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysql_query("SELECT * FROM researcher_details WHERE id='$id'");
                                while($profile=mysql_fetch_array($getselect))
                                {
                                    $username=$profile['username'];
                                    $usermail=$profile['emailid'];
                                    $usermobile=$profile['mobileno'];
                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <p>
                                                <label for="name"  id="preinput"> RESEARCHER NAME : </label>
                                                <input type="text" name="eusername" required placeholder="Enter your name"
                                                       value="<?php echo $username; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="email"  id="preinput"> EMAIL ID : </label>
                                                <input type="email" name="eusermail" required placeholder="Enter your Email"
                                                       value="<?php echo $usermail; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
                                                <input type="text" name="eusermobile" required placeholder="Enter your mobile number"
                                                       value="<?php echo $usermobile; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <input type="submit" name="update" value="Update" id="inputid1" />
                                            </p>
                                        </form>
                                    </div>
                                <?php } } ?>
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