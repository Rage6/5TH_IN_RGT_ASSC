@extends('layouts.master')

@section('membership_payment_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/payment/360_payment.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/payment/375_payment.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/payment/414_payment.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/payment/768_payment.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/payment/1366_payment.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/payment/1920_payment.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/payment/past_1920_payment.css">
  <script>

  </script>
  @include ('footer.style')
@stop

@section('membership_payment_content')
  <div class="main">
    <div class="content">
      Membership Payment
    </div>
    @include ('footer.content')
  </div>
@stop
