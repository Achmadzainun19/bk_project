<div class="content-wrapper">



    <!-- Main content -->

    <section class="content">

      <?php

      echo $this->session->flashdata('alert');

       ?>

      <!-- Default box -->
      <div class="row">
      <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Detail Siswa</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                <form class="form-horizontal" >
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Masukkan Nama" value="<?php echo $siswa->nama_siswa ?>" disabled readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-10">
                            <select class="form-control select2" name="kelas" id="sel1" style="width:100%;"  disabled readonly>
                            <option value="">Pilih Kelas</option>
                                <?php
                                $no=0;
                                foreach($kelas as $k){
                                $no++; ?>
                                    <option value="<?php echo $k->id_kelas ?>" <?php if($siswa->nama_kelas==$k->nama_kelas){ echo 'selected'; }else{ echo ''; } ?>><?php echo $k->nama_kelas ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Opsi Surat</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                <a href="<?php echo base_url('p/cetak_surat/'.$this->uri->segment(3).'/surat_peringatan');?>" target="_blank" class="btn btn-warning btn-block">CETAK SURAT PERINGATAN</a>
                <a href="<?php echo base_url('p/cetak_surat/'.$this->uri->segment(3).'/surat_panggilan_orang_tua');?>" target="_blank" class="btn btn-success btn-block">CETAK SURAT PANGGILAN ORANG TUA</a>
                <a href="<?php echo base_url('p/cetak_surat/'.$this->uri->segment(3).'/surat_skorsing');?>" target="_blank" class="btn btn-danger btn-block">CETAK SURAT SKORSING</a>
            </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Data Pelanggaran Siswa</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                
                <br>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Pelanggaran</th>
                    <th>Kategori Pelanggaran</th>
                    <th>Poin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    $total=0;
                    foreach($pelanggaran as $k){
                    $no++;
                    $total=$total+$k->poin;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $k->nama_pelanggaran ?></td>
                        <td><?php echo $k->kategori_pelanggaran ?></td>
                        <td><?php echo $k->poin ?></td>
                    </tr>
                    <?php  } ?>
                    <tr>
                    <td colspan="3">TOTAL POIN</td>
                    <td><b><?php echo $total; ?></b></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
      </div>
      </div>
      
      

      <!-- /.box -->

    </section>

    <!-- /.content -->

  </div>

  <script type="text/javascript">

  $("#checkAll").click(function () {

  $(".check").prop('checked', $(this).prop('checked'));

});

  </script>

