<?php 
require 'connect.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM novel WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'update.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'delete.php';
        </script>
    ";
}
?>