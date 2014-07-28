<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: account.php"); die(); }

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$email = trim($_POST["email"]);
	$username = trim($_POST["username"]);
	$displayname = trim($_POST["displayname"]);
	$password = trim($_POST["password"]);
	$confirm_pass = trim($_POST["passwordc"]);
	$captcha = md5($_POST["captcha"]);
	
	
	if ($captcha != $_SESSION['captcha'])
	{
		$errors[] = lang("CAPTCHA_FAIL");
	}
	if(minMaxRange(5,25,$username))
	{
		$errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
		
	}
	if(!ctype_alnum($username)){
		$errors[] = lang("ACCOUNT_USER_INVALID_CHARACTERS");
	}
	if(minMaxRange(5,25,$displayname))
	{
		$errors[] = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(5,25));
	}
	if(!ctype_alnum($displayname)){
		$errors[] = lang("ACCOUNT_DISPLAY_INVALID_CHARACTERS");
	}
	if(minMaxRange(8,50,$password) && minMaxRange(8,50,$confirm_pass))
	{
		$errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
	}
	else if($password != $confirm_pass)
	{
		$errors[] = lang("ACCOUNT_PASS_MISMATCH");
	}
	if(!isValidEmail($email))
	{
		$errors[] = lang("ACCOUNT_INVALID_EMAIL");
	}
	//End data validation
	if(count($errors) == 0)
	{	
		//Construct a user object
		$user = new User($username,$displayname,$password,$email);
		
		//Checking this flag tells us whether there were any errors such as possible data duplication occured
		if(!$user->status)
		{
			if($user->username_taken) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
			if($user->displayname_taken) $errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));
			if($user->email_taken) 	  $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
		}
		else
		{
			//Attempt to add the user to the database, carry out finishing  tasks like emailing the user (if required)
			if(!$user->userCakeAddUser())
			{
				if($user->mail_failure) $errors[] = lang("MAIL_ERROR");
				if($user->sql_failure)  $errors[] = lang("SQL_ERROR");
			}
		}
	}
	if(count($errors) == 0) {
		$successes[] = $user->success;
	}
}

require_once("models/login_header.php");
echo "
<body style='background:black'>
<div id='wrapper'>
<div id='content'>
<div id='slideit'></div>";

echo "
<div id='main'>
<div class='container register-page-wrapper'>";

echo "
<div class='col-md-4 no-left-padding'>
<div id='regbox' class='loginbox'>
<form name='newUser' action='".$_SERVER['PHP_SELF']."' method='post'>
<h2><strong>New to #TAG?</strong> Sign up</h2>
 <div class='form-group'>
    <input type='text' class='form-control' placeholder='Username' name='username' id='username'>
  </div>
  
 <div class='form-group'>
    <input type='text' class='form-control' placeholder='Display Name' name='displayname' id='display-name'>
  </div>
  
 <div class='form-group'>
    <input type='password' class='form-control' placeholder='Password' name='password' id='password'>
  </div>
 
 <div class='form-group'>
    <input type='password' class='form-control' placeholder='Confirm Password' name='passwordc' id='passwordc'>
  </div>
  
   <div class='form-group'>
    <input type='text' class='form-control' placeholder='E-mail' name='email' id='email'>
  </div>

 <div class='form-group'>
    <img src='models/captcha.php' style='float:left;'><input type='text' class='form-control' placeholder='Enter Security Code' name='captcha' id='captcha'>
  </div>

   <div class='form-group'>
    <button type='submit' class='btn btn-success'>Register</button>
	<a href='forgot-password.php' class='forgotPwdLink'>Resend Activation Mail</a>
  </div>
<label>&nbsp;

</p>

</form>
</div>
</div>



<!-- TITLE On Login Page -->
<div class='col-md-8 welcomeDiv'>
<div class='login-textwrapper'>";
echo resultBlock($errors,$successes);

echo"

<h1>WTH is <b class='blue-hash'>#</b>ContextNetwork?</h1>
<p>Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>

<div class='background-companion-tweets'>
    <div class='usertag' data-photo='https://abs.twimg.com/a/1405320601/img/t1/front_page/exp_wc2014_gen_laurenlemon.jpg'>
      <p class='text'>
        <a href='/laurenlemon/status/470403949980549121' class='tweet-text'>Okay, okay, okay! #Sasquatch2014 </a>
      </p>
      <p class='username'>
        <a href='/laurenlemon/status/470403949980549121' class='tweet-username'>Tweet and photo by @<span>laurenlemon</span></a>
      </p>
      <a href='/laurenlemon/status/470403949980549121' class='time tweet-time'>8:20 PM - 24 May 2014</a>
    </div>
    <div class='companion-tweet' data-photo='https://abs.twimg.com/a/1405320601/img/t1/front_page/exp_wc2014_wc_nike_br.jpg' style='display: none;'>
      <p class='text'>
        <a href='/nikefootball/status/468919354617516034' class='tweet-text'>Pressure shapes legends. #riskeverything</a>
      </p>
      <p class='username'>
        <a href='/nikefootball/status/468919354617516034' class='tweet-username'>Tweet and photo by @<span>nikefootball</span></a>
      </p>
      <a href='/nikefootball/status/468919354617516034' class='time tweet-time'>6:01 PM - 20 May 2014</a>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>";
?>

<script src="models/site-templates/js/jquery.min.js"></script>
<script type="text/javascript">
		var winHeight = $( window ).height() ;
		var boxHeight = $( window ).height() - 83;
   		var i =0; 
		var images = ['models/site-templates/images/image1.png','models/site-templates/images/image4.png','models/site-templates/images/image4.png'];
		var image = $('#slideit');
		image.css('background-image', 'url(models/site-templates/images/image4.png)');
		image.css('height', winHeight+"px");
		$('.register-page-wrapper').css('margin-top', - boxHeight+"px");
		setInterval(function(){			
			image.fadeOut(500, function () {
			image.css('background-image', 'url(' + images [i++] +')');
			image.fadeIn(500);
			});
			if(i == images.length)
				i = 0;
		}, 5500);  
		
		$('.navbar-toggle').click(function(){
			$('.navbar-collapse').toggle();
		})
</script>
