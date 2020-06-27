 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box" style="background-color:#3498db;color:#fff;">
            <div class="inner">
              <?php 
              //$count_s1 = $db->counts1($conn);
              ?>
              <h3>60<?php //echo $count_s1 ?></h3>

              <p><b>Siswa Kelas VII</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box" style="background-color:#e67e22;color:#fff;">
            <div class="inner">
              <?php 
              //$count_d3 = $db->countd3($conn);
              ?>
              <h3>60<?php //echo $count_d3 ?></h3>

              <p><b>Siswa Kelas VIII</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box" style="background-color:#e67e22;color:#fff;">
            <div class="inner">
              <?php 
              //$count_d3 = $db->countd3($conn);
              ?>
              <h3>60<?php //echo $count_d3 ?></h3>

              <p><b>Siswa Kelas IX</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <hr style="border:1px solid #ccc;">
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php 
              //$pendaftar_total = $db->semua_count($conn,'pendaftaran');
               ?>
              <h3>15<?php //echo $pendaftar_total ?></h3>

              <p><b>Pelanggaran</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php 
              //$lulus = $db->where_count($conn,'pendaftaran',array('status_kelulusan' => 'lulus'));
               ?>
              <h3>10<?php //echo $lulus ?></h3>

              <p><b>Konseling</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- <div class="col-sm-6 col-sm-offset-3">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>150</h3>

              <p><b>S1 TEKNIK INFORMATIKA</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
      </div>

    </section>
    <!-- /.content -->
  </div>