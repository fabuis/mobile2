<?php
session_start();
if(isset($_SESSION["username"])){ 

header("Content-Type: text/html;charset=utf-8");
?>
<?php
function funct_despachos($value){
	include "../../pages/data/conexion.php";
	$despachos="";
   	$con_despachos= "SELECT idjur_despacho, jur_des_ciu, jur_des_nom, jur_ciu_nom FROM ". $value .", jur_ciudades WHERE jur_des_ciu=jur_ciu_cod";
	$result_despachos=$connection->query("SET NAMES 'utf8'");
	$result_despachos=$connection->query($con_despachos);
    if($result_despachos->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_despachos= $result_despachos->fetch_assoc()) {
			
			$id_despacho = $resultados_despachos['idjur_despacho'];
			$idciudad = $resultados_despachos['jur_des_ciu'];
			$ciudad_nombre = $resultados_despachos['jur_ciu_nom'];
			$despacho = $resultados_despachos['jur_des_nom'];

			//Salida del mensaje	
		 	
		 	$despachos.= '<tr class="odd gradeX">
							<td>' . $ciudad_nombre . '</td>
							<td class="center">' . $despacho . '</td>
							<td class="text-center">
								<a href="../pages/despachos/edit_despacho.php?id_despacho='.$id_despacho.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
								<a href="../pages/despachos/drop_despacho.php?id_despacho='.$id_despacho.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
							</td>
						</tr>';
			};
		
		};
	return ($despachos);
	}
?>
<?php
	function funct_codeudores(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_codeudor, jur_usuarios WHERE jur_cod_aso=jur_usu_nit";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($datos= $resultado->fetch_assoc()) {
			
			$id_cod 	= $datos['idjur_codeudor'];
			$externo 	= $datos['jur_cod_ext'];
			$nombre 	= $datos['jur_cod_nom'];
		 	$apellido 	= $datos['jur_cod_ape'];
		 	$cedula 	= $datos['jur_cod_ced'];
		 	$celular 	= $datos['jur_cod_cel'];
		 	$asociado 	= $datos['jur_cod_aso'];
		 	$asociado_nombre 	= $datos['jur_usu_nom'];
		 	$asociado_apellido 	= $datos['jur_usu_ape'];

			//Salida del mensaje
		 	if($externo==0){
				$externo="NO";
			}else{
				$externo="SI";
			}
		 	
		 $codeudores.= '<tr class="odd gradeX">
		 					<td>' . $cedula . '</td>
							<td>' . $externo . '</td>
							<td>' . $nombre .' '.$apellido.'</td>
							<td>' . $celular . '</td>
							<td><a href="../pages/procesos/view_proceso.php?cedula='.$asociado.'" class="cargar"> '. $asociado_nombre .' '.$asociado_apellido.'</a></td>
							<td class="text-center">
								<a href="../pages/codeudores/edit_codeudor.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
								<a href="../pages/codeudores/drop_codeudor.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
							</td>
					</tr>';
			};
		};
		echo $codeudores;
	}
?>
<?php
	function funct_abogados(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_abogados";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$id_cod 	= $datos['idjur_abogados'];
		$cedula 	= $datos['jur_abo_ced'];
		$tarjeta 	= $datos['jur_abo_tar'];
		$nombre 	= $datos['jur_abo_nom'];
		$apellido 	= $datos['jur_abo_ape'];
		$direccion 	= $datos['jur_abo_dir'];
		$fijo 		= $datos['jur_abo_fij'];
		$celular 	= $datos['jur_abo_cel'];
		$correo 	= $datos['jur_abo_cor'];
		$fecha 		= $datos['jur_abo_vin'];
	//Salida del mensaje	
		$abogados.= '<tr class="odd gradeX">
						<td>' . $id_cod . '</td>
						<td>' . $cedula . '</td>
						<td>' . $tarjeta . '</td>
						<td>' . $nombre . '</td>
						<td>' . $apellido . '</td>
						<td>' . $direccion . '</td>
						<td>' . $celular . '</td>
						<td>' . $correo . '</td>
						<td>' . $fecha . '</td>
						<td class="center acciones">
								<a href="../pages/abogados/edit_abogados.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
								<a href="../pages/abogados/drop_abogados.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
							</td>
					</tr>';
			};
		};
		echo $abogados;
	}
?>
<?php
	function funct_bien_deudor(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_bienes_deudor";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$id_bien 	= $datos['idjur_bienes_deudor'];
		$nit_bien	= $datos['jur_bie_usu_nit'];
		$tipo_bien 	= $datos['jur_bie_usu_tip'];
		$descripcion_bien	= $datos['jur_bie_usu_des'];
		$fecha_bien = $datos['jur_bie_usu_fec'];
	//Salida del mensaje	
		$bien_deudor.= '<tr class="odd gradeX">
						<td>' . $nit_bien . '</td>
						<td>' . $tipo_bien . '</td>
						<td>' . $descripcion_bien . '</td>
						<td class="center acciones">
								<a href="../pages/bienes_deudor/edit_bien.php?id_bien='.$id_bien.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
								<a href="../pages/bienes_deudor/drop_bien.php?id_bien='.$id_bien.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
							</td>
					</tr>';
			};
		};
		echo $bien_deudor;
	}
?>
<?php
	function funct_bien_codeudor(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_bienes_codeudor";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$id_bien 	= $datos['idjur_bienes_codeudor'];
		$nit_bien	= $datos['jur_bie_cod_nit'];
		$tipo_bien 	= $datos['jur_bie_cod_tip'];
		$descripcion_bien	= $datos['jur_bie_cod_des'];
		$fecha_bien = $datos['jur_bie_cod_fec'];
	//Salida del mensaje	
		$bien_codeudor.= '<tr class="odd gradeX">
						<td>' . $nit_bien . '</td>
						<td>' . $tipo_bien . '</td>
						<td>' . $descripcion_bien . '</td>
						<td class="center acciones">
								<a href="../pages/bienes_codeudor/edit_bien.php?id_bien='.$id_bien.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
								<a href="../pages/bienes_codeudor/drop_bien.php?id_bien='.$id_bien.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
							</td>
					</tr>';
			};
		};
		echo $bien_codeudor;
	}
?>
<?php
	function funct_usuarios(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT idjur_usuarios, jur_usu_nit, jur_usu_nom, jur_usu_ape, jur_usu_dir, jur_usu_cel, jur_usu_fij,  jur_usu_exp, jur_usu_abo, jur_abo_nom, jur_abo_ape, jur_des_nom, idjur_despacho FROM jur_usuarios usu, jur_abogados abo, jur_despachos des WHERE usu.jur_usu_abo=abo.jur_abo_ced AND usu.jur_usu_juz=des.idjur_despacho";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$id_cod 	= $datos['idjur_usuarios'];
		$cedula 	= $datos['jur_usu_nit'];
		$nombre 	= $datos['jur_usu_nom'];
		$apellido 	= $datos['jur_usu_ape'];
		$celular 	= $datos['jur_usu_cel'];
		$fijo 	= $datos['jur_usu_fij'];
		$direccion 	= $datos['jur_usu_dir'];
		$expediente	= $datos['jur_usu_exp'];
		$nomabogado	= $datos['jur_abo_nom'];
		$apeabogado = $datos['jur_abo_ape'];
		$juzgado 	= $datos['idjur_despacho'];

	//Salida del mensaje	
		$usuarios.= '<tr>
						<td class="text-center">
							<a href="../pages/procesos/view_proceso.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-success btn-circle-mini"><i class="fa fa-eye"></i></button></a>  
						</td>
						<td class="center">' . $cedula . '</td>
						<td class="text-left">' . $nombre .' '. $apellido .'</td>
						<td class="text-left">'. $direccion .'</td>
						<td class="text-center">'. $celular .'</td>
						<td class="text-center">'. $fijo .'</td>
						<td class="text-center">'. $expediente .'</td>
						<td class="text-right">' . $nomabogado .' '.$apeabogado.'</td>
						<td class="text-center">
							<a href="../pages/procesos/edit_proceso.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-info btn-circle-mini"><i class="fa fa-edit"></i></button></a>  
							<a href="../pages/procesos/drop_proceso.php?cedula='.$cedula.'" class="cargar"><button type="button" class="btn btn-danger btn-circle-mini"><i class="fa fa-remove"></i></button></a>
						</td>
					</tr>';
			};
		};
		echo $usuarios;
	}
?>


<?php
	function funct_consultar_lineas(){
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
		echo $consulta_lineas;
	}
?>
<?php
	function funct_consultar_abogado(){
	include "../../../pages/data/conexion.php";
    $consulta= "SELECT * FROM jur_abogados";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$dato_id 		= $datos['jur_abo_ced'];
		$dato_cedula	= $datos['jur_abo_ced'];
		$dato_nombre 	= $datos['jur_abo_nom'];
		$dato_apellido 	= $datos['jur_abo_ape'];
	//Salida del mensaje	
		//$consulta_despachos.= '<option>'.$dato_juzgado.' '.$dato_id.' - '.$dato_despacho . '</option>';
		$consulta_abogados.= '<option value="'.$dato_cedula.'">'.$dato_nombre.' '.$dato_apellido.'</option>';
			};
		};
		echo $consulta_abogados;
	}
?>
<?php
	function funct_consultar_usuarios($variable){
	include "../../../pages/data/conexion.php";
	if($variable==""){
		$consulta= "SELECT jur_usu_nom, jur_usu_ape, jur_usu_nit FROM jur_usuarios";
	}else{
		$consulta= "SELECT jur_usu_nom, jur_usu_ape, jur_usu_nit FROM jur_usuarios WHERE jur_usu_nit=".$variable."";
	}
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
	
		$dato_cedula	= $datos['jur_usu_nit'];
		$dato_nombre 	= $datos['jur_usu_nom'];
		$dato_apellido 	= $datos['jur_usu_ape'];
	//Salida del mensaje	
		$consulta_usuarios.= '<option value="'.$dato_cedula.'" selected>'.$dato_nombre.' '.$dato_apellido.'</option>';
	};
	};
		echo $consulta_usuarios;
	}
?>
<?php
	function funct_consultar_codeudores($variable){
	include "../../../pages/data/conexion.php";
	if($variable==""){
		$consulta= "SELECT * FROM jur_codeudor"; 
	}else{
		$consulta= "SELECT * FROM jur_codeudor WHERE jur_cod_ced=".$variable."";
	}
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
	
		$dato_cedula	= $datos['jur_cod_ced'];
		$dato_nombre 	= $datos['jur_cod_nom'];
		$dato_apellido 	= $datos['jur_cod_ape'];
	//Salida del mensaje	
		$consulta_codeudores.= '<option value="'.$dato_cedula.'">'.$dato_nombre.' '.$dato_apellido.'</option>';

	};
	};
	echo $consulta_codeudores;
}
?>
<?php
function funct_consultar_ciudades($variable){
	include "../../../pages/data/conexion.php";
	$consulta= "SELECT * FROM municipios"; 
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
}
?>
<?php 
	function funct_contador_procesos(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT COUNT(*) FROM jur_usuarios";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
		//echo $resultado."HOLAAA";
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$contador_procesos	= $datos['COUNT(*)'];
	//Salida del mensaje	
	};
	};
	echo $contador_procesos;
}
?>
<?php 
	function funct_contador_codeudores(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT COUNT(*) FROM jur_codeudor";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
		//echo $resultado."HOLAAA";
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$contador_codeudores	= $datos['COUNT(*)'];
	//Salida del mensaje	
	};
	};
	echo $contador_codeudores;
}
?>
<?php 
	function funct_contador_bienes(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT ((SELECT COUNT(*) FROM jur_bienes_deudor)+(SELECT COUNT(*) FROM jur_bienes_codeudor)) AS total";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
		//echo $resultado."HOLAAA";
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$contador_bienes	= $datos['total'];
	//Salida del mensaje	
	};
	};
	echo $contador_bienes;
}
?>
<?php 
	function funct_contador_abogados(){
	include "../../pages/data/conexion.php";
    $consulta= "SELECT COUNT(*) FROM jur_abogados";
	$resultado=$connection->query("SET NAMES 'utf8'");
	$resultado=$connection->query($consulta);
		//echo $resultado."HOLAAA";
    if($resultado->num_rows > 0){		
	//Se comprueba que tiene elementos
	while($datos= $resultado->fetch_assoc()) {
		$contador_abogados	= $datos['COUNT(*)'];
	//Salida del mensaje	
	};
	};
	echo $contador_abogados;
}
?>
<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>