<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/login_header.php");

echo "
<body>
<div id='wrapper'>

<div id='content'>
<div id='left-nav' style='display:none'>";
include("left-nav.php");

echo "
</div>
<div id='main'>
<div id='carousel-example-generic window-height' class='carousel slide' data-ride='carousel'>
  <!-- Indicators -->
 <!-- <ol class='carousel-indicators'>
    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class='carousel-inner window-height'>
    <div class='item active window-height'>
      <img src='models/site-templates/images/bg1.jpg' class='window-height' alt='...'>
	  
      <div class='carousel-caption col-md-7'>
        <p class='hero-content'>
          <a class='tweet-permalink' href='#' target='_blank'>Sign up & get a FREE beta <span class='blue-hash'>#</span>Tag. Never lose your keys again, forever! Join the <span class='blue-hash'>#</span>ContextNetwork Revolution. </a>
        </p>
		<p class='left-align'>
		<a class=' tweet-author' href='#'>
            Tweet by @lukejamesbgn          
		</a>
		</p>
		<p class='left-align'> <a class='tweet-permalink' href='#' target='_blank'>9:38 PM - 12 Sep 2013</a></p>
		
		<div class='cta-buttons left-align'>
          <div class='button-wrapper'>
			<button class='btn btn-info'>Try #TAG </button>
		  </div>
		</div>
      </div>
	  
	  <div class='carousel-caption col-md-3' style='float: right;position: absolute;left: auto !important;right: 11%!important;'>
	  <div id='regbox'>
		<form name='login' action='".$_SERVER['PHP_SELF']."' method='post'>
		<h2><strong>Login to #TAG</strong> or <a href='register.php' class='underline'>Sign up</a></h2>

		 <div class='form-group'>
			<input type='text' class='form-control' placeholder='Username' name='username' >
		  </div>

		  <div class='form-group'>
			<input type='password' class='form-control' placeholder='Username' name='password' >
		  </div>
		  
		  <div class='form-group' style='text-align:left'>
			<button type='submit' class='btn btn-success'>Login</button>
			<a href='forgot-password.php' class='forgotPwdLink'>Forgot Password?</a>
		  </div>
		</form>
		</div> <!-- End or Regbox -->

	  </div>
    </div>
	
  <!--  <div class='item window-height'>
      <img src='models/site-templates/images/bg2.jpg' alt='...'>
      <div class='carousel-caption'>
        ...
      </div>
    </div>

    <div class='item window-height'>
      <img src='models/site-templates/images/bg3.jpg' alt='...'>
      <div class='carousel-caption'>
        ...
      </div>
    </div>  -->
  </div>

  <!-- Controls 
  <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
    <span class='glyphicon glyphicon-chevron-left'></span>
  </a>
  <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
    <span class='glyphicon glyphicon-chevron-right'></span>
  </a> -->
</div>

<div class='what-is-hash-tag'>
  <div class='what-is-hash-tag-inner clearfix container'>
    <div class='getting-started-text col-md-8 no-left-padding'>
	  <h1><a href='#' class='white-hover'>Let your keys do the talking!</a></h1>
      <h2>Getting Started With <span class='blue-hash'>#</span>TAG</h2>
    </div>
	<div class='col-md-4'>
    <img src='https://g.twimg.com/about/ellenselfie.png'>
	</div>
  </div>
</div>

<!-- Product Div - cover -->
<div class='product-message product1'>
    <div class='product-image container'>
	<div class='col-md-8 no-left-padding'>
      <h2><a href='#' class='white-hover'>Find people with Similar Interests.</a></h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
  <!-- Product Div - cover -->
<div class='product-message product2'>
    <div class='product-image container'>
	<div class='col-md-8 no-left-padding'>
      <h2><a href='#' class='white-hover'>Explore nearby Points of Interest.</a></h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
  <!-- Product Div - cover -->
<div class='product-message product3'>
    <div class='product-image container'>
	<div class='col-md-8 no-left-padding'>
      <h2><a href='#' class='white-hover'>Get Reviews based on Micro-location.</a></h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
  
</div>";
echo"
<div id='bottom'>";
include("footer.php");
echo"
</div>
</div>
</body>
</html>";

?>

