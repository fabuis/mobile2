<?php
session_start();
if(isset($_SESSION["username"])){ 

include_once "../program/funciones.php";
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Módulo Jurídico - Procesos </title>
    
    <!-- ICONO -->
	<link rel="shortcut icon" type="image/png" href="../images/Modulo jurídico Icono.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Tablas -->
    <link href="../css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	
      <!-- ESTILO PERSONAL -->
    <link href="../css/estilo.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="padding: 5px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="principal.php" style="padding-left: 50px;"><img src="../images/Módulo jurídico_horizontal.png" width="130px" alt=""></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li>
					<?php
						echo "Bienvenido(a) <span>".$_SESSION["nombre"]." ".$_SESSION["apellido"]."</span>";	
					?>
               </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../program/cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="principal.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="procesos.php"><i class="fa fa-refresh fa-spin fa-fw"></i> Procesos</a>
                        </li>
                        <li>
                            <a href="despachos.php"><i class="fa fa-table fa-fw"></i> Despachos</a>
                        </li>
                        <li>
                            <a href="codeudores.php"><i class="fa fa-group fa-fw"></i> Codeudores</a>
                        </li>
                        <li>
                            <a href="abogados.php"><i class="fa fa-university fa-fw"></i> Abogados</a>
                        </li>
                        <li>
                            <a href="bienes.php"><i class="fa fa-car fa-fw"></i> Bienes</a>
                        </li>
                        <li>
                            <a href="parametrizacion.php"><i class="fa fa-gears fa-fw"></i> Parametrización</a>
                        </li>
                        <li>
                            <a href="liquidacion.php"><i class="fa fa-edit fa-fw"></i> Liquidación Procesos</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Procesos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            	<div class="col-lg-12">
                  	<a href="procesos/add_proceso.php" class="cargar"><button type="button" class="btn btn-outline btn-primary">Agregar Proceso</button></a>
                         <hr>
                          <!--      <button type="button" class="btn btn-outline btn-success">Success</button>
                                <button type="button" class="btn btn-outline btn-info">Info</button>
                                <button type="button" class="btn btn-outline btn-warning">Warning</button>
                                <button type="button" class="btn btn-outline btn-danger">Danger</button> -->
            	<div class="panel-body">
              		<div class="dataTable_wrapper">
                    	<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:13px">
                        	<thead>
                            <tr>
                               	<th>Ver</th>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Celular</th>
                                <th>Fijo</th>
                                <th>Expediente</th>
                                <th>Abogado</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                      	<tbody>
							   	<?php funct_usuarios(); ?>
                       	</tbody>
                       	</table>
                   	</div>
            	</div>
            	</div>
			</div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery-3.1.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>
	
   	
    <!-- Morris Charts JavaScript -->
    <script src="../js/raphael-min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    
    <!-- Validado de campos-->
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/jquery.prettynumber.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
	
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
 <script>
    $(document).ready(function() {
		$(".cargar").click(function() {
			var url=$(this).attr("href");
			$("#page-wrapper").load(url);
			return false;			
		});
   	
	});
</script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
			"language":{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
			}
			});
				responsive: true
        });
 </script>
<script>
	$(".number").prettynumber({
		delimiter : ','
	});
</script>
</body>

</html>
<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>