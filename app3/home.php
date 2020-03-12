<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />
  </head>
  <body class="sidebar-fixed">
    <div class="container-scroller">
      
      <!-- HEADERS -->
      <?php include ('Layouts/header.php');?>
      <!-- END HEADERS -->  

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->

      <!-- SIDEBAR -->
      <?php include ('Layouts/sidebar.php');?>
      <!-- END SIDEBAR -->  
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- BREADCRUMBS -->
            <?php include ('Layouts/breadcrumbs.php');?>
            <!-- END BREADCRUMBS --> 

            <!-- CONTENTS DINAMYC -->
                  <?php include ('Layouts/dashboard.php');?>
            <!-- CONTENTS DINAMYC -->
          </div>

          <!-- content-wrapper ends -->
                <?php include ('Layouts/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/Chart.min.js"></script>
    <script src="assets/vendors/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>