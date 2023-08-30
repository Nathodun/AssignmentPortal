<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'db.php';

    // Check if the user is already registered before inserting
    $sqlCheck = "SELECT * FROM coursereg WHERE studentName = :username";
    $stmtCheck = $conn->prepare($sqlCheck);
    $stmtCheck->bindParam(':username', $_SESSION["username"]);
    $stmtCheck->execute();
    $existingRegistration = $stmtCheck->fetch(PDO::FETCH_ASSOC);


    if (!$existingRegistration) {
        // User is not already registered, proceed with insertion
        $course1 = $_POST["course1"];
        $course2 = $_POST["course2"];
        $course3 = $_POST["course3"];
        $course4 = $_POST["course4"];
        $course5 = $_POST["course5"];
        $course6 = $_POST["course6"];
        $course7 = $_POST["course7"];
        $course8 = $_POST["course8"];
        $course9 = $_POST["course9"];
        $course10 = $_POST["course10"];
        // ... other course variables ...

        $sql = "INSERT INTO coursereg(`studentName`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`, `course7`, `course8`, `course9`, `course10`/*    

... other course columns ... */) 
                VALUES (:username, :course1, :course2, :course3, :course4, :course5, :course6, :course7, :course8, :course9, :course10 /* ... other course values ... 

*/)";
        
        $prep = $conn->prepare($sql);
        $prep->bindParam(':username', $_SESSION["username"]);
        $prep->bindParam(':course1', $course1);
    $prep->bindParam(':course2', $course2);
    $prep->bindParam(':course3', $course3);
    $prep->bindParam(':course4', $course4);
    $prep->bindParam(':course5', $course5);
    $prep->bindParam(':course6', $course6);
    $prep->bindParam(':course7', $course7);
    $prep->bindParam(':course8', $course8);
    $prep->bindParam(':course9', $course9);
    $prep->bindParam(':course10', $course10);
        // ... bind other course parameters ...
        $prep->execute();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register courses</title>

    <link rel="stylesheet" href="../css/editpage.css">
</head>
<body id="editPage">
    <form action="coursereg.php" method="post" id="course_reg_form" onsubmit="return confirmRegistration()">
        <input type="text" name="course1" placeholder="Course Code">
        <input type="text" name="course2" placeholder="Course Code">
        <input type="text" name="course3" placeholder="Course Code">
        <input type="text" name="course4" placeholder="Course Code">
        <input type="text" name="course5" placeholder="Course Code">
        <input type="text" name="course6" placeholder="Course Code">
        <input type="text" name="course7" placeholder="Course Code">
        <input type="text" name="course8" placeholder="Course Code">
        <input type="text" name="course9" placeholder="Course Code">
        <input type="text" name="course10" placeholder="Course Code">
        <input type="submit" value="Register">
    </form>

    <a href="dashboard.php">
        <button>
            Back to dashboard
        </button>
    </a>

    <script src="../js/coursereg.js" ></script>
</body>
</html>