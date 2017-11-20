<?php
session_start();
session_destroy();
echo 'Cerraste sesión';
echo '<script> window.location="../pages/login.php"; </script>';
?>