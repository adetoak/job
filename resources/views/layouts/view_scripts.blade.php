        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/fast-click/fastclick.min.js') }}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{ asset('public/js/scripts.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{ asset('public/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{ asset('public/plugins/metismenu/metismenu.min.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/switchery/switchery.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!--DataTables [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('public/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
        <script src="{{ asset('public/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/screenfull/screenfull.js')}}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{ asset('public/js/demo/tables-datatables.js')}}"></script>



        <script type="text/javascript">
            // $('#idprotection').click(function() {
            //    if ($(this).is(':checked')) {
            //       $('protectionInfo').show();
            //    } else {
            //       $('protectionInfo').hide();
            //    }
            // });

            $("#idppadd").click(function() {
                // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
                $('#idpp').toggle('slow');
            });
        </script>