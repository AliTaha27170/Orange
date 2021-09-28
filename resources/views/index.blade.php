@extends('include.app')
@section('main')
<!-- Slider CDNs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- End Of Slider CDNs -->
<!-- homepage banner section -->

<section>
</section>

<section id="home" class="w3l-banner py-5">
    <div class="banner-image">

    </div>
    <div class="banner-content">
        <div class="container pt-5 pb-md-4 HomePageBanner">

            @if (session('msg'))

            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:175px">
                <p> {{__('main_page.thank_you')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
@endif



            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 pt-md-0 pt-4 rt">
                    <h3 class="mb-sm-4 mb-3 title rt">{{ __('main_page.a115') }}
                        <span class="d-block d-block-res"><span class="type-js">
                                <h5>{{ __('main_page.a144') }} </h5></span></span>
                    </h3>
                    <p>{{ __('main_page.a7') }}</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a id="Join" class="btn btn-style" href="{{route('register_now')}}">
                            {{ __('main_page.a10') }}</a>

                            <a class="btn btn-style" href="#_">
                                {{ __('main_page.a8') }}</a>

                            <a class="btn btn-style" href="{{ route('events') }}">
                                {{ __('main_page.a9') }}</a>


                    </div>
                </div>
                <div class="col-md-6 banner-right mt-lg-4 mt-0 text-right offset-lg-1">
                    <img class="img-fluid" src="../../../../../../../../../../../../../assets_sand/images/banner2.png" alt=" ">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
</section>
<!-- //homepage banner section -->



<!-- homepage Grids section -->

<section>
</section>





<!--  في سند -->
<section class="w3l-feature-8 text-center bg rt">

    <div class="features-main py-5">
        <div class="container py-md-5 py-4 AboutPageGrids">

            <center>
                <h3 class="text-bgs mb-md-3 mb-2">{{ __('main_page.a116') }} <span>{{ __('main_page.a115') }}</span></h3> <br><br><br>
            </center>
            <div class="row justify-content-center">

             @foreach ($in_sand as $item)

             <div class="col-lg-4 col-4 feature-body mt-lg-0 mt-5">
                <div class="feature-icon">
                <i class="fas " aria-hidden="true" style="background:#fff0f5">
                    <img src="{{Voyager::image($item->image)}} " class="in">
                    </i>
                </div>
                <div class="feature-info">
                    <a href="#url">
                        <h3 class="feature-titel mb-3"> {{ $item['title_'.LaravelLocalization::getCurrentLocale()] }} </h3>
                    </a>
                    <p> </p>
                    <a href="#url" class="feature-link">
                    </a>
                </div>
            </div>


             @endforeach


            </div>
                <br><br>

        </div>
    </div>
</section>


<!-- انتهى في سند -->



<section>
</section>
<!-- //homepage Grids section -->


<!-- أبرز الزيارات -->

<section>
</section>
<div class="Slider">

<!------------------------------------------------------------->
<section class="w3l-aboutblock pt-4 pb-5">
    <div class="container pb-md-5 pb-sm-4 HPAbout">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                <img class="img-fluid img-responsive" src="../../../../../../../../../../../../../assets_sand/images/about.png" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first rt">
                <h3 class="text-bgs mb-md-3 mb-2">{{ __('main_page.a117') }} <span>{{ __('main_page.a118') }}</span>
                </h3>
                <h3 class="title-style">{{ __('main_page.a119') }}</h3>
                <p class="ab-text mt-4 pt-lg-2"></p>
                <p class="mt-4">{{ __('main_page.a91') }}</p>
           </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------->

<section class="w3l-aboutblock pt-4 pb-5">
    <div class="container pb-md-5 pb-sm-4 HPAbout">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                <img class="img-fluid img-responsive" src="../../../../../../../../../../../../../assets_sand/images/about.png" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first rt">
                <h3 class="text-bgs mb-md-3 mb-2">{{ __('main_page.a117') }} <span>{{ __('main_page.a118') }}</span>
                </h3>
                <h3 class="title-style">{{ __('main_page.a119') }}</h3>
                <p class="ab-text mt-4 pt-lg-2"></p>
                <p class="mt-4">{{ __('main_page.a91') }}</p>
           </div>
        </div>
    </div>
</section>

<section class="w3l-aboutblock pt-4 pb-5">
    <div class="container pb-md-5 pb-sm-4 HPAbout">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                <img class="img-fluid img-responsive" src="../../../../../../../../../../../../../assets_sand/images/about.png" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first rt">
                <h3 class="text-bgs mb-md-3 mb-2">{{ __('main_page.a117') }} <span>{{ __('main_page.a118') }}</span>
                </h3>
                <h3 class="title-style">{{ __('main_page.a119') }}</h3>
                <p class="ab-text mt-4 pt-lg-2"></p>
                <p class="mt-4">{{ __('main_page.a91') }}</p>
           </div>
        </div>
    </div>
</section>
</div>

<section>
</section>

<!-- homepage about section -->






<!-- إضاءات -->
@include('include.lights')

@if (count($lights))

<center>
    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
        <a class="btn btn-style" href="{{ route('lights') }}" >
           {{ __('main_page.a155') }}</a>
    </div>


</center>
@endif



<!--مزايا منشآت -->

<section>
</section>
@if($mzaya)
<section class="image-with-content py-5" id="mz">
    <div class="container py-md-5 py-4 HomePageCWPStats">

        <div class="row align-items-center">
            <div class="col-lg-6 content-sec-1 rt">
                <h3 class="title-style mb-3">{{ __('main_page.a122') }}<span>{{ __('main_page.a123') }}</span></h3>
                <p>{{ __('main_page.a92') }} <span>{{ __('main_page.a93') }}</span></p>
                <a class="btn btn-style mt-lg-5 mt-4" href="#url">
                    {{ __('main_page.a94') }}</a>
            </div>
            <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                <img src="/../../../../../../../../assets_sand/images/st1.png" alt="product" class="img-responsive">
            </div>
        </div>



<!--الأسئلة الشائعة  -->


<section class="w3l-clients py-5 mb-5 mt-4" id="ques">
    <div class="container py-md-5 py-4 HomePageTestimonials">
        <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
            <p class="mt-2">    {{ __('main_page.a147') }}</p>

        </div>
        <div id="owl-demo2" class="owl-carousel  owl-theme mt-4 py-md-2 mb-md-4">

            <div class="item rt">
                <div class="testimonial-content">
                    <div class="testimonial">
                            <h4>    {{ __('main_page.a77') }} <br></h4>
                            <p>    {{ __('main_page.a78') }}</p>

                    </div>

                </div>
            </div>

            <div class="item rt">
                <div class="testimonial-content">
                    <div class="testimonial">
                            <h4>    {{ __('main_page.a79') }} <br></h4>
                            <p>    {{ __('main_page.a80') }}</p>

                    </div>

                </div>
            </div>

                        <div class="item rt">
                <div class="testimonial-content">
                    <div class="testimonial">
                            <h4>    {{ __('main_page.a81') }} <br></h4>
                            <p>    {{ __('main_page.a82') }}</p>

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>
@endif
        <div class="w3-stats pt-4">
            <div id="Lights_margin" class="row text-center justify-content-center rt">



                <div class="col-md-4 col-4 mt-md-0">
                    <div class="counter">
                        <div class="timer count-title count-number" data-to="1139" data-speed="1500"></div>
                        <p class="count-text">{{ __('main_page.a95') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-4 mt-md-0">
                    <div class="counter">
                        <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                        <p class="count-text">{{ __('main_page.a96') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-4 mt-md-0">
                    <div class="counter border-right-0">
                        <div class="timer count-title count-number" data-to="47" data-speed="1500"></div>
                        <p class="count-text">{{ __('main_page.a97') }}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
</section>

<!-- //HomePage CWP and Stats Section -->



<!-- HomePage Cover Section -->

<section>
</section>

<section class="w3l-content-sec py-5">
    <style>
        .btn-style{
            margin: 6px;

        }
        .w3l-content-sec {
            background: #171717;
            background-size: cover;
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-position: center;
            position: relative;
            min-height: 600px;
        }
    </style>
    <div class="container py-md-5 py-4 HomePageCover">
        <div class="title-main mb-5 rt" style="max-width:600px;">
            <p class="mt-2 text-white">{{ __('main_page.a120') }}</p>
            <h3 class="title-style text-white"> {{ __('main_page.a121') }} </h3>
        </div>
        <div class="banner-play-w3">
            <!--//video-->
            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                <span class="video-play-icon">
                    <span class="fa fa-play"></span>
                </span>
            </a>
            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/a0xB-DzVu_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
            <!--//video-->
        </div>
    </div>
</section>

<section>
</section>

<!-- //HomePage Cover Section -->



<!-- HomePage Cover Grids Section -->

<section>
</section>

<section class="top-content-w3l" id="_">
    <div class="row mx-0">

        <div class="col-md-3 col-sm-4 col-6 offset-md-3">
            <div class="grid-content-spe HomePageCoverGrids">
                <img src="../../../../../assets_sand/images/a1.png"
                    class="img-fluid" alt="" />
                <div class="content-section-grid">
                    <h4><a >
                        {{ __('main_page.a100') }}</a></h4>
                        <center>
                            <a class="btn btn-style mt-lg-5 mt-4" href="{{ route('boo',2) }}" >
                                {{ __('main_page.a183') }}</a>
                        </center>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-4 col-6">
            <div class="grid-content-spe">
                <img src="../../../../../assets_sand/images/a2.png"
                    class="img-fluid" alt="" />
                <div class="content-section-grid">
                    <h4><a>
                        {{ __('main_page.a99') }}</a></h4>
                        <center>
                            <a class="btn btn-style mt-lg-5 mt-4" href="{{ route('boo',1) }}" >
                                {{ __('main_page.a183') }}</a>
                        </center>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-4 col-6 mt-sm-0 mt-4">
            <div class="grid-content-spe">
                <img src="../../../../../assets_sand/images/a3.png"
                    class="img-fluid" alt="" />
                <div class="content-section-grid">
                    <h4><a >
                        {{ __('main_page.a98') }}</a></h4>
                        <center>
                            <a class="btn btn-style mt-lg-5 mt-4" href="{{ route('boo',3) }}" >
                                {{ __('main_page.a183') }}</a>
                        </center>

                </div>
            </div>
        </div>

    </div>
</section>








{{-- شركاء النجاح  --}}

<div class="team py-5">
    <div class="container py-md-5 py-4 AboutPageTeam">
        <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
            <p class="mt-2 text-white"></p>
            <h3 class="title-style "> {{ __('main_page.a101') }}   <br>   <br>             </h3>
        </div>
        <div class="row team-row mt-md-5 mt-4 justify-content-center">

                                            <div class="col-lg-3 col-4 team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <a href="https://t.co/gJ2CY7FjrM?amp=1" >
                        <img src="../../images/n1.png" alt="" class="radius-image">
                        </a>
                    </div>
                    <a class="team-title"> <br><p>
                        {{ __('main_page.a102') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">
                            <p>
                                {{ __('main_page.a103') }} <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                            <!-- end team member -->

                                            <div class="col-lg-3 col-4 team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <a href="https://www.instagram.com/itsfuture_garden/" >
                            <img src="../../images/n2.png" alt="" class="radius-image">
                            </a>
                    </div>
                    <a class="team-title"> <br><p>
                        {{ __('main_page.a104') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">
<p>{{ __('main_page.a105') }} <br> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->

                                            <div class="col-lg-3 col-4 team-wrap mt-lg-0">
                <div class="team-member last text-center">
                    <div class="team-img">
                        <a href="https://technksa.com/" >
                            <img src="../../images/n3.png" alt="" class="radius-image">
                            </a>
                    </div>
                    <a class="team-title"> <br><p>
                        {{ __('main_page.a106') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">

                           <p>{{ __('main_page.a107') }} <br> </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->

                                            <div class="col-lg-3 col-4 team-wrap mt-lg-0">
                <div class="team-member last text-center">
                    <div class="team-img">
                        <a href="https://www.instagram.com/aq_design_/?igshid=mq3c5qymj33u" >
                            <img src="../../images/n4.png" alt="" class="radius-image">
                            </a>
                    </div>
                    <a href="#url" class="team-title"> <br><p>
                        {{ __('main_page.a108') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">
                            <p>
                                {{ __('main_page.a109') }} <br>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->


            <div class="col-lg-3 col-4 team-wrap mt-lg-0">
                <div class="team-member last text-center">
                    <div class="team-img">

                        <a href="https://baleine.art/" >
                            <img src="../../images/n6.png" alt="" class="radius-image">
                            </a>                    </div>
                    <a class="team-title"> <br><p>
                        {{ __('main_page.a112') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">

                           <p>{{ __('main_page.a113') }} <br> </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->


            <div class="col-lg-3 col-4 team-wrap mt-lg-0">
                <div class="team-member last text-center">
                    <div class="team-img">
                        <a href="https://mazaya.monshaat.gov.sa/" >
                            <img src="../../images/n5.png" alt="" class="radius-image">
                            </a>                    </div>
                    <a class="team-title"> <br><p>
                        {{ __('main_page.a110') }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">

                           <p>{{ __('main_page.a111') }} <br> </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->

        </div>
    </div>
</div>








<style>
    .team-member{
    height:355px;
}
    @media (max-width: 991px) {
        .team-member{
    height:auto;
    }
    }
</style>

<section>
</section>

<!-- //HomePage Cover Grids Section -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.Slider').slick(
                    {
                    slidesToShow : 1 ,
                    slidesToScroll : 1 ,
                    dots : false ,
                    arrows : false ,
                    autoplay : true ,
                    autoplayspeed : 2000 ,
                    infinite : true ,
                    responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow : 1 ,
                    slidesToScroll : 1 ,
                    dots : false ,
                    arrows : false ,
                    autoplay : true ,
                    autoplayspeed : 2000 ,
                    infinite : true ,
                    }
                    },

                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
                    }
                );
</script>
{{-- EVENTS --}}
@include('include.events')




@endsection
