<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vonefi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('menu/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/navigation.dropdown.css') }}">

</head>

<body>
<header class="topmenuarea">
    <div class="container-fluid">
        <div class="row nopaddingarea">
            <div class="col-sm-6 col-xs-4 nopadding">
                <div class="inside-topmenulogo">
                    <img src="{{ asset('img/abbott-logo_white.svg') }}" alt="Logo">
                </div>
            </div>
            <div class="col-sm-6 col-xs-8 nopadding">
                <div class="toprightdes">
                    For the use of a registered medical practitioner, or a hospital, or a laboratory only
                </div>
                <div class="topmenu">
                    <nav id="navigation" class="navigation navigation-portrait">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div>
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                {{-- <li><a href="{{ route('doctor.registration') }}">Add New HCP</a></li>
                                <li><a href="{{ route('doctor.list') }}">My HCP’s</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="mainwrapper">
    <section class="loginbg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="formboxarea">
                        <div class="introductionbox">
                            <div class="row">
                                <h1>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quaerat ipsam hic aliquid, commodi blanditiis tempore obcaecati natus suscipit debitis.
                            </h1>
                            <a href="{{ route('quiz2') }}" class="btn btn-success">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="loginfooter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div class="footerlogo">
                    <div class="footertext-left text-left" style="font-size:10px;">
                        <!-- <p>For the Use of a Registered Medical Practitioner or a Hospital or a Laboratory Only.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-xs-6 text-right">
                <div class="footerlogo">
                    <div class="footertext text-right" style="font-size:10px;">
                        <p>Image used is for representation purpose only.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('menu/navigation.js') }}"></script>

</body>
</html>
