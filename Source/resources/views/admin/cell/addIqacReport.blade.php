@if(Auth::User()->role == 4)
   @php 
   $type = "layouts.cell.default";
  
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
                        <h4 class="card-title">ADD IQAC REPORT</h4>
                        <div id="mainform">
                            <form id="fupForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">Category</label>
                                        <select class="form-control" name="categoryDropdown" id="categoryDropdown">
                                            <option value="">Select category</option>
                                            <option value="Strategic">Strategic Plan/Perspective Plan</option>   
                                            <option value="Minutes">Minutes</option>
                                            <option value="AQAR">AQAR Report</option>
                                            <option value="SSR">SSR Report</option>
                                            <option value="Feedback">Feedbacks</option>
                                            <option value="ActionPlan">Action Plan and Action Taken Report</option>
                                            <option value="IQAC">IQAC Initiatives</option>
											  <option value="Quality">Quality Ranking</option>
											  <option value="Haritha">Haritha Protocol</option>
											  <option value="Forms">Forms/Downloads</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;" id="feedbackCategoryDiv">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">FeedBack Categories</label>
                                        <select class="form-control" name="feedbackcategory" id="feedbackCategory">
                                            <option value="">Select category</option>
                                            <option value="feedback1">Feedback on Academic performance and Ambiance of the Institution </option>   
                                            <option value="feedback2">Student Satisfaction Survey</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;" id="ssrCycleDiv">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">SSR Cycle</label>
                                        <select class="form-control" name="ssrCycle" id="ssrCycle">
                                            <option value="">Select cycle</option>
                                            <option value="1st cycle">1st Cycle</option>   
                                            <option value="2nd cycle">2nd Cycle</option>
                                            <option value="3rd cycle">3rd Cycle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;" id="auditPracticesDiv">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">Category Label</label>
										 <input type="text" class="form-control" name="auditPractices" id="auditPractices" placeholder="Enter Label">
                                       
                                    </div>
                                </div>
								<div class="form-group row" style="display: none;" id="rankingDiv">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">Ranking Names</label>
										 <input type="text" class="form-control" name="rankingname" id="rankingname" placeholder="Enter Ranking Names">
                                       
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;" id="periodDiv">
                                    <div class="col-md-6">
                                        <label class="col-sm-6 col-form-label">Period</label>
                                        <select name="category2_period" id="category2_period" class="form-control">
                                            <option value="">Select Period</option>
                                            @for ($year = 2018; $year <= 2023; $year++)
                                                <option value="{{ $year }}-{{ $year + 1 }}">{{ $year }}-{{ $year + 1 }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <!-- ... Repeat for other categories ... -->

                                <div class="form-group">
                                    <label for="pdf">Upload PDF(ONLY PDF FILES ACCEPTED)</label>
                                    <input type="file" name="pdf_file" id="pdf_file" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Function to hide all form elements
        function hideAll() {
            $('#periodDiv, #feedbackCategoryDiv, #ssrCycleDiv, #auditPracticesDiv').hide();
        }

        // Initially hide all form elements
        hideAll();

        // Event listener for category dropdown change
        $('#categoryDropdown').on('change', function () {
            var selectedCategory = $(this).val();

            // Hide all form elements
            hideAll();

            // Show relevant form elements based on the selected category
            if (selectedCategory === 'Strategic' || selectedCategory === 'ActionPlan' || selectedCategory === 'Haritha'|| selectedCategory === 'Forms') {
                $('#pdfDiv').show();
				 $('#rankingDiv').hide();
            } else if (selectedCategory === 'AQAR' || selectedCategory === 'Minutes') {
            $('#periodDiv').show(); // Show only the "Period" select element
            $('#pdfDiv').show();
			 $('#rankingDiv').hide();
        } else if (selectedCategory === 'Feedback') {
                $('#feedbackCategoryDiv, #periodDiv, #pdfDiv').show();
				 $('#rankingDiv').hide();
            } else if (selectedCategory === 'SSR') {
                $('#ssrCycleDiv, #pdfDiv').show();
				 $('#rankingDiv').hide();
            } else if (selectedCategory === 'IQAC') {
                $('#auditPracticesDiv, #pdfDiv').show();
				 $('#rankingDiv').hide();
            }
			else if (selectedCategory === 'Quality') {
                $('#rankingDiv, #periodDiv').show();
            }
        });
		 $('#fupForm').submit(function (e) {
			  e.preventDefault();
        var selectedCategory = $('#categoryDropdown').val();
        // Add your validation logic here based on the selected category
        if (selectedCategory === 'Strategic' || selectedCategory === 'ActionPlan'|| selectedCategory === 'Haritha'|| selectedCategory === 'Forms') {
            if ($('#pdf_file').val() === '') {
                 swal("Warning","Please select a PDF file","warning");
                    return false;
      
            }
        } else if (selectedCategory === 'AQAR' || selectedCategory === 'Minutes') {
            // Example: Check if a PDF file is selected and a period is chosen
            if ($('#pdf_file').val() === '' || $('#category2_period').val() === '') {
                swal("Warning","Please select a PDF file and a period for AQAR/Minutes.","warning");
                    return false;
                
            }
        } else if (selectedCategory === 'Feedback') {
            // Add validation for the "Feedback" category
            // Example: Check if a PDF file is selected, feedback category chosen, and period selected
            if ($('#pdf_file').val() === '' || $('#feedbackCategory').val() === '' || $('#category2_period').val() === '') {
				swal("Warning","Please fill in all required fields for Feedback.","warning");
                    return false;
            }
        } else if (selectedCategory === 'SSR') {
            // Add validation for the "SSR" category
            // Example: Check if a PDF file is selected and SSR cycle chosen
            if ($('#pdf_file').val() === '' || $('#ssrCycle').val() === '') {
				swal("Warning","Please select a PDF file and an SSR cycle.","warning");
                    return false;
              
            }
        } else if (selectedCategory === 'IQAC') {
            // Add validation for the "IQAC" category
            // Example: Check if a PDF file is selected and audit practice chosen
            if ($('#pdf_file').val() === '' || $('#auditPractices').val() === '') {
				swal("Warning","Please select a PDF file and Label for IQAC.","warning");
                    return false;
               
            }
        }
		else if (selectedCategory === 'Quality') {
            // Add validation for the "IQAC" category
            // Example: Check if a PDF file is selected and audit practice chosen
            if ($('#pdf_file').val() === '' || $('#rankingname').val() === ''|| $('#category2_period').val() === '') {
				swal("Warning","Please select a PDF file and Rank Name and Period for IQAC.","warning");
                    return false;
               
            }
        }
		 $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:"{{ url('/cell/saveIQACReport')}}",
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
</script>
<script>
$("#pdf_file").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var validFileTypes = ['application/pdf'];

    if (!validFileTypes.includes(fileType)) {
        alert('Sorry, only PDF files are allowed to upload.');
        $("#pdf_file").val('');
    }
});
</script>
@endsection
