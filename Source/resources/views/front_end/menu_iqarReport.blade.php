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
                                <h3 class="breadcrumb__title">Links</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>Links</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            <!-- about area start -->
            <div class="tp-about__section-2 pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="classic-blog-post blog-details-wrap">
                                <div class="blog-content">
								
								<br>
									<div class="col-lg-12">
    <br>
  <table class="table table-bordered" id="users-list">
    <thead>
        <tr>
            <th>File Name</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($list))
            @foreach($list as $val)
                <tr>
                    @if(!empty($val->pdf_path) && (pathinfo($val->pdf_path, PATHINFO_EXTENSION) === 'pdf' ||  pathinfo($val->pdf_path, PATHINFO_EXTENSION) === 'PDF'))
                        <td>
                            
                            <iframe src="{{ url('public/uploads/cell/'.$val->pdf_path) }}" width="100%" height="600"></iframe>
                        </td>
                    @endif
                </tr>
            @endforeach
       
        @endif
    </tbody>
</table>

</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
