<!DOCTYPE html>
<html>

<head>
@include('includes.head')
</head>

<body>
  <body class="sub_page">
  <div class="hero_area">
  @include('includes.header')
  </div>
  @yield('content')

  @include('includes.info')

  @include('includes.footer')

  @include('includes.footerjs')
  
</body>

</html>