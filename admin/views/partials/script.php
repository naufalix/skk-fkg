<!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="../assets/vendors/datatables.net-bs4/jquery.dataTables.js"></script>
  <script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All Pages"]],
      "pageLength": 10,
      "language": {
        "paginate": {
          "previous": "<",
          "next": ">"
        }
      }
    });
  });
  </script>