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

    <style>
        .spinner-container {
            position: relative;
            display: inline-block;
            width: 100%;
            max-width: 455px; /* Same width as spin.png to fit the image */
            margin: auto;
        }

        .spin-img {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
        }

        .clock-img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -90%); /* Center the clock image */
            width: 100px; /* Fixed size for the clock image */
            height: 100px; /* Fixed size for the clock image */
            pointer-events: none; /* Ensure the clock image does not interfere with user interactions */
            transition: transform 0.2s ease; /* Smooth transition */
        }

        .hidden {
            display: none;
        }

        .spinning {
            position: absolute;
            animation: spin 0.2s linear infinite;
            top: 31%;
            left: 38%;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

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
                                <div class="col-md-12 text-right">
                                    <div class="quizquestion">
                                        <ul>
                                            {{-- <li class="quizquestionactive">Q.1</li>
                                            <li>Q.2</li>
                                            <li>Q.3</li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="quizform1">
                                        <div class="spinner-container">
                                            <img id="spinImage" src="{{ asset('img/spin1.png') }}" alt="Spin" class="spin-img">
                                            <img id="clockImage" src="{{ asset('img/clock.png') }}" alt="Clock" class="clock-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quizform2">
                                        <h1>Is vertigo a sensation that the person or the room is moving or spinning?</h1>
                                        <div class="topmargin30">
                                            <button type="button" id="spinButton" class="submit_btn1 btnmd spinbtn">Click here to Spin</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <div class="topmargin30">
                                        <button type="button" class="submit_btn1 btnmd">Next</button>
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

<!-- Js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('menu/navigation.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#navigation").navigation();

        let spinning = false;
        let stopChoice = 'yes'; // Set your fixed variable here ('yes' or 'no')

        // Handle spin button click
        $("#spinButton").click(function() {
            if (!spinning) {
                spinning = true;
                $("#clockImage").removeClass('hidden').addClass('spinning');

                // Simulate spinning for 2 seconds
                setTimeout(() => {
                    stopSpin(stopChoice);
                }, 5000);
            }
        });

        function stopSpin(choice) {
            $("#clockImage").removeClass('spinning');

            // Position the clock image based on the choice
            if (choice === 'yes') {
                // Position the clock image to "Yes" side (e.g., to the right)
                $("#clockImage").css({
                    transform: 'translate(-50%, -90%) rotate(90deg)',
                });
            } else {
                // Position the clock image to "No" side (e.g., to the left)
                $("#clockImage").css({
                    transform: 'translate(-50%, -90%) rotate(-90deg)',
                });
            }

            // Reset spinning flag
            spinning = false;
        }
    });
</script>

</body>
</html>
