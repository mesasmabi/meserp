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
                                <h3 class="breadcrumb__title">
								{{$head}}</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>{{$head}}</span>
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
                            <div class="row classic-blog-post blog-details-wrap">
                                <div class="col-lg-6 blog-content">
								<h4>{{$titlehead}}</h4>
								<br>
								@if(!empty($period))
    @php
        $periodChunks = collect($period)->chunk(4);
    @endphp

    @foreach($periodChunks as $chunk)
        <div class="row">
            @foreach($chunk as $periodObject)
                <div class="col-lg-12">
                    <ul class="blog-details-list">
                     <li><a href="{{ route('menu.aqarParent', ['period' => $periodObject->period,'category' => $head]) }}">{{$periodObject->period }}</a></li>

                    </ul>
                </div>
            @endforeach
        </div>
    @endforeach
@endif
</div>
			@if ($head == 'AQAR')
				
                                <div class="col-lg-6  blog-content">
								<h4>ANNUAL QUALITY ASSURANCE REPORT (AQAR)</h4>
								<br>
								
        <div class="row">
           
                <div class="col-lg-12">
                    <ul class="blog-details-list">
    <li><a href="{{ route('menu.aqarReport', ['period' => '2018-2019', 'category' => 'AQAR']) }}">AQAR REPORT 2018-2019</a></li>
</ul>
                </div>
             <div class="col-lg-12">
                    <ul class="blog-details-list">
                     <li><a href="{{ route('menu.aqarReport', ['period' => '2019-2020', 'category' => 'AQAR']) }}">AQAR REPORT 2019-2020</a></li>

                    </ul>
                </div>
				   <div class="col-lg-12">
                    <ul class="blog-details-list">
                     <li><a href="{{ route('menu.aqarReport', ['period' => '2020-2021', 'category' => 'AQAR']) }}">AQAR REPORT 2020-2021</a></li>

                    </ul>
                </div>
				   <div class="col-lg-12">
                    <ul class="blog-details-list">
                     <li><a href="{{ route('menu.aqarReport', ['period' => '2021-2022', 'category' => 'AQAR']) }}">AQAR REPORT 2021-2022</a></li>

                    </ul>
                </div>
				   <div class="col-lg-12">
                    <ul class="blog-details-list">
                     <li><a href="{{ route('menu.aqarReport', ['period' => '2022-2023', 'category' => 'AQAR']) }}">AQAR REPORT 2022-2023</a></li>

                    </ul>
                </div>
        </div>



                                </div>
			@else
				
			
			
                                <div class="col-lg-6 blog-content">
								<h4>SSR DOCUMENTS</h4>
								<br>
								
        <div class="row">
           
                <div class="col-lg-12">
                    <ul class="blog-details-list">
    <li><a href="{{ route('menu.ssReport', ['cycle' => '1st cycle', 'category' => 'SSR']) }}">1st Cycle</a></li>
</ul>
                </div>
             
			<div class="col-lg-12">
                    <ul class="blog-details-list">
    <li><a href="{{ route('menu.ssReport', ['cycle' => '2nd cycle', 'category' => 'SSR']) }}">2nd Cycle</a></li>
</ul>
                </div>	 
				<div class="col-lg-12">
                    <ul class="blog-details-list">
    <li><a href="{{ route('menu.ssReport', ['cycle' => '3rd cycle', 'category' => 'SSR']) }}">3rd Cycle</a></li>
</ul>
                </div>
				
        </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endif
@endsection