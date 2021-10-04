
<section class="w3l-bottom-grids-6 service-w3l-bg py-5" id="services">

    <style>
        .service-w3l-bg {
            background-size: cover;
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }
    </style>

    <div class="container py-md-5 py-4 HomePageServices">
        <div class="title-main text-center mx-auto" style="max-width:600px;">
            <h2 class="mt-2 ">{{ __('main_page.a2') }}</h2>
        </div>
        <div class="row pt-md-4 justify-content-center rt">

            @foreach ($lights as $light)
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box boh">
                    <img class="img-fluid"   src="{{Voyager::image($light->image)}}"  width="175px" alt=" ">
                    <h4><a href="{{ $light->url }}"  class="title-head" target="_blank">
                        {{ $light['title_'.LaravelLocalization::getCurrentLocale()] }}</a></h4>
                        <p>
                            {{ $light['description_'.LaravelLocalization::getCurrentLocale()]}}
                        </p>
                </div>
            </div>
            @endforeach



        </div>

        {{ $lights->links( "pagination::bootstrap-4") }}

    </div>
</section>
