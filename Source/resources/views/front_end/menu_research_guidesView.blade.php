@extends('layouts.front_end.default')
@section('content')

<!-- breadcrumb area start -->

            <section class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space" data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">Research Guides</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Research Guides</span>
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
                                               <h4>LIST OF RESEARCH GUIDES</h4>
											   
											
													
												<br><br><br>	
                                               <table class="table table-bordered mt-5" id="users-list">
                                                    <thead>
                                                        <tr>
                                                            <th>DEPARTMENT</th>
                                                            <th>RESEARCH GUIDE</th>
															<th>Subject</th>
															<th>CV</th>
															<th>Image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@if(!empty($researchguide))
					                                @foreach($researchguide as $row)
                                                        <tr>
                                                            <td><a href="{{url('research_fellow/'.$row->id)}}">{{$row->domain}}</a></td>
                                                            <td><a href="{{url('research_fellow/'.$row->id)}}">{{$row->supervisor_name}}</a></td>
															  <td><a href="{{url('research_fellow/'.$row->id)}}">{{$row->subject}}</a></td>
															<td>@if(!empty($row->resume))
																				<a href="{{asset('public/uploads/facultyresume/' . $row->resume) }}" target="_blank"><img src="{{asset('front_end/assets/img//pdf.png')}}" width="60px" height="auto"></a>
																			@else
																				No resume available
																			@endif</td>
													<td>@if(!empty($row->picture))<img src="{{ asset('public/uploads/facultyimg/' . $row->picture) }}" alt="ResearchGuide-image" height="100px">
																	
																			@endif	</td>
                                                      
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