<?php
session_start();
?>
<?php
include("../program/conexion.php");
include("../program/select.php");
?>
<?php
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		//$hashed_password = crypt($password, '$1$Coopi$'); // dejar que el salt se genera automáticamente
		/* Se deben pasar todos los resultados de crypt() como el salt para la comparación de una
	   contraseña, para evitar problemas cuando diferentes algoritmos hash son utilizados. (Como
	   se dice arriba, el hash estándar basado en DES utiliza un salt de 2
	   caracteres, pero el hash basado en MD5 utiliza 12.) */

		//$password=$hashed_password;

		$consulta_acceso =("SELECT * FROM tblusuarios WHERE username='".$username."' AND password='".$password."'");
		$result_acceso=$connection->query($consulta_acceso);
		if($result_acceso->num_rows > 0)
		{
			$row = $result_acceso->fetch_assoc();
			$_SESSION["username"]=$username;
			$_SESSION["perfil"]=$row["id_nivel_acceso"];
			//$_SESSION["nombre"]=$row["nomusu"];
			//$_SESSION["apellido"]=$row["apeusu"];
	
			echo '<script> window.location="principal.php"; </script>';
		}
		else{
			session_destroy();
			echo "<script>alert('Usuario o Contraseña Incorrectos')</script>";
			
			echo '<script> window.location="login.php"; </script>';
		}
	}
	else {
		session_destroy();
			echo "<script>alert('Error en recepción de Datos, Por favor contacte al administrador del sistema')</script>";
			
			echo '<script> window.location="login.php"; </script>';
	}

//$connection->close();
?>

