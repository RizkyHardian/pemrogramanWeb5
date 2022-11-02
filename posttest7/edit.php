<?php
require 'connect.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM novel WHERE id = $id ");

$novel = [];

while ($row = mysqli_fetch_assoc($result)) {
    $novel[] = $row;
}

$nvl = $novel[0];

if (isset($_POST["create"])) {
    $judul = htmlspecialchars($_POST["judul"]);
    $tipe = htmlspecialchars($_POST["tipe"]);
    $volume = htmlspecialchars($_POST["volume"]);

    $sql = "UPDATE novel SET
            judul = '$judul',
            tipe = '$tipe',
            volume = '$volume'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'update.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
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
    <h1><span>Edit Novel</span></h1>
    <div class="row" id="form">
        <form name="form_request" method="post" action="" enctype="multipart/form-data">
            <table border="0" widht="50%" align="center">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <tr>
                    <td>Judul Novel</td>
                    <td>:</td>
                    <td colspan="2"><input type="text" required = "" name="judul" maxlength="50" size="30" value="<?php echo $nvl['judul']?>"></td>
                </tr>
                <tr>
                    <td>Tipe Novel</td>
                    <td>:</td>
                    <td colspan="2">
                        <input type="radio" required = "" name="tipe" value="Light Novel" size="30" required ="" value="<?php echo $nvl['tipe']?>"> Light Novel</br>
                        <input type="radio" required = "" name="tipe" value="Web Novel" size="30" required ="" value="<?php echo $nvl['tipe']?>"> Web Novel
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Volume</td>
                    <td>:</td>
                    <td colspan="2"><input type="number" required = "" name="volume" maxlength="50" size="30" value="<?php echo $nvl['volume']?>"></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="reset">Batal</button></td>
                    <td><button type="submit" name="create">Edit</button></td>
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