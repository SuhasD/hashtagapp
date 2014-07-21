<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

if (!securePage($_SERVER['PHP_SELF'])){die();}

//Links for logged in user
if(isUserLoggedIn()) {
	echo "
	<!-- <div class='btn-group-vertical'>
	<button type='button' class='btn btn-default'><a href='account.php'>Account Home</a></button>
	<button type='button' class='btn btn-default'><a href='user_settings.php'>User Settings</a></button>
	<button type='button' class='btn btn-default'><a href='logout.php'>Logout</a></button>
	</div> -->";
	
	//Links for permission level 2 (default admin)
	if ($loggedInUser->checkPermission(array(2))){
	echo "
	
	<!-- <div class='btn-group-vertical'>
	<button type='button' class='btn btn-default'><a href='admin_configuration.php'>Admin Configuration</a></button>
	<button type='button' class='btn btn-default'><a href='admin_users.php'>Admin Users</a></button>
	<button type='button' class='btn btn-default'><a href='admin_permissions.php'>Admin Permissions</a></button>
	<button type='button' class='btn btn-default'><a href='admin_pages.php'>Admin Pages</a></button>
	</div> -->

<!-- 	<ul>
	<li><a href='account.php'>Account Home</a></li>
	<li><a href='user_settings.php'>User Settings</a></li>
	<li><a href='logout.php'>Logout</a></li>
	<li><a href='admin_configuration.php'>Admin Configuration</a></li>
	<li><a href='admin_users.php'>Admin Users</a></li>
	<li><a href='admin_permissions.php'>Admin Permissions</a></li>
	<li><a href='admin_pages.php'>Admin Pages</a></li>
	</ul> -->";
	}
} 
//Links for users not logged in
else {
	echo "
	<ul>
	<li><a href='index.php'>Home</a></li>
	<li><a href='login.php'>Login</a></li>
	<li><a href='register.php'>Register</a></li>
	<li><a href='forgot-password.php'>Forgot Password</a></li>";
	if ($emailActivation)
	{
	echo "<li><a href='resend-activation.php'>Resend Activation Email</a></li>";
	}
	echo "</ul>";
}

?>
