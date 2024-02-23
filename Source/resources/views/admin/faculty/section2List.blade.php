
@extends('layouts.hod.default')

@section('content')

 
<style>
h6{
    font-size: 0.875rem;
    margin-top: 1rem !important;
}
p {
    font-size: 0.875rem;
    margin-top: 1rem !important;
}
div.dataTables_wrapper div.dataTables_length label {
    font-weight: normal;
    text-align: left !important;
    white-space: nowrap !important;
    color: #fff9f9 !important;
}

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto !important;
    padding: 8px !important;
}
div.dataTables_wrapper div.dataTables_filter {
    text-align: right !important;
    margin-top: 0px !important;
    color: #fff4f4 !important;
}
</style>
       <div class="main-panel">
          <div class="content-wrapper">
			<div class="page-header">
			  <h3 class="page-title"> Section List </h3>
			</div>
                <form id="fupForm" enctype="multipart/form-data">
                        @csrf  
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
						<div class="container">
						<p> Name of the Department : <span><input type="text" class="forms-control" id="department" name="department" ></span></p>
								
							<p> Year of Establishment  : <span><input type="text" class="forms-control" id="establishment" name="establishment" ></span></p>

							<p> Aided/Self Financing Specify: <span><input type="text" class="forms-control" id="category" name="category" ></span></p>
						<div class="row">
						<div class="col-xl-12 col-lg-12">
							<p>Curriculum design (New programme) and Restructuring of syllabi, if any : <span><input type="text" class="forms-control" id="curriculam" name="curriculam"></span></p>
							<!--14-->
							<p>Demand Ratio and Unit Cost  </p>

							<div class="table-responsive">
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
											<td><span><input type="text" class="forms-control" id="demandprogram" name="demandprogram[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="demandunitcost" name="demandunitcost[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="toprank" name="toprank[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="lastrank" name="lastrank[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="demandratio" name="demandratio[]" ></span></td>
										</tr>
									</tbody>
								</table>
								<button type="button" onclick="addRow()">Add Row</button>
							</div>
							<br />
							<!--15-->
							<p> Details of Value Added Courses (Certificate, Diploma etc. ) Conducted by the department</p>
							<div class="table-responsive">
							 @if(!empty($addon))
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Sl No</th>
											
											<th>Value Added Courses <br>(Certificate, Diploma etc. ) </th>
											<th>Curriculum designed by</th>
											<th>Duration</th>
											<th>Names of Faculty<br> Engaged.</th>
											<th>Number of students <br>participated</th>
										</tr>
									</thead>
									<tbody>
									 <?php $i=1; ?>
                                    @foreach($addon as $val)
								
										<tr>
											<td>{{$i}}</td>
											<td><input type="hidden" class="forms-control" id="val_add_course" name="val_add_course[]" value="{{$val->course_type}}-{{$val->course_name}}" >{{$val->course_type}}-{{$val->course_name}}</td>
											<td><span><input type="text" class="forms-control" id="designedby" name="designedby[]" ></span></td>
											<td><input type="hidden" class="forms-control" id="tenure" name="tenure[]" value="{{$val->tenure}}" >{{$val->tenure}} </td>
											<td><span><input type="text" class="forms-control" id="facultyeng" name="facultyeng[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="stpart" name="stpart[]" ></span></td>
										</tr>
										<?php $i++; ?>
                                   
									   @endforeach
									</tbody>
								</table>
								@endif
							</div>
							<br />
							<!--16-->
							<p>Result Analysis</p>
							
							<div class="table-responsive">
							 @if(!empty($overall_marks))
								 <input type="text" id="searchInput" placeholder="Search...">
								<table class="table table-bordered" id="resultanalysis">
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
									<tbody>
									 <?php $i=1; ?>
                                    @foreach($overall_marks as $data)
								  @foreach($data as $val)
										<tr>
											<td>{{$i}}</td>
											<td><input type="hidden" class="forms-control" id="overallpgm" name="overallpgm[]" value="{{$val->program}}" >{{$val->program}}</td>
											<td><input type="hidden" class="forms-control" id="overallbatch" name="overallbatch[]" value="{{$val->batch}}" >{{$val->batch}} </td>
											<td><input type="hidden" class="forms-control" id="overallsemester" name="overallsemester[]" value="{{$val->semester}}" >{{$val->semester}} </td>
											<td><input type="hidden" class="forms-control" id="total_students" name="total_students[]" value="{{$val->total_students}}" >{{$val->total_students}}</td>
											<td><input type="hidden" class="forms-control" id="total_pass_count" name="total_pass_count[]" value="{{$val->total_pass_count}}" >{{$val->total_pass_count}}</td>
											<td><input type="hidden" class="forms-control" id="pass_percentage" name="pass_percentage[]" value="{{$val->pass_percentage}}" >{{$val->pass_percentage}}% </td>
											<td><input type="hidden" class="forms-control" id="passed_grade" name="passed_grade[]" value="{{$val->passed_grade}}" >{{$val->passed_grade}} </td>
											<td><input type="hidden" class="forms-control" id="A_plus_count" name="A_plus_count[]" value="{{$val->A_plus_count}}" >{{$val->A_plus_count}} </td>
											<td><input type="hidden" class="forms-control" id="A_count" name="A_count[]" value="{{$val->A_count}}" >{{$val->A_count}}</td>
											<td><input type="hidden" class="forms-control" id="B_plus_count" name="B_plus_count[]" value="{{$val->B_plus_count}}" >{{$val->B_plus_count}}</td>
											<td><input type="hidden" class="forms-control" id="B_count" name="B_count[]" value="{{$val->B_count}}" >{{$val->B_count}} </td>
											<td><input type="hidden" class="forms-control" id="C_count" name="C_count[]" value="{{$val->C_count}}" >{{$val->C_count}}</td>
											<td><input type="hidden" class="forms-control" id="D_count" name="D_count[]" value="{{$val->D_count}}" >{{$val->D_count}}</td>
											<td><input type="hidden" class="forms-control" id="E_count" name="E_count[]" value="{{$val->E_count}}" >{{$val->E_count}}</td>
											<td><input type="hidden" class="forms-control" id="O_count" name="O_count[]" value="{{$val->O_count}}" >{{$val->O_count}}</td>
											<td><input type="hidden" class="forms-control" id="failed_grade" name="failed_grade[]" value="{{$val->failed_grade}}" >{{$val->failed_grade}}</td>
											<td><span><input type="text" class="forms-control" id="remarks" name="remarks[]" ></span></td>
										</tr>
											<?php $i++; ?>
                                    @endforeach
									   @endforeach
									</tbody>
								</table>
								@endif
						
							</div>
							<br />

								<!--17-->

								<p>Programme outcome details</p>
								<div class="table-responsive">
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
									</div>
									<br />
									
									<p>Class engagement details of the department </p>
									<div class="table-responsive">
									@if(!empty($classengreport))
								 <input type="text" id="searchClassengage" placeholder="Search...">
								<table class="table table-bordered" id="classengreports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($classengreport as $data)
								  @foreach($data as $val)
												<tr>
												<td>{{$i}}</td>
												 <td><input type="hidden" class="forms-control" id="p_name_class" name="p_name_class[]" value="{{$val->p_name}}">{{$val->p_name}}</td>
        <td><input type="hidden" class="forms-control" id="course" name="course[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
        <td><input type="hidden" class="forms-control" id="batchclass" name="batchclass[]" value="{{$val->batch}}">{{$val->batch}}</td>
        <td><input type="hidden" class="forms-control" id="semester" name="semester[]" value="{{$val->semester}}">{{$val->semester}}</td>
        <td><input type="hidden" class="forms-control" id="from_date_class" name="from_date_class[]" value="{{date('d-m-Y', strtotime($val->from_date))}}">{{date('d-m-Y', strtotime($val->from_date))}}</td>
        <td><input type="hidden" class="forms-control" id="to_date_class" name="to_date_class[]" value="{{date('d-m-Y', strtotime($val->to_date))}}">{{date('d-m-Y', strtotime($val->to_date))}}</td>
        <td><input type="hidden" class="forms-control" id="name" name="name[]" value="{{$val->name}}">{{$val->name}}</td>
        <td><input type="hidden" class="forms-control" id="tothours" name="tothours[]" value="{{$val->total_hrs_alloted}}">{{$val->total_hrs_alloted}}</td>
        <td><input type="hidden" class="forms-control" id="toteng" name="toteng[]" value="{{$val->total_hrs_engaged}}">{{$val->total_hrs_engaged}}</td>
        <td><input type="hidden" class="forms-control" id="extrahrs" name="extrahrs[]" value="{{$val->extra_hours}}">{{$val->extra_hours}}</td>
        <td><input type="hidden" class="forms-control" id="remedial" name="remedial[]" value="{{$val->remedial_hours}}">{{$val->remedial_hours}}</td>
												
												</tr>
											<?php $i++; ?>
                                    @endforeach
									   @endforeach
									</tbody>
								</table>
								@endif
									</div>
									<br />
									<!--18.b-->

									<!--20-->
									<p> Continuous Internal Evaluation Details </p>

									<div class="table-responsive">
										@if(!empty($continuousreport))
								 <input type="text" id="searchContinuousReport" placeholder="Search...">
								<table class="table table-bordered" id="ContinuousReports">
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
										<tbody>
											 <?php $i=1; ?>
                                    @foreach($continuousreport as $data)
								  @foreach($data as $val)
												<tr>
													<td>{{$i}}</td>
												 
        <td><input type="hidden" class="forms-control" id="p_name_internal" name="p_name_internal[]" value="{{$val->p_name}}">{{$val->p_name}}</td>
        <td><input type="hidden" class="forms-control" id="continuouscourse" name="continuouscourse[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
        <td><input type="hidden" class="forms-control" id="cbatch" name="cbatch[]" value="{{$val->batch}}">{{$val->batch}}</td>
        <td><input type="hidden" class="forms-control" id="csem" name="csem[]" value="{{$val->semester}}">{{$val->semester}}</td>
        <td><input type="hidden" class="forms-control" id="cfromDate" name="cfromDate[]" value="{{date('d-m-Y', strtotime($val->fromDate))}}">{{date('d-m-Y', strtotime($val->fromDate))}}</td>
        <td><input type="hidden" class="forms-control" id="ctoDate" name="ctoDate[]" value="{{date('d-m-Y', strtotime($val->toDate))}}">{{date('d-m-Y', strtotime($val->toDate))}}</td>
        <td><input type="hidden" class="forms-control" id="cname" name="cname[]" value="{{$val->name}}">{{$val->name}}</td>
        <td><input type="hidden" class="forms-control" id="attendance" name="attendance[]" value="{{$val->numShortageAttendance}}">{{$val->numShortageAttendance}}</td>
        <td><input type="hidden" class="forms-control" id="assignments" name="assignments[]" value="{{$val->numAssignment}}">{{$val->numAssignment}}</td>
        <td><input type="hidden" class="forms-control" id="Seminars" name="Seminars[]" value="{{$val->numSeminar}}">{{$val->numSeminar}}</td>
        <td><input type="hidden" class="forms-control" id="Internal" name="Internal[]" value="{{$val->numInternalExamination}}">{{$val->numInternalExamination}}</td>
        <td><input type="hidden" class="forms-control" id="Projects" name="Projects[]" value="{{$val->numProjects}}">{{$val->numProjects}}</td>
        <td><input type="hidden" class="forms-control" id="evaluation" name="evaluation[]" value="{{$val->failedNoExternalEvaluation}}">{{$val->failedNoExternalEvaluation}}</td>
        <td><input type="hidden" class="forms-control" id="grievances" name="grievances[]" value="{{$val->numGrievanceReceived}}">{{$val->numGrievanceReceived}}</td>
        <td><input type="hidden" class="forms-control" id="redressed" name="redressed[]" value="{{$val->numStudentRedressed}}">{{$val->numStudentRedressed}}</td>
												</tr>
												<?php $i++; ?>
                                        @endforeach
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>
									<br />
									<!--20.b-->
									

									<p> Reforms introduced in Continuous Internal Evaluation (CIE)</p>
									<div class="table-responsive">
										@if(!empty($reformsreport))
								 <input type="text" id="searchReformReport" placeholder="Search...">
								<table class="table table-bordered" id="ReformReports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($reformsreport as $data)
								  @foreach($data as $val)
												<tr>
												<td>{{$i}}</td>
													<td><input type="hidden" class="forms-control" id="preforms" name="preforms[]" value="{{$val->p_name}}">{{$val->p_name}}</td>
        <td><input type="hidden" class="forms-control" id="reformsclass" name="reformsclass[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
        <td><input type="hidden" class="forms-control" id="reformsbatch" name="reformsbatch[]" value="{{$val->batch}}">{{$val->batch}}</td>
        <td><input type="hidden" class="forms-control" id="reformssemester" name="reformssemester[]" value="{{$val->semester}}">{{$val->semester}}</td>
        <td><input type="hidden" class="forms-control" id="reformsfromdate" name="reformsfromdate[]" value="{{date('d-m-Y', strtotime($val->fromdate))}}">{{date('d-m-Y', strtotime($val->fromdate))}}</td>
        <td><input type="hidden" class="forms-control" id="reformstodate" name="reformstodate[]" value="{{date('d-m-Y', strtotime($val->todate))}}">{{date('d-m-Y', strtotime($val->todate))}}</td>
        <td><input type="hidden" class="forms-control" id="reformsname" name="reformsname[]" value="{{$val->name}}">{{$val->name}}</td>
        <td>
          <input type="hidden" class="forms-control" id="reformsdescription" name="reformsdescription[]" value="{{strip_tags($val->description)}}">
          {{strip_tags($val->description)}}
        </td>
												</tr>
												<?php $i++; ?>
                                    @endforeach
									   @endforeach
									</tbody>
								</table>
								@endif
									</div>
									<br />
									<!--22-->
									<p>Tutorial System</p>
									<div class="table-responsive">
									@if(!empty($tutorialreport))
								 <input type="text" id="searchtutorialreport" placeholder="Search...">
								<table class="table table-bordered" id="tutorialreports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($tutorialreport as $data)
								  @foreach($data as $val)
												<tr>
													<td>{{$i}}</td>
 <td><input type="hidden" class="forms-control" id="tutorialIndex" name="tutorialIndex[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialSemester" name="tutorialSemester[]" value="{{$val->semester}}">{{$val->semester}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialBatch" name="tutorialBatch[]" value="{{$val->batch}}">{{$val->batch}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialName" name="tutorialName[]" value="{{$val->name}}">{{$val->name}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialFromDate" name="tutorialFromDate[]" value="{{date('d-m-Y', strtotime($val->fromdate))}}">{{date('d-m-Y', strtotime($val->fromdate))}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialToDate" name="tutorialToDate[]" value="{{date('d-m-Y', strtotime($val->todate))}}">{{date('d-m-Y', strtotime($val->todate))}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialTotalHours" name="tutorialTotalHours[]" value="{{$val->totalNoOfHours}}">{{$val->totalNoOfHours}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialTopic" name="tutorialTopic[]" value="{{$val->topic}}">{{$val->topic}}</td>
            <td><input type="hidden" class="forms-control" id="tutorialReportSubmission" name="tutorialReportSubmission[]" value="{{$val->reportSubmission}}">{{$val->reportSubmission}}</td>
												</tr>
											<?php $i++; ?>
                                    @endforeach
									   @endforeach
									</tbody>
								</table>
								@endif
									</div>
									<br />
									<!--23-->
									<p>Details of Bridge Courses Conducted and its Outcome</p>
									<div class="table-responsive">
									@if(!empty($bridgecoursereport))
								 <input type="text" id="searchBridgeCourse" placeholder="Search...">
								<table class="table table-bordered" id="BridgeCoursereports">
											<thead>
												<tr>
												    <th>Sl No</th>
													<th>Programme</th>
													<th>Semester</th>
													<th>Batch</th>
													<th>From Date</th>
													<th>To Date</th>
													<th>Total No of  <br>Classes Conducted </th>
													<th>No of students  <br> attended </th>
													<th>No of Students  <br>Benefitted</th>
													<th>Remarks</th>
												</tr>
											</thead>
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($bridgecoursereport as $data)
								  @foreach($data as $val)
												<tr>
												<td>
                    <input type="hidden" class="forms-control" name="bridgeclass[]" id="bridgeclass" value="{{$val->course_name}}">
                    {{$val->course_name}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bridgesemester[]" id="bridgesemester" value="{{$val->semester}}">
                    {{$val->semester}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bridgebatch[]" id="bridgebatch" value="{{$val->batch}}">
                    {{$val->batch}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bridgefacultyName[]" id="bridgefacultyName"  value="{{$val->name}}">
                    {{$val->name}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bfromDate[]" id="bfromDate" value="{{date('d-m-Y', strtotime($val->fromDate))}}">
                    {{date('d-m-Y', strtotime($val->fromDate))}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="btoDate[]" id="btoDate" value="{{date('d-m-Y', strtotime($val->toDate))}}">
                    {{date('d-m-Y', strtotime($val->toDate))}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="totalClasses[]" id="totalClasses" value="{{$val->total_no_of_classes}}">
                    {{$val->total_no_of_classes}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bstudentsAttended[]" id="bstudentsAttended" value="{{$val->numStudentsAttended}}">
                    {{$val->numStudentsAttended}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="bstudentsBenefitted[]" id="bstudentsBenefitted" value="{{$val->numStudentsBenefitted}}">
                    {{$val->numStudentsBenefitted}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="boutcome[]" id="boutcome" value="{{$val->outcome}}">
                    {{$val->outcome}}
                </td>
												</tr>
												<?php $i++; ?>
                                       @endforeach
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>
									<br />
									<!--24-->
									<p>Details of Remedial Classes conducted and its Outcome</p>
									<div class="table-responsive">
									@if(!empty($remedialreport))
								 <input type="text" id="searchremedialreport" placeholder="Search...">
								<table class="table table-bordered" id="remedialreports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($remedialreport as $data)
								  @foreach($data as $val)
												<tr> <td>{{$i}}</td>
													<td>
                    <input type="hidden" class="forms-control" name="remedialclass[]" id="remedialclass" value="{{$val->course_name}}">
                    {{$val->course_name}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rsemester[]" id="rsemester" value="{{$val->semester}}">
                    {{$val->semester}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rbatch[]" id="rbatch" value="{{$val->batch}}">
                    {{$val->batch}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rfacultyName[]" id="rfacultyName" value="{{$val->name}}">
                    {{$val->name}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rfromDate[]" id="rfromDate" value="{{date('d-m-Y', strtotime($val->fromDate))}}">
                    {{date('d-m-Y', strtotime($val->fromDate))}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rtoDate[]" id="rtoDate" value="{{date('d-m-Y', strtotime($val->toDate))}}">
                    {{date('d-m-Y', strtotime($val->toDate))}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rtotalClasses[]" id="rtotalClasses" value="{{$val->total_no_of_classes}}">
                    {{$val->total_no_of_classes}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rstudentsAttended[]" id="rstudentsAttended" value="{{$val->numStudentsAttended}}">
                    {{$val->numStudentsAttended}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="rstudentsBenefitted[]" id="rstudentsBenefitted" value="{{$val->numStudentsBenefitted}}">
                    {{$val->numStudentsBenefitted}}
                </td>
                <td>
                    <input type="hidden" class="forms-control" name="routcome[]" id="routcome" value="{{$val->outcome}}">
                    {{$val->outcome}}
                </td>
												</tr>
												<?php $i++; ?>
                                       @endforeach
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>
									<br />

									<!--25-->
									<p> Details of Programmes for Advanced Learners and Outcome</p>
									<div class="table-responsive">
									@if(!empty($advancelearnerreport))
								 <input type="text" id="searchlearnerreport" placeholder="Search...">
								<table class="table table-bordered" id="learnerreports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($advancelearnerreport as $data)
								  @foreach($data as $val)
												<tr>
												<td>{{$i}}</td>
													
													<td><input type="hidden" class="forms-control" id="advanceprogram" name="advanceprogram[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
    <td><input type="hidden" class="forms-control" id="adsemester" name="adsemester[]" value="{{$val->semester}}">{{$val->semester}}</td>
    <td><input type="hidden" class="forms-control" id="adbatch" name="adbatch[]" value="{{$val->batch}}">{{$val->batch}}</td>
	 <td><input type="hidden" class="forms-control" id="adname" name="adname[]" value="{{$val->name}}">{{$val->name}}</td>
    <td><input type="hidden" class="forms-control" id="adfromDate" name="adfromDate[]" value="{{date('d-m-Y', strtotime($val->fromDate))}}">{{date('d-m-Y', strtotime($val->fromDate))}}</td>
    <td><input type="hidden" class="forms-control" id="adtoDate" name="adtoDate[]" value="{{date('d-m-Y', strtotime($val->toDate))}}">{{date('d-m-Y', strtotime($val->toDate))}}</td>
   
    <td><input type="hidden" class="forms-control" id="adstudentsAttended" name="adstudentsAttended[]" value="{{$val->numStudentsAttended}}">{{$val->numStudentsAttended}}</td>
    <td><input type="hidden" class="forms-control" id="adstudentsBenefitted" name="adstudentsBenefitted[]" value="{{$val->numStudentsBenefitted}}">{{$val->numStudentsBenefitted}}</td>
    <td><input type="hidden" class="forms-control" id="adremarks" name="adremarks[]" value="{{$val->outcome}}">{{$val->outcome}}</td>

												</tr>
												<?php $i++; ?>
                                       @endforeach
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>
									<br />
									<!--26-->
									<p> Details of Programmes for Slow Learners and Outcome</p>
									<div class="table-responsive">
									@if(!empty($slowlearnerreport))
								 <input type="text" id="searchslowlearnerreport" placeholder="Search...">
								<table class="table table-bordered" id="slowlearnerreports">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($slowlearnerreport as $data)
								  @foreach($data as $val)
												<tr>
												<td>{{$i}}</td>
													
													<td><input type="hidden" class="forms-control" id="slowprogram" name="slowprogram[]" value="{{$val->course_name}}">{{$val->course_name}}</td>
    <td><input type="hidden" class="forms-control" id="slsemester" name="slsemester[]" value="{{$val->semester}}">{{$val->semester}}</td>
    <td><input type="hidden" class="forms-control" id="slbatch" name="slbatch[]" value="{{$val->batch}}">{{$val->batch}}</td>
	 <td><input type="hidden" class="forms-control" id="slname" name="slname[]" value="{{$val->name}}">{{$val->name}}</td>
    <td><input type="hidden" class="forms-control" id="slfromDate" name="slfromDate[]" value="{{date('d-m-Y', strtotime($val->fromDate))}}">{{date('d-m-Y', strtotime($val->fromDate))}}</td>
    <td><input type="hidden" class="forms-control" id="sltoDate" name="sltoDate[]" value="{{date('d-m-Y', strtotime($val->toDate))}}">{{date('d-m-Y', strtotime($val->toDate))}}</td>
   
    <td><input type="hidden" class="forms-control" id="slstudentsAttended" name="slstudentsAttended[]" value="{{$val->numStudentsAttended}}">{{$val->numStudentsAttended}}</td>
    <td><input type="hidden" class="forms-control" id="slstudentsBenefitted" name="slstudentsBenefitted[]" value="{{$val->numStudentsBenefitted}}">{{$val->numStudentsBenefitted}}</td>
    <td><input type="hidden" class="forms-control" id="slremarks" name="slremarks[]" value="{{$val->outcome}}">{{$val->outcome}}</td>
												</tr>
												<?php $i++; ?>
                                       @endforeach
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>
									<br />

									

									<!--40-->
									<p> Details of Seminars, Workshops, FDP, Training Programmes, Skill enrichment programmes, Fests, camps, invited talks, Association
									activities etc. organised by the dept.</p>

									<div class="table-responsive">
									 @if(!empty($fdp))
										 <input type="text" id="Searchfdpreport" placeholder="Search...">
								<table class="table table-bordered" id="fdpreport">
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
											 <tbody>
											 <?php $i=1; ?>
                                    @foreach($fdp as $val)
								
										<tr>
											<td>{{$i}}</td>
											<td><input type="hidden" class="forms-control" id="eventtitle" name="eventtitle[]" value="{{$val->title}}" >{{$val->title}}</td>
											<td><input type="hidden" class="forms-control" id="eventcat" name="eventcat[]" value="{{$val->category}}" >{{$val->category}}</td>
											<td><input type="hidden" class="forms-control" id="eventdept" name="eventdept[]" value="{{$val->department}}" >{{$val->department}}</td>
											<td><input type="hidden" class="forms-control" id="eventsts" name="eventsts[]" value="{{$val->no_students}}" >{{$val->no_students}}</td>
											<td><input type="hidden" class="forms-control" id="eventfromdate" name="eventfromdate[]" value="{{$val->from_date}}" >{{date('d-m-Y', strtotime($val->from_date))}}</td>
											<td><input type="hidden" class="forms-control" id="eventfromdate" name="eventfromdate[]" value="{{$val->to_date}}" >{{date('d-m-Y', strtotime($val->to_date))}}</td>
											
											<td><span><input type="text" class="forms-control" id="college" name="college[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="outside" name="outside[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="fundingagency" name="fundingagency[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="othersource" name="othersource[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="totfunds" name="totfunds[]" ></span></td>
											<td><span><input type="text" class="forms-control" id="totexp" name="totexp[]" ></span></td>
										</tr>
										<?php $i++; ?>
                                   
									   @endforeach
											</tbody>
										</table>
										@endif
									</div>

					   
									
									<p>Publications of Faculty in journals,Articles etc </p>

									<div class="table-responsive">
									 @if(!empty($journal))
										 <input type="text" id="searchBookTable" placeholder="Search...">
								<table class="table table-bordered" id="bookTable">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($journal as $val)
												<tr>
													<td>{{$i}}</td>
													<td><input type="hidden" class="forms-control" id="pubtitle" name="pubtitle[]" value="{{$val->title}}" >{{$val->title}}</td>
													<td><input type="hidden" class="forms-control" id="journalname" name="journalname[]" value="{{$val->journalname}}" >{{$val->journalname}}</td>
													<td><input type="hidden" class="forms-control" id="typepublication" name="typepublication[]" value="{{$val->typepublication}}" >{{$val->typepublication}}</td>
													<td><input type="hidden" class="forms-control" id="pubdept" name="pubdept[]" value="{{$val->department}}" >{{$val->department}}</td>
													<td><input type="hidden" class="forms-control" id="impactfactor" name="impactfactor[]" value="{{$val->impactfactor}}" >{{$val->impactfactor}}</td>
													<td><input type="hidden" class="forms-control" id="issn" name="issn[]" value="{{$val->issn}}" >{{$val->issn}}</td>
													<td><input type="hidden" class="forms-control" id="vol" name="vol[]" value="{{$val->volume}},{{$val->pages}},{{$val->year}}" >{{$val->volume}},{{$val->pages}}</td>
													<td>{{$val->year}}</td>
													<td><input type="hidden" class="forms-control" id="author" name="author[]" value="{{$val->author}}" >{{$val->author}}</td>
												</tr>
												<?php $i++; ?>
                                   
									   @endforeach
											</tbody>
										</table>
											@endif
									</div>     
		<p>Publications of Faculty in Books,Book Chapters etc</p>

									<div class="table-responsive">
									 @if(!empty($book))
										 <input type="text" id="searchJournal" placeholder="Search...">
								<table class="table table-bordered" id="JournalTable">
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
											<tbody>
											 <?php $i=1; ?>
                                    @foreach($book as $val)
												<tr>
													<td>{{$i}}</td>
													<td><input type="hidden" class="forms-control" id="booktitle" name="booktitle[]" value="{{$val->title}}" >{{$val->title}}</td>
													<td><input type="hidden" class="forms-control" id="papername" name="papername[]" value="{{$val->papername}}" >{{$val->papername}}</td>
													<td><input type="hidden" class="forms-control" id="booktype" name="booktype[]" value="{{$val->booktype}}" >{{$val->booktype}}</td>
													<td><input type="hidden" class="forms-control" id="bookdept" name="bookdept[]" value="{{$val->department}}" >{{$val->department}}</td>
													<td><input type="hidden" class="forms-control" id="bookfactor" name="bookfactor[]" value="{{$val->impactfactor}}" >{{$val->impactfactor}}</td>
													<td><input type="hidden" class="forms-control" id="bookissn" name="bookissn[]" value="{{$val->issn}}" >{{$val->issn}}</td>
													<td><input type="hidden" class="forms-control" id="bookvol" name="bookvol[]" value="{{$val->volume}},{{$val->pages}},{{$val->year}}" >{{$val->volume}},{{$val->pages}},</td>
													<td>{{$val->year}}</td>
													<td><input type="hidden" class="forms-control" id="bookauthor" name="bookauthor[]" value="{{$val->author}}" >{{$val->author}}</td>
												</tr>
												<?php $i++; ?>
                                   
									   @endforeach
											</tbody>
										</table>
											@endif
									</div> 
									<!--46-->
									<p> Faculty as Invited speaker/Resource persons/ Paper presenter etc.,
								
									<div class="table-responsive">
										<table class="table table-bordered" id="ptaTable2">
											<thead>
												<tr>
													<th>Sl. No</th>
													<th>Title of topic </th>
													<th>Details of Programme </th>
													<th>Name Of Faculty </th>
													<th>Date</th>
													<th>Organised by</th>
													<th>Invited Speaker/Resource person</th>
												</tr>
											</thead>	
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="text" class="forms-control" id="topic" name="topic[]"></td>
													<td><input type="text" class="forms-control" id="speakerdept" name="speakerdept[]"></td>
													<td><input type="text" class="forms-control" id="namfac" name="namfac[]"></td>
													<td><input type="text" class="forms-control" id="datecon" name="datecon[]"></td>
													<td><input type="text" class="forms-control" id="organisedby" name="organisedby[]"></td>
													<td><input type="text" class="forms-control" id="resourseperson" name="resourseperson[]"></td>
												</tr>
											</tbody>
										</table>
										<button type="button" onclick="addRow2()">Add Row</button>
									</div>    

									<p>Any other relevant information: <span><input type="text" class="forms-control" id="name" name="name"></span></p>
						     </div>
					       </div>
					    </div>
					  </div>
				   </div>
				</div>
				<button type="submit" class="btn btn-success btn-block enter-btn" style="float:right;">Submit</button> 
			</form>
			</div>
		</div>
   
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   
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
	function addRow1() {
        var table = document.getElementById("ptaTable1").getElementsByTagName("tbody")[0];
        var newRow = table.insertRow(table.rows.length);

        var slNo = newRow.insertCell(0);
        slNo.innerHTML = table.rows.length;

        for (var i = 1; i <= 5; i++) {
            var cell = newRow.insertCell(i);
            var input = document.createElement("input");
            input.type = "text";
            input.className = "forms-control";
            input.name = "dynamicInput" + i;
            cell.appendChild(input);
        }
    }
	function addRow2() {
    var table = document.getElementById("ptaTable2").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["topic[]", "speakerdept[]", "namfac[]", "datecon[]", "organisedby[]", "resourseperson[]"];

    for (var i = 1; i <= 6; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement("input");
        input.type = "text";
        input.className = "forms-control";
        input.name = inputNames[i - 1];
        cell.appendChild(input);
    }
}
	function addRow3() {
    var table = document.getElementById("ptaTable3").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["slowprogram[]", "slowsts[]", "slowbenefit[]", "slowoutcome[]"];

    for (var i = 1; i <= 4; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement("input");
        input.type = "text";
        input.className = "forms-control";
        input.name = inputNames[i - 1];
        cell.appendChild(input);
    }
}
	function addRow4() {
    var table = document.getElementById("ptaTable4").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["advanceprogram[]", "advancest[]", "advancebenefit[]", "advanceoutcome[]"];

    for (var i = 1; i <= 4; i++) {
        var cell = newRow.insertCell(i);
        var input = document.createElement("input");
        input.type = "text";
        input.className = "forms-control";
        input.name = inputNames[i - 1];
        cell.appendChild(input);
    }
}
function addRow5() {
    var table = document.getElementById("ptaTable5").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.rows.length);

    var slNo = newRow.insertCell(0);
    slNo.innerHTML = table.rows.length;

    var inputNames = ["remedialclass[]", "totremedial[]", "remedialstudents[]", "studentsbenefit[]", "outcome[]"];

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

	



</script>
<script type="text/javascript">
$(document).ready(function(){
	  $( "#searchBatch" ).autocomplete({
        source: function( request, response ) {
           $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/hod/autocompleteSearchBatch')}}",
            type: 'POST',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('.searchBatch').val(ui.item.label);// display the selected text
          $('#searchBatchid').val(ui.item.value); // save selected id to input
		 
          return false;
        },
appendTo: "#searchBatch_pos",
      });
        });
	
</script>
@endsection
