
@if(Auth::User()->role == 7)
   @php $type = "layouts.research.default";
   $deleteBook = url('researchguide/deleteBook');
 
   @endphp
   @elseif(Auth::User()->role == 8)
  
  @php $type = "layouts.researchfellow.default";
   $deleteBook = url('researchfellow/deleteBook');
 

 @endphp
  @elseif(Auth::User()->role == 2)
  
  @php $type = "layouts.faculty.default";
   $deleteBook = url('faculty/deleteBook');
 

 @endphp
   @elseif(Auth::User()->role == 3)
  
  @php $type = "layouts.office.default";
   $deleteBook = '';

 @endphp
 @endif
@extends($type)

@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
             
           
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Book List </h4>
                  
   
    

					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
							  @if(Auth::User()->role == 3) <th>
                              Role
                            </th>@endif
                            <th> Publisher Name</th>
                            
                             <th>Category</th>
                            <th> Book Type </th>
							<th> Author</th>
						    <th> Title</th>
						    <th> Year</th>
						    <th> Paper Name</th>
						   
                           <th> Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
							 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
						    @if(Auth::User()->role == 3) <td><div class="form-group">
                                    <select id="selectRole_{{$val->id}}" name="selectRole" class="form-control">
                                        <option value="">Choose Status</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Faculty</option>
                                        <option value="3">Super Admin</option>
										<option value="4">Cell</option>
                                        <option value="5">Office Staff</option>
                                        <option value="6">Hod</option>
										<option value="7">Research Guide</option>
                                        <option value="8">Research Fellow</option>
                                        <option value="9">Formal Faculty</option>
                                    </select>
                                </div>     <button class="btn btn-primary editButton" data-item-id="{{$val->id}}">update</button>
    </td>@endif
                            <td>
                            
                               <span class="pl-2">{{$val->name}}</span>
                            </td>
                           
                              <td>{{Auth::User()->type}}</td>
                            <td>{{$val->booktype}}</td>
                            <td>{{$val->author}}  </td>
						    <td>{{$val->title}}</td>
                            <td>{{$val->year}}  </td>
                            <td>{{$val->papername}}  </td>
						    
@if(Auth::User()->role == 7)
  <td>
 <div class="badge badge-outline-success"> <a href="{{ url('researchguide/deleteBook',$val->id) }}" title="Delete" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
 </div>
  <div class="badge badge-outline-success"><a href="{{url('researchguide/editBook',$val->id)}}"  title="Edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
   <div class="badge badge-outline-success"> <a href="{{ url('researchguide/editImagePublication',[$val->id,'B'])}}" title="EditImage" ><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
							  </div>
 </td>
 @elseif(Auth::User()->role == 2)
  <td>
 <div class="badge badge-outline-success"> <a href="{{ url('faculty/deleteBook',$val->id) }}" title="Delete" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
 </div>
  <div class="badge badge-outline-success"><a href="{{url('faculty/editBook',$val->id)}}"  title="Edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
   <div class="badge badge-outline-success"> <a href="{{ url('faculty/editImagePublication',[$val->id,'B'])}}" title="EditImage" ><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
							  </div>
 </td>
 @elseif(Auth::User()->role == 8)
  <td>
 <div class="badge badge-outline-success"> <a href="{{ url('researchfellow/deleteBook',$val->id) }}" title="Delete" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
 </div>
  <div class="badge badge-outline-success"><a href="{{url('researchfellow/editBook',$val->id)}}"  title="Edit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
   <div class="badge badge-outline-success"> <a href="{{ url('researchfellow/editImagePublication',[$val->id,'B'])}}" title="EditImage" ><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
							  </div>
 </td>
 @else 
                            <td><div class="badge badge-outline-success"> <a href="{{ url('office/editImagePublication',[$val->id,'B'])}}" title="EditImage" ><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
							  </div> </td>
                             @endif	
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					@endif
					<div>	@if(Auth::User()->role == 7) <a class="btn btn-info" href="{{url('researchguide/downloadBookfac')}}" id="export" onclick="exportStudent(event.target);"><i class="fa fa-download"></i> Download Excel </a>	
					@elseif(Auth::User()->role == 2) <a class="btn btn-info" href="{{url('faculty/downloadBookfac')}}" id="export" onclick="exportStudent(event.target);"><i class="fa fa-download"></i> Download Excel </a>	@elseif(Auth::User()->role == 8) <a class="btn btn-info" href="{{url('researchfellow/downloadBookfac')}}" id="export" onclick="exportStudent(event.target);"><i class="fa fa-download"></i> Download Excel </a> @else
					<a class="btn btn-info" href="{{url('office/downloadBookadmin')}}" id="export" onclick="exportStudent(event.target);"><i class="fa fa-download"></i> Download Excel </a> @endif 
				</div>
                  </div>
                  
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
function deleteBook(id)
{

	event.preventDefault();
if (confirm("Are you sure you want to delete?") == true) {
        $.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{$deleteBook}}",
            method:"POST",
			data:{id:id},
            dataType: 'text',
            success: function(data) {
                
            }
        });
    }
}



</script>

<script>
$(document).on('click', '.editButton', function() {
    var pid = $(this).data('item-id');
    var role = $('#selectRole_' + pid).val();
    var apiUrl = "/office/";  // Use the base URL of your application
    var fullUrl = apiUrl + 'updaterolebook/' + pid;

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: fullUrl,  // Use the full URL with the correct method (POST)
        method: "POST",  // Correct method
        data: {role: role,pid:pid},
        dataType: 'text',
        success: function(data) {
            if(data.id!=""){ alert('updated');}
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});

</script>

@endsection