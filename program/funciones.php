<?php 
@session_start();  
if($_SESSION["autentica"] != "OK")
{ 
  header("Location: ../program/login.php"); 
  exit(); 
} 
?>
<?php

function funct_inventario(){
	include "../program/conexion.php";
   	$consulta= "SELECT mar.nombre marca, mar.id_marca, dis.id_marca, dis.nombre nombre_cel, dis.descripcion, dis.cantidad, dis.costo FROM tbldispositivos dis, tblmarca mar WHERE dis.id_marca=mar.id_marca";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$marca 		= $datos['marca'];
			$nombre 	= $datos['nombre_cel'];
			$descripcion= $datos['descripcion'];
			$cantidad 	= $datos['cantidad'];
			$costo 		= $datos['costo'];		 	
		 	$resultado.= '<tr class="odd gradeX">
							<td>' . $marca . '</td>
							<td class="center">' . $nombre . '</td>
							<td class="center">' . $descripcion . '</td>
							<td class="text-center">' . $cantidad . '</td>	
							<td class="text-right">$ <span class="number">'.$costo.'</span></td>			
						</tr>';
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php

function funct_ventas(){
	include "../program/conexion.php";
   	$consulta= "SELECT mar.nombre marca, mar.id_marca, dis.id_marca, dis.nombre nombre_cel, ter.numero_documento cc_usuario, emp.numero_documento cc_vendedor, dis.cantidad, dis.costo, ven.fecha_venta fecha, ven.valor_venta valor, ven.cantidad cantidad
	FROM tbldispositivos dis, tblmarca mar, tblterceros ter, tblempleados emp, tblventas ven
	WHERE dis.id_marca=mar.id_marca
	AND ven.id_empleado=emp.id_empleado
	AND ven.id_dispositivo=dis.id_dispositivo
	AND ven.id_tercero=ter.id_tercero";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$nombre 	= $datos['nombre_cel'];
			$vendedor 	= $datos['cc_vendedor'];
			$usuario 	= $datos['cc_usuario'];
		 	$fecha 		= $datos['fecha'];	
			$valor 		= $datos['valor'];	
		 	$cantidad 	= $datos['cantidad'];
		 	$resultado.= '<tr class="odd gradeX">
							<td>' . $nombre . '</td>
							<td class="center">' . $vendedor . '</td>
							<td class="center">' . $usuario . '</td>
							<td class="text-center">' . $fecha . '</td>	
							<td class="text-right">$ <span class="number">'.$valor.'</span></td>
							<td class="text-right">'.$cantidad.'</td>		
						</tr>';
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function funct_usuarios(){
	include "../program/conexion.php";
   	$consulta= "SELECT * FROM tblterceros";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$tipo_tercero 		= $datos['tipo_tercero'];
			$numero_documento 	= $datos['numero_documento'];
			$tipo_documento	= $datos['tipo_documento'];
			$razon_social 	= $datos['razon_social'];
			$nombre 		= $datos['nombre'];	
			$apellido 		= $datos['apellido'];	
			$ciudad 		= $datos['ciudad'];	
			$fecha_creacion = $datos['fecha_creacion'];	
			$email 			= $datos['email'];
		 	$telefono 		= $datos['telefono'];	
		 	$direccion 		= $datos['direccion'];	
	
		 	$resultado.= '<tr class="odd gradeX">
							<td>' . $tipo_tercero . '</td>
							<td class="text-center">' . $numero_documento . '</td>
							<td class="text-center">' . $tipo_documento . '</td>
							<td class="text-left">' . $razon_social . '</td>	
							<td class="text-left">'.$nombre.'</td>		
							<td class="text-left">' . $apellido . '</td>
							<td class="center">' . $ciudad . '</td>
							<td class="center">' . $fecha_creacion . '</td>
							<td class="text-center">' . $email . '</td>	
							<td class="text-right">'.$telefono.'</td>	
							<td class="text-right">'.$direccion.'</td>
						</tr>';
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function funct_empleados(){
	include "../program/conexion.php";
   	$consulta= "SELECT * FROM tblempleados emp, tblusuarios usu WHERE emp.id_usuario=usu.id_usuario";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$username 		= $datos['username'];
			$fecha_crea 	= $datos['fecha_crea'];
			$numero_documento	= $datos['numero_documento'];
			$tipo_documento 	= $datos['tipo_documento'];
			$fecha_nacimiento 	= $datos['fecha_nacimiento'];	
			$nombres 		= $datos['nombres'];	
			$apellidos 		= $datos['apellidos'];	
			$salario 		= $datos['salario'];	
			$cargo 			= $datos['cargo'];
		 	$telefono 		= $datos['telefono'];	
		 	$ciudad 		= $datos['ciudad'];
		 	$direccion 		= $datos['direccion'];
	
		 	$resultado.= '<tr class="odd gradeX">
							<td>' . $username . '</td>
							<td class="text-center">' . $fecha_crea . '</td>
							<td class="text-center">' . $numero_documento . '</td>
							<td class="text-left">' . $tipo_documento . '</td>	
							<td class="text-left">'.$fecha_nacimiento.'</td>		
							<td class="text-left">' . $nombres . '</td>
							<td class="center">' . $apellidos . '</td>
							<td class="center">' . $salario . '</td>
							<td class="center">' . $cargo . '</td>
							<td class="text-center">' . $telefono . '</td>	
							<td class="text-right">'.$ciudad.'</td>	
							<td class="text-right">'.$direccion.'</td>
						</tr>';
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function count_inventario(){
	include "../program/conexion.php";
   	$consulta= "SELECT COUNT(nombre) FROM tbldispositivos";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$resultado = $datos['COUNT(nombre)'];
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function count_ventas(){
	include "../program/conexion.php";
   	$consulta= "SELECT COUNT(id_venta) FROM tblventas";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$resultado = $datos['COUNT(id_venta)'];
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function count_usuarios(){
	include "../program/conexion.php";
   	$consulta= "SELECT COUNT(numero_documento) FROM tblterceros";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$resultado = $datos['COUNT(numero_documento)'];
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
<?php
function count_empleados(){
	include "../program/conexion.php";
   	$consulta= "SELECT COUNT(numero_documento) FROM tblempleados";
	$result=$connection->query("SET NAMES 'utf8'");
	$result=$connection->query($consulta);
	$resultado="";
    if($result->num_rows > 0){
	 while($datos= $result->fetch_assoc()) {
			$resultado = $datos['COUNT(numero_documento)'];
			};
		}else{
			$resultado= "NO SE ENCONTRARO RESULTADOS EN LA BUSQUEDA";
		}
	echo $resultado;
	}
?>
