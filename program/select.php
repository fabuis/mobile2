<?php
include "conexion.php";
include "variables.php";
header("Content-Type: text/html;charset=utf-8");
?>

  <?php
   $con_tasas= "SELECT * FROM tasas ORDER BY idtasas DESC LIMIT 1";
	$result_tasas=$connection->query("SET NAMES 'utf8'");
	$result_tasas=$connection->query($con_tasas);
	$tasas="";
	$dtf="";
	$trm="";
	$usura="";
	$cap90="";
	$cap180="";
	$cap360="";
	$diatasas="";

    if($result_tasas->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_tasas= $result_tasas->fetch_assoc()) {
			
			$dtf = $resultados_tasas['dtftasas'];
			$trm = $resultados_tasas['trmtasas'];
			$usura = $resultados_tasas['usutasas'];
			$cap90 = $resultados_tasas['cap90'];
			$cap180 = $resultados_tasas['cap180'];
			$cap360 = $resultados_tasas['cap360'];
			$diatasas = $resultados_tasas['diatasas'];
			//Salida del mensaje	
			};

		};
 
?> 
  
<?php		
	$con_directorio= "SELECT Nombre, Apellido, Cargo, Dependencia, Correo, Extension, Celular, Sede FROM directorio";
	//Se guarda la consulta en la varial $con_directorio
	$result_directorio=$connection->query("SET NAMES 'utf8'");
	//Corrrige ñ y tildes
	$result_directorio=$connection->query($con_directorio);
	//Se verifica la conexion y se guarda en la variable $result_directorio
	$directorio = "";
	//Se inicializa la variable $directorio en vacio para evitar duplicacion
    if($result_directorio->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_directorio = $result_directorio->fetch_assoc()) {
			
			$nombre = $resultados_directorio['Nombre'];
			$apellido = $resultados_directorio['Apellido'];
			$cargo = $resultados_directorio['Cargo'];
			$dependencia = $resultados_directorio['Dependencia'];
			$correo = $resultados_directorio['Correo'];
			$extension = $resultados_directorio['Extension'];
		 	$celular = $resultados_directorio['Celular'];
			$sede = $resultados_directorio['Sede'];

			//Salida del mensaje
		
			$directorio.= '<tr class="odd gradeX">
							<td>' . $nombre . '</td>
							<td>' . $apellido . '</td>
							<td>' . $cargo . '</td>
							<td class="center">' . $correo . '</td>
							<td class="center">' . $extension . '</td>
							<td class="center">' . $celular . '</td>
							<td class="center">' . $sede . '</td>
			</tr>
			';
			
		};//Fin while $resultados
		}; //fin de las filas

   ?>
       
   <!-- Este modulo imprime las noticias-->    
   <?php
   $con_noticias= "SELECT titnot, prinot, secnot, imgnot, colnot, fulnot, colores.nomcol2 FROM noticias, colores WHERE colores.idcol=noticias.colnot AND estnot='1' ORDER BY fecnot DESC";
	$result_noticias=$connection->query("SET NAMES 'utf8'");
	$result_noticias=$connection->query($con_noticias);
	$noticias = "";
    if($result_noticias->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_noticias= $result_noticias->fetch_assoc()) {
			
			$titulo = $resultados_noticias['titnot'];
			$principal = $resultados_noticias['prinot'];
			$secundario = $resultados_noticias['secnot'];
			$imagen = $resultados_noticias['imgnot'];
			$color = $resultados_noticias['nomcol2'];
			$boton = $resultados_noticias['botnot'];
			$full=$resultados_noticias['fulnot'];
			//Salida del mensaje
			if ($full=='1'){	
			$noticias.= '
				<div class="step" data-color='.$color.'>
					<div id="imagen2">
            			<img src="Imagenes/noticias/'.$imagen.'"/>
					</div>
        		</div>
			';
			}
			else{
			$noticias.= '
				<div class="step" data-color='.$color.'>
          			<div class="jms-content">
              			<h3>'.$titulo.'</h3>
              			<p>'.$principal.'</p>
              			<h5><cite>'.$secundario.'</cite></h5>
            		</div>
            		<img src="Imagenes/noticias/'.$imagen.'"/></div>';
			};
			
		};
		};

   ?>
   <!-- Este modulo imprime la lineas de credito-->
   
   <?php
   $con_lineas= "SELECT * FROM sim_lineascredito order by nombre";
	$result_lineas=$connection->query("SET NAMES 'utf8'");
	$result_lineas=$connection->query($con_lineas);
	$montomax="";
	$lineas="";
    if($result_lineas->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_lineas= $result_lineas->fetch_assoc()) {
			
			$idlinea = $resultados_lineas['idlinea'];
			$nombre = $resultados_lineas['nombre'];
			$montomax = $resultados_lineas['montomax'];
			//Salida del mensaje	
			$lineas.= '
			 	<option value='.$idlinea.'>'.$nombre.'</option>';
			};

		};

   ?>
   

<?php
    $con_cdat= "SELECT * FROM sim_plazoscdat order by idplazo";
	$result_cdat=$connection->query("SET NAMES 'utf8'");
	$result_cdat=$connection->query($con_cdat);
	$tabla_cdat="";

    if($result_cdat->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_cdat= $result_cdat->fetch_assoc()) {
			
			$idplazocdat = $resultados_cdat['idplazo'];
			$plazocdat = $resultados_cdat['plazo'];
			$puntoscdat = $resultados_cdat['tasaea1'];
			$puntos2cdat = $resultados_cdat['tasaea2'];
			
			$tasaea=$dtf+$puntoscdat;
			
			$tasavencimiento = round((pow((1 + $tasaea), (1 / (360 / $plazocdat))) - 1) * (360 / $plazocdat) ,4);
			$tasavencimiento = round((pow((1 + $tasaea/100), (1 / (360 / $plazocdat))) - 1)*  (360 / $plazocdat),4);
			$tasaNominal = $tasavencimiento*100;		
			
			//Salida del mensaje	
			$tabla_cdat.='<tr>
                                   <td>'.$plazocdat.'</td>
                                   <td>'.$puntoscdat.'</td>
                                   <td>'.$dtf.'%</td>
                                   <td>'.$tasaea.'%</td>
                                   <td>'.$tasaNominal.'%</td>
                                </tr>';
			};

		};

   ?>
   
  
   <?php
  /* ESTE MODULO ES DE LAS FOTOS */
    $con_ventanas_fotos= "SELECT idven, titven, conven, colven, fotven, refven, estven, colores.hexcol, colorestexto.hexcoltex FROM gal_ventanas, colores, colorestexto where colores.idcol=gal_ventanas.colven AND colorestexto.idcoltex=gal_ventanas.coltex AND estven='1' ORDER BY idven DESC";
	$result_ventanas_fotos=$connection->query("SET NAMES 'utf8'");
	$result_ventanas_fotos=$connection->query($con_ventanas_fotos);
	$ventana_fotos="";

    if($result_ventanas_fotos->num_rows > 0){		
	//Se comprueba que tiene elementos
	 while($resultados_ventanas_fotos= $result_ventanas_fotos->fetch_assoc()) {
			
			$idven = $resultados_ventanas_fotos['idven'];
			$tituloven = $resultados_ventanas_fotos['titven'];
			$contenidoven = $resultados_ventanas_fotos['conven'];
			$colorven = $resultados_ventanas_fotos['hexcol'];
			$colortex = $resultados_ventanas_fotos['hexcoltex'];
			$fotoven = $resultados_ventanas_fotos['fotven'];
			$referenciaven = $resultados_ventanas_fotos['refven'];
			$estadoven = $resultados_ventanas_fotos['estven'];
			
			//Salida del mensaje	
			$ventana_fotos.='<div class="col-lg-4">
          						<div class="panel" style="background-color:'.$colorven.'">
              						<div class="panel-heading">
                 						<div class="text-right" style="color:'.$colortex.'">
                          					<div><h4>'.$tituloven.'</h4></div>
                          					<div style="font-size:.9em; height: 40px">'.$contenidoven.'</div>
                      					</div>
                       					<div>
                        					<img src="Imagenes/Fotos/Ventanas/'.$fotoven.'" height="200px" width="100%" alt="">
                        				</div>
                    				</div>
									<a href="#" value="'.$idven.'" class="link_fotos">
										<div class="panel-footer">
											<span class="pull-left">Ver Fotos</span>
											<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
											<div class="clearfix"></div>
										</div>
									</a>
          						</div>
      						</div>';
			};

		};
  
   ?> 
   <?php

$consulta_calendario =("SELECT idcal, titcal, inical, fincal, concal, ubical, asical, colcal_fondo, colcal_text, edical, estcal, colores.hexcol, colorestexto.hexcoltex FROM calendario, colores, colorestexto WHERE colores.idcol=calendario.colcal_fondo AND colorestexto.idcoltex=calendario.colcal_text AND estcal=1");
	 $result_calendario=$connection->query("SET NAMES 'utf8'");
	 $result_calendario=$connection->query($consulta_calendario);
	 $calendario = "";
	 if($result_calendario->num_rows > 0){
		  while($resultados_calendario = $result_calendario->fetch_assoc()) { 
			  $idcal=$resultados_calendario['idcal'];
			  $titulocal=$resultados_calendario['titcal'];
			  $inicialcal=$resultados_calendario['inical'];
			  $finalcal=$resultados_calendario['fincal'];
			  $descripcioncal=$resultados_calendario['concal'];
			  $ubicacioncal=$resultados_calendario['ubical'];
			  $asistentescal=$resultados_calendario['asical'];
			  $editablecal=$resultados_calendario['edical'];
			  $colorcal=$resultados_calendario['hexcol'];
			  $colortextocal=$resultados_calendario['hexcoltex'];
			  $alldaycal=$resultados_calendario['allday'];
			  $estadocal=$resultados_calendario['estcal'];

			  $inicialcal_dia=date("Y-m-d",strtotime($inicialcal)); 
			  $inicialcal_hora=date("H:i:s",strtotime($inicialcal)); 

			  $asistentescal=str_replace ( ",", "<br>", $asistentescal);

			  //$inicialcal=substr($inicialcal, 12, 16);

			$calendario.="{
						id:'".$idcal."',
						title:'".$titulocal."',
						start:'".$inicialcal."',
						end: '".$finalcal."',
						description: '".$descripcioncal."',
						ubication: '".$ubicacioncal."',
						asistentes: '".$asistentescal."',
						editable:".$editablecal.",
						color: '".$colorcal."',   
						textColor: '".$colortextocal."', 
						allDay : '".$alldaycal."'
					},";
			  }      
		};
	?>
	<?php
		$consulta_dias_festivos =("SELECT * FROM calendario_festivos");
	 	$result_dias_festivos=$connection->query("SET NAMES 'utf8'");
	 	$result_dias_festivos=$connection->query($consulta_dias_festivos);
	 	$dias_festivos = "";
	 	if($result_dias_festivos->num_rows > 0){
		  while($resultados_dias_festivos = $result_dias_festivos->fetch_assoc()) { 
			  $diacalfes=$resultados_dias_festivos['dia_cal_fes'];
				$dias_festivos.="if(date.isSame('".$diacalfes."')){
									cell.css('background-color', 'GAINSBORO');
								}";
		  }      
	};
	?>
	<?php
	$consulta_bancos =("SELECT * FROM bancos");
	  $result_bancos=$connection->query("SET NAMES 'utf8'");
      $result_bancos=$connection->query($consulta_bancos);			
      $con_bancos = "";
      if($result_bancos->num_rows > 0){
          
          while($resultados = $result_bancos->fetch_assoc()) { 
              $idban=$resultados['idban'];
			  $bancoban=$resultados['bancoban'];
			  $claseban=$resultados['claseban'];
			  $cuentaban=$resultados['cuentaban'];
			  $convenioban=$resultados['convenioban'];
			  $recaudoban=$resultados['recaudoban'];
		
			  $con_bancos.='
						  <tr>
							<td>'.$bancoban.'</td>
							<td>'.$claseban.'</td>
							<td>'.$cuentaban.'</td>
							<td>'.$convenioban.'</td>
							<td>'.$recaudoban.'</td>
						</tr>
			  
			  ';
			  
			  
              }      
          }
?>


<?php
	$salario_minimo="";
	$consulta_smmlv =("SELECT * FROM sim_smmlv WHERE anio='".$ano_actual."'");

	$result_smmlv=$connection->query($consulta_smmlv);
	if($result_smmlv->num_rows > 0){
		while($resultados_salario = $result_smmlv->fetch_assoc()) { 
			$salario_minimo=$resultados_salario['smmlv'];
		}  
	}

	$consulta_patrimonio =("SELECT * FROM sim_patrimonio ORDER BY idpatrimonio DESC LIMIT 1");
	  $result_patrimonio=$connection->query($consulta_patrimonio);
	  $con_patrimonio = "";
	  if($result_patrimonio->num_rows > 0){

		  while($resultados_patrimonio = $result_patrimonio->fetch_assoc()) { 
			  $con_patrimonio=$resultados_patrimonio['valorpatrimonio'];
			  }      
		  }
	$consulta_empresarial =("SELECT * FROM sim_empresarial ORDER BY fecemp DESC");
	  $result_empresarial=$connection->query($consulta_empresarial);
		$aportes_fecopi = "";
		$aportes_asocoldro = "";
		$aportes_fundecopi = "";
	  if($result_empresarial->num_rows > 0){

		  while($resultados_empresarial = $result_empresarial->fetch_assoc()) { 
			  $con_empresarial=$resultados_empresarial['desemp'];
			  $valor_empresarial=$resultados_empresarial['apoemp'];

			  if($con_empresarial==="Fecopi"){
				  $aportes_fecopi=$valor_empresarial;
			  }elseif($con_empresarial==="Asocoldro"){
				  $aportes_asocoldro=$valor_empresarial;
			  }
			  elseif($con_empresarial==="Fundecopi"){
				  $aportes_fundecopi=$valor_empresarial;
			  }

			}      
		}
?>

<?php

	$consulta_historico_smmlv =("SELECT * FROM sim_smmlv ORDER BY anio DESC");
    $result_historico_smmlv=$connection->query($consulta_historico_smmlv);
    $historio_salario_minimo = "";
    if($result_historico_smmlv->num_rows > 0){
          
          while($resultados_historicos = $result_historico_smmlv->fetch_assoc()) { 
			  
              $salario_minimo_historico=$resultados_historicos['smmlv'];
			  $variacion_historico=$resultados_historicos['varsmmlv'];
			  $anio_historico=$resultados_historicos['anio'];
			  $auxilio_historico=$resultados_historicos['transsmmlv'];
			  
			  $variacion_historico=number_format($variacion_historico, 2);
			  $salario_minimo_historico=number_format($salario_minimo_historico);
			  $auxilio_historico=number_format($auxilio_historico);
			  $historio_salario_minimo.='
					  <tr>

						<td>'.$variacion_historico.' %</td>

						<td>'.$anio_historico.'</td>

						<td>$ '.$salario_minimo_historico.'</td>

						<td>$ '.$auxilio_historico.'</td>

					</tr>
			  
			  ';
			  
			  
              }      
          }
?>

<?php
	function listar_archivos($carpeta){
	if(is_dir($carpeta)){
		if($dir = opendir($carpeta)){
			while(($archivo = readdir($dir)) !== false){
					if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
						if(is_dir($carpeta.'/'.$archivo)){
						}else{
						echo '<button type="button" class="list-group-item"><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a></button>';
						}
					}
				
			}
			closedir($dir);
		}
	}
	
}
?>

<?php
	function listar_archivos2($carpeta){
	$array_carpetas=array();
	$array_archivos=array();
	if(is_dir($carpeta)){
		if($dir = opendir($carpeta)){
			while(($archivo = readdir($dir)) !== false){
					if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
						if(is_dir($carpeta.'/'.$archivo)){
							array_push($array_carpetas,$archivo);
							//echo '<button type="button" class="list-group-item"><a href="#" onClick="navegador(\''.$carpeta.'/'.$archivo.'\');"> <span class="glyphicon glyphicon-plus"></span> '.$archivo.'</a></button>';

						}else{
							array_push($array_archivos,$archivo);
						//echo '<button type="button" class="list-group-item"><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a></button>';
						}
					}
				
			}
			$comprobar_vacio=@scandir($carpeta);
			if(count($comprobar_vacio)>2){
				//echo count($comprobar_vacio);
			}else{
				echo '<div class="alert alert-warning" role="alert">Este directorio está Vacío</div>';
			}
			closedir($dir);
		
		}
	}
		
		sort($array_carpetas);
		sort($array_archivos);
		
		for($i=0; $i<count($array_carpetas);$i++){
			echo '<button type="button" class="list-group-item"><a href="#" onClick="navegador(\''.$carpeta.'/'.$array_carpetas[$i].'\');"> <span class="glyphicon glyphicon-plus"></span> '.$array_carpetas[$i].'</a></button>';
		}
		for($i=0; $i<count($array_archivos);$i++){
			echo '<button type="button" class="list-group-item"><a target="_blank" href="'.$carpeta.'/'.$array_archivos[$i].'">'.$array_archivos[$i].'</a></button>';
		}
	
}
?>
