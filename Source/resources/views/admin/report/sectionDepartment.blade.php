@extends('layouts.hod.default')

@section('content')
<style> /* Loader container style */
.loader-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(255, 255, 255, 0.8);
  z-index: 9999;
}
.dataTables td {
    white-space: normal;
    word-wrap: break-word;
}
/* Loader style */
.loader {
  border: 4px solid rgba(0, 0, 0, 0.3);
  border-top: 4px solid #3498db;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 2s linear infinite;
}

/* Loader animation */
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

   .form-row {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-label {
      flex: 1;
      text-align: right;
      margin-right: 10px;
    }

    .form-input {
      flex: 2;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Section 1 List </h3>
        </div>
        <div class="container">
            <div class="container">
                <form id="stepForm" class="py-5">
				  @csrf  
                    <!-- Step 1 -->
                    <div class="step" style="display: block;">
                        <!-- Fields for step 1 -->
                        <div id="section1Content">
					   <div class="form-row">
    <label class="form-label" for="department">Name Of Department:</label>
    <span class="form-input"><input type="text" class="forms-control" id="department" name="department"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="establishment">Year of Establishment:</label>
    <span class="form-input"><input type="text" class="forms-control" id="establishment" name="establishment"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="type">Aided/Self Financing Specify:</label>
    <span class="form-input"><input type="text" class="forms-control" id="category" name="category"></span>
  </div>
                     <div>
  <label for="batchFilter">Filter by Batch:</label>
 <input type="text" id="searchBatch" name="searchBatch" class="form-control searchBatch" />
                                    <input type="hidden" id="searchBatchid" name="searchBatchid" value=""/>
                                    <div id="searchBatch_pos"></div> 
</div><br><br>
                            <p>Programmes offered by the department (UG, PG, MPhil, and PhD):</p>
                        <table class="table table-bordered" id="dataProgramsTable">

                              
                              
                            </table>
                           
                        </div>
                    </div>

                    <!-- Add more steps and content as needed -->
 <div class="step" style="display: none;">
        <!-- Fields for step 2 -->
          <div id="section2Content">
                         
                         	<p>Faculty details including Guest/Visiting Faculty</p>
                        <table class="table table-bordered" id="FaculityDetailsTable">

                              
                              
                            </table>
                           
                        </div>
        <!-- Add your fields here -->
      </div>
	  <div class="step" style="display: none;">
        <!-- Fields for step 3 -->
    
      <div class="form-row">
    <label class="form-label" for="no_teachers">Number of teachers awarded Ph.D. during the year:</label>
    <span class="form-input"><input type="text" class="forms-control" id="no_teachers" name="no_teachers"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="no_phd">No of teachers doing Ph.D.:</label>
    <span class="form-input"><input type="text" class="forms-control" id="no_phd" name="no_phd"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="work_load">Actual work load:</label>
    <span class="form-input"><input type="text" class="forms-control" id="work_load" name="work_load"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="teaching_post">Number of Sanctioned Teaching Posts:</label>
    <span class="form-input"><input type="text" class="forms-control" id="teaching_post" name="teaching_post"></span>
  </div>
  <div class="form-row">
    <label class="form-label" for="current_vac">Current Vacancy:</label>
    <span class="form-input"><input type="text" class="forms-control" id="current_vac" name="current_vac"></span>
  </div>
      </div>
	 
                    <!-- Previous and Next buttons -->
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" id="prevBtn" onclick="changeStep(0)">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="changeStep(1)">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    let dataTableInstance = null;
    let dataPrograms = null;
    let currentFilterBatch = null;
    let enteredData = {};
  
    function populateDataProgramsTable(data,filterBatch) {
    const dataProgramsTable = document.getElementById('dataProgramsTable');
    let tableHtml = '<thead><tr><th>Sl No</th><th>Programme</th><th>Batch</th><th>No of Students Admitted</th><th>Current Strength</th><th>Student-Teacher Ratio</th><th>Drop out ratio</th></tr></thead><tbody>';
    let i = 1;

    data.forEach((val) => {
      val.forEach((item) => {
        if (!filterBatch || filterBatch === item.batch) {
          const rowId = item.program + '-' + item.batch;
         tableHtml += '<tr data-row-id="' + rowId + '">' +
  '<td>' + i + '</td>' +
  '<td><input type="text" class="forms-control" name="program[]" value="' + item.program + '"></td>' +
  '<td><input type="text" class="forms-control" name="batch[]" value="' + item.batch + '"></td>' +
  '<td><input type="text" class="forms-control" name="stcount[]" value="' + item.stcount + '"></td>' +
  '<td><span><input type="text" class="forms-control" id="current_strength_' + rowId + '" name="current_strength[]"></span></td>' +
  '<td><span><input type="text" class="forms-control" id="st_ratio_' + rowId + '" name="st_ratio[]"></span></td>' +
  '<td><span><input type="text" class="forms-control" id="drop_ratio_' + rowId + '" name="drop_ratio[]"></span></td>' +
  '</tr>';
          i++;

          // Repopulate entered data for this row if available
         /* if (enteredData[rowId]) {
			
            $(`#current_strength_${rowId}`).val(enteredData[rowId].current_strength);
            $(`#st_ratio_${rowId}`).val(enteredData[rowId].st_ratio);
            $(`#drop_ratio_${rowId}`).val(enteredData[rowId].drop_ratio);
          }*/
        }
      });
    });

    tableHtml += '</tbody>';
    $('#dataProgramsTable').html(tableHtml);

    // Destroy previous DataTable instance if it exists
    if (dataTableInstance) {
      dataTableInstance.destroy();
    }

    // Initialize DataTables after populating the table
    dataTableInstance = $('#dataProgramsTable').DataTable({
      scrollX: true, // Enable horizontal scrolling
      columns: [
        { width: "5%" },
        { width: "15%" },
        { width: "5%" },
        { width: "5%" },
        { width: "5%" },
        { width: "15%" },
        { width: "15%" },
      ]
    });
  }


   function loadDataForStep(step, callback) {
 //   document.getElementById('loader').style.display = 'block';
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      url: "{{ url('hod/load-section') }}" + (step + 1) + "-data",
      method: 'GET',
      data: { filterBatch: currentFilterBatch },
      success: function (data) {
        if (step === 0) {
          dataPrograms = data.data_programs;
          populateDataProgramsTable(dataPrograms, currentFilterBatch); // Use currentFilterBatch instead of filterBatch
        //  document.getElementById('loader').style.display = 'none';
        }
        callback();
      },
      error: function () {
      //  document.getElementById('loader').style.display = 'none';
        console.error('Error fetching data for step ' + (step + 1));
      },
    });
  }
  

 
   let currentStep = 0;
  const steps = document.querySelectorAll('.step');
 let textBoxValues = []; // Array to store the values

            // Function to retrieve and store the text box values
            function storeTextBoxValues() {
                textBoxValues = []; // Clear the array before storing new values
                $('.step2-input').each(function () {
                    const value = $(this).val(); // Get the value of the current text box
                    textBoxValues.push(value); // Add the value to the array
                });
				return textBoxValues;
            }
			
	
 function showStep(stepIndex) {
	
  steps.forEach((step, index) => {
    step.style.display = index === stepIndex ? 'block' : 'none';
  });

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  if (stepIndex === 0) {
    prevBtn.style.display = 'none';
  } else {
    prevBtn.style.display = 'inline-block';
  }

  if (stepIndex === steps.length - 1) {
    nextBtn.innerHTML = 'Submit';
	
  } else {
    nextBtn.innerHTML = 'Next';
  }

  currentStep = stepIndex;

 if (currentStep === 0) {
    //  populateEnteredData();
    } else if (currentStep === 1) {
		 let a =storeTextBoxValues();
     loadFacultyDetails(a);
	 
	
   // populateEnteredFacultyData();	  // Call the function to load faculty details for Step 2
    } else if (currentStep === 2) {
		
      // You can add any logic here for Step 3 if needed
    }
}

 

 // Event listener for the previous button to populate the entered data when going back
  document.getElementById('prevBtn').addEventListener('click', () => {
    changeStep(-1); // Use the changeStep function to navigate to the previous step
  });
  let previousStep = 0; // Add this variable to keep track of the previous step

 const stepOrder = [1, 2, 3, 4]; // Add more steps if needed

function changeStep(stepChange, event) {
    const nextStep = currentStep + stepChange;
 if (nextStep >= 0 && nextStep < steps.length) {
      showStep(nextStep);
      previousStep = currentStep;
      currentStep = nextStep;
    } else if (nextStep === steps.length) {

      generatepdf(); // Call the generatepdf function with the event object
      document.getElementById('stepForm').reset();
      showStep(0);
      currentStep = 0;
      previousStep = -1;
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
   // showStep(currentStep);
    loadDataForStep(currentStep, () => {
      if (dataPrograms && dataPrograms.length > 0) {

        populateDataProgramsTable(dataPrograms, null);
        initializeDataTable();
      }
    });
  });

 
  

    function initializeDataTable() {
        dataTableInstance = $('#dataProgramsTable').DataTable({
            scrollX: true,
            columns: [
                { width: "5%" },
                { width: "15%" },
                { width: "5%" },
                { width: "5%" },
                { width: "5%" },
                { width: "15%" },
                { width: "15%" },
                // Add width values for other columns here...
            ]
        });
    }
 $(document).ready(function () {
	
        $("#searchBatch").autocomplete({
            source: function (request, response) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: "{{ url('/hod/autocompleteSearchBatch')}}",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            select: function (event, ui) {
                $('.searchBatch').val(ui.item.label);
                $('#searchBatchid').val(ui.item.value);
                dataTableInstance.column(2).search(ui.item.label).draw();
                return false;
            },
            appendTo: "#searchBatch_pos",
        });
    $('#searchBatch').on('change', function () {
        const filterBatch = $(this).val();
        populateDataProgramsTable(dataPrograms, filterBatch);
    });

    $('#searchBatch').on('input', function () {
        const filterBatch = $(this).val();
        // Check if the filterBatch is empty or not
        currentFilterBatch = filterBatch; // Update the currentFilterBatch value
        if (filterBatch === '') {
            // If the search batch field is empty, show all records
            populateDataProgramsTable(dataPrograms, null);
        } else {
            // If the search batch field has some value, filter the records accordingly
            populateDataProgramsTable(dataPrograms, filterBatch);
        }
    });


	 });
	////////////////////////////*************Faculty************/////////////////////////
	   function loadFacultyDetails(a) {
		  
    // Loads faculty details for Step 2 and restores entered data if available
   
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      url: "{{ url('/hod/load-section2-data')}}", // Replace with the actual route for Step 2 data
      method: 'GET',
      success: function (data) {
        if (data.faculity_details) {
          populateFacultyDetailsTable(data.faculity_details);
		  console.log(a);
           $('.step2-input').each(function (index) {
                    // Set the value of the current textbox with the value from the array
                    $(this).val(a[index]);
                });
        }
     
      },
      error: function () {
     
        console.error('Error fetching faculty details for Step 2');
      },
    });
  }
let facultyDetailsTableInstance = null;

function populateFacultyDetailsTable(data) {

    const facultyDetailsTable = document.getElementById('FaculityDetailsTable');
    let tableHtml = '<thead><tr><th>Sl No</th><th>Name</th><th>Designation</th><th>Qualification</th><th>Experience</th><th>Permanent/Temporary</th></tr></thead><tbody>';
    let i = 1;

    data.forEach((val) => {
       tableHtml += '<tr>' +
  '<td>' + i + '</td>' +
  '<td><input type="text" class="forms-control" name="facname[]" value="' + val.name + '"></td>' +
  '<td><input type="text" class="forms-control" name="designation[]" value="' + val.designation + '"></td>' +
  '<td><input type="text" class="forms-control" name="highest_edu[]" value="' + val.highest_edu + '"></td>' +
  '<td><span><input type="text" class="forms-control step2-input" id="experience_' + i + '" name="experience[]"></span></td>' +
  '<td><span><input type="text" class="forms-control step2-input" id="permanent_temporary_' + i + '" name="permanent_temporary[]"></span></td>' +
  '</tr>';
        i++;
    });

    tableHtml += '</tbody>';
    facultyDetailsTable.innerHTML = tableHtml;

    // Destroy previous DataTable instance if it exists
    if (facultyDetailsTableInstance) {
        facultyDetailsTableInstance.destroy();
    }

    // Initialize DataTables after populating the Faculty Details table
    facultyDetailsTableInstance = $('#FaculityDetailsTable').DataTable({
        scrollX: true, // Enable horizontal scrolling
        columns: [
            { width: "5%" },
            { width: "25%" },
            { width: "25%" },
            { width: "15%" },
            { width: "15%" },
            { width: "15%" },
        ]
    });
}
function generatepdf() {
  
    // Collect form data
    const formData = new FormData(document.getElementById('stepForm'));
    var url = "{{ url('/hod/generateSection1')}}";

    // Send AJAX request to the server
    const xhr = new XMLHttpRequest();
      xhr.open('POST', url); // Replace 'YOUR_LARAVEL_ROUTE_URL' with the actual Laravel route URL that handles PDF generation
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.responseType = 'blob';

    xhr.onload = function () {
      if (xhr.status === 200) {
        // Create a download link for the generated PDF
        const url = window.URL.createObjectURL(xhr.response);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'generated_pdf.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        window.URL.revokeObjectURL(url);
      }
    };

    // Send form data as the request payload
    xhr.send(formData);
  }
</script>
@endsection


