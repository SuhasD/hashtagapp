<?php 
/*
UserCake Version: 2.0.1
http://usercake.com
*/
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Get token param
if(isset($_GET["token"]))
{	
	$token = $_GET["token"];	
	if(!isset($token))
	{
		$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
	}
	else if(!validateActivationToken($token)) //Check for a valid token. Must exist and active must be = 0
	{
		$errors[] = lang("ACCOUNT_TOKEN_NOT_FOUND");
	}
	else
	{
		//Activate the users account
		if(!setUserActive($token))
		{
			$errors[] = lang("SQL_ERROR");
		}
	}
}
else
{
	$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
}

if(count($errors) == 0) {
	$successes[] = lang("ACCOUNT_ACTIVATION_COMPLETE");
}

require_once("models/account_header.php");

echo "
<body>
<div id='wrapper'>
<div id='content' class='container account-page-wrap'>	
<div id='content'>

<div id='left-nav'>";

include("left-nav.php");

echo "
</div>
<div id='main' class='col-md-7 account-wrap no-left-padding'>";

echo resultBlock($errors,$successes);

echo "
</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>
