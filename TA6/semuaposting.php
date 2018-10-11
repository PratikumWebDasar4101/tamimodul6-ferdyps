<?php
    require_once("db.php");
    session_start();
    include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Postingan</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Fakultas</th>
            <th>Post</th>
            <th width="10%">Foto</th>
        </tr>
        <?php
            $sql = "SELECT nama, mahasiswa.nim, kelas, hobi, fakultas, post, foto FROM dataposting JOIN mahasiswa ON dataposting.nim=mahasiswa.nim";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td align="center"><?php echo $row['nama']?></td>
            <td align="center"><?php echo $row['nim']?></td>
            <td align="center"><?php echo $row['kelas']?></td>
            <td align="center"><?php echo $row['fakultas']?></td>
            <td align="center"><?php echo $row['post']?></td>
            <td align="center"><img src="<?php echo $row['foto']?>" width="100%"></td>
        </tr>
        <?php
			}
		}else {
			echo "0 Result";
		}
		mysqli_close($conn);
		?>
    </table>
    <center><a href="halamanawal.php">HOME</a></center>
</body>
</html>