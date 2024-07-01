<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonton Ajahh - Genre Action</title>
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

    <!-- Header GENRE ACTION -->
    <div class="header-container">
        <h2>Drama</h2>
    </div>
    <!-- AKHIR Header GENRE ACTION -->

    <!-- Container untuk daftar serial dan film -->
    <div class="content">
        <div class="section-header">
            <h3>Serial</h3>
            <a href="#" class="more-link">Lihat lainnya...</a>
        </div>
        <div class="container">
            <div class="item">
                <img src="Gambar genreAction/Vagabond.jpeg" alt="Vagabond">
                <div class="item-info">
                    <h3>Vagabond</h3>
                    <p>16 episode | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/taxi driver.jpeg" alt="Taxi Driver">
                <div class="item-info">
                    <h3>Taxi Driver</h3>
                    <p>16 episode | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/Black Knight.jpeg" alt="Black Knight">
                <div class="item-info">
                    <h3>Black Knight</h3>
                    <p>6 episode | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/Rencana Besar.jpeg" alt="Rencana Besar">
                <div class="item-info">
                    <h3>Rencana Besar</h3>
                    <p>6 episode | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/Pertaruhan the series.jpeg" alt="Pertaruhan the series">
                <div class="item-info">
                    <h3>Pertaruhan The Series 2</h3>
                    <p>8 episode | Action</p>
                </div>
            </div>
        </div>
        
        <div class="section-header">
            <h3>Film</h3>
            <a href="#" class="more-link">Lihat lainnya...</a>
        </div>
        <div class="container">
            <div class="item">
                <img src="Gambar genreAction/Mencuri Raden Saleh.jpeg" alt="Mencuri Raden Saleh">
                <div class="item-info">
                    <h3>Mencuri Raden Saleh</h3>
                    <p>154 min | Action, Crime</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/the marvels.jpeg" alt="The Marvels">
                <div class="item-info">
                    <h3>The Marvels</h3>
                    <p>105 min | Action, Adventure</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/13 Bom DiJakarta.jpeg" alt="13 Bom Di Jakarta">
                <div class="item-info">
                    <h3>13 Bom Di Jakarta</h3>
                    <p>143 min | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/The Comeback.jpeg" alt="The Come Back">
                <div class="item-info">
                    <h3>The Come Back</h3>
                    <p>105 min | Action</p>
                </div>
            </div>
            <div class="item">
                <img src="Gambar genreAction/Pertaruhan.jpeg" alt="Pertaruhan">
                <div class="item-info">
                    <h3>Pertaruhan</h3>
                    <p>105 min | Action</p>
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
