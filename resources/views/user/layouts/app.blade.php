<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.layouts.head')
</head>

<body>
  {{-- Nav bar --}}
  @include('user.layouts.nav')
  
  <!-- Page Header -->
    @include('user.layouts.header')
    
  <!-- Main Content -->
  <div class="container">
    @yield('content')
  </div>

  <hr>

  {{-- Footer --}}
  @include('user.layouts.footer')