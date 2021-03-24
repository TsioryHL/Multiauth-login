<x-guest-layout>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">
                @if (Auth::user()->hasRole('user'))
                    {{ __('Utilisateur') }}
                @elseif(Auth::user()->hasRole('manager'))
                    {{ __('Manager') }}
                @else
                    {{ __('Administrateur')  }}
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" active="request()->routeIs('dashboard')">{{ __('Dashboard') }}</a>
                    </li>
                    @if (Auth::user()->hasRole('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.userController') }} " active="request()->routeIs('dashboard.userController')">{{ __('Gestion d\'utilisateur') }}</a>
                        </li>
                    @endif
                </ul>
                <!-- Dropdown -->
                <ul class="nav navbar-nav">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </form>

                        </li>
                </ul>

            </div>
        </nav>

    </body>
</x-guest-layout>
