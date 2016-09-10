<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bat Facts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="css/style.css" rel="stylesheet" />
	
	<!--Login CSS -->
	 <link href="css/login.css" rel="stylesheet" />
	 
	 
	
	<script src="js/login.js"></script>  
	
</head>

<body>
 

 <!--get header Frame -->

 <div class="row" style="height: 100px">

     <!--<div class="col-sm-2" >-->
     <?php include ("headerFrame.php")?>

 </div>






 <button onclick="document.getElementById('id01').style.display='block'"  style="width:150px; height:58px;" >Login</button>




 <div class="row" style="height: 300px" >



     <div class="col-sm-4" style="height: 300px; width: 500px" class="img-responsive" >
         <!--<img  src="img/im.jpg"  style="height: 100px; width: 300px" class="img-responsive"/>-->

         <?php include ("headerImage.php")?>

     </div>

     <div class="col-sm-1" >


     </div>

     <div class="col-sm-6" >
         <h1>Why Bats</h1>
         <p><b>Bats are clean, gentle and intelligent, they are vital to the ecosystem, and they enhance our lives in many ways.
                 Fruit and nectar bats bring us approximately 450 commercial products and over 80 different medicines through seed dispersal and pollination.
                 Up to 98% of all rainforest regrowth comes from seeds that have been spread by fruit bats.
                 Insect-eating bats are literal vacuum cleaners of the night skies, eating millions upon millions of harmful bugs.
                 They protect us by eating insect-pests that destroy crops as well as insects that cause human disease.</b></p>

     </div>


 </div>


 <div class="row" style="height: 230px" >

     <?php include ("navbar.php")?>

 </div>








 <div class="row" style="height: 1000px">

     <?php include ("mainBody.php")?>


 </div>














 <!-- Button to open the modal login form -->
<!--<button onclick="document.getElementById('id01').style.display='block'">Login</button>-->

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>



  <!-- Modal Content -->
  <form class="modal-content animate" action="action_page.php">
  
  
    <div class="imgcontainer">
      <img src="img/003.jpg" style="width:120px; height:78px;" alt="Avatar" class="avatar">
	  <!--<button   onclick="myFunction()" style="width:150px; height:58px;"  >Create New Account</button>-->
	  
	  <button onclick="window.location.href='selectAccount.php'" style="width:150px; height:58px;">Create New Account</button>
	  
	 
	  
	  
    </div>

	
	
	
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


    
  
  


 
 
 
 
 
 
 





<!--get footer -->
 <?php include ("footer.php")?>



</body>
</html>