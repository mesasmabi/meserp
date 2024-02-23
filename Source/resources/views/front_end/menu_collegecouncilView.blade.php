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
                                <h3 class="breadcrumb__title">Staff Council</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Staff Council</span>
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
                                            <h4>COLLEGE COUNCIL</h4>
                                            <p>The College Council consists of the Principal, all Heads of the Departments, two representatives from the teaching staff and College Librarian. It is an advisory body on all internal and academic affairs of the college.</p>
                                        
                                            <h3><b>The members of the Council are:</b></h3>
											
											<br><br>
											
											<h4>Principal (President)</h4>
                                            <ul class="blog-details-list">
                                                <li>Dr. A. Biju ,Principal (President)</li>
                                            </ul>
											<br>
											<h4>Heads of the Departments</h4>
											<div class="row">
												<div class="col-lg-6">
													<ul class="blog-details-list">
														<li>Dr Basheer P T (Arabic)</li>
														<li>Dr K Kesavan (Aquaculture)</li>
														<li>Mr Mohammed Areej E M (Biochemistry)</li>
														<li>Dr Girija T P (Botany)</li>
														<li>Dr Ansar E B (Chemistry)</li>
														<li>Ms Chithra P (Commerce)</li>
														<li>Dr Haseena V A (Economics)</li>
														<li>Dr Reena Mohamed P M (English)</li>
														<li>Dr Ranjith M (Hindi)</li>
														<li>Mr Semeerkhan P (History)</li>
														<li>Dr Jaisy David (Malayalam)</li>
														<li>Ms Nasreen A (Mathematics)</li>
														<li>Dr Sheena P A (Physics)</li>
													</ul>
												</div>		
												<div class="col-lg-6">	
												<ul class="blog-details-list">
														<li>Dr Sanand C. Sadanandakumar (Political Science)</li>
														<li>Lt M B Bindil (Physical Education)</li>
														<li>Mr Suseel T S  (Zoology)</li>
														<li>Dr K P Sumedhan, Director, Self-Financing Departments</li>
														<li>Dr Ramisha K C (B.Com. Computer Applications)</li>
														<li>Ms Shiji T S (B.Com. Finance)</li>
														<li>Dr Shahija V A (B B A)</li>
														<li>Ms Jabin T H (Computer Applications)</li>
														<li>Ms Sunaina M Nazar (Mass Communication)</li>
														<li>Mr Lathif Penath (Psychology)</li>
														<li>Dr Sayana K A (B.Voc. Fish Processing Technology)</li>
														<li>Mr Mynag Suresh (B.Voc. Digital Film Production) </li>
														<li>Mr Abdul Yafiz K M (B.Voc. Logistics Management) </li>
														<li>Ms Shafna A S (B.Voc.Tourism & Hospitality Management)</li>
													</ul>
												</div>
                                            </div>
											<h4 class="pt-25">Nominated Members</h4>
                                            <ul class="blog-details-list">
                                                <li>Dr Amitha P Mani </li>
                                                <li>Dr Amitha Bachan K H</li>
                                            </ul>
											<br>
											<h4>Librarian</h4>
                                            <ul class="blog-details-list">
                                                <li>Ms Saliha P I</li>
                                            </ul>
											<br>
											
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