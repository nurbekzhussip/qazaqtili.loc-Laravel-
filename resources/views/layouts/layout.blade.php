<!DOCTYPE html>
<html lang="kz">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Конвертер - Qazaq-tili</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/jquery.fileuploader.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/jquery.fileuploader-theme-thumbnails.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fileuploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popupper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>

<body cz-shortcut-listen="true"> @section('header')
    <nav class="navbar navbar-default head" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered" id="toggle"><span class="sr-only">Меню</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div class="navbar-brand navbar-brand-centered hidden-xs"><a class="navbar-brand head-name" href="{{route('index')}}"><span>QazaQ</span><p>tili</p></a></div>
                <p class="visible-xs"><a class="navbar-brand" href="{{route('index')}}">Мәтіндік конвертер</a></p>
            </div>
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item {{ Request::route()->getName()=='index' ? 'active' : '' }}" id="nav-item"><a class="nav-link" href="{{route('index')}}"><i class="fa fa-refresh" aria-hidden="true"></i>Конвертер</a></li>
                    <li class="nav-item {{ request()->is('alphabets') ? 'active' : '' }}" id="nav-item"><a class="nav-link" href="{{route('alphabets')}}"><i class="fa fa-book" aria-hidden="true"></i>Әліпби</a></li>
                    <li class="nav-item {{ request()->is('rules') ? 'active' : '' }}" id="nav-item"><a class="nav-link" href="{{route('rules')}}"><i class="fa fa-language" aria-hidden="true"></i>Ереже</a></li>
                </ul>
            </div>
        </div>
    </nav> @show @yield('content') @section('footer')
    <footer class="footer">
        <div class="container-fluid">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <h5>Байланыс</h5>
                <ul>
                    <li>
                        <p class="signature">Qazaq tili - Латын графикасына негізделген қазақ әліпбиінің конвертері</p>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>
                        <p>Тел:+7(705) 111-41-15</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <h5>Жүктеулер</h5>
                <ul>
                    <li><a href="#">Жақын арада</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                <h5>Бөлімдер</h5>
                <ul>
                    <li><a href="{{route('alphabets')}}">Әріптер</a></li>
                    <li><a href="{{route('rules')}}">Ережелер</a></li>
                    <li><a href="{{route('index')}}">Конвертер</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h5>Бөлісу</h5>
                <ul class="social">
                    <li><a href="whatsapp://send?text=Латын графикасына негізделген қазақ әліпбиінің конвертері https://www.qazaqtili.net"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="https://vk.com/share.php?url=http://www.qazaqtili.net"><i class="fa fa-vk"></i></a></li>
                    <li><a href="https://www.facebook.com/sharer.php?u=https://www.qazaqtili.net"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?text= Латын графикасына негізделген қазақ әліпбиінің конвертері https://www.qazaqtili.net"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/share?url=https://www.qazaqtili.net"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </footer> @show </body>

</html>