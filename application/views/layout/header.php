<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
    <title>HOSTEL</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>infusion//css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>infusion/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>infusion/css/queries.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	  <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<header class="clearfix">
		    <div class="logo col-md-3"><h2 class="logo-text">MY HOSTEL</h2></div>
		    <nav class="clearfix">
            <ul class="clearfix">
            <li><a href="<?php echo site_url("guest/listhostels") ?>" class="active">HOME</a></li>
            <li><a href="<?php echo site_url("guest/login") ?>">LOGIN</a></li>
            <li><a href="<?php echo site_url("guest/hostelregistration") ?>">REGISTER</a></li>
            <li><a href="#"><input type="text" placeholder="search"></input></a></li>
            <li><a href="#"></a></li>
            <li><a href="#" class="last"></a></li>
            </ul>
        </nav>
        <div class="pullcontainer">
        <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
        </div>     
		</header>
