<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lasu Assignment Portal</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body id="home">

    <section id="homePage">
        <header>
            <img src="img/lasu logo.png" alt="lasu logo">
            <h1>LAGOS STATE UNIVERSITY </h1><br> <h3> (EST 415 PROJECT)</h3>
        </header>

        <div id="text-outline">
            <h2>Assignment Portal</h2>
        </div>

        <section id="reg_buttons">
            <a href="lecturer.php"><button>Register as a Lecturer</button></a>

            <a href="student.php"><button>Register as a Student</button></a>
        </section>

        <section>
            <h3>Already have an account?</h3>
            <a href="login.php"><button>Login</button></a>
        </section>
    </section>
    
</body>
</html>