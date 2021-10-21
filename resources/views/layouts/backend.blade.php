<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.backend.header')
    @notifyCss
</head>

<body class="">
    <div class="wrapper ">
        @include('layouts.backend.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.backend.navbar')
            <!-- End Navbar -->
            <div class="content">
                @yield('content')
                <x:notify-messages />
            </div>
            @include('layouts.backend.footer')
        </div>
    </div>
    {{-- <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"></i>
            </a>
            @include('layouts.backend.setting')
        </div>
    </div> --}}
    @include('layouts.backend.script')
    @notifyJs
</body>

</html>
