<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Welcome Talkingspace</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL; ?>templates/css/custom.css" rel="stylesheet">
    <?php
    //check if title is set, if not assign it
    if(!isset($title))                                                          //!?!?!?!?!?!?!?!??!?!?! WHY!!!!!!!??????
    {
      $title = SITE_TITLE;
    }
    ?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TalkingSpace</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <?php if(!isLoggedIn()) : ?>
              <li><a href="register.php">Create An Account</a></li>
            <?php else : ?>
              <li><a href="create.php">Create Topic</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
	    <div class="row">
		    <div class="col-md-8">
			    <div class="main-col">
				    <div class="block">
					    <h1 class="pull-left"><?php echo $title;?></h1>
						<h4 class="pull-right">A Simple PHP Forum engine</h4>
					    <div class="clearfix"></div>
						<hr>
            <?php displayMessage(); ?>
