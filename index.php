<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Halaman Landing</title>
</head>
<body>
  <?php
    session_start();
    if(!isset($_SESSION['userid'])){
      header("location:login.php");
  ?>
    <ul>
      <li><a href="register.php">Register</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  <?php
    }else{
  ?>
    <ul>
      <li><b><a href="index.php">Home</a></b></li>
      <li><b><a href="album.php">Album</a></b></li>
      <li><b><a href="foto.php">Foto</a></b></li>
      <li><b><a href="logout.php">Logout</a></b></li>
    </ul>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
  <?php
    }
  ?>
  

  <table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Foto</th>
      <th>Uploader</th>
      <th>Jumlah Like</th>
      <th>Aksi</th>
    </tr>
    <?php
      include "koneksi.php";
      $sql=mysqli_query($conn,"select * from  foto,user where foto.userid=user.userid");
      while($data=mysqli_fetch_array($sql)){
    ?>
      <tr>
        <td><?=$data['fotoid']?></td>
        <td><?=$data['judulfoto']?></td>
        <td><?=$data['deskripsifoto']?></td>
        <td><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
        <td><?=$data['namalengkap']?></td>
        <td>
          <?php
            $fotoid=$data['fotoid'];
            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
            echo mysqli_num_rows($sql2);
          ?>
        </td>
        <td>
          <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
          <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
        </td>
      </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>