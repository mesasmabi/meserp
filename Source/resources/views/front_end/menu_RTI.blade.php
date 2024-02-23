@extends('layouts.front_end.default')
@section('content')

<section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">RTI</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>About Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- about area start -->
            <div class="tp-about__section-2 pt-100 pb-10">
                <div class="container">
						   <div class="row">
								<div class="col-lg-6 blog-content  pb-50">
									<a src="{{asset('front_end/assets/pdf/RTI.pdf')}}" target="_blank">
										<h4>Right To Information (RTI) <i class="fa fa-file-pdf text-danger" aria-hidden="true"></i> </h4>
									</a>
								</div>
								<div class="col-lg-6 blog-content  pb-50">
									<a href="{{asset('front_end/assets/pdf/Statutory Declaration RTI.pdf')}}" target="_blank">
										<h4>Statutory Declaration RTI <i class="fa fa-file-pdf text-danger" aria-hidden="true"></i> </h4>
									</a>
								</div>
							</div>	
								
								
							<div class="row">	
								<div class="col-lg-12 blog-content  pb-50">
									<h2 class="mb-2" style="font-size:20px;">Right To Information</h2>
									<iframe src="{{asset('front_end/assets/pdf/RTI.pdf')}}" width="100%" height="1000px">
									</iframe>
								</div>
							  
							 </div>
						</div> 
					</div> 
				
			
        
            <!-- about area end -->

@endsection