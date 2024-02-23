@if(Auth::User()->role == 7)
   @php $type = "layouts.research.default";
     $autocompleteSearchResearchPerson = url('/researchguide/autocompleteSearchResearchPerson');
     $savejournal = url('/researchguide/saveJournal');
     $journalList = url('/researchguide/journalList');
   @endphp

   @elseif(Auth::User()->role == 8)
  
  @php $type = "layouts.researchfellow.default";
    $autocompleteSearchResearchPerson = url('/researchfellow/autocompleteSearchResearchPerson');
     $savejournal = url('/researchfellow/saveJournal');
     $journalList = url('/researchfellow/journalList');
 @endphp
  @elseif(Auth::User()->role == 2)
  
  @php $type = "layouts.faculty.default";
    $autocompleteSearchResearchPerson = url('/faculty/autocompleteSearchResearchPerson');
     $savejournal = url('/faculty/saveJournal');
     $journalList = url('/faculty/journalList');
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
                    <h4 class="card-title">Add Journal Publication</h4>
                    <div id="mainform">
                   <form id="fupForm" enctype="multipart/form-data" method="post">
                        @csrf  
                      
						<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
									<!--<div class="col-md-3 form-group">
									     <label>For Whom ?</label>
									  <select class="form-control" name="publisherwhom" id="publisherwhom">
                                                        <option value="">Select</option>
                                                         <option value="1">Faculty</option>
                                                         <option value="2">Research Fellow</option>
                                                         <option value="3">Research Guide</option>
                                                         <option value="4">Student</option>
                                                        <option value="5">Research Fellow & Faculty</option>
                                                        <option value="6">Research Guide & Faculty </option>
                                                       
                                                    </select>
									</div>-->
								
									<div class="col-md-3 form-group">
									      <label>Type Of Publication</label>
									  <select class="form-control" name="typepublication" id="typepublication">
                                                        <option value="">Select</option>
                                                         <option value="Research Articles">Research Articles</option>
                                                         <option value="Research paper">Research paper</option>
                                                         <option value="Research Communications">Research Communications</option>
                                                         <option value="Others">Others</option>
                                                        
                                                    </select>
									</div>
									<div class="col-md-3 form-group">
									  <label>Journal type</label>
							    <select class="form-control" name="journaltype" id="journaltype">
                                                        <option value="">Select</option>
                                                         <option value="UGC Care Listed">UGC Care Listed</option>
                                                         <option value="Scopus or internationally indexed peer-reviewed">Scopus or internationally indexed peer-reviewed</option>
                                                         <option value="Non-Indexed National">Non-Indexed National</option>
                                                         <option value="Non-Indexed International">Non-Indexed International</option>
                                                        
                                                    </select>
									</div>
								</div>
							</div>
							
						</div>
					
						<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Author(s)</label>
									 <input type="text" class="form-control" id="Author" name="Author" placeholder="Author">
									</div>
									<div class="col-md-4 form-group">
									  <label>Title of paper</label>
									   <input type="text" class="form-control" id="title" name="title" placeholder="Title Of Paper">
									</div>
									<div class="col-md-4 form-group">
									  <label>Year</label>
						            	  <input type="text" class="form-control" id="year" name="year" placeholder="Year">
									</div>
								</div>
							</div>
							
						</div>
							<div class="form-group row">
						
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4 form-group">
									  <label>Journal Name</label>
									 <input type="text" class="form-control" id="journalname" name="journalname" placeholder="Journal Name">
									</div>
									<div class="col-md-4 form-group">
									  <label>Volume and Issue</label>
									   <input type="text" class="form-control" id="volume" name="volume" placeholder="Eg.24(3)">
									</div>
									<div class="col-md-4 form-group">
									  <label>Pages</label>
						            	  <input type="text" class="form-control" id="pages" name="pages" placeholder="Eg.212-224">
									</div>
								</div>
							</div>
							
						</div>
			
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-3 form-group">
									  <label> DOI/URL </label>
									 <input type="text" class="form-control" id="url" name="url" placeholder=" DOI/URL ">
									</div>
									<div class="col-md-3 form-group">
									  <label> ISSN </label>
									   <input type="text" class="form-control" id="issn" name="issn" placeholder="ISSN">
									</div>
									<div class="col-md-3 form-group">
									  <label>Impact Factor</label>
						            	  <input type="text" class="form-control" id="impactfactor" name="impactfactor" placeholder="Impact Factor">
									</div>
										<div class="col-md-3 form-group">
								
						            	<label>Upload Proof</label>
							    <input type="file" class="form-control" id="file1" name="file1"  />
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
  $(document).ready(function(){
	  $( "#skillitems" ).autocomplete({
        source: function( request, response ) {
			var type =  $('#publisherwhom').val();
           $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{$autocompleteSearchResearchPerson}}",
            type: 'POST',
            dataType: "json",
            data: {
              search: request.term,
			  type :type
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('.skillitems').val(ui.item.label);// display the selected text
          $('#skillid').val(ui.item.value); // save selected id to input
		 
          return false;
        },
appendTo: "#skill_pos",
      });
        });
  
</script>
<script type="text/javascript">

$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
var publisherwhom =  $('#publisherwhom').val();

var typepublication =  $('#typepublication').val();                   
var journaltype= $('#journaltype').val();
var Author= $('#Author').val();	
var title= $('#title').val();	
var year =  $('#year').val();
var journalname =  $('#journalname').val();
var volume= $('#volume').val();
var url= $('#url').val();
var issn= $('#issn').val();
var impactfactor= $('#impactfactor').val();



		  if(publisherwhom ==''){
                    swal("Warning","Enter Type For Whom","warning");
                    return false;
                }
	
	   
         if(typepublication==''){
                    swal("Warning","Enter Type Of Publication","warning");
                    return false;
                }
    
        if(journaltype ==''){
                    swal("Warning","Enter Journal Type ","warning");
                    return false;
                }
         if(Author ==''){
                    swal("Warning","Enter Author Name","warning");
                    return false;
                }
          if(title ==''){
                    swal("Warning","Enter Title of Journal","warning");
                    return false;
                }
		if(publisherwhom!=""  && typepublication!="" && journaltype!="" && Author!="" && title!=""){	  

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{$savejournal}}",
            type: 'POST',
            data: new FormData(this),
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
                    alert('Journal Details has been submitted successfully');
					window.location.href = "{{$journalList}}";
                }
            },
        });
	}
	else{
          alert('Please fill all the field !');
      }
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