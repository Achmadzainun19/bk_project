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
            <h3 class="box-title">Form Tambah Rumus Bentuk Sanksi</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url('p/tambah_bentuk_sanksi'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bentuk Pelanggaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bentuk_pelanggaran" placeholder="Masukkan Bentuk Pelanggaran" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Point Rendah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="point_terendah" placeholder="Masukkan Point Terendah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Point Tinggi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="point_tertinggi" placeholder="Masukkan Point Tertinggi" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sanksi</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="sanksi" placeholder="Masukkan Sanksi"></textarea>
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
            <h3 class="box-title">Data Rumus Bentuk Sanksi</h3>
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
                    <th>Bentuk Pelanggaran</th>
                    <th>Point Rendah</th>
                    <th>Point Tertinggi</th>
                    <th>Sanksi</th>
                    <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    foreach($bentuk_sanksi as $bk){
                    $no++;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $bk->bentuk_pelanggaran; ?></td>
                        <td><?php echo $bk->point_terendah; ?></td>
                        <td><?php echo $bk->point_tertinggi; ?></td>
                        <td><?php echo $bk->sanksi; ?></td>
                        <td>
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModaltm<?php echo $no ?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?php echo base_url('p/hapus_bentuk_sanksi/'.$bk->id_bentuk_sanksi.'') ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div id="myModaltm<?php echo $no ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Rumus Bentuk Sanksi</h4>
                                </div>
                                <form method="post" action="<?php echo base_url('p/update_bentuk_sanksi'); ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id_bentuk_sanksi" value="<?php echo $bk->id_bentuk_sanksi ?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="control-label">Bentuk Pelanggaran</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="bentuk_pelanggaran" value="<?php echo $bk->bentuk_pelanggaran ?>" placeholder="Masukkan Bentuk Pelanggaran" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label">Point Rendah</label>
                                                <div class="">
                                                    <input type="number" class="form-control" name="point_terendah" value="<?php echo $bk->point_terendah ?>" placeholder="Masukkan Point Terendah">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Point Tinggi</label>
                                                <div class="">
                                                    <input type="number" class="form-control" name="point_tertinggi" value="<?php echo $bk->point_tertinggi ?>" placeholder="Masukkan Point Tertinggi" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Sanksi</label>
                                                <div class="">
                                                <textarea class="form-control" name="sanksi" placeholder="Masukkan Sanksi"><?php echo $bk->sanksi ?></textarea>
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

