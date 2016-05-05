<?php 
require_once 'core/init.php';

if(Session::exists('home')){
	echo '<p>' . Session::flash('home') . '</p>';

}

$user = new User(); //
if($user->isloggedIn()) {
	echo 'Logged In';

 ?>

 	<p>
 		Hello 
		 	<a href="profile.php?user=<?php echo escape($user->data()->username); ?>">
			 	<?php 
			 		echo escape($user->data()->username); 
			 	?>
		 	</a>
 	</p>

 	<ul>
 		<li>
 			<a href="logout.php">Log out</a>
 		</li>
 		<li>
 			<a href="Update.php">Update details</a>
 		</li>
 		<li>
 			<a href="changepassword.php">Change password</a>
 		</li>
 	</ul>

 <?php 

 if($user->hasPermission('admin')) {
 	echo '<p>You are administrator!</p>';
 }
} else {

	echo '<p>
				You need to 
				<a href="login.php">
					log in
				</a>
				 or <a href="register.php">
					register
				 </a>
	 	</p>';
}



  ?>
