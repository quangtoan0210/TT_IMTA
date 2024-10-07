@extends('layouts.client')
@section('content')
     <!-- hero slider area start -->
     <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="{{asset('assets/client/img/slider/home1-slide2.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <h2 class="slide-title">Family Jewelry <span>Collection</span></h2>
                                    <h4 class="slide-desc">Designer Jewelry Necklaces-Bracelets-Earings</h4>
                                    <a href="shop.html" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="{{asset('assets/client/img/slider/home1-slide3.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-2 float-md-end float-none">
                                    <h2 class="slide-title">Diamonds Jewelry<span>Collection</span></h2>
                                    <h4 class="slide-desc">Shukra Yogam & Silver Power Silver Saving Schemes.</h4>
                                    <a href="shop.html" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="{{asset('assets/client/img/slider/home1-slide1.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-3">
                                    <h2 class="slide-title">Grace Designer<span>Jewelry</span></h2>
                                    <h4 class="slide-desc">Rings, Occasion Pieces, Pandora & More.</h4>
                                    <a href="shop.html" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item end -->
        </div>
    </section>
    <!-- hero slider area end -->

    <!-- twitter feed area start -->
    
    <!-- twitter feed area end -->

    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Free Shipping</h6>
                            <p>Free shipping all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Support 24/7</h6>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Money Return</h6>
                            <p>30 days for free return</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>100% Payment Secure</h6>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row row-20 mtn-20">
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="{{asset('assets/client/img/banner/img2-top.jpg')}}" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">BEAUTIFUL</h5>
                            <h2 class="banner-text2">Wedding<span>Rings</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="{{asset('assets/client/img/banner/img2-top.jpg')}}" alt="product banner">
                        </a>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1">EARRINGS</h5>
                            <h2 class="banner-text2">Tangerine Floral <span>Earring</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="{{asset('assets/client/img/banner/img3-top.jpg')}}" alt="product banner">
                        </a>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1">NEW ARRIVALLS</h5>
                            <h2 class="banner-text2">Pearl<span>Necklaces</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="{{asset('assets/client/img/banner/img4-top.jpg')}}" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">NEW DESIGN</h5>
                            <h2 class="banner-text2">Diamond<span>Jewelry</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản phẩm của chúng tôi</h2>
                        <p class="sub-title">Thêm sản phẩm của chúng tôi vào danh sách hàng tuần</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab menu start -->
                     
                        <!-- product tab menu end -->

                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    @foreach ($listSanPham as $index => $item)
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <a href="{{route('products.detail',$item->id)}}"><img class="" src="{{ Storage::url($item->hinh_anh) }}" alt="product"></a>
                                            </a>
                                          
                                        </figure>
                                        <div class="product-caption text-center">
                                            <h6 class="product-name">
                                                <a href="product-details.html">{{$item->name}}</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">{{number_format($item->gia_san_pham)}}</span>
                                                <span class="price-old"><del>{{ empty($item->gia_khuyen_mai) ? 0 : number_format($item->gia_khuyen_mai) }}</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- product item end -->

                                    <!-- product item start -->
                                   
                                    <!-- product item end -->
                                </div>
                            </div>
                           
                                 
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- product banner statistics area start -->
    <section class="product-banner-statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-banner-carousel slick-row-10">
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="{{asset('assets/client/img/banner/img1-middle.jpg')}}" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">BRACELATES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="{{asset('assets/client/img/banner/img2-middle.jpg')}}" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">BRACELATES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="{{asset('assets/client/img/banner/img3-middle.jpg')}}" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">BRACELATES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="{{asset('assets/client/img/banner/img4-middle.jpg')}}" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">BRACELATES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product banner statistics area end -->

    <!-- featured product area start -->
    <section class="feature-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản phẩm nổi bật</h2>
                        <p class="sub-title">Add Sản phẩm nổi bật để xếp hạng</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
           
        </div>
    </section>
    <!-- featured product area end -->
    <div class="row">
        <div class="col-12">
            <div class="product-container">
                <!-- product tab menu start -->
             
                <!-- product tab menu end -->

                <!-- product tab content start -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                            @foreach ($listSanPham as $index => $item)
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <a href="{{route('products.detail',$item->id)}}"><img class="" src="{{ Storage::url($item->hinh_anh) }}" alt="product"></a>
                                    </a>
                                    <div class="cart-hover">
                                    </div>
                                </figure>
                                <div class="product-caption text-center">
                                    <h6 class="product-name">
                                        <a href="product-details.html">{{$item->name}}</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-regular">{{number_format($item->gia_san_pham)}}</span>
                                        <span class="price-old"><del>{{ empty($item->gia_khuyen_mai) ? 0 : number_format($item->gia_khuyen_mai) }}</del></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- product item end -->

                            <!-- product item start -->
                           
                            <!-- product item end -->
                        </div>
                    </div>
                   
                         
                </div>  
            </div>
        </div>
    </div>
    <!-- testimonial area start -->
   
    <!-- testimonial area end -->

    <!-- group product start -->
  
    <!-- group product end -->

    <!-- latest blog area start -->
  
    <!-- latest blog area end -->

    <!-- brand logo area start -->
    <div class="brand-logo section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo-carousel slick-row-10 slick-arrow-style">
                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/1.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/2.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/3.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/4.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/5.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="{{asset('assets/client/img/brand/6.png')}}" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection