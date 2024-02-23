<?php

namespace App\Http\Controllers\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Validator;
use App\Rules\MatchOldPassword;
use DB;
use Carbon\Carbon;
use Session;
use App\Models\User;
use Auth;
use Masterminds\HTML5;
use Barryvdh\DomPDF\Facade\Pdf;



class ReportController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    } 
    public function classEngagement()
    {
		return view('admin.report.classEngageReport');
	}
   public function autocompleteSearchPrograms(Request $request)
    {
          $query = $request->search;
          
          $filterResult = DB::select("select id,course_name from course where `course_name` LIKE '$query%'");
          if ($filterResult){
			foreach($filterResult as $val){
			$data[] = array(
				"label" => $val->course_name,
				"value" => $val->id,
			
			);
			} 
			}
			else
			{
			    $data = [
  'message'=> 'No Record Found'
] ;
			}
          return response()->json($data);
     }
     public function saveClassEngage(Request $request)
    {
		 $dataArray      =  array(
	"paper_id" => $request->searchPaperid,	     
	"program_id" => $request->searchProgramsid,
	"batch" => $request->searchBatchid,
	"semester" => $request->semester,
    "from_date" => $request->fromdate,
	"to_date" => $request->todate,
	"total_hrs_alloted" =>$request->hrsalloted,
	"total_hrs_engaged" => $request->hrsengaged,
	"extra_hours" =>$request->extrahrstaken,
	"remedial_hours" => $request->remedialhrstaken,
	"faculty_id" => Auth::user()->profile_id,
  
   
   );

    $id  =   DB::table('class_engagement_report')->insertGetId($dataArray);

	if($id==1){ 
                    	return response()->json(['success'=>'Details has been uploaded']);
                } 
                else{
                    return response()->json(["message" => "Please try again."]);
                }

    } 
	   public function classEngageList(Request $request)
    {  
	     $faculty_id = Auth::user()->profile_id;
		$list = DB::select("select papers.p_name,course.course_name,class_engagement_report.*
 from class_engagement_report join papers on papers.id=class_engagement_report.paper_id
 join course on course.id=class_engagement_report.program_id where class_engagement_report.faculty_id='$faculty_id' order by class_engagement_report.id desc"); 
	    return view('admin.report.classEngageList',compact('list'));
    }
	public function deleteClassEngage($id)
{
    DB::table('class_engagement_report')->where('id', $id)->delete();

    return response()->json(['success' => true]);
}

 public function learnersReport()
    {
		return view('admin.report.learnersReport');
	}
	
	    public function saveLearnersReport(Request $request)
    {
		 $dataArray      =  array(
	"program" => $request->searchProgramsid,
	"batch" => $request->searchBatchid,
	"semester" => $request->semester,
    "fromDate" => $request->fromdate,
	"toDate" => $request->todate,
	"total_no_of_classes" => $request->totalclass,
	"category" => $request->learner,
	"numStudentsAttended" =>$request->stdtsattended,
	"numStudentsBenefitted" => $request->stdntsbenfitted,
	"outcome" =>$request->outcome,
	"facultyid" => Auth::user()->profile_id,
  
   
   );

    $id  =   DB::table('learners_bridgecourse_report')->insertGetId($dataArray);

	if($id==1){ 
                    	return response()->json(['success'=>'Details has been uploaded']);
                } 
                else{
                    return response()->json(["message" => "Please try again."]);
                }

    }
   public function learnersReportList(Request $request)
    {  
	     $faculty_id = Auth::user()->profile_id;
		$list = DB::select("select course.course_name,learners_bridgecourse_report.*
 from learners_bridgecourse_report 
 join course on course.id=learners_bridgecourse_report.program where learners_bridgecourse_report.facultyid='$faculty_id' order by learners_bridgecourse_report.id desc"); 
	    return view('admin.report.learnersReportList',compact('list'));
    }
public function deleteLearnersReport($id)
{
    DB::table('learners_bridgecourse_report')->where('id', $id)->delete();

    return response()->json(['success' => true]);
}
public function continuousInternalEvaluation()
    {
		return view('admin.report.continuousInternalEvaluation');
	}
    public function saveContinuousInternalEvaluation(Request $request)
    {
		 $dataArray      =  array(
	"paper" => $request->searchPaperid,
	"program" => $request->searchProgramsid,
	"batch" => $request->searchBatchid,
	"semester" => $request->semester,
    "fromDate" => $request->fromdate,
	"toDate" => $request->todate,
	"numShortageAttendance" => $request->shortageattendance,
	"numAssignment" => $request->asignment,
	"numSeminar" =>$request->seminar,
	"numInternalExamination" => $request->internalexam,
	"numProjects" =>$request->noofproject,
	"failedNoExternalEvaluation" => $request->stfailed,
	"numGrievanceReceived" => $request->grrecieved,
	"numStudentRedressed" =>$request->grredressed,
	"facultyid" => Auth::user()->profile_id,
  
   
   );

    $id  =   DB::table('continuous_internal_evaluation_report')->insertGetId($dataArray);

	if($id==1){ 
                    	return response()->json(['success'=>'Details has been uploaded']);
                } 
                else{
                    return response()->json(["message" => "Please try again."]);
                }

    }
 public function continuousInternalEvaluationList(Request $request)
    {  
	     $faculty_id = Auth::user()->profile_id;
		$list = DB::select("select course.course_name,continuous_internal_evaluation_report.*
 from continuous_internal_evaluation_report 
 join course on course.id=continuous_internal_evaluation_report.program where continuous_internal_evaluation_report.facultyid='$faculty_id' order by continuous_internal_evaluation_report.id desc"); 
	    return view('admin.report.continuousInternalEvaluationList',compact('list'));
    }
public function deleteContinuousInternalEvaluation($id)
{
    DB::table('continuous_internal_evaluation_report')->where('id', $id)->delete();

    return response()->json(['success' => true]);
}
public function tutorialReport()
    {
		return view('admin.report.tutorialReport');
	}
 public function saveTutorialReport(Request $request)
    {
		 $dataArray      =  array(
	"program" => $request->searchProgramsid,
	"batch" => $request->searchBatchid,
	"semester" => $request->semester,
    "fromdate" => $request->fromdate,
	"todate" => $request->todate,
	"totalNoOfHours" => $request->totalclass,
	"topic" => $request->topic,
	"reportSubmission" =>$request->reportsub,
	"facultyid" => Auth::user()->profile_id,
  
   
   );

    $id  =   DB::table('tutorial_report')->insertGetId($dataArray);

	if($id==1){ 
                    	return response()->json(['success'=>'Details has been uploaded']);
                } 
                else{
                    return response()->json(["message" => "Please try again."]);
                }

    }	
	public function tutorialReportList(Request $request)
    {  
	     $faculty_id = Auth::user()->profile_id;
		$list = DB::select("select course.course_name,tutorial_report.*
 from tutorial_report 
 join course on course.id=tutorial_report.program where tutorial_report.facultyid='$faculty_id' order by tutorial_report.id desc"); 
	    return view('admin.report.tutorialReportList',compact('list'));
    }
public function deleteTutorialReport($id)
{
    DB::table('tutorial_report')->where('id', $id)->delete();

    return response()->json(['success' => true]);
}
public function reformsReport()
    {
		return view('admin.report.reformsReport');
	}
	public function saveReformsReport(Request $request)
    {
		 $dataArray      =  array(
	"paper" => $request->searchPaperid,
	"program" => $request->searchProgramsid,
	"batch" => $request->searchBatchid,
	"semester" => $request->semester,
    "fromdate" => $request->fromdate,
	"todate" => $request->todate,
	"description" => $request->description,
	"facultyid" => Auth::user()->profile_id,
  
   
   );

    $id  =   DB::table('reforms_report')->insertGetId($dataArray);

	if($id==1){ 
                    	return response()->json(['success'=>'Details has been uploaded']);
                } 
                else{
                    return response()->json(["message" => "Please try again."]);
                }

    }
public function reformsReportList(Request $request)
    {  
	     $faculty_id = Auth::user()->profile_id;
		$list = DB::select("select course.course_name,reforms_report.*
 from reforms_report 
 join course on course.id=reforms_report.program where reforms_report.facultyid='$faculty_id' order by reforms_report.id desc"); 
	    return view('admin.report.reformsReportList',compact('list'));
    }
public function deleteReformsReport($id)
{
    DB::table('reforms_report')->where('id', $id)->delete();

    return response()->json(['success' => true]);
}	
	
 public function sectionDepartment()
    {   
 return view('admin.report.sectionDepartment');	
	}
	public function load_section1_data(Request $request)
{
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
        $course = DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'");
        $data_programs = [];

        foreach ($course as $items) {
            $course_name = $items->course_name;
            $query = DB::table('students')
                ->select('program', 'batch', DB::raw('count(id) as stcount'))
                ->where('program', $course_name)
                ->groupBy('batch');

            // Check if filterBatch value is present in the request and not empty
            if ($request->filled('filterBatch')) {
                $filterBatch = $request->input('filterBatch');
                $query->where('batch', $filterBatch);
            }

            $data_programs[] = $query->get();
        }

        return response()->json([
            'data_programs' => $data_programs,
        ]);
    }
}
public function load_section2_data(Request $request)
{
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
      $faculity_details=DB::select("SELECT name,designation,highest_edu FROM `faculity` WHERE department='$deprtmentname';"); 
        return response()->json([
            'faculity_details' => $faculity_details,
        ]);
    }
}
 public function sectionCuricculam()
{
    // Get the last inserted id's flag value from the restructuring_syllaby table
    $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
    $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

    // Initialize empty arrays to hold the fetched data
    $step1Data = [];
    $step2Data = [];
	$step3Data = [];
    $step4Data = [];
	$step5Data = [];
	$step6Data = [];
	$step7Data = [];
    if ($lastInsertedFlag === 0) {
        // Fetch the step1 and step2 data from the last inserted row
        $fetchedData = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->first();
        $step1Data = json_decode($fetchedData->step1, true);
        $step2Data = json_decode($fetchedData->step2, true);
		$step3Data = json_decode($fetchedData->step3, true);
		$step4Data = json_decode($fetchedData->step4, true);
		$step5Data = json_decode($fetchedData->step5, true);
		
		$step6Data = json_decode($fetchedData->step6, true);
		$step7Data = json_decode($fetchedData->step7, true);
    }
	
    return view('admin.report.sectionCuricculam', compact('step1Data', 'step2Data','step3Data','step4Data','step5Data','step6Data','step7Data'));
}

 public function sectionThree()
{
	 $type = Auth::user()->type;
	   if($type=='HOD')
	   { 
    $facultyid= Auth::user()->profile_id;
	      $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'"); 
	      $deprtmentname=$depart[0]->department;
		  $departid= DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'"); 
		  $deprtmentid=$departid[0]->id;
		  $course= DB::select("SELECT id,course_name FROM `course` WHERE `departments`='$deprtmentid'"); 
		
    $batches = DB::select('SELECT batch FROM students GROUP BY batch order by batch asc');
	$semesters = DB::table('students')
    ->select('semester')
    ->whereNotNull('semester')
    ->groupBy('semester')
    ->orderBy('semester', 'asc')
    ->get();
	return view('admin.report.sectionThree',compact('batches','semesters','course'));
	   }
}
public function insertStep1Data(Request $request)
{
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;

        // Get input values from the form
        $demandprogram = $request->input('demandprogram');
        $demandunitcost = $request->input('demandunitcost');
        $toprank = $request->input('toprank');
        $lastrank = $request->input('lastrank');
        $demandratio = $request->input('demandratio');

        // Check if the user already has data in the table with flag = 0
        $existingData = DB::table('restructuring_syllaby')
            ->where('type', $type)
            ->where('facultyid', $facultyid)
            ->where('deprtmentname', $deprtmentname)
            ->where('deprtmentid', $deprtmentid)
            ->where('flag', 0)
            ->orderBy('id', 'desc')
            ->first();

        if ($existingData) {
            // Update the existing data with flag = 0
            DB::table('restructuring_syllaby')
                ->where('id', $existingData->id)
                ->update([
                    'step1' => json_encode([
                        'demandprogram' => $demandprogram,
                        'demandunitcost' => $demandunitcost,
                        'toprank' => $toprank,
                        'lastrank' => $lastrank,
                        'demandratio' => $demandratio,
                    ]),
                ]);
        } else {
            // Insert new data with flag = 0
            DB::table('restructuring_syllaby')->insert([
                'step1' => json_encode([
                    'demandprogram' => $demandprogram,
                    'demandunitcost' => $demandunitcost,
                    'toprank' => $toprank,
                    'lastrank' => $lastrank,
                    'demandratio' => $demandratio,
                ]),
                'type' => $type,
                'facultyid' => (int) $facultyid,
                'deprtmentname' => $deprtmentname,
                'deprtmentid' => (int) $deprtmentid,
                'flag' => 0, // Set flag to 0
            ]);
        }

        // Return a response indicating success
        return response()->json(['message' => 'Step 1 data inserted or updated successfully']);
    }
}


 public function loadAddOnCourses(Request $request)
{
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
        $addonCourses = DB::select("SELECT * FROM course WHERE departments='$deprtmentid' AND (course_type='Certificate' OR course_type='AddOn')");
       
        // Return the data to the view using AJAX response
        return response()->json(['addonCourses' => $addonCourses]);
    }
}

public function insertStep2Data(Request $request)
{  
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$val_add_course = $request->input('val_add_course');
			
            $designedby = $request->input('designedby');
		    $tenure = $request->input('tenure');
            $facultyeng = $request->input('facultyeng');
            $stpart = $request->input('stpart');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step2' => json_encode([
					    'val_add_course' => $val_add_course,
                        'designedby' => $designedby,
						'tenure' => $tenure,
                        'facultyeng' => $facultyeng,
                        'stpart' => $stpart,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step2 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step2 data cannot be updated.']);
        }
    }
}

public function insertStep3Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$overallpgm = $request->input('overallpgm');
            $overallbatch = $request->input('overallbatch');
		    $overallsemester = $request->input('overallsemester');
            $total_students = $request->input('total_students');
            $total_pass_count = $request->input('total_pass_count');
            $pass_percentage = $request->input('pass_percentage');
			$passed_grade = $request->input('passed_grade');
			 $A_plus_count = $request->input('A_plus_count');
			 $A_count = $request->input('A_count');
		     $B_plus_count = $request->input('B_plus_count');
			 $B_count = $request->input('B_count');
			 $C_count = $request->input('C_count');
			 $D_count = $request->input('D_count');
			 $E_count = $request->input('E_count');
			 $O_count = $request->input('O_count');
			 $failed_grade = $request->input('failed_grade');
			 $remarks = $request->input('remarks');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step3' => json_encode([
					    'overallpgm' => $overallpgm,
                        'overallbatch' => $overallbatch,
						'overallsemester' => $overallsemester,
                        'total_students' => $total_students,
                        'total_pass_count' => $total_pass_count,
						 'pass_percentage' => $pass_percentage,
                        'passed_grade' => $passed_grade,
						'A_plus_count' => $A_plus_count,
                        'A_count' => $A_count,
                        'B_plus_count' => $B_plus_count,
						'B_count' => $B_count,
                        'C_count' => $C_count,
						'D_count' => $D_count,
                        'E_count' => $E_count,
                        'O_count' => $O_count,
						'failed_grade' => $failed_grade,
                        'remarks' => $remarks,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step3 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step3 data cannot be updated.']);
        }
    }
}
public function insertStep4Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$pg = $request->input('pg');
            $po = $request->input('po');
		    $pso = $request->input('pso');
            $analysis = $request->input('analysis');
           
			 
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step4' => json_encode([
					    'pg' => $pg,
                        'po' => $po,
						'pso' => $pso,
                        'analysis' => $analysis,
                    
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step4 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step4 data cannot be updated.']);
        }
    }
}
public function insertStep5Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$p_name_class = $request->input('p_name_class');
            $course = $request->input('course');
		    $batchclass = $request->input('batchclass');
            $semester = $request->input('semester');
            $from_date_class = $request->input('from_date_class');
            $to_date_class = $request->input('to_date_class');
		    $name = $request->input('name');
            $tothours = $request->input('tothours');
			$toteng = $request->input('toteng');
            $extrahrs = $request->input('extrahrs');
			 $remedial = $request->input('remedial');
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step5' => json_encode([
					    'p_name_class' => $p_name_class,
                        'course' => $course,
						'batchclass' => $batchclass,
                        'semester' => $semester,
						'from_date_class' => $from_date_class,
					    'to_date_class' => $to_date_class,
						'name' => $name,
						'tothours' => $tothours,
						'toteng' => $toteng,
						'extrahrs' => $extrahrs,
                        'remedial' => $remedial,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step5 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step5 data cannot be updated.']);
        }
    }
}
public function insertStep6Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$p_name_internal = $request->input('p_name_internal');
            $continuouscourse = $request->input('continuouscourse');
		    $cbatch = $request->input('cbatch');
            $csem = $request->input('csem');
            $cfromDate = $request->input('cfromDate');
            $ctoDate = $request->input('ctoDate');
		    $cname = $request->input('cname');
            $attendance = $request->input('attendance');
			$assignments = $request->input('assignments');
            $Seminars = $request->input('Seminars');
			 $Internal = $request->input('Internal');
			 $Projects = $request->input('Projects');
			$evaluation = $request->input('evaluation');
            $grievances = $request->input('grievances');
			 $redressed = $request->input('redressed');
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step6' => json_encode([
					    'p_name_internal' => $p_name_internal,
                        'continuouscourse' => $continuouscourse,
						'cbatch' => $cbatch,
                        'csem' => $csem,
						'cfromDate' => $cfromDate,
					    'ctoDate' => $ctoDate,
						'cname' => $cname,
						'attendance' => $attendance,
						'assignments' => $assignments,
						'Seminars' => $Seminars,
                        'Internal' => $Internal,
						'Projects' => $Projects,
						'evaluation' => $evaluation,
					    'grievances' => $grievances,
						'redressed' => $redressed,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step6 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step6 data cannot be updated.']);
        }
    }
}
public function insertStep7Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$preforms = $request->input('preforms');
            $reformsclass = $request->input('reformsclass');
		    $reformsbatch = $request->input('reformsbatch');
            $reformssemester = $request->input('reformssemester');
            $reformsfromdate = $request->input('reformsfromdate');
            $reformstodate = $request->input('reformstodate');
		    $reformsname = $request->input('reformsname');
            $reformsdescription = $request->input('reformsdescription');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step7' => json_encode([
					    'preforms' => $preforms,
                        'reformsclass' => $reformsclass,
						'reformsbatch' => $reformsbatch,
                        'reformssemester' => $reformssemester,
						'reformsfromdate' => $reformsfromdate,
					    'reformstodate' => $reformstodate,
						'reformsname' => $reformsname,
						'reformsdescription' => $reformsdescription,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step7 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step7 data cannot be updated.']);
        }
    }
}
public function insertStep8Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$tutorialIndex = $request->input('tutorialIndex');
            $tutorialSemester = $request->input('tutorialSemester');
		    $tutorialBatch = $request->input('tutorialBatch');
            $tutorialName = $request->input('tutorialName');
            $tutorialFromDate = $request->input('tutorialFromDate');
            $tutorialToDate = $request->input('tutorialToDate');
		    $tutorialTotalHours = $request->input('tutorialTotalHours');
            $tutorialTopic = $request->input('tutorialTopic');
			$tutorialReportSubmission = $request->input('tutorialReportSubmission');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step8' => json_encode([
					    'tutorialIndex' => $tutorialIndex,
                        'tutorialSemester' => $tutorialSemester,
						'tutorialBatch' => $tutorialBatch,
                        'tutorialName' => $tutorialName,
						'tutorialFromDate' => $tutorialFromDate,
					    'tutorialToDate' => $tutorialToDate,
						'tutorialTotalHours' => $tutorialTotalHours,
						'tutorialTopic' => $tutorialTopic,
						'tutorialReportSubmission' => $tutorialReportSubmission,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step8 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step8 data cannot be updated.']);
        }
    }
}
public function insertStep9Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$bridgeclass = $request->input('bridgeclass');
            $bridgesemester = $request->input('bridgesemester');
		    $bridgebatch = $request->input('bridgebatch');
            $bridgefacultyName = $request->input('bridgefacultyName');
            $bfromDate = $request->input('bfromDate');
            $btoDate = $request->input('btoDate');
		    $totalClasses = $request->input('totalClasses');
            $bstudentsAttended = $request->input('bstudentsAttended');
			$bstudentsBenefitted = $request->input('bstudentsBenefitted');
			$boutcome = $request->input('boutcome');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step9' => json_encode([
					    'bridgeclass' => $bridgeclass,
                        'bridgesemester' => $bridgesemester,
                        'bridgebatch' => $bridgebatch,
						'bridgefacultyName' => $bridgefacultyName,
					    'bfromDate' => $bfromDate,
						'btoDate' => $btoDate,
						'totalClasses' => $totalClasses,
						'bstudentsAttended' => $bstudentsAttended,
						'bstudentsBenefitted' => $bstudentsBenefitted,
						'boutcome' => $boutcome,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step9 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step9 data cannot be updated.']);
        }
    }
}
public function insertStep10Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$remedialclass = $request->input('remedialclass');
            $rsemester = $request->input('rsemester');
		    $rbatch = $request->input('rbatch');
            $rfacultyName = $request->input('rfacultyName');
            $rfromDate = $request->input('rfromDate');
            $rtoDate = $request->input('rtoDate');
		    $rtotalClasses = $request->input('rtotalClasses');
            $rstudentsBenefitted = $request->input('rstudentsBenefitted');
			$bstudentsBenefitted = $request->input('bstudentsBenefitted');
			$routcome = $request->input('routcome');
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step10' => json_encode([
					    'remedialclass' => $remedialclass,
                        'rsemester' => $rsemester,
                        'rbatch' => $rbatch,
						'rfacultyName' => $rfacultyName,
					    'rfromDate' => $rfromDate,
						'rtoDate' => $rtoDate,
						'rtotalClasses' => $rtotalClasses,
						'rstudentsBenefitted' => $rstudentsBenefitted,
						'bstudentsBenefitted' => $bstudentsBenefitted,
						'routcome' => $routcome,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step10 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step10 data cannot be updated.']);
        }
    }
}
public function insertStep11Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step2 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
            // Get input values from the form for step 2
			$advanceprogram = $request->input('advanceprogram');
            $adsemester = $request->input('adsemester');
		    $adbatch = $request->input('adbatch');
            $adname = $request->input('adname');
            $adfromDate = $request->input('adfromDate');
            $adtoDate = $request->input('adtoDate');
		    $adstudentsAttended = $request->input('adstudentsAttended');
            $adstudentsBenefitted = $request->input('adstudentsBenefitted');
			$adremarks = $request->input('adremarks');
		
			
            DB::table('restructuring_syllaby')
                ->where('id', $lastInsertedId)
                ->update([
                    'step11' => json_encode([
					    'advanceprogram' => $advanceprogram,
                        'adsemester' => $adsemester,
                        'adbatch' => $adbatch,
						'adname' => $adname,
					    'adfromDate' => $adfromDate,
						'adtoDate' => $adtoDate,
						'adstudentsAttended' => $adstudentsAttended,
						'adstudentsBenefitted' => $adstudentsBenefitted,
						'adremarks' => $adremarks,
                    ]),
                ]);

            // Return a response indicating success
            return response()->json(['message' => 'Step11 data updated successfully']);
        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step11 data cannot be updated.']);
        }
    }
}
public function insertStep12Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step12 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
          $slowprogram = $request->input('slowprogram');
          $slsemester = $request->input('slsemester');
          $slbatch = $request->input('slbatch');
           $slname = $request->input('slname');
          $slfromDate = $request->input('slfromDate');
          $sltoDate = $request->input('sltoDate');
          $slstudentsAttended = $request->input('slstudentsAttended');
          $slstudentsBenefitted = $request->input('slstudentsBenefitted');
          $slremarks = $request->input('slremarks');
        

DB::table('restructuring_syllaby')
    ->where('id', $lastInsertedId)
    ->update([
        'step12' => json_encode([
            'slowprogram' => $slowprogram,
            'slsemester' => $slsemester,
            'slbatch' => $slbatch,
            'slname' => $slname,
            'slfromDate' => $slfromDate,
            'sltoDate' => $sltoDate,
            'slstudentsAttended' => $slstudentsAttended,
            'slstudentsBenefitted' => $slstudentsBenefitted,
            'slremarks' => $slremarks,
          
        ]),
    ]);

// Return a response indicating success
return response()->json(['message' => 'Step 12 data updated successfully']);

        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step12 data cannot be updated.']);
        }
    }
}

	public function insertStep13Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step12 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
          $eventtitle = $request->input('eventtitle');
$eventcat = $request->input('eventcat');
$eventdept = $request->input('eventdept');
$eventsts = $request->input('eventsts');
$eventfromdate = $request->input('eventfromdate');
$eventtodate = $request->input('eventtodate');
$college = $request->input('college');
$outside = $request->input('outside');
$fundingagency = $request->input('fundingagency');
$othersource = $request->input('othersource');
$totfunds = $request->input('totfunds');
$totexp = $request->input('totexp');

DB::table('restructuring_syllaby')
    ->where('id', $lastInsertedId)
    ->update([
        'step13' => json_encode([
            'eventtitle' => $eventtitle,
            'eventcat' => $eventcat,
            'eventdept' => $eventdept,
            'eventsts' => $eventsts,
            'eventfromdate' => $eventfromdate,
            'eventtodate' => $eventtodate,
            'college' => $college,
            'outside' => $outside,
            'fundingagency' => $fundingagency,
            'othersource' => $othersource,
            'totfunds' => $totfunds,
            'totexp' => $totexp,
        ]),
    ]);

// Return a response indicating success
return response()->json(['message' => 'Step 13 data updated successfully']);

        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step13 data cannot be updated.']);
        }
    }
}
public function insertStep14Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step12 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
          $pubtitle = $request->input('pubtitle');
$journalname = $request->input('journalname');
$typepublication = $request->input('typepublication');
$pubdept = $request->input('pubdept');
$impactfactor = $request->input('impactfactor');
$issn = $request->input('issn');
$vol = $request->input('vol');
$year = $request->input('year');
$author = $request->input('author');


DB::table('restructuring_syllaby')
    ->where('id', $lastInsertedId)
    ->update([
        'step14' => json_encode([
            'pubtitle' => $pubtitle,
            'journalname' => $journalname,
            'typepublication' => $typepublication,
            'pubdept' => $pubdept,
            'impactfactor' => $impactfactor,
            'issn' => $issn,
            'vol' => $vol,
			'year' => $year,
			'author' => $author,
          
        ]),
    ]);

// Return a response indicating success
return response()->json(['message' => 'Step 14 data updated successfully']);

        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step14 data cannot be updated.']);
        }
    }
}
public function insertStep15Data(Request $request)
{  

    $type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step12 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
          $booktitle = $request->input('booktitle');
$papername = $request->input('papername');
$booktype = $request->input('booktype');
$bookdept = $request->input('bookdept');
$bookfactor = $request->input('bookfactor');
$bookissn = $request->input('bookissn');
$bookvol = $request->input('bookvol');
$bookauthor = $request->input('bookauthor');


DB::table('restructuring_syllaby')
    ->where('id', $lastInsertedId)
    ->update([
        'step15' => json_encode([
            'booktitle' => $booktitle,
            'papername' => $papername,
            'booktype' => $booktype,
            'bookdept' => $bookdept,
            'bookfactor' => $bookfactor,
            'bookissn' => $bookissn,
            'bookvol' => $bookvol,
			'bookauthor' => $bookauthor,
			
          
        ]),
    ]);

// Return a response indicating success
return response()->json(['message' => 'Step 15 data updated successfully']);

        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step15 data cannot be updated.']);
        }
    }
}
public function insertStep16Data(Request $request)
{  
$type = Auth::user()->type;
    if ($type == 'HOD') {
        // Get the last inserted id's flag value from the restructuring_syllaby table
        $lastInsertedId = DB::table('restructuring_syllaby')->orderBy('id', 'desc')->value('id');
        $lastInsertedFlag = DB::table('restructuring_syllaby')->where('id', $lastInsertedId)->value('flag');

        // Update step12 data for the last inserted row with flag = 0
        if ($lastInsertedFlag === 0) {
          $topic = $request->input('topic');
$speakerdept = $request->input('speakerdept');
$namfac = $request->input('namfac');
$fapifromdate = $request->input('fapifromdate');
$fapitodate = $request->input('fapitodate');
$organisedby = $request->input('organisedby');
$resourseperson = $request->input('resourseperson');


DB::table('restructuring_syllaby')
    ->where('id', $lastInsertedId)
    ->update([
        'step16' => json_encode([
            'topic' => $topic,
            'speakerdept' => $speakerdept,
            'namfac' => $namfac,
            'fapifromdate' => $fapifromdate,
            'fapitodate' => $fapitodate,
            'organisedby' => $organisedby,
            'resourseperson' => $resourseperson,
          
        ]),
    ]);

// Return a response indicating success
return response()->json(['message' => 'Step 16 data updated successfully']);

        } else {
            // If the flag is not 0, you can decide how to handle this case, e.g., show an error message
            return response()->json(['error' => 'Step16 data cannot be updated.']);
        }
    }
}
public function loadOverallMarks(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
        $result = array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
		 $result[]=DB::select("SELECT students.batch, students.program, overall_marks.semester,
       COUNT(DISTINCT students.id) AS total_students,
       COUNT(CASE WHEN overall_marks.grade = 'A+' THEN 1 END) AS A_plus_count,
       COUNT(CASE WHEN overall_marks.grade = 'A' THEN 1 END) AS A_count,
       COUNT(CASE WHEN overall_marks.grade = 'B+' THEN 1 END) AS B_plus_count,
       COUNT(CASE WHEN overall_marks.grade = 'B' THEN 1 END) AS B_count,
       COUNT(CASE WHEN overall_marks.grade = 'C+' THEN 1 END) AS C_plus_count,
       COUNT(CASE WHEN overall_marks.grade = 'C' THEN 1 END) AS C_count,
       COUNT(CASE WHEN overall_marks.grade = 'E' THEN 1 END) AS E_count,
       COUNT(CASE WHEN overall_marks.grade = 'O' THEN 1 END) AS O_count,
        COUNT(CASE WHEN overall_marks.grade = 'D' THEN 1 END) AS D_count,
       COUNT(CASE WHEN overall_marks.grade = 'PASSED' THEN 1 END) AS passed_grade,
       COUNT(CASE WHEN overall_marks.grade = 'FAILED' THEN 1 END) AS failed_grade,
       COUNT(CASE WHEN overall_marks.grade IN ('A+', 'A', 'B+', 'B', 'C+', 'C', 'E', 'O', 'PASSED') THEN 1 END) AS total_pass_count,
        ROUND((COUNT(CASE WHEN overall_marks.grade NOT IN ('FAILED') THEN 1 END) / COUNT(DISTINCT students.id)) * 100,2) AS pass_percentage
FROM students
JOIN overall_marks ON overall_marks.stid = students.id
WHERE students.program = '$course_name'
GROUP BY students.batch, students.program, overall_marks.semester");
		}
		$overall_marks = $result;
	
        return response()->json(['OverallMarks' => $overall_marks]);
    }
}
public function loadClassEngagement(Request $request)
{
    $type = Auth::user()->type;

    if ($type == 'HOD') {
      
        $classengagement = array();

        // Check if 'step5' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step5')->orderBy('id', 'desc')->value('flag');
        
       if ($lastInsertedFlag === 0) {
            // 'step5' column is not null, retrieve and return its data
            $step5Data = DB::table('restructuring_syllaby')->whereNotNull('step5')->orderBy('id', 'desc')->value('step5');
           
           $step5Data = json_decode($step5Data, true);

// Reformat the $step5Data into the desired structure
$classengreports = [];

foreach ($step5Data['name'] as $index => $name) {
    $classengreport = [
        'p_name' => $step5Data['p_name_class'][$index],
        'course_name' => $step5Data['course'][$index],
        'batch' => $step5Data['batchclass'][$index],
        'semester' => $step5Data['semester'][$index],
        'from_date' => $step5Data['from_date_class'][$index],
        'to_date' => $step5Data['to_date_class'][$index],
        'name' => $name,
        'total_hrs_alloted' => $step5Data['tothours'][$index],
        'total_hrs_engaged' => $step5Data['toteng'][$index],
        'extra_hours' => $step5Data['extrahrs'][$index],
        'remedial_hours' => $step5Data['remedial'][$index],
    ];

    $classengreports[] = [$classengreport];
}

// Now $classengreports is an array of objects
return response()->json(['classengreport' => $classengreports]);


}
 else {
		  $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
         $classengagement = array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
	$classengagement[]= DB::select("select papers.p_name,course.course_name,faculity.name,class_engagement_report.*
 from class_engagement_report 
 join papers on papers.id=class_engagement_report.paper_id
 join course on course.id=class_engagement_report.program_id 
 join faculity on faculity.fid=class_engagement_report.faculty_id
 where class_engagement_report.program_id='$courseid' order by class_engagement_report.id desc");
		}
		$classengreport= $classengagement;
	
        return response()->json(['classengreport' => $classengreport]);
        }
    }
}

public function loadContinuousReport(Request $request)
{
    $type = Auth::user()->type;

    if ($type == 'HOD') {
        $continuousreport = array();

        // Check if 'step6' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step6')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            // 'step6' column is not null, retrieve and return its data
            $step6Data = DB::table('restructuring_syllaby')->whereNotNull('step6')->orderBy('id', 'desc')->value('step6');

            $step6Data = json_decode($step6Data, true);
            $continuousreports = [];

            // Loop through the step6 data and reformat it
            foreach ($step6Data['csem'] as $index => $semester) {
                $continuousreport = [
                    'p_name' => $step6Data['p_name_internal'][$index],
                    'course_name' => $step6Data['continuouscourse'][$index],
                    'batch' => $step6Data['cbatch'][$index],
                    'semester' => $semester,
                    'fromDate' => $step6Data['cfromDate'][$index],
                    'toDate' => $step6Data['ctoDate'][$index],
                    'name' => $step6Data['cname'][$index],
                    'numInternalExamination' => $step6Data['Internal'][$index],
                    'numProjects' => $step6Data['Projects'][$index],
                    'numSeminar' => $step6Data['Seminars'][$index],
                    'numStudentRedressed' => $step6Data['redressed'][$index],
                    'numShortageAttendance' => $step6Data['attendance'][$index],
                    'failedNoExternalEvaluation' => $step6Data['evaluation'][$index],
                    'numGrievanceReceived' => $step6Data['grievances'][$index],
                    'numAssignment' => $step6Data['assignments'][$index],
                ];

                $continuousreports[] = [$continuousreport];
            }

            // Now $continuousreports is an array of objects
            return response()->json(['continuousreport' => $continuousreports]);
        } else {
            $facultyid = Auth::user()->profile_id;
            $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
            $deprtmentname = $depart[0]->department;
            $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
            $deprtmentid = $departid[0]->id;
            $course = DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'");
            $continuousevaluation = array();

            // Loop through courses and retrieve data
            foreach ($course as $items) {
                $course_name = $items->course_name;
                $courseid = $items->id;
                $continuousevaluation[] = DB::select("select papers.p_name,course.course_name,faculity.name,continuous_internal_evaluation_report.*
                    from continuous_internal_evaluation_report 
                    join papers on papers.id=continuous_internal_evaluation_report.paper
                    join course on course.id=continuous_internal_evaluation_report.program
                    join faculity on faculity.fid=continuous_internal_evaluation_report.facultyid
                    where continuous_internal_evaluation_report.program='$courseid' order by continuous_internal_evaluation_report.id desc");
            }

            $continuousreport = $continuousevaluation;

            return response()->json(['continuousreport' => $continuousreport]);
        }
    }
}

public function loadReformsReport(Request $request)
{
    $type = Auth::user()->type;

    if ($type == 'HOD') {
        $reformsreport = [];

        // Check if 'step7' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step7')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            $step7Data = DB::table('restructuring_syllaby')->whereNotNull('step7')->orderBy('id', 'desc')->value('step7');

            $step7Data = json_decode($step7Data, true);
            $reformsreports = [];

            // Loop through the step7 data and reformat it
            foreach ($step7Data['reformssemester'] as $index => $semester) {
                $reformsreport = [
                    'p_name' => $step7Data['preforms'][$index],
                    'name' => $step7Data['reformsname'][$index],
                    'batch' => $step7Data['reformsbatch'][$index],
                    'course_name' => $step7Data['reformsclass'][$index],
                    'todate' => $step7Data['reformstodate'][$index],
                    'fromdate' => $step7Data['reformsfromdate'][$index],
                    'semester' => $semester,
                    'description' => $step7Data['reformsdescription'][$index],
                ];

                $reformsreports[] = [$reformsreport];
            }

            // Now $reformsreports is an array of objects
            return response()->json(['reformsreport' => $reformsreports]);
        } else {
            $facultyid = Auth::user()->profile_id;
            $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
            $deprtmentname = $depart[0]->department;
            $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
            $deprtmentid = $departid[0]->id;
            $course = DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'");
            $reforms = [];
            foreach ($course as $items) {
                $course_name = $items->course_name;
                $courseid = $items->id;
                $reforms[] = DB::select("select papers.p_name, course.course_name, faculity.name, reforms_report.*
                 from reforms_report 
                 join papers on papers.id = reforms_report.paper
                 join course on course.id = reforms_report.program
                 join faculity on faculity.fid = reforms_report.facultyid
                 where reforms_report.program = '$courseid' order by reforms_report.id desc");
            }
            $reformsreport = $reforms;

            return response()->json(['reformsreport' => $reformsreport]);
        }
    }
}

public function loadTutorialReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
        $tutorialreport = [];

        // Check if 'step8' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step8')->orderBy('id', 'desc')->value('flag');

       if ($lastInsertedFlag === 0) {
            $step8Data = DB::table('restructuring_syllaby')->whereNotNull('step8')->orderBy('id', 'desc')->value('step8');

            $step8Data = json_decode($step8Data, true);
            $tutorialreports = [];

         
           // Loop through the step8 data and reformat it
          foreach ($step8Data['tutorialName'] as $index => $tutorialName) {
        $tutorialreport = [
        'name' => $tutorialName,
        'batch' => $step8Data['tutorialBatch'][$index],
        'course_name' => $step8Data['tutorialIndex'][$index],
        'topic' => $step8Data['tutorialTopic'][$index],
        'todate' => $step8Data['tutorialToDate'][$index],
        'fromdate' => $step8Data['tutorialFromDate'][$index],
        'semester' => $step8Data['tutorialSemester'][$index],
        'reportSubmission' => $step8Data['tutorialReportSubmission'][$index],
        'totalNoOfHours' => $step8Data['tutorialTotalHours'][$index],
    ];

    $tutorialreports[] = [$tutorialreport];
}


            // Now $tutorialreports is an array of objects
            return response()->json(['tutorialreport' => $tutorialreports]);
        } else {
            $facultyid = Auth::user()->profile_id;
            $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
            $deprtmentname = $depart[0]->department;
            $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
            $deprtmentid = $departid[0]->id;
            $course = DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'");
            $tutorial = array();
            foreach ($course as $items) {
                $course_name = $items->course_name;
                $courseid = $items->id;
                $tutorial[] = DB::select("SELECT course.course_name, faculity.name, tutorial_report.*
                    FROM tutorial_report 
                    JOIN course ON course.id = tutorial_report.program
                    JOIN faculity ON faculity.fid = tutorial_report.facultyid
                    WHERE tutorial_report.program = '$courseid' ORDER BY tutorial_report.id DESC");
            }

            $tutorialreport = $tutorial;

            return response()->json(['tutorialreport' => $tutorialreport]);
        }
    }
}

public function loadBridgeReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
	 $bridgecoursereport = [];

        // Check if 'step8' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step9')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            $step9Data = DB::table('restructuring_syllaby')->whereNotNull('step9')->orderBy('id', 'desc')->value('step9');

            $step9Data = json_decode($step9Data, true);
           $bridgecoursereports = [];

foreach ($step9Data['bridgeclass'] as $index => $bridgeclass) {
    $bridgecoursereport = [
        'course_name' => $bridgeclass,
		'semester' => $step9Data['bridgesemester'][$index],
        'batch' => $step9Data['bridgebatch'][$index],
		'name' => $step9Data['bridgefacultyName'][$index],
		'fromDate' => $step9Data['bfromDate'][$index],
		'toDate' => $step9Data['btoDate'][$index],
		'total_no_of_classes' => $step9Data['totalClasses'][$index], 
        'numStudentsAttended' => $step9Data['bstudentsAttended'][$index], 
		'numStudentsBenefitted' => $step9Data['bstudentsBenefitted'][$index], 
        'outcome' => $step9Data['boutcome'][$index], 
        ];

    $bridgecoursereports[] = [$bridgecoursereport];
}
return response()->json(['bridgecoursereport' => $bridgecoursereports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
         $bridgecourse= array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
	$bridgecourse[]= DB::select("select course.course_name,faculity.name,learners_bridgecourse_report.*
 from learners_bridgecourse_report 
 join course on course.id=learners_bridgecourse_report.program
 join faculity on faculity.fid=learners_bridgecourse_report.facultyid
 where learners_bridgecourse_report.program='$courseid' and learners_bridgecourse_report.category='Bridgecourse' order by learners_bridgecourse_report.id desc");
		}
$bridgecoursereport = $bridgecourse;
	
        return response()->json(['bridgecoursereport' => $bridgecoursereport]);
    }
	}
}
public function loadRemedialReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
	$remedialreport = [];

        // Check if 'step8' column is not null
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step10')->orderBy('id', 'desc')->value('flag');

       if ($lastInsertedFlag === 0) {
            $step10Data = DB::table('restructuring_syllaby')->whereNotNull('step10')->orderBy('id', 'desc')->value('step10');

            $step10Data = json_decode($step10Data, true);
           $remedialreports = [];

foreach ($step10Data['remedialclass'] as $index => $remedialclass) {
    $remedialreport = [
        'course_name' => $remedialclass,
		'semester' => $step10Data['rsemester'][$index],
        'batch' => $step10Data['rbatch'][$index],
		'name' => $step10Data['rfacultyName'][$index],
		'fromDate' => $step10Data['rfromDate'][$index],
		'toDate' => $step10Data['rtoDate'][$index],
		'total_no_of_classes' => $step10Data['rtotalClasses'][$index], 
        'numStudentsAttended' => $step10Data['rstudentsBenefitted'][$index], 
		'numStudentsBenefitted' => $step10Data['bstudentsBenefitted'][$index], 
        'outcome' => $step10Data['routcome'][$index], 
        ];

    $remedialreports[] = [$remedialreport];
}
return response()->json(['remedialreport' => $remedialreports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
          $remedial = array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
	  $remedial[]= DB::select("select course.course_name,faculity.name,learners_bridgecourse_report.*
 from learners_bridgecourse_report 
 join course on course.id=learners_bridgecourse_report.program
 join faculity on faculity.fid=learners_bridgecourse_report.facultyid
 where learners_bridgecourse_report.program='$courseid' and learners_bridgecourse_report.category='Remedialclass' order by learners_bridgecourse_report.id desc");
		}
$remedialreport = $remedial;
	
        return response()->json(['remedialreport' => $remedialreport]);
    }
  }
}
public function loadAdvancedLearnersReport(Request $request)
{ 
    $type = Auth::user()->type;
   
	if ($type == 'HOD') {
	$advancelearnerreport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step11')->orderBy('id', 'desc')->value('flag');

       if ($lastInsertedFlag === 0) {
            $step11Data = DB::table('restructuring_syllaby')->whereNotNull('step11')->orderBy('id', 'desc')->value('step11');

            $step11Data = json_decode($step11Data, true);
           $advancelearnerreports = [];

foreach ($step11Data['advanceprogram'] as $index => $advanceprogram) {
    $advancelearnerreport = [
        'course_name' => $advanceprogram,
		'semester' => $step11Data['adsemester'][$index], 
        'batch' => $step11Data['adbatch'][$index],
		'name' => $step11Data['adname'][$index],
		'fromDate' => $step11Data['adfromDate'][$index],
		'toDate' => $step11Data['adtoDate'][$index],
        'numStudentsAttended' => $step11Data['adstudentsAttended'][$index], 
		'numStudentsBenefitted' => $step11Data['adstudentsBenefitted'][$index], 
		'outcome' => $step11Data['adremarks'][$index], 
        ];

    $advancelearnerreports[] = [$advancelearnerreport];
}
return response()->json(['advancelearnerreport' => $advancelearnerreports]);
			}else
			{
			
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
         $advancelearner = array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
	  $advancelearner[]= DB::select("select course.course_name,faculity.name,learners_bridgecourse_report.*
 from learners_bridgecourse_report 
 join course on course.id=learners_bridgecourse_report.program
 join faculity on faculity.fid=learners_bridgecourse_report.facultyid
 where learners_bridgecourse_report.program='$courseid' and learners_bridgecourse_report.category='Advancedlearner' order by learners_bridgecourse_report.id desc");
		}
$advancelearnerreport = $advancelearner;
	
        return response()->json(['advancelearnerreport' => $advancelearnerreport]);
    }
  }
}
public function loadSlowLearnersReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
	$slowlearnerreport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step12')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            $step12Data = DB::table('restructuring_syllaby')->whereNotNull('step12')->orderBy('id', 'desc')->value('step12');

            $step12Data = json_decode($step12Data, true);
           $slowlearnerreports = [];

foreach ($step12Data['slowprogram'] as $index => $slowprogram) {
    $slowlearnerreport = [
        'course_name' => $slowprogram,
		'semester' => $step12Data['slsemester'][$index], 
        'batch' => $step12Data['slbatch'][$index],
		'name' => $step12Data['slname'][$index],
		'fromDate' => $step12Data['slfromDate'][$index],
		'toDate' => $step12Data['sltoDate'][$index],
        'numStudentsAttended' => $step12Data['slstudentsAttended'][$index], 
		'numStudentsBenefitted' => $step12Data['slstudentsBenefitted'][$index], 
		'outcome' => $step12Data['slremarks'][$index], 
        ];

    $slowlearnerreports[] = [$slowlearnerreport];
}
return response()->json(['slowlearnerreport' => $slowlearnerreports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $course= DB::select("SELECT * FROM `course` WHERE `departments`='$deprtmentid'"); 
         $slowlearner = array();
        foreach ($course as $items) {
		$course_name=$items->course_name;
		$courseid=$items->id;
	 $slowlearner[]= DB::select("select course.course_name,faculity.name,learners_bridgecourse_report.*
 from learners_bridgecourse_report 
 join course on course.id=learners_bridgecourse_report.program
 join faculity on faculity.fid=learners_bridgecourse_report.facultyid
 where learners_bridgecourse_report.program='$courseid' and learners_bridgecourse_report.category='Slowlearner' order by learners_bridgecourse_report.id desc");
		}
$slowlearnerreport = $slowlearner;
	
        return response()->json(['slowlearnerreport' => $slowlearnerreport]);
    }
  }
}
public function loadFdpReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
	$fdpreport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step13')->orderBy('id', 'desc')->value('flag');

      if ($lastInsertedFlag === 0) {
            $step13Data = DB::table('restructuring_syllaby')->whereNotNull('step13')->orderBy('id', 'desc')->value('step13');

            $step13Data = json_decode($step13Data, true);
			
           $fdpreports = [];

foreach ($step13Data['eventtitle'] as $index => $eventtitle) {
    $fdpreport = [
        'title' => $eventtitle,
		'category' => $step13Data['eventcat'][$index], 
        'department' => $step13Data['eventdept'][$index],
		'no_students' => $step13Data['eventsts'][$index],
		'from_date' => $step13Data['eventfromdate'][$index],
		'to_date' => $step13Data['eventtodate'][$index],
        'college' => $step13Data['college'][$index], 
		'outside' => $step13Data['outside'][$index], 
		'fundingagency' => $step13Data['fundingagency'][$index], 
		'othersource' => $step13Data['othersource'][$index], 
		'totfunds' => $step13Data['totfunds'][$index], 
		'totexp' => $step13Data['totexp'][$index], 
        ];

    $fdpreports[] = [$fdpreport];
}
return response()->json(['fdpreport' => $fdpreports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
		 $fdp = array();
        $fdp[]= DB::select("SELECT fdp.*, faculity.name, faculity.department
FROM fdp
JOIN faculity ON faculity.fid = fdp.fid
WHERE faculity.department = '$deprtmentname' 
  AND YEAR(fdp.from_date) = YEAR(CURDATE())
  AND YEAR(fdp.to_date) = YEAR(CURDATE())
ORDER BY fdp.id DESC;");
	$fdparray = $fdp;
        return response()->json(['fdpreport' => $fdparray]);
    }
	}
}
public function loadFapiReport(Request $request)
{ 
    $type = Auth::user()->type;
   if ($type == 'HOD') {
	$fapireport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step16')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            $step16Data = DB::table('restructuring_syllaby')->whereNotNull('step16')->orderBy('id', 'desc')->value('step16');

            $step16Data = json_decode($step16Data, true);
			
           $fapireports = [];

foreach ($step16Data['topic'] as $index => $topic) {
    $fapireport = [
        'title' => $topic,
		'category' => $step13Data['speakerdept'][$index], 
        'facultyname' => $step13Data['namfac'][$index],
		'from_date' => $step13Data['fapifromdate'][$index],
		'to_date' => $step13Data['fapitodate'][$index],
		'organisedby' => $step13Data['organisedby'][$index],
        'resourseperson' => $step13Data['resourseperson'][$index], 
        ];

    $fapireports[] = [$fapireport];
}
return response()->json(['fapireport' => $fapireports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
         $fapi= DB::select("SELECT DISTINCT fdp.`id`,fdp.`title`,fdp.`from_date`,fdp.`to_date`,fdp.`venue`,fdp.`agenda`,faculity.name as facultyname,faculity.department as dept,fdp.`eventtype`,fdp.`male_teacher`,fdp.`female_teacher`,fdp.`male_student`,fdp.`female_student`,fdp.`other_student`,fdp.`specially_abled`,fdp.`caste_sc`,fdp.`caste_st`,fdp.`caste_obc`,fdp.`fid`,`title`,`from_date`,`to_date`,`venue`,fdp.`type`,fdp.`category`,fdp.indulgence_level,fdp.practice,naac_keyword.keywordname from fdp 
LEFT join naac_keyword on naac_keyword.id=fdp.main_criteria
LEFT join faculity on faculity.fid=fdp.fid where  fdp.type='fapi' and faculity.department = 'BOTANY' AND YEAR(fdp.from_date) = YEAR(CURDATE())
  AND YEAR(fdp.to_date) = YEAR(CURDATE()) order by id desc");
	
        return response()->json(['fapireport' => $fapi]);
    }
   }
}
public function loadJournalReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
		$journalreport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step14')->orderBy('id', 'desc')->value('flag');

      if ($lastInsertedFlag === 0) {
            $step14Data = DB::table('restructuring_syllaby')->whereNotNull('step14')->orderBy('id', 'desc')->value('step14');

            $step14Data = json_decode($step14Data, true);
           $journalreports = [];

foreach ($step14Data['pubtitle'] as $index => $pubtitle) {
    $journalreport = [
        'title' => $pubtitle,
		'journalname' => $step14Data['journalname'][$index], 
        'typepublication' => $step14Data['typepublication'][$index],
		'department' => $step14Data['pubdept'][$index],
		'impactfactor' => $step14Data['impactfactor'][$index],
		'issn' => $step14Data['issn'][$index],
		'vol' => isset($step14Data['vol'][$index]) ? $step14Data['vol'][$index] : '',
        'year' => isset($step14Data['year'][$index]) ? $step14Data['year'][$index] : '',
		'author' => isset($step14Data['author'][$index]) ? $step14Data['author'][$index] : '',
        ];

    $journalreports[] = [$journalreport];
}
return response()->json(['journalreport' => $journalreports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
		 $journal = array();
        $journal[]=DB::select("SELECT *
FROM (
    SELECT journal_publication.*, faculity.name, 'Faculty' AS category, faculity.department
    FROM journal_publication
    JOIN faculity ON faculity.fid = journal_publication.publisherid
    WHERE journal_publication.publisherwhom = '1'
    
    UNION
    
    SELECT journal_publication.*, research_fellow.name, 'ResearchFellowFaculty' AS category, faculity.department
    FROM journal_publication
    JOIN research_fellow ON research_fellow.id = journal_publication.publisherid
    JOIN fellow_guide_faculty_master ON fellow_guide_faculty_master.research_fellow_id = journal_publication.publisherid
    JOIN faculity ON faculity.fid = fellow_guide_faculty_master.faculty_id
    WHERE journal_publication.publisherwhom = '5'
    
    UNION
    
    SELECT journal_publication.*, research_guide.supervisor_name AS name, 'ResearchGuideFaculty' AS category, faculity.department
    FROM journal_publication
    JOIN research_guide ON research_guide.id = journal_publication.publisherid
    JOIN fellow_guide_faculty_master ON fellow_guide_faculty_master.research_guide_id = journal_publication.publisherid
    JOIN faculity ON faculity.fid = fellow_guide_faculty_master.faculty_id
    WHERE journal_publication.publisherwhom = '6'
) xx
WHERE xx.department = '$deprtmentname'
ORDER BY xx.id DESC
");
	$journalarray = $journal;
        return response()->json(['journalreport' => $journalarray]);
    }
	}
}
public function loadBookReport(Request $request)
{ 
    $type = Auth::user()->type;
    if ($type == 'HOD') {
			$bookreport = [];

        
        $lastInsertedFlag = DB::table('restructuring_syllaby')->whereNotNull('step15')->orderBy('id', 'desc')->value('flag');

        if ($lastInsertedFlag === 0) {
            $step15Data = DB::table('restructuring_syllaby')->whereNotNull('step15')->orderBy('id', 'desc')->value('step15');

            $step15Data = json_decode($step15Data, true);
           $bookreports = [];

foreach ($step15Data['booktitle'] as $index => $booktitle) {
    $bookreport = [
        'title' => $booktitle,
		'papername' => $step15Data['papername'][$index], 
        'booktype' => $step15Data['booktype'][$index],
		'department' => $step15Data['bookdept'][$index],
		'impactfactor' => $step15Data['bookfactor'][$index],
		'issn' => $step15Data['bookissn'][$index],
		'bookvol' => isset($step15Data['bookvol'][$index]) ? $step15Data['bookvol'][$index] : '',
        'year' => isset($step15Data['year'][$index]) ? $step15Data['year'][$index] : '',
		'author' => isset($step15Data['bookauthor'][$index]) ? $step15Data['bookauthor'][$index] : '',
        ];

    $bookreports[] = [$bookreport];
}
return response()->json(['bookreport' => $bookreports]);
			}else
			{
        $facultyid = Auth::user()->profile_id;
        $depart = DB::select("SELECT department FROM `faculity` where fid='$facultyid'");
        $deprtmentname = $depart[0]->department;
        $departid = DB::select("SELECT `id` FROM `departments` WHERE `department`='$deprtmentname'");
        $deprtmentid = $departid[0]->id;
		 $book = array();
        $book[]=DB::select("SELECT *
FROM (
  SELECT book_publication.*, faculity.name, 'Faculty' AS category, faculity.department
    FROM book_publication
    JOIN faculity ON faculity.fid = book_publication.publisherid
    WHERE book_publication.publisherwhom = '1'
    
    UNION

   SELECT book_publication.*, research_fellow.name, 'ResearchFellowFaculty' AS category, faculity.department
    FROM book_publication
    JOIN research_fellow ON research_fellow.id = book_publication.publisherid
    JOIN fellow_guide_faculty_master ON fellow_guide_faculty_master.research_fellow_id = book_publication.publisherid
    JOIN faculity ON faculity.fid = fellow_guide_faculty_master.faculty_id
    WHERE book_publication.publisherwhom = '5'
    UNION

    SELECT book_publication.*, research_guide.supervisor_name AS name, 'ResearchGuideFaculty' AS category, faculity.department
    FROM book_publication
    JOIN research_guide ON research_guide.id = book_publication.publisherid
    JOIN fellow_guide_faculty_master ON fellow_guide_faculty_master.research_guide_id = book_publication.publisherid
    JOIN faculity ON faculity.fid = fellow_guide_faculty_master.faculty_id
    WHERE book_publication.publisherwhom = '6'
) xx
WHERE xx.department = '$deprtmentname'
ORDER BY xx.id DESC");
	
		$bookarray = $book;
        return response()->json(['bookreport' => $bookarray]);
    }
	}
}
}