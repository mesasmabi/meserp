@if(Auth::User()->role == 4)
   @php $type = "layouts.cell.default";
     $storeevent = url('/cell/storeevent');
    $storeimage =  url('/cell/store-multi-file-ajax_seller');
    $updateFileUpload = url('/cell/updateFileUpload');
     $eventlist= url('/cell/eventList');
  
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
                    <h4 class="card-title">ADD AQAR/SSR REPORT</h4>
                    <div id="mainform">
                      <form id="fupForm" enctype="multipart/form-data">
                        @csrf  
                     
				
						
						<div class="form-group row">
							
							<div class="col-md-6">
								  <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Name" value="{{$result->description}}" disabled>
							</div>
							<div class="col-md-6">
								<div class="row">
								<div class="col-md-6 form-group">
									  <label>Sequence</label>
									  <input type="text" class="form-control" id="sequence" name="sequence"  value="{{$result->unit_number}}" disabled>
									</div>
									<div class="col-md-6">
								  <label for="exampleInputName1">Category</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Name" value="{{$result->category}}" disabled>
						    <input type="hidden" class="form-control" id="naacparent" name="naacparent"  value="{{$result->id}}" >
							</div>
									
								</div>
							</div>
							
						</div>
					<div class="form-group row">
							
								
							<div class="col-md-12">
								<div class="row">
								<div class="col-md-6 form-group">
									 <label for="exampleInputName1">Parent Folder Title</label>
                        <input type="text" class="form-control" id="parentfoldertitle" name="parentfoldertitle" placeholder="Name" value="{{$result->parentfoldertitle}}" disabled>
									</div>
								<div class="col-md-6 form-group">
									<label class="col-sm-6 col-form-label">Parent Folder Sequence</label>
                             <input type="text" class="form-control" id="parentfoldersequence" name="parentfoldersequence" value="{{$result->parentfoldersequence}}" disabled>
									</div>

									
								</div>
							</div>
							
						</div>
							<div class="form-group row">
							
								
							<div class="col-md-12">
								<div class="row">
								<div class="col-md-6 form-group">
									 <label for="exampleInputName1">Sub Folder Title</label>
                        <input type="text" class="form-control" id="subfoldertitle" name="subfoldertitle" placeholder="Name" value="" >
									</div>
								<div class="col-md-6 form-group">
    <label class="col-sm-6 col-form-label">Sub Folder Sequence</label>
    <select class="form-control" name="subparentsequence" id="subparentsequence">
        <option value="">Select Sub Parent Sequence</option>
        @if ($result->parentfoldersequence)
            @php
                list($parentSeq1, $parentSeq2) = explode('.', $result->parentfoldersequence);
            @endphp
            @for ($i = 1; $i <= 50; $i++)
                <option value="{{ $result->parentfoldersequence }}.{{ $i }}">{{ $parentSeq1 }}.{{ $parentSeq2 }}.{{ $i }}</option>
            @endfor
        @endif
    </select>
</div>
              
									
								</div>
							</div>
							
						</div>
						
							<button type="submit" class="btn btn-success btn-block enter-btn" style="float:right;">Submit</button> 
						
				
					</form>
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

var subfoldertitle =  $('#subfoldertitle').val();
var subparentsequence =  $('#subparentsequence').val();

		
	  if(subfoldertitle.trim()==''){
                    swal("Warning","Enter Sub Folder title","warning");
                    return false;
                }
	  if(subparentsequence==''){
                    swal("Warning","Enter sub Sequence","warning");
                    return false;
                }
	
	  
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{ url('/cell/saveNaacChildReport')}}",
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
                if (response) {
                   // this.reset();
                    alert('Sub Folder has been submitted successfully');
				  window.location.reload();
                }
            },
        });
    });
});

 $("#file1").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword'];
    if(!((fileType == match[0]) || (fileType == match[1]))){
        alert('Sorry only Pdf or Doc files are allowed to upload.');
        $("#file1").val('');
        return false;
    }
});   

</script>

@endsection