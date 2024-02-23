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
                                        <div class="col-lg-12">
                                            <div class="blog-content">
                                               

                                                <table class="table table-bordered" id="users-list">
                                                    <thead>
                                                        <tr>
                                                           
                                                            <th>TITLE</th>
															
															<th>FROM DATE</th>
															
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@if(!empty($eventslist))
					 @foreach($eventslist as $row)
                                                        <tr> 
                                                           <td><a href="{{ url('events/'.$row->id.'/'.$pictype) }}">{{$row->title}}</td>
                                                           <!--<td><a href="{{ url('cellevent_details/'.$row->id) }}">{{$row->title}}</td>-->

</td>
															<td>{{$row->from_date}}</td>
                                                         
													</a></td												
                                                        </tr>

                                                     
                                                      @endforeach	
                                                      @endif		
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 
           
            <!-- about area end -->

@endsection