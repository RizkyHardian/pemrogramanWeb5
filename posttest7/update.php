<!-- <?php
require'connect.php';

$result = mysqli_query($conn, "SELECT * FROM novel");

$novel = [];

while ($row = mysqli_fetch_assoc($result)) {
    $novel[] = $row;
}

?> -->

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
    <h1><span>Update Novel</span></h1>
    
    <button><a href="create.php">Tambah Novel</a></button>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Judul Novel</th>
            <th>Tipe Novel</th>
            <th>Jumlah Volume</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($novel as $nvl):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $nvl["judul"]; ?></td>
            <td><?php echo $nvl["tipe"] ;?></td>
            <td><?php echo $nvl["volume"] ;?></td>
            <td><a href="edit.php?id=<?php echo $nvl["id"]; ?>">Edit</a> 
            | <a href="delete.php?id=<?php echo $nvl["id"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus data ini ?')">Hapus</a></td> 
        </tr>
        <?php $i++; endforeach;?>
    </table>

    <footer>
        <div class="foot">
            <p>@Copyright 2022 - Rizky Hardian</p>
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>