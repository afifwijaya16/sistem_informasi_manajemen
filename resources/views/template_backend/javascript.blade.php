
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('asset/dist/js/demo.js')}}"></script>
<script src="{{ asset('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{ asset('asset/plugins/jquery.chained.min.js')}}"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(document).ready(function() {
    $('.js-example-basic-1').select2();
  });
  $(document).ready(function() {
    $('.js-example-basic-2').select2();
  });
</script>
<script type="text/javascript">
  $('#jabatan_organisasix').chained('#org');
  
  $('#kecamatansix').chained('#jabatan_organisasix');
  
</script>

</body>
</html>
