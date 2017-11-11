<?php
session_start();
if(isset($_SESSION["username"])){ 
header("Content-Type: text/html;charset=utf-8");
?>


<?php
	if(isset($_GET['proceso']) ? $_GET['proceso']: $_POST['proceso']){ 

		$proceso=isset($_GET['proceso']) ? $_GET['proceso']: $_POST['proceso'];
		$variable=isset($_GET['variable']) ? $_GET['variable']: $_POST['variable'];
		
		if($proceso=="consult_dpto"){
			
			echo '<script> alert ("Recibe Variable") </script>';
			$departamento=isset($_GET['departamento']) ? $_GET['departamento']: $_POST['departamento'];
			$dato=isset($_GET['dato']) ? $_GET['dato']: $_POST['dato'];
			
			include "../../pages/data/conexion.php";
    		$consulta= "SELECT * FROM departamentos ORDER BY dep_des";
			$resultado=$connection->query("SET NAMES 'utf8'");
			$resultado=$connection->query($consulta);
    		if($resultado->num_rows > 0){		
				//Se comprueba que tiene elementos
				while($datos= $resultado->fetch_assoc()) {
					$id 	= $datos['iddepartamentos'];
					$dep_cod 	= $datos['dep_cod'];
					$dep_des 	= $datos['dep_des'];
					if($dep_cod==$variable){
						$consulta_departamento.= '<option value="'.$dep_cod .'" selected>'.$dep_des.'</option>';
					}else{
						$consulta_departamento.= '<option value="'.$dep_cod .'">'.$dep_des.'</option>';
					}
				};
			};
			echo $consulta_departamento;
			
		}else if($proceso=="consult_ciud"){
			
			echo '<script> alert ("Ingresa a consulta ciudad '.$variable.'") </script>';
			include "../../pages/data/conexion.php";
			$consulta= "SELECT * FROM municipios WHERE mun_cod_dep=".$variable.""; 
			$resultado=$connection->query("SET NAMES 'utf8'");
			$resultado=$connection->query($consulta);
			if($resultado->num_rows > 0){		
			//Se comprueba que tiene elementos
				while($datos= $resultado->fetch_assoc()) {
					$idmunicipios	= $datos['idmunicipios'];
					$mun_cod_dep 	= $datos['mun_cod_dep'];
					$mun_cod 		= $datos['mun_cod'];
					$mun_des 		= $datos['mun_des'];
					if($mun_cod==$variable){
						$consulta_ciudades.= '<option value="'.$mun_cod .'" selected>'.$mun_des.'</option>';
					}else{
						$consulta_ciudades.= '<option value="'.$mun_cod .'">'.$mun_des.'</option>';
					}
				};
			};
		echo $consulta_ciudades;
			
		}else if($proceso=="consult_juz"){
	
			include "../../pages/data/conexion.php";
			$consulta= "SELECT * FROM jur_despachos WHERE jur_des_ciu=".$variable.""; 
			$resultado=$connection->query("SET NAMES 'utf8'");
			$resultado=$connection->query($consulta);
			if($resultado->num_rows > 0){		
			//Se comprueba que tiene elementos
				while($datos= $resultado->fetch_assoc()) {
					$idjur_despacho	= $datos['idjur_despacho'];
					$jur_des_ciu 	= $datos['jur_des_ciu'];
					$mun_des_nom 	= $datos['jur_des_nom'];
			
					if($jur_des_ciu==$variable){
						$consulta_despachos.= '<option value="'.$idjur_despacho .'" selected>'.$mun_des_nom.'</option>';
					}else{
						$consulta_despachos.= '<option value="'.$idjur_despacho .'">'.$mun_des_nom.'</option>';
					}
				};
			};
		echo $consulta_despachos;
		}

	}else{
		echo "Error de recepción de datos";
	}
?>
<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>