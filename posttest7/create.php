<?php
require 'connect.php';

if (isset($_POST["create"])) {
    $judul = htmlspecialchars($_POST["judul"]);
    $tipe = htmlspecialchars($_POST["tipe"]);
    $volume = htmlspecialchars($_POST["volume"]);

    $sql = "INSERT INTO novel VALUES ('','$judul', '$tipe', '$volume',NULL,NULL)";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'update.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'create.php';
            </script>
        ";
    }
}
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
    <h1><span>Tambah Novel</span></h1>
    <div class="row" id="form">
        <form name="form_request" method="post" action="" enctype="multipart/form-data">
            <table border="0" widht="50%" align="center">
                <tr>
                    <td>Judul Novel</td>
                    <td>:</td>
                    <td colspan="2"><input type="text" required = "" name="judul" maxlength="50" size="30"></td>
                </tr>
                <tr>
                    <td>Tipe Novel</td>
                    <td>:</td>
                    <td colspan="2">
                        <input type="radio" required = "" name="tipe" value="Light Novel" size="30" required =""> Light Novel</br>
                        <input type="radio" required = "" name="tipe" value="Web Novel" size="30" required =""> Web Novel
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Volume</td>
                    <td>:</td>
                    <td colspan="2"><input type="number" required = "" name="volume" maxlength="50" size="30"></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="reset">Batal</button></td>
                    <td><button type="submit" name="create">Tambah</button></td>
                </tr>
            </table>
        </form>
    </div>
    <footer>
        <div class="foot">
            <p>@Copyright 2022 - Rizky Hardian</p>
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>