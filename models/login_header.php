<?php
ob_start();
/*
UserCake Version: 2.0.2
http://usercake.com
*/
echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='models/site-templates/css/bootstrap.min.css'>

<!-- Optional theme -->
<link rel='stylesheet' href='models/site-templates/css/bootstrap-theme.min.css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified JavaScript -->

<title>".$websiteName."</title>
<link href='".$template."' rel='stylesheet' type='text/css' />
<link href='models/site-templates/responsive.css' rel='stylesheet' type='text/css' />
<link href='models/site-templates/gotham-narrow-v3.css' rel='stylesheet' type='text/css' />
<script src='models/funcs.js' type='text/javascript'>
</script>
</head>
<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
  <div class='container-fluid'>
  <div class='container'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='#'><span class='blue-hash'>#</span>TAG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
	  

      <ul class='nav navbar-nav navbar-right'>
	  
        <li><a href='index.php' class='underline'><span class='blue-hash'>#</span>ContextNetworking</a></li>
        <li class='dropdown'>
          <a href='register.php' class='underline'>Sign Up</a>
        </li>     
		<li class='dropdown'>
          <a href='login.php' class='underline'>Sign In</a>
        </li>
		    <li class='first leaf menu-mlid-1264 active active-trail show-for-phones' role='menuitem'><a href='about.php' class='active active-trail'>What is <span class='hash-blue'>#</span>TAG</a></li>
			<li class='leaf has-children show-for-phones' role='menuitem'><a href='/company'>Company</a></li>
			<li class='leaf has-children show-for-phones' role='menuitem'><a href='/press'>Press</a></li>
			<li class='leaf menu-mlid-753 show-for-phones'><a href='/invest'>Investor relations</a></li>
			<li class='leaf menu-mlid-681 show-for-phones'><a href='/blogs'>Blogs</a></li>
			<li class='last leaf menu-mlid-1109 show-for-phones'><a href='/careers'>Careers</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<nav class='navbar navbar-default' id='subnavbar' role='navigation'>
  <div class='container-fluid'>
  <div class='container'>
    <div class='collapse navbar-collapse' id='subnav-wrapper' align='center'>
		<ul class='menu nav clearfix subNav' role='menu'>
			<li class='leaf has-children  active active-trail' role='menuitem'><a class='active active-trail' href='index.php'>30-Day Free Trial<span class='conditions-apply'>*</a></li>
			<li class='leaf has-children' role='menuitem'><a href='pre-order.php'>Pre-order</a></li>
			<li class='first leaf menu-mlid-1264' role='menuitem'><a href='faq.php' class=''>FAQ</a></li>
			<li class='leaf has-children' role='menuitem'><a href='about.php'>Company</a></li>
			<li class='leaf menu-mlid-753'><a href='workinprogress.php'>For Investors</a></li>
			<!-- <li class='last leaf menu-mlid-1109'><a href='about.php'></a></li> -->

            <li class='dropdown hide' id='main-menu-more-item'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                More
              </a>
              <ul class='dropdown-menu'>
              </ul>
            </li>
          </ul>
    </div>
    </div>
  </div>
</nav>";

?>
