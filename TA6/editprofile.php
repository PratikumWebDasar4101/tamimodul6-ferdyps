<?php
    require_once("db.php");
    session_start();
    $nim = $_SESSION['nim'];
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $row = mysqli_fetch_assoc($sql);
    include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <center>
    <h2>Profil</h2>
    <hr>
    <form method="post">
    NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" minlength="10" value="<?php echo $row['nim'];?>" readonly disabled><br><br>
    Nama : <input type="text" name="nama" maxlength="35" value="<?php echo $row['nama'];?>" required><br><br>
    Kelas : <br>
    <input type="radio" name="kelas" <?php if($row['kelas'] == "D3MI-41-01") { ?> checked <?php } ?> value="D3MI-41-01" required>D3MI-41-01 <br>
    <input type="radio" name="kelas" <?php if($row['kelas'] == "D3MI-41-02") { ?> checked <?php } ?> value="D3MI-41-02" required>D3MI-41-02 <br>
    <input type="radio" name="kelas" <?php if($row['kelas'] == "D3MI-41-03") { ?> checked <?php } ?> value="D3MI-41-03" required>D3MI-41-03 <br>
    <input type="radio" name="kelas" <?php if($row['kelas'] == "D3MI-41-04") { ?> checked <?php } ?> value="D3MI-41-04" required>D3MI-41-04 <br><br>
    Jenis Kelamin : <br>
    <input type="radio" name="gender" <?php if($row['jenis_kelamin'] == "laki-laki") { ?> checked <?php } ?>value="laki-laki" required>Laki-laki <br>
    <input type="radio" name="gender" <?php if($row['jenis_kelamin'] == "perempuan") { ?> checked <?php } ?>value="perempuan" required>Perempuan <br><br>
    Hobi : <br>
    <input type="checkbox" name="hobi[]" value="makan">Makan <br>
    <input type="checkbox" name="hobi[]" value="tidur">Tidur <br>
    <input type="checkbox" name="hobi[]" value="main">Main <br><br>
    Fakultas : 
    <select name="fakultas" required>
        <option <?php if($row['fakultas'] == "FIT") { ?> selected <?php } ?> value="FIT">FIT</option>
        <option <?php if($row['fakultas'] == "FEB") { ?> selected <?php } ?> value="FEB">FEB</option>
        <option <?php if($row['fakultas'] == "FIK") { ?> selected <?php } ?> value="FIK">FIK</option>
        <option <?php if($row['fakultas'] == "FTE") { ?> selected <?php } ?> value="FTE">FTE</option>
        <option <?php if($row['fakultas'] == "FIF") { ?> selected <?php } ?> value="FIF">FIF</option>
        <option <?php if($row['fakultas'] == "FRI") { ?> selected <?php } ?> value="FRI">FRI</option>
        <option <?php if($row['fakultas'] == "FKB") { ?> selected <?php } ?> value="FKB">FKB</option>
    </select>
    <br><br>
    alamat : <br>
    <textarea name="alamat" rows="5" required><?php echo $row['alamat'];?></textarea><br><br>
    <input type="submit" name="submit" value="Submit"><br><br>
    <a href="halamanawal.php">HOME</a>
    </form> 
    </center>   
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $gender = $_POST['gender'];
        $hobi = $_POST['hobi'];
        $fakultas = $_POST['fakultas'];
        $alamat = $_POST['alamat'];

        $list_hobi = implode(", ", $hobi);
    
        $sql = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', jenis_kelamin = '$gender', hobi = '$list_hobi', fakultas = '$fakultas', alamat = '$alamat' WHERE nim = '$nim'";
    
        if (mysqli_query($conn, $sql)) {
            echo "<center> Data berhasil diedit </center>";
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>