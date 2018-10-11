<?php
    require_once("db.php");
    session_start();
    $nim = $_SESSION['nim'];
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <center>
    <h2>Welcome</h2>
    <hr>
    <a href="editprofile.php">Edit Profil</a><br><br>
    <a href="posting.php">Posting</a><br><br>
    <a href="daftarposting.php">Daftar Posting</a><br><br>
    <a href="semuaposting.php">Semua Posting</a><br><br>
    <a href="login.php?logoutcuk=OKEHCUK">LOGOUT</a>
    <hr>
    <?php
        if(mysqli_num_rows($result) > 0 ){
    ?>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis kelamin</th>
            <th>Hobi</th>
            <th>Fakultas</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td><?php echo $row['nim']?></td>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['kelas']?></td>
            <td><?php echo $row['jenis_kelamin']?></td>
            <td><?php echo $row['hobi']?></td>
            <td><?php echo $row['fakultas']?></td>
            <td><?php echo $row['alamat']?></td>
        </tr>
    </table>
    <?php
    }
    ?>
    </center>
</body>
</html>