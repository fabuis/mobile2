<?php
session_start();
if(isset($_SESSION["username"])){ 

header("Content-Type: text/html;charset=utf-8");
?>

<?php

$ciudad=isset($_GET['ciudad']) ? $_GET['ciudad']: $_POST['ciudad'];
//echo '<script> alert('.$ciudad.') </script>';

	include "../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_despachos WHERE jur_des_ciu=". $ciudad ." ORDER BY jur_des_nom";
	
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		
		$dato_juzgado 	= $datos['idjur_despacho'];
		$dato_id 		= $datos['jur_des_ciu'];
		$dato_despacho 	= $datos['jur_des_nom'];
	//Salida del mensaje	
		//$consulta_despachos.= '<option>'.$dato_juzgado.' '.$dato_id.' - '.$dato_despacho . '</option>';
		$consulta_despachos.= '<option value="'.$dato_juzgado.'">'.$dato_despacho.'</option>';
			};
		};
		echo $consulta_despachos;
?>
<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>