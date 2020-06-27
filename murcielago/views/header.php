<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Manajemen Konseling SMP 4 Banyuwangi</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/all.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.css">

  <link id="css-preset" href="<?php echo base_url() ?>assets/dist/css/presets/preset1.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/dist/css/responsive.css" rel="stylesheet">



    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">

   <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/pace/pace.css">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vegas/vegas.min.css">

<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>





  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>



  <style type="text/css">

      .navbar-nav li a:hover,

.navbar-nav li a:focus {

  outline:none;

  outline-offset: 0;

  text-decoration:none;

  background: transparent;

}

.navbar-right li a {

  color: #fff;

  text-transform: uppercase;

  font-size: 14px;

  font-weight: 600;

  padding-top: 30px;

  padding-bottom: 30px;

}



.navbar-right li.active a {

  background-color: rgba(0,0,0,.2);

}



.navbar-brand h1 {

  margin-top: 5px;

}

a {

  text-decoration: none;

  outline: none;

  text-decoration: none;

  -webkit-transition: 300ms;

  -moz-transition: 300ms;

  -o-transition: 300ms;

  transition: 300ms;

}





  </style>

</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

<header class="main-header">

    <!-- Logo -->

    <a href="<?php echo base_url() ?>" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>Konseling</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><img src="<?php echo base_url('assets/img/unnamed-removebg-preview.png') ?>" style="width: 40px;"> </a></span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

              <?php

                $user = $this->ion_auth->user()->row();

               ?>

              <span class="hidden-xs"><?php echo $user->username ?></span>

            </a>

            <ul class="dropdown-menu">



              <li class="user-footer">

                <div class="">

                  <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat btn-block">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

        </ul>

      </div>

    </nav>

  </header>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">



      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>





        <li class="<?php echo ($this->uri->segment('2') == '') ? 'active' : '' ?>"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'kelola_siswa') ? 'active' : '' ?>"><a href="<?php echo base_url('p/kelola_siswa') ?>"><i class="fa fa-users"></i> <span>Kelola Data Siswa</span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'kelola_guru') ? 'active' : '' ?>"><a href="<?php echo base_url('p/kelola_guru') ?>"><i class="fa fa-user"></i> <span>Kelola Data Guru</span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'jenis_pelanggaran') ? 'active' : '' ?>"><a href="<?php echo base_url('p/jenis_pelanggaran') ?>"><i class="fa fa-book"></i> <span>Kategori Pelanggaran</span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'pelanggaran') ? 'active' : '' ?>>"><a href="<?php echo base_url('p/pelanggaran') ?>"><i class="fa fa-book"></i> <span>Pelanggaran</span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'tambah_pelanggaran') ? 'active' : '' ?>"><a href="<?php echo base_url('p/tambah_pelanggaran') ?>"><i class="fa fa-warning"></i> <span>Input Pelanggaran Siswa </span></a></li>

        <li class="<?php echo ($this->uri->segment('2') == 'akumulasi_pelanggaran') ? 'active' : '' ?>"><a href="<?php echo base_url('p/akumulasi_pelanggaran') ?>"><i class="fa fa-database"></i> <span>Akumulasi Pelanggaran Siswa </span></a></li>
        
        <li class="<?php echo ($this->uri->segment('2') == 'konseling') ? 'active' : '' ?>"><a href="<?php echo base_url('p/konseling') ?>"><i class="fa fa-database"></i> <span>Konseling Siswa </span></a></li>
        
        <li class="<?php echo ($this->uri->segment('2') == 'surat_bimbingan') ? 'active' : '' ?>"><a href="<?php echo base_url('p/surat_bimbingan') ?>"><i class="fa fa-database"></i> <span>Surat Bimbingan Siswa </span></a></li>







      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>

