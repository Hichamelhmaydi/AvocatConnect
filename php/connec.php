<?php
$db_service="localhost";
$db_user="root";
$db_password="";
$db_name="avocat";
$conn="";
$conn = mysqli_connect(
        $db_service,
        $db_user,
        $db_password,
        $db_name
);
mysqli_close($conn);
?>