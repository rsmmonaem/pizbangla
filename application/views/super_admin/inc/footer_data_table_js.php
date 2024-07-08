<!-- ./wrapper -->
</div>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>


<!-- Data Table-->
<!-- jQuery  -->
<script src="<?= base_url() ?>assets/backend/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/modernizr.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/detect.js"></script>
<script src="<?= base_url() ?>assets/backend/js/fastclick.js"></script>
<script src="<?= base_url() ?>assets/backend/js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>assets/backend/js/jquery.blockUI.js"></script>
<script src="<?= base_url() ?>assets/backend/js/waves.js"></script>
<script src="<?= base_url() ?>assets/backend/js/jquery.nicescroll.js"></script>
<script src="<?= base_url() ?>assets/backend/js/jquery.scrollTo.min.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/backend/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url() ?>assets/backend/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/backend/pages/datatables.init.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>assets/backend/js/app.js"></script>
<script src="<?= base_url() ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- End -->




<script>
    $("#field1").keyup(function(){
        update();
    });

    function update() {
        $("#result").val($('#field1').val());
    }
</script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

</script>
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function () {
        $('.select2').select2()
    });
</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
</body>
</html>
