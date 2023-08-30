<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $username = $_SESSION["username"];
    
    // Check if the user is already registered
    $sqlCheck = "SELECT * FROM coursereg WHERE studentName = :username";
    $stmtCheck = $conn->prepare($sqlCheck);
    $stmtCheck->bindParam(':username', $username);
    $stmtCheck->execute();
    $existingRegistration = $stmtCheck->fetch(PDO::FETCH_ASSOC);

    if ($existingRegistration) {
        echo 'already_registered';
    } else {
        echo 'not_registered';
    }
}

?>