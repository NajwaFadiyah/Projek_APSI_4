<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonton Ajahh - Genre Romance</title>
    <link rel="stylesheet" href="styleGenreAction.css">
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

    <!-- Header GENRE ROMANCE -->
    <div class="header-container">
        <h2>ROMANCE</h2>
    </div>
    <!-- AKHIR Header GENRE ROMANCE -->

    <!-- Container untuk daftar serial dan film -->
    <div class="content">
        <div class="section-header">
            <h3>Serial</h3>
            <a href="#" class="more-link">Lihat lainnya...</a>
        </div>
        <div class="container">
            <div class="item">
                <img src="Gambar genreRomance/queen of tears.jpeg" alt="Queen Of Tears">
                <div class="item-info">
                    <h3>Queen Of Tears</h3>
                    <p>16 episode | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Santri Pilihan Bunda.jpeg" alt="Santri Pilihan Bunda">
                <div class="item-info">
                    <h3>Santri Pilihan Bunda</h3>
                    <p>8 episode | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Serial The Perfect.jpeg" alt="Serial The Perfect">
                <div class="item-info">
                    <h3>The Perfect Strangers</h3>
                    <p>6 episode | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Doctor slump.jpeg" alt="Doctor Slump">
                <div class="item-info">
                    <h3>Doctor Slump</h3>
                    <p>16 episode | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/lovely.jpeg" alt="Lovely Runner">
                <div class="item-info">
                    <h3>Lovely Runner</h3>
                    <p>16 episode | Romance</p>
                </div>
            </div>
        </div>
        
        <div class="section-header">
            <h3>Film</h3>
            <a href="#" class="more-link">Lihat lainnya...</a>
        </div>
        <div class="container">
            <div class="item">
                <img src="Gambar genreRomance/Ancika.jpeg" alt="Ancika">
                <div class="item-info">
                    <h3>Ancika</h3>
                    <p>100 min | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Gita Cinta SMA.jpeg" alt="Gita Cinta Dari SMA">
                <div class="item-info">
                    <h3>Gita Cinta Dari SMA</h3>
                    <p>103 min | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/catatan si boy.jpeg" alt="Catatan Si Boy">
                <div class="item-info">
                    <h3>Catatan Si Boy</h3>
                    <p>126 min | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Be With You.jpeg" alt="Be With You">
                <div class="item-info">
                    <h3>Be With You</h3>
                    <p>132 min | Romance</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreRomance/Sweet and Sour.jpeg" alt="Sweet & Sour">
                <div class="item-info">
                    <h3>Sweet & Sour</h3>
                    <p>101 min | Romance</p>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR Container untuk daftar serial dan film -->

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
