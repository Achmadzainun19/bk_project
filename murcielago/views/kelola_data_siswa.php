<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <?php
      echo $this->session->flashdata('alert');
      ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kelola Data Siswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal">Tambah Siswa</button>
            <button class="btn btn-info btn-flat">Import Data Siswa</button>
            <button class="btn btn-info btn-flat">Download Contoh Import Data</button>
            <!-- Modal -->
          <hr>

         <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>NIS</th>
              <th>Kelas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no=0;
              foreach($siswa as $l){
              $no++;
             ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $l->nama_siswa ?></td>
              <td><?php echo $l->nis ?></td>
              <td>Kelas <?php echo $l->nama_kelas ?></td>
              <td>
                <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#myModaly<?php echo $l->nis ?>"><i class="fa fa-eye"></i></button>
                <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModalx<?php echo $l->nis ?>"><i class="fa fa-pencil"></i></button>
                <a href="<?php echo base_url('p/delete_siswa/'.$l->id.'/'.$l->id_siswa.'') ?>" class="btn btn-danger btn-flat" ><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- Modal -->
  <?php
    $no=0;
    foreach($siswa as $l){
    $no++;
   ?>
   <div id="myModaly<?php echo $l->nis ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Siswa</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
         <tbody>

           <tr>
             <td>Nama Siswa</td>
             <td><?php echo $l->nama_siswa ?></td>
           </tr>
           <tr>
             <td>NIS</td>
             <td><?php echo $l->nis ?></td>
           </tr>
           <tr>
             <td>Jenis Kelamin</td>
             <td><?php echo ($l->jenis_kelamin == 1) ? 'Laki - Laki' : 'Perempuan' ?></td>
           </tr>
           <tr>
             <td>Kelas</td>
             <td><?php echo $l->nama_kelas ?></td>
           </tr>
           <tr>
             <td>Tempat Lahir</td>
             <td><?php echo $l->tempat_lahir ?></td>
           </tr>
           <tr>
             <td>Tanggal Lahir</td>
             <td><?php echo date('d-m-Y',strtotime($l->tanggal_lahir)); ?></td>
           </tr>
           <tr>
             <td>Nomer HP</td>
             <td><?php echo $l->no_hp ?></td>
           </tr>
           <tr>
             <td>Alamat Siswa</td>
             <td><?php echo $l->alamat_siswa ?></td>
           </tr>
           <tr>
             <td>Nama Ayah</td>
             <td><?php echo $l->nama_ayah ?></td>
           </tr>
           <tr>
             <td>Pekerjaan Ayah</td>
             <td><?php echo $l->pekerjaan_ayah ?></td>
           </tr>
           <tr>
             <td>Nomer Hp Orang Tua</td>
             <td><?php echo $l->no_hp_ortu ?></td>
           </tr>
           <tr>
             <td>Nama Ibu</td>
             <td><?php echo $l->nama_ibu ?></td>
           </tr>
           <tr>
             <td>Pekerjaan Ibu</td>
             <td><?php echo $l->pekerjaan_ibu ?></td>
           </tr>
         </tbody>
       </table>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <div id="myModalx<?php echo $l->nis ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Siswa</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <form action="<?php echo base_url('p/update_siswa') ?>" method="post">
              <input type="hidden" name="id_siswa" value="<?php echo $l->id_siswa ?>">
              <input type="hidden" name="id_user" value="<?php echo $l->id ?>">
              <div class="form-group">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" value="<?php echo $l->nama_siswa ?>">
              </div>
              <div class="form-group">
                <label for="">NIS</label>
                <input type="text" name="nis" class="form-control" value="<?php echo $l->nis ?>">
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select class="form-control select2" name="jenis_kelamin" id="sel1" style="width:100%;">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="1" <?php echo ($l->jenis_kelamin == '1') ? 'selected' : '' ?>>Laki - Laki</option>
                  <option value="2" <?php echo ($l->jenis_kelamin == '2') ? 'selected' : '' ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Kelas</label>
                <select class="form-control select2" name="kelas" id="sel1" style="width:100%;">
                  <option value="">Pilih Kelas</option>
                  <?php
                  $no=0;
                  foreach($kelas as $k){
                  $no++;
                   ?>
                  <option value="<?php echo $k->id_kelas ?>" <?php echo ($k->id_kelas == $l->id_kelas) ? 'selected' : '' ?>><?php echo $k->nama_kelas ?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $l->tempat_lahir ?>">
              </div>
              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control datepicker1" value="<?php echo $l->tanggal_lahir ?>">
              </div>
              <div class="form-group">
                <label for="">Nomer HP</label>
                <input type="text" name="no_hp" class="form-control" value="<?php echo $l->no_hp ?>">
              </div>
              <div class="form-group">
                <label for="">Alamat Siswa</label>
                <input type="text" name="alamat_siswa" class="form-control" value="<?php echo $l->alamat_siswa ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Ayah</label>
                <input type="text" name="ayah_siswa" class="form-control" value="<?php echo $l->nama_ayah ?>">
              </div>
              <div class="form-group">
                <label for="">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $l->pekerjaan_ayah ?>">
              </div>
              <div class="form-group">
                <label for="">Nomer Hp Orang tua</label>
                <input type="text" name="hp_ortu" class="form-control" value="<?php echo $l->no_hp_ortu ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Ibu</label>
                <input type="text" name="ibu_siswa" class="form-control" value="<?php echo $l->nama_ibu ?>">
              </div>
              <div class="form-group">
                <label for="">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $l->pekerjaan_ibu ?>">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" value="">
                <small><b>NB: Jika tidak ingin ganti password biarkan kosong</b></small>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat" name="button">Update Siswa</button>
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

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Siswa</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <form action="<?php echo base_url('p/add_siswa') ?>" method="post">
              <div class="form-group">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label for="">NIS</label>
                <input type="text" name="nis" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select class="form-control select2" name="jenis_kelamin" id="sel1" style="width:100%;">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="1">Laki - Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Kelas</label>
                <select class="form-control select2" name="kelas" id="sel1" style="width:100%;">
                  <option value="">Pilih Kelas</option>
                  <?php
                  $no=0;
                  foreach($kelas as $k){
                  $no++;
                   ?>
                  <option value="<?php echo $k->id_kelas ?>"><?php echo $k->nama_kelas ?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control datepicker1">
              </div>
              <div class="form-group">
                <label for="">Nomer HP</label>
                <input type="text" name="no_hp" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Alamat Siswa</label>
                <input type="text" name="alamat_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nama Ayah</label>
                <input type="text" name="ayah_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nomer Hp Orang tua</label>
                <input type="text" name="hp_ortu" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nama Ibu</label>
                <input type="text" name="ibu_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat" name="button">Tambah Siswa</button>
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
