
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Profile Info</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="public/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/signin.css') ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
     <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top:opx;margin-bottom:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			<img src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/img/logo.png') ?>" alt="logo" height="auto" width="170px">
		  </a>
        </div>
          <div id="navbar" class="navbar-collapse collapse" >
        <div class="navbar-right">
			<a class="btn btn-default" href="/profile" role="button" style="margin-top:20px;margin-bottom:20px;margin-right:10px;">My Profile</a>
		
			<a class="btn btn-default" href="/new_advert?mobile=<?php echo $_GET['mobile'];?>" role="button" style="margin-top:20px; margin-bottom:20px;">New Ad</a>
        </div><!--/.navbar-right -->
</div>
        </div>

      </div>
    </nav>

    <div class="container" style="padding-top: 20px; margin-left:100px;">
        <h1 class="page-header"><?php echo $info['product']['title'];?></h1>
	  <div class="row">
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <form class="form-horizontal" role="form" method="POST"
                          action="<?php echo "/payment/user/" . $info['curr_user']['id']
                                  . "/advert/" . $info['product']['id'];?>">
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller name:</label>
                            <div class="col-lg-8">
                                <p><?php echo $info['user']['name'];?></p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller last name:</label>
                            <div class="col-lg-8">
                                <p><?php echo $info['user']['lastname'];?></p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller Email:</label>
                            <div class="col-lg-8">
                                <p><?php echo $info['user']['email'];?></p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label">Seller Telephone number:</label>
                            <div class="col-md-8">
                                <p><?php echo $info['user']['mobile'];?></p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label">Product description</label>
                            <div class="col-md-8">
                                <p><?php echo $info['product']['description'];?></p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label" style="font-size:20px">Prize:</label>
                            <div class="col-md-8">
                                <p style="font-size:20px"><?php echo $info['product']['price'];?></p>
                            </div>
			</div>

			<br/>
		  

			<div class="form-group">
			<button class="btn btn-lg btn-primary btn-block" type="submit" style = "background-color:green; width:200px;">BUY</button>
                        </div>
                        </form>
		</div>
			

		</div>
	  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/js/bootstrap.min.js') ?>"></script>
</body>