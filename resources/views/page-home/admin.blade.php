<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- <link rel="icon" href="{{ asset('images/admin.png') }}"> --}}
  @can('isAdmin')
    
      <link rel="icon" href="{{ asset('images/Admin.png') }}">
    
  @elsecan('isManager')
    
      <link rel="icon" href="{{ asset('images/Manager.png') }}">
    
  @else
      
      <link rel="icon" href="{{ asset('images/user.png') }}">
    
  @endcan   

  @can('isAdmin')
    
  <title>Admin Page</title>
    
  @elsecan('isManager')
    
  <title>Manager Page</title>
    
  @else
      
  <title>User Page</title>
    
  @endcan   

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
</head>
<!--

-->
<body class="hold-transition sidebar-mini ">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://127.0.0.1:8000/home" class="brand-link">
      <img src="{{asset('adminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        @can('isAdmin')
          <div class="image">
            <img src="{{asset('adminLTE/dist/img/dinand.jpg')}}" class="img-circle elevation-2" alt="User Image"> 
          </div>
          <div class="info">
            <a href="http://127.0.0.1:8000/home" class="d-block">Ferdinand Putra <button class="btn btn-outline-success btn-sm"> Admin </button> </a>
          </div>
        @elsecan('isManager')
          <div class="image">
            <img src="{{asset('adminLTE/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="http://127.0.0.1:8000/home" class="d-block">David Martines <button class="btn btn-outline-info btn-sm"> Manager </button> </a>
          </div>
        @else
        <div class="image">
          <img src="{{asset('adminLTE/dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="http://127.0.0.1:8000/home" class="d-block">Markus Aligate <button class="btn btn-outline-secondary btn-sm"> User </button> </a>
        </div>
        @endcan 
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->

    <!-- Main content -->
    @can('isAdmin')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <button class="btn btn-primary btn-lg " type="button" onclick="location.href='http://127.0.0.1:8000/posts'"> Tambah Data </button>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000">Home</a></li>
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/logout">Logout</a></li>
                <li class="breadcrumb-item active">Dashboard Admin</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {{-- <link rel="stylesheet" href="{{asset('admin/css/vert  ical-layout-light/style.css')}}"> --}}

    <div class="main-panel">
      {{-- <div class="content-wrapper"> --}}
        <div class="row">
          <div class="col-sm-12">
            <div class="home-tab">
              <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                  </li>
                </ul>
              </div>  
              <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                          <p class="statistics-title">Bounce Rate</p>
                          <h3 class="rate-percentage">32.53%</h3>
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                        </div>
                        <div>
                          <p class="statistics-title">Page Views</p>
                          <h3 class="rate-percentage">7,682</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                        </div>
                        <div>
                          <p class="statistics-title">New Sessions</p>
                          <h3 class="rate-percentage">68.8</h3>
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                        <div class="d-none d-md-block">
                          <p class="statistics-title">Avg. Time on Site</p>
                          <h3 class="rate-percentage">2m:35s</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div>
                        <div class="d-none d-md-block">
                          <p class="statistics-title">New Sessions</p>
                          <h3 class="rate-percentage">68.8</h3>
                          <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                        <div class="d-none d-md-block">
                          <p class="statistics-title">Avg. Time on Site</p>
                          <h3 class="rate-percentage">2m:35s</h3>
                          <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                 <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                </div>
                                <div id="performance-line-legend"></div>
                              </div>
                              <div class="chartjs-wrapper mt-5">
                                <canvas id="performaneLine"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card bg-primary card-rounded">
                            <div class="card-body pb-0">
                              <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="status-summary-ight-white mb-1">Closed Value</p>
                                  <h2 class="text-info">357</h2>
                                </div>
                                <div class="col-sm-8">
                                  <div class="status-summary-chart-wrapper pb-4">
                                    <canvas id="status-summary"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                    <div class="circle-progress-width">
                                      <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">Total Visitors</p>
                                      <h4 class="mb-0 fw-bold">26.80%</h4>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="circle-progress-width">
                                      <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">Visits per day</p>
                                      <h4 class="mb-0 fw-bold">9065</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  <h4 class="card-title card-title-dash">Market Overview</h4>
                                </div>
                                <div>
                                  <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
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
                              <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                <div class="me-3"><div id="marketing-overview-legend"></div></div>
                              </div>
                              <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  <h4 class="card-title card-title-dash">Pending Requests</h4>
                                  <br>
                                 <p>You have 50+ new requests</p>
                                </div>
                                <div>
                                  <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                </div>
                              </div>
                              <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                  <thead>
                                    <tr>
                                      <th>Customer</th>
                                      <th>Company</th>
                                      <th>Progress</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-check form-check-flat mt-0">
                                          <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex ">
                                          <img src="images/faces/face1.jpg" alt="">
                                          <div>
                                            <h6>Brandon Washington</h6>
                                            <p>Head admin</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <h6>Company name 1</h6>
                                        <p>company type</p>
                                      </td>
                                      <td>
                                        <div>
                                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">79%</p>
                                            <p>85/162</p>
                                          </div>
                                          <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check form-check-flat mt-0">
                                          <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex">
                                          <img src="images/faces/face2.jpg" alt="">
                                          <div>
                                            <h6>Laura Brooks</h6>
                                            <p>Head admin</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <h6>Company name 1</h6>
                                        <p>company type</p>
                                      </td>
                                      <td>
                                        <div>
                                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">65%</p>
                                            <p>85/162</p>
                                          </div>
                                          <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check form-check-flat mt-0">
                                          <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex">
                                          <img src="images/faces/face3.jpg" alt="">
                                          <div>
                                            <h6>Wayne Murphy</h6>
                                            <p>Head admin</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <h6>Company name 1</h6>
                                        <p>company type</p>
                                      </td>
                                      <td>
                                        <div>
                                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">65%</p>
                                            <p>85/162</p>
                                          </div>
                                          <div class="progress progress-md">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check form-check-flat mt-0">
                                          <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex">
                                          <img src="images/faces/face4.jpg" alt="">
                                          <div>
                                            <h6>Matthew Bailey</h6>
                                            <p>Head admin</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <h6>Company name 1</h6>
                                        <p>company type</p>
                                      </td>
                                      <td>
                                        <div>
                                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">65%</p>
                                            <p>85/162</p>
                                          </div>
                                          <div class="progress progress-md">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><div class="badge badge-opacity-danger">Pending</div></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check form-check-flat mt-0">
                                          <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex">
                                          <img src="images/faces/face5.jpg" alt="">
                                          <div>
                                            <h6>Katherine Butler</h6>
                                            <p>Head admin</p>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <h6>Company name 1</h6>
                                        <p>company type</p>
                                      </td>
                                      <td>
                                        <div>
                                          <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">65%</p>
                                            <p>85/162</p>
                                          </div>
                                          <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><div class="badge badge-opacity-success">Completed</div></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body card-rounded">
                              <h4 class="card-title  card-title-dash">Recent Events</h4>
                              <br>
                              <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                      <i class="mdi mdi-calendar text-muted me-1"></i>
                                      <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                  <p class="mb-2 font-weight-medium">
                                    Other Events
                                  </p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                      <i class="mdi mdi-calendar text-muted me-1"></i>
                                      <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                  <p class="mb-2 font-weight-medium">
                                    Quarterly Report
                                  </p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                      <i class="mdi mdi-calendar text-muted me-1"></i>
                                      <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                  <p class="mb-2 font-weight-medium">
                                    Change in Directors
                                  </p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                      <i class="mdi mdi-calendar text-muted me-1"></i>
                                      <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="list align-items-center pt-3">
                                <div class="wrapper w-100">
                                  <p class="mb-0">
                                    <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title card-title-dash">Activities</h4>
                                <p class="mb-0">20 finished, 5 remaining</p>
                              </div>
                              <ul class="bullet-line-list">
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                    <p>Just now</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="d-flex justify-content-between">
                                    <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                    <p>1h</p>
                                  </div>
                                </li>
                              </ul>
                              <div class="list align-items-center pt-3">
                                <div class="wrapper w-100">
                                  <p class="mb-0">
                                    <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title card-title-dash">Todo list</h4>
                                    <div class="add-items d-flex mb-0">
                                      <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                      <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                  </div>
                                  <div class="list-wrapper">
                                    <ul class="todo-list todo-list-rounded">
                                      <li class="d-block">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="d-block">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">23 June 2020</div>
                                            <div class="badge badge-opacity-success me-3">Done</div>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-success me-3">Done</div>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="border-bottom-0">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-danger me-3">Expired</div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title card-title-dash">Type By Amount</h4>
                                  </div>
                                  <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                  <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                      <h4 class="card-title card-title-dash">Leave Report</h4>
                                    </div>
                                    <div>
                                      <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                          <h6 class="dropdown-header">week Wise</h6>
                                          <a class="dropdown-item" href="#">Year Wise</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-3">
                                    <canvas id="leaveReport"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    @elsecan('isManager')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000">Home</a></li>
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/logout">Logout</a></li>
                <li class="breadcrumb-item active">Dashboard Manager</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sales</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Online Store Overview</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-success text-xl">
                    <i class="ion ion-ios-refresh-empty"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                    <span class="text-muted">CONVERSION RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-warning text-xl">
                    <i class="ion ion-ios-cart-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                    <span class="text-muted">SALES RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                  <p class="text-danger text-xl">
                    <i class="ion ion-ios-people-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                    <span class="text-muted">REGISTRATION RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    @elsecan('isUser')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000">Home</a></li>
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/logout">Logout</a></li>
                <li class="breadcrumb-item active">Dashboard User</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <div class="card">
        <div class="card-body">
          <button class="btn btn-outline-info btn-lg"> You Are an User </button> You don't have any access.
        </div>
      </div>
    </div>
    @endcan
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('adminLTE/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('adminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminLTE/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminLTE/dist/js/pages/dashboard3.js')}}"></script>


<!-- plugins:js -->
<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/vendors/progressbar.js/progressbar.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('admin/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('admin/js/template.js')}}"></script>
<script src="{{asset('admin/js/settings.js')}}"></script>
<script src="{{asset('admin/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/dashboard.js')}}"></script>
<script src="{{asset('admin/js/Chart.roundedBarCharts.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>

