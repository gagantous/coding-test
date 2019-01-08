  <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/google-code-prettify/src/prettify.js') ?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url('assets/vendors/switchery/dist/switchery.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url('assets/vendors/select2/dist/js/select2.full.min.js') ?>"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url('assets/vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url('assets/vendors/autosize/dist/autosize.min.js') ?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
    <!-- starrr -->
    <script src="<?php echo base_url('assets/vendors/starrr/dist/starrr.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js') ?>"></script>
    <!-- <script>
      // $(document).ready(function(){
      let submit = $("#submit_transfer");
      let rekper = $('#rekening_penerima');
      let rekter = $('#rekening_penerima');

      function checkaccount(){
        
        var data =  JSON.stringify( $("#form_transfer").serializeArray() );
        alert(data);
        // let rekf = JSON.stringify(data);
        $.ajax({
          type:'POST',
          // method:'post',
          url:'<?php echo base_url("transaction/transfer/checkaccount") ?>',
          dataType:'json',
          data:data,
          beforeSend:function(response){
            console.log(response);
          },
          success:function(msg) {
            console.log(msg);
          },
          error:function(response){
            console.log("gagal");
          }
        })
      }

      var authaccount = function(data){
        $.ajax({
          url: '<?php echo base_url("transaction/transfer/authaccount") ?>',
          type:'POST',
          data:data,
          dataType:'json',
          // beforeSend:function(response){
          //   console.log(response);
          // },
          complete:function(response){

          },
          success:function(data) {
            console.log(data)
          }
        })
      }

      // $(function () {

        $('#demo-form2').parsley().on('field:validated', function() {
          var ok = $('.parsley-error').length === 0;
          $('.bs-callout-info').toggleClass('hidden', !ok);
          $('.bs-callout-warning').toggleClass('hidden', ok);
        }).on('form:submit', function() {
          var rek = {
            rekper1:rekper.val(),
            rekter1:rekter.val() 
          };
          // let rekf = JSON.stringify(rek);
          // console.log(rekf);
          checkaccount(rek);
          // $("#checkauth").modal('show'); 

          return false;

        });

        
          // check(data)

      // })

    </script> -->
  </body>
</html>