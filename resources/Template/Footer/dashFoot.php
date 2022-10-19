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


<script src="resources\assets\plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
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
<script>
  $("#myElem").show().delay(5000).fadeOut();
</script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<script>
    $(document).ready(function() {
        $('#postJob').click(function() {
            var selected = $("#days :selected").map((_, e) => e.value).get();
            $("#selecteddays").val(selected);
        });
    });

    $('select').selectpicker();


    function yesnoCheck(that) {
        if (that.value == "Other ( Name )") {
            document.getElementById("positions").style.display = "block";
            document.getElementById("positions").setAttribute('required', '');


            var data = document.getElementById("positions").value;
            document.getElementById("position").innerHtml = data;


        } else {
            document.getElementById("positions").style.display = "none";
        }
    }
</script>


</body>

</html>