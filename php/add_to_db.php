<?php
include ("connec.php");
$name=mysqli_real_escape_string($connec,$_POST["name"]);
$email=mysqli_real_escape_string($connec,$_POST["email"]);;
$password=$_POST["password"];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
?>