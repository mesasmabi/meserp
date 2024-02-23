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
					<h3 class="breadcrumb__title">Publications</h3>
					<div class="breadcrumb__list">
						<span><a href="{{ route('index') }}">Home</a></span>
						<span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
						<span>Publications</span>
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
						<div class="row pb-5" >
						
							<a class="card text-center col-lg-4" href="{{ route('menu.journal') }}">
								<img class="pt-3" src="{{asset('front_end/assets/img/about-us/Journal Publication.jpg')}}" alt="">
								<h5>JOURNAL PUBLICATION</h5>
							</a>
							<a class="card text-center col-lg-4" href="{{ route('menu.book') }}">
								<img class="pt-3"  src="{{asset('front_end/assets/img/about-us/book publication.jpg')}}" alt="">
								<h5>BOOK PUBLICATION</h5>
							</a>
							<a class="card text-center col-lg-4" href="{{ route('menu.patent') }}">
								<img  class="pt-3" src="{{asset('front_end/assets/img/about-us/patent.jpg')}}" alt="">
								<h5>PATENT</h5>
							</a>
							
						 </div>
						 <br><br><br>
						<div class="row pt-5"> 
						<div class="card-body bg-light">
						<h1 class="h3 text-center">List of Publication</h1>
						<br>						
						 <div  class="owl-carousel owl-carouseldeo owl-theme">
							<div class="item">
								<h5>The Historical Injustice to the Forest Dwelling Community Continued: The process, performance and major violation in the one decade of implementation of Forest Right Act 2006 in Kerala.</h5>
							</div>
							<div class="item">
								<h5>The Historical Injustice to the Forest Dwelling Community Continued: The process, performance and major violation in the one decade of implementation of Forest Right Act 2006 in Kerala.</h5>
							</div>
							<div class="item">
								<h5>The Historical Injustice to the Forest Dwelling Community Continued: The process, performance and major violation in the one decade of implementation of Forest Right Act 2006 in Kerala.</h5>
							</div>
							<div class="item">
								<h5>The Historical Injustice to the Forest Dwelling Community Continued: The process, performance and major violation in the one decade of implementation of Forest Right Act 2006 in Kerala.</h5>
							</div>
							<div class="item">
								<h5>The Historical Injustice to the Forest Dwelling Community Continued: The process, performance and major violation in the one decade of implementation of Forest Right Act 2006 in Kerala.</h5>
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

<script>
     $(function() {
  // Owl Carousel
  var owl = $(".owl-carouseldeo");
  owl.owlCarousel({
    items: 1,
    margin:10,
    loop: true,
    nav: true,
    autoplay: {
			delay: 2000,
		},
  });
});
</script>