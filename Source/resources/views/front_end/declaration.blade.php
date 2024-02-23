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
                                <h3 class="breadcrumb__title">Declaration</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Declaration</span>
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
                                <div class="blog-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="blog-content">
												<a href="{{asset('front_end/assets/pdf/undertaking.pdf')}}" target="_blank"><h4>11 QA Declaration</h4></a>
											</div>
										</div>
									</div>
									<div class="row">	
										<div class="col-lg-12 blog-content  pb-50">
											<h2 class="mb-2" style="font-size:20px;">Declaration</h2>
											<iframe src="{{asset('front_end/assets/pdf/undertaking.pdf')}}" width="100%" height="1000px">
											</iframe>
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