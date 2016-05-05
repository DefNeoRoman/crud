<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add</title>
</head>
<body>
	<form method="post" action="add.php">

	

	<p>username</p>
	<input type="text" name="username">

	<p>name</p>
	<input type="text" name="name">
	<p>password</p>
	<input type="text" name="password">
		
<input type="submit" name="add" value="добавить"/>

<a href="home.php">назад</a>
	</form>

<?php 
include_once ("db.php");

if(isset($_POST['add']))

 {

$password = $_POST['password'];

$username = strip_tags(trim($_POST['username']));

$name = strip_tags(trim($_POST['name']));

$insert = mysql_query("INSERT INTO users(name, username, password) 
			  VALUES ('$name', '$username', '$password')");



mysql_close();

echo "Юзер успешно добавлен";



}

?>
</body>
</html>