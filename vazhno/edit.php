
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>редактирование</title>
 </head>
 <body>
 	

	<?php 

include_once "db.php";

 $id = $_GET['id'];

$edit = mysql_query("SELECT * FROM users WHERE id='$id'
	");



$row = mysql_fetch_assoc($edit);

if(isset($_POST['save'])) {

$password = $_POST['password'];

$username = strip_tags(trim($_POST['username']));

$name = strip_tags(trim($_POST['name']));

mysql_query("UPDATE users SET name='$name', username='$username', password='$password' WHERE id='$id'");
mysql_close();


}


	 ?>
<form method="post" action="edit.php?id=<?php echo $id ?>">
	<p>username</p>
	<input type="text" name="username" value="<?php echo $row['username'] ?>">

	<p>name</p>
	<input type="text" name="name" value="<?php echo $row['name'] ?>">
	<p>password</p>
	<input type="text" name="password" value="<?php echo $row['password'] ?>">
	<input type="submit" name="save" value="Cохранить"/>

     <a href="home.php">назад</a>
	</form>
 </body>
 </html>
