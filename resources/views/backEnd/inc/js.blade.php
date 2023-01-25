<!-- CoreUI and necessary plugins-->
<script src="{{ asset('backEnd/js/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('backEnd/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('backEnd/vendors/simplebar/js/simplebar.min.js') }}"></script>

<!-- Datatable JS install -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#companies').DataTable();
    } );
</script>

<!-- Plugins and scripts required by this view-->
<script src="{{ asset('backEnd/js/main.js') }}"></script>

@stack('js')
