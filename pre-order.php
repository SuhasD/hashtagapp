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
";
echo"
</div>
<div id='main'>
<div class='container '>
	<div class='col-md-7 no-left-padding'>
		<div class='pre-order-intro'>
			<h2> Pre-order your #Tag </h2>
			<hr>
			<p> Like we promised, we are not going to ask you to make the payement until 33 Days after Signup.
			However, In order for us to customize your #Tag with your username and ship it, you need to provide valid  Credit/Debit card details. We will let you know when your personalised Tag is ready.</p>
			
			<p>Just let us know how many Tags you would like to have, once we start shipping! </p>
		</div>
		
		<div class='numbers col-md-6 no-left-padding'>
		<div class='list-group'>
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>1 Tag</h4>
			<p class='list-group-item-text'>You can always buy one at a time. Try it out.</p>
		  </a>
		  
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>2 Tags</h4>
			<p class='list-group-item-text'>If you want your Partner also to have it.</p>
		  </a>
		  
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>3+ Tag</h4>
			<p class='list-group-item-text'>Go ahead, spread #ContextNetworking.</p>
		  </a>
		</div>
		</div>
		
		<div class='col-md-6'>
				<h3> Notify me on availability </h3>
				<hr>
				<form id='subscribe-form'>
					<div class='form-group'><input type='text' class='form-control' id='subscribe-email' placeholder='Enter Name'></div>
					<div class='form-group'><input type='text' class='form-control' id='subscribe-email' placeholder='Enter E-mail'></div>
					<div class='form-group'><input type='text' class='form-control' id='subscribe-email' placeholder='Enter Phone'></div>
					<div class='form-group'><input type='submit' class='btn btn-success'/></div>
				</form>
		</div>
	</div> <!-- Left div -->
	
<div class='col-md-4'>
<div id='carousel-example-generic' class='carousel phone-carousel slide' data-ride='carousel'>

  <!-- Wrapper for slides -->
  <div class='carousel-inner my-carousel'>
  
    <!-- Indicators -->
 <ol class='carousel-indicators'>
    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
  </ol> 
  

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
<div id='bottom'>";
include("footer.php");
echo"
</body>
</html>";

?>

<script>

</script>

