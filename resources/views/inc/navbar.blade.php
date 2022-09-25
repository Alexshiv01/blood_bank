<!--============================-->
<nav class="navbar navbar-expand-lg navbar-light sticky-top py-2 d-block" data-navbar-on-scroll="data-navbar-on-scroll">


    <div class="container">

        <a class="navbar-brand" href=""><img src="{{ asset('assets') }}/img/favicons/logo.png" height="40"
                alt="logo" />
            Blood<span class="text-primary">Bank
            </span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">

            </ul>

            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">

                <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('donors.create') }}">Donate</a>
                </li> --}}

                <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('donors.index') }}">Donors</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active" href="{{ route('requests.index') }}">Blood Request</a>
                </li>


                <li class="nav-item px-2">
                    <a class="nav-link active" href="{{ route('about-data') }}">About Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active" href="{{ route('search-data') }}">Search</a>
                    {{-- <input class="form-control" type="search" placeholder="Search" aria-label="Search" /> --}}

                </li>


            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            <a class="btn btn-primary order-1 order-lg-0" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary1 order-1 order-lg-0"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <a class="dropdown-item" href="/users.index"><i class="fa fa-user"
                                    aria-hidden="true"></i>Profile</a>

                            <a class="dropdown-item" href="/users.update"><i class="fa fa-edit" aria-hidden="true"></i>
                                Update Profile</a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
{{-- ///////////////////////////////////// --}}
