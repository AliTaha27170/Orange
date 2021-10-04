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
                    <!-- mobile image -->
                    <div id="mobile_image" class="col-md-6 banner-right mt-lg-4 mt-0 text-right offset-lg-1">
                    <img class="img-fluid" src="../../../../../../../../../../../../../assets_sand/images/banner2.png" alt=" ">
                    </div>

                    <!-- mobile image -->
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
                    <img id="desktop_image" class="img-fluid" src="../../../../../../../../../../../../../assets_sand/images/banner2.png" alt=" ">
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
<section id="services" class="w3l-feature-8 text-center bg  section-bg">

    <div class="features-main py-5">
        <div class="container py-md-5 py-4 AboutPageGrids">

            <center>
                <h3 class="text-bgs mb-md-3 mb-2">{{ __('main_page.a116') }} <span>{{ __('main_page.a115') }}</span></h3> <br><br><br>
            </center>
            <div class="row justify-content-center">


                @foreach ($in_sand as $item)



                  <div class="col-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                      <div  >
                        </div>
                        <img id="trtr" src="{{Voyager::image($item->image)}} " alt="">
                      <h4 class="title">{{ $item['title_'.LaravelLocalization::getCurrentLocale()] }}</h4>
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

    @foreach ($visits as $item)

<!------------------------------------------------------------->
<section class="w3l-aboutblock pt-4 pb-5">
    <div class="container pb-md-5 pb-sm-4 HPAbout">
        <div class="row">
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                <img class="img-fluid img-responsive" src="{{Voyager::image($item->image)}}" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first rt">
                <h3 class="text-bgs mb-md-3 mb-2"> {{ $item['word1_'.LaravelLocalization::getCurrentLocale()] }}<span>{{ $item['word2_'.LaravelLocalization::getCurrentLocale()] }}</span>
                </h3>
                <h3 class="title-style">{{ $item['title_'.LaravelLocalization::getCurrentLocale()] }}</h3>
                <p class="ab-text mt-4 pt-lg-2"></p>
                <p class="mt-4" id="description_of_visits">{{ $item['description_'.LaravelLocalization::getCurrentLocale()] }}</p>
           </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------->
@endforeach




</div>


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


<section class="w3l-content-sec py-5">
    <style>
        .btn-style{
            margin: 6px auto;

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

        <div class="col-md-3 col-sm-4 col-12 offset-md-3">
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

        <div class="col-md-3 col-sm-4 col-12">
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

        <div class="col-md-3 col-sm-4 col-12 mt-sm-0 mt-4">
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



{{-- EVENTS --}}
@include('include.events')







{{-- شركاء النجاح  --}}

<div class="team py-5">
    <div class="container py-md-5 py-4 AboutPageTeam">
        <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
            <p class="mt-2 text-white"></p>
            <h3 class="title-style "> {{ __('main_page.a101') }}   <br>   <br>             </h3>
        </div>
        <div class="row team-row mt-md-5 mt-4 justify-content-center">
        @foreach ($friends as $item)


            <div class="col-lg-3 col-4 team-wrap mt-lg-0">
                <div class="team-member last text-center">
                    <div class="team-img">
                        <a href="{{$item->url}}" >
                            <img src="{{Voyager::image($item->image)}}" alt="" class="radius-image">
                            </a>                    </div>
                    <a class="team-title"> <br><p>
                       {{ $item['title_'.LaravelLocalization::getCurrentLocale()] }}</p></a>
                    <div class="team-details text-center">
                        <div class="socials mt-20">

                           <p>{{ $item['description_'.LaravelLocalization::getCurrentLocale()] }} <br> </p>

                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- شركاء النجاح جديد -->
<div class="container">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <div class="col">
                <div class="success h-100">
                    <div class="text-center">           
                        <div class="img-hover-zoom img-hover-zoom--colorize">
                            <img class="shadow" src="https://api.awalan.com/Images/1000x300xo/691~VOM.jpg"
                                alt="Another Image zoom-on-hover effect">
                        </div>
                    </div>          
                    <div class="success-body">
                        <div class="clearfix mb-3">
                        </div>
                        <div class="my-2 text-center">
                            <h1>Vom - فوم</h1>
                        </div>
                        <div class="mb-3">
                            <h2 class="text-uppercase text-center role">الوصف</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- شركاء النجاح جديد -->

            <!-- end team member -->

        </div>
    </div>
</div>



<section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span></span>
            <h4></h4>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container rt">


@foreach ($comments as $item)

            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{Voyager::image($item->image)}} " />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong> <p> {{ $item['title_'.LaravelLocalization::getCurrentLocale()] }} </p></strong>

                        </div>
                    </div>
                    <!--reviews------>

                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>{{ $item['description_'.LaravelLocalization::getCurrentLocale()] }}</p>
                </div>
            </div>

@endforeach

        </div>
      </section>




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



<style>



    /* Services Section
    ظپظٹ ط³ظ†ط¯
    --------------------------------*/

    #services {
        background-color: #ece8e5;
    }

    #services .box {
        color: var(--primary-color);
    font-size: 32px;
    margin: 0 auto 25px auto;
    height: 150px;
    line-height: 80px;
    border-radius: 50%;
    text-align: center;
    background: #fff;
    box-shadow: -3px 7px 10px 5px rgb(0 0 0 / 20%);
    transition: 0.5s;
    }

    #services .box:hover {
        cursor: pointer;
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
    /*-----------------------------------ط§ط¨ط­ط°ظپ ط°ظٹ ظ…ط§ظ„ظ‡ ط¯ط§ط¹ظٹ ط§ظ„ط§ظٹظ‚ظˆظ†ط§طھ */
    #services .icon {

      padding-top: 12px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      width: 60px;
      height: 60px;
    }

    #trtr {

            width: 142px;
            margin: 4px 1px -30px 0px;
            height: auto;
            font-size: 36px;
            line-height: 1;


    }

    #services .title {
    position: relative;
    top: -15px;
    font-weight: 700;
    font-size: 14px;
    color: #000000;
    text-decoration: none;
    font-family: "JF Flat";
    }


    #services .box:hover .title  {
      color: #161616;
    }

    #services .description {
      font-size: 14px;
      line-height: 28px;
      margin-bottom: 0;
      text-align: left;
    }



    @media(max-width:856px){
      #services .box{
       width: 150px !important;
      }
    }



    @media(min-width:856px){
      #services .box{
          width: 150px;

      }
    }


#testimonials{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width:100%;
}
.testimonial-heading{
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.testimonial-heading span{
    font-size: 1.3rem;
    color: #252525;
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.testimonial-box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width:100%;
}
.testimonial-box{
    width:500px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    background-color: #ffffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}
.profile-img{
    width:50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}
.profile-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.profile{
    display: flex;
    align-items: center;
}
.name-user{
    display: flex;
    flex-direction: column;
}
.name-user strong{
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}
.name-user span{
    color: #979797;
    font-size: 0.8rem;
}
.reviews{
    color: #f9d71c;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.client-comment p{
    font-size: 0.9rem;
    color: #4b4b4b;
}
.testimonial-box:hover{
    transform: translateY(-10px);
    transition: all ease 0.3s;
}

@media(max-width:1060px){
    .testimonial-box{
        width:45%;
        padding: 10px;
    }
}
@media(max-width:790px){
    .testimonial-box{
        width:100%;
    }
    .testimonial-heading h1{
        font-size: 1.4rem;
    }
}
@media(max-width:340px){
    .box-top{
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .reviews{
        margin-top: 10px;
    }
}
::selection{
    color: #ffffff;
    background-color: #252525;
}

  </style>


  <!--الأسئلة الشائعة  -->


  <section class="w3l-clients py-5 mb-5 mt-4" id="ques">
      <div class="container py-md-5 py-4 HomePageTestimonials">
          <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
              <p class="mt-2">    {{ __('main_page.a147') }}</p>

          </div>
          <div id="owl-demo2" class="owl-carousel  owl-theme mt-4 py-md-2 mb-md-4">



              @foreach ($questions as $item)
              <div class="item rt">
                  <div class="testimonial-content">
                      <div class="testimonial">
                              <h4>   {{ $item['title_'.LaravelLocalization::getCurrentLocale()] }} <br></h4>
                              <p>    {{ $item['description_'.LaravelLocalization::getCurrentLocale()] }}</p>

                      </div>

                  </div>
              </div>
              @endforeach


          </div>
      </div>
  </section>


@endsection
