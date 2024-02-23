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

 <section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Organogram of the College</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Organogram of the College</span>
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
											<h4>Organogram of the College</h4>
												<div class="col-lg-12  pb-10">
										            <img src="{{asset('front_end/assets/img/about-us/OrganogramCollege.jpg')}}" alt="" class="img-fluid" />
                                                 </div>
											</div>
									   </div>
									     <div class="row">
										  <div class="col-lg-12 abtmestext">
											<h4>Implementation Scheme</h4>
												<div class="col-lg-12  pb-10">
										            <img src="{{asset('front_end/assets/img/about-us/impscheme.jpeg')}}" alt="" class="img-fluid" />
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