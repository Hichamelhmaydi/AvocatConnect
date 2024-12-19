<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php
include ("connec.php");
$name=mysqli_real_escape_string($conn,$_POST["name"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$password=$_POST["password"];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$stmt=$conn->prepare("INSERT INTO utilisateur (nom,email,password_) VALUES(?,?,?)");
$stmt->bind_param("sss",$name,$email,$hashed_password );
$stmt->execute();
if ($stmt->execute()) {
    echo"<p class='succes';>";
    echo "l'inscription avec succès";
    echo"</p>";
} else {
    echo"<p class='echoe';>";
    echo "L'inscription a échoué";
    echo"</p>";
    exit();
}
$stmt->close();
$conn->close();
?>
</body>
</html>


