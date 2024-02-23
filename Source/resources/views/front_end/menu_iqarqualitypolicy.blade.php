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
                                <h3 class="breadcrumb__title">IQAR Quality Policy</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>IQAR Quality Policy</span>
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
                                            <h4>IQAC ACTIVITIES</h4><br>
                                          <br>
                                           
    @if(count($category) > 0) <!-- Check if $category is not empty -->
    @foreach($category as $val)
        <div class="row">
            <div class="col-lg-12">
                <ul class="blog-details-list">
                    <li>{{$val->quality_ranking}} </li>
					 <ul>
                            <li><a href="{{ route('menu.activityPdf', ['id' => $val->id]) }}">2018-2019</a></li>
                            <li><a href="{{ route('menu.activityPdf', ['id' => $val->id]) }}">2019-2020</a></li>
                            <li><a href="{{ route('menu.activityPdf', ['id' => $val->id]) }}">2020-2021</a></li>
                            <li><a href="{{ route('menu.activityPdf', ['id' => $val->id]) }}">2021-2022</a></li>
                            <li><a href="{{ route('menu.activityPdf', ['id' => $val->id]) }}">2022-2023</a></li>
                        </ul>
                    </ul>
                </ul>
            </div>
        </div>
    @endforeach

@endif

                                           
                                        </div>
                                       
                                        
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection