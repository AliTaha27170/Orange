@extends('include.app')

@section('main')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="ftco-section">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-12 col-lg-10">
  <div class="wrap d-md-flex">
  <div class="img" style="background-image:url(https://sand.business/assets_sand/images/banner2.png)">
  </div>
  <div class="login-wrap p-4 p-md-5">
  <div class="d-flex">
  <div class="w-100">
  <p class="social-media d-flex justify-content-start">
  <a href="tel: +966 50 272 9394" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></a>
  </p>
  </div>
  <div class="w-100">
    <h3 id="Website_Name" class="mb-4">{{ __('main_page.a26') }}</h3>
    </div>
  </div>
  <form action="{{ route('voyager.login') }}" method="POST" class="signin-form">
    {{ csrf_field() }}
  <div class="form-group mb-3">
  <label class="label" for="name">{{ __('voyager::generic.email') }}</label>
  <input type="email"  name="email"   class="form-control" placeholder="{{ __('voyager::generic.email') }}" required>
  </div>
  <div class="form-group mb-3">
  <label class="label" for="password">{{ __('main_page.klmt') }} </label>
  <input type="password" class="form-control" placeholder="{{ __('main_page.klmt') }}"  name="password" required>
  </div>
  <div class="form-group">
  <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('main_page.a148') }}</button>
  </div>
  <div class="form-group d-md-flex">
  <div class="w-50 text-left">
  <label class="checkbox-wrap checkbox-primary mb-0">{{ __('main_page.tzkr') }}
  <input type="checkbox" name="remember" checked>
  <span class="checkmark"></span>
  </label>
  </div>
  <div class="w-100 text-md-right" id="Forgot_Password">
  <a href="{{ route('forget.password.get') }}">{{ __('main_page.nset') }}</a>
  </div>
  </div>
  </form>
  <p class="text-center">{{ __('main_page.latmtlk') }} <a href="{{ route('Register') }}"> {{ __('main_page.sjel') }}</a></p>
  @if(!$errors->isEmpty())
  <div class="alert alert-red">
      <ul class="list-unstyled">
          @foreach($errors->all() as $err)
              <li>{{ $err }}</li>
          @endforeach
      </ul>
  </div>
@endif
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <style>
  #movetop,header.nav-fixed,footer{
      display : none;
  }
  </style>
  <style>

   /*New Login*/
   html,body
   {
     height : 100% ;
   }
   #Website_Name
{
  text-align: Right;
  color: #ff6700;
  font-weight: 600;

}
div {
  font-family: myFirstFont;
}
*
{
  font-family: "HelveticaNeueLT Arabic 75 Bold", Arial, sans-serif;
}
body {
  font-family: "HelveticaNeueLT Arabic 75 Bold", Arial, sans-serif;
  font-size: 16px;
  line-height: 1.8;
  font-weight: normal;
  background: #f8f9fd;
  color: gray;
  background: url(https://sand.business/assets_sand/images/banner.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top;
}

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #FF6700; }
  a:hover, a:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  font-weight: 400;
  font-family: "HelveticaNeueLT Arabic 75 Bold", Arial, sans-serif;
  color: #000; }

.bg-primary {
  background: #FF6700 !important; }

.ftco-section {
  padding: 7em 0; }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.heading-section {
  font-size: 28px;
  color: #000; }

.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

.wrap {
  width: 100%;
  overflow: hidden;
  background: #fff;
  border-radius: 5px;
  -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); }

.img, .login-wrap {
  width: 50%; }
  @media (max-width: 991.98px) {
    .img, .login-wrap {
      width: 100%; } }

@media (max-width: 767.98px) {
  .wrap .img {
    height: 250px; }
  #Forgot_Password
  {
    text-align: center;
  }
  .ftco-section
  {
    padding: 1em 0;
  }
  }

.login-wrap {
  position: relative;
  background: #fff h3;
    background-font-weight: 300; }

.form-group {
  position: relative; }
  .form-group .label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #000;
    font-weight: 700;
    font-family: 'HelveticaNeueLT Arabic 75 Bold';
    float: right;
  }
  .form-group a {
    color: gray; }

.form-control {
  text-align: right;
  height: 48px;
  background: #fff;
  color: #000;
  font-size: 16px;
  border-radius: 5px;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid rgba(0, 0, 0, 0.1);
  font-family: "HelveticaNeueLT Arabic 75 Bold", Arial, sans-serif;
}
  .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: rgba(0, 0, 0, 0.2) !important; }
  .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: rgba(0, 0, 0, 0.2) !important; }
  .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: rgba(0, 0, 0, 0.2) !important; }
  .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: rgba(0, 0, 0, 0.2) !important; }
  .form-control:focus, .form-control:active {
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid #FF6700; }

.social-media {
  position: relative;
  width: 100%; }
  .social-media .social-icon {
    display: block;
    width: 40px;
    height: 40px;
    background: transparent;
    border: 1px solid rgba(0, 0, 0, 0.05);
    font-size: 16px;
    margin-right: 5px;
    border-radius: 50%; }
0    .social-media .social-icon span {
      color: #999999; }
    .social-media .social-icon:hover, .social-media .social-icon:focus {
      background: #FF6700; }
      .social-media .social-icon:hover span, .social-media .social-icon:focus span {
        color: #fff; }

.checkbox-wrap {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

/* Hide the browser's default checkbox */
.checkbox-wrap input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0; }

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0; }

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "\f0c8";
  font-family: "FontAwesome";
  position: absolute;
  color: rgba(0, 0, 0, 0.1);
  font-size: 20px;
  margin-top: -4px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  @media (prefers-reduced-motion: reduce) {
    .checkmark:after {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

/* Show the checkmark when checked */
.checkbox-wrap input:checked ~ .checkmark:after {
  display: block;
  content: "\f14a";
  font-family: "FontAwesome";
  color: rgba(0, 0, 0, 0.2); }

/* Style the checkmark/indicator */
.checkbox-primary {
  color: #FF6700; }
  .checkbox-primary input:checked ~ .checkmark:after {
    color: #FF6700; }

.btn {
  cursor: pointer;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  font-size: 15px;
  padding: 10px 20px; }
  .btn:hover, .btn:active, .btn:focus {
    outline: none; }
  .btn.btn-primary {
    background: #FF6700 ;
    border: 1px solid #FF6700 !important;
    color: #fff !important; }
    .btn.btn-primary:hover {
      border: 1px solid #FF6700;
      background: #e7640b;
      color: #FF6700; }
    .btn.btn-primary.btn-outline-primary {
      border: 1px solid #FF6700;
      background: transparent;
      color: #FF6700; }
      .btn.btn-primary.btn-outline-primary:hover {
        border: 1px solid transparent;
        background: #FF6700;
        color: #fff; }
/*End Of New Login*/
  </style>
  @endsection
