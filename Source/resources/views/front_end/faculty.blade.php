@extends('layouts.front_end.default')
@section('content')

<!-- breadcrumb area start -->
<section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Faculty</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Faculty</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

             <!-- about area start -->
			<div class="tp-about__section-2 pt-100 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content mb-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                             <h4> Faculties</h4>

                                               <table class="table table-bordered" id="users-list">
                                                    <thead>
                                                        <tr>
                                                            <th> Name</th>
                                                            <th>Designation</th>
															<th>Image</th>
															<th>Resume</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@if(!empty($faculty))
																@foreach($faculty as $val)
																	<tr>
																		<td>{{ $val->name }}</td>
																		<td>{{ $val->designation }}</td>
																		<td>
																			<img src="{{ asset('public/uploads/facultyimg/' . $val->picture) }}" alt="Faculty-image" height="100px">
																		</td>
																		<td>
																			@if(!empty($val->resume))
																				<a href="{{asset('public/uploads/facultyresume/' . $val->resume) }}" target="_blank"><img src="{{asset('front_end/assets/img//pdf.png')}}" width="30px" height="auto"></a>
																			@else
																				No resume available
																			@endif
																		</td>
																	</tr>
																@endforeach
															@endif

                                                    </tbody>
                                                </table>
                                            </div>
										</div>
									</div>
									<br><br><br>
									<div class="blog-content mt-5 ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                             <h4>Former Faculties</h4>

                                               <table class="table table-bordered" id="users-list2">
                                                    <thead>
                                                        <tr>
                                                            <th> Name</th>
                                                            <th>Designation</th>
															
															<th>Image</th>
															
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@if(!empty($formerfaculty))
																@foreach($formerfaculty as $val)
																	<tr>
																		<td>{{ $val->name }}</td>
																		<td>{{ $val->designation }}</td>
																	
																		
																		<td>
																			@if(!empty($val->picture))<img src="{{ asset('public/uploads/facultyimg/' . $val->picture) }}" alt="Faculty-image" width="100px"> @endif
																		</td>
																		
																	   
																	</tr>
																@endforeach
															@endif

                                                    </tbody>
                                                </table>
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


<style>
h6 {
    font-size: 16px !important;
    margin-bottom: 0.51rem !important;
    border-bottom: 1px solid #333 !important;
    width: fit-content;
    padding-bottom: 5px !important;
}
</style>