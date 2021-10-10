<section>
    <div class="w3l-blog-content py-5">
        <div class="container py-md-5 py-4 HomepageBlogPosts">
            <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
                <p class="mt-2"> </p>
                <h3 class="title-style"> <span>{{ __('main_page.a153') }}</span> </h3>
            </div>
            <div class="row rt justify-content-center" >
                @foreach ($events as $event)




                <div class="col-md-4 mt-5 col-sm-6 rt">
                    <div class="card-header p-0 position-relative">
                        <a href="{{ $event->url }}" class="zoom d-block">

                            <div class="post-thumbnail">
                                <img width="1680" height="900"
                                    src="{{Voyager::image($event->image)}}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy"
                                    sizes="(max-width: 1680px) 100vw, 1680px" style="height : auto ;" /> </div><!-- .post-thumbnail -->

                        </a>

                        @if ($event->finish)

                        <div class="course-price-badge">
                            <a href="{{ $event->url }}" rel="category tag"> {{ __('main_page.a151') }} </a>
                            <div class="is-over">
                            <div class="is-over-text">انتهى اللقاء</div>
                            </div>
                            </div>
                                @endif

                    </div>
                    <div class="card-body course-details">
                        <div class="course-meta mb-3">

                            <div class="meta-item course-students">
                                <a href="#author"><span class="fas fa-user"></span>
                                    <span class="meta-value"></span> <a class="url fn n"
                                        href="{{ $event->url }}" >{{  $event['who_'.LaravelLocalization::getCurrentLocale()] }}</a></span></a>
                            </div>

                            <!-- <div class="meta-item course-lesson">
                            <span class="fa fa-heart"></span>
                            <span class="meta-value"> 24 </span>
                        </div> -->

                            <div class="meta-item course-students">
                                <span class="fa fa-calendar"></span>
                                <span class="meta-value"> {{ $event->created_at->format('m/d/Y') }}</span>
                            </div>

                        </div>
                        <a href="{{ $event->url }}" class="course-desc">
                           {{ $event['title_'.LaravelLocalization::getCurrentLocale()] }} </a>
                           <h4>
                            {{ $event['description_'.LaravelLocalization::getCurrentLocale()]}}
                           </h4>

                           @if ($event->finish)

                           <div class="blog-bottom-info">
                            <p  class="btn btn-style" style="color:#fff;background: rgb(72, 72, 72)">
                               {{ __('main_page.a152') }}</p>
                        </div>

                           @else
                        <div class="blog-bottom-info">
                            <a href="{{ $event->url }}" class="btn btn-style">
                               {{ __('main_page.a152') }}</a>
                        </div>
                        @endif

                    </div>
                </div>
                @endforeach



            </div>
            <br><br>
            {{ $events->links( "pagination::bootstrap-4") }}


 {{-- عرض كل اللقاءات  --}}
@if (count($events) and url()->current() == route('index'))
<center>
    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
        <a class="btn btn-style" href="{{ route('events') }}"  >
           {{ __('main_page.a154') }}</a>
    </div>
</center>
@endif


        </div>
    </div>


    </section>



