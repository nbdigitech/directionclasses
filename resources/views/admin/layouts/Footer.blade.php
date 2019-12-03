<footer class="footer">
        <div class="container-fluid">
          
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('/')}}/public/admin/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{url('/')}}/public/admin/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{url('/')}}/public/admin/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{url('/')}}/public/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{url('/')}}/public/admin/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('/')}}/public/admin/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('/')}}/public/admin/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url('/')}}/public/admin/assets/demo/demo.js"></script>



  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
  </script>
  @yield('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>