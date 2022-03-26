
    <!-- partial:partials/_footer.html -->
     <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
          <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<!-- End custom js for this page -->


{{-- table --}}

{{-- table --}}
<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
<script>
// Jquery Datatable
let jquery_datatable = $("#table1").DataTable()
</script>

<script src="{{ asset('assets/js/mazer.js') }}"></script>


</body>
</html>
