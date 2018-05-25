<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
  <script type="text/javascript" src="https://vojs.group-ib.ru/build/main_95_72ae1413_42_91.js"></script>
  <meta charset="UTF-8">

  {!! seo_helper()->render() !!}

  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <link rel="icon" type="image/png" href="/favicon-144.png" sizes="144x144">
  <link rel="apple-touch-icon" href="/favicon-195.png?a" sizes="195x195">

  <link rel="stylesheet" href="/assets/front/css/app.css?v=23">

  <style>
    .sr-enabled .topblock .fade-in-item {
      visibility: hidden;
    }
  </style>

  <meta name="format-detection" content="telephone=no">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112734228-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112734228-2');
</script>


</head>
<body>
  

  <div class="notification error" style="display: none;"></div>
  @yield('content')

  @include('shared/footer')
  @include('shared/terms')
  @include('shared/privacy')
  @include('shared/privateSaleForm')
  @include('shared/wireForm')

  <script type="text/javascript" src="/assets/front/js/vendors.min.js?v=3"></script>
  <script type="text/javascript" src="/assets/front/js/app.min.js?v=21"></script>

  
</body>
</html>
