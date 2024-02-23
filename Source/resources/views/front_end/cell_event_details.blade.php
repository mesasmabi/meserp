@extends('layouts.front_end.default')
@section('content')
<style>
.mainperson h4 {
    font-size: 16px;margin-bottom: 0;
    padding-top: 1px;
    border: none;
}
.mainperson p {
    font-size: 12px !important;
}
.tp-accordion .accordion-button:not(.collapsed)::after {
    color: white;
    width: auto;
    height: auto;
    content: "\f068";
    transform: rotate(0deg);
    width: 40px;display:none;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    background-color: var(--tp-theme-primary);
}
.tp-accordion .accordion-button::after {
    position: absolute;
    right: 10px;
    content: "\f067";
    font-weight: 300;
    font-family: var(--tp-ff-fontawesome);
    background-image: none;
    font-size: 18px;
    color: var(--tp-theme-primary);
    background-color: rgb(255, 241, 243);
    width: 40px;
    height: 40px;display:none;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
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
                                <h3 class="breadcrumb__title">@if(!empty($events)){{$events[0]->title}}@endif</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Cell</span>
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
                                        <div class="col-lg-12">@php
										
        $pic = ""; // Initialize $pic variable
        if(!empty($events) && count($events) > 0) {
            $pic = $events[0]->picture;
        }
    @endphp
                                    <div class="row">
									 @if(!empty($pic))
            <img src="{{ url('public/uploads/faculty/' . $pic) }}" class="img-fluid" alt="Event Picture">
      
        @endif
											<br><br>
                                            <h4 class="mt-3">@if(!empty($events)){{$events[0]->title}}@endif</h4>
                                            <p class="text-justify">@if(!empty($events)){!!$events[0]->description!!}@endif</p>
                                        </div>
                                    
                                    </div>    
                                        
                                   
                                        <br><br>
										
										
										<div class="col-lg-12">
                                          <div class="row">
                                           
                         
                             

									@if(!empty($events))
                                 
                                       
                                    <div class="row">  
  <h4>Pictures</h4> 									
                                        @foreach($events as $row)
                                        <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    						<div class="card-box">
                        						<div class="card-text">
                        						   <div class="card-img">
                        						       <img src="{{url('public/uploads/faculty/'.$row->picture)}}" class="img-fluid" alt="#">
                        						   </div> 
                        						  <div class="card-data">
                        							<p class="data-text">{{$row->from_date}}</p>
                        						  </div>
                        
                        						  <div class="card-title">
                        							<h3> {{$row->title}}</h3>
                        						  </div>  
                        						 <!-- <div class="card-btn">
                        							  <a href="{{url('event_details_cell/'.$cellid)}}" class="btn btn-arrow">
                        								<i class="fa fa-arrow-right" aria-hidden="true"></i>
                        							  </a>
                        						  </div>-->
                        						</div>
                    					    </div>
                    					</div>
                                        @endforeach
                                    @endif
                                        @if(!empty($upcoming))
											 <h4> Upcoming Activities</h4> 
                    					  <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    						<div class="card-box">
                        						<div class="card-text">
                        						   <div class="card-img">
                        						       <img src="{{url('public/uploads/faculty/'.$upcoming[0]->picture)}}" class="img-fluid" alt="#">
                        						   </div> 
                        						  <div class="card-data">
                        							<p class="data-text">{{$upcoming[0]->from_date}}</p>
                        						  </div>
                        
                        						  <div class="card-title">
                        							<h3>{{$upcoming[0]->title}}</h3>
                        						  </div>
                        						<div class="card-btn">
                        							    <a href="{{url('event_details_upcoming_cell/'.$cellid)}}" class="btn btn-arrow">
                        								<i class="fa fa-arrow-right" aria-hidden="true"></i>
                        							  </a>
                        						  </div>
                        						</div>
                    					    </div>
                    					  </div>
                                        @endif
                    				</div>
                                        
                                           <br><br>
                                    @if(!empty($reports))
                                    <div class="row">
                                        <div class="col-lg-12 mt-3 tblsecdet">
                                           <h4> PROGRAMME DETAILS</h4>
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                    <td></td>
                                                    <th>Date of introduction</th>
                                                    <th>Download reports</th>
                                                </tr>
                                              </thead>
                                            <tbody> 
                                                @foreach($reports as $row) 
                                             <tr>
                                              <td><p>{{$row->title}}</p></td>
                                              <td>{{$row->from_date}}</td>
                                              @if(!empty($row->uploadfile))<td>    <a href="{{url('public/uploads/facultyfile/'.$row->uploadfile)}}"  target="_blank">@if(!empty($row->uploadfile))<img src="{{asset('front_end/assets/img//pdf.png')}}" width="60px" height="auto">@endif</a></td> @endif
                                             

											</tr>
                                               @endforeach 
                                            </tbody>
                                            </table>
                                        </div>
                                    </div> 
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