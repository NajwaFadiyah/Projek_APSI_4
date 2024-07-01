<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://fonts.cdnfonts.com/css/abhaya-libre-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/forte" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title> Login | Nonton Ajahh </title>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <p>Enter your email and password</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
        <p>Sign In with</p>
        <div class="social-buttons">
            <a href="#" class="google-button"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="facebook-button"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="apple-button"><i class="fa-brands fa-apple"></i></a>
        </div>
        <button type="button"><a href="/" style="text-decoration: none; color:white"> Skip Now </a> <i class="fa-solid fa-right-long"></i></button>
    </div>
</body>
</html>