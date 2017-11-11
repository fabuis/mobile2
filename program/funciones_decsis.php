<?php
session_start();
if(isset($_SESSION["username"])){ 
header('Content-Type: text/html; charset=ISO-8859-1');
include 'conexiondecsis.php';
?>
<?php
function convert_utf8($valor){
		$valor_devuelto=iconv('iso-8859-1', 'utf-8', $valor);
		return($valor_devuelto);
	}
?>

<?php
}else{
	session_destroy();
	echo '<script> window.location="../../pages/login.php"; </script>';
}
?>