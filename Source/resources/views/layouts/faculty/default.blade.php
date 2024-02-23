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
          <a class="sidebar-brand brand-logo" href="/"><img src="{{asset('theme/admin/assets/images/logo.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="{{asset('theme/admin/assets/images/favicon.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                 
                
                 
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>{{ Auth::user()->type }}</span>
                </div>
             
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/faculty/dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/faculty/facultyIndividualList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Faculty</span>
            </a>
          </li>
		   <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/faculty/editProfile') }}">
              <span class="menu-icon">
                <i class="mdi mdi-face-profile"></i>
              </span>
              <span class="menu-title">Profile View</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basics">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Events</span>
              <i class="menu-arrow"></i>
            </a>
			
            <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/eventList') }}">Event List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addEvent') }}">Add Recent Event</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addUpcominEvent') }}">Add Upcoming Event</a></li>
              </ul>
            </div>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicsmonthly" aria-expanded="false" aria-controls="ui-basicsmonthly">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Monthly Report Generation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicsmonthly">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/classEngagement') }}">Add Class engagement Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/classEngageList') }}">Class engagement Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/learnersReport') }}">Add Learners<br>BridgeCourse<br>RemedialClass Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/learnersReportList') }}">Learners<br>BridgeCourse<br>RemedialClass Report List</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/continuousInternalEvaluation') }}">Add Continuous <br>Internal Evaluation</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/continuousInternalEvaluationList') }}">Continuous Internal <br>Evaluation Report List</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/tutorialReport') }}">Tutorial Report</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/tutorialReportList') }}">Tutorial Report List</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/reformsReport') }}">Add Reforms Report<br>Continuous Internal Evaluation</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/reformsReportList') }}">Reforms Report List</a></li>
              </ul>
            </div>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicsprogression" aria-expanded="false" aria-controls="ui-basicsprogression">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">StudentProgression</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicsprogression">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/studentProgressionList') }}">Student Progression List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addStudentProgression') }}">Add Student Progression</a></li>
            
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">FAPI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/fdpList') }}">FAPI List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addFdp') }}">Add FAPI</a></li>
               
                
              </ul>
            </div>
          </li>
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
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addFapiAcademicBody') }}">Participation In Academic Bodies</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/fapiAcademicBodyList') }}"> Academic Bodies List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addQuestionPaperSetting') }}">Question Paper Setting</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/QuestionPaperSettingList') }}">Question Paper Setting List</a></li>
                   <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addCuriculamDevelopment') }}">Participation in Design & Development of Curriculum</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/CuriculamDevelopmentList') }}">Curiculam Development List</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addExamValuation') }}">Exam Valuation</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/valuationList') }}">Valuation List</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addTeachingMethodology') }}">Teaching Methodology</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/methodologyList') }}">Methodology List</a></li>
                   <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addIct') }}">ICT</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/IctList') }}">Ict List</a></li>
              </ul>
            </div>
          </li>
           
		   <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Publications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addJournalPublication') }}">Add Journal</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/journalList') }}">Journal List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addBookChapter') }}">Add Book Chapter</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/bookList') }}">Book List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addPatentFilled') }}">Add Patent Filled</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/patentList') }}">Patent List</a></li>
              </ul>
              
            </div>
          </li>
		  <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicM" aria-expanded="false" aria-controls="ui-basicM">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Mou,Project,Grant,Fellowship</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicM">
                
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/addMou') }}">Add MoU</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{ url('/faculty/mouList') }}">MoU List</a></li>
              </ul>
              
            </div>
          </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/faculty/courseListHod')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Marks Enter / Add Scholoarship</span>
            </a>
          </li>
		  
		   <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/faculty/addNaacKeyword') }}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank"></i>
              </span>
              <span class="menu-title">Add Scholoarship Title</span>
            </a>
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
				      <a href="{{ url('faculty/change-password') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
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
	    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
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
    <!-- End custom js for this page -->
  </body>
</html>