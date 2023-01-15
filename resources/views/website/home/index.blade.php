@extends('website.master')
@section('title')
    iCommerce Best Solution
@endsection

@section('body')
{{--    <div class="slider-area">--}}
{{--        <!-- Slider -->--}}
{{--        <div class="block-slider block-slider4">--}}
{{--            <ul class="" id="bxslider-home4">--}}
{{--                <li>--}}
{{--                    <img src="{{asset('/')}}website/img/h4-slide.png" alt="Slide">--}}
{{--                    <div class="caption-group">--}}
{{--                        <h2 class="caption title">--}}
{{--                            iPhone <span class="primary">6 <strong>Plus</strong></span>--}}
{{--                        </h2>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--                <li><img src="{{asset('/')}}website/img/h4-slide2.png" alt="Slide">--}}
{{--                    <div class="caption-group">--}}
{{--                        <h2 class="caption title">--}}
{{--                            Nike <span class="primary">Original <strong>bag</strong></span>--}}
{{--                        </h2>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--                <li><img src="{{asset('/')}}website/img/h4-slide3.png" alt="Slide">--}}
{{--                    <div class="caption-group">--}}
{{--                        <h2 class="caption title">--}}
{{--                            Apple <span class="primary">Store <strong>Ipod</strong></span>--}}
{{--                        </h2>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--                <li><img src="{{asset('/')}}website/img/h4-slide4.png" alt="Slide">--}}
{{--                    <div class="caption-group">--}}
{{--                        <h2 class="caption title">--}}
{{--                            Apple <span class="primary">Store <strong>Ipod</strong></span>--}}
{{--                        </h2>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <!-- ./Slider -->--}}
{{--    </div> <!-- End slider area -->--}}

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                @foreach($products as $product)
                                <div class="card card-body my-3">
                                    <h3>{{$product->name}}</h3>
                                </div>
                                <div class="product-f-image">
                                    <img src="{{$product->image}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{route('detail' , ['id' => $product->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->


@endsection
