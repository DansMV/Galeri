<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Halaman Login</title>
</head>
<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="proses_login.php" method="post">
    <h3><b>Login Here</b></h3>
    <table>
        <tr>
            <td></td>
            <td><input type="text" name="username" placeholder="Username"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login" id="button"></td>
        </tr>
        <tr>
            <td></td>
            <td id="register">
                Don't have an account? <a href="register.php">Sign Up</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>