<!--header-->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<header class="fixed-top main-header nav-fixed">
    <div class="container-fluid w3HeaderLogoEd">
        <nav class="navbar navbar-expand-lg stroke">
            <h1><a class="navbar-brand" href="../../../">
                    <img src="../../../../../../../../assets_sand/images/logo.png" alt="" width="115px">
                    <!-- sand --> </a>

                @if (isset(auth()->user()->name))
                    <a href="{{ route('Register') }}"> <small class="fo"
                            style="font-size: 18px">{{ auth()->user()->name }} </a> |</small>
                    <a href="{{ route('logout') }}"> <small class="fo" style="font-size: 18px"> <i
                                class="fas fa-sign-out-alt"> </i> </small>
                    </a>



                @else
                    <a href="{{ route('login') }}"> <small class="fo"
                            style="font-size: 18px">{{ __('main_page.a148') }}</small> </a>
                @endif
            </h1>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-content"
                aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-content">
                <ul id="primary-menu" class="navbar-nav ml-lg-auto rt">
                    <li id="menu-item-21"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-21 nav-item ">
                        <a href="../../../#" class="nav-link ">{{ __('main_page.a1') }}
                            <!-- الرئيسية -->
                        </a>
                    </li>
                    <li id="menu-item-22"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22 nav-item"><a
                            href="{{ route('lights') }}" class="nav-link">{{ __('main_page.a2') }}
                            <!-- اضاءات -->
                        </a></li>

                    @if ($mzaya)
                        <li id="menu-item-23"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 nav-item"><a
                                href="../../../#mz" class="nav-link">{{ __('main_page.a3') }} </li>

                    @endif



                    <li id="menu-item-24"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a
                            href="{{ route('events') }}" class="nav-link"></a></li>
                    <li id="menu-item-24"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a
                            href="../../../#ques" class="nav-link">{{ __('main_page.a4') }}</a></li>


                            <li id="menu-item-24"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a
                            href="../../#_" class="nav-link">{{ __('main_page.a8') }}</a></li>



                                <li id="menu-item-24"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a
                                href="{{route('events')}}" class="nav-link"> {{ __('main_page.a9') }}</a></li>


                    <li id="menu-item-24"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a
                            href="{{ route('contact') }}" class="nav-link">{{ __('main_page.a5') }}</a></li>

                    <li id="menu-item-23"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 nav-item"><a
                            href="#" class="nav-link"> </li>





                    <li id="menu-item-24" class=""><a
                            href=" #"><a
                            href="http://janeyya.com/Sand/NewSanad/public/en"> <strong style="font-size: 20px"></strong>
                        </a></a></li>
                    <li></li>
                    <li id="menu-item-24" class=""><a
                            href=" #"><a
                            href="http://janeyya.com/Sand/NewSanad/public/ar"> <strong style="font-size: 20px"></strong>
                        </a></a></li>


                </ul>
                <ul>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li id="menu-item-24"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 nav-item"> <a
                                rel="alternate" class="nav-link" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}

                            </a>
                        </li>
                    @endforeach
                </ul>
                <style>
                    .nav-link:hover {
                        color: #FF6700;

                    }

                </style>
                <!-- search button -->
                <div class="search-right ml-lg-3 HeaderSearch">

                    <form action="{{ route('search') }}" method="GET" class="search-box position-relative">
                        @csrf
                        <div class="input-search">
                            <input type="search" placeholder="{{ __('main_page.a124') }}" name="search"
                                value="{{ isset($search_word) ? $search_word : '' }}" required required="required"
                                class="search-popup">
                        </div>
                        <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- //search button -->
            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position text-center DarkandLight">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>

                            </div>

                        </label>
                    </div>

                </nav>

            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
    </section>
</header>
