<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>Share your knowledge. It’s a way to achieve immortality.</title>
    <meta name="Description" lang="en-uk" content="SuperPROF is a private lessons directory in the United Kingdom with access to more than 100,000 private lessons teachers and more than 250 topics." />
    <link rel="canonical" href="index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="../cdn.superprof.com/style/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="../cdn.superprof.com/style/images/favicon/apple-touch-icon-60x60.png" />
    <link rel="icon" type="image/png" href="../cdn.superprof.com/style/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../cdn.superprof.com/style/images/favicon/favicon-16x16.png" sizes="16x16" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="google" content="nositelinkssearchbox" />
    <meta property="og:title" content="SuperPROF - The Platform for Private Lessons" />
    <meta property="og:image" content="//cdn.superprof.com/style/images/superprof@2x.png" />
    <meta property="og:site_name" content="SuperProf" />
    <meta property="og:description" content="Find your tutor for individual or group lessons from over 100,000 profiles. At your home, the tutors home, in a specified place or even by webcam: over 80,000 students have already trusted us." />
    <meta property="fb:app_id" content="541897999191679" />
    <style type="text/css">
        .popin-overlay.hidden,
        .notification.hidden {
            visibility: hidden
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>


    <div class="header">
        <div class="header-burger-dropshadow"></div>
        <div class="header-inner">
            <div class="header-inner-cell header-inner-cell-logo">
                <button class="header-burger-button">
                    <span class="header-burger-icon"></span>
                </button>
                <a class="header-logo header-logo-normal" href="{{'/'}}" title="Go back to Superprof's homepage, the search engine of private lessons">
                    <img src="../cdn.superprof.com/style/images/logo_sp.png" srcset="//cdn.superprof.com/style/images/logo_sp.png 1x,
//cdn.superprof.com/style/images/logo_sp@2x.png 2x" width="145" height="47" alt="LOGO" />
                </a>
            </div>
            <div class="header-inner-cell header-inner-cell-menu mobile-only">
                <button class="header-burger-close"></button>
                <div class="header-menu-inner">
                    <button class="header-item a-js" data-href="/sign-up.html">Sign Up</button>
                    <button class="header-item a-js" data-href="/login.html">Log In</button>
                    <button class="header-item heart-icon-v2Before a-js favoris-mobile hidden" data-href="/my-listings.html">Favourites
                        <span class="heart-icon-v2 favourites-button-nb hidden">0</span>
                    </button>
                    <a class="header-item" href="help.html">Help</a>
                </div>
                <button class="button button-radius headerV2_mobileButton a-js" data-href="/tutor/">
                    Give lessons
                </button>
            </div>
            <div class="header-inner-cell header-inner-cell-button header-right-v2 desktop-only">
                <a href="{{ url('/register') }}"> Sign Up</a>
                <a href="{{ url('/login') }}"> Sign In</a>
                <button class="header-item heart-icon-v2Before a-js favourites-button hidden" data-href="/my-listings.html">Favourites
                    <span class="heart-icon-v2 favourites-button-nb hidden">0</span>
                </button>
                <a href="{{ url('/help') }}"> Help</a>
                <a class="button button-radius" href="tutor/index.html">Give lessons</a>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
