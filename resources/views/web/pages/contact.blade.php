@extends('web.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ __('userHome.contact_css') }} ">

    <main id="main">
        <section class="main-section breadcrumb">
            <div class="container">
                <button type="button" class="btn btn-contact p-2 px-5">
                    {{ __('userHome.Contact Us') }}
                </button>
            </div>
        </section>
        <section class="info my-5">
            <div class="container">
                <h2 class="text-center title"> {{ __('userHome.stay') }}</h2>
                <div class="row m-0 mt-5">
                    <div class="col-12 col-md-4 d-flex flex-column my-md-0 my-3 border-start-1">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p class="fs-6 title-info text-center my-3"> {{ __('userHome.tle') }}</p>
                        <a href="tel:01012987463" class="text-info text-center"> 01012987463 </a>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column my-md-0 my-3 border-start-1">
                        <div class="icon">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <p class="fs-6 title-info text-center my-3"> {{ __('userHome.location') }} </p>
                        <a href="#" class="text-info text-center"> {{ __('userHome.Kuwait') }} </a>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column my-md-0 my-3">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p class="fs-6 title-info text-center my-3"> {{ __('userHome.email') }} </p>
                        <a href="mailto:atyab alkema@gmail.com" class="text-info text-center"> atyab alkema@gmail.com </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
        <section class="contact my-5 pt-5">
            <div class="container">
                <div class="row m-0 justify-content-center">
                    <div class="col-10 col-md-8 col-xl-7">
                        <div class="contact_heading">
                            <p class="fs-5 fw-bold text-center">{{ __('userHome.Contact Us') }}</p>
                            <p class="text text-center">Lorem ipsum dolor sit met, connecter adipescent alit, Carabid tur
                                auctor
                                Justo
                                Lorem ipsum dolor sit met, connecter adipescent alit, Carabid tur auctor Justo</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="name"
                                        placeholder=" {{ __('userHome.name') }} ">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="email"
                                        placeholder=" {{ __('userHome.email') }}">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="message"
                                        placeholder="{{ __('userHome.message') }}">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="code"
                                        placeholder=" {{ __('userHome.Code') }} ">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn d-block m-auto mt-4 p-2 px-5">
                                        {{ __('userHome.Send') }} </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact my-5 ">
            <div class="contact_heading my-3">
                <p class="fs-5 fw-bold text-center">{{ __('userHome.Find us on Google Maps') }}</p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.42327515025!2d47.942898040744815!3d29.37605953525231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2sKuwait%20City%2C%20Kuwait!5e0!3m2!1sen!2seg!4v1699080409151!5m2!1sen!2seg"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection
