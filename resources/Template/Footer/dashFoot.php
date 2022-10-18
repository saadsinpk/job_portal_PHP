

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="#">JobPortal</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="resources\assets\plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="resources\assets\plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="resources\assets\dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="resources\assets\plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="resources\assets\dist/js/pages/dashboard3.js"></script>
<!-- DataTables  & Plugins -->
<script src="resources\assets\plugins/datatables/jquery.dataTables.min.js"></script>
<script src="resources\assets\plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="resources\assets\plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="resources\assets\plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="resources\assets\plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="resources\assets\plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="resources\assets\plugins/jszip/jszip.min.js"></script>
<script src="resources\assets\plugins/pdfmake/pdfmake.min.js"></script>
<script src="resources\assets\plugins/pdfmake/vfs_fonts.js"></script>
<script src="resources\assets\plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="resources\assets\plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="resources\assets\plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="resources\dropify.min.js"></script>

<script>
$('.dropify').dropify();
</script>

<script>

// === Set old image in Dropify preview ===
(function DL() {
    let oldImage = $('.custom-dropify #oldImage').val();
    let imageSrc = "images/DrivingLicense/" + oldImage;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });

  })();
  // === Set old image in Dropify preview ===
(function SL() {
    let oldImage1 = $('.custom-dropify #oldImage1').val();
    let imageSrc1 = "images/SecurityLicense/" + oldImage1;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc1}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });

  })();
  // === Set old image in Dropify preview ===
(function CV() {
    let oldImage2 = $('.custom-dropify #oldImage2').val();
    let imageSrc2 = "images/CovidVacc" + oldImage2;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc2}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });

  })();
  // === Set old image in Dropify preview ===
(function FA() {
    let oldImage3 = $('.custom-dropify #oldImage3').val();
    let imageSrc3 = "images/DrivingLicense/" + oldImage3;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc3}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });

  })();

  (function RSA() {
    let oldImage4 = $('.custom-dropify #oldImage4').val();
    let imageSrc4 = "images/RSA/" + oldImage4;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc4}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });

  })();

  (function PP() {
    let oldImage5 = $('.custom-dropify #oldImage5').val();
    let imageSrc5 = "images/ProfilePicture/" + oldImage5;

    $(".custom-dropify .dropify-preview").css("display", "block")
    $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "block")

    $(".custom-dropify .dropify-render").html(`<img src='${imageSrc5}' >`);

    $(".custom-dropify .dropify-wrapper input").removeAttr("required")
    

    $(document).on('click', '.custom-dropify .dropify-clear', function (e) {

      $(".custom-dropify .dropify-wrapper .dropify-clear").css("display", "none")
      $(".custom-dropify .dropify-preview").css("display", "none")

      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")

    });

    $(document).on('click', '.custom-dropify .dropify-wrapper input', function (e) {


      $(".custom-dropify .dropify-wrapper input").attr("required")

      $(".custom-dropify #oldImage").removeAttr("value")
      $(".custom-dropify .dropify-preview").css("display", "none")

    });
    PP();
  });

</script>


















</body>
</html>
