<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>







            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
@auth

                    @if(Auth::user()->hasRole('Admin'))

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('carers.all') }}">All Carers</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('carers.new') }}">Add New Carers</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patients.all') }}">All Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patients.new') }}">Add New Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.new') }}">Add New Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.all') }}">All Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surgeries.new') }}">Add New Surgeries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surgeries.all') }}">All Surgeries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('medicines.new') }}">Add New Medicines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('medicines.all') }}">All Medicines</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('managements.create')}}">Add new Management</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('managements.all')}}">View All Management</a>
                    </li>
                    @endif

                </ul>
                @endauth
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf

                            </form>
                        </div>
                    </li>
                @endguest
            </ul>


        </div>

    </div>

</nav>

