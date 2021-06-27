<!DOCTYPE html>
<html lang="en">
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
</head>

<body class="bg-gray-100 relative font-sans">
  <header
    id="master-header"
    class="h-screen text-white flex flex-col justify-center  relative">
    <div class="z-10 relative py-12 mx-auto md:w-1/2 text-center">
      <h1 class="leading-tight mb-8 text-5xl text-center font-thin">
        Browse All Fake Jobs Here
      </h1>
      <p class="text-center md:text-xl font-light mb-8">
        Make your research before going for interviews
      </p>
      <a class="px-3 py-2 inline-block bg-white text-black rounded transition-all hover:bg-black hover:text-white" href="/home">Search Fake Jobs</a>
      <a class="px-3 py-2 inline-block bg-white text-black rounded transition-all hover:bg-black hover:text-white" href="/jobs/create">Submit Fake Jobs</a>
      <p class="mt-4 text-xs opacity-50">
        Made by <span class="font-bold">Afolabi Abiodun</span>.. copyright 2021
      </p>
    </div>
  </header>

</body>
</html>
