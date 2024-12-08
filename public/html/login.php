<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <?php include "../php/login.php" ?>
</head>

<body>
    <h1>Halaman Login</h1>
    <form method="POST" id="login-form">
        <label>Email: </label>
        <input type="email" name="email" value="" required />

        <label>Password: </label>
        <input type="password" name="password" value="" required />

        <input type="submit" name="submit" value="Submit" />
        <p>No account? <a href="register.php">Register</a></p>
    </form>

    <!-- <script>
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", (event) => event.preventDefault());
    </script> -->
</body>

</html>