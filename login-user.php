<?php

session_start();
include "service/database.php";

if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
    exit();
}
 
if (isset($_POST['daftar'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = $_POST['password']; 
    
    $sql = "SELECT * FROM userss WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        header("Location: beranda.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login-user.css">
</head>
<body>
<div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Sign In Form -->
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>
                    <input type="submit" value="Login" name="daftar" class="btn solid" />
                    <p>Belum Punya Akun? <a href="register-user.php">Sign Up</a></p>
                </form>

                <!-- Sign Up Form -->
                <!-- <form action="" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />
                </form>
            </div>
        </div> -->

        <!-- <div class="panels-container">
            <!-- Left Panel -->
            <!-- <div class="panel left-panel"> 
                <div class="content">
                    <h3>New here?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
            </div> 
            </div> --> 

            <!-- Right Panel -->
            <!-- <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
            </div> -->
        </div>
    </div>

    <!-- <script src="js/app.js"></script> -->
</body>
</html>