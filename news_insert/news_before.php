<!DOCTYPE html>
<html>
    <head>
        <title>news insert</title>
        <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
        
		
		<link href="../assets/bootstrap/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/navbar1n2.css" rel="stylesheet">
  <link href="../assets/css/editnewschild.css" rel="stylesheet">
  
  <link href="../assets/css/footer.css" rel="stylesheet">
  <script src="../assets/bootstrap/jquary.js"></script> 
  <script src="../assets/bootstrap/bootstrapjs.js"></script> 
  <script src="../js/jssor.slider.mini.js"></script>
	
	
	
		
    </head>
    <body>
        <?php
        $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "test2";
        $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
        $qry = "SELECT * FROM news_insert WHERE news_id = '" . $_GET['id'] . "' ;";
        $result = mysqli_query($con, $qry);
        $record = mysqli_fetch_assoc($result);
        ?>

        <div>
            <?php include ("../IncludedFiles/navbarTemplate.php"); ?>
        </div>
        <div class="col-sm-8 col-sm-push-2 col-xs-10 insert-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="inblock">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><h1 class="ax"><?php echo $record['title']; ?></h1></br></p>
                                        </div></div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>                            
                                                <a class="aidanews2_img1" href="">
                                                    <img src="<?php echo  '../batnews/photos/'.$record['image']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "float: right ;margin: 0px 0px 15px 20px; max-height: 20em ; min-height:14em; width: 30%; height:auto;"/>
                                                </a>
                                            <div class="des">
                                                <?php echo $record['body']; ?>
                                            </div>
                                            </p>
                                        </div></div>
                                  
                                    <div class="row">
                                        <div class="col-sm-12">
											<a href=<?php echo "'edit_news.php?ed_id=".$record['nid']."'"; ?> class="readon">                                                                                     
											<button type="button" value="x" onclick="alert('back to edit')">edit</button><br>
											</a>
                                            <a href=<?php echo "'to_db.php?to_id=".$record['news_id']."'"; ?> class="readon">                                                                                     
											<button type="button" value="y" onclick="alert('your news will be published')">publish</button><br>
											</a>
											
											<a href="news_insert.php" class="readon">
                                                back to news
                                            </a>
                                        </div>
									</div>

                                </div>

                            </div>
                            <div class="col-sm-4">
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start footer -->
		<div class="row">
            <div class="col-xs-10 col-xs-push-2">
                
            </div>  
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-push-2">
                <?php include ("../IncludedFiles/footer.php"); ?>
            </div>  
        </div>


        <!-- end of footer -->
    </body>
</html>