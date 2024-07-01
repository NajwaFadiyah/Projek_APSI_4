<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonton Ajahh</title>
    <link rel="stylesheet" href="styleFilm.css">
    <link href="https://fonts.cdnfonts.com/css/abhaya-libre-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/forte" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            <a href="#">Nonton Ajahh</a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('serial') }}">Serial</a></li>
            <li><a href="{{ route('film') }}">Film</a></li>
            <li>
                <div class="dropdown-container">
                    <a href="/">
                        Genre
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <div class="dropdown-menu grid">
                        <a href="{{ route('romance') }}"> Romance </a>
                        <a href="{{ route('drama') }}"> Drama </a>
                        <a href="#"> Horor </a>
                        <a href="#"> Kids </a>
                        <a href="#"> Anime </a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="action-button">
            <form class="search">
                <input type="text" class="search-input" placeholder="Stand By Me Doraemon">
                <i class="fa-solid fa-search" style="background: transparent;"></i>
            </form>
            <a href="#" class="btn-riwayat">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </a>
            <a href="{{ route('langganan') }}" class="btn-langganan">
            <i class="fa-solid fa-crown"></i>
                Langganan
            </a>
            <a href="{{ route('login') }}" class="btn-masuk">
                Masuk
            </a>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <!-- Header FILM -->
    <div class="header-container">
        <h2>FILM</h2>
        <div class="more-link">
            <a href="#">Lihat lainnya...</a>
        </div>
    </div>
    <!-- AKHIR Header FILM -->

    <!-- Container untuk daftar film -->
    <div class="container">
        <div class="film">
            <img src="Gambar Film/Siksa Kubur.jpeg" alt="film 1">
            <div class="film-info">
                <h3>Siksa Kubur</h3>
                <p>117 min | Horor</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Ancika.jpeg" alt="film 2">
            <div class="film-info">
                <h3>Ancika</h3>
                <p>100 min | Romance</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/13 Bom DiJakarta.jpeg" alt="film 3">
            <div class="film-info">
                <h3>13 Bom Di Jakarta</h3>
                <p>143 min | Action</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Orion and the dark.jpeg" alt="film 4">
            <div class="film-info">
                <h3>Orion And The Dark</h3>
                <p>93 min | Animasi</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/the marvels.jpeg" alt="film 5">
            <div class="film-info">
                <h3>The Marvels</h3>
                <p>105 min | Action, Adventure</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Stand By Me Doraemon 2.jpeg" alt="film 6">
            <div class="film-info">
                <h3>Stand By Me Doraemon</h3>
                <p>95 min | Comedy, Drama</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Gita Cinta SMA.jpeg" alt="film 7">
            <div class="film-info">
                <h3>Gita Cinta SMA</h3>
                <p> 103 min | Romance</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Turning Red.jpeg" alt="film 8">
            <div class="film-info">
                <h3>Turning Red</h3>
                <p>100 min | Comedy, Fantasy</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Mencuri Raden Saleh.jpeg" alt="Film 9">
            <div class="film-info">
                <h3>Mencuri Raden Saleh</h3>
                <p>154 min | Action, Crime</p>
            </div>
        </div>
        <div class="film">
            <img src="Gambar Film/Exhuma.jpeg" alt="film 10">
            <div class="film-info">
                <h3>Exhuma</h3>
                <p>134 min | Mistery, Horor</p>
            </div>
        </div>
    </div>
    <!-- AKHIR Container untuk daftar film -->

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div>
                <h3>Terms and Conditions</h3>
                <a href="#">Kebijakan Privasi</a>
            </div>
            <div>
                <h3>Help and Feedback</h3>
                <a href="#">Feedback</a><br>
                <a href="#">FAQs</a>
            </div>
            <div>
                <h3>About Us</h3>
                <a href="#">Tentang Kami</a><br>
                <a href="#">Contact Us</a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2024 - Kelompok IV</p>
        </div>
    </div>
    <!-- Akhir Footer -->
</body>
</html>
