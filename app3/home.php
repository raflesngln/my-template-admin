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


            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h4 class="card-title mb-0">Recent Activity</h4>
                                  <div class="dropdown dropdown-arrow-none">
                                    <button class="btn p-0 text-muted dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                      <h6 class="dropdown-header">Settings</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                                <div class="wrapper pb-5 border-bottom">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0">Total Profit</p>
                                    <span class="text-success">+ 2.95%</span>
                                  </div>
                                  <h3 class="mb-0 font-weight-bold">$ 92556</h3>
                                  <canvas id="total-profit-dark"></canvas>
                                </div>
                                <div class="wrapper pt-5">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0">Expenses</p>
                                    <span class="text-muted">+ 52.95%</span>
                                  </div>
                                  <h3 class="mb-4 font-weight-bold">$ 59565</h3>
                                  <canvas id="total-expences-dark"></canvas>
                                </div>
                              </div>
                              <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                                <div class="pl-0 pl-lg-4 ">
                                  <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                    <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                      <h3 class="font-weight-bold mr-2 mb-0">Devices sales</h3>
                                      <h5 class="mb-0 text-muted">( growth 62% )</h5>
                                    </div>
                                    <div class="d-lg-flex">
                                      <p class="mr-2 mb-0 text-muted">Timezone:</p>
                                      <p class="font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                                    </div>
                                  </div>
                                  <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                  <canvas id="device-sales-dark"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body recent-activity">
                            <h4 class="card-title">Recent Activity</h4>
                            <div class="d-flex mb-3">
                              <div>
                                <div class="activity-info bg-danger"> I </div>
                              </div>
                              <div class="activity-details">
                                <h4 class="font-weight-normal">Iva Barber</h4>
                                <p class="mb-0 text-muted">added new task on trello</p>
                                <p class="text-small mb-0 text-muted">05:58AM</p>
                              </div>
                            </div>
                            <div class="d-flex mb-3">
                              <div class="activity-info bg-warning"> D </div>
                              <div class="activity-details">
                                <h4 class="font-weight-normal">Dorothy Romero</h4>
                                <p class="mb-0 text-muted">added new task on trello</p>
                                <p class="text-small mb-0 text-muted">02:50PM</p>
                              </div>
                            </div>
                            <div class="d-flex mb-3">
                              <div class="activity-info bg-success"> R </div>
                              <div class="activity-details">
                                <h4 class="font-weight-normal">Ricardo Hawkins</h4>
                                <p class="mb-0 text-muted">added new task on trello</p>
                                <p class="text-small mb-0 text-muted">05:22AM</p>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="activity-info hide-border bg-info"> N </div>
                              <div class="activity-details">
                                <h4 class="font-weight-normal">Noah Montgomery</h4>
                                <p class="mb-0 text-muted">added new task on trello</p>
                                <p class="text-small mb-0 text-muted">08:19PM</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">My Balance</h4>
                            <div class="d-lg-flex justify-content-between align-items-center">
                              <h1 class="mb-0">$3258</h1>
                              <p class="text-success mb-0 font-weight-medium">+30.56% ($121)</p>
                            </div>
                            <p class="mb-5 pb-1 text-light">Deposit: <span class="font-weight-bold">$5430</span></p>
                            <canvas id="my-balance-dark"></canvas>
                            <div class="border p-4 mt-2">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="text-small">Available :</div>
                                    <span class="font-weight-bold text-small ">30.56%</span>
                                  </div>
                                  <div class="progress progress-sm mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="text-small">Pending :</div>
                                    <span class="font-weight-bold text-small ">69.44%</span>
                                  </div>
                                  <div class="progress progress-sm mt-1">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="dotted-border p-3 mb-3">
                              <div class="row">
                                <div class="col-sm-12">
                                  <h4 class="card-title mb-1">Sales Prediction</h4>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-1-dark"></canvas>
                                  <h3 class="font-weight-bold mt-3">$3258</h3>
                                  <p class="text-muted mb-0">350-985 sales</p>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-2-dark"></canvas>
                                  <h3 class="font-weight-bold mt-3">$3258</h3>
                                  <p class="text-muted mb-0">350-985 sales</p>
                                </div>
                              </div>
                            </div>
                            <div class="dotted-border p-3">
                              <div class="row">
                                <div class="col-sm-12">
                                  <h4 class="card-title mt-4 mb-1">Stock History</h4>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-3-dark"></canvas>
                                  <h3 class="font-weight-bold mt-3">$3258</h3>
                                  <p class="mb-0 text-muted">350-985 sales</p>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-4-dark"></canvas>
                                  <h3 class="font-weight-bold mt-3">$3258</h3>
                                  <p class="mb-0 text-muted">350-985 sales</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card card-danger-gradient">
                          <div class="card-body mb-4">
                            <h4 class="card-title text-white">Account Retention</h4>
                            <canvas id="account-retension"></canvas>
                          </div>
                          <div class="card-body bg-dark-grey pt-4">
                            <div class="row pt-4">
                              <div class="col-sm-6">
                                <div class="text-center border-right border-md-0">
                                  <h4>Conversion</h4>
                                  <h1 class="font-weight-bold mb-md-3">$306</h1>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="text-center">
                                  <h4>Cancellation</h4>
                                  <h1 class="font-weight-bold">$1,520</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-xl-flex justify-content-between mb-2">
                              <h4 class="card-title">Page views analytics</h4>
                              <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                            </div>
                            <canvas id="page-view-analytic-dark"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 font-weight-normal">Orders</h5>
                            <h2 class="mb-4 font-weight-bold">932.00</h2>
                            <div class="dashboard-progress dashboard-progress-1-dark d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center"></i></div>
                            <p class="mt-4 mb-0 text-muted">Completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2">5443</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 font-weight-normal">Unique Visitors</h5>
                            <h2 class="mb-4 font-weight-bold">756,00</h2>
                            <div class="dashboard-progress dashboard-progress-2-dark d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center"></i></div>
                            <p class="mt-4 mb-0 text-muted">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2">50%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 font-weight-normal">Impressions</h5>
                            <h2 class="mb-4 font-weight-bold">100,38</h2>
                            <div class="dashboard-progress dashboard-progress-3-dark d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center"></i></div>
                            <p class="mt-4 mb-0 text-muted">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2">35%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 font-weight-normal">Followers</h5>
                            <h2 class="mb-4 font-weight-bold">4250k</h2>
                            <div class="dashboard-progress dashboard-progress-4-dark d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center"></i></div>
                            <p class="mt-4 mb-0 text-muted">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2">25%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
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