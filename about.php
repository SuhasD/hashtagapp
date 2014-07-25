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

<section id='hero' class='hero-tall hero-fade'>
    <div class='hero-wrap-outer'>
              <div class='container'>
          <div class='hero-wrap-inner'>
            
	<h1 id='page-title'>About #Tag</h1>
		<p id='tagline'>#Tag helps you create and share ideas and information instantly, without barriers.</p>
		<p id='en-title'></p>
		</div>
       </div>
     </div>
    </section>
	  
<div class='container faq-page-wrap' style='padding-left:0px;margin-top:30px;margin-bottom:30px;'>
<div class='col-md-7 no-left-padding'>
<h3>Who are we?</h3>
<hr>
<p> #Tag was anti established in 2014 with no vision and no business plan.
We make fun products, save some time for our customers and help them get personalised shopping and restaurant sugestions.  </p>

<p>We are made up of a bunch of Broke Engineers who cannot afford beer. The only thought which drives us is to soon be able to connect the Physical world with the Digital world.</p>

<div class=''>
<h3>What have we made?</h3>
<hr>

</div>

</div> <!-- Left div -->

<div class='col-md-5'>

      <a class='tag-for tag-for-personal' href='#'>
        <div class='tag-for-illustration'></div>
        <h3>#Tag for business</h3>
        <p>Businesses use Twitter to share information about their services, gather real-time market intelligence, and build relationships with customers.</p>
      </a>
	  
      <a class='tag-for tag-for-media' href='#'>
        <div class='tag-for-illustration'></div>
        <h3>#Tag for Media</h3>
        <p>Bring the power of sports, entertainment and news. We help media organizations engage with audiences more directly on #Tag.</p>
      </a>
	  
	   <a class='tag-for tag-for-developers' href='#'>
        <div class='tag-for-illustration'></div>
        <h3>#Tag for Developers</h3>
        <p>We want developers to have the best tools to create engaging #Tag interactions for users, wherever and however people experience #Tag.</p>
      </a>

</div>
</div> <!-- Main end -->
</div>
<div id='bottom'>";
include("footer.php");
echo"
</body>
</html>";

?>

<script>

</script>

