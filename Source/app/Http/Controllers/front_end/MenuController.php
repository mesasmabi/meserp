<?php

namespace App\Http\Controllers\front_end ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\Grievanceconfig;

class MenuController extends Controller
{
 public function menu_vision(){
                return view('front_end/menu_visionView');
    }
	
	 public function menu_RTI(){
                return view('front_end/menu_RTI');
    }
public function menu_about(){
                return view('front_end/menu_aboutView');
    }
public function menu_college_profile(){
                return view('front_end/menu_collegeprofileView');
    }

public function menu_management(){
                return view('front_end/menu_managementView');
    }


public function strategicplan(){
	$list =DB::select("select pdf_path from iqac_reports where category='Strategic'"); 

                return view('front_end/menu_iqarReport',compact('list'));
              //  return view('front_end/strategicplan');
    }
public function harithaProtocol(){
	$list =DB::select("select pdf_path from iqac_reports where category='Haritha'"); 

                return view('front_end/menu_iqarReport',compact('list'));
              //  return view('front_end/strategicplan');
    }
public function formsdownloads(){
	$list =DB::select("select pdf_path from iqac_reports where category='Forms'"); 

                return view('front_end/menu_iqarReport',compact('list'));
              //  return view('front_end/strategicplan');
    }
public function feedback(){
                return view('front_end/feedback');
    }

public function actionplan(){
	$list =DB::select("select pdf_path from iqac_reports where category='ActionPlan'"); 

                return view('front_end/menu_iqarReport',compact('list'));
               // return view('front_end/actionplan');
    }
public function activityPdf($id)
{
	$list =DB::select("select pdf_path from iqac_reports where id='$id'"); 

                return view('front_end/menu_iqarReport',compact('list'));
}
	



public function menu_principal(){
                return view('front_end/menu_principalView');
    }

public function menu_college_council(){
                return view('front_end/menu_collegecouncilView');
    }

public function menu_administrative_staff(){
                return view('front_end/menu_administrativestaffView');
    }

public function menu_staff_association(){
                return view('front_end/menu_staffassociationView');
    }

public function menu_quality_policy(){
                return view('front_end/menu_qualitypolicyView');
    }
public function iqarqualitypolicy(){
	$category = DB::select("select id,quality_ranking from iqac_reports where category='Quality' order by id desc"); 
               
                return view('front_end/menu_iqarqualitypolicy',compact('category'));
    }
public function menu_code_of_conduct(){
                return view('front_end/menu_codeofconductView');
    }
public function menu_academic_calendar(){
                return view('front_end/menu_academic_calendarView');
    }
public function research_centers(){
                return view('front_end/menu_research_centersView');
    }
public function research_promotion_council(){
	 $research_council= DB::select("select * from  cell where id ='605'");
	 $research_centres =  DB::select("select * from research_centres where id !='8'");
                return view('front_end/menu_researchpromotioncouncilView',compact('research_council','research_centres'));
    }
	public function scholarship(){
	  $data = DB::select("select scholarship_name,amount,name as studentname,batch,program from scholarship join students on students.id=scholarship.student_id ");
	  $heading = "LIST OF SCHOLARSHIP";
	  return view('front_end/menu_scholarshipView',compact('data','heading'));
    }
	public function research_guide(){
	
	  $researchguide= DB::select("select * from research_guide ");

    return view('front_end/menu_research_guidesView',compact('researchguide'));
    }
public function research_guides($id){
	
	  $researchguide= DB::select("select * from research_guide where research_centre_id ='$id' ");

    return view('front_end/menu_research_guidesView',compact('researchguide'));
    }
public function research_fellow($id){
	
	  $researchfellow= DB::select("(select * from research_fellow join fellow_guide_faculty_master on research_fellow.id=fellow_guide_faculty_master.research_fellow_id
 where guide_name ='$id' and research_fellow.is_belongs_to_faculty ='NO')  UNION
  (select * from research_fellow join fellow_guide_faculty_master on research_fellow.id=fellow_guide_faculty_master.research_fellow_id
 where guide_name ='$id' and research_fellow.is_belongs_to_faculty ='YES')");

    return view('front_end/menu_research_fellowView',compact('researchfellow'));
    }
	public function research_student(){
	
	  $researchfellow= DB::select("select * from research_fellow ");

    return view('front_end/menu_research_fellowView',compact('researchfellow'));
    }
	public function publications(){
	
	return view('front_end/menu_publications');
    }
	
public function menu_achievements(){
                return view('front_end/menu_research_guidesView');
    }

public function ipr_cell(){
                return view('front_end/menu_ipr_cellView');
    }
public function menu_iedc(){
                return view('front_end/menu_iedcView');
    }
public function incubation_center(){
                return view('front_end/incubation_centerView');
    }
public function research_papers(){
                return view('front_end/research_papersView');
    }


public function ariia(){
                return view('front_end/menu_ariiaView');
    }

public function objectives(){
                return view('front_end/menu_objectivesView');
    }

public function composition(){
                return view('front_end/menu_compositionView');
    }
	
	


public function aqar(){
	$titlehead ='Link For AQAR';
	$head= 'AQAR';
	$period = DB::select("SELECT DISTINCT period FROM naac_report_data WHERE category = 'AQAR' GROUP BY period;"); 
                return view('front_end/menu_aqarView',compact('period','titlehead','head'));
    }
	public function aqarReport($period,$category){
	$list =DB::select("select pdf_path from iqac_reports where category='$category' AND PERIOD='$period'
"); 

                return view('front_end/menu_iqarReport',compact('list'));
    }
		public function feedbackReport($period,$category,$fdcat){
	$list =DB::select("select pdf_path from iqac_reports where category='$category' AND PERIOD='$period' and feedback_category='$fdcat'"); 

                return view('front_end/menu_iqarReport',compact('list'));
    }
	public function ssReport($cycle,$category){
	$list =DB::select("select pdf_path from iqac_reports where category='$category' AND cycle='$cycle'
"); 

                return view('front_end/menu_iqarReport',compact('list'));
    }
public function aqarParent($period,$category){
	$titlehead = ($category === 'AQAR') ? 'ANNUAL QUALITY ASSURANCE REPORT (AQAR)' : 'SSR DOCUMENTS';
    $head = ($category === 'AQAR') ? 'AQAR' : 'SSR';
	
	$cells = DB::select("SELECT * FROM cell WHERE id BETWEEN 607 AND 613 ORDER BY id ASC;"); 
                return view('front_end/menu_aqarParentView',compact('cells','period','titlehead','head'));
    }
public function aqarParentfolder($id, $period,$category) {
	$parentid=$id;

	$titlehead = ($category === 'AQAR') ? 'ANNUAL QUALITY ASSURANCE REPORT (AQAR)' : 'SSR DOCUMENTS';
    $head = ($category === 'AQAR') ? 'AQAR' : 'SSR';
    $parentfolder= DB::select("SELECT * FROM naac_parent_folder
WHERE cell_id = '$id' AND category = '$category'
ORDER BY parentfoldertitle ASC;
");  
	return view('front_end/menu_aqarParentFolderView',compact('parentfolder','titlehead','head','period','parentid'));
}	
public function aqarSubfolder($id,$period,$parentid,$category) {

    $titlehead = ($category === 'AQAR') ? 'ANNUAL QUALITY ASSURANCE REPORT (AQAR)' : 'SSR DOCUMENTS';
    $head = ($category === 'AQAR') ? 'AQAR' : 'SSR';

    $subfolder = DB::select("SELECT * FROM naac_subfolder WHERE parentid = '$id' ORDER BY subfoldertitle ASC");
if($category === 'AQAR')
{
    if (empty($subfolder)) {
        $aqarfiles = DB::select("SELECT * FROM naac_report_data WHERE parentfolderid = '$id' ORDER BY id DESC");
        return view('front_end/menu_aqarfiles', compact('aqarfiles', 'titlehead', 'head','period'));
    } else {
        return view('front_end/menu_aqarSubView', compact('subfolder', 'titlehead', 'head','period','parentid'));
    }
} else{
	$aqarfiles = DB::select("SELECT * FROM naac_report_data WHERE parentfolderid = '$id' ORDER BY id DESC");
        return view('front_end/menu_aqarfiles', compact('aqarfiles', 'titlehead', 'head','period'));
}
}

	public function aqarfiles($id,$period,$parentid,$category){
		
		$criteria_id=$parentid;
	$titlehead = ($category === 'AQAR') ? 'ANNUAL QUALITY ASSURANCE REPORT (AQAR)' : 'SSR DOCUMENTS';
    $head = ($category === 'AQAR') ? 'AQAR' : 'SSR';
	
	$aqarfiles = DB::select("select * from naac_report_data where  subfolderid ='$id' and period='$period' and criteria_id='$criteria_id' order by id desc"); 

                return view('front_end/menu_aqarfiles',compact('aqarfiles','titlehead','head'));
    }
public function minutes_and_atr(){
                return view('front_end/menu_minutes and atrView');
    }
public function activities(){
	$category = DB::select("select id,audit_practices from iqac_reports where category='IQAC' order by id desc"); 
                return view('front_end/menu_activitiesView',compact('category'));
    }


public function ssr_reports(){
	$titlehead ='LINK FOR SSR';
	$head= 'SSR';
		$period = DB::select("SELECT DISTINCT period FROM naac_report_data WHERE category = 'SSR' GROUP BY period;"); 
           return view('front_end/menu_aqarView',compact('period','titlehead','head'));
              //  return view('front_end/menu_ssr_reportsView');
    }
public function nirf(){
                return view('front_end/menu_nirfView');
    }

public function aishe(){
                return view('front_end/menu_aisheView');
    }

public function gallery(){
	$gallery =DB::select("(select pid,picture from picture join cell_events on cell_events.id=picture.fid order by picture.pid desc limit 6) UNION
(select pid,picture from picture join fdp on fdp.id=picture.fid order by picture.pid desc limit 6)"); 
      return view('front_end/gallery',compact('gallery'));
}





public function menu_language_lab(){
        return view('front_end/view_language_lab');
}
public function menu_grievance_redressal_cell(){
        return view('front_end/view_grievance_redressal_cell');
}
public function menu_hostel(){
        return view('front_end/view_hostel');
}
public function menu_health_club(){
        return view('front_end/view_health_club');
}
public function menu_library(){
        return view('front_end/view_library');
}
public function menu_media_lab(){
        return view('front_end/view_media_lab');
}
public function menu_sports(){
        return view('front_end/view_sports');
}
public function menu_pta(){
        return view('front_end/view_pta');
}
public function menu_tutorial_system(){
        return view('front_end/view_tutorial_system');
}
public function menu_syllabus(){
        return view('front_end/view_syllabus');
}
public function menu_internship(){
        return view('front_end/view_internship');
}
public function menu_counselling_center(){
        return view('front_end/view_counselling_center');
}
public function menu_day_care(){
        return view('front_end/view_day_care');
}
public function menu_college_reunion(){
        return view('front_end/view_college_reunion');
}
public function menu_college_bus(){
        return view('front_end/view_college_bus');
}
public function menu_dubbing_studio(){
        return view('front_end/view_dubbing_studio');
}
public function menu_canteen(){
        return view('front_end/view_canteen');
}
public function menu_centre(){
        return view('front_end/view_centre');
}
public function menu_coperative_society(){
        return view('front_end/view_coperative_society');
}
public function menu_cells(){
        return view('front_end/view_cells');
}





public function criterion1(){
        return view('front_end/view_criterion1');
}
public function criterion1_1(){
        return view('front_end/view_criterion1_1');
}
public function criterion1_2(){
        return view('front_end/view_criterion1_2');
}
public function criterion1_3(){
        return view('front_end/view_criterion1_3');
}
public function criterion1_4(){
        return view('front_end/view_criterion1_4');
}
public function criterion2(){
        return view('front_end/view_criterion2');
}
public function criterion2_1(){
        return view('front_end/view_criterion2_1');
}
public function criterion2_2(){
        return view('front_end/view_criterion2_2');
}
public function criterion2_3(){
        return view('front_end/view_criterion2_3');
}
public function criterion2_4(){
        return view('front_end/view_criterion2_4');
}
public function criterion2_5(){
        return view('front_end/view_criterion2_5');
}
public function criterion2_6(){
        return view('front_end/view_criterion2_6');
}




public function criterion2_7(){
        return view('front_end/view_criterion2_7');
}
public function criterion3(){
        return view('front_end/view_criterion3');
}
public function criterion4(){
        return view('front_end/view_criterion4');
}
public function criterion4_1(){
        return view('front_end/view_criterion4_1');
}
public function criterion4_2(){
        return view('front_end/view_criterion4_2');
}
public function criterion4_3(){
        return view('front_end/view_criterion4_3');
}
public function criterion4_4(){
        return view('front_end/view_criterion4_4');
}
public function criterion5(){
        return view('front_end/view_criterion5');
}

public function criterion5_1(){
        return view('front_end/view_criterion5_1');
}
public function criterion5_2(){
        return view('front_end/view_criterion5_2');
}
public function criterion5_3(){
        return view('front_end/view_criterion5_3');
}
public function criterion5_4(){
        return view('front_end/view_criterion5_4');
}
public function criterion6(){
        return view('front_end/view_criterion6');
}
public function criterion6_1(){
        return view('front_end/view_criterion6_1');
}
public function criterion6_4(){
        return view('front_end/view_criterion6_4');
}
public function criterion7(){
        return view('front_end/view_criterion7');
}
public function criterion7_1(){
        return view('front_end/view_criterion7_1');
}
public function criterion7_2(){
        return view('front_end/view_criterion7_2');
}
public function criterion7_3(){
        return view('front_end/view_criterion7_3');
}

public function alumni(){
                return view('front_end/alumni');
    }

public function declaration(){
                return view('front_end/declaration');
    }

public function faculty(){
	$faculty = DB::select("select *  from users join faculity on users.profile_id=faculity.fid where role='2' group by profile_id ORDER BY faculity.name ASC;"); 
	$formerfaculty = DB::select("select *  from users join faculity on users.profile_id=faculity.fid where role='9' group by profile_id ORDER BY faculity.name ASC;"); 
       return view('front_end/faculty',compact('faculty','formerfaculty'));
    }

public function examinationhall(){
	return view('front_end/examinationhall');
}
public function announcement(){
	return view('front_end/announcement');
}
public function studentsupport(){
	return view('front_end/studentsupport');
}
public function Facilitiesview(){
	return view('front_end/Facilitiesview');
}
public function Organogram(){
	return view('front_end/Organogram');
}
public function grievance(){
	return view('front_end/grievance');
}
public function sendgrievance(Request $req)
{
	

		// Assuming you're sending all form data
		$details = $req->all();
		Mail::to('grievancecellasmabi@gmail.com')->send(new Grievanceconfig($details));
		$response['status'] = "success";
		$response['redirect'] = route('menu.grievance');
		return response()->json($response)->setStatusCode(200);

}

}