<!DOCTYPE html>
<html>
  <head>
    @include('includes.meta')

    <title>@yield('title') | Landing Page</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" href="/">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')
    {{-- style --}}
    @include('includes.style')

    @stack('after-style')
  </head>

  <body>
    
    @include('includes.header')
      @yield('content')
      @yield('contentclub')
      @yield('contentplayer')
      @yield('contentstadium')
      @yield('contentmanager')
    @include('includes.footer')

    @stack('before-script')
    {{-- script --}}

    @include('includes\script')

    @stack('after-script')

    
  </body>

</html>