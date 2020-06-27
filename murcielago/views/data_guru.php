<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <?php
      echo $this->session->flashdata('alert');
       ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kelola Data Guru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal">Tambah Guru</button>
            <button class="btn btn-info btn-flat">Import Data Guru</button>
            <button class="btn btn-info btn-flat">Download Contoh Import Data</button>
            <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Guru</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('p/add_guru') ?>" method="post">
                      <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-flat" name="button">Tambah Guru</button>
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
              <th>Nama Guru</th>
              <th>NIP</th>
              <th>Username</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=0;
            foreach($list_guru as $l){
            $no++;
             ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $l->first_name ?></td>
              <td><?php echo $l->nip ?></td>
              <td><?php echo $l->username ?></td>
              <td>
                <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModalx<?php echo $no ?>"><i class="fa fa-edit"></i></button>
                <a href="<?php echo base_url('p/delete_guru/'.$l->id_user.'/'.$l->id_guru.'') ?>" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <!-- Modal -->
              <div id="myModalx<?php echo $no ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Guru</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <form action="<?php echo base_url('p/update_guru') ?>" method="post">
                          <input type="hidden" name="id_guru" value="<?php echo $l->id_guru ?>">
                          <input type="hidden" name="id_user" value="<?php echo $l->id ?>">
                          <div class="form-group">
                            <label for="">Nama Guru</label>
                            <input type="text" name="nama_guru" class="form-control" value="<?php echo $l->first_name ?>">
                          </div>
                          <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" name="nip" class="form-control" value="<?php echo $l->nip ?>">
                          </div>
                          <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $l->username ?>">
                          </div>
                          <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" value="">
                            <small><b>NB: Jika tidak ingin ganti password biarkan kosong</b></small>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-flat" name="button">Update Guru</button>
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
