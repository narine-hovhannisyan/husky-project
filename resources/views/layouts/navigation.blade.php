{{--<nav x-data="{ open: false }" class="bg-white border-b border-black-100">--}}
    <!-- Primary Navigation Menu -->
{{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}

<nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-white border-b border-black-100">
{{--    <div class="m-20">--}}
{{--max-w-7xl mx-auto px-4 sm:px-6 --}}
    <div class="lg:px-8">
        <div class="flex justify-between py-4">
            <div class="flex">
                <!-- Logo -->
         {{--       <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>--}}

{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </div>--}}
                <!-- Navigation Links -->
                <div class="hidden space-x-36  sm:-my-px sm:ml-10 sm:flex">
{{--                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link active">--}}
{{--                        {{ __('Home') }}--}}
{{--                    </x-nav-link>--}}
                    <div class="container-fluid">
{{--                        <a class="navbar-brand" href="#">Logo</a>--}}
{{--                        <div :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link active">--}}
{{--                            {{ __('Home') }}--}}
{{--                        </div>--}}
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                                <a href="{{ url('dashboard' )}}" ></i> Home</a>
                            </li>

                        </ul>

                    </div>
                    <div class="container-fluid">
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                                <a href="#" ></i> About Us</a>
                            </li>

                        </ul>

                    </div>
                    <div class="container-fluid">
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                                <a href="#" ></i>Blog</a>
                            </li>

                        </ul>

                    </div>
                    <div class="container-fluid">
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                                <a href="{{ url('dashboard' )}}" >Partners</a>
                            </li>

                        </ul>

                    </div>
                    <div class="container-fluid">
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                                <a href="{{ url('dashboard' )}}" >Contact Us</a>
                            </li>

                        </ul>

                    </div>


                    <div class="container-fluid">
                    <div id="rectangle">

                            <a href="{{ url('/profile/edit' )}}" ><i class='bi bi-pen bi--spin color-pen'></i></a>


{{--                        <i class="bi-gear-fill bi--8xl"></i>--}}

                    </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</nav>
