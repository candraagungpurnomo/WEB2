<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
</head>
<body>
 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
   echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
   echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
   echo "Anda harus login untuk mengakses halaman admin";
  }
 }
 ?>
 <div id="container">
   <div class="login">
    <h1>Login</h1>
    <p>Masuk Terlebih Dahulu Ya!</p>
  <form action="auth.php" method="post" onSubmit="return validasi()">
   <div>
    <label>Username:</label>
    <input type="text" name="username" id="username" />
   </div>
   <div>
    <label>Password:</label>
    <input type="password" name="password" id="password" />
   </div>  
   <div>
    <input type="submit" value="Login" class="tombol">
   </div>
  </form>
 </div>
 </div>
<script type="text/javascript" src="login.js"></script>
</body>
</html>