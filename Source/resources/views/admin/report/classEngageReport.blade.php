
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
                    <h4 class="card-title">Add Class Engagement Report</h4>
                    <div id="mainform">
                   <form id="fupForm" enctype="multipart/form-data">
                        @csrf  
                      <div class="form-group">
                        <label>Search Paper</label>
								   <input type="text" id="searchPaper" name="searchPaper" class="form-control searchPaper" />
                                    <input type="hidden" id="searchPaperid" name="searchPaperid" value=""/>
                                    <div id="searchPaper_pos"></div> 
                      </div>
					 <div class="form-group">
                        <label>Search Programs</label>
								   <input type="text" id="searchPrograms" name="searchPrograms" class="form-control searchPrograms" />
                                    <input type="hidden" id="searchProgramsid" name="searchProgramsid" value=""/>
                                    <div id="searchPrograms_pos"></div> 
                      </div>
					   <div class="form-group">
                        <label>Search Batch</label>
								   <input type="text" id="searchBatch" name="searchBatch" class="form-control searchBatch" />
                                    <input type="hidden" id="searchBatchid" name="searchBatchid" value=""/>
                                    <div id="searchBatch_pos"></div> 
                      </div>
						<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
								<div class="col-md-4 form-group">
									  <label>Semester</label>
								 <select class="form-control" name="semester" id="semester" >
            										<option value="">Select Semester</option>
            										<option value="Semester 1">Semester 1</option>
            										<option value="Semester 2">Semester 2</option>
													<option value="Semester 3">Semester 3</option>
            										<option value="Semester 4">Semester 4</option>
													<option value="Semester 5">Semester 5</option>
            										<option value="Semester 6">Semester 6</option>
            										</select>
									</div>
									<div class="col-md-4 form-group">
									  <label>From Date</label>
									 <input type="date" class="form-control form-control-lg" id="fromdate" name="fromdate" aria-label="From Date">
									</div>
								   <div class="col-md-4 form-group">
									  <label>To Date</label>
									 <input type="date" class="form-control form-control-lg" id="todate" name="todate" aria-label="To Date">
									</div>
								
								</div>
							</div>
							
						</div>
							<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3 form-group">
									  <label>Total Hours Alloted</label>
									 <input type="text" class="form-control form-control-lg" id="hrsalloted" name="hrsalloted" aria-label="Total Hours Alloted">
									</div>
									<div class="col-md-3 form-group">
									  <label>Total Hours Engaged</label>
									  <input type="text" class="form-control form-control-lg" id="hrsengaged" name="hrsengaged" aria-label="Total Hours Engaged">
									</div>
										<div class="col-md-3 form-group">
									  <label>Extra Hours Taken</label>
									 <input type="text" class="form-control form-control-lg" id="extrahrstaken" name="extrahrstaken" aria-label="Extra Hours Taken">
									</div>
									<div class="col-md-3 form-group">
									  <label>Remedial Hours Taken</label>
									 <input type="text" class="form-control form-control-lg" id="remedialhrstaken" name="remedialhrstaken" aria-label="Remedial Hours Taken">
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

 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description');
	
</script>

<script type="text/javascript">
  $(document).ready(function(){
	  $( "#searchPaper" ).autocomplete({
        source: function( request, response ) {
           $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/faculty/autocompleteSearchPaper')}}",
            type: 'POST',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('.searchPaper').val(ui.item.label);// display the selected text
          $('#searchPaperid').val(ui.item.value); // save selected id to input
		 
          return false;
        },
appendTo: "#searchPaper_pos",
      });
        });
		$(document).ready(function(){
	  $( "#searchPrograms" ).autocomplete({
        source: function( request, response ) {
           $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/faculty/autocompleteSearchPrograms')}}",
            type: 'POST',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('.searchPrograms').val(ui.item.label);// display the selected text
          $('#searchProgramsid').val(ui.item.value); // save selected id to input
		 
          return false;
        },
appendTo: "#searchPrograms_pos",
      });
        });
		$(document).ready(function(){
	  $( "#searchBatch" ).autocomplete({
        source: function( request, response ) {
           $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ url('/faculty/autocompleteSearchBatch')}}",
            type: 'POST',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('.searchBatch').val(ui.item.label);// display the selected text
          $('#searchBatchid').val(ui.item.value); // save selected id to input
		 
          return false;
        },
appendTo: "#searchBatch_pos",
      });
        });
		$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
var searchPaperid =  $('#searchPaperid').val();
var searchProgramsid =  $('#searchProgramsid').val(); 
var searchBatchid =  $('#searchBatchid').val();                       
var semester= $('#semester').val();
var fromdate= $('#fromdate').val();	
var todate= $('#todate').val();	
var hrsalloted =  $('#hrsalloted').val();
var hrsengaged =  $('#hrsengaged').val();
var extrahrstaken= $('#extrahrstaken').val();
var remedialhrstaken= $('#remedialhrstaken').val();



		  if(searchPaperid ==''){
                    swal("Warning","Enter Paper","warning");
                    return false;
                }
	
	     if(searchProgramsid ==''){
                    swal("Warning","Enter Programs ","warning");
                    return false;
                }
        if(semester ==''){
                    swal("Warning","Enter Semester ","warning");
                    return false;
                }
      if(searchBatchid ==''){
                    swal("Warning","Enter Batch ","warning");
                    return false;
                }
              
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{ url('/faculty/saveClassEngage')}}",
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
                    alert('Class Engage Report has been submitted successfully');
					window.location.href = "{{ url('/faculty/classEngageList')}}";
                }
            },
        });
    });
});
	</script>
@endsection