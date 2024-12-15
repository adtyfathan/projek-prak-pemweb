<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" />
    <link rel="stylesheet" href="../css/admin.css" />
    <?php include "../php/admin.php"?>

</head>

<body>

    <div class="admin-pov">
        <div class="menu">
            <img src="../asset/material-symbols_travel.png" alt="Travel Logo" class="menu-logo">
            <div class="navigationelementsverticall">
                <span><a href="admin.php">Tours</a></span>
            </div>
            <div class="navigationelementsverticall active">
                <span><a href="admin-user.php">User</a></span>
            </div>
            <div class="navigationelementsverticall">
                <span><a href="admin-comment.php">Comment</a></span>
            </div>
            <div class="navigationelementsverticall">
                <span><a href="admin-reservation.php">Reservation</a></span>
            </div>
        </div>
        <div class="group-parent">
            <?php
                include("../php/koneksi.php");
                
                $result = mysqli_query($koneksi, "SELECT * FROM users");
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="frame-container">
                                <div class="project1-wrapper">
                                    <div class="frame-container">
                                        <div class="qa-module-parent">
                                            <div class="files-issue-1-parent">
                                                <div class="line-div">
                                                </div>
                                                <img src="../asset/profile.jpg" width="200"/>
                                                <table>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>:</td>
                                                        <td>'.$data['email'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>'.$data['nama'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td>:</td>
                                                        <td>'.$data['password'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Role</td>
                                                        <td>:</td>
                                                        <td>'.$data['role'].'</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
        </div>
</body>

</html>