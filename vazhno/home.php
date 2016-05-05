<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Снова</title>
</head>
<body>
<a href="add.php">Добавить Юзера</a>
	<?php 

	require_once "db.php";

	$select = mysql_query("SELECT * FROM users");


	mysql_close();

	$row = mysql_fetch_array($select);

	while($row = mysql_fetch_array($select))
	{?>

		<h1><?php echo $row['name']."<br>"; ?></h1>
		<p><?php echo $row['username']; ?></p>
		<p><?php echo $row['id']."<br>";?></p>
		<a href="edit.php?id=<?php echo $row['id']?>">редактировать юзера</a>
		<a href="delete.php?id=<?php echo $row['id']?>">Удалить юзера</a>
		<hr>

	<?php  } ?>

	
	
</body>
</html>