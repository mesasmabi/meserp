@if(Auth::User()->role == 2)
   @php $type = "layouts.faculty.default";
     $eventlist = url('/faculty/eventList');
   $eventdatelist =  url('faculty/eventdateList'); 
    $deletevent =    url('faculty/deleteEvent');
   @endphp

   @elseif(Auth::User()->role == 6)
  
  @php $type = "layouts.hod.default";
   $eventlist = url('/hod/eventList');
   $deletevent =    url('hod/deleteEvent');
   $eventdatelist =  url('hod/eventdateList'); 
 @endphp
  @elseif(Auth::User()->role == 3)
  
  @php $type = "layouts.office.default";
   $eventlist = '';
   $deletevent =    '';
   $eventdatelist =  ''; 
 @endphp
 @endif
@extends($type)
@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Event List </h3>
           
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Event List</h4>
                  
   
    
            <br />
               <form method="POST" action="{{ url('faculty/eventdateList') }}"> 
               @csrf
            <div class="row input-daterange">
                <div class="col-md-4">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                </div>
                <div class="col-md-4">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                </div>
                <div class="col-md-4">
                    <button type="submit" name="filter" id="filter" class="btn btn-primary">Refine</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-success">Refresh</button>
                     
                    
                </div>
            </div>
            </form>
            
            <br />
					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Title</th>
                            <th> From Date </th>
                            <th> To Date</th>
                          
							 <th> Category </th>
                            <th> Department </th>
                            <!-- <th> Cell </th>-->
                              <th> Faculty </th>
                            <th> Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
                            <td>
                            
                              <span class="pl-2">{{$val->title}}</span>
                            </td>
                            <td>{{date('d-m-Y', strtotime($val->from_date))}}</td>
                            <td>{{date('d-m-Y', strtotime($val->to_date))}}</td>
                            
						    <td>{{$val->category}}  </td>
                           <td>{{$val->dept}}  </td>
                          <!-- <td>cell </td>-->
                           <td>{{$val->facultyname}}  </td>
						  
						     @if(Auth::User()->role == 2)  
 @php 
   $editEvent=url('faculty/editEvent/'.$val->id.'/'.$val->eventtype);
   $editImage= url('faculty/editImage',$val->id) ;   
   $editFile=  url('faculty/editFileImage',$val->id) ;
   $deleteEvent= url('faculty/deleteEvent',$val->id) ; 
   $pdf= url('faculty/pdf',$val->id) ;
   $download=url('faculty/downloadstudent');
 @endphp

 @elseif(Auth::User()->role == 6)
   @php 
   $editEvent=url('hod/editEvent/'.$val->id.'/'.$val->eventtype);
   $editImage= url('hod/editImage',$val->id) ;   
   $editFile=  url('hod/editFileImage',$val->id) ;
   $deleteEvent= url('hod/deleteEvent',$val->id) ; 
   $pdf= url('hod/pdf',$val->id) ;
   $download=url('hod/downloadhod');
 @endphp
 @elseif(Auth::User()->role == 3)
   @php 
   $editEvent='';
   $editImage= url('office/editImage',$val->id);  
   $editFile = url('office/editFileImage',$val->id);
   $deleteEvent= ''; 
   $pdf= url('office/pdf',$val->id) ;
   $download=url('office/downloadadmin');
 @endphp
 @endif
                            <td>
                             @if(Auth::User()->role != 6) <div class="badge badge-outline-success"><a href="{{$editEvent}}"  title="Edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
							@endif <div class="badge badge-outline-success"> <a href="{{ $editImage }}" title="EditImage" ><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
							  </div>
							  <div class="badge badge-outline-success"> <a href="{{ $editFile }}" title="EditFile" ><i class="fa fa-file-o" aria-hidden="true"></i></a>
							  </div>
							@if(Auth::User()->role != 6)  <div class="badge badge-outline-success"> <a href="{{ $deleteEvent }}" title="Delete" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							  </div>@endif
							   <div class="badge badge-outline-success"> <a href="{{ $pdf }}"  title="Pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
							  </div>
                            </td>
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					@endif
					<div><a class="btn btn-info" href="{{$download}}" id="export" onclick="exportStudent(event.target);"><i class="fa fa-download"></i> Download Excel</a></div>
                  </div>
                  
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function deleteEvent(id)
{
	//alert(id);
	event.preventDefault();
if (confirm("Are you sure you want to delete?") == true) {
        $.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ $deletevent}}",
            method:"POST",
			data:{id:id},
            dataType: 'text',
            success: function(data) {
                 alert("Event Details Deleted Successfully");
				location.reload();
            }
        });
    }
}
</script>
<script>
$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
window.location.href = "{{ $eventlist}}";
 });

});
 function exportStudent(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
@endsection