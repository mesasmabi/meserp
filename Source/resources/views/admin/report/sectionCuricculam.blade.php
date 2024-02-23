@extends('layouts.hod.default')

@section('content')
<style>
.table-container {
    max-height: 300px; /* Adjust the maximum height as needed */
    overflow-y: auto; /* Add a vertical scrollbar when needed */
}


#step3Table {
    width: 100%;
    border-collapse: collapse;
    /* Add other styling as needed */
}
 </style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Section 1 List </h3>
        </div>
		<form id="fupForm" enctype="multipart/form-data">
                        @csrf  
        <div class="container">
		<select class="form-control" id="searchpgm">
	<option value="">Select Program</option>
    <option value="B.Sc. Botany">B.Sc. Botany</option>
    <option value="Other Programme">Other Programme</option>
    <!-- Add more options as needed -->
</select>

<select class="form-control" id="searchbatch">
    <option value="">Select batch</option>
    <option value="2019-2021">2019-2021</option>
    <option value="Other Batch">Other Batch</option>
    <!-- Add more options as needed -->
</select>

<select class="form-control" id="searchsem">
     <option value="">Select Semester</option>
    <option value="Semester 4">Semester 4</option>
    <option value="Other Semester">Other Semester</option>
    <!-- Add more options as needed -->
</select>

            <div class="step-form">
               <div class="step active" style="display: block;">
    <h2>Demand Ratio and Unit Cost</h2> 
@if(isset($step1Data))
 
    <table id="ptaTable" class="table table-bordered">
       <thead>
           	<tr>
											<tr>
												<th rowspan="2">Sl No</th>
												<th rowspan="2">Programme</th>
												<th rowspan="2">Unit Cost of Education</th>
												<th colspan="2">Admission Eligibility<br> Mark % </th>
												<th rowspan="2">Demand Ratio</th>
											</tr>
											 <tr>
												<th>Top Rank </th>
												<th>Last Rank </th>
											 </tr>
        </thead>
        <tbody>
		@if(isset($step1Data['demandprogram']))
          @foreach($step1Data['demandprogram'] as $index => $demandprogram)
                <tr>
                  <td>{{ $index + 1 }}</td>
                    <td><span><input type="text" class="forms-control" name="demandprogram[]" value="{{ $demandprogram }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="demandunitcost[]" value="{{ $step1Data['demandunitcost'][$index] }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="toprank[]" value="{{ $step1Data['toprank'][$index] }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="lastrank[]" value="{{ $step1Data['lastrank'][$index] }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="demandratio[]" value="{{ $step1Data['demandratio'][$index] }}"></span></td>
                </tr>
            @endforeach
@endif
        </tbody>
    </table>
	  <button type="button" onclick="addRow()">Add Row</button>
      <button class="next-btn" id="step1">Next</button>
@else
    <!-- Display only the table structure when there's no fetched data -->
    <table id="ptaTable" class="table table-bordered">
        <thead>
           	<tr>
											<tr>
												<th rowspan="2">Sl No</th>
												<th rowspan="2">Programme</th>
												<th rowspan="2">Unit Cost of Education</th>
												<th colspan="2">Admission Eligibility<br> Mark % </th>
												<th rowspan="2">Demand Ratio</th>
											</tr>
											 <tr>
												<th>Top Rank </th>
												<th>Last Rank </th>
											 </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><span><input type="text" class="forms-control" name="demandprogram[]"></span></td>
                <td><span><input type="text" class="forms-control" name="demandunitcost[]"></span></td>
                <td><span><input type="text" class="forms-control" name="toprank[]"></span></td>
                <td><span><input type="text" class="forms-control" name="lastrank[]"></span></td>
                <td><span><input type="text" class="forms-control" name="demandratio[]"></span></td>
            </tr>
            <!-- Additional rows can be added here -->
        </tbody>
    </table>
    <button type="button" onclick="addRow()">Add Row</button>
    <button class="next-btn" id="step1">Next</button>
    @endif
</div>

                   <div class="step" style="display: none;">
                    <h2>Details of Value Added Courses (Certificate, Diploma etc.) Conducted by the department</h2>
              <table class="table table-bordered" id="step2Table">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Value Added Courses (Certificate, Diploma etc.)</th>
            <th>Curriculum designed by</th>
            <th>Duration</th>
            <th>Names of Faculty Engaged</th>
            <th>Number of students participated</th>
        </tr>
    </thead>
    <tbody id="addonCoursesTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>

                    
                  
                    <button class="next-btn">Next</button>
                </div>
              <div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
			 
                    <h2>Result Analysis</h2>
					<table class="table table-bordered" id="step3Table">
   <thead>
										<tr>
											<th rowspan="2">Sl No</th>
											<th rowspan="2">Programme</th>
											<th rowspan="2">Batch</th>
											<th rowspan="2">Semester</th>
											<th rowspan="2">Number of students <br>appeared</th>
											<th rowspan="2">Number of students passed <br>(Eligible For Higher Studies</th>
											<th rowspan="2">Percentage of pass</th>
											<th colspan="10">Grade</th>
											<th rowspan="2">Remarks</th>
										</tr>
										<tr>
											<th>P</th>
											<th>A+</th>
											<th>A</th>
											<th>B+</th>
											<th>B</th>
											<th>C</th>
											<th>D</th>
											<th>E</th>
											<th>O</th>
											<th>F</th>
										</tr>
									</thead>
    <tbody id="overallMarksTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
              
                    <button class="next-btn">Next</button>     
                    
                </div> 
				 <div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
    <h2>Programme outcome details</h2> 
@if(isset($step4Data))
 
    <table id="ptaTable6" class="table table-bordered">
     <thead>
											<tr>
												<th>Sl No</th>
												<th>Programme</th>
												<th>Programme Outcome (PO)</th>
												<th>Programme Specific  <br>Outcome (PSO)</th>
												<th>Analysis
												</th>
											   
											</tr>
										</thead>
        <tbody>
		@if(isset($step4Data['pg']))
          @foreach($step4Data['pg'] as $index => $pg)
                <tr>
                  <td>{{ $index + 1 }}</td>
                    <td><span><input type="text" class="forms-control" name="pg[]" value="{{ $pg }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="po[]" value="{{ $step4Data['po'][$index] }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="pso[]" value="{{ $step4Data['pso'][$index] }}"></span></td>
                    <td><span><input type="text" class="forms-control" name="analysis[]" value="{{ $step4Data['analysis'][$index] }}"></span></td>
                   
                </tr>
            @endforeach
@endif
        </tbody>
    </table>
	 <button type="button" onclick="addRow6()">Add Row</button>
	  	
      <button class="next-btn">Next</button>
@else
    <!-- Display only the table structure when there's no fetched data -->
    	<table class="table table-bordered" id="ptaTable6">
										<thead>
											<tr>
												<th>Sl No</th>
												<th>Programme</th>
												<th>Programme Outcome (PO)</th>
												<th>Programme Specific  <br>Outcome (PSO)</th>
												<th>Analysis
												</th>
											   
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td><span><input type="text" class="forms-control" id="pg" name="pg[]" ></span></td>
												<td><span><input type="text" class="forms-control" id="po" name="po[]" ></span></td>
												<td><span><input type="text" class="forms-control" id="pso" name="pso[]" ></span></td>
												<td><span><input type="text" class="forms-control" id="analysis" name="analysis[]" ></span></td>
												
											  </tr>
											</tbody>
										</table>
											<button type="button" onclick="addRow6()">Add Row</button>
										
    <button class="next-btn">Next</button>
    @endif
</div>
						<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Class engagement details of the department</h2>
				 	<table class="table table-bordered" id="step5Table">
 	<thead>
												<tr>
													<th>Sl No</th>
													<th>Course (including OC, courses for programmes of other departments)</th>
													<th>Program</th>
													<th>Batch</th>
													<th>Semester</th>
												    
													 <th>From Date</th>
													 <th>To Date</th>
													 <th>Faculty</th>
													<th>Total hours  <br>allotted</th>
													<th>Total hours  <br>engaged</th>
													<th>Extra hours taken in addition <br> to total allotted hours</th>
													<th>Remedial Classes taken</th>
												</tr>
											</thead>
    <tbody id="classengreportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button></div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Continuous Internal Evaluation Details</h2>
				<table class="table table-bordered" id="step6Table">
 	<thead>
												<tr>
													<th>Sl No</th>
													<th>Course (including courses for programmes of other departments)</th>
													<th>Programme</th>
													<th>Batch</th>
													<th>Semester</th>
													<th>FromDate</th>
													<th>ToDate</th>
													<th>Faculty Name</th>
													<th>No. of students having <br> shortage of attendance</th>
													<th>No. of assignments  <br>given to each student </th>
													<th>No. of Seminars  <br>presented By Each student</th>
													<th>No. of Internal  <br>Examinations Conducted</th>
													<th>No. of Projects given</th>
													<th>No. of Students failed  <br>in internal evaluation</th>
													<th>No. of Students  <br>grievances received</th>
													<th>No. of grievances <br> redressed</th>
												</tr>
											</thead>
    <tbody id="ContinuousReportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2> Reforms introduced in Continuous Internal Evaluation (CIE)</h2>
				<table class="table table-bordered" id="step7Table">
 <thead>
												<tr>
												<th>Sl No</th>
													<th>Course (including OC, courses for programmes of other departments)</th>
													<th>Program</th>
													<th>Batch</th>
													<th>Semester</th>
												    
													 <th>From Date</th>
													 <th>To Date</th>
													 <th>Faculty</th>
													<th>
														Brief description of Reforms introduced in Continues Internal Evaluation (CIE)
													</th>
												</tr>
											</thead>
    <tbody id="ReformReportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
					
						<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Tutorial System</h2>
				<table class="table table-bordered" id="step8Table">
 <thead>
											<tr>
													<th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>Tutor</th>
													<th>From Date</th>
													 <th>To Date</th>
													<th>Total No. of Tutorial<br> Hours during the year</th>
													<th>Major Discussions in<br> the Tutorial Hour</th>
													<th>Tutorial Report <br>Submitted or Not</th>
												</tr>
											</thead>
    <tbody id="TutorialReportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
						<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Details of Bridge Courses Conducted and its Outcome</h2>
				<table class="table table-bordered" id="step9Table">
 <thead>
												<tr>
												      <th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>Faculty</th>
													<th>From Date</th>
													<th>To Date</th>
													<th>Total No of  <br>Classes Conducted </th>
													<th>No of students  <br> attended </th>
													<th>No of Students  <br>Benefitted</th>
													<th>Remarks</th>
												</tr>
											</thead>
    <tbody id="BridgeCoursereportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Details of Remedial Classes conducted and its Outcome</h2>
				<table class="table table-bordered" id="step10Table">
 <thead>
												<tr>
												    <th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>Faculty</th>
													<th>From Date</th>
													<th>To Date</th>
													<th>Total No of  <br>Classes Conducted </th>
													<th>No of students  <br> attended </th>
													<th>No of Students  <br>Benefitted</th>
													<th>Remarks</th>
												</tr>
											</thead>
    <tbody id="RemedialreportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
			
                    <button class="next-btn">Next</button>
					</div>
							</div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Details of Programmes for Advanced Learners and Outcome</h2>
				<table class="table table-bordered" id="step11Table">
 <thead>
												<tr>
												     <th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>Faculty</th>
													<th>From Date</th>
													<th>To Date</th>
													
													<th>No of students  <br> attended </th>
													<th>No of Students  <br>Benefitted</th>
													<th>Remarks</th>
												</tr>
											</thead>
    <tbody id="LearnerreportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
				<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Details of Programmes for Slow Learners and Outcome</h2>
				<table class="table table-bordered" id="step12Table">
 <thead>
												<tr>
												     <th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>Faculty</th>
													<th>From Date</th>
													<th>To Date</th>
													
													<th>No of students  <br> attended </th>
													<th>No of Students  <br>Benefitted</th>
													<th>Remarks</th>
												</tr>
											</thead>
    <tbody id="SlowreportsTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
			
                    <button class="next-btn">Next</button>
					</div>
						<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Details of Seminars, Workshops, FDP, Training Programmes, Skill enrichment programmes, Fests, camps, invited talks, Association activities etc. organised by the dept.</h2>
				<table class="table table-bordered" id="step13Table">
 <thead>
												<tr>
												   <th>Sl. No</th>
													<th>Title of the programme</th>
													<th>Category</th>
													<th>Department</th>
													<th>No of Participants</th>
													<th>From Date</th>
													<th>To Date</th>
													<th>From college</th>
													<th>From Outside</th>
													<th>Funding Agency With <br> fund sanctioned</th>
													<th>Fund enerated from  <br>any other sources</th>
													<th>Total funds received</th>
													<th>Total expenditure</th>
												</tr>
											</thead>
    <tbody id="fdpreportTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Publications of Faculty in journals,Articles etc</h2>
			<table class="table table-bordered" id="step14Table">
 <thead>
												<tr>
												    <th>Sl. No</th>
													<th>Title </th>
													<th>Name of the Journal </th>
													<th>Type </th>
													<th>Department</th>
													<th>Impact Factor</th>
													<th>ISSN/ISBN No.</th>
													<th> Volume,Page No.</th>
													<th> Year</th>
													<th>Authorship</th>
												</tr>
											</thead>
    <tbody id="bookTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				  
                    <button class="next-btn">Next</button>
					</div>
				<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Publications of Faculty in Books,Book Chapters etc</h2>
			<table class="table table-bordered" id="step15Table">
 <thead>
											<tr>
													<th>Sl. No</th>
													<th>Title </th>
													<th>Name of the Paper </th>
													<th>Type </th>
													<th>Department</th>
													<th>Impact Factor</th>
													<th>ISSN/ISBN No.</th>
													<th> Volume,Page No.</th>
													<th>Year </th>
													<th>Authorship</th>
												</tr>
											</thead>
    <tbody id="JournalTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				   
                    <button class="next-btn">Next</button>
					</div>
						<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
				 <h2>Faculty as Invited speaker/Resource persons/ Paper presenter etc.,</h2>
			<table class="table table-bordered" id="step16Table">
 <thead>
											<tr>
													<th>Sl. No</th>
													<th>Title of topic </th>
													<th>Details of Programme </th>
													<th>Name Of Faculty </th>
													<th>From Date</th>
													<th>To Date</th>
													<th>Organised by</th>
													<th>Invited Speaker/Resource person</th>
												</tr>
											</thead>
    <tbody id="fapireportTableBody">
        <!-- Placeholder for addonCourses data -->
    </tbody>
</table>
				
                    <button class="next-btn">Next</button>
					</div>
					<div class="step" style="display: none; max-height: none; overflow-x: scroll; overflow-y: hidden;">
						
                  <button type="submit" class="btn btn-success btn-block enter-btn" style="float:right;">Pdf Download</button> 
					</div>
            </div>
        </div>
		</form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    document.getElementById('fupForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var form = e.target;
        var url = "{{ url('/hod/generateSection2')}}";

        // Create a new FormData object and append form data to it
        var formData = new FormData(form);

        // Send an AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.responseType = 'blob';

        xhr.onload = function() {
            if (xhr.status === 200) {
                // Create a download link
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(xhr.response);
                link.download = 'generated_pdf.pdf';
                link.click();
            }
        };

        xhr.send(formData);
    });
</script>
<script>
 let step2Data;
 let stepData = [];
 function saveStepData(step, index, rowData) {
        if (!stepData[step]) {
            stepData[step] = [];
        }
        stepData[step][index] = rowData;
    }
	

let currentStep = 0;
    $(document).ready(function () {
        const steps = $('.step');
        const nextBtns = $('.next-btn');
        const prevBtns = $('.prev-btn');

        
        const stepData = [];

        function updateStepVisibility() {
            steps.hide();
           steps.eq(currentStep).show();
		    
        }

     
        updateStepVisibility();
		
		function populateStep2Table(data, currentStep) {
			
    const addonCoursesTableBody = $('#addonCoursesTableBody');
    addonCoursesTableBody.empty();

    let tableHtml = '';
	if (data.val_add_course && data.val_add_course.length > 0) {
    data.val_add_course.forEach(function (courseName, index) {
        const designedBy = data.designedby[index] || '';
        const tenure = data.tenure[index] || '';
        const facultyEng = data.facultyeng[index] || '';
        const stPart = data.stpart[index] || '';

        tableHtml += '<tr>' +
            '<td>' + (index + 1) + '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" name="val_add_course[]" value="' + courseName + '">' +
            courseName +
            '</td>' +
            '<td><span><input type="text" class="forms-control" name="designedby[]" value="' + designedBy + '"></span></td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" name="tenure[]" value="' + tenure + '">' +
            tenure +
            '</td>' +
            '<td><span><input type="text" class="forms-control" name="facultyeng[]" value="' + facultyEng + '"></span></td>' +
            '<td><span><input type="text" class="forms-control" name="stpart[]" value="' + stPart + '"></span></td>' +
            '</tr>';

        // Save data for the current step and index
        saveStepData(currentStep, ["designedby", "facultyeng", "stpart"]);
    });
	
		}

    addonCoursesTableBody.html(tableHtml);
}

       
	function populateStep3Table(data, currentStep) {
    const overallMarksTableBody = $('#overallMarksTableBody');
    overallMarksTableBody.empty();

   let tableHtml = '';
for (let i = 0; i < data.overallpgm.length; i++) {
    const overallpgm = data.overallpgm[i] || '';
    const overallbatch = data.overallbatch[i] || '';
    const overallsemester = data.overallsemester[i] || '';
    const total_students = data.total_students[i] || '';
    const total_pass_count = data.total_pass_count[i] || '';
    const pass_percentage = data.pass_percentage[i] || '';
    const passed_grade = data.passed_grade[i] || '';
    const A_plus_count = data.A_plus_count[i] || '';
    const A_count = data.A_count[i] || '';
    const B_plus_count = data.B_plus_count[i] || '';
    const B_count = data.B_count[i] || '';
    const C_count = data.C_count[i] || '';
    const D_count = data.D_count[i] || '';
    const E_count = data.E_count[i] || '';
    const O_count = data.O_count[i] || '';
    const failed_grade = data.failed_grade[i] || '';
     const remarks = data.remarks[i] || '';
    tableHtml += '<tr>' +
        '<td>' + (i + 1) + '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="overallpgm[]" value="' + overallpgm + '">' +
        overallpgm +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="overallbatch[]" value="' + overallbatch + '">' +
        overallbatch +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="overallsemester[]" value="' + overallsemester + '">' +
        overallsemester +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="total_students[]" value="' + total_students + '">' +
        total_students +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="total_pass_count[]" value="' + total_pass_count + '">' +
        total_pass_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="pass_percentage[]" value="' + pass_percentage + '">' +
        pass_percentage + '%' +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="passed_grade[]" value="' + passed_grade + '">' +
        passed_grade +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="A_plus_count[]" value="' + A_plus_count + '">' +
        A_plus_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="A_count[]" value="' + A_count + '">' +
        A_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="B_plus_count[]" value="' + B_plus_count + '">' +
        B_plus_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="B_count[]" value="' + B_count + '">' +
        B_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="C_count[]" value="' + C_count + '">' +
        C_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="D_count[]" value="' + D_count + '">' +
        D_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="E_count[]" value="' + E_count + '">' +
        E_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="O_count[]" value="' + O_count + '">' +
        O_count +
        '</td>' +
        '<td>' +
        '<input type="hidden" class="forms-control" name="failed_grade[]" value="' + failed_grade + '">' +
        failed_grade +
        '</td>' +
        '<td>' +
        '<span><input type="text" class="forms-control" name="remarks[]" value="' + remarks + '"></span>' +
        '</td>' +
        '</tr>';

    // Save data for the current step and index
    saveStepData(currentStep, ["remarks"]);
}

overallMarksTableBody.html(tableHtml);

}

	function populateStep12Table(data, currentStep) {
    const fdpreportTableBody = $('#fdpreportTableBody');
    fdpreportTableBody.empty();

   let tableHtml = '';
  for (let i = 0; i < data.eventtitle.length; i++) {
   const eventtitle = data.eventtitle[i] || '';
        const eventcat = data.eventcat[i] || '';
        const eventdept = data.eventdept[i] || '';
        const eventsts = data.eventsts[i] || '';
        const eventfromdate = data.eventfromdate[i] || '';
        const eventtodate = data.eventtodate[i] || '';
        const college = data.college[i] || '';
        const outside = data.outside[i] || '';
        const fundingagency = data.fundingagency[i] || '';
        const othersource =  data.othersource[i] || '';
        const totfunds = data.totfunds[i] || '';
        const totexp = data.totfunds[i] || '';
         const remarks = data.totexp[i] || '';
      tableHtml += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventtitle" name="eventtitle[]" value="' + eventtitle + '">' +
            eventtitle +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventcat" name="eventcat[]" value="' + eventcat + '">' +
            eventcat +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventdept" name="eventdept[]" value="' + eventdept + '">' +
            eventdept +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventsts" name="eventsts[]" value="' + eventsts + '">' +
            eventsts +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventfromdate" name="eventfromdate[]" value="' + eventfromdate + '">' +
            formatDate(eventfromdate) + // Assuming you have a function to format dates
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="eventtodate" name="eventtodate[]" value="' + eventtodate + '">' +
            formatDate(eventtodate) + // Assuming you have a function to format dates
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="college" name="college[]" value="' + college + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="outside" name="outside[]" value="' + outside + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="fundingagency" name="fundingagency[]" value="' + fundingagency + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="othersource" name="othersource[]" value="' + othersource + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="totfunds" name="totfunds[]" value="' + totfunds + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="totexp" name="totexp[]" value="' + totexp + '"></span>' +
            '</td>' +
            '</tr>';

    // Save data for the current step and index
    saveStepData(currentStep, ["college", "outside", "fundingagency", "othersource", "totfunds", "totexp"]);
    }

fdpreportTableBody.html(tableHtml);

}
  function populateStep14Table(data, currentStep) {
    const fapireportTableBody = $('#fapireportTableBody');
    fapireportTableBody.empty();
console.log(data);
   let tableHtml = '';
  for (let i = 0; i < data.topic.length; i++) {
   const topic = data.topic[i] || '';
        const speakerdept = data.speakerdept[i] || '';
        const namfac = data.namfac[i] || '';
         const fapifromdate = data.fapifromdate && data.fapifromdate[i] || '';
    const fapitodate = data.fapitodate && data.fapitodate[i] || '';
    const organisedby = data.organisedby && data.organisedby[i] || '';
    const resourseperson = data.resourseperson && data.resourseperson[i] || '';
      
      tableHtml += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="topic" name="topic[]" value="' + topic + '">' +
            topic +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="speakerdept" name="speakerdept[]" value="' + speakerdept + '">' +
            speakerdept +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="namfac" name="namfac[]" value="' + namfac + '">' +
            namfac +
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="fapifromdate" name="fapifromdate[]" value="' + fapifromdate + '">' +
            formatDate(fapifromdate) + // Assuming you have a function to format dates
            '</td>' +
            '<td>' +
            '<input type="hidden" class="forms-control" id="fapitodate" name="fapitodate[]" value="' + fapitodate + '">' +
            formatDate(fapitodate) + // Assuming you have a function to format dates
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="organisedby" name="organisedby[]" value="' + organisedby + '"></span>' +
            '</td>' +
            '<td>' +
            '<span><input type="text" class="forms-control" id="resourseperson" name="resourseperson[]" value="' + resourseperson + '"></span>' +
            '</td>' +
            '</tr>';

    // Save data for the current step and index
    saveStepData(currentStep, ["organisedby", "resourseperson"]);
    }

fapireportTableBody.html(tableHtml);

}  

  $('#step1Button').click(function(event) {
        event.preventDefault(); // Prevent the default behavior of the button click
        
        // Your existing code for Step 1
        const formData = new FormData();

        if (currentStep === 0) {
            console.log("STEP1");
            console.log(currentStep);
            
            // Collect data from your table's input fields and add it to formData
            $('#ptaTable tbody tr').each(function () {
                const demandprogram = $(this).find('[name="demandprogram[]"]').val();
                const demandunitcost = $(this).find('[name="demandunitcost[]"]').val();
                const toprank = $(this).find('[name="toprank[]"]').val();
                const lastrank = $(this).find('[name="lastrank[]"]').val();
                const demandratio = $(this).find('[name="demandratio[]"]').val();

                formData.append('demandprogram[]', demandprogram);
                formData.append('demandunitcost[]', demandunitcost);
                formData.append('toprank[]', toprank);
                formData.append('lastrank[]', lastrank);
                formData.append('demandratio[]', demandratio);
                // ... append other input data ...
            });

            // Send the form data to the server using AJAX
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "{{ url('/hod/insertStep1Data') }}", // Updated route URL
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Step 1 data inserted or updated successfully:', response);

                    // Load addon courses after successful insertion/update
                    // loadAddOnCourses();
                    loadStep2Data();
                    currentStep++;
                    updateStepVisibility();
                },
                error: function(error) {
                    console.error('Error inserting/updating Step 1 data:', error);
                }
            });

          
        }
    });





nextBtns.on('click', function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Make sure the formData variable is properly defined here
    const formData = new FormData();

   if (currentStep === 0) {
	   console.log("STEP1");
	console.log(currentStep);
        // Collect data from your table's input fields and add it to formData
        $('#ptaTable tbody tr').each(function () {
            const demandprogram = $(this).find('[name="demandprogram[]"]').val();
            const demandunitcost = $(this).find('[name="demandunitcost[]"]').val();
            const toprank = $(this).find('[name="toprank[]"]').val();
            const lastrank = $(this).find('[name="lastrank[]"]').val();
            const demandratio = $(this).find('[name="demandratio[]"]').val();

            formData.append('demandprogram[]', demandprogram);
            formData.append('demandunitcost[]', demandunitcost);
            formData.append('toprank[]', toprank);
            formData.append('lastrank[]', lastrank);
            formData.append('demandratio[]', demandratio);
            // ... append other input data ...
        });

        // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep1Data') }}", // Updated route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 1 data inserted or updated successfully:', response);

                // Load addon courses after successful insertion/update
               // loadAddOnCourses();
			   loadStep2Data();
				 currentStep++;
              updateStepVisibility();
            },
            error: function(error) {
                console.error('Error inserting/updating Step 1 data:', error);
            }
        });

       
    }
	 if (currentStep === 1) { // Second step  
	   console.log("STEP2");
	console.log(currentStep);
        // Collect data from the second step's table input fields and add it to formData
        $('#step2Table tbody tr').each(function () {
           const courseName = $(this).find('[name="val_add_course[]"]').val();
            const designedBy = $(this).find('[name="designedby[]"]').val();
            const tenure = $(this).find('[name="tenure[]"]').val();
            const facultyEng = $(this).find('[name="facultyeng[]"]').val();
            const stPart = $(this).find('[name="stpart[]"]').val();

            formData.append('val_add_course[]', courseName);
            formData.append('designedby[]', designedBy);
            formData.append('tenure[]', tenure);
            formData.append('facultyeng[]', facultyEng);
            formData.append('stpart[]', stPart);
        });

        // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep2Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 2 data inserted or updated successfully:', response);

                // Load the next step after successful insertion/update
               loadStep2Data(); // Call the appropriate function
				 currentStep++;
              updateStepVisibility();
            },
            error: function(error) {
                console.error('Error inserting/updating Step 2 data:', error);
            }
        });
		 
    }
	 if (currentStep === 2) { //third step  
	   console.log("STEP3");
	console.log(currentStep);
        // Collect data from the second step's table input fields and add it to formData
        $('#step3Table tbody tr').each(function () {
           const overallpgm = $(this).find('[name="overallpgm[]"]').val();
            const overallbatch = $(this).find('[name="overallbatch[]"]').val();
            const overallsemester = $(this).find('[name="overallsemester[]"]').val();
            const total_students = $(this).find('[name="total_students[]"]').val();
            const total_pass_count = $(this).find('[name="total_pass_count[]"]').val();
           const pass_percentage = $(this).find('[name="pass_percentage[]"]').val();
	       const passed_grade = $(this).find('[name="passed_grade[]"]').val();
		   const A_plus_count = $(this).find('[name="A_plus_count[]"]').val();
		   const A_count = $(this).find('[name="A_count[]"]').val();
		   const B_plus_count = $(this).find('[name="B_plus_count[]"]').val();
		   const B_count = $(this).find('[name="B_count[]"]').val();
		   const C_count = $(this).find('[name="C_count[]"]').val();
		   const D_count = $(this).find('[name="D_count[]"]').val();
		   const E_count = $(this).find('[name="E_count[]"]').val();
		   const O_count = $(this).find('[name="O_count[]"]').val();
		  const failed_grade = $(this).find('[name="failed_grade[]"]').val();
		  const remarks = $(this).find('[name="remarks[]"]').val();
		  
            formData.append('overallpgm[]', overallpgm);
            formData.append('overallbatch[]', overallbatch);
            formData.append('overallsemester[]', overallsemester);
            formData.append('total_students[]', total_students);
            formData.append('total_pass_count[]', total_pass_count);
			 formData.append('pass_percentage[]', pass_percentage);
            formData.append('passed_grade[]', passed_grade);
            formData.append('A_plus_count[]', A_plus_count);
            formData.append('A_count[]', A_count);
            formData.append('B_plus_count[]', B_plus_count);
			 formData.append('B_count[]', B_count);
            formData.append('C_count[]', C_count);
            formData.append('D_count[]', D_count);
            formData.append('E_count[]', E_count);
            formData.append('O_count[]', O_count);
			formData.append('failed_grade[]', failed_grade);
            formData.append('remarks[]', remarks);
        });

        // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep3Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 2 data inserted or updated successfully:', response);

                // Load the next step after successful insertion/update
               loadStep3Data(); // Call the appropriate function
				 currentStep++;
              updateStepVisibility();
            },
            error: function(error) {
                console.error('Error inserting/updating Step 3 data:', error);
            }
        });
		 
    }
	if (currentStep === 3) {
		  console.log("STEP4");
		console.log(currentStep);  
		   $('#ptaTable6 tbody tr').each(function () {
           const pg = $(this).find('[name="pg[]"]').val();
            const po = $(this).find('[name="po[]"]').val();
            const pso = $(this).find('[name="pso[]"]').val();
            const analysis = $(this).find('[name="analysis[]"]').val();
           
		  
            formData.append('pg[]', pg);
            formData.append('po[]', po);
            formData.append('pso[]', pso);
            formData.append('analysis[]', analysis);
            
        });

        // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep4Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 4 data inserted or updated successfully:', response);

				 currentStep++;
              updateStepVisibility();
            },
            error: function(error) {
                console.error('Error inserting/updating Step  data:', error);
            }
        });
		  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadClassEngagement') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
			console.log(data)
            const classengreport = data.classengreport;
            populateClassengreport(classengreport); // Call the function to populate the table
           
        },
        error: function () {
            console.error('Error fetching details for Step 5');
        }
    });
		 
	}
	/*if (currentStep === 3) { // Assuming this is your 4th step
	
    // Load data for Step 5 using the populateClassengreport function
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadClassEngagement') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const classengreport = data.classengreport;
            populateClassengreport(classengreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 5');
        }
    });
}*/
if (currentStep === 4) {
	  console.log("STEP5");
	console.log(currentStep);
	
	 $('#step5Table tbody tr').each(function () {
           const p_name_class = $(this).find('[name="p_name_class[]"]').val();
            const course = $(this).find('[name="course[]"]').val();
            const batchclass = $(this).find('[name="batchclass[]"]').val();
            const semester = $(this).find('[name="semester[]"]').val();
            const from_date_class = $(this).find('[name="from_date_class[]"]').val();
           const to_date_class = $(this).find('[name="to_date_class[]"]').val();
	       const name = $(this).find('[name="name[]"]').val();
		   const tothours = $(this).find('[name="tothours[]"]').val();
		   const toteng = $(this).find('[name="toteng[]"]').val();
		   const extrahrs = $(this).find('[name="extrahrs[]"]').val();
		   const remedial = $(this).find('[name="remedial[]"]').val();
		 
		  
            formData.append('p_name_class[]', p_name_class);
            formData.append('course[]', course);
            formData.append('batchclass[]', batchclass);
            formData.append('semester[]', semester);
            formData.append('from_date_class[]', from_date_class);
			 formData.append('to_date_class[]', to_date_class);
            formData.append('name[]', name);
            formData.append('tothours[]', tothours);
            formData.append('toteng[]', toteng);
            formData.append('extrahrs[]', extrahrs);
			 formData.append('remedial[]', remedial);
           
        });
		  $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep5Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 5 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 5 data:', error);
            }
        });
	  // Load data for Step 6 using the populateContinuousreport function
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadContinuousReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const continuousreport = data.continuousreport;
            populateContinuousreport(continuousreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 6');
        }
    });
}
if (currentStep === 5) {
	  console.log("STEP6");
	console.log(currentStep);
	   $('#step6Table tbody tr').each(function () {
            const p_name_internal = $(this).find('[name="p_name_internal[]"]').val();
            const continuouscourse = $(this).find('[name="continuouscourse[]"]').val();
            const cbatch = $(this).find('[name="cbatch[]"]').val();
            const csem = $(this).find('[name="csem[]"]').val();
            const cfromDate = $(this).find('[name="cfromDate[]"]').val();
           const ctoDate = $(this).find('[name="ctoDate[]"]').val();
	       const cname = $(this).find('[name="cname[]"]').val();
		   const attendance = $(this).find('[name="attendance[]"]').val();
		   const assignments = $(this).find('[name="assignments[]"]').val();
		   const Seminars = $(this).find('[name="Seminars[]"]').val();
		   const Internal = $(this).find('[name="Internal[]"]').val();
		    const Projects = $(this).find('[name="Projects[]"]').val();
		   const evaluation = $(this).find('[name="evaluation[]"]').val();
		   const grievances = $(this).find('[name="grievances[]"]').val();
		   const redressed = $(this).find('[name="redressed[]"]').val();
		   
		 
		  
            formData.append('p_name_internal[]', p_name_internal);
            formData.append('continuouscourse[]', continuouscourse);
            formData.append('cbatch[]', cbatch);
            formData.append('csem[]', csem);
            formData.append('cfromDate[]', cfromDate);
			 formData.append('ctoDate[]', ctoDate);
            formData.append('cname[]', cname);
            formData.append('attendance[]', attendance);
            formData.append('assignments[]', assignments);
            formData.append('Seminars[]', Seminars);
			 formData.append('Internal[]', Internal);
			 formData.append('Projects[]', Projects);
            formData.append('evaluation[]', evaluation);
            formData.append('grievances[]', grievances);
			 formData.append('redressed[]', redressed);
           
        });
		$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep6Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 6 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 6 data:', error);
            }
        });
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadReformsReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const reformsreport = data.reformsreport;
            populateReformsreport(reformsreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 7');
        }
    });
}
if (currentStep === 6) {
	  console.log("STEP7");
	console.log(currentStep);
	  $('#step7Table tbody tr').each(function () {
            const preforms = $(this).find('[name="preforms[]"]').val();
            const reformsclass = $(this).find('[name="reformsclass[]"]').val();
            const reformsbatch = $(this).find('[name="reformsbatch[]"]').val();
            const reformssemester = $(this).find('[name="reformssemester[]"]').val();
            const reformsfromdate = $(this).find('[name="reformsfromdate[]"]').val();
           const reformstodate = $(this).find('[name="reformstodate[]"]').val();
	       const reformsname = $(this).find('[name="reformsname[]"]').val();
		   const reformsdescription = $(this).find('[name="reformsdescription[]"]').val();
		  
            formData.append('preforms[]', preforms);
            formData.append('reformsclass[]', reformsclass);
            formData.append('reformsbatch[]', reformsbatch);
            formData.append('reformssemester[]', reformssemester);
            formData.append('reformsfromdate[]', reformsfromdate);
			 formData.append('reformstodate[]', reformstodate);
            formData.append('reformsname[]', reformsname);
            formData.append('reformsdescription[]', reformsdescription);
           
           
        });
		$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep7Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 7 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 7 data:', error);
            }
        });
	  // Load data for Step 8 
	  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadTutorialReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const tutorialreport = data.tutorialreport;
            populateTutorialreport(tutorialreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 8');
        }
    });
}	
if (currentStep === 7) {
	 console.log("STEP8");
	console.log(currentStep);
	  $('#step8Table tbody tr').each(function () {
            const tutorialIndex = $(this).find('[name="tutorialIndex[]"]').val();
            const tutorialSemester = $(this).find('[name="tutorialSemester[]"]').val();
            const tutorialBatch = $(this).find('[name="tutorialBatch[]"]').val();
            const tutorialName = $(this).find('[name="tutorialName[]"]').val();
            const tutorialFromDate = $(this).find('[name="tutorialFromDate[]"]').val();
           const tutorialToDate = $(this).find('[name="tutorialToDate[]"]').val();
	       const tutorialTotalHours = $(this).find('[name="tutorialTotalHours[]"]').val();
		   const tutorialTopic = $(this).find('[name="tutorialTopic[]"]').val();
		const tutorialReportSubmission = $(this).find('[name="tutorialReportSubmission[]"]').val();
		  
            formData.append('tutorialIndex[]', tutorialIndex);
            formData.append('tutorialSemester[]', tutorialSemester);
            formData.append('tutorialBatch[]', tutorialBatch);
            formData.append('tutorialName[]', tutorialName);
            formData.append('tutorialFromDate[]', tutorialFromDate);
			 formData.append('tutorialToDate[]', tutorialToDate);
            formData.append('tutorialTotalHours[]', tutorialTotalHours);
            formData.append('tutorialTopic[]', tutorialTopic);
            formData.append('tutorialReportSubmission[]', tutorialReportSubmission);
           
        });
		$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep8Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 8 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 8 data:', error);
            }
        });
	 // Load data for Step 9 
	  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadBridgeReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const bridgecoursereport = data.bridgecoursereport;
            populateBridgecoursereport(bridgecoursereport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 8');
        }
    });
}

if (currentStep === 8) {
	 console.log("STEP9");
	console.log(currentStep);
	  $('#step9Table tbody tr').each(function () {
            const bridgeclass = $(this).find('[name="bridgeclass[]"]').val();
            const bridgesemester = $(this).find('[name="bridgesemester[]"]').val();
            const bridgebatch = $(this).find('[name="bridgebatch[]"]').val();
            const bridgefacultyName = $(this).find('[name="bridgefacultyName[]"]').val();
            const bfromDate = $(this).find('[name="bfromDate[]"]').val();
            const btoDate = $(this).find('[name="btoDate[]"]').val();
	        const totalClasses = $(this).find('[name="totalClasses[]"]').val();
		    const bstudentsAttended = $(this).find('[name="bstudentsAttended[]"]').val();
		    const bstudentsBenefitted = $(this).find('[name="bstudentsBenefitted[]"]').val();
		    const boutcome = $(this).find('[name="boutcome[]"]').val();
		  
		  
            formData.append('bridgeclass[]', bridgeclass);
            formData.append('bridgesemester[]', bridgesemester);
            formData.append('bridgebatch[]', bridgebatch);
            formData.append('bridgefacultyName[]', bridgefacultyName);
            formData.append('bfromDate[]', bfromDate);
			formData.append('btoDate[]', btoDate);
            formData.append('totalClasses[]', totalClasses);
            formData.append('bstudentsAttended[]', bstudentsAttended);
            formData.append('bstudentsBenefitted[]', bstudentsBenefitted);
			formData.append('boutcome[]', boutcome);
           
        });
		$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep9Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 9 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 9 data:', error);
            }
        });
	  // Load data for Step 10
	  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadRemedialReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const remedialreport = data.remedialreport;
            populateRemedialreport(remedialreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 9');
        }
    });
}	
if (currentStep === 9) {
	 console.log("STEP10");
	console.log(currentStep);
	 $('#step10Table tbody tr').each(function () {
            const remedialclass = $(this).find('[name="remedialclass[]"]').val();
            const rsemester = $(this).find('[name="rsemester[]"]').val();
            const rbatch = $(this).find('[name="rbatch[]"]').val();
            const rfacultyName = $(this).find('[name="rfacultyName[]"]').val();
            const rfromDate = $(this).find('[name="rfromDate[]"]').val();
            const rtoDate = $(this).find('[name="rtoDate[]"]').val();
	        const rtotalClasses = $(this).find('[name="rtotalClasses[]"]').val();
		    const rstudentsBenefitted = $(this).find('[name="rstudentsBenefitted[]"]').val();
		    const bstudentsBenefitted = $(this).find('[name="bstudentsBenefitted[]"]').val();
		    const routcome = $(this).find('[name="routcome[]"]').val();
		  
		  
            formData.append('remedialclass[]', remedialclass);
            formData.append('rsemester[]', rsemester);
            formData.append('rbatch[]', rbatch);
            formData.append('rfacultyName[]', rfacultyName);
            formData.append('rfromDate[]', rfromDate);
			formData.append('rtoDate[]', rtoDate);
            formData.append('rtotalClasses[]', rtotalClasses);
            formData.append('rstudentsBenefitted[]', rstudentsBenefitted);
            formData.append('bstudentsBenefitted[]', bstudentsBenefitted);
			formData.append('routcome[]', routcome);
           
        });
		$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep10Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 10 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 10 data:', error);
            }
        });
	   $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadAdvancedLearnersReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const advancelearnerreport = data.advancelearnerreport;
            populateAdvancereport(advancelearnerreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 10');
        }
    });
}
if (currentStep === 10) {
	 console.log("STEP11");
	console.log(currentStep);
	 $('#step11Table tbody tr').each(function () {
            const advanceprogram = $(this).find('[name="advanceprogram[]"]').val();
            const adsemester = $(this).find('[name="adsemester[]"]').val();
            const adbatch = $(this).find('[name="adbatch[]"]').val();
            const adname = $(this).find('[name="adname[]"]').val();
            const adfromDate = $(this).find('[name="adfromDate[]"]').val();
            const adtoDate = $(this).find('[name="adtoDate[]"]').val();
	        const adstudentsAttended = $(this).find('[name="adstudentsAttended[]"]').val();
		    const adstudentsBenefitted = $(this).find('[name="adstudentsBenefitted[]"]').val();
		    const adremarks = $(this).find('[name="adremarks[]"]').val();
		  
            formData.append('advanceprogram[]', advanceprogram);
            formData.append('adsemester[]', adsemester);
            formData.append('adbatch[]', adbatch);
            formData.append('adname[]', adname);
            formData.append('adfromDate[]', adfromDate);
			formData.append('adtoDate[]', adtoDate);
            formData.append('adstudentsAttended[]', adstudentsAttended);
            formData.append('adstudentsBenefitted[]', adstudentsBenefitted);
            formData.append('adremarks[]', adremarks);
           
        });
			$.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep11Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 11 data inserted or updated successfully:', response);

            },
            error: function(error) {
                console.error('Error inserting/updating Step 11 data:', error);
            }
        });
	  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadSlowLearnersReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const slowlearnerreport = data.slowlearnerreport;
            populateSlowlearnerreport(slowlearnerreport); // Call the function to populate the table
			 //loadStep12Data(); 
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 11');
        }
    });
}	


if (currentStep === 11) {
	 console.log("STEP12");
	 console.log(currentStep);
	// Collect data from the second step's table input fields and add it to formData
    $('#step12Table tbody tr').each(function () {
        const slowprogram = $(this).find('[name="slowprogram[]"]').val();
        const slsemester = $(this).find('[name="slsemester[]"]').val();
        const slbatch = $(this).find('[name="slbatch[]"]').val();
        const slname = $(this).find('[name="slname[]"]').val();
        const slfromDate = $(this).find('[name="slfromDate[]"]').val();
        const sltoDate = $(this).find('[name="sltoDate[]"]').val();
        const slstudentsAttended = $(this).find('[name="slstudentsAttended[]"]').val();
        const slstudentsBenefitted = $(this).find('[name="slstudentsBenefitted[]"]').val();
        const slremarks = $(this).find('[name="slremarks[]"]').val();
     
        formData.append('slowprogram[]', slowprogram);
        formData.append('slsemester[]', slsemester);
        formData.append('slbatch[]', slbatch);
        formData.append('slname[]', slname);
        formData.append('slfromDate[]', slfromDate);
        formData.append('sltoDate[]', sltoDate);
        formData.append('slstudentsAttended[]', slstudentsAttended);
        formData.append('slstudentsBenefitted[]', slstudentsBenefitted);
        formData.append('slremarks[]', slremarks);
      
    });

    // Send the form data to the server using AJAX
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/insertStep12Data') }}", // Second step route URL
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
           console.log('Step 12 data inserted or updated successfully:', response);
        },
        error: function(error) {
            console.error('Error inserting/updating Step 12 data:', error);
        }
    });
	$.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadFdpReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
                    const fdpreport = data.fdpreport;
					console.log(fdpreport);
                    populateFdpreportTable(fdpreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 12');
        }
    });
}	

if (currentStep === 12) {
	 console.log("STEP13");
	 	console.log(currentStep);
		$('#step13Table tbody tr').each(function () {
        const eventtitle = $(this).find('[name="eventtitle[]"]').val();
        const eventcat = $(this).find('[name="eventcat[]"]').val();
        const eventdept = $(this).find('[name="eventdept[]"]').val();
        const eventsts = $(this).find('[name="eventsts[]"]').val();
        const eventfromdate = $(this).find('[name="eventfromdate[]"]').val();
        const eventtodate = $(this).find('[name="eventtodate[]"]').val();
        const college = $(this).find('[name="college[]"]').val();
        const outside = $(this).find('[name="outside[]"]').val();
        const fundingagency = $(this).find('[name="fundingagency[]"]').val();
        const othersource = $(this).find('[name="othersource[]"]').val();
        const totfunds = $(this).find('[name="totfunds[]"]').val();
        const totexp = $(this).find('[name="totexp[]"]').val();

        formData.append('eventtitle[]', eventtitle);
        formData.append('eventcat[]', eventcat);
        formData.append('eventdept[]', eventdept);
        formData.append('eventsts[]', eventsts);
        formData.append('eventfromdate[]', eventfromdate);
        formData.append('eventtodate[]', eventtodate);
        formData.append('college[]', college);
        formData.append('outside[]', outside);
        formData.append('fundingagency[]', fundingagency);
        formData.append('othersource[]', othersource);
        formData.append('totfunds[]', totfunds);
        formData.append('totexp[]', totexp);
    });
	$.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/insertStep13Data') }}", // Second step route URL
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
           console.log('Step 13 data inserted or updated successfully:', response);
        },
        error: function(error) {
            console.error('Error inserting/updating Step 13 data:', error);
        }
    });
	  $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadJournalReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const journalreport = data.journalreport;
            populateJournalreport(journalreport); // Call the function to populate the table
            currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 13');
        }
    });
}
if (currentStep === 13) {
		console.log("STEP14");
	    console.log(currentStep);
		$('#step14Table tbody tr').each(function () {
        const pubtitle = $(this).find('[name="pubtitle[]"]').val();
        const journalname = $(this).find('[name="journalname[]"]').val();
        const typepublication = $(this).find('[name="typepublication[]"]').val();
        const pubdept = $(this).find('[name="pubdept[]"]').val();
        const impactfactor = $(this).find('[name="impactfactor[]"]').val();
        const issn = $(this).find('[name="issn[]"]').val();
        const vol = $(this).find('[name="vol[]"]').val();
        const author = $(this).find('[name="author[]"]').val();
      

        formData.append('pubtitle[]', pubtitle);
        formData.append('journalname[]', journalname);
        formData.append('typepublication[]', typepublication);
        formData.append('pubdept[]', pubdept);
        formData.append('impactfactor[]', impactfactor);
        formData.append('issn[]', issn);
        formData.append('vol[]', vol);
        formData.append('author[]', author);
       
    });
	
        // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep14Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 14 data inserted or updated successfully:', response);
           
            },
            error: function(error) {
                console.error('Error inserting/updating Step 14 data:', error);
            }
        });
		 $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "{{ url('/hod/loadBookReport') }}", // Replace with the actual route for Step 5 data
        method: 'GET',
        success: function (data) {
            const bookreport = data.bookreport;
            populateBookreport(bookreport); // Call the function to populate the table
			currentStep++; // Increment here
            updateStepVisibility();
        },
        error: function () {
            console.error('Error fetching details for Step 14');
        }
    });
}	

if (currentStep === 14) {
		console.log("STEP15");
	    console.log(currentStep);
		$('#step15Table tbody tr').each(function () {
        const booktitle = $(this).find('[name="booktitle[]"]').val();
        const papername = $(this).find('[name="papername[]"]').val();
        const booktype = $(this).find('[name="booktype[]"]').val();
        const bookdept = $(this).find('[name="bookdept[]"]').val();
        const bookfactor = $(this).find('[name="bookfactor[]"]').val();
        const bookissn = $(this).find('[name="bookissn[]"]').val();
        const bookvol = $(this).find('[name="bookvol[]"]').val();
        const bookauthor = $(this).find('[name="bookauthor[]"]').val();
      

        formData.append('booktitle[]', booktitle);
        formData.append('papername[]', papername);
        formData.append('booktype[]', booktype);
        formData.append('bookdept[]', bookdept);
        formData.append('bookfactor[]', bookfactor);
        formData.append('bookissn[]', bookissn);
        formData.append('bookvol[]', bookvol);
        formData.append('bookauthor[]', bookauthor);
       
    });
	   // Send the form data to the server using AJAX
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep15Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 15 data inserted or updated successfully:', response);
           
            },
            error: function(error) {
                console.error('Error inserting/updating Step 15 data:', error);
            }
        });
		  $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "{{ url('/hod/loadFapiReport') }}", // Replace with the actual route for Step 2 data
                method: 'GET',
                success: function (data) {
                    const fapireport = data.fapireport;
					populateFapiReportTable(fapireport); 
					currentStep++; // Increment here
                    updateStepVisibility();
                },
                error: function () {
                    console.error('Error fetching details for Step 14');
                }
            });
}
if (currentStep === 15) {
		console.log("STEP16");
	    console.log(currentStep);
		$('#step16Table tbody tr').each(function () {
        const topic = $(this).find('[name="topic[]"]').val();
        const speakerdept = $(this).find('[name="speakerdept[]"]').val();
            const namfac = $(this).find('[name="namfac[]"]').val();
            const fromdate = $(this).find('[name="fromdate[]"]').val();
			 const todate = $(this).find('[name="todate[]"]').val();
            const organisedby = $(this).find('[name="organisedby[]"]').val();
			const resourseperson = $(this).find('[name="resourseperson[]"]').val();

            formData.append('topic[]', topic);
            formData.append('speakerdept[]', speakerdept);
            formData.append('namfac[]', namfac);
            formData.append('fromdate[]', fromdate);
			formData.append('todate[]', todate);
            formData.append('organisedby[]', organisedby);
			formData.append('resourseperson[]', resourseperson);
       
    });
	  $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ url('/hod/insertStep16Data') }}", // Second step route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Step 16 data inserted or updated successfully:', response);
				currentStep++; // Increment here
                    updateStepVisibility();
           
            },
            error: function(error) {
                console.error('Error inserting/updating Step 16 data:', error);
            }
        });
}

});
 
       prevBtns.on('click', function (event) {
    event.preventDefault();
            if (currentStep > 0) {
                currentStep--;
                updateStepVisibility();
            }
			 
        });

const step2Data = @json($step2Data);

    function loadStep2Data() {
		console.log(step2Data);
     if (step2Data === undefined || step2Data === null || step2Data.length === 0) {
    // If step2Data is not available, load addon courses from the server
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "{{ url('/hod/loadAddOnCourses') }}", // Replace with the actual route for Step 2 data
                method: 'GET',
                success: function (data) {
                    const addonCourses = data.addonCourses;
                    populateAddonCoursesTable(addonCourses); // Call the function to populate the table
					
                },
                error: function () {
                    console.error('Error fetching details for Step 2');
                }
            });
        }
 else {
          
		populateStep2Table(step2Data);
		
    }
}
    // Call the function to load step 2 data when the document is ready
   
	
	const step3Data = @json($step3Data);
    function loadStep3Data() {
		
       if (step3Data === undefined || step3Data === null || step3Data.length === 0) {
		const searchpgm = $('#searchpgm').val();
        const searchbatch = $('#searchbatch').val();
        const searchsem = $('#searchsem').val();

			// If step3Data is not available, load addon courses from the server
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "{{ url('/hod/loadOverallMarks') }}", // Replace with the actual route for Step 2 data
                method: 'GET',
				data: {
        searchpgm: searchpgm,
        searchbatch: searchbatch,
        searchsem: searchsem,
    },
                success: function (data) {
				
                    const OverallMarks = data.OverallMarks;
                    populateOverallMarksTable(OverallMarks); // Call the function to populate the table
                },
                error: function () {
                    console.error('Error fetching details for Step 3');
                }
            });
    
} else {
		
            populateStep3Table(step3Data);
        }
    }

    // Call the function to load step 2 data when the document is ready
    loadStep3Data();
	

        // Function to save entered data for a step
        function saveStepData(step, inputNames) {
            const inputData = inputNames.map(inputName => {
                return $('input[name="' + inputName + '[]"]').map(function () {
                    return this.value;
                }).get();
            });

            stepData[step] = Object.fromEntries(inputNames.map((name, index) => [name, inputData[index]]));
			
			
        }
   
    });
	function addRow() {
    var table = document.getElementById("ptaTable").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["demandprogram[]", "demandunitcost[]", "toprank[]", "lastrank[]", "demandratio[]"];
    
    for (var i = 1; i <= 5; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement("input");
        input.type = "text";
        input.className = "forms-control";
        input.name = inputNames[i - 1];
        cell.appendChild(input);
    }
}

	function addRow6() {
    var table = document.getElementById("ptaTable6").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["pg[]", "po[]", "pso[]", "analysis[]"];

    for (var i = 1; i <= 4; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement("input");
        input.type = "text";
        input.className = "forms-control";
        input.name = inputNames[i - 1];
        cell.appendChild(input);
    }
}

  function populateAddonCoursesTable(data) {
			
		 const addonCoursesTableBody = $('#addonCoursesTableBody'); // Define addonCoursesTableBody
            addonCoursesTableBody.empty();

            let tableHtml = '';
            data.forEach(function (addonCourse, index) {
			 const rowData = stepData[currentStep] && stepData[currentStep][index]
                ? stepData[currentStep][index]  // use previously enterd data
                : { designedby: '', facultyeng: '', stpart: '' }; // Default empty data
                tableHtml += '<tr>' +
                    '<td>' + (index + 1) + '</td>' +
                    '<td>' +
                    '<input type="hidden" class="forms-control" name="val_add_course[]" value="' + addonCourse.course_name + '">' +
                    addonCourse.course_name +
                    '</td>' +
                    '<td><span><input type="text" class="forms-control" name="designedby[]" ></span></td>' +
                    '<td>' +
                    '<input type="hidden" class="forms-control" name="tenure[]" value="' + addonCourse.tenure + '">' +
                    addonCourse.tenure +
                    '</td>' +
                    '<td><span><input type="text" class="forms-control" name="facultyeng[]" ></span></td>' +
                    '<td><span><input type="text" class="forms-control" name="stpart[]" ></span></td>' +
                    '</tr>';
				  // Save data for the current step and index
        saveStepData(currentStep, ["designedby", "facultyeng", "stpart"]);	
            });
 
            addonCoursesTableBody.html(tableHtml);
        }
  function populateOverallMarksTable(data) {

    const overallMarksTableBody = $('#overallMarksTableBody');
    overallMarksTableBody.empty();

    let tableHtml = '';
    
  data.forEach(function (dataItem, index) {
    dataItem.forEach(function (OverallMarks) {
	   
    tableHtml += '<tr>' +
        '<td>' + (index + 1) + '</td>' +
        '<td><input type="hidden" class="forms-control" name="overallpgm[]" value="' + OverallMarks.program + '">' + OverallMarks.program + '</td>' +
        '<td><input type="hidden" class="forms-control" name="overallbatch[]" value="' + OverallMarks.batch + '">' + OverallMarks.batch + '</td>' +
        '<td><input type="hidden" class="forms-control" name="overallsemester[]" value="' + OverallMarks.semester + '">' + OverallMarks.semester + '</td>' +
        '<td><input type="hidden" class="forms-control" name="total_students[]" value="' + OverallMarks.total_students + '">' + OverallMarks.total_students + '</td>' +
        '<td><input type="hidden" class="forms-control" name="total_pass_count[]" value="' + OverallMarks.total_pass_count + '">' + OverallMarks.total_pass_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="pass_percentage[]" value="' + OverallMarks.pass_percentage + '">' + OverallMarks.pass_percentage + '%</td>' +
        '<td><input type="hidden" class="forms-control" name="passed_grade[]" value="' + OverallMarks.passed_grade + '">' + OverallMarks.passed_grade + '</td>' +
        '<td><input type="hidden" class="forms-control" name="A_plus_count[]" value="' + OverallMarks.A_plus_count + '">' + OverallMarks.A_plus_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="A_count[]" value="' + OverallMarks.A_count + '">' + OverallMarks.A_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="B_plus_count[]" value="' + OverallMarks.B_plus_count + '">' + OverallMarks.B_plus_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="B_count[]" value="' + OverallMarks.B_count + '">' + OverallMarks.B_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="C_count[]" value="' + OverallMarks.C_count + '">' + OverallMarks.C_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="D_count[]" value="' + OverallMarks.D_count + '">' + OverallMarks.D_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="E_count[]" value="' + OverallMarks.E_count + '">' + OverallMarks.E_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="O_count[]" value="' + OverallMarks.O_count + '">' + OverallMarks.O_count + '</td>' +
        '<td><input type="hidden" class="forms-control" name="failed_grade[]" value="' + OverallMarks.failed_grade + '">' + OverallMarks.failed_grade + '</td>' +
        '<td><span><input type="text" class="forms-control" name="remarks[]"></span></td>' +
        '</tr>';
		});
});

overallMarksTableBody.html(tableHtml);

} 

 function populateFdpreportTable(data) {

    const fdpreportTableBody = $('#fdpreportTableBody');
    fdpreportTableBody.empty();

    let tableHtml = '';
    console.log(data);
  data.forEach(function (dataItem, index) {
    dataItem.forEach(function (val) {
        tableHtml += '<tr>' +
            '<td>' + (index + 1) + '</td>' +
            '<td><input type="hidden" class="forms-control" name="eventtitle[]" value="' + val.title + '">' + val.title + '</td>' +
            '<td><input type="hidden" class="forms-control eventcat" name="eventcat[]" value="' + val.category + '">' + val.category + '</td>' +
            '<td><input type="hidden" class="forms-control eventdept" name="eventdept[]" value="' + val.department + '">' + val.department + '</td>' +
            '<td><input type="hidden" class="forms-control eventsts" name="eventsts[]" value="' + val.no_students + '">' + val.no_students + '</td>' +
            '<td><input type="hidden" class="forms-control eventfromdate" name="eventfromdate[]" value="' + val.from_date + '">' + formatDate(val.from_date) + '</td>' +
            '<td><input type="hidden" class="forms-control eventtodate" name="eventtodate[]" value="' + val.to_date + '">' + formatDate(val.to_date) + '</td>' +
             '<td><span><input type="text" class="forms-control college" name="college[]" value="' + (val.college|| '') + '"></span></td>' +
        '<td><span><input type="text" class="forms-control outside" name="outside[]" value="' + (val.outside|| '') + '"></span></td>' +
        '<td><span><input type="text" class="forms-control fundingagency" name="fundingagency[]" value="' + (val.fundingagency || '') + '"></span></td>' +
        '<td><span><input type="text" class="forms-control othersource" name="othersource[]" value="' + (val.othersource || '') + '"></span></td>' +
        '<td><span><input type="text" class="forms-control totfunds" name="totfunds[]" value="' + (val.totfunds || '') + '"></span></td>' +
        '<td><span><input type="text" class="forms-control totexp" name="totexp[]" value="' + (val.totexp || '') + '"></span></td>' +
        '</tr>';
    });
});



fdpreportTableBody.html(tableHtml);

} 
function populateFapiReportTable(data) {
    const fapireportTableBody = $('#fapireportTableBody');
    fapireportTableBody.empty();

    let tableHtml = '';
    
   data.forEach(function (val, index) {
	   
    tableHtml += '<tr>' +
        '<td>' + (index + 1) + '</td>' +
        '<td><input type="hidden" class="forms-control" name="topic[]" value="' + val.title + '">' + val.title + '</td>' +
                '<td><input type="hidden" class="forms-control" name="speakerdept[]" value="' + val.category + '">' + val.category + '</td>' +
                '<td><input type="hidden" class="forms-control" name="namfac[]" value="' + val.facultyname + '">' + val.facultyname + '</td>' +
                '<td><input type="hidden" class="forms-control" name="fapifromdate[]" value="' + val.from_date + '">' + formatDate(val.from_date) + '</td>' +
                '<td><input type="hidden" class="forms-control" name="fapitodate[]" value="' + val.to_date + '">' + formatDate(val.to_date) + '</td>' +
                '<td><span><input type="text" class="forms-control" name="organisedby[]" value="' + (val.organisedby || '') + '"></span></td>' +
                '<td><span><input type="text" class="forms-control" name="resourseperson[]" value="' + (val.resourseperson || '') + '"></span></td>' +
                '</tr>';
		});

fapireportTableBody.html(tableHtml);

} 


 function populateClassengreport(data) {
    const classengreportsTableBody = $('#classengreportsTableBody');
    classengreportsTableBody.empty();

    let tableHtml = '';

    data.forEach(function (dataItem, index) {
		  console.log('dataItem:', dataItem);
        dataItem.forEach(function (val) {
		  console.log('val:', val);
            tableHtml += '<tr>' +
                '<td>' + (index + 1) + '</td>' + // Assuming you want to display an index for each set of data
                '<td>' +
                '<input type="hidden" class="forms-control" id="p_name_class" name="p_name_class[]" value="' + val.p_name + '">' +
                val.p_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="course" name="course[]" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="batchclass" name="batchclass[]" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="semester" name="semester[]" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="from_date_class" name="from_date_class[]" value="' + val.from_date + '">' +
                val.from_date +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="to_date_class" name="to_date_class[]" value="' + val.to_date + '">' +
                val.to_date +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="name" name="name[]" value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="tothours" name="tothours[]" value="' + val.total_hrs_alloted + '">' +
                val.total_hrs_alloted +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="toteng" name="toteng[]" value="' + val.total_hrs_engaged + '">' +
                val.total_hrs_engaged +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="extrahrs" name="extrahrs[]" value="' + val.extra_hours + '">' +
                val.extra_hours +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="remedial" name="remedial[]" value="' + val.remedial_hours + '">' +
                val.remedial_hours +
                '</td>' +
                '</tr>';
        });
    });

    classengreportsTableBody.html(tableHtml);
}
function populateContinuousreport(data) {
    const ContinuousReportsTableBody = $('#ContinuousReportsTableBody');
    ContinuousReportsTableBody.empty();

    let tableHtml = '';

    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
            const totalIndex = index * dataItem.length + subIndex + 1; // Calculate the total index

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="p_name_internal" name="p_name_internal[]" value="' + val.p_name + '">' +
                val.p_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="continuouscourse" name="continuouscourse[]" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="cbatch" name="cbatch[]" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="csem" name="csem[]" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="cfromDate" name="cfromDate[]" value="' + val.fromDate + '">' +
                val.fromDate +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="ctoDate" name="ctoDate[]" value="' + val.toDate + '">' +
                val.toDate +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="cname" name="cname[]" value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="attendance" name="attendance[]" value="' + val.numShortageAttendance + '">' +
                val.numShortageAttendance +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="assignments" name="assignments[]" value="' + val.numAssignment + '">' +
                val.numAssignment +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="Seminars" name="Seminars[]" value="' + val.numSeminar + '">' +
                val.numSeminar +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="Internal" name="Internal[]" value="' + val.numInternalExamination + '">' +
                val.numInternalExamination +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="Projects" name="Projects[]" value="' + val.numProjects + '">' +
                val.numProjects +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="evaluation" name="evaluation[]" value="' + val.failedNoExternalEvaluation + '">' +
                val.failedNoExternalEvaluation +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="grievances" name="grievances[]" value="' + val.numGrievanceReceived + '">' +
                val.numGrievanceReceived +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" id="redressed" name="redressed[]" value="' + val.numStudentRedressed + '">' +
                val.numStudentRedressed +
                '</td>' +
                '</tr>';
        });
    });

    ContinuousReportsTableBody.html(tableHtml);
}
function populateReformsreport(data) {
    const ReformReportsTableBody = $('#ReformReportsTableBody');
    ReformReportsTableBody.empty();

    let tableHtml = '';
    let totalIndex = 0;
    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
          const totalIndex = index * dataItem.length + subIndex + 1;

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
               '<td><input type="hidden" class="forms-control" id="preforms" name="preforms[]" value="' + val.p_name + '">' + val.p_name + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformsclass" name="reformsclass[]" value="' + val.course_name + '">' + val.course_name + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformsbatch" name="reformsbatch[]" value="' + val.batch + '">' + val.batch + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformssemester" name="reformssemester[]" value="' + val.semester + '">' + val.semester + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformsfromdate" name="reformsfromdate[]" value="' + val.fromdate + '">' + val.fromdate + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformstodate" name="reformstodate[]" value="' + val.todate + '">' + val.todate + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformsname" name="reformsname[]" value="' + val.name + '">' + val.name + '</td>' +
            '<td><input type="hidden" class="forms-control" id="reformsdescription" name="reformsdescription[]" value="' + val.description + '">' + val.description + '</td>' +
            '</tr>';
        });
    });

    ReformReportsTableBody.html(tableHtml);
}
  function populateTutorialreport(data) {
    const TutorialReportsTableBody = $('#TutorialReportsTableBody');
    TutorialReportsTableBody.empty();

    let tableHtml = '';

    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
            const totalIndex = index * dataItem.length + subIndex + 1; // Calculate the total index

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td><input type="hidden" class="forms-control" id="tutorialIndex" name="tutorialIndex[]" value="' + val.course_name + '">' + val.course_name + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialSemester" name="tutorialSemester[]" value="' + val.semester + '">' + val.semester + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialBatch" name="tutorialBatch[]" value="' + val.batch + '">' + val.batch + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialName" name="tutorialName[]" value="' + val.name + '">' + val.name + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialFromDate" name="tutorialFromDate[]" value="' + val.fromdate + '">' + val.fromdate + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialToDate" name="tutorialToDate[]" value="' + val.todate + '">' + val.todate + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialTotalHours" name="tutorialTotalHours[]" value="' + val.totalNoOfHours + '">' + val.totalNoOfHours + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialTopic" name="tutorialTopic[]" value="' + val.topic + '">' + val.topic + '</td>' +
        '<td><input type="hidden" class="forms-control" id="tutorialReportSubmission" name="tutorialReportSubmission[]" value="' + val.reportSubmission + '">' + val.reportSubmission + '</td>' +
        '</tr>';
        });
    });

    TutorialReportsTableBody.html(tableHtml);
}  
function populateBridgecoursereport(data) {
    const BridgeCoursereportsTableBody = $('#BridgeCoursereportsTableBody');
    BridgeCoursereportsTableBody.empty();

    let tableHtml = '';
    
    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
          const totalIndex = index * dataItem.length + subIndex + 1;

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bridgeclass[]" id="bridgeclass" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bridgesemester[]" id="bridgesemester" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bridgebatch[]" id="bridgebatch" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bridgefacultyName[]" id="bridgefacultyName"  value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bfromDate[]" id="bfromDate" value="' + val.fromDate + '">' +
                formatDate(val.fromDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="btoDate[]" id="btoDate" value="' + val.toDate + '">' +
                formatDate(val.toDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="totalClasses[]" id="totalClasses" value="' + val.total_no_of_classes + '">' +
                val.total_no_of_classes +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bstudentsAttended[]" id="bstudentsAttended" value="' + val.numStudentsAttended + '">' +
                val.numStudentsAttended +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bstudentsBenefitted[]" id="bstudentsBenefitted" value="' + val.numStudentsBenefitted + '">' +
                val.numStudentsBenefitted +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="boutcome[]" id="boutcome" value="' + val.outcome + '">' +
                val.outcome +
                '</td>' +
                '</tr>';
        });
    });

    BridgeCoursereportsTableBody.html(tableHtml);
}

function populateRemedialreport(data) {
    const RemedialreportsTableBody = $('#RemedialreportsTableBody');
    RemedialreportsTableBody.empty();

      let tableHtml = '';
        let totalIndex = 0;
    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
           totalIndex++; // Calculate the total index

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="remedialclass[]" id="remedialclass" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rsemester[]" id="rsemester" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rbatch[]" id="rbatch" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rfacultyName[]" id="rfacultyName"  value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rfromDate[]" id="rfromDate" value="' + val.fromDate + '">' +
                formatDate(val.fromDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rtoDate[]" id="rtoDate" value="' + val.toDate + '">' +
               formatDate(val.toDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rtotalClasses[]" id="rtotalClasses" value="' + val.total_no_of_classes + '">' +
                val.total_no_of_classes +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="rstudentsBenefitted[]" id="rstudentsBenefitted" value="' + val.numStudentsAttended + '">' +
                val.numStudentsAttended +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="bstudentsBenefitted[]" id="bstudentsBenefitted" value="' + val.numStudentsBenefitted + '">' +
                val.numStudentsBenefitted +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="routcome[]" id="routcome" value="' + val.outcome + '">' +
                val.outcome +
                '</td>' +
                '</tr>';
        });
    });

    RemedialreportsTableBody.html(tableHtml);
}
function populateAdvancereport(data) {
    const LearnerreportsTableBody = $('#LearnerreportsTableBody');
    LearnerreportsTableBody.empty();

      let tableHtml = '';
        let totalIndex = 0;
    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
           totalIndex++; // Calculate the total index

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="advanceprogram[]" id="advanceprogram" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adsemester[]" id="adsemester" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adbatch[]" id="adbatch" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adname[]" id="adname"  value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adfromDate[]" id="adfromDate" value="' + val.fromDate + '">' +
                formatDate(val.fromDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adtoDate[]" id="adtoDate" value="' + val.toDate + '">' +
               formatDate(val.toDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adstudentsAttended[]" id="adstudentsAttended" value="' + val.numStudentsAttended + '">' +
                val.numStudentsAttended +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adstudentsBenefitted[]" id="adstudentsBenefitted" value="' + val.numStudentsBenefitted + '">' +
                val.numStudentsBenefitted +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="adremarks[]" id="adremarks" value="' + val.outcome + '">' +
                val.outcome +
                '</td>' +
                '</tr>';
        });
    });

    LearnerreportsTableBody.html(tableHtml);
}
function populateSlowlearnerreport(data) {
    const SlowreportsTableBody = $('#SlowreportsTableBody');
    SlowreportsTableBody.empty();

      let tableHtml = '';
        let totalIndex = 0;
    data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
           totalIndex++; // Calculate the total index

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slowprogram[]" id="slowprogram" value="' + val.course_name + '">' +
                val.course_name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slsemester[]" id="slsemester" value="' + val.semester + '">' +
                val.semester +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slbatch[]" id="slbatch" value="' + val.batch + '">' +
                val.batch +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slname[]" id="slname"  value="' + val.name + '">' +
                val.name +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slfromDate[]" id="slfromDate" value="' + val.fromDate + '">' +
                formatDate(val.fromDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="sltoDate[]" id="sltoDate" value="' + val.toDate + '">' +
               formatDate(val.toDate) +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slstudentsAttended[]" id="slstudentsAttended" value="' + val.numStudentsAttended + '">' +
                val.numStudentsAttended +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slstudentsBenefitted[]" id="slstudentsBenefitted" value="' + val.numStudentsBenefitted + '">' +
                val.numStudentsBenefitted +
                '</td>' +
                '<td>' +
                '<input type="hidden" class="forms-control" name="slremarks[]" id="slremarks" value="' + val.outcome + '">' +
                val.outcome +
                '</td>' +
                '</tr>';
        });
    });

    SlowreportsTableBody.html(tableHtml);
}

function populateJournalreport(data) {

    const bookTableBody = $('#bookTableBody');
    bookTableBody.empty();

    let tableHtml = '';
    
     data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
           const totalIndex = index * dataItem.length + subIndex + 1;

            tableHtml += '<tr>' +
                '<td>' + totalIndex + '</td>' +
         '<td><input type="hidden" class="forms-control" id="pubtitle" name="pubtitle[]" value="' + val.title + '">' + val.title + '</td>' +
            '<td><input type="hidden" class="forms-control" id="journalname" name="journalname[]" value="' + val.journalname + '">' + val.journalname + '</td>' +
            '<td><input type="hidden" class="forms-control" id="typepublication" name="typepublication[]" value="' + val.typepublication + '">' + val.typepublication + '</td>' +
            '<td><input type="hidden" class="forms-control" id="pubdept" name="pubdept[]" value="' + val.department + '">' + val.department + '</td>' +
            '<td><input type="hidden" class="forms-control" id="impactfactor" name="impactfactor[]" value="' + val.impactfactor + '">' + val.impactfactor + '</td>' +
            '<td><input type="hidden" class="forms-control" id="issn" name="issn[]" value="' + val.issn + '">' + val.issn + '</td>' +
            '<td><input type="hidden" class="forms-control" id="vol" name="vol[]" value="' + val.volume + ',' + val.pages + ',' + val.year + '">' + val.volume + ',' + val.pages + '</td>' +
			'<td><input type="hidden" class="forms-control" id="year" name="year[]" value="' + val.year + '">' + val.year + '</td>' +
            '<td><input type="hidden" class="forms-control" id="author" name="author[]" value="' + val.author + '">' + val.author + '</td>' +
                '</tr>';
		      });
    });

bookTableBody.html(tableHtml);

} 
function populateBookreport(data) {

    const JournalTableBody = $('#JournalTableBody');
    JournalTableBody.empty();

    let tableHtml = '';
    
  data.forEach(function (dataItem, index) {
        dataItem.forEach(function (val, subIndex) {
           const totalIndex = index * dataItem.length + subIndex + 1;
	   
    tableHtml += '<tr>' +
          '<td>' + totalIndex + '</td>' +
         '<td><input type="hidden" class="forms-control" id="booktitle" name="booktitle[]" value="' + val.title + '">' + val.title + '</td>' +
            '<td><input type="hidden" class="forms-control" id="papername" name="papername[]" value="' + val.papername + '">' + val.papername + '</td>' +
            '<td><input type="hidden" class="forms-control" id="booktype" name="booktype[]" value="' + val.booktype + '">' + val.booktype + '</td>' +
            '<td><input type="hidden" class="forms-control" id="bookdept" name="bookdept[]" value="' + val.department + '">' + val.department + '</td>' +
            '<td><input type="hidden" class="forms-control" id="bookfactor" name="bookfactor[]" value="' + val.impactfactor + '">' + val.impactfactor + '</td>' +
            '<td><input type="hidden" class="forms-control" id="bookissn" name="bookissn[]" value="' + val.issn + '">' + val.issn + '</td>' +
            '<td><input type="hidden" class="forms-control" id="bookvol" name="bookvol[]" value="' + val.volume + ',' + val.pages + ',' + val.year + '">' + val.volume + ',' + val.pages + '</td>' +
         	'<td><input type="hidden" class="forms-control" id="year" name="year[]" value="' + val.year + '">' + val.year + '</td>' +
            '<td><input type="hidden" class="forms-control" id="bookauthor" name="bookauthor[]" value="' + val.author + '">' + val.author + '</td>' +
                '</tr>';
		 });
    });

JournalTableBody.html(tableHtml);

} 
function formatDate(dateString) {
    const date = new Date(dateString);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return day + '-' + month + '-' + year;
}
  
</script>
<script>
        var originalTableContent = ''; // Store the original table content

        function filterTable() {
            // Get input value
            var input = document.getElementById("searchInput").value.toUpperCase();
            
            // Get the table rows
            var table_step3 = document.getElementById("step3Table");
            var rows = table_step3.getElementsByTagName("tr");

            // If originalTableContent is empty, store the original table content
            if (originalTableContent === '') {
                originalTableContent = table_step3.innerHTML;
            }

            // Loop through all rows, starting from the second row (index 1)
            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var semesterCell = row.cells[3]; // Assuming Semester is in the fourth column
                var batchCell = row.cells[2]; // Assuming Batch is in the third column
                var programmeCell = row.cells[1]; // Assuming Programme is in the second column
                
                // Check if the input matches any of the cells
                if (
                    semesterCell.textContent.toUpperCase().indexOf(input) > -1 ||
                    batchCell.textContent.toUpperCase().indexOf(input) > -1 ||
                    programmeCell.textContent.toUpperCase().indexOf(input) > -1
                ) {
                    row.style.display = "";
					row.classList.add("visibleRow");
                } else {
                    row.style.display = "none";
					row.classList.add("hiddenRow");
				//row.remove();
                }
            }
			
        }

        // Listen for the Backspace key press
        document.addEventListener("keydown", function (event) {
            if (event.key === "Backspace") {
                // Restore the original table content
                document.getElementById("step3Table").innerHTML = originalTableContent;
            }
        });
    </script>

@endsection
