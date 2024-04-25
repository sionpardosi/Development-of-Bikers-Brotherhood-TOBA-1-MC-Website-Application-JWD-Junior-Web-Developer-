<?php
session_start();
unset($_SESSION['sesi']);
unset($_SESSION['id_admin']);
session_destroy();
header("Location:login.php");
?>