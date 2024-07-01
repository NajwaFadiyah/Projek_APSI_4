<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonton Ajahh</title>
    <link rel="stylesheet" href="styleSerial.css">
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

    <!-- Header SERIAL -->
    <div class="header-container">
        <h2>SERIAL</h2>
        <div class="more-link">
            <a href="#">Lihat lainnya...</a>
        </div>
    </div>
    <!-- AKHIR Header SERIAL -->

    <!-- Container untuk daftar serial -->
    <div class="container">
        <div class="serial">
            <img src="Gambar Serial/my nerd girl.jpeg" alt="Serial 1">
            <div class="serial-info">
                <h3>My Nerd Girl 2</h3>
                <p>5 episode | Mistery</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/wednesday.jpeg" alt="Serial 2">
            <div class="serial-info">
                <h3>Wednesday</h3>
                <p>8 episode | Horror</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/A.jpeg" alt="Serial 3">
            <div class="serial-info">
                <h3>A+</h3>
                <p>6 episode | Thriller</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/queen of tears.jpeg" alt="Serial 4">
            <div class="serial-info">
                <h3>Queen Of Tears</h3>
                <p>16 episode | Romance</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/one piece.jpeg" alt="Serial 5">
            <div class="serial-info">
                <h3>One Piece</h3>
                <p>7 season | Anime, Action</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/Save Me.jpeg" alt="Serial 6">
            <div class="serial-info">
                <h3>Save Me</h3>
                <p>16 episode | Mistery</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/Induk Gajah.jpeg" alt="Serial 7">
            <div class="serial-info">
                <h3>Induk Gajah</h3>
                <p>8 episode | Comedy, Romance</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/Vagabond.jpeg" alt="Serial 8">
            <div class="serial-info">
                <h3>Vagabond</h3>
                <p>16 episode | Action</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/Santri Pilihan Bunda.jpeg" alt="Serial 9">
            <div class="serial-info">
                <h3>Santri Pilihan Bunda</h3>
                <p>8 episode | Romance</p>
            </div>
        </div>
        <div class="serial">
            <img src="Gambar Serial/The Worst.jpeg" alt="Serial 10">
            <div class="serial-info">
                <h3>The Worst Witch</h3>
                <p>52 episode | Fantasy</p>
            </div>
        </div>
    </div>
    <!-- AKHIR Container untuk daftar serial -->

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
