<!DOCTYPE html>

<html {{ str_replace('_', '-', app()->getLocale()) }} class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
      data-assets-path="{{ asset('theme/assets/') }}/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title></title>

    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/favicon.ico') }}"/>

    <meta name="theme-color" content="#7367f0"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"/>

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/fonts/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/fonts/tabler-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/css/rtl/core.css') }}"
          class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/css/rtl/theme-default.css') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/css/demo.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/libs/animate-css/animate.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/libs/node-waves/node-waves.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/libs/select2/select2.css') }}"/>

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/css/pages/page-profile.css') }}"/>
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/css/pages/cards-advance.css') }}"/>
    @stack('style')

    <!-- Helpers -->
    <script src="{{ asset('theme/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('theme/assets/js/config.js') }}"></script>

    @livewireStyles
</head>

<body>
{{--@include('sweetalert::alert')--}}

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.admin.sidebar')

        <div class="layout-page">
            @include('layouts.admin.navbar')

            <div class="content-wrapper">

                <div class="container-fluid flex-grow-1 container-p-y">
                    {{ $slot }}
                </div>

                @include('layouts.admin.footer')

                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>

<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

<script src="{{ asset('theme/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/js/sidebar.js') }}"></script>
<script src="{{ asset('theme/assets/vendor/libs/select2/select2.js') }}"></script>

<!-- Vendors JS -->
<script src="{{ asset('theme/assets/vendor/libs/swiper/swiper.js') }}"></script>
@stack('vendor-script')

<!-- Main JS -->
<script src="{{ asset('theme/assets/js/main.js') }}"></script>

<!-- Page JS -->
@livewireScripts
@stack('script')
@vite(['resources/js/app.js'])
</body>

</html>
