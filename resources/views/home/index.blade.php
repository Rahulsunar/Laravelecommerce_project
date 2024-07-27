<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    @include('home.header')<!-- header section strats -->
    @include('home.slider')<!-- slider section -->
  </div>
  <!-- end hero area -->

  @include('home.product')<!-- shop section -->
  @include('home.contact')<!-- contact section -->

 @include('home.footer')<!-- footer,info section -->

</body>

</html>