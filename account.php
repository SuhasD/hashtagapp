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

<div id='content' class='container account-page-wrap'>
<div id='left-nav' class='col-md-2 no-left-padding'>
	<div class='profilePic'>
		<img src='models/site-templates/images/profile.jpg' height='160' width=160'/>
	</div>
	
	<div class='userName'>
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
              </div>
	";
include("left-nav.php");
echo "
</div>
<div id='main' class='col-md-8 account-wrap no-left-padding'>
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
		<input type='text' class='form-control' id='status' placeholder='Enter Status...'>
		<span class='input-group-addon glyphicon glyphicon-pencil'></span>
	</div>
	</div>

	<div class='col-md-1 left-border'>
		<label for='phone'>Phone: </label>
	</div>
	<div class='col-md-4'>
	<div class='input-group'>
		<input type='text' class='form-control' id='phone' placeholder='Enter Phone...'>
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

<div class='col-md-2'>
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
	
	<div class='btn-group-vertical'>
	<button type='button' class='btn btn-default'><a href='admin_configuration.php'>Admin Configuration</a></button>
	<button type='button' class='btn btn-default'><a href='admin_users.php'>Admin Users</a></button>
	<button type='button' class='btn btn-default'><a href='admin_permissions.php'>Admin Permissions</a></button>
	<button type='button' class='btn btn-default'><a href='admin_pages.php'>Admin Pages</a></button>
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
