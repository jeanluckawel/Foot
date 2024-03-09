<header class="header-inner-page">
    <div class="header-middle-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 logo">
                    <a href="#"><img style="width: 80px" src="{{ asset('img/LogoUDbl.png') }}" alt="logo"></a>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
{{--                                <li ><a href="{{ route('index') }}">Accueil</a></li>--}}
                                <li><a href="{{ route('point') }}">Classement</a></li>
{{--                                <li><a href="#">Match</a></li>--}}
{{--                                <li><a href="#">A propos</a></li>--}}
                            </ul>
                        </nav>
                        <!--Header Search Start  here-->
                        <!--Header Search End  here-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
