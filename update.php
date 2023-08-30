<?php
session_start();

// Start the session


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    // Update the user data in the session
    $_SESSION["Fname"] = $_POST["Fname"];
    $_SESSION["Lname"] = $_POST["Lname"];
    $_SESSION["faculty"] = $_POST["faculty"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["username"] = $_POST["username"];

    // Redirect back to the original page or any other page you want
    header('Location: database.php'); // Change "index.php" to the desired page
    exit();
}

?>