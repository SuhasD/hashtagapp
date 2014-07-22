<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

if (!securePage($_SERVER['PHP_SELF'])){die();}

//Links for logged in user
if(isUserLoggedIn()) {
	echo "";
	
	//Links for permission level 2 (default admin)
	if ($loggedInUser->checkPermission(array(2))){
	echo "<div id='left-nav' class='col-md-2 no-left-padding'>
	<div class='profilePic'>
		<img src='models/site-templates/images/profile.jpg' height='160' width=160'/>
	</div>
	
	<div class='profile-username'>
		<h3>$loggedInUser->displayname</h3>
		<h2>#RiskEverything</h2>
	</div>
	
	
	<div class='popular-tags'>
		<div class='admin-panel'>
		<h3>Admin Panel</h3>
		<hr />
			<ul>
				<li><a href='account.php'>Home</a></li>
				<li><a href='admin_configuration.php'>Admin Configuration</a></li>
				<li><a href='admin_users.php'>Admin Users</a></li>
				<li><a href='admin_permissions.php'>Admin Permissions</a></li>
				<li><a href='admin_pages.php'>Admin Pages</a></li>
			</ul>
		</div>
	</div>
	
	<div class='btn-group'>
        <button class='btn btn-warning customBtn dropdown-toggle' data-toggle='dropdown'>Report Lost Tag <span class='caret'></span></button>
			<ul class='dropdown-menu'>
			  <li><a href='#'>Action</a></li>
			  <li><a href='#'>Another action</a></li>
			  <li><a href='#'>Something else here</a></li>
			  <li class='divider'></li>
			  <li><a href='#'>Separated link</a></li>
			</ul>
   </div>
   ";
	}
} 
//Links for users not logged in
else {
	echo "";
}

?>
