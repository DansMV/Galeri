<?php
  session_start();
  if(!isset($_SESSION['userid'])){
    header("location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Edit Album</title>
  <link rel="stylesheet" href="css/edita.css">
</head>
<body>
  <ul>
  <b>
      <li><a href="index.php">Home</a></li>
      <li><a href="album.php">Album</a></li>
      <li><a href="foto.php">Foto</a></li>
      <li><a href="logout.php">Logout</a></li>
    </b>
    </ul>

  <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>

  <form action="update_album.php" method="post">
    <?php
      include'koneksi.php';
      $albumid=$_GET['albumid'];
      $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
      while($data=mysqli_fetch_array($sql)){
    ?>
    <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
    <table>
      <tr>
        <td>Nama Album</td>
        <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Update"></td>
      </tr>
    </table>
    <?php
    }
    ?>
  </form>

  <table border="1" cellpadding=5 cellspacing=0ff> 
    <tr>
      <th>ID</th>
      <th>Nama Album</th>
      <th>Deskripsi</th>
      <th>Tanggal Dibuat</th>
      <th>Aksi</th>
      <?php
        include'koneksi.php';
        $userid=$_SESSION['userid'];
        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
        while($data=mysqli_fetch_array($sql)){
      ?>
        <tr>
          <td><?=$data['albumid']?></td>
          <td><?=$data['namaalbum']?></td>
          <td><?=$data['deskripsi']?></td>
          <td><?=$data['tanggaldibuat']?></td>
          <td>
            <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
            <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
          </td>
        </tr>   
      <?php
      }
      ?>
    </tr>
  </table>
</body>
</html>