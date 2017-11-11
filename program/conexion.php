
<?php
// Carga la configuración 
//$config = parse_ini_file('config.ini'); 

$servidor='localhost';
$usuario='root';
$contrasena='Admin2015*';
$bd='mobile';

// Conexión con los datos del 'config.ini' 
$connection = new mysqli($servidor, $usuario ,$contrasena, $bd); 

// Si la conexión falla, aparece el error 
if($connection->connect_error) { 
 die( 'Ha habido un error de conexion <br>'.$connection->connect_error);
} else {
 //echo 'Conectado a la base de datos';
}
?>