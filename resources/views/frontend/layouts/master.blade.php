<!DOCTYPE html>
<html>
<head>


    <title>Rayemer AYT TYT LGS Hazırlık Kursu Maltepe Küçükyalı</title>

    <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/images/logo/favicon1.png">
    @include('frontend.layouts.head')
    @yield('css')

</head>
<body>
@include('frontend.layouts.header')

@yield('slider')

@yield('content')

@include('frontend.layouts.footer')

<!-- JS Files -->
@include('frontend.layouts.script')
@yield('script')
</body>
</html>
