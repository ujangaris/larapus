<!doctype html>
<html lang="en">
@include('frontend.templates.partials.head')
  <body>
      {{-- Navigation --}}
    @include('frontend.templates.partials.navigation')



      {{-- Content --}}
    <div class="container">
        @yield('content')
    </div>
    <!-- Optional JavaScript -->
    @include('frontend.templates.partials.script')
    @include('frontend.templates.partials.toast')
  </body>
</html>
