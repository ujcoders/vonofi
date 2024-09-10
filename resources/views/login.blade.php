<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vertin</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="topmenuarea">
    <div class="container-fluid">
        <div class="row nopaddingarea">
            <div class="col-sm-6 col-xs-4 nopadding">
                <div class="topmenulogo">
                    <img src="{{ asset('img/abbott-logo_white.svg') }}" alt="Logo"/>
                </div>
            </div>
            <div class="col-sm-6 col-xs-8 nopadding">
                <div class="toprightdes">For the use of a registered medical practitioner, or a hospital, or a laboratory only</div>
            </div>
        </div>
    </div>
</header>

<main class="mainwrapper">
    <section class="loginbg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loginarea">
                                <div class="logincont">
                                    <div class="loginformbox">
                                        <div class="vertinlogo">
                                            <img src="{{ asset('img/vertin.png') }}" alt="Vertin Logo">
                                        </div>
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('login.process') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="empcode" class="form-control" placeholder="Employee Code" required />
                                            </div>
                                            <div class="topmargin30 text-center">
                                                <input type="submit" class="submit_btn1 btnmd" id="signInBtn" value="Next">
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

</body>
</html>
