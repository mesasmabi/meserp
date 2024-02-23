@extends('layouts.front_end.default')
@section('content')

	<section class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space" data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}" >
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="breadcrumb__content text-center p-relative z-index-1">
						<h3 class="breadcrumb__title">Announcement</h3>
						<div class="breadcrumb__list">
							<span><a href="{{ route('index') }}">Home</a></span>
							<span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
							<span>Announcement</span>
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
											<ul class="blog-details-list">
												<li><a target="_blank" href=""> 2018-2019 </a></li>
											</ul>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection