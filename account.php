<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>
<div id='wrapper'>
<div id='top'>
<div class='container'>
	<div class='profilePic'>
		<img src='models/site-templates/images/profile.jpg' height='160' width=160'/>
	</div>
	<div class='userName'>
		<h3>$loggedInUser->displayname</h3>
		<h2>#RiskEverything</h2>
	</div>
</div>
</div>
<div id='content' class='container'>
<div id='left-nav' class='col-md-2'>";
include("left-nav.php");
echo "
</div>
<div id='main' class='col-md-8'>
<h1>$loggedInUser->displayname</h1>
<!-- <h2>Account</h2> -->

Hey, $loggedInUser->displayname. This is an example secure page designed to demonstrate some of the basic features of UserCake. Just so you know, your title at the moment is $loggedInUser->title, and that can be changed in the admin panel. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
</div>

<div id='left-nav' class='col-md-2'>";
include("left-nav.php");
echo"
<div id='bottom'></div>
</div>
</body>
</html>";

?>
