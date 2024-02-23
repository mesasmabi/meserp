@extends('layouts.front_end.default')
@section('content')
<style>
.blog-content h4 {
    font-size: 15px !important;
    margin-bottom: 20px!important;
    font-weight: bold;
    border-left: 4px solid #21b621;
    padding-left: 0.7rem;
    text-transform: capitalize!important;
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
                                <h3 class="breadcrumb__title">{{$type}}</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>{{$type}}</span>
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
									@if(!empty($infra))
					 @foreach($infra as $row)
                                        <div class="col-lg-4">
                                            
											<a href="{{url('cell/'.$row->id)}}"><h4>{{$row->name_of_the_cell}}</h4></a>
											

											
                                           
                                        </div><br><br>
										  @endforeach	
                     @endif		
                                     </div>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
            <!-- about area end -->

@endsection