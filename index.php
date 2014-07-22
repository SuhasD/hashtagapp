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
		<h1 class='permalink'> Sign up to get <a href='trial.php' target='_blank'> 30-Day free trial*</a>. Never, ever lose your keys again. Join the <a href='trial.php' target='_blank'> <span class='light-hash underline'>#</span>ContextNetworking</a> revolution.</h1>
		<h3> Digitalizing Physical world </h3>
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
	  <h1>Let your keys do the talking!</h1>
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
      <h2>Find people with Similar Interests.</h2>
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
      <h2>Explore nearby Points of Interest.</h2>
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
      <h2>Get suggestions based on Micro-location.</h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
  <div class='faq-section'>
    <div class='container faq-wrapper'>
	<h2> Frequently Asked Questions </h2>
	
  <div class='col-md-6 no-left-padding'>
  <div class='panel-group' id='accordion'>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
          How long will my #Tag last?
        </a>
      </h4>
    </div>
    <div id='collapseOne' class='panel-collapse collapse in'>
      <div class='panel-body'>
        Each Tag lasts for atleast 2 years out of the box. When the battery is about to die, we ll send you more advanced Tag, and you can <span class=underline'>Upgrade for Free*</span>
      </div>
    </div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
          What phones does #Tag work with?
        </a>
      </h4>
    </div>
    <div id='collapseTwo' class='panel-collapse collapse'>
      <div class='panel-body'>
        <b>iOS</b> - Works with iPhone 4S and newer, iPad Mini, iPad 3rd gen and newer, and iPod Touch 5th gen and newer. <br />
		<b>Android</b> - Works with Android 4.3 +. 
      </div>
    </div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
          When will my credit card be charged?
        </a>
      </h4>
    </div>
    <div id='collapseThree' class='panel-collapse collapse'>
      <div class='panel-body'>
        Your credit card will be charged 33 days after placing your order. In case you are not happy with us in the first month, we will refund your money. 
      </div>
    </div>
  </div>
  </div>
 </div> <!-- End of left faq -->
 
 <div class='col-md-6'>
 <div class='panel-group' id='accordion-right'>
   <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion-right' href='#collapseSix'>
          Can other #Tag app users search for my Profile?
        </a>
      </h4>
    </div>
    <div id='collapseSix' class='panel-collapse collapse in'>
      <div class='panel-body'>
        No. The #Tag team takes your security seriously. Only you and the Tag users you've explicitly shared your Tags with can search for your Tag.
      </div>
    </div>
  </div>
  
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion-right' href='#collapseFour'>
          What is the range of #Tag?
        </a>
      </h4>
    </div>
    <div id='collapseFour' class='panel-collapse collapse'>
      <div class='panel-body'>
       The range from your phone is 50 - 150ft depending on the environment. However, if any other #Tag user's phone is within 50 - 150ft of your Tag, you will receive an update with the location of your Tag. This essentially makes the range limitless once there are enough #Tag users in your area.
      </div>
    </div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion-right' href='#collapseFive'>
          When is #Tag shipping?
        </a>
      </h4>
    </div>
    <div id='collapseFive' class='panel-collapse collapse'>
      <div class='panel-body'>
        We began shipping Tags in limited quantities to our earliest supporters. The order in which we ship is generally determined by the date the pre-order was placed.
      </div>
    </div>
  </div>

</div>
</div>
</div>

</div>
  
  
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

