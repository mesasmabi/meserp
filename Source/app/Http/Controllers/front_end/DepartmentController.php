<?php

namespace App\Http\Controllers\front_end ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class departmentController extends Controller
{

 public function menu_departments(){

    $aided= DB::table('departments')->where('hod','=','Aided')->orwhere('hod','=','Aided (Language)')->orwhere('hod','=','Aided (Subsidiary)')->select('department','id')->get();
    $self= DB::table('departments')->where('hod','=','Self-Financing')->select('department','id')->get();
    $research= DB::table('departments')->where('hod','=','Research Centres')->select('department','id')->get();
	

                return view('front_end/menu_departmentsView',compact('aided','self','research'));
    }


    public function departments_details($id,$slug){
        
        $department= DB::table('departments')->where('id','=',$id)->get();
		
        $course= DB::table('course')->where('departments','=',$id)->get();
        //$faculity= DB::table('faculity')->where('department','=',$slug)->get();
		 $faculity= DB::select("SELECT *
FROM faculity
WHERE department = '$slug'
AND (
    (fid IN (SELECT profile_id FROM users WHERE role = 6))
    OR
    (fid IN (SELECT profile_id FROM users WHERE role = 2) AND fid NOT IN (SELECT profile_id FROM users WHERE role = 6))
    OR
    (fid NOT IN (SELECT profile_id FROM users WHERE role = 2) AND fid NOT IN (SELECT profile_id FROM users WHERE role = 6) AND fid NOT IN (SELECT profile_id FROM users WHERE role = 9))
)
ORDER BY CASE WHEN fid IN (SELECT profile_id FROM users WHERE role = 6) THEN 1 WHEN fid IN (SELECT profile_id FROM users WHERE role = 2) THEN 2 ELSE 3 END, fid ASC;
");
        $events= DB::select("SELECT id,title,from_date,picture,instagram_url,linkedin_url,facebook_url  FROM fdp  Join picture on fdp.id=picture.fid WHERE $id in (fdp.dept) and eventtype='Recent' and picture.type='faculty' Order By fdp.from_date desc Limit 1");
        $upcoming= DB::select("SELECT id,title,from_date,picture FROM fdp Join picture on fdp.id=picture.fid WHERE $id in (fdp.dept) and eventtype='Upcoming' and picture.type='faculty' Order By fdp.from_date desc Limit 1");

         $deptid=$id;
		 $pictype='event';
                    return view('front_end/department_details',compact('department','course','faculity','events','upcoming','deptid','pictype'));
        }
		
		 public function event_details($id){
			  $depart = DB::select("SELECT departments.department from departments  where id='$id'"); 
			   $department=$depart[0]->department;
			    $facultyIds = DB::table('faculity')
    ->select('fid')
    ->where('department', $department)
    ->pluck('fid')
    ->toArray();

// Convert faculty IDs to a comma-separated string
$facultyIdsStr = implode(',', $facultyIds);

       /* $eventslist= DB::select("SELECT id,title,from_date,picture,to_date,description,venue FROM fdp  left Join picture on fdp.id=picture.fid WHERE '$id' in (fdp.dept) and eventtype='Recent' and picture.type='faculty' group by picture.fid Order By fdp.from_date desc");*/
	   $eventslist= DB::select("SELECT
    fdp.id,
    fdp.title,
    fdp.from_date,
    fdp.to_date,
    fdp.description,
    fdp.venue
FROM
    fdp

WHERE
    (fdp.dept = '$id' OR fdp.fid IN ($facultyIdsStr)) and fdp.type = 'Recent'
   

ORDER BY
    fdp.from_date DESC;
");//OR fdp.fid IN ($facultyIdsStr))
   // AND fdp.eventtype = 'Recent'
   /*SELECT
    fdp.id,
    fdp.title,
    fdp.from_date,
    picture.picture,
    fdp.to_date,
    fdp.description,
    fdp.venue
FROM
    fdp

WHERE
    (fdp.dept = '$id' )
    AND picture.type = 'faculty'
GROUP BY
    picture.fid
ORDER BY
    fdp.from_date DESC*/
   
        $type='Recent Events List';
		$pictype='event';
	   return view('front_end/department_events_list',compact('eventslist','type','pictype'));
        } 
		 public function event_details_upcoming($id){
			   $depart = DB::select("SELECT departments.department from departments  where id='$id'"); 
			   $department=$depart[0]->department;
			    $facultyIds = DB::table('faculity')
    ->select('fid')
    ->where('department', $department)
    ->pluck('fid')
    ->toArray();

// Convert faculty IDs to a comma-separated string
$facultyIdsStr = implode(',', $facultyIds);

        $eventslist= DB::select("SELECT
    fdp.id,
    fdp.title,
    fdp.from_date,
    picture.picture,
    fdp.to_date,
    fdp.description,
    fdp.venue
FROM
    fdp
LEFT JOIN
    picture ON fdp.id = picture.fid
WHERE
    (fdp.dept = '$id' OR fdp.fid IN ($facultyIdsStr))
    AND fdp.eventtype = 'Upcoming'
    AND picture.type = 'faculty'
GROUP BY
    picture.fid
ORDER BY
    fdp.from_date DESC;

");
        $type='Upcoming Events List';
		$pictype='event';
	   return view('front_end/department_events_list',compact('eventslist','type','pictype'));
        } 
		 public function event_details_cell($id){
			
       // $eventslist= DB::select("SELECT id,title,from_date,picture,to_date,description,venue FROM cell_events 
		//left Join picture on cell_events.id=picture.fid WHERE cell_events.fid='$id' and
	//	cell_events.eventtype='Recent' and picture.type='cellevent' group by picture.fid Order By cell_events.from_date desc");
		
		 $eventslist= DB::select("SELECT  id,title,from_date,picture,to_date,description,venue FROM cell_events Join picture on cell_events.fid=picture.fid 
WHERE cell_events.fid = '$id' and eventtype='Recent' 
and picture.type='cellevent' group by id Order By from_date desc ");
        $type='Recent Events List';
		$pictype='cell';
	   return view('front_end/department_events_list',compact('eventslist','type','pictype'));
        } 
		
		 public function event_details_upcoming_cell($id){
        $eventslist= DB::select("SELECT id,title,from_date,picture,to_date,description,venue 
		FROM cell_events  left Join picture on cell_events.fid=picture.fid WHERE cell_events.fid='$id' and cell_events.eventtype='Upcoming' and picture.type='cellevent' group by picture.fid Order By cell_events.from_date desc");
        $type='Upcoming Events List';
		$pictype='cell';
	   return view('front_end/cell_events_list_upcoming',compact('eventslist','type','pictype'));
        } 
		
public function infrastructure(){
	 $infra= DB::select("select * from cell where type='Infrastructure' or type='ICT' or type='ITFacility'");
	 $type='Infrastructure / ICT & IT Facility';
	  return view('front_end/infrastructure',compact('infra','type'));
	
}

public function committies(){
	 $infra= DB::select("select * from cell where type='Club' or type='WebCell' or type='Commities'");
	  $type='Clubs / Cells & Committees';
	  return view('front_end/infrastructure',compact('infra','type'));
	
}
public function greeninitiative(){
	 $green= DB::select("(select id,title,from_date,main_criteria from fdp WHERE main_criteria like '%,15,%' or main_criteria='15' or main_criteria like '15,%' or main_criteria like '%,15')
union all (select id,title,from_date,main_criteria from cell_events  WHERE main_criteria like '%,15,%' or main_criteria='15' or main_criteria like '15,%' or main_criteria like '%,15'  ) order by from_date desc");
	  $type='Green Initiative Activities';
	   $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function gender(){
	 $green= DB::select("(select id,title,from_date,main_criteria from fdp WHERE main_criteria like '%,1,%' or main_criteria='1' or main_criteria like '1,%' or main_criteria like '%,1')
union all (select id,title,from_date,main_criteria from cell_events  WHERE main_criteria like '%,1,%' or main_criteria='1' or main_criteria like '1,%' or main_criteria like '%,1'  ) order by from_date desc");
	  $type='Gender';
	    $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function ethics(){
	 $green= DB::select("(select id,title,from_date,main_criteria from fdp WHERE main_criteria like '%,6,%' or main_criteria='6' or main_criteria like '6,%' or main_criteria like '%,6')
union all (select id,title,from_date,main_criteria from cell_events  WHERE main_criteria like '%,6,%' or main_criteria='6' or main_criteria like '6,%' or main_criteria like '%,6' ) order by from_date desc");
	  $type='Ethics & HumanValues';
	  $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function environment(){
	 $green= DB::select("(select id,title,from_date,main_criteria from fdp WHERE main_criteria like '%,7,%' or main_criteria='7' or main_criteria like '7,%' or main_criteria like '%,7')
union all (select id,title,from_date,main_criteria from cell_events  WHERE main_criteria like '%,7,%' or main_criteria='7' or main_criteria like '7,%' or main_criteria like '%,7' ) order by from_date desc");
	  $type='Environment & Sustainability';
	  $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function skill(){
	 $green= DB::select("(select id,title,from_date,main_criteria from fdp WHERE main_criteria like '%,4,%' or main_criteria='4' or main_criteria like '4,%' or main_criteria like '%,4')
union all (select id,title,from_date,main_criteria from cell_events  WHERE main_criteria like '%,4,%' or main_criteria='4' or main_criteria like '4,%' or main_criteria like '%,4' ) order by from_date desc");
	  $type='Skill Development';
	   $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function seminar(){
	
	 $green= DB::select("(select id,title,from_date from fdp where category='Seminar' or category ='Workshop' or category ='Conference' or category ='Webinar')
union (select id,title, from_date from cell_events  where category='Seminar' or category ='Workshop' or category ='Conference' or category ='Webinar') order by from_date desc");
	  $type='Workshops & Seminars';
	  $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function extensionactivity(){
	
	 $green= DB::select("(select id,title,from_date from fdp where category='Extension & OutReach')
union (select id,title,from_date from cell_events  where category='Extension & OutReach')order by from_date desc");
	  $type='Extension & OutReach';
	    $pictype='event';
	  return view('front_end/greeninitiative',compact('green','type','pictype'));
	
}
public function bestpractice(){
 $experiantial= DB::select("(select id,title from fdp where practice='Experiancial')
union (select id,title from cell_events  where practice ='Experiancial')");
 $marginalised= DB::select("((select id,title from fdp where practice='Marginalised')
union (select id,title from cell_events  where practice ='Marginalised'))");
	  $type='Best Practice';
	  $pictype='event';
	  return view('front_end/bestpractice',compact('experiantial','type','marginalised','pictype'));
	
}

}