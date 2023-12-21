<!-- process.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phoneNumber"])) {
        $_SESSION["contact_data"] = array(
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "phoneNumber" => $_POST["phoneNumber"]

        );
        
   
        header("Location: confirmation.php");
        exit();
    }
}
