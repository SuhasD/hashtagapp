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
 <ol class='carousel-indicators'>
    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
  </ol> 

  <!-- Wrapper for slides -->
  <div class='carousel-inner window-height'>
    <div class='item active window-height first-slide'>
     <!-- <img src='models/site-templates/images/bg1.jpg' class='window-height' alt='...'> -->
	  
      <div class='carousel-caption col-md-7'>
		<h1 class='permalink'> Sign up for a 30-Day Free Trial and get a Personalized Beacon for free*. Let your keys do all the talking!</h1>
		<h3> Join the <a href='trial.php' target='_blank'> <span class='dark-hash underline'>#</span>ContextNetworking</a> revolution. </h3>
		<div class='cta-buttons left-align'>
          <div class='button-wrapper'>
			<button class='btn btn-info white-launch-preorder'>Pre-order </button>
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
			<input type='password' class='form-control' placeholder='Set New Password' name='password' >
		  </div>
		  
		  <div class='form-group' style='text-align:left'>
			<button type='submit' class='btn btn-success'>Login</button>
			<a href='forgot-password.php' class='forgotPwdLink'>Forgot Password?</a>
		  </div>
		</form>
		</div> <!-- End or Regbox -->

	  </div>
    </div>
	
   <!-- <div class='item window-height'>
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
	  <h1>Let your keys do all the talking!</h1>
      <h2>Getting Started With <span class='blue-hash'>#</span>ContextNetworking</h2>
	  <iframe width='560' height='315' src='//www.youtube.com/embed/pqDm3gZNZPM' frameborder='0' allowfullscreen></iframe>
    </div>
	<div class='col-md-4'>
    <div id='carousel-example-generic' class='carousel slide phone-carousel' data-ride='carousel'>
  <!-- Indicators -->

  <!-- Wrapper for slides -->
  <div class='carousel-inner faq-carousel'>

    <div class='item active'>
      <img src='models/site-templates/images/timeline1.jpg' alt='...'>
    </div>

    <div class='item'>
      <img src='models/site-templates/images/timeline2.jpg' alt=''/>
    </div>
	
	<div class='item'>
      <img src='models/site-templates/images/timeline4.jpg' alt=''/>
    </div>
  </div>

  <!-- Controls 
  <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
    <span class='glyphicon glyphicon-chevron-left'></span>
  </a>
  <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
    <span class='glyphicon glyphicon-chevron-right'></span>
  </a> -->
</div>
</div>
	</div>
  </div>
</div>

<!-- Product Div - cover -->

  <!-- Product Div - cover -->
<div class='product-message product3'>
    <div class='product-image container'>
	<div class='col-md-8 no-left-padding'>
      <h2>Get suggestions based on Micro-location.</h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn product3Btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
<div class='product-message product1'>
    <div class='product-image container'>
	<div class='col-md-8 no-left-padding'>
      <h2>Find people with Similar Interests.</h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn product1Btn' href='#'>
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
		<a class='btn btn-info learn-more-btn product2Btn' href='#'>
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
    <div id='collapseOne' class='panel-collapse collapse'>
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
    <div id='collapseSix' class='panel-collapse collapse'>
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
</div> <!-- End of right accordion -->
</div>
</div>

<div class='pre-order'>
	<div class='container'>
	<div class='pre-order-wrap'>
		<div class='col-md-8 pre-title no-left-padding'>
			<h2> Pre-order your #Tags now </h2>
		</div>
		<div class='col-md-4'>
<!-- Button trigger modal
<button class='btn btn-primary btn-lg white-launch-preorder' id='launch-preorder' data-toggle='modal' data-target='#pre-order'>
  Pre-oder Now for Q4, 2014
</button>  -->
	<a href='pre-order.php' class='btn btn-primary btn-lg white-launch-preorder'>
	  Pre-oder Now for Q4, 2014
	</a>

	</div>
	</div>
	</div>
</div> <!-- End of Preorder -->

</div>";
echo"
<div id='bottom'>";
include("footer.php");
echo"
</div>
</div>
<div class='modal fade' id='pre-order' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
        <h4 class='modal-title' id='myModalLabel'>30-Day Trial<span class='conditions-apply'>*</span></h4>
      </div>
      <div class='modal-body'>
        <p>	In order for us to customize your #Tag with your username and ship it, you need to provide valid 		Credit/Debit card details. We will let you know when your personalised Tag is ready.</p>
		<p>
			Like we promised, we are not going to ask you to make the payement until 33 Days after Signup.
		</p>
	
		
		<div class='form-group no-left-padding'>
			<form id='subscribe-form'>
				<div class='col-md-2 no-padding'>
				  <label for='subscribe-email'>E-mail:</label>
				</div><!-- /input-group -->
				<div class='col-md-5 no-padding'>
					<input type='text' class='form-control' id='subscribe-email' placeholder='Enter E-mail'>
				</div>
			</form>
		</div>
		<div class='clearfix'></div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Keep me posted</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>";

?>

<script>

var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       $("#subnavbar").css('position', 'relative');
   } else {
      $("#subnavbar").css('position', 'fixed');
   }
   lastScrollTop = st;
});

</script>
