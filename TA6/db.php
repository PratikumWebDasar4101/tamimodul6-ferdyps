<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ta6";

    //membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $db);

    //cek koneksi
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    // echo "Connected successfully";
?>