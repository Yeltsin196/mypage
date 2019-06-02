<?php
session_start();

?>
<?php 

 function numeros($numero, $vector){
 	$band=false;
	 	foreach ($vector as $key ) {
	 		# code...
	 		//echo $key."<br>";
	 		if($key==$numero){
	// 			echo $numero." ya existe"."<br>";
	 			$band=true;
	 			}
	 	}
	 	return $band;
	}
$_vector=array();
$_SESSION["matriz"]=array();
//var_dump($vector);

for ($i=0; $i <4; $i++) { 
	# code...
	$numero=rand(0, 9);
	
		if(numeros($numero, $_vector)==false){
			$_vector[$i]=$numero;
		}else{
			$i--;
		}
		

}
$_SESSION["matriz"]=$_vector;
var_dump($_SESSION["matriz"]);
header("location:muertos.php");

 ?>
