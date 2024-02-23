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
                                <h3 class="breadcrumb__title">{{$head}}</h3>
                                <div class="breadcrumb__list">
                                    <span><a href="{{ route('index') }}">Home</a></span>
                                    <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                    <span>{{$head}}</span>
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
								<h4>{{$titlehead}}</h4>
								<br>
									<div class="col-lg-12">
    <br>
    <table class="table table-bordered" id="cells-list">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
     <tbody>
    @if(!empty($subfolder))
        @foreach($subfolder as $subfolderItem)
            <tr>
                <td>
                    <a href="{{ route('menu.aqarfiles', ['id' => $subfolderItem->id,'period' => $period,'parentid' => $parentid,'category' => $head]) }}">
                         {{ $subfolderItem->subfoldertitle }}
                    </a>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="1">No Folders found.</td>
        </tr>
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
