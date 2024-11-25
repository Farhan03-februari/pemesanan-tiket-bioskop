<?php
include "service/database.php";
session_start();


if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $email = mysqli_real_escape_string($db, $_POST['email']); 
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $sql = "SELECT * FROM userss WHERE email='$email'"; 
        $result = mysqli_query($db, $sql);

        if ($result && $result->num_rows === 0) {
            $sql = "INSERT INTO userss (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($db, $sql);

            if ($result) {
                echo "<script>alert('Selamat, pendaftaran berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Maaf, terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Ups, email sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/register-user.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required />
                    </div>
                    <input type="submit" value="Sign Up" name="daftar" class="btn solid" />
                    <p>Sudah punya akun? <a href="login-user.php">Sign In</a></p>
                </form>
            </div>
        </div>

        <!-- <div class="panels-container"> -->
            <!-- Left Panel -->
            <!-- <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
            </div> -->

            <!-- Right Panel -->
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="js/app.js"></script>
</body> -->
</html>