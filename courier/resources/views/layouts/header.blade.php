<header class="header bg-white shadow-sm">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/admin/logo.png') }}" alt="logo" class="img-fluid w-50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Take A Test</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Question Bank</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
</header>