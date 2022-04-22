<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">phpMyAdmin</a>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @if (session()->has('user_name'))
            <li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}">{{ __('Logout') }}</a>
            </li>
            <li class="nav-item">

                    <a class="nav-link" href="{{ route('register') }}">{{ __('Create New User') }}</a>
                @endif
            </li>


            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                    {{--<span class="glyphicon glyphicon-user"></span><i class="fas fa-bell"></i>--}}
                {{--</a>--}}
            {{--</li>--}}

            <li class="nav-item dropdown">
                <a   class="nav-link " href="#" role="button"  aria-haspopup="true" aria-expanded="false" >
                    {{ session()->get('user_name') }} <span class="caret"></span>

                </a>
            </li>
    </ul>
            <!-- Navbar-->

        </nav>
