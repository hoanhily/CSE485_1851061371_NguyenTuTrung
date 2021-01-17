<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="indexv.php" class="btn btn-success pull-right">Xem không cần đăng nhập </a>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>

</form>
</div>
</body>
</html>