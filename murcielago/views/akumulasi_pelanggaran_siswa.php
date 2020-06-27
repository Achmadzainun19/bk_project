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
                <form method="post" action="<?php echo base_url('p/akumulasi_pelanggaran/ac') ?>">
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
          <h3 class="box-title">Akumulasi Pelanggaran Siswa</h3>

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
              <th>Poin</th>
              <!-- <th>Opsi</th> -->
            </thead>
            <tbody>
              <?php
              $list_siswa = $this->m_data->where('siswa',array('kelas' => $this->input->post('kelas')))->result();
              $no=0;
              foreach($list_siswa as $l){
              $cek_pelanggaran = $this->m_data->where('pelanggaran_siswa',array('id_siswa' => $l->id_siswa))->row();
              if(empty($cek_pelanggaran)){}else{
              $cek_kelas = $this->m_data->where('kelas',array('id_kelas' => $l->kelas))->row();
              $count_poin = $this->m_data->count_akum_poin($l->id_siswa)->row();
              $no++;
               ?>
               <tr>
                 <td><?php echo $no ?></td>
                 <td><?php echo $l->nama_siswa ?></td>
                 <td><?php echo $cek_kelas->nama_kelas ?></td>
                 <td> <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalxx<?php echo $l->id_siswa ?>"><?php echo $count_poin->total ?></a> </td>
                 <!-- <td> <a href="<?php //echo base_url('p/begin_pelanggaran/'.$l->id_siswa.'') ?>" class="btn btn-danger btn-flat" name="button">Proses</a> </td> -->
               </tr>
               <!-- Modal -->
                
             <?php } }?>
            </tbody>
          </table>


        </div>
      </div>
      <!-- /.box -->
    <?php }else{} ?>
    </section>
    <!-- /.content -->
  </div>
  <?php
  if($this->uri->segment('3') == 'ac'){
   ?>
  <?php
  $no=0;
  foreach($list_siswa as $l){
  $cek_pelanggaran = $this->m_data->where('pelanggaran_siswa',array('id_siswa' => $l->id_siswa))->row();
  if(empty($cek_pelanggaran)){}else{
  $cek_kelas = $this->m_data->where('kelas',array('id_kelas' => $l->kelas))->row();
  $count_poin = $this->m_data->count_akum_poin($l->id_siswa)->row();
  $no++;
   ?>
  <div id="myModalxx<?php echo $l->id_siswa ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Pelanggaran</h4>
        </div>
        <div class="modal-body">
          <table class="table table-bordered">
            <thead>
              <th>No</th>
              <th>Nama Pelanggaran</th>
              <th>Kategori Pelanggaran</th>
              <th>Poin</th>
            </thead>
            <tbody>
              <?php
              $list_pelanggaran = $this->m_data->list_pelanggaran_siswa($l->id_siswa)->result();
              $nox=0;
              foreach($list_pelanggaran as $lx){
              $nox++;
               ?>
               <tr>
                 <td><?php echo $nox ?></td>
                 <td><?php echo $lx->nama_pelanggaran ?></td>
                 <td><?php echo $lx->kategori_pelanggaran ?></td>
                 <td><?php echo $lx->poin ?></td>
               </tr>
             <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
<?php } }?>
<?php }else{} ?>
