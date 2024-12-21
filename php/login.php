<?php
$email_lo=$_POST["email_lo"];
$password_lo=$_POST["password_lo"];


$stmt = $conn->prepare("SELECT UserID, password_ FROM utilisateur WHERE email_lo = ?");
$stmt->bind_param("s", $email_lo);
$stmt->execute();
$stmt->store_result();
$stmt->close();

?>