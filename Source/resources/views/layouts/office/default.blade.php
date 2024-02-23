<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MES ASMABI Faculty</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/theme/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
	 <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('theme/admin/assets/css/style.css')}}">
	 <link href="{{asset('theme/admin/assets/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('theme/admin/assets/images/favicon.png')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
<!-- Vite layout styles 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])-->

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href=""><img src="{{asset('theme/admin/assets/images/logo.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="{{asset('theme/admin/assets/images/favicon.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
               
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              
                </div>
              </div>
             
             
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/office/dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
		   @if((Auth::User()->role == 3) && (Auth::User()->type != 'sub'))
			  <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basica" aria-expanded="false" aria-controls="ui-basica">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Non Teaching Faculty</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basica">
               
                  <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="{{url('/office/loginStaff')}}">Add Non Faculty </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/office/nonfacultyList')}}">Non Faculty List</a></li>
              </ul> 
              
            </div>
          </li>  
		   
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/office/logBook') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked-circle"></i>
              </span>
              <span class="menu-title">LogBook</span>
            </a>
          </li>
		   <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/office/addNaacKeyword') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked-square"></i>
              </span>
              <span class="menu-title">Add NAAC Keyword</span>
            </a>
          </li>
		  @endif
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Teaching Faculty</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                  @if((Auth::User()->role == 3) && (Auth::User()->type == 'sub'))
                  <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/facultyList') }}">Faculty List</a></li>
               
              </ul>  @else
              <ul class="nav flex-column sub-menu">
		         <li class="nav-item"> <a class="nav-link" href="{{ url('/office/formerfacultyList') }}">Former Faculty List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/facultyList') }}">Faculty List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addFaculty') }}">Add Faculty</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/hodList') }}">Hod List</a></li>
              </ul> @endif
            </div>
          </li>
		 
           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicG" aria-expanded="false" aria-controls="ui-basicG">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Program</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicG">
                 @if((Auth::User()->role == 3) && (Auth::User()->type == 'sub'))
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/courseList') }}">Program List</a></li>
              
             
              </ul>@else
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/courseList') }}">Program List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addCourse') }}">Add Program</a></li>
             
              </ul>@endif
            </div>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Research Centre</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                 @if((Auth::User()->role == 3) && (Auth::User()->type == 'sub'))
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchList') }}">Research List</a></li>
               
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchGuideList') }}">Research Guide List</a></li>
           
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchFellowList') }}">Research Fellow List</a></li>
              
              </ul>@else
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchList') }}">Research List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addResearchCentre') }}">Add Research Centre</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchGuideList') }}">Research Guide List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addResearchGuide') }}">Add Research Guide</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/researchFellowList') }}">Research Fellow List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addResearchFellow') }}">Add Research Fellow</a></li>
              </ul>@endif
            </div>
          </li>
         <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Department</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
                 @if((Auth::User()->role == 3) && (Auth::User()->type == 'sub'))
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/deptList') }}">Department List</a></li>
                
             
              </ul>@else
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/deptList') }}">Department List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addDept') }}">Add Department</a></li>
              
              </ul>@endif
            </div>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank-outline"></i>
              </span>
              <span class="menu-title">Cell</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
                 @if((Auth::User()->role == 3) && (Auth::User()->type == 'sub'))
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/cellList') }}">Cell List</a></li>
               
             
              </ul>@else
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/cellList') }}">Cell List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addCell') }}">Add Cell</a></li>
             
              </ul>@endif
            </div>
          </li>
		       <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicgen" aria-expanded="false" aria-controls="ui-basicr">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank-outline"></i>
              </span>
              <span class="menu-title">General</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicgen">
                 @if((Auth::User()->role == 3) && (Auth::User()->type !== 'sub'))
              <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="{{ url('/office/generalList') }}">General List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/addGeneral') }}">Add General</a></li>
               
             
              </ul>@endif
            </div>
          </li>
          <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/eventList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Event List</span>
            </a>@endif
          </li>
		   <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/studentList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Student List</span>
            </a>@endif
          </li>
		    <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/studentListscholarshipAdmin') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Scholarship List</span>
            </a>@endif
          </li>
		   <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/studentProgressionList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Student Progression List</span>
            </a>@endif
          </li>
		    <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/PhdprogressList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Phd Progress List</span>
            </a>@endif
          </li>
           <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/fdpList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">FAPI List</span>
            </a>@endif
          </li>
		   @if((Auth::User()->role == 3))
           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Faculty Duties</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              
                <li class="nav-item"> <a class="nav-link" href="{{ url('/office/fapiAcademicBodyList') }}"> Academic Bodies List</a></li>
             
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/QuestionPaperSettingList') }}">Question Paper Setting List</a></li>
                  
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/CuriculamDevelopmentList') }}">Curiculam Development List</a></li>
                
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/valuationList') }}">Valuation List</a></li>
                
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/methodologyList') }}">Methodology List</a></li>
                
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/IctList') }}">Ict List</a></li>
              </ul>
            </div>
          </li>@endif
		    @if((Auth::User()->role == 3))
             <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicD" aria-expanded="false" aria-controls="ui-basicD">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Publications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicD">
                
              <ul class="nav flex-column sub-menu">
              
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/journalList') }}">Journal List</a></li>
              
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/bookList') }}">Book List</a></li>
                
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/office/patentList') }}">Patent List</a></li>
                  
              </ul>
              
            </div>
          </li>@endif
		  <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/CellEventList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">CellEvent List</span>
            </a>@endif
          </li>
		   <li class="nav-item menu-items">
              @if((Auth::User()->role == 3))
            <a class="nav-link" href="{{ url('/office/mouList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">MoU List</span>
            </a>@endif
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('theme/admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
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
				      <!--<a href="{{ url('office/change-password') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a> -->
                 
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
	  
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
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