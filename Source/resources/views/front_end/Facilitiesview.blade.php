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

			<section class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space" data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Facilities</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Facilities</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- about area start -->
            <div class="tp-about__section-2 pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content">
                                    <div class="col-xxl-12"> 
									  <div class="row">
										  <div class="col-lg-12 abtmestext">
											<h4>Facilities</h4>
											<div class="col-lg-12 mb-3  pb-10">
												<img src="https://static.wixstatic.com/media/250fa9_a14359f67f8c43c8bdcd2ee39839b70f~mv2.png/v1/fill/w_1000,h_366,al_c,lg_1,q_90/250fa9_a14359f67f8c43c8bdcd2ee39839b70f~mv2.png" alt="" class="img-fluid" />
											 </div>
											<div class="blog-content">
												<div class="row">
													<div class="col-lg-4">
														<h4><a href="{{url('announcement')}}">Announcement</h4></a>
														<h4><a href="{{url('examinationhall')}}">Examination Hall</a>
														<h4><a href="https://sites.google.com/view/mesasmabicollegelibrary/">Library</a></h4>
														<h4><a href="{{ route('menu.media_lab') }}">Media Lab</a></h4>
														<h4><a href="{{ route('menu.canteen') }}">Canteen</a></h4>
													</div>	
													<div class="col-lg-4">
														<h4><a href="{{ route('menu.dubbing_studio') }}">Dubbing studio</a></h4>
														<h4><a href="{{ route('menu.language_lab') }}">Language Lab</a></h4>
														<h4><a href="{{ route('menu.sports') }}">Sports</a></h4>
														<h4><a href="{{ route('menu.hostel') }}">Hostel</a></h4>
														<h4><a href="{{ route('menu.day_care') }}">Day care centre</a></h4>
													</div>	
													<div class="col-lg-4">	
														<h4><a href="{{ route('menu.coperative_society') }}">Coop Society</a></h4>
														<h4><a href="{{ route('menu.college_bus') }}">College Bus</a></h4>
														<h4><a href="{{ route('menu.counselling_center') }}">Counselling Centre</a></h4>
														<h4><a href="{{ route('menu.health_club') }}">Health club/Yoga centre</a></h4>
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
                </div>
            </div>
            <!-- about area end -->

@endsection