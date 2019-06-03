<?php 


session_start();
	
	$vector=$_SESSION["matriz"];
	
	global $vector ;







 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form>
 		<input  name="Hola" placeholder="Hola">
 		<input class='boton-verde' value='aceptado' type='submit' id='inscribir' name='inscribir'> 
 	</form>
 
 <?php
  if(isset($_GET['inscribir'])=='aceptado'){
        	var_dump($_GET['Hola']);
        }
 ?>	
       <script type="text/javascript">
					function cargar($numero){
				//	alert("fil="+fila+" col:"+col);
					document.location="muertos.php?fil="+incribir;
				}
				</script>


 </body>
 </html>