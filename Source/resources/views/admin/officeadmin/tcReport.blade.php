@if(Auth::User()->role == 1)
   @php $type = "layouts.admin.default";
  
   @endphp
@endif
@extends($type)

@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">TC Report </h3>
           
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> TC Report </h4>
                  
   
    

					                 <div class="table-responsive">
                        <form method="GET" action="{{url('admin/tc_report_search') }}">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>

                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Download Report</button>
                        </form>
								
                  </div>
                  
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    // Get the current date
    var currentDate = new Date().toISOString().split('T')[0];

    // Set the current date as the default value for the "Start Date" and "End Date" fields
    document.getElementById('start_date').value = currentDate;
    document.getElementById('end_date').value = currentDate;
</script>
@endsection