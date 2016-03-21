
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMS Villadon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?= base_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
   
    <link href="<?= base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('img/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('img/favicon.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('img/favicon.png') ?>">
  </head>

  <body>

    <div class="container">      

      <?php echo form_open('user/login', $form); ?>

      <h2 class="form-signin-heading">Admin Villadon</h2>

      <?php echo form_input($login);  ?>

      <?php echo form_password($password); ?>

      <?php echo validation_errors(); ?>

      <?php echo form_submit($enviar); ?>

      <?php echo form_close(); ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-transition.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-alert.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-modal.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-dropdown.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-scrollspy.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-tab.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-popover.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-button.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-carousel.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-typeahead.js'); ?>"></script>

  </body>
</html>
