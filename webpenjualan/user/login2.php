<?php 

if (isset($_POST["login"]))
{
  if ( $_POST["username"] == "admin" && $_POST["password"] == "123") 
  	{
    header("Location : index.php?");
    exit;
  	} else 
  	{
    $error = true;
  	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Toko Online</title>
</head>
<body>
	<h1>Login Toko Online</h1>
	 <?php if (isset($error)) { ?>
          <p style="color: red; font-style: italic; ">username / password salah</p>
        <?php } ?>
	<ul>
<form action="" method="post">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="sumbit" name="login">Login</button>
		</li>
</form>
	</ul>
</body>
</html>