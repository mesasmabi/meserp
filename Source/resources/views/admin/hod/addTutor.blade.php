
@if(Auth::User()->role == 6)
   @php 
     $type = "layouts.hod.default";
    $saveTutor= url('/hod/saveTutor');

   @endphp
 @endif
@extends($type)
@section('content')
<style>
label {
    font-size: 0.875rem;
    margin-top: 0.5rem;
    font-weight: 400;
    color:#fff;
}
</style>
         <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
             
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Assign Tutor</h4>
                    <div id="mainform">
                   <form id="fupForm" enctype="multipart/form-data">
                        @csrf  
                    
					
					
					
						
							<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Course</label>	
								  <select class="form-control" name="course" id="course" >
            										<option value="">Select Course</option>
            									    @foreach($courses as $row)
            								            <option value="{{ $row-> id}}">{{ $row->course_name }}</option>
            						            	@endforeach
            									</select>
									</div>
								
									
									
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Select Tutor</label>	
								  <select class="form-control" name="facname" id="facname" >
            										<option value="">Select Faculty</option>
            									    @foreach($faculty as $row)
            								            <option value="{{ $row->name }}">{{ $row->name }}</option>
            						            	@endforeach
            									</select>
									</div>
								
								
									
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Batch</label>	
								  <select class="form-control" name="batch" id="batch" >
            										<option value="">Select Batch</option>
            										@foreach($batch as $row)
            								            <option value="{{ $row->batch }}">{{ $row->batch }}</option>
            						            	@endforeach
            									</select>
									</div>
								
								
									
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Semester</label>	
								  <select class="form-control" name="semester" id="semester" >
            										    <option value="" >Select Semester</option>    
                                <option value="Semester 1" >Semester 1</option>
                                <option value="Semester 2" >Semester 2</option>
                                <option value="Semester 3" >Semester 3</option>
                                <option value="Semester 4" >Semester 4</option>
                                <option value="Semester 5" >Semester 5</option>
                                <option value="Semester 6" >Semester 6</option>
                                <option value="Semester 7" >Semester 7</option>
                                <option value="Semester 8" >Semester 8</option>
                                <option value="Semester 9" >Semester 9</option>
                                <option value="Semester 10" >Semester 10</option>
            									</select>
									</div>
								
								
									
								</div>
							</div>
									<button type="submit" class="btn btn-success btn-block enter-btn" style="float:right;">Submit</button> 
						</div>
					
						
					
                        
                         
					
						
						 
			
					</form>
					   <table class="table table-bordered" id="myTable" >
                     <thead>
                          <tr>
                          
                             <th> Tutor</th>
							 <th> Course Name</th>
							 <th> Batch</th>
							 <th> Semester</th>
								 <th> Action</th>
                            
                          </tr>
                        </thead>
                       <tbody>
                          @if(count($list)>0)
               
                         @foreach($list as $val) 
                       <tr>
    <td>@if(!empty($val->tutor)) {{ $val->tutor }} @endif</td>
    <td>@if(!empty($val->course_name)) {{ $val->course_name }} @endif</td>
    <td>@if(!empty($val->batch)) {{ $val->batch }} @endif</td>
    <td>@if(!empty($val->semester)) {{ $val->semester }} @endif</td>
    <td>
        <button class="btn btn-danger delete-record" data-record-id="{{ $val->id }}" onclick="return confirm('Are you sure you want to delete the record?')">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </td>
</tr>

                           @endforeach
                    
                        @endif
                         
                      
                        </tbody> </table>
				</div>
				
					
                
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 

<script type="text/javascript">
$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
var course =  $('#course').val();
var facname =  $('#facname').val();                   
var batch= $('#batch').val();
var semester= $('#semester').val();	
if(course.trim()==''){
                    swal("Warning","Enter course","warning");
                    return false;
                }
		 if(facname ==''){
                    swal("Warning","Enter Faculty","warning");
                    return false;
                }
		  if(batch ==''){
                    swal("Warning","Enter Batch","warning");
                    return false;
                }
                
		  if(semester ==''){
                    swal("Warning","Enter Semester","warning");
                    return false;
                }
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{$saveTutor}}",
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
           success: (response) => {
    if (response && response.success) { // Assuming the response contains a 'success' property
        alert('Tutor has been Assigned Successfully');
        window.location.reload();
    }
},
        });
    });
	
	   $('.delete-record').on('click', function() {
            var recordId = $(this).data('record-id');
            
            if (confirm('Are you sure you want to delete the record?')) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: '{{ url("/hod/deleteTutor/") }}' + '/' + recordId, // Updated URL
                    type: 'GET',
                    success: function(response) {
                        // Handle success, for example, display a success message
                     alert('Record deleted successfully');
                        
                        // Reload the page
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle error, show an error message, etc.
                        console.error(xhr.responseText);
                    }
                });
            }
        });
});
 

</script>

@endsection