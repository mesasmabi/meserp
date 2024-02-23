@if(Auth::User()->role == 4)
   @php $type = "layouts.cell.default";
  
     $deleteNaacParentSubFile= url('cell/deleteNaacParentSubFile');
  
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
                    <h4 class="card-title"> {{$typereport}} </h4>
                  
   
    
           
            
            <br />
					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Category</th>
                           <th>Criteria</th>
                           <th>ParentFolder Title</th>
                           <th>SubFolder Title</th>
						    <th>Period</th>
							<th>FileName</th>
                            <th> Action</th>
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
                            <td>
                            
                              <span class="pl-2">{{$val->category}}</span>
                            </td>
                             <td>{{$val->criteria}}  </td>
                            <td>{{$val->parentfoldertitle}}</td>
							 <td>{{$val->subfoldertitle}}</td>
                            <td>{{$val->period}}</td>
                            @if(!empty($val->filename))	 
                            <td>
							 <iframe src="{{url('public/uploads/cell/'.$val->filename)}}" width="100%" height="200">
           
							</iframe>
                @endif   
                         
                            @if(Auth::User()->role == 4)  
 @php 
   
   
 
    $deleteNaacParentSubFile= url('cell/deleteNaacParentSubFile',$val->id) ; 
       
 @endphp

 @endif
                           </td> <td>
                             
							 
							  <div class="badge badge-outline-success"> <a href="{{$deleteNaacParentSubFile}}" title="DeleteImage" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
function deleteNaacParentSubFile(id)
{
	//alert(id);
	event.preventDefault();
if (confirm("Are you sure you want to delete?") == true) {
        $.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ $deleteNaacParentSubFile }}",
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