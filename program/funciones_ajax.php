<?php
session_start();
if(isset($_SESSION["username"])){ 

header("Content-Type: text/html;charset=utf-8");
?>
<?php

	include "../../../pages/data/conexion.php";
    $consulta= "SELECT * FROM sim_lineascredito";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$dato_id 	= $datos['idlinea'];
		$dato_linea = $datos['nombre'];
	//Salida del mensaje	
		//$consulta_despachos.= '<option>'.$dato_juzgado.' '.$dato_id.' - '.$dato_despacho . '</option>';
		$consulta_lineas.= '<option value="'.$dato_id .'">'.$dato_linea . '</option>';
			};
		};

?>

<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>