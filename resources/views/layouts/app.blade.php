<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Official WebPage Of The Trem Career Academy">
        <meta name="keywords" content="tremcareeracademy, trememployabilityprogram, trem, tremcareer, tremacademy, trememployability">
        <title>{{config('app.name', 'tremcareeracademy')}}</title>
        
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!--formhelpers -->
        <link rel="stylesheet" href="{{ asset('formHelper/dist/css/bootstrap-formhelpers.css') }}">  
        <!--link to sylish fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Scada" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- stylish js -->
        <link rel="stylesheet" href="{{ asset('css/imagehover.min.css')}} ">
    </head>

    <body>
        <!-- Navigation -->
        <div id="app">
            @yield('content')
        </div>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <ul class="social-links">
                    <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                </ul>
                <div class="credits">
                    Site by <a href="https://gerrarde.github.io/gerrard">ezeugwagerrard</a>
                </div>
            </div>
        </footer>
        <!--/ Footer-->
        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('contactform/contactform.js')}}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>