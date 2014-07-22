<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/account_header.php");

echo "
<body>
<div id='wrapper'>
<div id='content' class='container account-page-wrap'>	";
include("left-nav-profile.php");
echo "
</div>
<div id='main' class='col-md-7 account-wrap no-left-padding'>
<!-- <h1>$loggedInUser->displayname</h1>
<h2>Account</h2> -->
<div class='bs-example'>
    <div class='well'>
<div class='details'>
	<div class='col-md-1'>
		<label for='status'>Status: </label>
	</div>
	
	<div class='col-md-4'>
	<div class='input-group'>
		<input type='text' class='form-control' id='status' placeholder='#RiskEverything'>
		<span class='input-group-addon glyphicon glyphicon-pencil'></span>
	</div>
	</div>

	<div class='col-md-1 left-border'>
		<label for='phone'>Phone: </label>
	</div>
	<div class='col-md-4'>
	<div class='input-group'>
		<input type='text' class='form-control' id='phone' placeholder='9986242442'>
		<span class='input-group-addon glyphicon glyphicon-pencil'></span>
	</div>
	</div>
	<div class='clearfix'></div>
</div>
</div>
</div>


  
  <div class='more-about'>
	<h3> About  $loggedInUser->displayname</h3>
	<hr />
	Hey, $loggedInUser->displayname. This section will be a brief description about yourself, or maybe a review about a restaurant. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
  </div>
  
  <div class='recent-photos'>
  	<h3>$loggedInUser->displayname's Recent Photos</h3>
	<hr />
	
	<div class='preview-photos-row'>
		<div class='col-md-3'>
			<img src='models/site-templates/images/image1.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image3.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image3.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image1.png' class='img-responsive'/>
		</div>
	</div>
	<div class='clearfix'></div>
  </div> 

  <div class='recent-photos'>
  	<h3>$loggedInUser->displayname's Recent Places</h3>
	<hr />
	
	<div class='preview-photos-row'>
		<div class='col-md-3'>
			<img src='models/site-templates/images/image1.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image3.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image3.png' class='img-responsive'/>
		</div>		
		<div class='col-md-3'>
			<img src='models/site-templates/images/image1.png' class='img-responsive'/>
		</div>
	</div>
	<div class='clearfix'></div>
  </div>

</div>

<div class='col-md-3'>

	<div class='who-to-follow'>
		<h3>Similar People</h3>
		<hr />
		<ul class='people-suggestion-list'>
			<li> 
				<div class='picture-container'>
					<img src='models/site-templates/images/manu.jpg' width='48' height='48'/>
				</div>
				<div class='profile-snapshot'>
					<h3> Manu Karthik </h3>
					<p> <span class='blue-hash'>#</span>Cricket, <span class='blue-hash'>#</span>iOS8, <span class='blue-hash'>#</span>iPad </p>
					<a href='javascript:void(0)' class='add-friend-link'>Add Friend</a>
				</div>
				<div class='clearfix'></div>
			</li>		

			<li> 
				<div class='picture-container'>
					<img src='models/site-templates/images/kiran.jpg' width='48' height='48'/>
				</div>
				<div class='profile-snapshot'>
					<h3> Kiran B K </h3>
					<p> <span class='blue-hash'>#</span>Football, <span class='blue-hash'>#</span>Movies,  <span class='blue-hash'>#</span>Programmer </p>
					<a href='javascript:void(0)' class='add-friend-link'>Add Friend</a>
				</div>
				<div class='clearfix'></div>
			</li>
		</ul>
	</div>
	
		<div class='popular-tags-right'>
		<h3>Trending Now</h3>
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
	</div>";
	
	//Links for logged in user
if(isUserLoggedIn()) {
		
	//Links for permission level 2 (default admin)
	if ($loggedInUser->checkPermission(array(2))){
	echo "
	
	<div class='admin-panel'>
 	<h3>Admin Panel</h3>
	<hr />
	<ul>
	<li><a href='admin_configuration.php'>Admin Configuration</a></li>
	<li><a href='admin_users.php'>Admin Users</a></li>
	<li><a href='admin_permissions.php'>Admin Permissions</a></li>
	<li><a href='admin_pages.php'>Admin Pages</a></li>
	</ul>
	</div>
	
	<!-- <hr>
	<div class='side-footer'>
		<span class='side-footer-link>About</span>
		<span class='side-footer-link>Privacy</span>
		<span class='side-footer-link>Feedback</span>
	</div> -->
	
	";
	}
} 

echo"
</div>
</div>
";

echo"
<div id='bottom'></div>
</body>
</html>";

?>
