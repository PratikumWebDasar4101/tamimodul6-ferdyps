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
            <th>Post</th>
            <th width="10%">Foto</th>
            <th width="10%"></th>
        </tr>
        <?php
            $nim = $_SESSION['nim'];
            $sql = "SELECT * FROM dataposting WHERE nim='$nim'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['post']?></td>
            <td align="center"><img src="<?php echo $row['foto']?>" width="100%"></td>
            <td><center><a href="editposting.php?id=<?php echo $row['id']?>">Edit</a></center></td>
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