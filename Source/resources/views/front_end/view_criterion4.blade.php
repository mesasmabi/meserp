@extends('layouts.front_end.default')
@section('content')


            <!-- breadcrumb-area-end -->

	   <section class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">CRITERION 4</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>IQAC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->


            <!-- featured-courses -->
            <!-- blog-area -->
        <section class="blog-area gray-bg pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content">
                                    <h4>Criterion 4 - Infrastructure and Learning Resources</h4>

                                    <ul class="blog-details-list">
                                        <li><a href="{{ route('menu.criterion4_1') }}" target="_blank">4.1 Physical Facilities</a></li>

                                        <li><a href="{{ route('menu.criterion4_2') }}" target="_blank">4.2 Library as a learning Resource</a></li>

                                        <li><a href="{{ route('menu.criterion4_3') }}" target="_blank">4.3 IT Infrastructure</a></li>

                                        <li><a href="{{ route('menu.criterion4_4') }}" target="_blank">4.4 Maintenance of Campus Infrastructure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<style>
.blog-content h5{
   color:#000 ;
}
.blog-content h5:hover{
   color:#002d58;
}

</style>
@endsection