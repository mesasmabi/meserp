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
                                <h3 class="breadcrumb__title">FEEDBACK</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>FEEDBACK</span>
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
                                            <div class="row blog-content">
                                              <div class="col-lg-6">
													<ul class="blog-details-list">
														<li style="position: unset;border: none !important;">
															<h4><a href="javascript:void(0);" onclick="togglePopUp('2018-2019', 'AQAR')">Feedback on Academic Performance and Ambiance of the Instituition </a></h4>
															<div id="popup-2018-2019" class="popup" style="display: none;">
																<!-- Content for 2018-2019 pop-up -->
																<ul>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2018-2019','category' => 'Feedback', 'fdcat' => 'feedback1']) }}"> 2018-2019 </a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2019-2020','category' => 'Feedback', 'fdcat' => 'feedback1']) }}">2019-2020</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2020-2021','category' => 'Feedback', 'fdcat' => 'feedback1']) }}">2020-2021</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2021-2022','category' => 'Feedback', 'fdcat' => 'feedback1']) }}">2021-2022</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2022-2023','category' => 'Feedback', 'fdcat' => 'feedback1']) }}">2022-2023</a></li>
																	
																   
																</ul>
															</div>
														</li>
													</ul>
												</div>

											<div class="col-lg-6">
												<ul class="blog-details-list">
													<li  style="position: unset;border: none !important;">
														<h4><a href="javascript:void(0);" onclick="togglePopUp('2019-2020', 'AQAR')">Student Satisfaction Survey </a></h4>
														<div id="popup-2019-2020" class="popup" style="display: none;">
															<!-- Content for 2019-2020 pop-up -->
															<ul>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2018-2019','category' => 'Feedback', 'fdcat' => 'feedback2']) }}"> 2018-2019 </a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2019-2020','category' => 'Feedback', 'fdcat' => 'feedback2']) }}">2019-2020</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2020-2021','category' => 'Feedback', 'fdcat' => 'feedback2']) }}">2020-2021</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2021-2022','category' => 'Feedback', 'fdcat' => 'feedback2']) }}">2021-2022</a></li>
																	<li><a href="{{ route('menu.feedbackReport', ['period' => '2022-2023','category' => 'Feedback', 'fdcat' => 'feedback2']) }}">2022-2023</a></li>
																	
																   
																</ul>
														</div>
													</li>
												</ul>
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
<script>function togglePopUp(year, category) {
    var popUp = document.getElementById('popup-' + year);
    if (popUp.style.display === 'none' || popUp.style.display === '') {
        popUp.style.display = 'block';
    } else {
        popUp.style.display = 'none';
    }

    // Generate the route based on year and category
    var route = "{{ route('menu.aqarReport', ['period' => ':year', 'category' => ':category']) }}"
        .replace(':year', year)
        .replace(':category', category);

    console.log(route); // Check the generated route in the console
}
 </script>
