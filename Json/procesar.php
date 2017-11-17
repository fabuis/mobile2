<?php
	include('../program/conexion.php');
	
	if (isset($_REQUEST['meses'])) {

		if (isset($_REQUEST['ano'])) {
			$año = $_REQUEST['ano'];
		}else{
			$año = 2017;
		}

				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=1 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$enero = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=2 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$febrero = $result->fetch_assoc(); 
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=3 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$marzo = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=4 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$abril = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=5 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$mayo = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=6 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$junio = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=7 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$julio = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=8 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$agosto = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=9 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$septiembre = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=10 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$octubre = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=11 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$noviembre = $result->fetch_assoc();
				$result = $connection->query("SELECT SUM(valor_venta) AS r FROM tblventas WHERE MONTH(fecha_venta)=12 AND YEAR(fecha_venta)='$año'") or trigger_error($connection->error);
				$diciembre = $result->fetch_assoc();
				
				
				$data = array(0 => round($enero['r'],1),
							  1 => round($febrero['r'],1),
							  2 => round($marzo['r'],1),
							  3 => round($abril['r'],1),
							  4 => round($mayo['r'],1),
							  5 => round($junio['r'],1),
							  6 => round($julio['r'],1),
							  7 => round($agosto['r'],1),
							  8 => round($septiembre['r'],1),
							  9 => round($octubre['r'],1),
							  10 => round($noviembre['r'],1),
							  11 => round($diciembre['r'],1)
							  );			 
				echo json_encode($data);

				
	}		




?>
<?php 

		if (isset($_REQUEST['consulta_a'])) {

				$result = $connection->query("SELECT DISTINCT(YEAR(tblventas.fecha_venta)) as ano FROM tblventas") or trigger_error($connection->error);

					while ($row = $result->fetch_assoc()) {

						echo '<option value="'.$row["ano"].'">'.$row["ano"].'</option>';

					}
		
		}


 ?>

 <?php 

		if (isset($_REQUEST['consulta_b'])) {

				$result = $connection->query("SELECT DISTINCT(MONTH(tblventas.fecha_venta)) as mes FROM tblventas") or trigger_error($connection->error);

					while ($row = $result->fetch_assoc()) {

						echo '<option value="'.$row["mes"].'">'.$row["mes"].'</option>';

					}
		
		}


 ?>

 <?php

 //consultar ventas por meses
if (isset($_REQUEST['mes'])){

		if (isset($_REQUEST['buscarmes'])) {
			$buscarmes = $_REQUEST['buscarmes'];
		}else{
			$buscarmes = 1;
		}

				$result = $connection->query("SELECT SUM(valor_venta) as total,DAY(fecha_venta) as dia FROM tblventas WHERE YEAR(fecha_venta) = 2017 AND MONTH(fecha_venta) = '$buscarmes' GROUP BY DAY(fecha_venta)") or trigger_error($connection->error);

			while ($data = $result->fetch_assoc()) {
					$arreglo01[] = array_map('utf8_encode', $data);

			}

	echo json_encode($arreglo01);

}

//consultar ventas por meses


 //consultar ventas por ciudades
if (isset($_REQUEST['ciudades'])){


				$result = $connection->query("select tv.id_dispositivo AS id_dispositivo,count(tv.id_dispositivo) AS totalventas,td.nombre AS nombre,tt.ciudad AS ciudad from ((tblventas tv join tbldispositivos td on((tv.id_dispositivo = td.id_dispositivo))) join tblterceros tt on((tv.id_tercero = tt.id_tercero))) group by tt.ciudad") or trigger_error($connection->error);

			while ($data = $result->fetch_assoc()) {
					$arreglo01[] = array_map('utf8_encode', $data);

			}

	echo json_encode($arreglo01);

}

//consultar ventas por ciudades


 //consultar TOP 10
if (isset($_REQUEST['pais'])){


				$result = $connection->query("select sum(tv.id_dispositivo) AS total,td.nombre AS nombre from (tblventas tv join tbldispositivos td on((tv.id_dispositivo = td.id_dispositivo))) group by tv.id_dispositivo order by sum(tv.id_dispositivo) desc limit 10") or trigger_error($connection->error);

			while ($data = $result->fetch_assoc()) {
					$arreglo01[] = array_map('utf8_encode', $data);

			}

	echo json_encode($arreglo01);

}

//consultar TOP 10
 ?>
