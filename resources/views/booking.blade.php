<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>sand</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../../public/img/1222.png" rel="icon">
  <link href="../../../public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>

  <!-- Bootstrap CSS File -->
  <link href="../../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../../public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../../public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="../../../public/css/Sttyle.css" rel="stylesheet">
  <link href="../../../public/css/booking.css" rel="stylesheet">

</head>
<body>
    <style>
        p{
            margin: 1%;

        }
        .hi{
            color: #fff !important;
            background: #dc3545;
        }

    </style>
   <br>

   @if (session('error'))
   <div class="alert alert-success">
       <center>
           <p>

             {!! session('error') !!}

           </p>

       </center>
   </div>
   @endif


@if ($id==2) {{-- قاعة التدريب --}}

    @include('include2.room2')

@elseif($id==1) {{-- قاعة الاجتماعات --}}
    @include('include2.room1')

@elseif($id==3) {{-- المكتب المستقل  --}}
    @include('include2.room3')
@endif












    <div style="margin-bottom: -12%">
    </div>

    <script src="../../../public/js/booking.js"></script>

</body>

</html>
