<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tây Nguyên Holy Bee</title>

    <!-- Libs css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style_main.css')}}">
    @yield('style')
    <!-- End libs css-->
</head>

<body>
    @include('frontend.include.header')
    <main>
        @yield('name')
    </main>
    @include('frontend.include.footer')
    <script src="{{asset('frontend/js/global.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('script')
</body>

</html>
