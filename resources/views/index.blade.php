<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleHome.css">
    <link href="https://fonts.cdnfonts.com/css/abhaya-libre-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/forte" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Home | Nonton Ajahh</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logoo">
            <a href="/">Nonton Ajahh</a>
        </div>
        <ul class="nav-link">
            <li><a href="/">Home</a></li>
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

    <!-- Hero -->
    <section class="slider-container">
        <section class="slider">
            <div class="slide one">
                <img src="Hero_Slider/slider1.png" alt="Slider1.png">

                <span class="caption">
                    <h1> Stand By Me Doraemon </h1>
                    <div>
                        <i class="fa-solid fa-crown" style="color: #FF9900;"></i>
                        <span> Kids </span>
                        <span> Anime </span>
                        <span> Movie </span>
                    </div>
                </span>
            </div>
            <div class="slide two">
                <img src="Hero_Slider/slider2.png" alt="Slider2.png">

                <span class="caption">
                    <h1> Unforgettable Love </h1>
                    <div class="hero-tags">
                        <i class="fa-solid fa-crown" style="color: #FF9900;"></i>
                        <span> China </span>
                        <span> Romance </span>
                        <span> Series </span>
                    </div>
                </span>
            </div>
            <div class="slide three">
                <img src="Hero_Slider/slider3.png" alt="Slider3.png">

                <span class="caption">
                    <h1> Girl From Nowhere </h1>
                    <div class="hero-tags">
                        <i class="fa-solid fa-crown" style="color: #FF9900;"></i>
                        <span> Horor </span>
                        <span> Thailand </span>
                        <span> Series </span>
                    </div>
                </span>
            </div>
        </section>
    </section>
    <!-- Akhir Hero -->

    <!-- Content -->
    <!-- Rekomendasi Pilihan -->
    <section class="rekomendasi">
        <div class="container">
            <h2>Rekomendasi Pilihan</h2>
            <div class="rekomendasi-grid">
                <div class="rekomendasi-item">
                    <img src="Gambar Film/Stand By Me Doraemon 2.jpeg" alt="Stand By Me Doraemon">
                    <h3>Stand By Me Doraemon</h3>
                    <p>95 min | Comedy, Drama</p>
                </div>
                <div class="rekomendasi-item">
                    <img src="Gambar Serial/wednesday.jpeg" alt="Wednesday">
                    <h3>Wednesday</h3>
                    <p>8 episode | Horor</p>
                </div>
                <div class="rekomendasi-item">
                    <img src="Gambar Serial/queen of tears.jpeg" alt="Queen Of Tears">
                    <h3>Queen Of Tears</h3>
                    <p>16 episode | Romance</p>
                </div>
                <div class="rekomendasi-item">
                    <img src="Gambar Film/Ancika.jpeg" alt="Ancika">
                    <h3>Ancika</h3>
                    <p>100 min | Romance</p>
                </div>
                <div class="rekomendasi-item">
                    <img src="Gambar Film/Exhuma.jpeg" alt="Exhuma">
                    <h3>Exhuma</h3>
                    <p>134 min | Mystery, Horor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Terbaru -->
    <section class="terbaru">
        <div class="container">
            <h2>Terbaru di Nonton Ajahh</h2>
            <div class="terbaru-grid">
                <div class="terbaru-item">
                    <img src="Gambar Film/Ancika.jpeg" alt="Ancika">
                    <h3>Ancika</h3>
                    <p>100 min | Romance</p>
                </div>
                <div class="terbaru-item">
                    <img src="Gambar Film/Exhuma.jpeg" alt="Exhuma">
                    <h3>Exhuma</h3>
                    <p>134 min | Mystery, Horor</p>
                </div>
                <div class="terbaru-item">
                    <img src="Gambar Serial/Santri Pilihan Bunda.jpeg" alt="Santri Pilihan Bunda">
                    <h3>Santri Pilihan Bunda</h3>
                    <p>8 episode | Romance</p>
                </div>
                <div class="terbaru-item">
                    <img src="Gambar Serial/queen of tears.jpeg" alt="Queen Of Tears">
                    <h3>Queen Of Tears</h3>
                    <p>16 episode | Romance</p>
                </div>
                <div class="terbaru-item">
                    <img src="Gambar Serial/Induk Gajah.jpeg" alt="Induk Gajah">
                    <h3>Induk Gajah</h3>
                    <p>8 episode | Comedy, Romance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Film -->
    <section class="film">
        <div class="container">
            <h2>Film</h2>
            <div class="film-grid">
                <div class="film-item">
                    <img src="Gambar Film/Stand By Me Doraemon 2.jpeg" alt="Stand By Me Doraemon">
                    <h3>Stand By Me Doraemon</h3>
                    <p>95 min | Comedy, Drama</p>
                </div>
                <div class="film-item">
                    <img src="Gambar Film/Gita Cinta SMA.jpeg" alt="Gita Cinta Dari SMA">
                    <h3>Gita Cinta Dari SMA</h3>
                    <p>103 min | Romance</p>
                </div>
                <div class="film-item">
                    <img src="Gambar Film/Turning Red.jpeg" alt="Turning Red">
                    <h3>Turning Red</h3>
                    <p>100 min | Comedy, Fantasy</p>
                </div>
                <div class="film-item">
                    <img src="Gambar Film/Mencuri Raden Saleh.jpeg" alt="Mencuri Raden Saleh">
                    <h3>Mencuri Raden Saleh</h3>
                    <p>154 min | Action, Crime</p>
                </div>
                <div class="film-item">
                    <img src="Gambar Film/Exhuma.jpeg" alt="Exhuma">
                    <h3>Exhuma</h3>
                    <p>134 min | Mystery, Horor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Serial -->
    <section class="serial">
        <div class="container">
            <h2>Serial</h2>
            <div class="serial-grid">
                <div class="serial-item">
                    <img src="Gambar Serial/my nerd girl.jpeg" alt="My Nerd Girl 2">
                    <h3>My Nerd Girl 2</h3>
                    <p>8 episode | Mistery</p>
                </div>
                <div class="serial-item">
                    <img src="Gambar Serial/wednesday.jpeg" alt="Wednesday">
                    <h3>Wednesday</h3>
                    <p>8 episode | Horor</p>
                </div>
                <div class="serial-item">
                    <img src="Gambar Serial/A.jpeg" alt="A+">
                    <h3>A+</h3>
                    <p>6 episode | Thriller</p>
                </div>
                <div class="serial-item">
                    <img src="Gambar Serial/queen of tears.jpeg" alt="Queen Of Tears">
                    <h3>Queen Of Tears</h3>
                    <p>16 episode | Romance</p>
                </div>
                <div class="serial-item">
                    <img src="Gambar Serial/one piece.jpeg" alt="One Piece">
                    <h3>One Piece</h3>
                    <p>7 season | Anime, Action</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Content -->

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