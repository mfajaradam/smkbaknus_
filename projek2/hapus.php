<?php
    require "function.php";

    $id = $_GET["id"];

    if (hapus($_GET["id"]) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href='admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus');
                document.location.href='index.php';
            </script>
        ";
    }
?>