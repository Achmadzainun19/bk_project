<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <?php
      echo $this->session->flashdata('alert');
       ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Kategori Pelanggaran</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModaltm">Tambah Kategori</button>
            <!-- Modal -->
          <div id="myModaltm" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Kategori</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('p/add_kategori') ?>" method="post">
                      <div class="form-group">
                        <label for="">Kategori Pelanggaran</label>
                        <input type="text" name="kategori_pelanggaran" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-flat" name="button">Tambah Kategori</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <hr>
         <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jenis Pelanggaran</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=0;
            foreach($kategori as $k){
            $no++;
             ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $k->kategori_pelanggaran ?></td>
              <td>
                <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModaltm<?php echo $no ?>"><i class="fa fa-edit"></i></button>
                <a href="<?php echo base_url('p/hapus_kategori/'.$k->id_kategori.'') ?>" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <!-- Modal -->
            <div id="myModaltm<?php echo $no ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Kategori</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form action="<?php echo base_url('p/update_kategori') ?>" method="post">
                          <input type="hidden" name="id_kategori" value="<?php echo $k->id_kategori ?>">
                          <div class="form-group">
                            <label for="">Kategori Pelanggaran</label>
                            <input type="text" name="kategori_pelanggaran" class="form-control" value="<?php echo $k->kategori_pelanggaran ?>">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-flat" name="button">Update Kategori</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
          <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
