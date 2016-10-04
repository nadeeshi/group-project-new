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
            <h1 class="page-head-line">Admin Details</h1>
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
                     <h4>Add New Admin</h4>
                    <div style="margin-top: 20px;">
                     <?php include("newAdmin.php")?>





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
                    <?php include('viewAdmin.php'); ?>

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
