
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="{{ asset('/')}}/assets/js/jquery.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('/')}}/assets/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/')}}/assets/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/')}}/assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/')}}/assets/js/adminlte.min.js"></script>
<script src="{{ asset('/')}}/assets/js/custom.js"></script>
<script src="{{ asset('/')}}/assets/js/product.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>