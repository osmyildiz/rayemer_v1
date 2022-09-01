<!DOCTYPE html>
<html>
<head>



    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"  content="Rayemer Kurs Merkezi Milli Eğitim Bakanlığı&#039;na bağlı 2019&#039;dan beri LGS, TYT, AYT ve özel ders veren profesyonel bir kurumdur." />

    <meta name="keywords"  content="Rayemer, Üniversite Hazırlık, Maltepe Üniversite hazırlık, Bostancı Üniversite Hazırlık, Hazırlık Kursu, Küçükyalı Üniversite hazırlık, AYT, LGS, TYT, dershane, kurs, sınav, küçükyalı etüt merkezi, Maltepe Lise Hazırlık" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
