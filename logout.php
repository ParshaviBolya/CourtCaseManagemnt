<?php
session_start();
unset($_SESSION["login_user"]);
unset($_SESSION["login_id"]);
unset($_SESSION["login_role"]);  
header("Location: login.php");
?>