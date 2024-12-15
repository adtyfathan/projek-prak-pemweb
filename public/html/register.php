<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cungkuo Tour</title>
    <link rel="icon" href="../asset/favicon.png">
    <link rel="stylesheet" href="../css/register.css">
    <?php include "../php/register.php"?>
</head>
<body>
    <div class="container">
        <div class="left-panel"></div>
        <div class="form-container">
            <h2 class="title">Register</h2>
            <div class="form-content">
                <form>
                    <label for="username">Email</label>
                    <input type="email" name="email" required>

                    <label for="email">Nama</label>
                    <input type="text" name="nama" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" required>

                    <label>Konfirmasi Password</label>
                    <input type="password" name="konfirmasi-password" required>

                    <input type="submit" name="submit" value="Register" required>
                </form>
                <div class="image-container">
                    <img src="../asset/f.jpg" alt="Cungkuo Tour">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
