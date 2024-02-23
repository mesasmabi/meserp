@extends('layouts.front_end.default')
@section('content')

<style>
.policyview a{
	color:green;
}
.policyview td{
	font-size:16px;
}
.titileviewwpolicy{
	font-size:30px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Grievance Form</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Grievance Form</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- about area start -->
            <div class="tp-about__section-2 pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content">
                                    <div class="col-xl-12"> 
									  <div class="row align-items-center justify-content-center">
										  <div class="col-lg-8 abtmestext" style="border: 1px solid #1111;padding:30px;">
											<h5 class="text-center mb-3">Grievance Add Form</h5>
												<div class="col-lg-12  pb-10">
										           <form id="sendgrievances" action="{{ route('sendgrievance') }}" method="POST">
													  <div class="row">
														  <div class="col-lg-6 mb-3">
															<label for="name" class="form-label">Full name</label>
															<input type="text" class="form-control" id="fullname" name="fullname" required>
														  </div>
														  <div class="col-lg-6 mb-3">
															<label for="department" class="form-label">Department </label>
															<input type="text" class="form-control" id="department" name="department" required>
														  </div>
													  </div>
													  <div class="row">
														  <div class="col-lg-6 mb-3">
															<label for="Class" class="form-label">Class  </label>
															<input type="text" class="form-control" id="class" name="class" required>
														  </div>
														  <div class="col-lg-6 mb-3">
															<label for="exampleInputEmail1" class="form-label">Email address</label>
															<input type="email" class="form-control" id="Email1" name="Email1" required aria-describedby="emailHelp">
															<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
														  </div>
													  </div>
												     <div class="row">
														  <div class="col-lg-12 mb-3">
															<label for="number" class="form-label">Phone Number</label>
															<input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
														  </div>
													 </div>
													  <div class="row">
														  <div class="col-lg-12 mb-3">
															<label for="exampleInputaddress" class="form-label">Your Address</label>
															<textarea type="text" rows="4" class="form-control" id="address" required name="address"></textarea>
														  </div>
													  </div>
													  <div class="row">
														  <div class="col-lg-12 mb-3">
															<label for="exampleInputDetails" class="form-label">Grievance Details</label>
															<textarea type="text" rows="4" class="form-control" required id="grievance" name="grievance"></textarea>
														  </div>
													  </div>
													  
													         <div id="ajax-loader" style="display:none" class="alert alert-info">Please wait.Process in progress.......</div>
                              
 <button type="button" class="btn btn-primary submit mt-0 mb-3 sendgrievance" id="sendgrievance">Submit</button>
            
													</form>
                                                 </div>
											</div>
									   </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about area end -->
	

@endsection