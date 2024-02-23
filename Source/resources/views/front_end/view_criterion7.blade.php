@extends('layouts.front_end.default')
@section('content')


            <!-- breadcrumb-area-end -->

	   <section class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">CRITERION 7</h3>
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
      <section class="blog-area gray-bg pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content">
					<h4>Criterion7 - Institutional Values and Best Practices</h4>

					<h5><a href="{{ route('menu.criterion7_1') }}" target="_blank">7.1 Institutional Values and Social Responsibilities</a></h5>
					<h5><a href="{{ route('menu.criterion7_2') }}"  target="_blank">7.2 Best Practices</a></h5>
					<h5><a href="{{ route('menu.criterion7_3') }}"  target="_blank">7.3 Institutional Distinctiveness</a></h5>
								
                                    
                                    
                                    
                                   
                                  
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