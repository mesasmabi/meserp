
@if(Auth::User()->role == 2)
   @php $type = "layouts.faculty.default";
 
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
                    <h4 class="card-title">Class Engagement Report </h4>
                  
   
    

					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Paper </th>
							<th> Program </th>
							 <th> Semester </th>
							<th> From Date </th>
							<th> To Date </th>
						    <th> Total Hours Alloted </th>
							 <th> Total Hours Engaged </th>
							  <th>Extra Hours </th>
                            <th> Remedial Hours</th>
                              <th> Action</th>
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
                            <td>
                            
                              {{$val->p_name}}
                            </td><td>
                             
                                {{$val->course_name}}
                            </td>
							 <td> 
                              {{$val->semester}}
                            </td>
							   <td> 
                              {{$val->from_date}}
                            </td>
							 <td> 
                              {{$val->to_date}}
                            </td>
							 <td> 
                              {{$val->total_hrs_alloted}}
                            </td>
        						<td> 
                              {{$val->total_hrs_engaged}}
                            </td> 
<td> 
                              {{$val->extra_hours}}
                            </td>  
<td> 
                              {{$val->remedial_hours}}
                            </td>   	 							
 <td>
		 <div class="badge badge-outline-success">
    <a href="#" title="Delete" class="delete-record" data-id="{{ $val->id }}">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </a>
</div> 
</td> 
							  </div>					  
                            </td> 
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					@endif
				
                  </div>
                  
                </div>
						
					
						
						
						
						
					
					</form>
				</div>
				
					
                
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description');
	
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function() {
    $('.delete-record').click(function(event) {
        event.preventDefault();
        var recordId = $(this).data('id');

        if (confirm('Are you sure you want to delete the record?')) {
            $.ajax({
                url: "{{ url('/faculty/deleteClassEngage') }}" + "/" + recordId,
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        // Record deleted successfully, perform any necessary UI updates
                       alert('Class Engage Report Data has been Deleted successfully');
					   window.location.reload();
                    } else {
                        // Unable to delete the record, handle error if needed
                        console.log('Unable to delete the record.');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX error if needed
                    console.log('AJAX error:', error);
                }
            });
        }
    });
});
</script>
@endsection