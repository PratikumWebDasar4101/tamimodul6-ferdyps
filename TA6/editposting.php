<?php
    require_once("db.php");
    session_start();
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROm dataposting WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
    include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Posting</title>
</head>
<body>
    <center>
    <h2>Posting</h2>
    <hr>
    <form method="post" enctype="multipart/form-data">
        <textarea name="posting" cols="80" rows="20"><?php echo $row['post'];?></textarea><br><br>
        Upload gambar : <input type="file" name="gambar" accept="image/*"><br><br>
        <input type="submit" name="submit" value="Post"><br><br>
        <a href="halamanawal.php">HOME</a>
    </form>
    </center>
</body>
</html>
<?php
    if (isset($_POST['posting'])) {
        $posting = $_POST['posting'];
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $dir = "folder/";
        $a = $dir.$gambar;
        $nim = $_SESSION['nim'];

        $max_post = explode(" ", $posting);
        if (count($max_post) >= 30) {
            $uploadgambar = move_uploaded_file($tmp, $a);
            if(!$uploadgambar){
                die("<center> Post Gagal! </center>");
            }

            $sql = "UPDATE dataposting SET post='$posting', foto='$a' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                echo "<center> Berhasil posting </center>";
            }
            else {
                echo "Error: " . $sql . "<br?" . mysqli_error($conn);
            }
            mysqli_close($conn);
        } else {
            ?>
            <script>
                alert("HARUS LEBIH DARI 30KATA WOI..");
            </script>
            <?php
        }
    }
?>