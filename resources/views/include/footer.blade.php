


    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container py-4 IndustriesFooter">
                <div class="row footer-top-29">

                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5 rt">

                        <div class="footer-logo mb-3">
                            <a class="footer-brand-logo" href="../../">
                                {{ __('main_page.a26') }}</a>
                        </div>

                        <p>  {{ __('main_page.a143') }}</p>

                        <div class="main-social-footer-29 mt-4" hidden>
                            <a href="https://www.facebook.com/w3layouts/" class="facebook"><span
                                    class="fab fa-facebook-f"></span></a>

                            <a href="https://twitter.com/W3layouts" class="twitter"><span
                                    class="fab fa-twitter"></span></a>

                            <a href="https://instagram.com/company/w3layouts" class="instagram"><span
                                    class="fab fa-instagram"></span></a>

                            <a href="https://in.linkedin.com/company/w3layouts" class="linkedin"><span
                                    class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5 rt">
                        <div id="meta-4" class="widget_meta">
                            <h6 class="footer-title-29">  {{ __('main_page.a142') }}</h6>
                            <ul>
                                <li><a href="../../#">  {{ __('main_page.a144') }}</a></li>
                                <li><a href="../../#_">  {{ __('main_page.a145') }}</a></li>
                                <li><a  href="{{ route('contact') }}">  {{ __('main_page.a146') }}</a></li>

                                <li><a href="../../#ques">  {{ __('main_page.a147') }}</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5 pl-lg-4 rt">
                        <div id="categories-4" class="widget_categories">
                            <h6 class="footer-title-29">  {{ __('main_page.a139') }}</h6>
                            <ul>
                                <li class="cat-item cat-item-2"><a
                                        href="{{route('login')}}">  {{ __('main_page.a148') }}</a>
                                </li>
                                <li class="cat-item cat-item-3"><a
                                        href="../../../">  {{ __('main_page.a1') }}</a>
                                </li>
                                <li class="cat-item cat-item-4"><a
                                        href="../../#_">  {{ __('main_page.a8') }}</a>
                                </li>
                                <li class="cat-item cat-item-5"><a
                                   href="../../#__">  {{ __('main_page.a150') }}</a>
                            </li>
                            <li class="cat-item cat-item-5"><a
                               href="{{route('lights')}}">  {{ __('main_page.a2') }}</a>
                        </li>
                        <li class="cat-item cat-item-5"><a
                            href="{{route('events')}}">  {{ __('main_page.a9') }}</a>
                    </li>
                            </ul>

                        </div>
                    </div>

                    <div
                        class="col-lg-4 col-md-6 col-sm-7 FooterNewsletter footer-list-29 footer-4 mt-lg-0 mt-5 pl-lg-5 rt">
                        <h6 class="footer-title-29"> {{ __('main_page.a141') }} </h6>
                        <div>
                            <form action="{{ route('mail') }}" method="POST" class="subscribe d-flex align-items-center">
                                @csrf
                            <input type="email" name="email" placeholder=" {{ __('main_page.a39') }}" required id="email">
                            <button id="mail_btn"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            <center>
                            </form>


                            </center>



                        </div>

                        <h6 class="footer-title-29 pt-2 mt-4 mb-3 "> {{ __('main_page.a146') }} </h6>
                        <a href="tel: +966 50 272 9394">
                           <span   style="text-align: left !important;">00966-50-272-9394</span> </a>


                    </div>

                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="w3l-copyright">
            <div class="container">
                <div class="row bottom-copies align-items-center">
                    <p class="col-lg-8 CopyRights copy-footer-29">&copy; {{ date('Y') }} SAND All Rights Reserved
                       <a href="https://w3layouts.com/">
                             </a>
                    </p>

                    <div class="col-lg-4 footer-list-29 footer-copy-list">
                        <div id="archives-5" class="widget_archive">
                            <h6 class="footer-title-29 d-none">Archives</h6>
                            <ul>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //copyright -->

    </footer>
