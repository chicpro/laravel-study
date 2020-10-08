<!doctype html>
<html lang="{{ App::getlocale() }}">
<head>
@include('includes.meta')

<title>@yield('title')</title>

@include('includes.header_css')

@include('includes.header_js')

@yield('inline_style')

@yield('inline_script')
</head>

<body>

    @yield('header')

    <main role="main" class="container">
        @yield('content')
    </main>

    @yield('footer')

    @include('includes.footer_js')

</body>
</html>