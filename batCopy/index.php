<!DOCTYPE php>
<?php>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>content</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @import 'https://fonts.googleapis.com/css?family=Ubuntu+Condensed';
        @import 'https://fonts.googleapis.com/css?family=Crimson+Text';
        @import 'https://fonts.googleapis.com/css?family=Rokkitt';

        .pdd{
            padding:40px;
            width: 150px;
            height: 150px;
        }

        .main_image{
            background: url(https://cdn3.f-cdn.com/build/css/images/help-support/poly-bg.svg?v=806f0e09bdb52dc729db7d4e3273fe6e&amp%3Bm=6) center no-repeat;
            background-size: 110%;
            background-position-y: 75%;
            padding: 80px 0 40px 0;
        }
        .org{
            background-color: #9d9d9d;
        }

        h1{
            font-family: 'Ubuntu Condensed', sans-serif;

        }

        .ddf
        {
            font-family: 'Rokkitt',
            size: 60px;

        }



    </style>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/navbar1n2.css" rel="stylesheet">
    <script src="js/jquary.js"></script>
    <script src="bootstrapjs.js"></script>

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
            <a class="navbar-brand" href="#">Join With Us</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form  navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter name here">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav  navbar-right navbar-li">
                <li class="btn1"><a href="#">Hi Name</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<section class="main_image org">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center">Hi, We Are Here To Help You!</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-warning" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>

    </div>

</section>
<hr />
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Go Back</a></li>
                <li class="active">You are here</li>
            </ol>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center"><font size="8px" color="#00bfff"> General Categories </font></h1>

        </div>
    </div>
</div>
<br>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="p2-account.html" class="btn btn-warning pdd" role="button">
                        <i class="fa fa-briefcase fa-4x" style="margin-top: 40px"></i>
                        <br>
                    </a>
                    <br>
                    <span class="ddf">
                    Account Settings
                    </span>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="p2-man%20accounts.html" class="btn btn-success pdd" role="button">
                        <i class="fa fa-cog fa-4x" style="margin-top: 40px"></i>
                        <br>
                    </a>

                    <br>
                    <span class="ddf">
                    Managing Accounts
                    </span>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="p2-%20privacy%20saf.html" class="btn btn-danger pdd" role="button">
                        <i class="fa fa-user-secret fa-4x" style="margin-top: 40px"></i>
                        <br>

                    </a>
                    <br>
                    <span class="ddf">
                    Privacy and Security
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
</?>