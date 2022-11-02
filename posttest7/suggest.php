<?php
$judul = $_POST['judul'];
$tipe = $_POST['tipe'];
$link = $_POST['link'];
$deskripsi = $_POST['deskripsi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/icon.png">
    <title>mbul</title>
</head>

<body>
    <header class="header">
        <nav>
            <label>
                <input type="checkbox" class="checkbox" id="tombol">
                <span class="check"></span>
            </label>
            <a href="index.php"><img src="image/logo.png" alt="logo" id="logo"></a>
            <div class="navbar">
                <ul>
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href=""><b id="lnlist">LIGHT NOVEL LIST</b></a></li>
                    <li><a href=""><b id="wnlist">WEB NOVEL LIST</b></a></li>
                    <li><a href="request.php"><b>REQUEST NOVEL</b></a></li>
                    <li><a href="update.php"><b>UPDATE NOVEL</b></a></li>
                    <li><a href="about.php"><b>ABOUT ME</b></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h1><span>Request Novel</span></h1>
    <div class="border">
        <table border="0">
            <tr>
                <td>Judul Novel</td>
                <td>:</td>
                <td><?php echo $judul?></td>
            </tr>
            <tr>
                <td>Tipe Novel</td>
                <td>:</td>
                <td><?php echo $tipe?></td>
            </tr>
            <tr>
                <td>Link Referensi</td>
                <td>:</td>
                <td><?php echo $link?></td>
            </tr>
            <tr>
                <td>Deskripsi Novel</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan=3><?php echo $link?></td>
            </tr>
        </table>
    </div>
    <footer>
        <div class="foot">
            <p>@Copyright 2022 - Rizky Hardian</p>
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>