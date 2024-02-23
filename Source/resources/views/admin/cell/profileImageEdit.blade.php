
@if(Auth::User()->role == 4)
   @php $type = "layouts.cell.default";
 
  $saveimage=url('/cell/store-profile-image');
  $dashboard= url('/cell/dashboard');
 @endphp
 @elseif(Auth::User()->role == 7)
   @php $type = "layouts.research.default";
    $saveimage= url('/researchguide/store-profile-image');
 $dashboard=url('/researchguide/dashboard');
   @endphp
    @elseif(Auth::User()->role == 8)
   @php $type = "layouts.researchfellow.default";
    $saveimage= url('/researchfellow/store-profile-image-fellow');
 $dashboard=url('/researchfellow/dashboardfellow');
   @endphp
 @endif
 @extends($type)

@section('content')
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Profile Image </h3>
           
            </div>
             <div id="contact" class="container">
      <form method="post" id="upload_form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30"><input type="file" name="select_file" id="select_file" /></td>
       <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"></td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">jpg, png, gif</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   <br />
   <span id="uploaded_image"></span>

    </div>
	
		
					
                  </div>
                </div>
            
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
   url:"{{$saveimage}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    alert('Files has been uploaded successfully');
	window.location.href = "{{$dashboard}}";
   }
  })
 });

});


</script>

@endsection