<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo doctype('html5'); ?>
<html>
<!--<![endif]-->


<!-- Mirrored from nkdev.info/con/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:59:09 GMT -->
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

  <section id="forgot-password">

    <!-- Background Bubbles -->
    <canvas id="bubble-canvas"></canvas>
    <!-- /Background Bubbles -->

    <!-- Reset Form -->
    <?php echo form_open(''); ?>
      <div class="logo">
        <img src="<?php echo base_url() ?>libs/assets/_con/images/logo-white.png" alt="">
      </div>

      <div class="card-panel">
        <div class="alert blue lighten-5 blue-text text-darken-2">
          <strong><i class="fa fa-css3"></i></strong>&nbsp; We'll send instructions to reset your password to your email.
        </div>

        <div class="row">
          <div class="col m9 s12">
            <div class="input-field">
              <i class="fa fa-envelope prefix"></i>
              <?php 
                $email = array(
                  'id'        =>    'input_email',
                  'name'      =>    'email',
                  'required'  =>    'required'
                  );
                echo form_input($email);
              ?>
              <label for="input_email">Email</label>
            </div>
          </div>
          <div class="col m3 s12">
            <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Reset</button>
          </div>
        </div>

      </div>
    </form>
    <?php echo form_close(); ?>
    <!-- /Reset Form -->

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