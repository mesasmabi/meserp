<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <title>MES ASMABI HOD</title>
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
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('theme/admin/assets/images/favicon.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
               <!--   <img class="img-xs rounded-circle " src="{{asset('theme/admin/assets/images/faces/face15.jpg')}}" alt="">-->
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
            <a class="nav-link" href="{{ url('/hod/dashboard') }}">
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
            <a class="nav-link" href="{{ url('/hod/facultyList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Faculty List</span>
             
            </a>
          </li>
		 
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/hod/addFaculty') }}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Add Faculty</span>
            </a>
          </li>
        <!--  <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-blank-outline"></i>
              </span>
              <span class="menu-title">Cell</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/cellList') }}">Cell List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/addCell') }}">Add Cell</a></li>
             
              </ul>
            </div>
          </li>-->
           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Program</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/courseList') }}">Program List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/addCourse') }}">Add Program</a></li>
				
             
              </ul>
            </div>
          </li>
           
              @if((Auth::User()->role == 6))
				   <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-gamepad-circle-up"></i>
              </span>
              <span class="menu-title">Process</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/courseListHod') }}">Process List</a></a></li>
				
             
              </ul>
            </div>
          </li>@endif
         
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
                <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/eventList') }}">Event List</a></li>
				 @if((Auth::User()->role != 6))
               <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/addEvent') }}">Add Recent Event</a></li>
		   @endif
              <li class="nav-item"> <a class="nav-link" href="{{ url('/hod/addUpcominEvent') }}">Add Upcoming Event</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
              @if((Auth::User()->role == 6))
            <a class="nav-link" href="{{ url('/hod/fdpList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">FAPI List</span>
            </a>@endif
          </li>
		   <li class="nav-item menu-items">
              @if((Auth::User()->role == 6))
            <a class="nav-link" href="{{ url('/hod/fapiAcademicBodyList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">FAPI Academic Body List</span>
            </a>@endif
          </li>
		   <li class="nav-item menu-items">
              @if((Auth::User()->role == 6))
            <a class="nav-link" href="{{ url('/hod/deptList') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Department List</span>
            </a>@endif
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	 <script>
	 $(document).ready(function () {
    $('#myTable').DataTable();
});

$(document).ready(function () {
  var table = $('#resultanalysis').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  // Custom search function for Program, Batch, and Semester columns
  $('#searchInput').on('keyup', function () {
    var searchValue = $(this).val();
	
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
		
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var pgm = searchTerms[0];
        var batch = searchTerms[1];
        var semester = searchTerms[2];

        if (pgm && !batch && !semester) {
          table.column(1).search(pgm).draw();
        } else if (!pgm && batch && !semester) {
          table.column(2).search(batch).draw();
        } else if (!pgm && !batch && semester) {
          table.column(3).search(semester).draw();
        } else if (pgm && batch && !semester) {
          table.columns([1, 2]).search(pgm + '|' + batch, true, false).draw();
        } else if (pgm && !batch && semester) {
          table.columns([1, 3]).search(pgm + '|' + semester, true, false).draw();
        } else if (!pgm && batch && semester) {
          table.columns([2, 3]).search(batch + '|' + semester, true, false).draw();
        } else if (pgm && batch && semester) {
          table.columns([1, 2, 3]).search(pgm + '|' + batch + '|' + semester, true, false).draw();
        }
      } else if (searchValue.length === 0) {
        table.search('').columns().search('').draw(); // Clear search if input is empty
      }
    } else {
			var sv = searchValue;
			if (sv) {
 table.search('').columns().search('').draw(); // Clear previous search

  // Search and sort based on specific values
  if (!isNaN(searchValue.charAt(0))) {
    // Search and sort based on batch
    table.column(2).search(searchValue).draw();
    if (table.column(2).data().unique().length > 1) {
      table.column(2).order('asc').draw(); // Sort by batch column if multiple values present
    }
  }
  else if (searchValue.startsWith('Semester ')) {
    // Search and sort based on semester
    var semesterValue = searchValue.substring(9).trim();
    table.column(3).search(semesterValue).draw();
    if (table.column(3).data().unique().length > 1) {
      table.column(3).order('asc').draw(); // Sort by semester column if multiple values present
    }
  }
  else {
    // Search and sort based on program
    table.column(1).search(searchValue).draw();
    if (table.column(1).data().unique().length > 1) {
      table.column(1).order('asc').draw(); // Sort by program column if multiple values present
    }
  }
			} else{ table.search('').columns().search('').draw();}
    }
  });
});
$(document).ready(function () {
  var table = $('#classengreports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchClassengage');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    // Search and sort based on individual From Date or To Date
    var records = table.rows().data();
    var matchingRows = [];

    var searchDates = searchValue.split(',').map(function (date) {
      return moment(date.trim(), 'DD/MM/YYYY');
    });

    records.each(function (record) {
      var fromDate = moment(record[5], 'DD/MM/YYYY');
      var toDate = moment(record[6], 'DD/MM/YYYY');

      // Check if the record's date range overlaps with the search date range
      if (searchDates[0].isSameOrBefore(toDate, 'day') && searchDates[1].isSameOrAfter(fromDate, 'day')) {
        matchingRows.push(record);
      } else if (fromDate.isBetween(searchDates[0], searchDates[1], 'day', '[]') || toDate.isBetween(searchDates[0], searchDates[1], 'day', '[]')) {
        matchingRows.push(record);
      }
    });

    // Filter the table to display the matching rows
    table.clear().rows.add(matchingRows).draw();
    return true;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
      if (!isCombined) {
        // If the search input is not valid for combined search or individual search,
        // restore the original records
        table.clear().rows.add(originalData).draw();
      }
    }
  });
});
$(document).ready(function () {
  var table = $('#ContinuousReports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchContinuousReport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    // Search and sort based on individual From Date or To Date or Between Dates
    var records = table.rows().data();
    var matchingRows = [];

    var searchDates = searchValue.split(',').map(function (date) {
      return moment(date.trim(), 'DD/MM/YYYY');
    });

    records.each(function (record) {
      var fromDate = moment(record[5], 'DD/MM/YYYY');
      var toDate = moment(record[6], 'DD/MM/YYYY');

      // Check if the record's date range overlaps with the search date range
      if (
        searchDates[0].isSame(fromDate, 'day') ||
        searchDates[0].isSame(toDate, 'day') ||
        (searchDates[0].isAfter(fromDate, 'day') && searchDates[0].isBefore(toDate, 'day'))
      ) {
        matchingRows.push(record);
      } else if (
        searchDates[1].isSame(fromDate, 'day') ||
        searchDates[1].isSame(toDate, 'day') ||
        (searchDates[1].isAfter(fromDate, 'day') && searchDates[1].isBefore(toDate, 'day'))
      ) {
        matchingRows.push(record);
      } else if (fromDate.isBetween(searchDates[0], searchDates[1], 'day', '[]') || toDate.isBetween(searchDates[0], searchDates[1], 'day', '[]')) {
        matchingRows.push(record);
      }
    });

    // Filter the table to display the matching rows
    table.clear().rows.add(matchingRows).draw();
    return true;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
      if (!isCombined) {
        // If the search input is not valid for combined search or individual search,
        // restore the original records
        table.clear().rows.add(originalData).draw();
      }
    }
  });
});
$(document).ready(function () {
  var table = $('#ReformReports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchReformReport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    // Search and sort based on individual From Date or To Date or Between Dates
    var records = table.rows().data();
    var matchingRows = [];

    var searchDates = searchValue.split(',').map(function (date) {
      return moment(date.trim(), 'DD/MM/YYYY');
    });

    records.each(function (record) {
      var fromDate = moment(record[5], 'DD/MM/YYYY');
      var toDate = moment(record[6], 'DD/MM/YYYY');

      // Check if the record's date range overlaps with the search date range
      if (
        searchDates[0].isSame(fromDate, 'day') ||
        searchDates[0].isSame(toDate, 'day') ||
        (searchDates[0].isAfter(fromDate, 'day') && searchDates[0].isBefore(toDate, 'day'))
      ) {
        matchingRows.push(record);
      } else if (
        searchDates[1].isSame(fromDate, 'day') ||
        searchDates[1].isSame(toDate, 'day') ||
        (searchDates[1].isAfter(fromDate, 'day') && searchDates[1].isBefore(toDate, 'day'))
      ) {
        matchingRows.push(record);
      } else if (fromDate.isBetween(searchDates[0], searchDates[1], 'day', '[]') || toDate.isBetween(searchDates[0], searchDates[1], 'day', '[]')) {
        matchingRows.push(record);
      }
    });

    // Filter the table to display the matching rows
    table.clear().rows.add(matchingRows).draw();
    return true;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
      if (!isCombined) {
        // If the search input is not valid for combined search or individual search,
        // restore the original records
        table.clear().rows.add(originalData).draw();
      }
    }
  });
});

$(document).ready(function () {
  var table = $('#tutorialreports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchtutorialreport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var fromDate = searchTerms[0];
        var toDate = searchTerms[1];

        if (fromDate && toDate) {
          table.columns([5, 6]).search(fromDate + '|' + toDate, true, false).draw();
          return true;
        }
      }
    } else {
      // Search and sort based on individual From Date or To Date
      var records = table.rows().data();
      var matchingRows = [];

      records.each(function (record) {
        var fromDate = record[5]; // From Date column index
        var toDate = record[6]; // To Date column index

        // Convert the search value and date columns to appropriate formats for comparison
        var searchDate = moment(searchValue, 'DD/MM/YYYY');
        var fromDateValue = moment(fromDate, 'DD/MM/YYYY');
        var toDateValue = moment(toDate, 'DD/MM/YYYY');

        // Check if the search value matches the From Date or To Date
        if (searchDate.isSame(fromDateValue, 'day') || searchDate.isSame(toDateValue, 'day')) {
          matchingRows.push(record);
        }
      });

      // Filter the table to display the matching rows
      table.clear().rows.add(matchingRows).draw();
      return true;
    }

    // If the search input is not valid for combined search or individual search,
    // restore the original records
    table.clear().rows.add(originalData).draw();
    return false;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
    }
  });
});
$(document).ready(function () {
  var table = $('#BridgeCoursereports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchBridgeCourse');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var fromDate = searchTerms[0];
        var toDate = searchTerms[1];

        if (fromDate && toDate) {
          table.columns([4, 5]).search(fromDate + '|' + toDate, true, false).draw();
          return true;
        }
      }
    } else {
      // Search and sort based on individual From Date or To Date
      var records = table.rows().data();
      var matchingRows = [];

      records.each(function (record) {
        var fromDate = record[4]; // From Date column index
        var toDate = record[5]; // To Date column index

        // Convert the search value and date columns to appropriate formats for comparison
        var searchDate = moment(searchValue, 'DD/MM/YYYY');
        var fromDateValue = moment(fromDate, 'DD/MM/YYYY');
        var toDateValue = moment(toDate, 'DD/MM/YYYY');

        // Check if the search value matches the From Date or To Date
        if (searchDate.isSame(fromDateValue, 'day') || searchDate.isSame(toDateValue, 'day')) {
          matchingRows.push(record);
        }
      });

      // Filter the table to display the matching rows
      table.clear().rows.add(matchingRows).draw();
      return true;
    }

    // If the search input is not valid for combined search or individual search,
    // restore the original records
    table.clear().rows.add(originalData).draw();
    return false;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
    }
  });
});
$(document).ready(function () {
  var table = $('#learnerreports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchlearnerreport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var fromDate = searchTerms[0];
        var toDate = searchTerms[1];

        if (fromDate && toDate) {
          table.columns([4, 5]).search(fromDate + '|' + toDate, true, false).draw();
          return true;
        }
      }
    } else {
      // Search and sort based on individual From Date or To Date
      var records = table.rows().data();
      var matchingRows = [];

      records.each(function (record) {
        var fromDate = record[4]; // From Date column index
        var toDate = record[5]; // To Date column index

        // Convert the search value and date columns to appropriate formats for comparison
        var searchDate = moment(searchValue, 'DD/MM/YYYY');
        var fromDateValue = moment(fromDate, 'DD/MM/YYYY');
        var toDateValue = moment(toDate, 'DD/MM/YYYY');

        // Check if the search value matches the From Date or To Date
        if (searchDate.isSame(fromDateValue, 'day') || searchDate.isSame(toDateValue, 'day')) {
          matchingRows.push(record);
        }
      });

      // Filter the table to display the matching rows
      table.clear().rows.add(matchingRows).draw();
      return true;
    }

    // If the search input is not valid for combined search or individual search,
    // restore the original records
    table.clear().rows.add(originalData).draw();
    return false;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
    }
  });
});
$(document).ready(function () {
  var table = $('#remedialreports').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchremedialreport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var fromDate = searchTerms[0];
        var toDate = searchTerms[1];

        if (fromDate && toDate) {
          table.columns([4, 5]).search(fromDate + '|' + toDate, true, false).draw();
          return true;
        }
      }
    } else {
      // Search and sort based on individual From Date or To Date
      var records = table.rows().data();
      var matchingRows = [];

      records.each(function (record) {
        var fromDate = record[4]; // From Date column index
        var toDate = record[5]; // To Date column index

        // Convert the search value and date columns to appropriate formats for comparison
        var searchDate = moment(searchValue, 'DD/MM/YYYY');
        var fromDateValue = moment(fromDate, 'DD/MM/YYYY');
        var toDateValue = moment(toDate, 'DD/MM/YYYY');

        // Check if the search value matches the From Date or To Date
        if (searchDate.isSame(fromDateValue, 'day') || searchDate.isSame(toDateValue, 'day')) {
          matchingRows.push(record);
        }
      });

      // Filter the table to display the matching rows
      table.clear().rows.add(matchingRows).draw();
      return true;
    }

    // If the search input is not valid for combined search or individual search,
    // restore the original records
    table.clear().rows.add(originalData).draw();
    return false;
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
    }
  });
});
$(document).ready(function () {
  var table = $('#fdpreport').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#Searchfdpreport');

  // Custom search function for From Date and To Date columns
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    var hasComma = searchValue.includes(',');

    if (hasComma) {
      if (searchValue.length >= 2) {
        var searchTerms = searchValue.split(',').map(term => term.trim());

        var fromDate = parseDate(searchTerms[0]);
        var toDate = parseDate(searchTerms[1]);

        if (fromDate.isValid() && toDate.isValid()) {
          // Search between the From Date and To Date
          var records = table.rows().data();
          var matchingRows = [];

          records.each(function (record) {
            var recordDate = parseDate(record[5]); // Assuming From Date is in column 5
            if (recordDate.isValid() && recordDate.isBetween(fromDate, toDate, 'day', '[]')) {
              matchingRows.push(record);
            }
          });

          // Filter the table to display the matching rows
          table.clear().rows.add(matchingRows).draw();
          return true;
        }
      }
    } else {
      // Search and sort based on individual From Date or To Date
      var records = table.rows().data();
      var matchingRows = [];

      records.each(function (record) {
        var fromDate = record[5]; // From Date column index
        var toDate = record[6]; // To Date column index

        // Convert the search value and date columns to appropriate formats for comparison
        var searchDate = parseDate(searchValue);
        var fromDateValue = parseDate(fromDate);
        var toDateValue = parseDate(toDate);

        // Check if the search value matches the From Date or To Date
        if (searchDate.isValid() && (searchDate.isSame(fromDateValue, 'day') || searchDate.isSame(toDateValue, 'day'))) {
          matchingRows.push(record);
        }
      });

      // Filter the table to display the matching rows
      table.clear().rows.add(matchingRows).draw();
      return true;
    }

    // If the search input is not valid for combined search or individual search,
    // restore the original records
    table.clear().rows.add(originalData).draw();
    return false;
  }

  // Function to parse dates with moment.js, trying multiple date formats
  function parseDate(dateString) {
    var formatsToTry = ['DD/MM/YYYY', 'YYYY-MM-DD', 'MM/DD/YYYY', 'YYYY/MM/DD'];

    for (var i = 0; i < formatsToTry.length; i++) {
      var parsedDate = moment(dateString, formatsToTry[i], true);
      if (parsedDate.isValid()) {
        return parsedDate;
      }
    }

    // Return "Invalid date" if parsing was unsuccessful
    return moment.invalid();
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
    } else {
      // Perform the custom search and track if it was a combined search
      var isCombined = customSearch(searchValue);
      if (!isCombined) {
        // If the search input is not valid for combined search or individual search,
        // restore the original records
        table.clear().rows.add(originalData).draw();
      }
    }
  });
});


$(document).ready(function () {
  var table = $('#bookTable').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchBookTable');

  // Custom search function for year-wise search
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
      return;
    }

    // Search and sort based on year
    var records = table.rows().data();
    var matchingRows = [];

    records.each(function (record) {
      var publicationYear = record[8]; // Year column index

      // Extract the year from the publication date
      var yearFromTable = publicationYear.substring(publicationYear.length - 4);

      // Check if the search value matches the year of the publication date
      if (searchValue === yearFromTable) {
        matchingRows.push(record);
      }
    });

    // Filter the table to display the matching rows
    table.clear().rows.add(matchingRows).draw();
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    // Perform the custom search
    customSearch(searchValue);
  });
});
$(document).ready(function () {
  var table = $('#JournalTable').DataTable({
    dom: 'lrtip' // Hide the search input
  });

  var originalData = table.rows().data().toArray();
  var searchInput = $('#searchJournal');

  // Custom search function for year-wise search
  function customSearch(searchValue) {
    table.search('').draw(); // Clear previous search

    if (searchValue === '') {
      // If the search input is empty, restore the original records
      table.clear().rows.add(originalData).draw();
      return;
    }

    // Search and sort based on year
    var records = table.rows().data();
    var matchingRows = [];

    records.each(function (record) {
      var publicationYear = record[8]; // Year column index

      // Extract the year from the publication date
      var yearFromTable = publicationYear.substring(publicationYear.length - 4);

      // Check if the search value matches the year of the publication date
      if (searchValue === yearFromTable) {
        matchingRows.push(record);
      }
    });

    // Filter the table to display the matching rows
    table.clear().rows.add(matchingRows).draw();
  }

  // Handle input event on the search input
  searchInput.on('input', function () {
    var searchValue = $(this).val();

    // Perform the custom search
    customSearch(searchValue);
  });
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