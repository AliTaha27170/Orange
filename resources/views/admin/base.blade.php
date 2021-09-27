<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <title>sand</title>
    
    <!-- CSS Files -->
    <link href="{{ asset("css/admin/admin.css") }}" rel="stylesheet">
    <link  href="{{ asset("css/admin/table.css") }}" rel="stylesheet">
    <link href="{{ asset("css/Sttyle.css") }}" rel="stylesheet">


    
    
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="{{ asset("../lib/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <!--  Favicons -->
  <link href="img/121.png" rel="icon">
  <link href="img/121.png" rel="apple-touch-icon">
  <script src="js/admin/admin.js"></script>


</head>
<body>
    <div class="div1">
    <div class="sidebar-container" >
        <div class="sidebar-logo">
          سند | صفحة الأدمن        </div>
        <ul class="sidebar-navigation">
          <li class="header">(الحجوزات) مساحات العمل</li>
          <li>
            <a href="{{ route('room',1) }}" class="a1">

              <i class="fa fa-home" aria-hidden="true"></i>  قاعة الاجتماعات 
            </a>
          </li>
          <li>
            <a href="{{ route('room',2) }}" class="a2">

              <i class="fa fa-tachometer" aria-hidden="true"></i> قاعة التدريب
            </a> 
          </li>
          <li>
            <a href="{{ route('room',3) }}" class="a3">

              <i class="fa fa-tachometer" aria-hidden="true"></i> المكتب المستقل (ساعات)
            </a>
          </li>
          <li>
            <a href="{{ route('room',4) }}" class="a4">

              <i class="fa fa-tachometer" aria-hidden="true"></i> المكتب المستقل  (شهر)
            </a>
          </li>
      <!--    <li>
            <a href="{{ route('room',5) }}" class="a5">

              <i class="fa fa-tachometer" aria-hidden="true"></i> كل الحجوزات 
            </a>
          </li> -->
          <li class="header">اللقاءات</li>
          <li>
            <a href="{{ route('image.upload',6) }}" class="a6">

              <i class="fa fa-users" aria-hidden="true"></i> إضافة لقاء جديد
            </a>
          </li>
          <li>
            <a href="{{ route('room',7) }}" class="a7">

              <i class="fa fa-cog" aria-hidden="true"></i> قائمة الانتظار
            </a>
          </li>
          <li>
            <a href="{{ route('room',8) }}" class="a8">

              <i class="fa fa-info-circle" aria-hidden="true"></i> عرض جميع اللقاءات
            </a>
          </li>
        </ul>
        <center class="taha"><p>Made with 💙 by <a href="https://mostaql.com/u/AliTaha271" target="_blank">ALI TAHA</a></p></center>
      </div>
    </div>



    
      <div  class="div2" >
      <div class="content-container">
      
        <div class="container-fluid">
      
          <!-- Main component for a primary marketing message or call to action -->
          <div class="jumbotron">
           @yield('main')
          </div>

        </div>
      </div>
    </div>
    <div>
</body>
</html>