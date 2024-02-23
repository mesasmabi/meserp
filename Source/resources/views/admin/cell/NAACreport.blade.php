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
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Name" value="{{$list->description}}" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Sequence</label>
                                                <input type="text" class="form-control" id="sequence" name="sequence"
                                                    value="{{$list->unit_number}}">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Period ( Eg: 2018-2019)</label>
												 <select class="form-control" name="period" id="period">
                                            <option value="">Select Period</option>
											  <option value="2015-2016">2015-2016</option>
											    <option value="2016-2017">2016-2017</option>
												  <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
											 <option value="2020-2021">2020-2021</option>
											  <option value="2021-2022">2021-2022</option>
											   <option value="2022-2023">2022-2023</option>
											    <option value="2023-2024">2023-2024</option>
												 <option value="2024-2025">2024-2025</option>
												  <option value="2025-2026">2025-2026</option>
												    <option value="2026-2027">2026-2027</option>
													<option value="2027-2028">2027-2028</option>
												  <option value="2013-2018">2013-2018</option>
												  <option value="2018-2023">2018-2023</option>
												   <option value="2023-2028">2023-2028</option>
												
                                        </select>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select category</option>
                                            <option value="AQAR">AQAR</option>
                                            <option value="SSR">SSR</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="col-sm-6 col-form-label">Parent Folder Title</label>
                                                <select class="form-control" name="parenttitle" id="parenttitle">
                                                    <option value="">Select Parent Folder</option>
                                                    @foreach ($parentFolders as $folder)
                                                    <option value="{{ $folder->id }}">{{ $folder->parentfoldertitle.'--'.$folder->category}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
											
                                            <div class="col-md-6 form-group" id="subFolderDiv" style="display: none;">
                                                <label class="col-sm-6 col-form-label">Sub Folder Title</label>
                                                <select class="form-control" name="parentsequence" id="parentsequence">
                                                    <option value="">Select sub Folder</option>
													<input type="hidden" name="parentsequenceid" id="parentsequenceid" value="">
                                                </select>
												
                                          
											</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="file" class="form-control" name="file" id="inputFile"
                                                    placeholder="File" />
                                                <span class="text-danger" id="file-input-error"></span>
                                                <small>(only Pdf files accepted)</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success btn-block enter-btn"
                                                    style="float:right;">Submit</button>
                                            </div>
                                        </div>
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


<script type="text/javascript">
$(document).ready(function () {
        $('#category').change(function () {
            if ($(this).val() === 'SSR') {
                $('#subFolderDiv').hide();
            } else {
                $('#subFolderDiv').show();
            }
        });
    });
$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
var period =  $('#period').val();
var category =  $('#category').val();
var parenttitle =  $('#parenttitle').val();


		if(period==''){
                    swal("Warning","Enter period","warning");
                    return false;
                }
	  if(category==''){
                    swal("Warning","Enter category","warning");
                    return false;
                }
	  if(parenttitle.trim()==''){
                    swal("Warning","Enter Parent Folder title","warning");
                    return false;
                }
	 
	
	  
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{ url('/cell/saveNaacParentReport')}}",
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
                    alert('File has been uploaded successfully');
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
$(document).ready(function () {
    $('#parenttitle').on('change', function () {
        var parentid = $(this).val(); // Get the selected parentid
        $('#parentsequence').empty(); // Clear the options
          $('#parentsequenceid').val('');
        // Fetch subfolder data using AJAX
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/cell/get-subfolders') }}",
            type: 'POST', // Use 'type' instead of 'method'
            data: { parentid: parentid },
            success: function (data) {
                $('#parentsequence').append($('<option>', {
                    value: '',
                    text: 'Select sub Folder'
                }));

                // Populate the subfolder options
                $.each(data, function (key, value) {
                    $('#parentsequence').append($('<option>', {
                        value: value.id,
                        text: value.subfoldertitle
                    }));
                });
				 $('#parentsequence').on('change', function () {
                    var parentsequenceid = $(this).val();
                    $('#parentsequenceid').val(parentsequenceid);
                });
            }
        });
    });
});

</script>

@endsection