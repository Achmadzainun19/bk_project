<div class="content-wrapper">



    <!-- Main content -->

    <section class="content">

      <?php

      echo $this->session->flashdata('alert');

       ?>

      <!-- Default box -->

      <div class="row">

        <div class="col-md-3">

          <div class="box box-primary">

            <div class="box-header with-border">

              <i class="fa fa-search"></i>

              <h3 class="box-title"> Cari berdasarkan</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">
                <?php foreach($bentuk_sanksi as $bs){ ?>
                    <a href="<?php echo base_url("p/pengelompokan_pelanggar/ac?id_pengelompokan=$bs->id_bentuk_sanksi");?>" class="btn btn-lg btn-primary btn-block"><?php echo $bs->bentuk_pelanggaran; ?></a>
                <?php } ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            </div>

          </div>

        </div>

      <?php

      if($this->uri->segment('3') == 'ac'){
        $sanksi_pilih = $this->m_data->where('bentuk_sanksi',array('id_bentuk_sanksi' => $this->input->get('id_pengelompokan')))->result();
        foreach($sanksi_pilih as $sp){
            $point_terendah=$sp->point_terendah;
            $point_tertinggi=$sp->point_tertinggi;
            $bentuk_pelanggaran=$sp->bentuk_pelanggaran; 
            $sanksi=$sp->sanksi; 
        }

       ?>
        <div class="col-md-9">
            <div class="box">

                <div class="box-header with-border">

                <h3 class="box-title">Pengelompokan Pelanggar</h3>


                <div class="box-tools pull-right">

                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"

                            title="Collapse">

                    <i class="fa fa-minus"></i></button>

                </div>

                </div>

                <div class="box-body">
                <form  class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Pelanggaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="<?php echo $bentuk_pelanggaran; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Point Terendah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="<?php echo $point_terendah; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Point Teringgi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="<?php echo $point_tertinggi; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sanksi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" readonly><?php echo $sanksi; ?></textarea>
                        </div>
                    </div>
                </form >

                <table class="table table-bordered">

                    <thead>

                    <th>No</th>

                    <th>Nama Siswa</th>

                    <th>Kelas</th>

                    <th>Jumlah Poin</th>

                    <th>Opsi</th>

                    <!-- <th>Opsi</th> -->

                    </thead>

                    <tbody>

                    <?php

                    $list_siswa_pelanggar = $this->m_data->list_siswa_pelanggar()->result();
                    $no=0;
                    foreach($list_siswa_pelanggar as $lsp){
                        if($lsp->jumlah_poin>=$point_terendah and $lsp->jumlah_poin<=$point_tertinggi){
                    $no++;

                    ?>

                    <tr>

                        <td><?php echo $no ?></td>

                        <td><?php echo $lsp->nama_siswa ?></td>

                        <td><?php echo $lsp->nama_kelas ?></td>

                        <td><?php echo $lsp->jumlah_poin ?></td>

                        <td> 
                        <a href="<?php echo base_url('p/begin_detail_siswa/'.$lsp->id_siswa.'') ?>" class="btn btn-danger btn-xs  btn-flat" name="button">Detail Siswa</a>
                        <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalxx<?php echo $l->id_siswa ?>"><?php echo $count_poin->total ?></a> -->
                        <!-- <td> <a href="<?php //echo base_url('p/begin_pelanggaran/'.$l->id_siswa.'') ?>" class="btn btn-danger btn-flat" name="button">Proses</a> -->
                        </td>

                    </tr>

                    <!-- Modal -->

                        

                    <?php  } }?>

                    </tbody>

                </table>





                </div>

            </div>
        </div>
      <!-- /.box -->

    <?php }else{} ?>

    </div>

    </section>

    <!-- /.content -->

  </div>

