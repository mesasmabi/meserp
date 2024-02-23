@extends('layouts.front_end.default')
@section('content')

<style>
.policyview a{
	color:green;
}
.policyview td{
	font-size:16px;
}
.titileviewwpolicy{
	font-size:30px;
}
</style>

 <section
                class="breadcrumb__area include-bg breadcrumb__area breadcrumb__space"
                data-background="{{asset('front_end/assets/img/breadcrumb/breadcam-bg-1.png')}}"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__content text-center p-relative z-index-1">
                                <h3 class="breadcrumb__title">QUALITY POLICY</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>QUALITY POLICY</span>
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
                                    <div class="col-xxl-12"> 
									  <div class="row">
										  <div class="col-lg-12 abtmestext">
											<h4>QUALITY POLICY</h4>
											
											
												<div class="col-lg-12  pb-10">
										            <img src="{{asset('front_end/assets/img/about-us/qualitypolicy.jpg')}}" alt="" class="img-fluid" />
                                                 </div>
                                                 <h6>We at MES ASMABI COLLEGE are committed to acheive excellence through :<h6>
                                                 
												 
												 
												 <h2 class="text-center titileviewwpolicy">INTERNAL QUALITY ASSURANCE CELL <br>
													MES ASMABI COLLEGE, P VEMBALLUR <br>
													POLICY DOCUMENTS</h2>
                                                
												<div class="row mt-2">
                                                    <div class="col-lg-12">
    													<table class="table policyview table-bordered ">
															<thead>
																<tr>
																	<th>Sl No</th>
																	<th>Name of the policy</th>
																	<th>Teacher in Charge</th>
																</tr>
															</thead>
															<tbody>
<tr><td>1</td> <td> <a href="{{asset('front_end/assets/pdf/1. Research Policy.pdf')}}" target="_blank">Research & Publication Policy </a></td><td> Dr Amitha Bcchan </td></tr>
<tr><td>2 </td> <td> <a href="{{asset('front_end/assets/pdf/2.research promotion policy.pdf')}}" target="_blank">Research Promotion  </a></td> <td> Dr Dhanya</td></tr>
<tr><td>3 </td> <td><a href="{{asset('front_end/assets/pdf/3. CODE of Conduct_merged.pdf')}}" target="_blank">Policy on code of conduct & Code of Ethics  </a></td><td> Ms Jameelathu K A</td></tr>
<tr><td>4 </td> <td><a href="{{asset('front_end/assets/pdf/4. IT POLICY.pdf')}}" target="_blank">IT policy </a></td> <td>
Ms Jabin T H & Dr. K
Kesavan</td></tr>
<tr><td>5 </td> <td><a href="{{asset('front_end/assets/pdf/5. green campus.pdf')}}" target="_blank">Green Policy </a></td> <td>
Ms Shemi C B & Sri.
Muhammad Areej</td></tr>
<tr><td>6 </td> <td><a href="{{asset('front_end/assets/pdf/6.Waste management.pdf')}}" target="_blank">Waste Management Policy  </a></td> <td>Dr Ansar E B</td></tr>
<tr><td>7 </td> <td><a href="{{asset('front_end/assets/pdf/7. Scholorship policy.pdf')}}" target="_blank">Scholarship policy  </a></td> <td> Ms Nazeema K N</td></tr>
<tr><td>8 </td> <td><a href="{{asset('front_end/assets/pdf/8. Library policy final.pdf')}}" target="_blank">Library Policy  </a></td> <td> Ms Swaliha</td></tr>
<tr><td>9 </td> <td><a href="{{asset('front_end/assets/pdf/9. consultancy .pdf')}}" target="_blank">Consultancy Policy  </a></td> <td>Mr Lathief Penath</td></tr>
<tr><td>10</td> <td><a href="{{asset('front_end/assets/pdf/10. STAFF POLICY.pdf')}}" target="_blank">Staff Development Policy  </a></td> <td>Dr Sanand C S & Sri.
Moideen</td></tr>
<tr><td>11 </td> <td><a href="{{asset('front_end/assets/pdf/11. Administrative policy.pdf')}}" target="_blank">Office administration policy  </a></td> <td>
Dr. Sanjeev Kumar, Sri.
Moideen & Sri
Sadharudheen</td></tr>
<tr><td>12 </td> <td><a href="{{asset('front_end/assets/pdf/12. Account & Trans Policy.pdf')}}" target="_blank">(Accountability and transparency policy) </a> </td> <td>Smt. Sabitha MM</td></tr>



<tr><td>13 </td> <td><a href="{{asset('front_end/assets/pdf/13. Divyangjan.pdf')}}" target="_blank">Divyanjan Policy </a></td> <td>Dr Sakkeena</td></tr>
<tr><td>14</td> <td><a href="{{asset('front_end/assets/pdf/14. e governance.pdf')}}" target="_blank"> E Governance Policy </a></td> <td>Ms Shiney C N</td></tr>
<tr><td>15 </td> <td><a href="{{asset('front_end/assets/pdf/15. e payment .pdf')}}" target="_blank">E Payment policy </a></td> <td>Ms Deepa K A</td></tr>
<tr><td>16</td> <td><a href="{{asset('front_end/assets/pdf/16.Energy and Environmental .pdf')}}" target="_blank"> Environmental and Energy policy </a></td> <td>Dr Jisha K C</td></tr>
<tr><td>17</td> <td> <a href="{{asset('front_end/assets/pdf/17. Mentoring policy Final.pdf')}}" target="_blank">Mentoring policy and procedure </a></td> <td>Dr Jeena P M</td></tr>
<tr><td>18 </td> <td><a href="{{asset('front_end/assets/pdf/18. PLAGIARISM.pdf')}}" target="_blank">Policy against plagiarism </td> <td>Dr Reshmi S</a></td></tr>
<tr><td>19 </td> <td><a href="{{asset('front_end/assets/pdf/19. Curriculum Enrichment Policy.pdf')}}" target="_blank">Curriculum enrichment policy </a></td> <td>Dr Amitha P Mani</td></tr>
<tr><td>20 </td> <td><a href="{{asset('front_end/assets/pdf/20. GENDER POLICY.pdf')}}" target="_blank">Gender and equity Policy </a></td> <td>Smt. Veenalakshmi U</td></tr>
<tr><td>21 </td> <td><a href="{{asset('front_end/assets/pdf/21. Maintanance Policy.pdf')}}" target="_blank">Maintenance policy </a></td> <td>Ms Nasreen A & Jaseer</td></tr>
<tr><td>22 </td> <td><a href="{{asset('front_end/assets/pdf/Security policyAbfinal.pdf')}}" target="_blank">Safety and Security Policy </a></td> <td>Cp Bindil Balan</td></tr>
<tr><td>23 </td> <td><a href="{{asset('front_end/assets/pdf/23. Quality Policy.pdf')}}" target="_blank">Quality policy</a></td> <td> Dr Shafeer P S</td></tr>
<tr><td>24 </td> <td><a href="{{asset('front_end/assets/pdf/Grevence policy.pdf')}}" target="_blank">Greivance Redressal Policy</td> <td> Dr Reena Mohammed</a></td></tr>
<tr><td>25 </td> <td><a href="{{asset('front_end/assets/pdf/25. Anti Ragging .pdf')}}" target="_blank">Anti-Ragging policy</a></td> <td> Shibu A Nair</td></tr>


<tr><td>26 </td> <td><a href="{{asset('front_end/assets/pdf/26. Extension outreach .pdf')}}" target="_blank">Policy on extension and outreach </a></td> <td>Dr. Princy Francis & Mr
Balasubramanian</td></tr>
<tr><td>27 </td> <td><a href="{{asset('front_end/assets/pdf/27. Alumni association.pdf')}}" target="_blank">Policy on alumni activities</a> </td> <td>Mona VM & Dr. KP
Sumedhan</td></tr>
<tr><td>28 </td> <td><a href="{{asset('front_end/assets/pdf/28. campus development policy.pdf')}}" target="_blank">Campus development policy </a></td> <td>Sri. Muhammad Areej</td></tr>
<tr><td>29 </td> <td><a href="{{asset('front_end/assets/pdf/29. Innovation policy.pdf')}}" target="_blank">Policy on innovation ecosystem</a></td> <td> Smt. Chithra P & Dr.
Dhanya K</td></tr>
<tr><td>30 </td> <td><a href="{{asset('front_end/assets/pdf/30. Student development Policy.pdf')}}" target="_blank">Students development policy</a></td> <td> Dr. Dhanya K</td></tr>
<tr><td>31 </td> <td><a href="{{asset('front_end/assets/pdf/31. ResoursemobilisationFinal.pdf')}}" target="_blank">Resource mobilisation policy  </a></td> <td> Dr. Sefiya K M</td></tr>
															</tbody>
														</table>
    												</div>
										        </div>
												
										     </div>
										  </div>
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