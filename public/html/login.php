<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cungkuo Tour</title>
    <link rel="icon" href="../asset/favicon.png">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="log-in">
        <img class="logo" src="../asset/logo-cungkuo.png">
        <div class="cungkuo-tour">CUNGKUO TOUR</div>
        <div class="best-china-tours">Best China Tours</div>
        <div class="title">Welcome back!</div>
        <form method="POST" id="login-form">
            <div class="input-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="caution-text">Use at least 8 characters with 1 number, and one special character.</div>
            <input type="submit" name="login" value="Login">
        </form>

        <div class="register-text">Don't have an account?</div>
        <form method="POST">
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>

   
    
    <!-- <script>
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", (event) => event.preventDefault());
    </script> -->
