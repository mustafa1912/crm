@extends('web.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ __('userHome.single_product_css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/owlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/owlCarousel/owl.theme.default.css') }}">
    <main id="main">
        <section class="cat-Name">
            <img src="{{ asset('public/web/images/header.png') }} " alt="" title="">
        </section>
        <section>
            <div class="container ">
                <div class="row ">
                    <div class="col">
                        <div class="heding  d-flex align-items-center  heed-row">
                            <div class="box-info d-flex align-items-center">
                                <div class="line"></div>
                                <div class="box">
                                    <div class="contant">
                                        <div class="sqr "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-4 heed">
                                {{-- التسوق / بخور / بول موري --}}
                                {{-- link for products /link for category /link  for product --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">{{ __('userHome.market') }}</a></li>
                                        <li class="breadcrumb-item"><a
                                                href="#">{{ __('userHome.product_category') }}</a></li>
                                        <li class="breadcrumb-item text-white active " aria-current="page">
                                            {{ __('userHome.product_name') }}</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="right-box col-sm-12 col-md-4 position-relative">
                        <div class="box-info d-flex align-items-center">
                            <div class="box">
                                <div class="contant">
                                    <div class="sqr "></div>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="imge position-relative">
                            <img src="{{ asset('public/web/images/product1.png') }} " class="img-fluid" alt="cat name">
                            <span class="product-name p-2">بخور</span>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8  px-sm-5 px-md-5">
                        <div class="heed fs-2">
                            بول موري
                        </div>
                        <div class="box-dis d-flex align-items-center mt-5">
                            <div class="contant">
                                <div class="sqr "></div>
                            </div>
                            <p class="fs-6 text-white m-0">د.ك18.000</p>
                        </div>
                        <div class="box-dis d-flex align-items-center mt-2 mt-md-3">
                            <div class="contant">
                                <div class="sqr "></div>
                            </div>
                            <p class="fs-6 text-white m-0">سعر التولة الواحدة</p>
                        </div>
                        <div class="box-dis d-flex align-items-center mt-2 mt-md-3">
                            <div class="contant">
                                <div class="sqr "></div>
                            </div>
                            <p class="fs-6 text-white m-0">رائحة سويتية طيبة فواحةٖ وثبات عالي</p>
                        </div>
                        <div class=" text-white row m-0 controls mt-5 justify-content-between">
                            <div class="col-12 col-md-12 col-lg-4 my-1 p-0">
                                <button class="btn w-100">الاضافة الي السلة</button>
                            </div>
                            <div class="col-6 col-md-6 my-1 col-lg-4 p-0">
                                <div class="btn d-flex align-items-center center-div w-100">
                                    <button class="btn p-0"><i class="fa-solid fa-plus"></i></button>
                                    <span>2</span>
                                    <button class="btn p-0"><i class="fa-solid fa-minus"></i></button>
                                </div>
                                {{-- <button class="btn">الاضافة الي السلة</button> --}}
                            </div>
                            <div class="col-6 col-md-6 col-lg-3 my-1 p-0">
                                <button class="btn d-flex align-items-center w-100 justify-content-center btn-gap"><i
                                        class="fa-solid fa-share-nodes"></i>
                                    مشاركة</button>
                            </div>
                        </div>
                        {{-- <div class="col mt-3 rating">
                            <input value="5" name="rate" id="star5" type="radio">
                            <label for="star5"></label>
                            <input value="4" name="rate" id="star4" type="radio">
                            <label for="star4"></label>
                            <input value="3" name="rate" id="star3" type="radio">
                            <label for="star3"></label>
                            <input value="2" name="rate" id="star2" type="radio">
                            <label for="star2"></label>
                            <input value="1" name="rate" id="star1" type="radio">
                            <label for="star1"></label>
                        </div> --}}
                    </div>
                </div>
            </div>
            </div>
        </section>
        {{-- الكلمات الدلالية --}}
        <section class="Keywords py-3 ">
            <div class="container">
                <div class="row mrrr-r">
                    <div class="fs-4 text-white text-center mb-3">الكلمات الدلالية </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="owl-carousel carousel">
                            <div class="item">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="box-img">
                                        <img src="{{ asset('public/web/images/product1.png') }} " alt="product1">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="box-img">
                                        <img src="{{ asset('public/web/images/product1.png') }} " alt="product1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 border-le h-100">
                        <div class="row m-0 Keywords-btn">
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">مبخرة</button>
                            </div>
                            <div class="col-6 col-md-2 my-1">
                                <button class="btn w-100 text-white">العود</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dataSheet mt-md-3 overflow-hidden pt-5">
            <div class="container ">
                <div class="d-flex align-items-center pb-5">
                    <div class="heding">
                        <div class="box-info d-flex align-items-center">
                            <div class="line"></div>
                            <div class="box">
                                <div class="contant">
                                    <div class="sqr "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fs-2 heed ">{{ __('userHome.Product Ratings And Reviews') }}</div>
                </div>
                <div class="row cuxtom justify-content-between align-items-center">
                    <div class="col-sm-12 col-lg-4 mt-4 mt-lg-0 p-2 rounded-3 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="title contact-form p-2">
                            <form action="" class="row  justify-content-center text-center m-0" id="contact-form">
                                <h3 class="head">{{ __('userHome.Be the first to review products') }}</h3>
                                <div class="my-3">
                                    <div class="row">
                                        <div class="col-8 rating">
                                            <input value="5" name="rate" id="star5" type="radio">
                                            <label for="star5"></label>
                                            <input value="4" name="rate" id="star4" type="radio">
                                            <label for="star4"></label>
                                            <input value="3" name="rate" id="star3" type="radio">
                                            <label for="star3"></label>
                                            <input value="2" name="rate" id="star2" type="radio">
                                            <label for="star2"></label>
                                            <input value="1" name="rate" id="star1" type="radio">
                                            <label for="star1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 mb-2">
                                    <input type="text" class="form-control" placeholder="{{ __('userHome.name') }}"
                                        name="name" required="">
                                </div>
                                <div class=" col-12 mb-2">
                                    <input type="email" class="form-control" placeholder="{{ __('userHome.email') }}"
                                        name="email" required="">
                                </div>
                                <div class=" col-12 mb-2">
                                    <input type="text" class="form-control"
                                        placeholder="{{ __('userHome.message') }}" name="message" required="">
                                </div>
                                <div class="col-12 code">
                                    <div
                                        class="col-12 d-flex align-items-center justify-content-between position-relative">
                                        <div class=" col-5 mb-2 position-relative">
                                            <input type="number" class="form-control seral-number" name="user-email"
                                                oncopy="return false" oncut="return false" ondrag="return false"
                                                ondrop="return false" autocomplete="off" readonly="">
                                            <button class="btn icon-seral" type="button" aria-label="genrate-code">
                                                <i class="fa-solid fa-arrows-rotate"></i>
                                            </button>
                                        </div>
                                        <div class=" col-6 mb-2 ">
                                            <input type="number" class="form-control chick-number"
                                                placeholder="{{ __('userHome.Confirm code') }}" name="user-message"
                                                required="" onpaste="return false" oncopy="return false"
                                                oncut="return false" ondrag="return false" ondrop="return false"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 mt-2 text-start d-flex align-items-center">
                                    <button class="btn" id="submit" form="contact-form" disabled=""
                                        type="submit">{{ __('userHome.Send') }} </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8  px-sm-5 px-md-5" data-aos="fade-up" data-aos-duration="1000">
                        {{-- <div class="image">
                            <img src="{{ asset('public/web/images/Group 53 (2).png') }}" class="img-fluid"
                                alt="">
                        </div> --}}
                        <div class="d-flex align-items-center ">
                            <div class="heding">
                                <div class="box-info d-flex align-items-center">
                                    <div class="line"></div>
                                    <div class="box">
                                        <div class="contant">
                                            <div class="sqr "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-4 heed ">{{ __('userHome.Overall Rating') }} <span
                                    class="fw-bold text-white">5</span></div>
                            {{-- <div class="fs-2 fw-bold text-center text-white">5</div> --}}
                        </div>
                        <div class="row m-0">
                            <div class="box w-full mt-3">
                                <div class="rating  rating2">
                                    <input value="5" name="rate" id="star51" type="radio">
                                    <label for="star51"></label>
                                    <input value="4" name="rate" id="star41" type="radio">
                                    <label for="star41"></label>
                                    <input value="3" name="rate" id="star31" type="radio">
                                    <label for="star31"></label>
                                    <input value="2" name="rate" id="star21" type="radio">
                                    <label for="star21"></label>
                                    <input value="1" name="rate" id="star11" type="radio">
                                    <label for="star11"></label>
                                </div>
                                <div class="text-white">Based on 600 ratings</div>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-3">
                                {{-- <div class="fs-4 heed">Rating breakdown</div> --}}
                                <div class="pull-left d-flex fw-b">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"><i
                                                    class="fa-regular fa-star"></i></span></div>
                                    </div>
                                    <div class="pull-left" style="width:230px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"
                                                style="width: 1000%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">1</div>
                                </div>
                                <div class="pull-left d-flex fw-b">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"><i
                                                    class="fa-regular fa-star"></i></span></div>
                                    </div>
                                    <div class="pull-left" style="width:230px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="4" aria-valuemin="0" aria-valuemax="5"
                                                style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">1</div>
                                </div>
                                <div class="pull-left d-flex fw-b">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"><i
                                                    class="fa-regular fa-star"></i></span></div>
                                    </div>
                                    <div class="pull-left" style="width:230px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"
                                                style="width: 60%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                                <div class="pull-left d-flex fw-b">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"><i
                                                    class="fa-regular fa-star"></i></span></div>
                                    </div>
                                    <div class="pull-left" style="width:230px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"
                                                style="width: 40%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                                <div class="pull-left d-flex fw-b">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"><i
                                                    class="fa-regular fa-star"></i></span></div>
                                    </div>
                                    <div class="pull-left" style="width:230px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="5"
                                                style="width: 20%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-3">
                                <div class="row">
                                    <div class="reating-info">
                                        <div class="d-flex align-items-center ">
                                            <div class="heding">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="line"></div>
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fs-4 heed ">{{ __('userHome.Customer Reviews') }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="row">
                                                <div class="owl-carousel carousel carousel11">
                                                    {{-- loop in to reating --}}
                                                    <div class="item">
                                                        <div class=" box-prson-reating">
                                                            <div class="box d-flex align-items-center mt-3">
                                                                {{-- img or the first let in the name --}}
                                                                <div class="image fw-bold">
                                                                    {{-- <img src="{{ asset('public/web/images/Group 53 (2).png') }}"
                                                                class="img-fluid rounded-pill" alt=""> --}}
                                                                    M
                                                                </div>
                                                                <div class="text">
                                                                    <div class="heed fs-5">Mhmd Abo Mera</div>
                                                                    <div class="data text-white">26 Jun, 2023</div>
                                                                </div>
                                                            </div>
                                                            <div class="rating  rating22">
                                                                <input value="5" name="rate" id="star511"
                                                                    type="radio">
                                                                <label for="star511"></label>
                                                                <input value="4" name="rate" id="star411"
                                                                    type="radio">
                                                                <label for="star411"></label>
                                                                <input value="3" name="rate" id="star311"
                                                                    type="radio">
                                                                <label for="star311"></label>
                                                                <input value="2" name="rate" id="star211"
                                                                    type="radio">
                                                                <label for="star211"></label>
                                                                <input value="1" name="rate" id="star111"
                                                                    type="radio">
                                                                <label for="star111"></label>
                                                            </div>
                                                            {{-- the reating of customar --}}
                                                            <div class="text-white">
                                                                <p class="text-white m-0">Goooood</p>
                                                                <p class="text-white m-0">Good Product</p>
                                                            </div>
                                                            <div class=" box-rearing">
                                                                <button class="btn"><i
                                                                        class="fa-solid fa-thumbs-up d-inline-block"></i>
                                                                </button>
                                                                Helpful (<span class="counter">1</span>)
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
        </section>
        {{-- منتجات ذات صلة --}}
        <section class="related-products py-5">
            <div class="container">
                <div class="row m-0">
                    <div class="heding  d-flex align-items-center  heed-row mb-sm-0 mt-sm-0 mb-md-5 mt-md-5">
                        <div class="box-info d-flex align-items-center">
                            <div class="line"></div>
                            <div class="box">
                                <div class="contant">
                                    <div class="sqr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-4 heed text-white">{{ __('userHome.Related products') }}</div>
                    </div>
                    <div class="owl-carousel carousel">
                        <div class="item">
                            <div class="row m-0 px-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('web.single_product') }}" class="right-box position-relative">
                                        <div class="box-info d-flex align-items-center">
                                            <div class="box">
                                                <div class="contant">
                                                    <div class="sqr"></div>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="imge position-relative">
                                            <img src="{{ asset('public/web/images/product1.png') }} " class="img-fluid"
                                                alt="cat name">
                                            <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="dis mt-2">
                                    <a href="{{ route('web.single_product') }}" class="title heed fs-2">
                                        {{ __('userHome.product3') }}
                                    </a>
                                    <div class="box-dis d-flex align-items-center mt-3">
                                        <div class="contant">
                                            <div class="sqr "></div>
                                        </div>
                                        <p class="fs-6 text-white m-0">{{ __('userHome.KWD 18.000') }}</p>
                                    </div>
                                    <div class="box-dis d-flex align-items-center mt-2 mt-md-3">
                                        <div class="contant">
                                            <div class="sqr "></div>
                                        </div>
                                        <p class="fs-6 text-white m-0 ">{{ __('userHome.product3_desc') }}</p>
                                    </div>
                                    <div class=" text-white controls mt-3">
                                        <div>
                                            <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row m-0 px-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('web.single_product') }}" class="right-box position-relative">
                                        <div class="box-info d-flex align-items-center">
                                            <div class="box">
                                                <div class="contant">
                                                    <div class="sqr"></div>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="imge position-relative">
                                            <img src="{{ asset('public/web/images/product1.png') }} " class="img-fluid"
                                                alt="cat name">
                                            <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="dis mt-2">
                                    <a href="{{ route('web.single_product') }}" class="title heed fs-2">
                                        {{ __('userHome.product3') }}
                                    </a>
                                    <div class="box-dis d-flex align-items-center mt-3">
                                        <div class="contant">
                                            <div class="sqr "></div>
                                        </div>
                                        <p class="fs-6 text-white m-0">{{ __('userHome.KWD 18.000') }}</p>
                                    </div>
                                    <div class="box-dis d-flex align-items-center mt-2 mt-md-3">
                                        <div class="contant">
                                            <div class="sqr "></div>
                                        </div>
                                        <p class="fs-6 text-white m-0 ">{{ __('userHome.product3_desc') }}</p>
                                    </div>
                                    <div class=" text-white controls mt-3">
                                        <div>
                                            <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('public/web/jquery/jquery.js') }}  "></script>
        <script src="{{ asset('public/web/js/owl.carousel.min.js') }}"></script>
        <script>
            $('.owl-carousel.carousel11').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>
        <script>
            let btnNumber = document.querySelector(".icon-seral");
            let seralNumber = document.querySelector(".seral-number");
            let chickNumber = document.querySelector(".chick-number");
            let submit = document.querySelector("#submit");

            const getSeralNumber = () => {
                let numbers = '1234567890';
                let randomNumber = '';
                for (i = 0; i < 4; i++) {
                    randomNumber += numbers[Math.floor(Math.random() * numbers.length)];
                }
                seralNumber.value = randomNumber;
            }
            getSeralNumber();
            btnNumber.onclick = () => {
                getSeralNumber();
            }
            chickNumber.addEventListener("keyup", (e) => {
                let value = e.currentTarget.value;
                if (value == "") {
                    submit.disabled = true;
                } else if (value == seralNumber.value) {
                    submit.disabled = false;
                } else {
                    submit.disabled = true;
                }
            })
        </script>
    </main>
@endsection
