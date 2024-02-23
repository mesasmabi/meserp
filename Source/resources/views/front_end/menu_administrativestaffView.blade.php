@extends('layouts.front_end.default')
@section('content')

<style>
.blog-details-list li {
    position: relative;
    padding: 6px 0 9px 26px;
    border-bottom: 0px solid rgba(0, 0, 0, 0.1);
}
.blog-content h4 {
    font-size: 20px !important;
    margin-bottom: 13px !important;
    font-weight: bold !important;
    border-left: 0px solid #21b621 !important;
    padding-left: 0rem !important;
    text-transform: uppercase;
    border-bottom: 3px solid #21b621 !important;
    width: fit-content !important;
    padding-bottom: 0.2rem !important;
}
</style>
<!-- breadcrumb area start -->

            <section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Administrative staff</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Administrative staff</span>
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
								    <div class="pb-30 abutmes text-center">
									   <h2>Administrative and Supporting Staff</h2>
								    </div>
									<div class="row">
										<div class="col-lg-4">
											<h4>Junior Superintendent</h4>
											<ul class="blog-details-list">
												<li>Sadarudeeen K A</li>
											</ul>
											<br>
											<h4>Clerks </h4>
											<ul class="blog-details-list">
												<li>    Haseena M H </li>
												<li>	Suresh Babu P V </li> 
												<li>	Rajeeb P B</li>
												<li>	Zeenath P A </li>
												<li>	Sajitha P A  </li>
												<li>	Anees V A </li>
											</ul>
											<br>
											<h4>Mechanic</h4>
											<ul class="blog-details-list">
												<li>Mohammed Hijas P S</li>
											</ul>
											
											<br>
											<h4>System Administrator </h4>
											<ul class="blog-details-list">
												<li>Jaseer P M</li>
											</ul>
											<br>
											<h4>Accountant </h4>
											<ul class="blog-details-list">
												<li>Soudha Ismayl </li>
											</ul>
											
											<br>
											<h4>Supervisor  </h4>
											<ul class="blog-details-list">
												<li>Safaralighan K A </li>
											</ul>
											<br>
										</div>	
										<div class="col-lg-4">		
											
											
											<h4>Herbarium Keeper </h4>
											<ul class="blog-details-list">
												<li>Vacant </li>
											</ul>
											<br>
											<h4>Gardener </h4>
											<ul class="blog-details-list">
												<li>Raji V R </li>
											</ul>
											<br>
											<h4>Security Staff </h4>
											<ul class="blog-details-list">
												<li>Iqbal K M </li>
												<li>Muhammed P K</li> 
												<li>Siddique K M</li>
											</ul>
											
											
											<h4>Head Accountant</h4>
											<ul class="blog-details-list">
												<li>Shahina C P</li>
											</ul>
											
											<br>
											<h4>Computer Assistant</h4>
											<ul class="blog-details-list">
												<li>Naseeba P A</li>
											</ul>
											
											<br>
											<h4>Office Assistants </h4>
											<ul class="blog-details-list">
												<li>Sheji Shanoj </li>
												<li>Mohammed Muneer K J</li>
												<li>Kareem N M </li>
												<li>Jasmine A K </li>
												<li>Haseena P H </li>
											</ul>
											
											<br>
											
									</div>	
										<div class="col-lg-4">		
											
											<h4>Office Administrator </h4>
											<ul class="blog-details-list">
												<li>P M Moideen </li>
											</ul>
											<br>
											
											
											<h4>Audit Assistant </h4>
											<ul class="blog-details-list">
												<li>Suharabee A A </li>
											</ul>
											<br>
											<h4>Laboratory Assistants</h4>
											<ul class="blog-details-list">
												<li>Mohammed Shareef M A </li>
												<li>Reshmi Suresh </li>
												<li>Smitha M S </li>
												<li>Sajna K S </li>
											</ul>
											<br>
											<h4>Cleaning Staff </h4>
											<ul class="blog-details-list">
												<li>Zeenath M A</li>
												<li>Sheji Udayan </li>
												<li>Sajitha Babu </li>
												<li>Rafiyath P M</li>
												<li>Shareena K A</li>
												<li>Reshma K S</li>
												<li>Raji V R</li>
											</ul>	
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-12">
										<div class="pb-30  pt-10 abutmes text-center">
										   <h2>Laboratory</h2>
										</div>
											<h4>Laboratory Assistants</h4>
											<ul class="blog-details-list">
												<li>Resmi Suresh (Computer Lab)</li>
												<li>Smitha M S (Chemistry Lab)</li>
												<li>Muhammed Shareef M A (Botany Lab)</li>
												<li>Sajana K .S (Aquaculture Lab)</li>
											</ul>
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