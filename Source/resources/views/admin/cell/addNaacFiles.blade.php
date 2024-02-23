@if(Auth::User()->role == 4)
   @php $type = "layouts.cell.default";
   $updateFileUpload = url('/cell/NaacFileUpload');
   $deleteNaacFile= url('cell/deleteNaacFile');
   @endphp

 @endif
@extends($type)

@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> File List </h3>
           
            </div>
    
	
		
				
			
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     
                    <div id="contact" class="container">
                        <label class="col-form-label">File Upload</label>
                      
                          <form  method="POST" id="file-upload-faculty" enctype="multipart/form-data">
                    @csrf  
                         <input type="file" class="form-control"  name="file" 
                        id="inputFile" placeholder="File">
						 <span class="text-danger" id="file-input-error"></span>
						 <input type="hidden"  name="editidf" id="editidf" value="{{$id}}"/>
						 
						  <small> (only Pdf,Doc files accepted)</small>
					   <button type="submit" style="float:right;" class="btn btn-success mt-3">Finish</button>
					</form>
                    </div> 
                    <br>
                    
					@if(!empty($list))	 
                    <div class="table-responsive">
                      <table class="table" id="myTable" >
                        <thead>
                          <tr>
                           
                            <th> File  </th>
                           <th> Action  </th>
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                          	@if(!empty($val->filename))	 
                            <td>
                                <iframe src="{{url('public/uploads/cell/'.$val->filename)}}" width="50%" height="600">
           
    </iframe>
                @endif            
                            </td>
     @if(Auth::User()->role == 4)  
 @php 
     
   $deleteNaacFile= url('cell/deleteNaacFile',$val->id) ; 
   
 @endphp

 @endif                      
                          
                            <td>
							
                               <div class="badge badge-outline-success"> <a href="{{$deleteNaacFile}}" title="DeleteImage" onclick="return confirm('Are you sure you want to delete the record?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							  </div>
							
                            </td>
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					
                  </div>
                </div>
            
	@endif

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
 $('#file-upload-faculty').submit(function(e) {
        e.preventDefault();
		
     
        let formData = new FormData(this);
          $('#file-input-error').text('');
        $.ajax({
            
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{$updateFileUpload }}",
			type:'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    alert('Files has been uploaded successfully');
					window.location.reload();;
                }
            },
            error: function(response){
                $('#file-input-error').text(response.responseJSON.message);
            }
       });
    });
	
function deleteNaacFile(id)
{
	//alert(id);
	event.preventDefault();
if (confirm("Are you sure you want to delete?") == true) {
        $.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ $deleteNaacFile}}",
            method:"POST",
			data:{id:id},
            dataType: 'text',
            success: function(data) {
                 alert("Image  Deleted Successfully");
				location.reload();
            }
        });
    }
}
</script>
@endsection