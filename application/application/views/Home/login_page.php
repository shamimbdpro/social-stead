<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo doctype('html5'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Con - Admin Dashboard with Material Design</title>

  <?php echo meta('description','this is a content'); ?>
  <?php echo meta('viewport','width=device-width, initial-scale=1'); ?>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>libs/assets/_con/images/icon.png">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/font-awesome/css/font-awesome.min.css" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/material-design-icons/css/material-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/weatherIcons/css/weather-icons.min.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/_con/css/_con.min.css" />

  <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>libs/assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>

  <section id="sign-in">

    <!-- Background Bubbles -->
    <canvas id="bubble-canvas"></canvas>
    <!-- /Background Bubbles -->
    

    <!-- Sign In Form -->
    <?php echo form_open('login/check');?>
      <div class="row links">
        <div class="col s6 logo">
          <img src="<?php echo base_url() ?>libs/assets/_con/images/logo-white.png" alt="">
        </div>
      </div>

      <div class="card-panel">
        
      <!--from validation error show & error show-->
          <div class="col">
	        <?php 
	          if(validation_errors()){
	        ?>
	           <div class="alert">
	             <?php echo validation_errors(); ?>
	           </div> 
	        <?php 
	          }

	          if(isset($errorlogin)){
	            ?>
	            <div class="alert orange lighten-2 white-text">
	              <?php echo $errorlogin; ?>
	            </div>
	            <?php
	          }
	        ?>
          </div>
        <!--/from validation error show & error show-->

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          	$attr  =  array(
          		'id'			   =>		'user_name',
          		'name'			 =>		'Username',
          		'validate'	 =>		'validate',
          		'required'	 =>		'required'
          		);
          	echo form_input($attr);
          ?>
          <label for="username-input">Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
          <?php
          	$attr  =  array(
          		'id'			   =>		'user_password',
          		'name'			 =>		'Password',
          		'validate'	 =>		'validate',
          		'required'	 =>		'required'
          		);
          	echo form_password($attr);
          ?>
          <label for="password-input">Password</label>
        </div>
        <!-- /Password -->

        <div class="switch">
          <label>
            <input type="checkbox" checked />
            <span class="lever"></span>
            Remember
          </label>
        </div>

        <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Sign In</button>
      </div>

      <div class="links right-align">
        <a href="<?php echo base_url('recovery'); ?>">Forgot Password?</a>
      </div>

    <?php echo form_close(); ?>
    <!-- /Sign In Form -->

  </section>


  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/_con/js/_demo.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/materialize/js/materialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/_con/js/_con.min.js"></script>

</body>