
@extends('layouts.hod.default')

@section('content')
      <div class="main-panel">
         <div class="content-wrapper">
			<div class="page-header">
			  <h3 class="page-title"> Section Three</h3>
			</div>
            <form id="fupForm" enctype="multipart/form-data">
                        @csrf  
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
						<div class="container">
						 <input type="text" id="searchInput" placeholder="Search Batch">
						<select id="searchSelect" class="form-control">
     <option value="">Select Batch</option>
	 <option value="All">All</option>
    @foreach($batches as $batch)
        @if($batch->batch)
			
            <option value="{{ $batch->batch }}">{{ $batch->batch }}</option>
        @endif
    @endforeach
    <!-- Add more options as needed -->
</select>  <br><br>
<select id="semesterSelect" class="form-control">
    <option value="">Select Semester</option>
    @foreach ($semesters as $semester)
        @if ($semester->semester)
            <option value="{{ $semester->semester }}">{{ $semester->semester }}</option>
        @endif
    @endforeach
</select><br><br>
<select id="courseSelect" class="form-control">
    <option value="">Select Course</option>
    @foreach ($course as $courseItem)
        <option value="{{ $courseItem->course_name }}">{{ $courseItem->course_name }}</option>
    @endforeach
</select><br><br><button type="button" class="btn btn-success btn-block enter-btn" id="goButton" style="float: right;">GO</button>

<div id="departmentInfo" style="display: none;">
    <button type="button" id="hideButton" style="float: right;">Next</button>
    <p> Name of the Department : <span><input type="text" class="forms-control" id="department" name="department"></span></p>
    <p> Year of Establishment : <span><input type="text" class="forms-control" id="establishment" name="establishment"></span></p>
    <p> Aided/Self Financing Specify: <span><input type="text" class="forms-control" id="category" name="category"></span></p>
</div>

						</div>
						</div>
		   </div>
		   
		</div>
	</div>
</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    const searchInput = document.getElementById('searchInput');
    const batchSelect = document.getElementById('searchSelect');
    const selectOptions = Array.from(batchSelect.options);

    searchInput.addEventListener('input', function () {
        const searchText = searchInput.value.trim().toLowerCase();
        selectOptions.forEach(option => {
            if (option.value.toLowerCase().includes(searchText) || searchText === '') {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        });
    });

    const goButton = document.getElementById("goButton");
    const hideButton = document.getElementById("hideButton");
    const departmentInfo = document.getElementById("departmentInfo");

    goButton.addEventListener("click", function () {
        departmentInfo.style.display = "block";
    });

    hideButton.addEventListener("click", function () {
        departmentInfo.style.display = "none";
    });


</script>
@endsection