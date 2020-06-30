<div class="content-wrapper">



    <!-- Main content -->

    <section class="content">

      <?php

      echo $this->session->flashdata('alert');

       ?>

      <!-- Default box -->

      <div class="box">

        <div class="box-header with-border">

          <h3 class="box-title">Data Pelanggaran</h3>



          <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"

                    title="Collapse">

              <i class="fa fa-minus"></i></button>

          </div>

        </div>

        <div class="box-body">

            <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModalx">Tambah Pelanggaran</button>

            <!-- Modal -->

          <div id="myModalx" class="modal fade" role="dialog">

            <div class="modal-dialog">



              <!-- Modal content-->

              <div class="modal-content">

                <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                  <h4 class="modal-title">Tambah Pelanggaran</h4>

                </div>

                <div class="modal-body">

                  <div class="form-group">

                    <form action="<?php echo base_url('p/add_pelanggaran') ?>" method="post">

                      <div class="form-group">

                        <label for="">Nama Pelanggaran</label>

                        <input type="text" name="nama_pelanggaran" class="form-control">

                      </div>

                      <div class="form-group">

                        <label for="">Kategori Pelanggaran</label>

                        <select class="form-control select2" name="kategori_pelanggaran" style="width:100%">

                          <option value="">Pilih Kategori</option>

                          <?php

                          foreach($kategori as $k){

                           ?>

                          <option value="<?php echo $k->id_kategori ?>"><?php echo $k->kategori_pelanggaran ?></option>

                        <?php } ?>

                        </select>

                      </div>

                      <div class="form-group">

                        <label for="">Poin Pelanggaran</label>

                        <input type="text" name="poin" class="form-control">

                      </div>

                      <div class="form-group">

                      <label for="">Jenis Pelanggaran</label>

                      <select class="form-control select2" name="jenis_pelanggaran" style="width:100%">

                        <option value="">Pilih Jenis Pelanggaran</option>

                        <option value="Ringan">Ringan</option>

                        <option value="Sedang">Sedang</option>

                        <option value="Berat">Berat</option>

                      </select>

                      </div>


                      <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-flat" name="button">Tambah Pelanggaran</button>

                      </div>

                  </div>

                </form>

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

              <th>Nama Pelanggaran</th>

              <th>Kategori Pelanggaran</th>

              <th>Jenis Pelanggaran</th>

              <th>Opsi</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $no=0;

            foreach($pelanggaran as $p){

            $no++;

            $cek_kategori = $this->m_data->where('kategori_pelanggaran',array('id_kategori' => $p->id_kategori_pelanggaran))->row();

             ?>

            <tr>

              <td><?php echo $no ?></td>

              <td><?php echo $p->nama_pelanggaran ?></td>

              <td><?php echo $cek_kategori->kategori_pelanggaran ?></td>

              <td><?php echo $p->jenis_pelanggaran; ?></td>

              <td>

                <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModalx<?php echo $no ?>"><i class="fa fa-edit"></i></button>

                <a href="<?php echo base_url('p/hapus_pelanggaran/'.$p->id_pelanggaran.'') ?>" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <div id="myModalx<?php echo $no ?>" class="modal fade" role="dialog">

              <div class="modal-dialog">



                <!-- Modal content-->

                <div class="modal-content">

                  <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Edit Pelanggaran</h4>

                  </div>

                  <div class="modal-body">

                    <div class="form-group">

                      <form action="<?php echo base_url('p/edit_pelanggaran') ?>" method="post">

                        <input type="hidden" name="id_pelanggaran" value="<?php echo $p->id_pelanggaran ?>">

                        <div class="form-group">

                          <label for="">Nama Pelanggaran</label>

                          <input type="text" name="nama_pelanggaran" class="form-control" value="<?php echo $p->nama_pelanggaran ?>">

                        </div>

                        <div class="form-group">

                          <label for="">Kategori Pelanggaran</label>

                          <select class="form-control select2" name="kategori_pelanggaran" style="width:100%">

                            <option value="">Pilih Kategori</option>

                            <?php

                            foreach($kategori as $k){

                             ?>

                            <option value="<?php echo $k->id_kategori ?>" <?php echo ($p->id_kategori_pelanggaran == $k->id_kategori) ? 'selected' : '' ?>><?php echo $k->kategori_pelanggaran ?></option>

                          <?php } ?>

                          </select>

                        </div>

                        <div class="form-group">

                          <label for="">Poin Pelanggaran</label>

                          <input type="text" name="poin" class="form-control" value="<?php echo $p->poin ?>">

                        </div>

                        <div class="form-group">

                        <label for="">Jenis Pelanggaran</label>

                        <select class="form-control select2" name="jenis_pelanggaran" style="width:100%">

                          <option value="">Pilih Jenis Pelanggaran</option>

                          <option value="Ringan" <?php if($p->jenis_pelanggaran=='Ringan'){ echo 'selected';}else{ echo '';} ?>>Ringan</option>

                          <option value="Sedang" <?php if($p->jenis_pelanggaran=='Sedang'){ echo 'selected';}else{ echo '';} ?>>Sedang</option>

                          <option value="Berat" <?php if($p->jenis_pelanggaran=='Berat'){ echo 'selected';}else{ echo '';} ?>>Berat</option>

                        </select>

                        </div>

                        <div class="form-group">

                          <button type="submit" class="btn btn-primary btn-flat" name="button">Edit Pelanggaran</button>

                        </div>

                    </div>

                  </form>

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

