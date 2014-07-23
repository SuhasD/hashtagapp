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
<div class='container faq-page-wrap' style='padding-left:0px;margin-top:30px;margin-bottom:30px;'>
<div class='col-md-7 no-left-padding'>
  <div class='panel-group faq-page-faqs' id='accordion'>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
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
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
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
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
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



   <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseSix'>
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
       <span class='glyphicon glyphicon-play faq-icon'></span> <a data-toggle='collapse' data-parent='#accordion' href='#collapseFour'>
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
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
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
  
    <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
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
  
    <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
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
  
    <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
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
  
    <div class='panel panel-default'>
    <div class='panel-heading'>
      <h4 class='panel-title'>
        <span class='glyphicon glyphicon-play faq-icon'></span><a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
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
<div class='col-md-4'>
<div id='carousel-example-generic' class='carousel phone-carousel slide' data-ride='carousel'>

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


</div> <!-- End of right accordion -->
<div class='clearfix'>
</div>";
echo"
</div>
<div id='bottom'>";
include("footer.php");
echo"
</body>
</html>";

?>

<script>

</script>

