<?php
    session_start();
    require_once "database.php";
    
    if (isset($_SESSION["user"])){
        header("Location: index.php");
        exit();
    } 

    if(isset ($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT id, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if(password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                echo "<script>alert('Successfully logged in.');</script>";
                header("Location: message.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prince Keith Carandang - Personal Website</title>
    <link rel="stylesheet" href="testinglang.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="social.php">SOCIALS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
    </header>
</body>
<body>
    <div class="container">
        <div class="image">
            <img src="mouse.jpg" alt="Image Description">
        </div>
        <div class="text">
            <h2>HI STRANGER!!</h2>
            <p>WELCOME TO MY WEBSITE</p>
        </div>
    </div>
</body>

<div class="form-container">
    <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class= "form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class= "form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div class="reg-btn">
                <a href="registration.php">Register</a>
            </div>
        </form>
    </div>  
    <br>
    <br>
    <br>
    <br>
    </section>

<footer>
        <p>&copy; 2024 Prince Max Wynn. All rights reserved.</p>
    </footer>

</html>