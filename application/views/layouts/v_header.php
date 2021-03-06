<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Kerja Diri</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Additions -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/animate.css">
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/icomoon.css">
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/themify-icons.css">
    <!-- <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" /> -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/magnific-popup.css">
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/chocolat.css">
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

  	<script src="assets/js/modernizr-2.6.2.min.js"></script>


  </head>
  <body>
    <nav class="navbar navbar-default" id="view_header">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= site_url("") ?>">Kerja Diri</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="
            <?php if($this->uri->segment(1)=="") {
              echo "active";
            } else {
              echo "";
            }?>"
            ><a href="<?= site_url("") ?>">Beranda <span class="sr-only">(current)</span></a></li>
            <li class="
            <?php if($this->uri->segment(1)=="kerja") {
              echo "active";
            } else {
              echo "";
            }?>"
            ><a href="<?= site_url("kerja") ?>">Kerja</a></li>
            <?php if($this->session->userdata('level') != 2) { ?>
            <li class="
            <?php if($this->uri->segment(1)=="lamaran") {
              echo "active";
            } else {
              echo "";
            }?>"
            ><a href="<?= site_url("lamaran") ?>">Lamaran</a></li>
            <?php } else { ?>
            <li class="
            <?php if($this->uri->segment(1)=="profilperusahaan") {
              echo "active";
            } else {
              echo "";
            }?>"
            ><a href="<?= site_url("profilperusahaan") ?>">Profil Perusahaan</a></li>
            <?php } ?>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
              if($this->session->userdata('username') != null) {
            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tidak ada pemberitahuan</a></li>
              </ul>
            </li>
            <li class="dropdown
            <?php if($this->uri->segment(1)=="sign") {
              echo "active";
            } else {
              echo "";
            }?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username') ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= site_url('profile/index/'.$this->session->userdata('id_account'))?>">Lihat</a></li>
                <li><a href="<?= site_url('sign/signout')?>">Keluar</a></li>
              </ul>
            </li>
            <?php
              } else {
            ?>
            <li class="<?php if($this->uri->segment(1)=="sign") {
              echo "active";
            } else {
              echo "";
            }?>"
            ><a href="<?php echo site_url("sign") ?>">Daftar / Masuk </a></li>
            <?php
              }
            ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
