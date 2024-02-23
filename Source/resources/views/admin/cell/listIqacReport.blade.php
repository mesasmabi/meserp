@if(Auth::User()->role == 4)
   @php $type = "layouts.cell.default";
  
     $deleteIQACReport= url('cell/deleteIQACReport');
  
   @endphp

  
 @endif


@extends($type)

@section('content')

         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">  </h3>
           
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List IQAC REPORT </h4>
                  
   
    
           
            
            <br />
					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Category</th>
                            <th> Feed Back Categories</th>
							<th>SSR cycle</th>
							<th>Audit Practices</th>
							<th>Period</th>
							<th>FileName</th>
							<th></th>
                            <th> Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
                            <td>
                            
                              <span class="pl-2">
    @if ($val->category == 'Strategic')
        Strategic Plan/Perspective Plan
    @elseif ($val->category == 'ActionPlan')
        Action Plan and Action Taken Report
    @else
        {{ $val->category }} <!-- Display the category as is for other cases -->
    @endif
</span>
                            </td> <td> @if (!empty($val->feedback_category))
    @if ($val->feedback_category == 'feedback1')
        Feedback on Academic performance and Ambiance of the Institution
    @else
        Student Satisfaction Survey <!-- Display the category as is for other cases -->
    @endif
@endif</td> <td>@if (!empty($val->cycle)) {{$val->cycle }} @endif</td>
<td>@if (!empty($val->audit_practices)) {{$val->audit_practices }} @endif</td>
<td>@if (!empty($val->period)) {{$val->period }} @endif</td>
                           
                            @if(!empty($val->pdf_path))	 
                            <td>
							{{$val->pdf_path}} <iframe src="{{url('public/uploads/cell/'.$val->pdf_path)}}" width="50%" height="50">
           
    </iframe>
                @endif   <td></td>
                         
                            @if(Auth::User()->role == 4)  
 @php 
   
   
 
    $deleteIQACReport= url('cell/deleteIQACReport',$val->id) ; 
       
 @endphp

 @endif
                            <td>
                             
							 
							  <div class="badge badge-outline-success"> <a href="{{$deleteIQACReport}}" title="DeleteImage" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							  </div>
                            </td>
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					@endif
					<div></div>
                  </div>
                  
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function deleteIQACReport(id)
{
	//alert(id);
	event.preventDefault();
if (confirm("Are you sure you want to delete?") == true) {
        $.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ $deleteIQACReport }}",
            method:"POST",
			data:{id:id},
            dataType: 'text',
            success: function(data) {
                 alert("Report Details Deleted Successfully");
				location.reload();
            }
        });
    }
}
</script>

@endsection