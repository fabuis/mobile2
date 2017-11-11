<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Intranet Coopicredito">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/png" href="../Imagenes/Iconos/logo.png"/>
    <title>Admin Coopi</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="../css/metisMenu.min.css">

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="../css/timeline.css">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="../css/sb-admin-2.css">
    
    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="../css/morris.css" >

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="../css/font-awesome.min.css"  type="text/css">
    
        
    <style>
		body{
			background-image:url(../images/fondo_mobile.png);
			background-color:steelblue;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: 50% 50%;
		}	
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingresar</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="login" name="login" action="valida.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                	<label for="username">Usuario</label>
                                    <input class="form-control" id="username" placeholder="Usuario" name="username" type="text" autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                <label for="password">Contraseña</label>
                                    <input class="form-control" id="password" placeholder="Contraseña" name="password" type="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordar
                                    </label>
                                </div>
                                <div class="form-group">
									<button type="submit" class="btn btn-primary">Ingresar</button>
								  </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--Cierra Wraper-->
    <!-- jQuery -->
    <script src="../js/jquery-3.1.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

	<!-- Coopicredito JavaScript -->
	<script src="../js/jscoopi.js"></script>
    
    <!-- Validator -->
	<script src="../js/jquery.validate.js"></script>
    
    <!-- Validación de campos-->
	<script>

$(document).ready(function(){
		$( "#login" ).validate( {
				rules: {
					username: {
						required: true,
						maxlength:25
					},
					password: {
						required: true,
						maxlength: 25
					}
				},
				messages: {
					username: {
						required: "Ingrese nombre de Usuario",
						maxlength:"Máximo 25 Caracteres"
					},
					password: {
						required: "Ingrese contraseña",
						maxlength: "Máximo 25 Caracteres"
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".form-group" ).addClass( "has-feedback" );

					error.insertAfter( element );
	

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );		
	});
</script>

	
</body>

</html>
