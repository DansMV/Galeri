<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <title>Halaman Registrasi</title>
</head>
<body>
  <h1>Halaman Registrasi</h1>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="proses_register.php" method="post">
  <h3></b>Sign Up<b></h3>
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="Username" id="a"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="Password"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" placeholder="Email"></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="namalengkap" placeholder="Nama Lengkap"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" placeholder="Alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Register" id="button"></td>
      </tr>
    </table>
    <div id="login">
      Have an account? <a href="login.php">Login</a>
  </div>
  </form>
</body>
</html>