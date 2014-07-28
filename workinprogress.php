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

<div id='content'>";

echo"
<div class='container work-wrap'>
	<h2> Stay with us, we'll keep you posted on the Investment part</h2>
	<h2> Or you can always <a href='contact.php'>Contact Us</a> </h2>
 <div class='work-progress-wrap' align='center'>
 
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

