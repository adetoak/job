        <!--Fast Click [ OPTIONAL ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/metismenu/metismenu.min.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--DataTables [ OPTIONAL ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?php echo base_url(); ?>assets/plugins/screenfull/screenfull.js"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="<?php echo base_url(); ?>assets/js/demo/tables-datatables.js"></script>
        <script type="text/javascript">
         
        var table;
         
         
        //datatables
        table = $('table').DataTable({
            "ajax": {
                url : "<?php echo site_url("logs/get_logs") ?>",
                type : 'GET'
            },
        });

        table
        .order( [ 0, 'desc' ] )
        .draw();
        </script>