<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>
<body>
    <div id="app">
        <nav class="nav flex flex-wrap items-center justify-between px-4">
  <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
    <svg class="fill-current h-8 mr-2 w-8" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5" clip-rule="evenodd" viewBox="0 0 716 895">
      <path d="M357.776 0l357.77 178.885v536.657l-357.77 178.89L0 715.542V178.885"></path>
      <path class="text-white fill-current" d="M357.776 804.982l268.32-134.16v-178.89l-89.44-44.72 89.44-44.72V223.606L357.776 89.442v626.1l-178.89-89.44V178.885l-89.443 44.721v447.216l268.333 134.16z"></path>
      <path d="M447.216 670.822l89.44-44.72v-89.45l-89.44-44.72v178.89zM447.216 402.492l89.44-44.721v-89.443l-89.44-44.722"></path>
    </svg>
    <a class="font-semibold text-xl tracking-tight" href="/home">Fake Jobs</a>
  </div>

  <input class="menu-btn hidden" type="checkbox" id="menu-btn">
  <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
    <span class="navicon bg-grey-darkest flex items-center relative"></span>
  </label>

  <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto">
    <li class="border-t md:border-none">
      <a href="/home" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold">Home</a>
    </li>

    <li class="border-t md:border-none">
      <a href="{{route('jobs.create')}}" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Add fake Job</a>
    </li>

    @auth
        <li class="border-t md:border-none">
            <a href="{{route('jobs.index')}}" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Super Admin</a>
        </li class="border-t md:border-none">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
        <li>

        </li>

    @else
        <li class="border-t md:border-none">
            <a href="{{route('login')}}" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Admin Login</a>
        </li>
    @endauth



  </ul>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
            toastr.options.closeButton = true;
            // toastr.options.closeMethod = 'fadeOut';
            // toastr.options.closeDuration = 900;
            // toastr.options.closeEasing = 'swing';
        @endif
    </script>
</body>
</html>


