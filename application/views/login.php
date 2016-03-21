
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

      <?php echo form_input($usrLogin);  ?>

      <?php echo form_password($usrSenha); ?>

      <?php echo validation_errors(); ?>

      <?php echo form_submit($enviar); ?>

      <?php echo form_close(); ?>

    </div> <!-- /container -->    

  </body>
</html>
