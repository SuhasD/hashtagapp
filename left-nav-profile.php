<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

if (!securePage($_SERVER['PHP_SELF'])){die();}

//Links for logged in user
if(isUserLoggedIn()) {
	echo "<div id='left-nav' class='col-md-2 no-left-padding'>
	<div class='profilePic'>
		<img src='models/site-templates/images/profile.jpg' height='160' width=160'/>
	</div>
	
	<div class='profile-username'>
		<h3>$loggedInUser->displayname</h3>
		<h2>#RiskEverything</h2>
	</div>
	
	
	<div class='popular-tags'>
		<h3>Known For</h3>
		<hr />
		<ul>
			<li><a href='#'>#AccountHome</a></li>
			<li><a href='#'>#UserSettings</a></li>
			<li><a href='#'>#Logout</a></li>
			<li><a href='#'>#AdminConfiguration</a></li>
			<li><a href='#'>#AdminUsers</a></li>
			<li><a href='#'>#AdminPermissions</a></li>
			<li><a href='#'>#AdminPages</a></li>
		</ul>
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
   </div>";
	
	//Links for permission level 2 (default admin)
	if ($loggedInUser->checkPermission(array(2))){
	echo "";
	}
} 
//Links for users not logged in
else {
	echo "";
}

?>
