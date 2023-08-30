
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lasu Assignment Portal</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<div class="background-image">
<body id="login_page">
    
    <section id="login">
        <header>
            <img src="img/lasu logo.png" alt="lasu logo" id="logo">
        </header>
        <h1>LAGOS STATE UNIVERSITY <br> *Assignment Portal*</h1>

        <form action="dbConfig/loginSetUp.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address">
            <input type="password" name="password" placeholder="Enter your password">
            <select name="loginAS" id="loginAS">
                <option value="student">STUDENT</option>
                <option value="lecturer">LECTURER</option>
            </select>
            <!-- <label for="">Login as</label>
            <input type="checkbox" value="student"><span>Student</span> 
            <input type="checkbox" value="lecturer"><span>lecturer</span> -->
            <input type="submit" name="login_btn" value="LOGIN">
        </form>

        Create an account?<a href="index.php">Register Now</a> 
    </section>

  </div>  
</body>
</html>