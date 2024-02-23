@if(Auth::User()->role == 1)
   @php $type = "layouts.admin.default";
   @endphp
@elseif(Auth::User()->role == 3)
   @php $type = "layouts.office.default";
   @endphp
@endif
@extends($type)


@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Former Faculty List </h3>
           
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Former Faculty List </h4>
                  
   
    

					 @if(!empty($list))
                    <div class="table-responsive">
                      <table class="table table-bordered" id="myTable" >
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th> Name</th>
                           
							<th> Phone <br> Number </th>
							 <th> Email </th>
						    <th> Department </th>
                            <th> Designation</th>
							<th> joining Date</th>
                            <th> Change to Former <br>Faculty Date</th>
							<th> DP</th>
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; ?>
                                    @foreach($list as $val)
                          <tr>
                           <td>{{$i}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->phone_number}}</td>
							<td>{{$val->email_id}}</td>
							<td>{{$val->department}}</td>
							<td>{{$val->designation}}</td>
                            <td>{{date('d-m-Y', strtotime($val->date_of_join))}}</td>
                            <td>{{date('d-m-Y', strtotime($val->updated_at))}}</td>
						      @if(!empty($val->picture))	<td><img src="{{url('public/uploads/facultyimg/'.$val->picture)}}" class="rounded-circle" alt="" style="width:100px;height:100px;"/> </td>@else
            <td><img src="{{url('public/uploads/facultyimg/download.jpeg')}}" class="rounded-circle" alt="" style="width:100px;height:100px;"/></td>
        @endif  						    
 
							 
                          
                          </tr>
                          <?php $i++; ?>
                                    @endforeach
                                       
                       
                          
                         
                        </tbody>
                      </table>
                    </div>
					@endif
				
                  </div>
                  </div>
                  
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


@endsection