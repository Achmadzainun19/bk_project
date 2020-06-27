<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <?php
      echo $this->session->flashdata('alert');
       ?>
      <!-- Default box -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-search"></i>

              <h3 class="box-title"> Cari berdasarkan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?php echo base_url('p/tambah_pelanggaran/ac') ?>">
                  <div class="form-group">
                    <label for="sel1">Kelas</label>
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
                    <button class="btn btn-primary btn-flat btn-block" type="submit" name="detail_peserta">Cari</button>
                  </div>


                </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <?php
      if($this->uri->segment('3') == 'ac'){
       ?>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Pelanggaran Siswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <thead>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Opsi</th>
            </thead>
            <tbody>
              <?php
              $list_siswa = $this->m_data->where('siswa',array('kelas' => $this->input->post('kelas')))->result();
              $no=0;
              foreach($list_siswa as $l){
              $cek_kelas = $this->m_data->where('kelas',array('id_kelas' => $l->kelas))->row();
              $no++;
               ?>
               <tr>
                 <td><?php echo $no ?></td>
                 <td><?php echo $l->nama_siswa ?></td>
                 <td><?php echo $cek_kelas->nama_kelas ?></td>
                 <td> <a href="<?php echo base_url('p/begin_pelanggaran/'.$l->id_siswa.'') ?>" class="btn btn-danger btn-flat" name="button">Proses</a> </td>
               </tr>
             <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.box -->
    <?php }else{} ?>
    </section>
    <!-- /.content -->
  </div>
