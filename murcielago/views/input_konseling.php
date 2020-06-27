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
            <h3 class="box-title">Form Tambah Konseling Siswa</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url('p/tambah_konseling'); ?>">
                    <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>">
                    <input type="hidden" name="id_user" value="<?php echo $user_ion->id ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
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
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Solusi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="solusi" placeholder="Masukkan Solusi"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Data Konseling Siswa</h3>
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
                    <th>Tanggal</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Ketarangan</th>
                    <th>Solusi</th>
                    <th>Laporan Perkembangan</th>
                    <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    foreach($konseling as $k){
                    $no++;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $k->tanggal; ?></td>
                        <td><?php echo $k->nama_siswa; ?></td>
                        <td><?php echo $k->nama_kelas; ?></td>
                        <td><?php echo $k->keterangan; ?></td>
                        <td><?php echo $k->solusi; ?></td>
                        <td></td>
                        <td>
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModaltm<?php echo $no ?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?php echo base_url('p/hapus_konseling/'.$k->id_konseling.'/'.$k->data_siswa_id_siswa.'') ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div id="myModaltm<?php echo $no ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Konseling Siswa</h4>
                                </div>
                                <form method="post" action="<?php echo base_url('p/update_konseling'); ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>">
                                        <input type="hidden" name="id_konseling" value="<?php echo $k->id_konseling; ?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal</label>
                                                <div class="">
                                                    <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo date('Y-m-d',strtotime("$k->tanggal"));?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                <div class="">
                                                    <input type="text" class="form-control"  placeholder="Masukkan Nama" value="<?php echo $k->nama_siswa ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Kelas</label>
                                                <div class="">
                                                <select class="form-control select2" name="kelas" id="sel1" style="width:100%;"  disabled readonly>
                                                <option value="">Pilih Kelas</option>
                                                    <?php
                                                    foreach($kelas as $ke){
                                                     ?>
                                                        <option value="<?php echo $ke->id_kelas ?>" <?php if($k->kelas==$ke->id_kelas){ echo 'selected'; }else{ echo ''; } ?>><?php echo $ke->nama_kelas ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Keterangan</label>
                                                <div class="">
                                                <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan"><?php echo $k->keterangan; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Solusi</label>
                                                <div class="">
                                                    <textarea class="form-control" name="solusi" placeholder="Masukkan Solusi"><?php echo $k->solusi; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
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

