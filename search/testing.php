<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");


?>

<!DOCTYPE html>
<html>


	
	<head>
	<title>thread</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/testing.css">		
	<link href="../css/navbar1n2.css" rel="stylesheet" type="text/css">
	<link href="../css/footer.css" rel="stylesheet">
	<script src="../js/jquary.js"></script> 
  	<script src="../js/bootstrapjs.js"></script>

	</head>

<body>

	<div>
	<?php include('../template/navbarTemplate.php');?>
	</div>
	<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
		<div class="container">

	<?php
	$count = 0;
		$count1 = 0;
	//$rec =0;
	
	
	if($_POST){

	
		if(isset($_POST['address'])){
		$searchq = $_POST['address'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
		
		if(!empty($searchq)){

		$query = mysql_query("SELECT * FROM fulldemo WHERE name = '$searchq';") or die("could not search");
			while($row = mysql_fetch_array($query)){
					$fname = $row['name'];
					$lplace1 = $row['city'];
					$id = $row['id'];
					$img = $row['location'];
					$des = $row['description'];
					$count = 1;
		
		//echo '<p><img src="'.$row['location'].'"></p>';
		$output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
		//echo $output;
		
		//echo '<p><img src="'.$row['description'].'"></p>';
		
	}
	
	include ("vm.php");
	
	$query = mysql_query("SELECT * FROM photos;");
$dat = "zi";
$ab = array();
$d =array();
$xx =array();
$head =array();
while($row = mysql_fetch_array($query)){
					$cap = $row['caption'];
					$ds = $row['desc'];
					$idn = $row['id'];
					array_push($ab,$ds);
					array_push($d,$idn);
					array_push($head,$cap);

					//$count = 1;
		//echo $ds[0].'<br/>';
		//echo '<p><img src="'.$row['location'].'"></p>';
		//$output = '<div> '.'name :  '.$cap.'</br> </br> place :  '. $ds.'</div></br>discription :  '.$des;
		//echo $cap;
		
		
		
		//echo '<p><img src="'.$row['description'].'"></p>';
		
	}
	for($i=0;$i<4;$i++){
	SearchString($ab[$i], $searchq);
		if ($rec == 1){
		$count1=1;
		
		$fo=$d[$i];
		
		array_push($xx,$fo);
		

		$rec=0;
		}
		$r = count($xx);
		
		}//echo $r;
	}
	}
	}
	?>
	
<div class="row">
	<div  class="col-sm-1"  >
	</div>
	<div  class="col-sm-10"  >
		<?php if(($count==1)||($count1==1)){	?><h2> search results</h2><?php } else {?><h2>no result found</h2><?php }?>
	</div>
	<div  class="col-sm-1"  >
	</div>
</div>	
<div class="row">
	<div  class="col-sm-1"  >
	</div>
	<div  class="col-sm-10"  >
	
<ul style="list-style-type:circle">
	<?php if($count ==1){?>
  <li><a  href=<?php echo "'../batmap/distribution_c.php?batid=".$id."'";?>><?php echo $fname;?></a></li>
	<?php echo $des,$id;
	}		
	?>
	<?php if($count1 ==1){
				for($s=0;$s<$r;$s++){
	?>
  <li><a href=<?php echo "'../batnews/news_child_s.php?batid1=".$xx[$s]."'";?>><?php echo $head[$xx[$s]-1];?></a></li>
	<?php echo substr( $ab[$xx[$s]-1],0,150)."..."; 
	}
	}?>
	</div>
</ul>
<div  class="col-sm-1"  >
	</div>
</div>  
	</div>
</div>  
	<div class="row">
    <div class="col-sm-10 col-sm-push-2 col-xs-12">
      <?php include ("../template/footer.php"); ?>
    </div>  
  </div>
</body>
</html>