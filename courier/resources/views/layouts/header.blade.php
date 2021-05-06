<header class="header bg-white shadow-sm">
    <div class="top-header">
        <div class="container">
            <ul class="list-unstyled text-md-right text-center mb-0">
                <li class="list-inline-item">
                    <a href="tel:01920020044" class="btn social-btn"><i class="fas fa-phone-alt"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn social-btn"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn social-btn"><i class="fab fa-whatsapp"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="mailto:parcelgoal@gmail.com" class="btn social-btn"><i class="far fa-envelope"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('merchant.login')}}" class="btn btn-common"> Marchent Login</a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/common/logo.png') }}" alt="logo" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navItem" aria-controls="navItem" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navItem">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services') }}" class="nav-link ">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Coverage Map</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Career</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>