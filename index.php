<?php
include('login.php'); // Includes Login Script

?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LoginIN</title>
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/signin.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
<header id="top">
<center><h1>Reporter Management System</h1></center>
<div class="container">

<form class="form-signin" role="form"  action ="" method="post">
<h2 class="form-signin-heading">Please sign in</h2>

<input type="email" name="username" class="form-control" placeholder="Email address" required autofocus>
<input type="password" name="password" class="form-control" placeholder="Password" required>
<br>
<div class="checkbox">
<label>
<input type="checkbox" value="remember" name ="remember">Remember me
            <br>
</label>
</div>
<input name="submit"button class="btn btn-lg btn-primary btn-block" type="submit" value=" Sign in">
<span><?php echo $error; ?></span>
<br>
<a href="">Forgot your password?</a> 
</form>      
</body>
</html>