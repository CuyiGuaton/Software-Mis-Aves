<?php
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['loggedin'])) { //bandera que dice si se ha iniciado sesión
  header('Location: dashboard/dashboard.php');
}
else{
    header('Location: login.php');
}
?>
