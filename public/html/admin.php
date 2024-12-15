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
            <div class="navigationelementsverticall active">
                <span><a href="admin.php">Tours</a></span>
            </div>
            <div class="navigationelementsverticall">
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
                
                $result = mysqli_query($koneksi, "SELECT * FROM tours");
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
                                                <h1><b class="senior-friendly-tours">'.$data['nama_tempat'].'</b></h1>
                                                <img src="data:image/jpeg;base64,' . base64_encode($data['gambar_tempat']) . '" width="200"/>
                                                <div class="china-is-a">'.$data["deskripsi_tempat"].'</div>
                                                <table>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td>:</td>
                                                        <td>Rp'.$data['harga'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah hari</td>
                                                        <td>:</td>
                                                        <td>'.$data['jumlah_hari'].' hari</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah like</td>
                                                        <td>:</td>
                                                        <td>'.$data['jumlah_like'].'</td>
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