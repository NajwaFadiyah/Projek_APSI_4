<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegister.css">
    <link href="https://fonts.cdnfonts.com/css/abhaya-libre-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/forte" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title> Register | Nonton Ajahh </title>
</head>
<body>
    <div class="container">
        <h1>HI!</h1>
        <p>Create New Account</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
        <p> ---- or ---- </p>
        <p>Sign In with</p>
        <div class="social-buttons">
            <a href="#" class="google-button"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="facebook-button"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="apple-button"><i class="fa-brands fa-apple"></i></a>
        </div>
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        <button type="button"><a href="{{ route('login') }}" style="text-decoration: none; color:white"> Skip Now </a> <i class="fa-solid fa-right-long"></i></button>
    </div>
</body>
</html>