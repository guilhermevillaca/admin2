
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMS Villadon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-wysihtml5.css'); ?>"></link>
    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">

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


     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">CMS Villadon</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logado como <a href="<?php echo base_url('user/logout') ?>" 
              title="Sair" class="navbar-link"><?php echo $this->session->userdata('login'); ?></a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Admin</a></li>
              <li><a href="#about">Site</a></li>
              <li><a href="#contact">Sobre</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>