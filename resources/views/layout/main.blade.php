
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Laravel Concepts Examinations.</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    @include('includes.css')
  </head>

  <body>

    @include('includes.top_bar')
    
<div class="container">
<div class="row">

    @yield('content')
      @if(Auth::check())
      @include('includes.sidebar')
      @endif

</div>
</div>

   @include('includes.footer')

   @include('includes.script')
  </body>
</html>
