<?php
    session_start();
    if (isset($_SESSION['UDAHKEK'])) {
        header("Location: halamanawal.php");
    }
    if (isset($_GET['logoutcuk'])) {
        session_destroy();
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h2>Login</h2>
    <hr>
    <form method="post">
        Username : <input type="text" name="user"><br><br>
        Password : <input type="password" name="pass"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
        <a href="regisLogin.php">Belum Registrasi</a>
    </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['user'])){
    require_once("db.php");
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = mysqli_query($conn, "SELECT * FROM datalogin WHERE username = '$user' AND password = '$pass'");
    $row = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql);
    $id = $row['id'];

    if ($num != 0) {
        $query = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE id = '$id'");
        $data = mysqli_fetch_assoc($query);
        $_SESSION['nim'] = $data['nim'];
        $_SESSION['UDAHKEK'] = "IYA CUK";
        header("location: halamanawal.php");
    }else{
        header("Location: login.php");
        echo "gagal login";
    }
    mysqli_close($conn);
}
?>