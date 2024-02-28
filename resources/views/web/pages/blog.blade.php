@extends('web.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ __('userHome.blog_css') }} ">

    <main id="main">
        {{-- <nav aria-label="breadcrumb" class="breadcrumb">
            <img src="{{ asset('public/web/images/header.png') }} " alt="">
        </nav> --}}
        <section class="cat-Name">
            <img src="{{ asset('public/web/images/header.png') }} " alt="" title="">
        </section>
        <section class="main-section">
            <div class="container mt-5">
                <h1 class="head"> المدونة</h1>
                <p class="des">
                    <span> اطياب القمة </span> من البدايه تسعي ان تنال رضا العملاء, وذلك بتقديمها اجود انواع البخور ودهن
                    العود بجوده أعلي
                    من السعر, وطوال الثلاث سنوات الماضية أصبحنا نتميز بثقة عملائنا , مما يدفعنا للتطوير دائما والحفاظ علي
                    سمعتنا ورضاء عملائنا الكرام.
                </p>
            </div>
        </section>
        <section class="blogs-section my-4">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12 col-sm-12 col-md-9">
                        {{-- /start foreach --}}
                        <div class="card card-blog  my-3">
                            <a href="#">
                                <div class="card-title">
                                    <img src="{{ asset('public/web/images/pic.png') }} " class="img w-100 p-2"
                                        alt="" title="">
                                </div>
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-4 col-md-5 d-flex align-items-center">
                                            <div class="line-right"></div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <img src="{{ asset('public/web/images/logo.png') }}" class="w-100"
                                                alt="logo" title="logo">
                                        </div>
                                        <div class="col-4 col-md-5 d-flex align-items-center">
                                            <div class="line-left"></div>
                                        </div>
                                    </div>
                                    <h2 class="title-blog">
                                        <div class="square"></div> أطياب القمة من البدايه
                                    </h2>
                                    <p class="des">
                                        اطياب القمة من البدايه تسعي ان تنال رضا العملاء, وذلك بتقديمها اجود انواع البخور
                                        ودهن
                                        العود بجوده أعلي من السعر, وطوال الثلاث سنوات الماضية أصبحنا نتميز بثقة عملائنا ,
                                        مما
                                        يدفعنا للتطوير دائما والحفاظ علي سمعتنا ورضاء عملائنا الكرام.
                                    </p>
                                </div>
                            </a>
                            <div class="card-footer py-2">
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        {{-- /end foreach --}}
                        {{-- /start foreach --}}
                        <div class="card card-blog  my-3">
                            <a href="#">
                                <div class="card-title">
                                    <img src="{{ asset('public/web/images/pic.png') }} " class="img w-100 p-2"
                                        alt="" title="">
                                </div>
                                <div class="card-body">
                                    <div class="row m-0">
                                        <div class="col-4 col-md-5 d-flex align-items-center">
                                            <div class="line-right"></div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <img src="{{ asset('public/web/images/logo.png') }}" class="w-100"
                                                alt="logo" title="logo">
                                        </div>
                                        <div class="col-4 col-md-5 d-flex align-items-center">
                                            <div class="line-left"></div>
                                        </div>
                                    </div>
                                    <h2 class="title-blog">
                                        <div class="square"></div> أطياب القمة من البدايه
                                    </h2>
                                    <p class="des">
                                        اطياب القمة من البدايه تسعي ان تنال رضا العملاء, وذلك بتقديمها اجود انواع البخور
                                        ودهن
                                        العود بجوده أعلي من السعر, وطوال الثلاث سنوات الماضية أصبحنا نتميز بثقة عملائنا ,
                                        مما
                                        يدفعنا للتطوير دائما والحفاظ علي سمعتنا ورضاء عملائنا الكرام.
                                    </p>
                                </div>
                            </a>
                            <div class="card-footer py-2">
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm rounded btn-social">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        {{-- /end foreach --}}
                    </div>
                    {{-- sidebar --}}
                    <aside class="col-12 col-sm-12 col-md-3 my-3">
                        <div class="row">
                            <div class="col">
                                <h3 class="main-title"> <span class="line"> </span> احدث المنتجات </h3>
                            </div>
                        </div>
                        <div class="p-3">
                            {{-- /start foreach --}}
                            <div class="item">

                                <div class="main-title mt-3"> <span class="line"> </span> </div>
                                <a href='#' class="blog-item  ">
                                    <img src="{{ asset('public/web/images/product.webp') }} " class="img p-2" alt=""
                                        title="">
                                    <div class="desc rounded p-2">
                                        <p class="mb-0">بخور</p>
                                    </div>
                                </a>
                                <div class="fs-6 fw-bold heeed">name of product</div>

                            </div>
                            {{-- /end foreach --}}
                            <div class="item">

                                <div class="main-title mt-3 "> <span class="line"> </span> </div>
                                <a href='#' class="blog-item  ">
                                    <img src="{{ asset('public/web/images/product.webp') }} " class="img p-2"
                                        alt="" title="">
                                    <div class="desc rounded p-2">
                                        <p class="mb-0">بخور</p>
                                    </div>
                                </a>
                                <div class="fs-6 fw-bold heeed">name of product</div>
                            </div>
                            <div class="item">

                                <div class="main-title mt-3"> <span class="line"> </span> </div>
                                <a href='#' class="blog-item  ">
                                    <img src="{{ asset('public/web/images/product.webp') }} " class="img p-2"
                                        alt="" title="">
                                    <div class="desc rounded p-2">
                                        <p class="mb-0">بخور</p>
                                    </div>
                                </a>
                                <div class="fs-6 fw-bold heeed">name of product</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection
