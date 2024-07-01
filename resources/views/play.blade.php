<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePlay.css">
    <link href="https://fonts.cdnfonts.com/css/abhaya-libre-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/forte" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title> Play | Nonton Ajahh</title>
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
        
    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="content">
                <div class="player">
                    <!-- Placeholder for the video player -->
                </div>
                <div class="episode-list">
                    <h2> Semua Episode </h2>
                    <ul>
                        <li><button class="episode active">E1</button></li>
                        <li><button class="episode">E2</button></li>
                        <li><button class="episode">E3</button></li>
                        <li><button class="episode">E4</button></li>
                        <li><button class="episode">E5</button></li>
                        <li><button class="episode">E6</button></li>
                        <li><button class="episode">E7</button></li>
                        <li><button class="episode">E8</button></li>
                    </ul>

                    <div class="section">
                        <h3>Direkomendasikan Untukmu</h3>
                        <div class="recommendations">
                            <div class="recommendation">
                                <div class="poster">
                                    <img src="Gambar Serial/my nerd girl.jpeg" alt="Rekomendasi1">
                                </div>
                                <div class="info">
                                    <h4>My Nerd Girl 2</h4>
                                    <p>8 episode | Mistery</p>
                                </div>
                            </div>
                            <div class="recommendation">
                                <div class="poster">
                                    <img src="Gambar Serial/my nerd girl.jpeg" alt="Rekomendasi1">
                                </div>
                                <div class="info">
                                    <h4>Lovely Runner</h4>
                                    <p>16 episode | Romance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="movie-info">
                    <h2>Santri Pilihan Bunda - Episode 1</h2>
                    <p>2024 | Indonesia | 8 episode | Romance</p>
                    <p>Aliza terpaksa menerima perjodohan dari Bunda dan menikah dengan Kinaan. Namun, masa lalu Kinaan membayangi dan mengancam rumah tangga mereka ketika Aliza lambat laun mulai mencintai Kinaan.</p>
                </div>
            </div>
        </div>
    </main>
    <!-- Akhir Main -->

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
</body>
</html>