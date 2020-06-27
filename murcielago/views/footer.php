<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.4.9 -->
      </div>
      <strong>Copyright &copy; <?php echo date('Y') ?> </strong> All rights
      reserved .
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/vegas/vegas.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/PACE/pace.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script type="text/javascript">
    $(function () {
        $('.select2').select2()
 $('#datepicker').datepicker({
      autoclose: true
    })
 $('.datepicker1').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    })
         //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    });
    $(function () {

$('.js-sweetalert button').on('click', function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success') {
            showSuccessMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
        else if (type === 'cancel') {
            showCancelMessage();
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });
});

//These codes takes from http://t4t5.github.io/sweetalert/


function showSuccessMessage(datanya) {
    swal("Sukses!", datanya, "success");
}

function showSuccessMessage2(datanya) {
    swal({title: "Sukses", text: datanya, type: "success"},
   function(){
       location.reload();
   }
);
}

function pesanGagal(isi_err) {
    swal("Gagal !", isi_err, "error");
}

function pesanSuksesTambah(url) {
    swal("Sukses !", "Data Berhasil Ditambah", "success");
    window.location.replace(url);
}

function pesanSuksesTambah() {
    swal("Sukses !", "Data Berhasil Di Update", "success");
}
$('#con').vegas({
  // overlay: true,
  transition: 'fade',
  transitionDuration: 4000,
  delay: 10000,
  // color: 'red',
  align:'center',
  valign:'center',
  animation: 'random',
  animationDuration: 20000,
  overlay: '<?php echo base_url() ?>assets/img/overlays/06.png',
  slides: [
    { src: '<?php echo base_url() ?>assets/img/slide/1.jpg' },
    { src: '<?php echo base_url() ?>assets/img/slide/2.jpg' },
    { src: '<?php echo base_url() ?>assets/img/slide/3.JPG' },
    { src: '<?php echo base_url() ?>assets/img/slide/4.JPG' },
    { src: '<?php echo base_url() ?>assets/img/slide/5.JPG' },

  ]
});
</script>
</body>
</html>
