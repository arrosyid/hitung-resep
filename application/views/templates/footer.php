</div>
<!-- /container-fluid -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbar -->
<script>
  var osInstance = $('body').overlayScrollbars({}).overlayScrollbars();

  $('body').on('show.bs.modal', function() {
    setTimeout(function() {
      var osContentElm = $(osInstance.getElements().content);
      var backdropElms = $('body > .modal-backdrop');
      backdropElms.each(function(index, elm) {
        osContentElm.append(elm);
      });
    }, 1);
  });
</script>

<script>
  $(function() {
    $('.table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>