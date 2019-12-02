<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>BDO Hub | Black Desert Online Hub</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">

    <link href="{{asset('css/bosspage.css')}}" rel="stylesheet">
    <link href="{{asset('css/cooking.css')}}" rel="stylesheet">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">BDO Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/materials">Materials</a>
                </li>
                <li class="nav-item ">
                    <div class="dropdown">
                        <button class="nav-link">Crafting Items</button>
                        <div class="dropdown-content">
                            <a href="/cooking">Cooking</a>
                            <a href="/alchemy">Alchemy</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gearitems">Gear Items<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/horse">Horses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/boss">Bosses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guide">Guides</a>
                </li>
            </ul>

            <!-- right side of Navbar-->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links-->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login') }}">{{__('login') }}</a>
                    </li>
                @else
                    <li class="nav-item ">
                        <div class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="flase" v-pre>
                                {{Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="/account">
                                    Accounts
                                </a>
                                <a class="dropdown-item" href="{{route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{__('logout')}}
                                </a>

                                <form id="logout-form" action="{{route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">©copyright 2019 BDO Hub (This is a test page)</span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</script>
</body>
</html>