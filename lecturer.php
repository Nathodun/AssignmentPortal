<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lasu Assignment Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
</head>
<div class="background-image">
<body id="studentPortal">
    <section id="studentForm">
        <header>
            <img src="img/lasu logo.png" alt="lasu logo" id="logo">
        </header>
         <h1>LAGOS STATE UNIVERSITY
            <h3>Assignment Portal Registration <h3>(Lecturer)</h3>
        </h1>
 

    <form action="dbConfig/lecturerRegistration.php" method="post">
        <input type="text" name="fName" placeholder="Enter your first name">
        <input type="text" name="lName" placeholder="Enter your last name">
        <input type="text" name="idNumber" placeholder="Enter your staff id number">
        <input type="text" name="faculty" placeholder="Enter your faculty">
        <input type="text" name="username" placeholder="Enter your username (Mr/Mrs/Miss.example)">
        <input type="text" name="email" name="email" placeholder="Enter your email address">
        <input type="password" name="password" placeholder="Choose a password">
        <input type="submit" name="lec_register" value="Register">
    </form>
    </section>

    <footer>
        back to <a href="index.php">homepage</a> 
    </footer>
    <script src="js/lecturer.js"></script>

</div>
</body>
</html>