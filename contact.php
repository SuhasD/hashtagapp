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
<div class='container contact-container'>
	<div class='col-md-8 no-left-padding'>
		<div class='pre-order-intro'>
			<h2> Get in touch </h2>
			<hr>
			<p>We’re not 'just another' retail or advertising solution. We’re a company changing how we interact with the world. Just tell us what you need and we’ll provide.</p>
			
			<p>Not ready to make up your mind yet?
			Sign up and get the info you need to make a decision. We’ll send you important news and updates plus the  special offer once a month.</p>
		</div>
		
		<div class='numbers col-md-6 no-left-padding'>
			<h3> You are a :</h3>
			<hr>
		<div class='list-group'>
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>Developer</h4>
			<p class='list-group-item-text'>You need Dev. kits</p>
		  </a>
		  
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>Distributor</h4>
			<p class='list-group-item-text'>You want to sell our Products</p>
		  </a>
		  
		  <a href='#' class='list-group-item'>
			<h4 class='list-group-item-heading'>Customer</h4>
			<p class='list-group-item-text'>Find out about Release dates</p>
		  </a>
		</div>
		</div>
		
		<div class='col-md-6'>
				<h3> Drop us a Message</h3>
				<hr>
				<form id='subscribe-form'>
					<div class='form-group'><input type='text' class='form-control' id='subscribe-email' placeholder='E-mail*'></div>
					<div class='form-group'><input type='text' class='form-control' id='subscribe-email' placeholder='Subjet*'></div>
					<div class='form-group'><textarea col='40' rows='4'  class='form-control' id='subscribe-email' placeholder='Message'></textarea></div>
					<div class='form-group'><input type='submit' class='btn btn-success'/></div>
				</form>
		</div>
		
	</div> <!-- end of left column -->
	
	<div class='col-md-4'>
	<div class='pre-order-intro'>
			<h2> Locate Our Garage </h2>
			<hr>
		<div id='map-canvas' style='height:300px;'></div>
		
		<blockquote class='address-quote'>
		<p>Flat #306, 9th cross, JP Nagar,</p>
		<p> Bangalore, India - 560078 </p>
		<p> Phone - +91-9986242442</p>
  
		</blockquote>
	</div>

</div>
";
echo"
</div>
<div id='bottom'>";
include("footer.php");
echo"
</body>
</html>";

?>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

   </script>
