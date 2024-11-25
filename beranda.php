<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: home.php");
    exit(); // Terminate script execution after the redirect
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/beranda.css">
</head>
<body>
        <nav class="navbar-nav">
            <ul>
                <li><a href="#home"></a></li>
            </ul>
        </nav>

    <main>
        <section class="home" id="home">
            <div class="banner">
                <div class="title-banner">
                    <h1>Nikamti Film Bersama Keluarga </h1>
                </div>
            </div>

        <div class="title-populer">
            <h2>Film Terpopuler</h2>
        </div>
        <div class="container-popular">
            <div class="populer1">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="populer2">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="populer3">
            <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="list-titleFilm">
            <h2>Film Terbaru</h2>
        </div>

        <div class="list-filmSatu">
            <div class="terbaru1">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="terbaru2">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="terbaru3">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="list-filmDua">
            <div class="terbaru4">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="terbaru5">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
            <div class="terbaru6">
                <div class="detail-film">
                    <a href="">
                        <button>Detail Film</button>
                    </a>
                </div>
            </div>
        </div>
        </section>


    </main>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>