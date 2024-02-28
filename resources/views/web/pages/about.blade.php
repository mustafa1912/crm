@extends('web.layouts.master')

@section('content')
<link rel="stylesheet" href="{{ __('userHome.about_css') }} ">    
    <main id="main">
        <!-- Landing -->
        {{-- <nav aria-label="breadcrumb" class="breadcrumb">
            <img src="{{ asset('public/web/images/header.png') }} " alt="">
        </nav> --}}
        <section class="cat-Name">
            <img src="{{ asset('public/web/images/header.png') }} " alt="" title="">
        </section>
       
        <section class="heading">
            <div class="container">
                <div class="row container-fluid d-flex align-content-center h-100">
                    <div class="col-12 col-md-6 h-md-100 d-flex justify-content-center flex-column">
                        <div>

                            <p class="text_heading"><span>{{ __('userHome.Atiab Al-Qimah') }}</span> 
                                {{ __('userHome.Atiab Al-Qimah_desc') }}
                            </p>
                            <h4 class="text_content_2 fs-4 my-4">{{ __('userHome.Atiab Al-Qimah products are known for their...') }}</h4>
                        </div>

                        <div class="row m-0">
                            <div class="col-sm-6">
                                <div class=" products_catogary my-3">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <p class="products_catogary_content">
                                    {{ __('userHome.feature_1') }}
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <div class=" products_catogary my-3">
                                    <i class="fa-solid fa-bookmark"></i>
                                </div>
                                <p class="products_catogary_content">
                                    {{ __('userHome.feature_2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-6 h-md-100 d-flex justify-content-center flex-column pt-4">
                        <img src="{{ asset('public/web/images/about.webp') }}   " alt="" title=""
                            class="img_part">
                    </div>
                </div>
            </div>
        </section>
        <!-- Category -->
    </main>
@endsection
