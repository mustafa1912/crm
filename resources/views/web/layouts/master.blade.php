<!DOCTYPE html>
<html lang="ar">
@include('web.layouts.head')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!-- /.navbar -->
            @include('web.layouts.aside')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('web.layouts.navbar')
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                @include('web.layouts.footer')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    @include('web.layouts.offcanvas')
    {{-- scripts --}}
    @include('web.layouts.scripts')
</body>

</html>
