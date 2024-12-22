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
include("connec.php");


if (isset($_POST["name"], $_POST["email"], $_POST["password"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];
    $hashed_password_user = md5($password);

    function add_cl($conn, $name, $email, $hashed_password_user) {
        $stmt = $conn->prepare("INSERT INTO utilisateur (nom, email, password_) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password_user);

        if ($stmt->execute()) {
            echo "<p class='succes'>l'inscription avec succès</p>";
        } else {
            echo "<p class='error'>L'inscription a échoué</p>";
            die();
        }
        $stmt->close();
    }
    add_cl($conn, $name, $email, $hashed_password_user);
}


if(isset($_POST["date_res"])){

    $date_res=$_POST["date_res"];
    function add_res($conn,$date_res){
        $stmt=$conn->prepare("INSERT INTO reservations (Date_res) VALUES (?)");
        $stmt->bind_param("s",$date_res);
        if ($stmt->execute()) {
            echo "<p class='succes'>l'inscription avec succès</p>";
        } else {
            echo "<p class='error'>L'inscription a échoué</p>";
            die();
        }
        $stmt->close();
    }
    add_res($conn,$date_res);
}

if (isset($_POST["name_av"], $_POST["email_av"], $_POST["password_av"], $_POST["Specialites"], $_POST["experience"], $_POST["image"], $_POST["Biographie"])) {
    $name_av = mysqli_real_escape_string($conn, $_POST["name_av"]);
    $email_av = mysqli_real_escape_string($conn, $_POST["email_av"]);
    $password_av = $_POST["password_av"];
    $hashed_password_avocat = md5( $password_av);
    $Specialites = $_POST["Specialites"];
    $experience = $_POST["experience"];
    $image_av = $_POST["image"];
    $Biographie = mysqli_real_escape_string($conn, $_POST["Biographie"]);

    function add_av($conn, $experience, $Biographie, $Specialites, $image_av, $name_av, $email_av, $hashed_password_avocat) {
        $stmt = $conn->prepare("INSERT INTO avocats (experience, Biographie, Specialites, image_av, full_name, email, password_av) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issbsss", $experience, $Biographie, $Specialites, $image_av, $name_av, $email_av, $hashed_password_avocat);

        if ($stmt->execute()) {
            echo "<p class='succes'>l'inscription avec succès</p>";
        } else {
            echo "<p class='error'>L'inscription a échoué</p>";
            die();
        }
        $stmt->close();
    }
    add_av($conn, $experience, $Biographie, $Specialites, $image_av, $name_av, $email_av, $hashed_password_avocat);
}
?>

</body>
</html>


