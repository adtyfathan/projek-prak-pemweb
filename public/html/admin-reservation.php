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
            <div class="navigationelementsverticall">
                <span><a href="admin-user.php">User</a></span>
            </div>
            <div class="navigationelementsverticall">
                <span><a href="admin-comment.php">Comment</a></span>
            </div>
            <div class="navigationelementsverticall active">
                <span><a href="admin-reservation.php">Reservation</a></span>
            </div>
        </div>
        <div class="group-parent">
            <?php
                include("../php/koneksi.php");
                
                $result = mysqli_query($koneksi, "SELECT * FROM tickets");
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
                                                <table>
                                                    <tr>
                                                    <tr>
                                                        <td>ID Tiket</td>
                                                        <td>:</td>
                                                        <td>'.$data['ticket_id'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ID User</td>
                                                        <td>:</td>
                                                        <td>'.$data['user_id'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ID Tour</td>
                                                        <td>:</td>
                                                        <td>'.$data['destination_id'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>'.$data['nama_user'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>:</td>
                                                        <td>'.$data['email'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Destinasi</td>
                                                        <td>:</td>
                                                        <td>'.$data['nama_destinasi'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor HP</td>
                                                        <td>:</td>
                                                        <td>'.$data['nomor_hp'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kenegaraan</td>
                                                        <td>:</td>
                                                        <td>'.$data['nationality'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Umur</td>
                                                        <td>:</td>
                                                        <td>'.$data['umur'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Berangkat</td>
                                                        <td>:</td>
                                                        <td>'.$data['tanggal_berangkat'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Tiket</td>
                                                        <td>:</td>
                                                        <td>'.$data['jumlah_tiket'].'</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Harga</td>
                                                        <td>:</td>
                                                        <td>Rp'.$data['total_harga'].'</td>
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