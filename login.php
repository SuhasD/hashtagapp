<?php session_start(); ?><?php
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
	$username = sanitize(trim($_POST["username"]));
	$password = trim($_POST["password"]);
	
	//Perform some validation
	//Feel free to edit / change as required
	if($username == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_USERNAME");
	}
	if($password == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
	}

	if(count($errors) == 0)
	{
		//A security note here, never tell the user which credential was incorrect
		if(!usernameExists($username))
		{
			$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
		}
		else
		{
			$userdetails = fetchUserDetails($username);
			//See if the user's account is activated
			if($userdetails["active"]==0)
			{
				$errors[] = lang("ACCOUNT_INACTIVE");
			}
			else
			{
				//Hash the password and use the salt from the database to compare the password.
				$entered_pass = generateHash($password,$userdetails["password"]);
				
				if($entered_pass != $userdetails["password"])
				{
					//Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
					$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
				}
				else
				{
					//Passwords match! we're good to go'
					
					//Construct a new logged in user object
					//Transfer some db data to the session object
					$loggedInUser = new loggedInUser();
					$loggedInUser->email = $userdetails["email"];
					$loggedInUser->user_id = $userdetails["id"];
					$loggedInUser->hash_pw = $userdetails["password"];
					$loggedInUser->title = $userdetails["title"];
					$loggedInUser->displayname = $userdetails["display_name"];
					$loggedInUser->username = $userdetails["user_name"];
					
					//Update last sign in
					$loggedInUser->updateLastSignIn();
					$_SESSION["userCakeUser"] = $loggedInUser;
					
					//Redirect to user account page
					header("Location: account.php");
					die();
				}
			}
		}
	}
}

require_once("models/login_header.php");

echo "
<body style='background:black'>
<div id='wrapper'>
<div id='content'>

<div id='slideit'></div>
<div class='loginbox'>
<div class='container'>

<div id='main'>";

echo "
<div class='col-md-3 no-left-padding'>
<div id='regbox'>";
echo resultBlock($errors,$successes);
echo "
<form name='login' action='".$_SERVER['PHP_SELF']."' method='post'>
<h2><strong>Login to #TAG</strong> or <a href='register.php' class='underline'>Sign up</a></h2>

 <div class='form-group'>
    <input type='text' class='form-control' placeholder='Username' name='username' >
  </div>

  <div class='form-group'>
    <input type='password' class='form-control' placeholder='Username' name='password' >
  </div>
  
  <div class='form-group'>
    <button type='submit' class='btn btn-success'>Login</button>
	<a href='forgot-password.php' class='forgotPwdLink'>Forgot Password?</a>
  </div>
</form>

</div> <!-- End or Regbox -->

</div> <!-- End or Regbox -->


<!-- TITLE On Login Page -->
<div class='col-md-8 welcomeDiv'>
<div class='login-textwrapper'>
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

<div class='platform-badge-container'>
                        <a class='platform-badge' onclick='_gaq.push(['_trackPageview', '/download/ios/']); _gaq.push(function(){ window.setTimeout(function(){ window.location.href = '/download/ios/'; }, 450)}); return false;' href='/download/ios/'>
                            <img src='//d36xtkk24g8jdx.cloudfront.net/bluebar/52313f5/images/public/badge_ios.png' alt='Available on the App Store'>
                        </a>
                        <a class='platform-badge' onclick='_gaq.push(['_trackPageview', '/download/android/']); _gaq.push(function(){ window.setTimeout(function(){ window.location.href = '/download/android/'; }, 450)}); return false;' href='/download/android/'>
                            <img src='//d36xtkk24g8jdx.cloudfront.net/bluebar/52313f5/images/public/badge_android.png' alt='Available on Google Play'>
                        </a>
                    </div>
</div>
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
		var winHeight = $( window ).height() - 25;
		var boxHeight = $( window ).height() - 100;
   		var i =0; 
		var images = ['models/site-templates/images/image1.png','models/site-templates/images/image4.png','models/site-templates/images/image4.png'];
		var image = $('#slideit');
		image.css('background-image', 'url(models/site-templates/images/image4.png)');
		image.css('height', winHeight+"px");
		$('.loginbox').css('margin-top', - boxHeight+"px");
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
