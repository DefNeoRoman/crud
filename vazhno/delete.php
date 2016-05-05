<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
	<?php 
require_once "db.php";

$id = $_GET['id'];

mysql_query("DELETE FROM users WHERE id='$id'
	");

mysql_close();

echo "Юзер успешно удален";

 ?>
</body>
</html>


