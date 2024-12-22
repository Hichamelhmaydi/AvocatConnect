<?php
include("connec.php");
session_start();
if (isset($_POST["sub"])) {
    $email_lo = $_POST["email_lo"];
    $password_lo = $_POST["password_lo"];


   
    $password_lo_md5 = md5($password_lo);


    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE email = ?");
    $stmt->bind_param("s", $email_lo);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

         if ($user['password_'] === $password_lo_md5) {
            $_SESSION['user_email'] = $user['email'];
            header("Location: ../clientPage.php");
            exit();   
        } else {
            echo "mots de passe incorrect";   
        }
    } else {
        echo "email pas existé";   
    }

    $stmt->close();
}


?>
