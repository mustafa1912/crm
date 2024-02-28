@extends('web.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ __('userHome.single_product_css') }}">
    <link rel="stylesheet" href="{{ __('userHome.all_product_css') }}">


    <main id="main">

        <section class="cat-Name">
            <img src="{{ asset('public/web/images/header.png') }} " alt="" title="">
        </section>
        <section class="related-products ">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <nav id="sidebar" class="d-md-block  sidebar text-light">

                            <div class="position-sticky">
                                <div class="form">
                                    <form class="d-flex" role="search">
                                        <input class="form-control mx-2" type="search"
                                            placeholder="{{ __('userHome.Search') }}" aria-label="Search">
                                        <button class="btn" type="submit">{{ __('userHome.Search') }}</button>
                                    </form>
                                </div>
                                <div class="categories mb-2 mt-4 p-2">
                                    {{-- <p> {{ __('userHome.Fragrances') }} </p> --}}
                                    <p>تصنيفات</p>
                                    <ul class="nav flex-column">
                                        <!-- Sidebar items (e.g., categories) -->
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">
                                                {{ __('userHome.Incense') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                {{ __('userHome.Fragrances') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">
                                                {{ __('userHome.Oud oil') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">
                                                {{ __("userHome.Ma'amoul") }} </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">
                                                {{ __('userHome.Offers') }} </a>
                                        </li>
                                        <!-- Add more categories here -->
                                    </ul>
                                </div>

                                <div class="condition p-2">
                                    {{-- <p class="p-0"> {{ __('userHome.Fragrances') }} </p> --}}
                                    <p> التصنيفات</p>
                                    <div class="p-2">
                                        <div class="form-check text-light  d-flex ">

                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck1">

                                            <label class="form-check-label" for="flexCheck1">
                                                {{ __('userHome.Incense') }}
                                            </label>

                                        </div>
                                        <div class="form-check text-light d-flex ">

                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck2">
                                            <label class="form-check-label" for="flexCheck2">
                                                {{ __('userHome.Fragrances') }}
                                            </label>

                                        </div>
                                        <div class="form-check text-light d-flex  ">

                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck3">
                                            <label class="form-check-label" for="flexCheck3">
                                                {{ __('userHome.Oud oil') }}
                                            </label>

                                        </div>
                                        <div class="form-check text-light d-flex  ">

                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck4">
                                            <label class="form-check-label" for="flexCheck4">
                                                {{ __('userHome.Oud oil') }}
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="reviews mt-3 p-2">

                                    <p> التقيمات </p>

                                    <div class="rating mb-3 p-2">

                                        <input type="radio" id="star-1" name="star-radio" value="star-1">
                                        <label for="star-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path pathLength="360"
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                </path>
                                            </svg>
                                        </label>
                                        <input type="radio" id="star-2" name="star-radio" value="star-1">
                                        <label for="star-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path pathLength="360"
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                </path>
                                            </svg>
                                        </label>
                                        <input type="radio" id="star-3" name="star-radio" value="star-1">
                                        <label for="star-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path pathLength="360"
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                </path>
                                            </svg>
                                        </label>
                                        <input type="radio" id="star-4" name="star-radio" value="star-1">
                                        <label for="star-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path pathLength="360"
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                </path>
                                            </svg>
                                        </label>
                                        <input type="radio" id="star-5" name="star-radio" value="star-1">
                                        <label for="star-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path pathLength="360"
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                </path>
                                            </svg>
                                        </label>
                                    </div>


                                </div>


                                {{-- <p> {{ __('userHome.Fragrances') }} </p> --}}
                                {{--
                                <div class="reviews mt-3">
                                    <div class="mt-1 d-flex px-3 py-1 ">
                                        <div class="small-ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 d-flex px-3 py-1 ">
                                        <div class="small-ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 d-flex px-3 py-1 ">
                                        <div class="small-ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="mt-1 d-flex px-3 py-1 ">
                                        <div class="small-ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                </div>  --}}


                                {{-- <p> {{ __('userHome.Fragrances') }}</p> --}}
                                <div class="wrapper mt-3  p-2">
                                    <header>
                                        <p class="p-2">{{ __('userHome.Price Range') }}</p>
                                    </header>
                                    <div class="price-input">
                                        <div class="field d-flex flex-column-reverse">
                                            <p class="pmin mt-2">{{ __('userHome.Min') }}</p>
                                            <input type="number" class="input-min" value="2500">
                                        </div>
                                        <div class="separator">-</div>
                                        <div class="field d-flex flex-column-reverse">
                                            <p class="pmin mt-2">{{ __('userHome.Max') }}</p>
                                            <input type="number" class="input-max" value="7500">
                                        </div>
                                    </div>
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input mb-5">
                                        <input type="range" class="range-min" min="0" max="10000"
                                            value="2500" step="100">
                                        <input type="range" class="range-max" min="0" max="10000"
                                            value="7500" step="100">
                                    </div>
                                </div>



                                {{-- <div class="mt-3 price">
                                <p> السعر</p>
                                <div class="p-3">

                                    <div class="form-check text-light d-flex justify-content-between">
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{ __('userHome.Oud oil') }}
                                        </label>
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>

                                    </div>
                                    <div class="form-check text-light d-flex justify-content-between">
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{ __('userHome.Oud oil') }}
                                        </label>
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>

                                    </div>
                                    <div class="form-check text-light d-flex justify-content-between">
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{ __('userHome.Oud oil') }}
                                        </label>
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>

                                    </div>
                                </div>

                            </div> --}}
                            </div>
                        </nav>
                    </div>

                    <div class="col-12 col-lg-9">
                        <div class="row pt-sm-0  mt-sm-0 ">
                            <div class="heding heed-row mb-sm-0 mb-md-2 pt-sm-0  mt-sm-0 ">
                                <div class="row m-0">
                                    <div class="col-sm-12 col-md-6 d-flex align-items-center">
                                        <div class="box-info d-flex align-items-center">
                                            <div class="line"></div>
                                            <div class="box">
                                                <div class="contant">
                                                    <div class="sqr"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-4 heed text-white px-1">{{ __('userHome.Incense') }}</div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div class="fs-4 heed-control text-white d-flex align-items-center">
                                            <span> إظهار:</span>
                                            <span>9/16/23</span>
                                            <i class="fa-solid fa-grip"></i>
                                            <i class="fa-solid fa-grip"></i>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="owl-carousel1 carousel1">
                                <div class="row">
                                    {{-- loop in all product --}}
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- start remove --}}
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 my-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="right-box position-relative px-sm-5 px-3">
                                                <div class="box-info d-flex align-items-center">
                                                    <div class="box">
                                                        <div class="contant">
                                                            <div class="sqr "></div>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                </div>
                                                <a href="{{ route('web.single_product') }}"
                                                    class="imge position-relative">
                                                    <img src="{{ asset('public/web/images/product1.png') }} "
                                                        class="img-fluid" alt="cat name">
                                                    <span class="product-name p-2">{{ __('userHome.Incense') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" dis pt-4">
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
                                                    <div class="sqr"></div>
                                                </div>
                                                <p class="fs-6 text-white m-0">{{ __('userHome.product3_desc') }}</p>
                                            </div>
                                            <div class=" text-white controls mt-3">
                                                <div>
                                                    <button class="btn">{{ __('userHome.Add to cart') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                    {{-- end remove --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
