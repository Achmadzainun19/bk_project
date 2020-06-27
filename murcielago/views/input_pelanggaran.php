<div class="content-wrapper">



    <!-- Main content -->

    <section class="content">

      <?php

      echo $this->session->flashdata('alert');

       ?>

      <!-- Default box -->

      <div class="box">

        <div class="box-header with-border">

          <h3 class="box-title">Form Tambah Pelanggaran Siswa</h3>



          <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"

                    title="Collapse">

              <i class="fa fa-minus"></i></button>

          </div>

        </div>

        <div class="box-body">

          <p style="font-size:17px;font-weight:500;">Nama Siswa : <?php echo $siswa->nama_siswa ?></p>

          <p style="font-size:17px;font-weight:500">Kelas : <?php echo $siswa->nama_kelas ?></p>

            <form action="<?php echo base_url('p/pelanggaran_sys') ?>" method="post">

              <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>">

              <input type="hidden" name="id_user" value="<?php echo $user_ion->id ?>">

              <div class="row">

                <div class="container-fluid">

                  <button type="submit" name="button" class="btn btn-danger btn-flat pull-right">Tambah Pelanggaran</button>

                </div>

              </div>

              <br>

              <table class="table table-bordered">

               <thead>

                 <tr>

                   <th>No</th>

                   <th>Nama Pelanggaran</th>

                   <th>Kategori Pelanggaran</th>

                   <th>Poin</th>

                   <th>

                     <div class="checkbox">

                        <label>

                          <input type="checkbox" class="check" id="checkAll"> <b>Pilih Semua Pelanggaran</b>

                        </label>

                      </div>

                    </th>

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

                   <td><?php echo $p->poin ?></td>

                   <td>

                     <div class="checkbox">

                        <label>

                          <input type="checkbox" class="check" name="pelanggaran[]" value="<?php echo $p->id_pelanggaran ?>">

                        </label>

                      </div>

                  </td>

                 </tr>

               <?php } ?>

               </tbody>

             </table>

            </form>



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

