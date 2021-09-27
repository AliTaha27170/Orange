@extends('include.app')

@section('main')



<!-- فورم التعبئة -->
<div class="contact-form-sec pt-5 mt-md-5 ContactPageForm rt">
    <div class="title-heading-w3 text-center mx-auto mb-5" style="max-width:600px">
        @if ((auth()->user()->Package))
        <h3 class="title-style">لقد قمت بالفعل بالاشتراك بباقة <br><span>مجتمع سند  </span></h3>
        @else

        @endif

    </div>

<!-- انضم لمجتنع سند  -->

<section class="w3l-about-2 py-5 " id="__">

    <div class="container py-md-5 py-4 AboutPageAbout">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-12 about-2-secs-right mt-lg-0 mt-5">
                <img  src="../../../../../assets_sand/images/5b2.jpg" alt="" class="img-fluid img-responsive">
            </div>

            <div class="col-lg-6 about-2-secs-left rt">
                <h3 class="title-style mb-2"> {{ __('main_page.a181') }} <span>{{ __('main_page.a26') }}</span></h3>
                <p></p>

                                                <ul class="list-about-2 mt-sm-4 mt-3">
                    <li class="py-1"><p>
                    <i class="far fa-check-circle"></i>
                    {{ __('main_page.a168') }}</p></li>

                        <li class="py-1"><p>
                            <i class="far fa-check-circle"></i>
                            {{ __('main_page.a169') }}</p></li>
                            <li class="py-1"><p>

                                <li class="py-1" <br></li>

                                <li><p>
                                <i class="far fa-check-circle"></i>
                                {{ __('main_page.a170') }}</p></li>



                                <li class="py-1"><p>
                                    <i class="far fa-check-circle"></i>
                                    {{ __('main_page.a171') }}</p></li>
                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a172') }}</p></li>



                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a173') }}</p></li>

                                        <li class="py-1" <br></li>


                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a174') }}</p></li>

                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a175') }}</p></li>
                                        <li class="py-1" <br></li>


                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a176') }}</p></li>

                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a177') }}</p></li>

                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a178') }}</p></li>

                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a179') }}</p></li>
                                        <li class="py-1" <br></li>


                                    <li class="py-1"><p>
                                        <i class="far fa-check-circle"></i>
                                        {{ __('main_page.a180') }}</p></li>

                <div class="mt-4">
                    {{--

                    <a class="btn btn-style" href="{{ route('register_now') }}" target="_blank">
                        {{ __('main_page.a35') }}</a>--}}
                </div>
            </div>

        </div>
    </div>
</section>

<!-- انضم لمجتنع سند انتهى  -->

@if(isset($error) )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul class="p-0 m-0" style="list-style: none;">

        <li>{{$error}}</li>

    </ul>
</div>
@endif


    @if (session('msg'))
      <div class="alert alert-success">
          <center>
              <p>

                {!! session('msg') !!}

              </p>

          </center>
      </div>
@endif

    @if($errors->any())
<h4>{{$error}}</h4>
@endif


    <div class="row contact-block align-items-center">
        <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
            <form action="{{ route('register_now_post') }}" method="post" class="signin-form">
                @csrf

                @if (!(auth()->user()->Package))

                @if ($pak)
                <center>
                    <button class="btn btn-style mt-sm-3" >
                       اشتراك </button>
                </center>
                @else
                <center>
                    <button class="btn btn-style mt-sm-3" style="background-color: rgb(238, 53, 53)"  disabled>
                       انتهت فترة التسجيل </button>
                </center>
                @endif


                @endif

            </form>
        </div>
    </div>
</div>
<!-- فورم التعبئة -->
<br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


@endsection
