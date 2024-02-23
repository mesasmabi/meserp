<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <title>MES ASMABI Admin</title>


	<link rel="shortcut icon" href="{{asset('theme/admin/assets/images/favicon.png')}}" />
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{asset('public/theme/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/css/vendor.bundle.base.css')}}">
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/css/vendor.bundle.base.css')}}">
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css" />
	<!-- data table css for this page -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />
	<!-- endinject -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
	<!-- Layout styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('theme/admin/assets/css/style.css')}}">
	<link href="{{asset('theme/admin/assets/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
	<!-- End layout styles -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
	<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet">
	 

	 
<!-- Vite layout styles 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/"><img src="{{asset('theme/admin/assets/images/logo.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/><img src="{{asset('theme/admin/assets/images/favicon.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                <!--  <img class="img-xs rounded-circle " src="{{asset('theme/admin/assets/images/faces/face15.jpg')}}" alt="">-->
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>{{ Auth::user()->type }}</span>
                </div>
              </div>
            
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/home') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
        <!--  <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/facultyList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Faculty</span>
            </a>
          </li>-->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/courseList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Program</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/deptList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Department</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/cellList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Cell</span>
            </a>
          </li>
		  <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/addCertificate') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Conduct Certificate</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/addTc') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Download Tc</span>
            </a>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/tcList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Tc List</span>
            </a>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/tcReport') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Tc Report</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/studentListscholarship') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Add Scholoarship</span>
            </a>
          </li>
		   <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/addNaacKeyword') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Add Scholoarship Title</span>
            </a>
          </li>
		   <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/admin/nonfacultyList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Non Faculty Edit</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Student</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/studentList') }}">Student List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/addStudent') }}"> Add Student </a></li>
                
              </ul>
            </div>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('theme/admin/assets/images/logo.png')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          
            <ul class="navbar-nav navbar-nav-right">
             
              
            
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                   
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  
                  <div class="dropdown-divider"></div>
                   <a href="{{ url('/logout') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Logout</p>
                  </div>
                </a>
                 
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
       @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
	
	
	
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	
   <script src="{{asset('theme/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('theme/admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('theme/admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('theme/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('theme/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('theme/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('theme/admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('theme/admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('theme/admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('theme/admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('theme/admin/assets/js/todolist.js')}}"></script>

 <!-- endinject -->
 <!-- Custom js for this page -->
  <script src="{{asset('theme/admin/assets/js/dashboard.js')}}"></script>
  <script src="{{asset('theme/admin/assets/js/file-upload.js')}}"></script>
  <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5-stable/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{asset('theme/admin/assets/js/select2.js')}}"></script>
  <script src="{{asset('theme/admin/assets/sweetalert/sweetalert.min.js')}}"></script>

 <!-- End custom js for this page -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
 <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
	 	 
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
	 

<script>
   $(document).ready(function () {
    $('#myTable').DataTable();
});

</script>

<script>
      tinymce.init({
        selector: '.mytextarea'
      });
</script>	

  </body>
</html>