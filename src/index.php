<? require_once($_SERVER['DOCUMENT_ROOT']."/navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login - PocketPanel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        background-image:url('http://cdn2.planetminecraft.com/files/resource_media/screenshot/1216/Skylia_08_2005134.jpg');
        background-size:cover;
        background-attachment: fixed;
	background-repeat:no-repeat;
      }
    </style>
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/bootstrap/ico/favicon.png">
                                   <? require_once($_SERVER['DOCUMENT_ROOT']."/headscript.php"); ?>
  </head>

  <body>
  <div class="container">
    <div class="head">
            	<div class="row-fluid">
                	<div class="span12">
                    	<div class="span6">
                        	<h1 class="muted">PocketPanel</h1>
                        </div>
                        <div class="span4 offset2" style="margin-top:15px;">
                          <button type="button" class="btn pull-right">Sign In</button>							
                        </div>
                    </div>
                </div>                	
				<div class="navbar">
				  <div class="navbar-inner">
					<div class="container">
					  <ul class="nav">
						<? NavBar::displayNavBar("dashboard"); ?>					
					  </ul>                      
					</div>
				  </div>
				</div>
	</div>

     <!--<div class="row">
		<div class="span4 offset4 well">
			<legend>Sign In to PocketPanel</legend>
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
			<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
			<button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
			</form>    
		</div>
	</div>-->
	
	<div class='row-fluid'>
		<div class='span4 well'>
		<h4>Server Status</h4>
			CPU:
			<div class="progress progress-success">
		  		<div class="bar" style="width: 80%"></div>
			</div>
			RAM:
			<div class="progress progress-warning">
		  		<div class="bar" style="width: 40%"></div>
			</div>
		</div>
		<div class='span8 well'>
		Chat Messages<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div><!--row-fluid-->

	<? require_once($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/bootstrap/js/bootstrap-button.js"></script>
    <script src="/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>

