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
                                <h3 class="breadcrumb__title">Minutes and ATR</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Minutes and ATR</span>
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
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>MINUTES OF IQAC MEETINGS</h4>
                                            <ul class="blog-details-list">
											 <li><a href="{{ route('menu.aqarReport', ['period' => '2018-2019', 'category' => 'Minutes']) }}">2018-2019</a></li>
                                                 <li><a href="{{ route('menu.aqarReport', ['period' => '2019-2020', 'category' => 'Minutes']) }}">2019-2020</a></li>
                                                <li><a href="{{ route('menu.aqarReport', ['period' => '2020-2021', 'category' => 'Minutes']) }}">2020-2021</a></li>

                                               <li><a href="{{ route('menu.aqarReport', ['period' => '2021-2022', 'category' => 'Minutes']) }}">2021-2022</a></li>
                                                <li><a href="{{ route('menu.aqarReport', ['period' => '2022-2023', 'category' => 'Minutes']) }}">2022-2023</a></li>

                                            
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