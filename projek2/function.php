<?php
    $conn = mysqli_connect("localhost","root","","siswa");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; 
        }
        return $rows;
    }


        // tambah data
        function tambah($data) {
            global $conn;
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $subjects = htmlspecialchars($data["subjects"]);
            $messages = htmlspecialchars($data["messages"]);
            
            $query = "INSERT INTO murid VALUES ('','$nama','$email','$subjects','$messages')";
    
            mysqli_query($conn,$query);
    
            return mysqli_affected_rows($conn);
    
        }


        // hapus data
        function hapus($id) {
            global $conn;
            mysqli_query($conn,"DELETE FROM murid WHERE id = $id");
            return mysqli_affected_rows($conn);
    }

    // ubah data
    function ubah($data) {
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $subjects = htmlspecialchars($data["subjects"]);
        $messages = htmlspecialchars($data["messages"]);
        
        $query = "UPDATE murid SET
                    id = '$id',
                    nama = '$nama',
                    email = '$email',
                    subjects = '$subjects',
                    messages = '$messages'
                    WHERE id = $id";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

?>

