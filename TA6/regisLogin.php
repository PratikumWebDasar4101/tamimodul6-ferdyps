<?php
    require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>  
    <center>
    <h2>Sign Up</h2>
    <hr>
    <form method="post">
        Username : <input type="text" name="user"><br><br>
        Password : <input type="password" name="pass"><br><br>
        Nama : <input type="text" name="nama" maxlength="35"><br><br>
        NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" minlength="10" required><br><br>
        <input type="submit" name="signup" value="Submit">
    </form>
    </center>
</body>
</html>
<?php
    if (isset($_POST['user'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];

        $sql = "INSERT INTO datalogin(username, password) VALUES ('$user', '$pass')";
        mysqli_query($conn, $sql);

        $sql_id = "SELECT id FROM datalogin WHERE username = '$user'";
        $result = mysqli_query($conn, $sql_id);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];

        $sql_mahasiswa = "INSERT INTO mahasiswa(nama, nim, id) VALUES ('$nama', '$nim', '$id')";

        if (mysqli_query($conn, $sql_mahasiswa)) {
            echo "<center> Akun berhasil dibuat </center>";
        }
        else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
        mysqli_close($conn);
        echo "<center> <a href='login.php'>Login</a> </center>";
    }
?>