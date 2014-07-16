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
<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
  <!-- Indicators -->
  <ol class='carousel-indicators'>
    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class='carousel-inner'>
    <div class='item active'>
      <img src='models/site-templates/images/bg1.jpg' alt='...'>
      <div class='carousel-caption'>
        <p class='hero-content'>
          <a class='tweet-permalink' href='#' target='_blank'>Somehow this adds extra pressure to the already-stressful task of choosing what shoes to wear to meet and greet. </a>
        </p>
		<a class='hero-content tweet-author' href='#'>
            Tweet by @lukejamesbgn          
		</a>
		<p><a class='tweet-permalink' href='#' target='_blank'>9:38 PM - 12 Sep 2013</a></p>
		
		<div class='cta-buttons'>
          <div class='button-wrapper'>
		  <button class='btn btn-info'>Try #TAG </button>
		  </div>
          <div class='button-wrapper'>
          </div>
      </div>
      </div>
    </div>
	
    <div class='item'>
      <img src='models/site-templates/images/bg2.jpg' alt='...'>
      <div class='carousel-caption'>
        ...
      </div>
    </div>

    <div class='item'>
      <img src='models/site-templates/images/bg3.jpg' alt='...'>
      <div class='carousel-caption'>
        ...
      </div>
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

<div class='what-is-hash-tag'>
  <div class='what-is-hash-tag-inner clearfix container'>
    <div class='getting-started-text col-md-8 no-left-padding'>
      <h2>Getting Started With <span class='blue-hash'>#</span>TAG</h2>
      <h1><a href='#' class='white-hover'>Story of a Tweet</a></h1>
    </div>
	<div class='col-md-4'>
    <img src='https://g.twimg.com/about/ellenselfie.png'>
	</div>
  </div>
</div>

<!-- Product Div - cover -->
<div class='product-message product1'>
    <div class='product-image container'>
	<div class='col-md-8'>
      <h2><a href='#' class='white-hover'>Tell your story in pictures.</a></h2>
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
	<div class='col-md-8'>
      <h2><a href='#' class='white-hover'>Tell your story in pictures.</a></h2>
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
	<div class='col-md-8'>
      <h2><a href='#' class='white-hover'>Tell your story in pictures.</a></h2>
	  </div>
	  <div class='col-md-4'>
		<a class='btn btn-info learn-more-btn' href='#'>
        Learn more</a>
		</div>
    </div>
  </div> <!-- Product Div - End -->
  
  
</div>
<div id='left-nav' style='display:none'>";
include("footer.php");
echo"
<div id='bottom'></div>
</div>
</body>
</html>";

?>
